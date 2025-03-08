<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::latest()->paginate(5);
        return view('bkk.berita', compact('berita'));
    }

    public function dashboard(Request $request): View
    {
        if ($request->has('cari')) {
            $berita = Berita::where('judul', 'LIKE', '%' . $request->cari . '%')
                ->orderBy('created_at', 'desc')
                ->paginate(10);
        } else {
            $berita = Berita::orderBy('created_at', 'desc')->paginate(10);
        }
        return view('dashboard.berita', compact('berita'));
    }

    public function create()
    {
        return view('dashboard.tambah-berita');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
        ]);

        // Simpan gambar ke public/storage/berita
        $gambar = $request->file('gambar');
        $gambarName = time() . '.' . $gambar->extension();
        $gambar->move(public_path('storage/berita'), $gambarName);

        Berita::create([
            'judul' => $request->judul,
            'gambar' => 'storage/berita/' . $gambarName,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('berita.dashboard')->with('success', 'Berita berhasil ditambahkan!');
    }

    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        return view('bkk.detail-berita', compact('berita'));
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('dashboard.edit-berita', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);

        $request->validate([
            'judul' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required',
            'tanggal' => 'required|date',
        ]);

        $gambarPath = $berita->gambar; // Pakai gambar lama kalo gak diubah

        if ($request->hasFile('gambar')) {
            if (file_exists(public_path($berita->gambar))) {
                unlink(public_path($berita->gambar));
            }

            $gambar = $request->file('gambar');
            $gambarName = time() . '.' . $gambar->extension();
            $gambar->move(public_path('storage/berita'), $gambarName);
            $gambarPath = 'storage/berita/' . $gambarName;
        }

        $berita->update([
            'judul' => $request->judul,
            'gambar' => $gambarPath,
            'deskripsi' => $request->deskripsi,
            'tanggal' => $request->tanggal,
        ]);

        return redirect()->route('berita.dashboard')->with('success', 'Berita berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        if (file_exists(public_path($berita->gambar))) {
            unlink(public_path($berita->gambar)); // Hapus gambar dari folder
        }

        $berita->delete();
        return redirect()->route('berita.dashboard')->with('success', 'Berita berhasil dihapus!');
    }
}
