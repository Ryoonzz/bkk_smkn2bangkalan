<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Perusahaan;

class PerusahaanController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $perusahaan = Perusahaan::where('nama', 'LIKE', '%' . $request->cari . '%')
                ->orWhere('alamat', 'LIKE', '%' . $request->cari . '%')
                ->orWhere('kota', 'LIKE', '%' . $request->cari . '%')
                ->orWhere('standar', 'LIKE', '%' . $request->cari . '%')
                ->paginate(9);
        } else {
            $perusahaan = Perusahaan::paginate(9);
        }
        return view('bkk.perusahaan', compact('perusahaan'));
    }

    public function show($id)
    {
        $perusahaan = Perusahaan::findOrFail($id);
        $kerjasamaList = explode(', ', $perusahaan->kerjasama);
        return view('dashboard.show-perusahaan', compact('perusahaan', 'kerjasamaList'));
    }

    public function dashboard(Request $request): View
    {
        if ($request->has('cari')) {
            $perusahaan = Perusahaan::where('nama', 'LIKE', '%' . $request->cari . '%')
                ->orWhere('alamat', 'LIKE', '%' . $request->cari . '%')
                ->orWhere('kota', 'LIKE', '%' . $request->cari . '%')
                ->orWhere('standar', 'LIKE', '%' . $request->cari . '%')
                ->get();
        } else {
            $perusahaan = Perusahaan::all();
        }
        return view('dashboard.perusahaan', compact('perusahaan'));
    }

    public function create(): View
    {
        return view('dashboard.tambah-perusahaan');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kode' => 'required|string',
            'alamat' => 'required|string',
            'kota' => 'required|string',
            'tahun_gabung' => 'required|integer',
            'standar' => 'required|string',
            'mou' => 'required|string',
            'umkm' => 'required|string',
            'kerjasama' => 'nullable|array', //dikirim jadi array
        ]);

        Perusahaan::create([
            'nama' => $request->nama,
            'kode' => $request->kode,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'tahun_gabung' => $request->tahun_gabung,
            'standar' => $request->standar,
            'mou' => $request->mou,
            'umkm' => $request->umkm,
            'kerjasama' => $request->kerjasama ? implode(', ', $request->kerjasama) : '',
        ]);

        return redirect()->route('perusahaan.dashboard')->with('sukses', 'Data berhasil disimpan!');
    }

    public function edit($id): View
    {
        $perusahaan = Perusahaan::findOrFail($id);
        $perusahaan->kerjasama = explode(', ', $perusahaan->kerjasama);
        return view('dashboard.edit-perusahaan', compact('perusahaan'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kode' => 'required|string',
            'alamat' => 'required|string',
            'kota' => 'required|string',
            'tahun_gabung' => 'required|integer',
            'standar' => 'required|string',
            'mou' => 'required|string',
            'umkm' => 'required|string',
            'kerjasama' => 'nullable|array',
        ]);

        $perusahaan = Perusahaan::findOrFail($id);
        $perusahaan->update([
            'nama' => $request->nama,
            'kode' => $request->kode,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'tahun_gabung' => $request->tahun_gabung,
            'standar' => $request->standar,
            'mou' => $request->mou,
            'umkm' => $request->umkm,
            'kerjasama' => $request->kerjasama ? implode(', ', $request->kerjasama) : '',
        ]);

        return redirect()->route('perusahaan.dashboard')->with('sukses', 'Data berhasil diperbarui!');
    }

    public function destroy($id): RedirectResponse
    {
        $perusahaan = Perusahaan::findOrFail($id);
        $perusahaan->delete();

        return redirect()->route('perusahaan.dashboard')->with('sukses', 'Data berhasil dihapus!');
    }
}
