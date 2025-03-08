<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::latest()->paginate(6);
        return view('bkk.galeri', compact('galeri'));
    }

    public function dashboard(Request $request): View
    {
        if ($request->has('cari')) {
            $galeri = Galeri::where('judul', 'LIKE', '%' . $request->cari . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(10);
        } else {
            $galeri = Galeri::orderBy('created_at', 'desc')->paginate(10);
        }
        return view('dashboard.galeri', compact('galeri'));
    }

    public function create()
    {
        return view('dashboard.tambah-galeri');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Simpan gambar ke public/storage/galeri
        $gambar = $request->file('gambar');
        $gambarName = time() . '.' . $gambar->extension();
        $gambar->move(public_path('storage/galeri'), $gambarName);

        Galeri::create([
            'judul' => $request->judul,
            'gambar' => 'storage/galeri/' . $gambarName,
        ]);

        return redirect()->route('galeri.dashboard')->with('success', 'Gambar berhasil ditambahkan ke galeri!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('dashboard.edit-galeri', compact('galeri'));
    }

    public function update(Request $request, $id)
    {
        $galeri = Galeri::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $gambarPath = $galeri->gambar; // Pakai gambar lama kalo gak diubah

        if ($request->hasFile('gambar')) {
            if (file_exists(public_path($galeri->gambar))) {
                unlink(public_path($galeri->gambar));
            }

            $gambar = $request->file('gambar');
            $gambarName = time() . '.' . $gambar->extension();
            $gambar->move(public_path('storage/galeri'), $gambarName);
            $gambarPath = 'storage/galeri/' . $gambarName;
        }

        $galeri->update([
            'judul' => $request->judul,
            'gambar' => $gambarPath,
        ]);

        return redirect()->route('galeri.dashboard')->with('success', 'Galeri berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);

        if (file_exists(public_path($galeri->gambar))) {
            unlink(public_path($galeri->gambar)); // Hapus gambar dari folder
        }

        $galeri->delete();
        return redirect()->route('galeri.dashboard')->with('success', 'Gambar berhasil dihapus dari galeri!');
    }
}
