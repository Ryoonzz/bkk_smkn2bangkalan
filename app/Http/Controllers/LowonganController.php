<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Lowongan;

class LowonganController extends Controller
{

    public function index(Request $request): View
    {
        if ($request->has('cari')) {
            $lowongan = Lowongan::where('judul', 'LIKE', '%' . $request->cari . '%')
                ->orWhere('perusahaan', 'LIKE', '%' . $request->cari . '%')
                ->orWhere('posisi', 'LIKE', '%' . $request->cari . '%')
                ->orWhere('penempatan', 'LIKE', '%' . $request->cari . '%')
                ->paginate(9);
        } else {
            $lowongan = Lowongan::paginate(9);
        }
        return view('bkk.lowongan', compact('lowongan'));
    }

    public function show($id): View
    {
        $lowongan = Lowongan::findOrFail($id);
        return view('dashboard.show-lowongan', compact('lowongan'));
    }

    public function dashboard(Request $request): View
    {
        if ($request->has('cari')) {
            $lowongan = Lowongan::where('judul', 'LIKE', '%' . $request->cari . '%')
                ->orWhere('perusahaan', 'LIKE', '%' . $request->cari . '%')
                ->orWhere('posisi', 'LIKE', '%' . $request->cari . '%')
                ->orWhere('penempatan', 'LIKE', '%' . $request->cari . '%')
                ->get();
        } else {
            $lowongan = Lowongan::all();
        }
        return view('dashboard.lowongan', compact('lowongan'));
    }

    public function dashboardAlumni(Request $request): View
    {
        if ($request->has('cari')) {
            $lowongan = Lowongan::where('judul', 'LIKE', '%' . $request->cari . '%')
                ->orWhere('perusahaan', 'LIKE', '%' . $request->cari . '%')
                ->orWhere('posisi', 'LIKE', '%' . $request->cari . '%')
                ->orWhere('penempatan', 'LIKE', '%' . $request->cari . '%')
                ->get();
        } else {
            $lowongan = Lowongan::all();
        }
        return view('dashboardAlumni.lowongan', compact('lowongan'));
    }

    public function create(): View
    {
        return view('dashboard.tambah-lowongan');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal' => 'required|string',
            'perusahaan' => 'required|string',
            'deskripsi' => 'required|string',
            'posisi' => 'required|string',
            'penempatan' => 'required|string',
            'gaji' => 'required|integer',
        ]);

        Lowongan::create([
            'judul' => $request->judul,
            'tanggal' => $request->tanggal,
            'perusahaan' => $request->perusahaan,
            'deskripsi' => $request->deskripsi,
            'posisi' => $request->posisi,
            'penempatan' => $request->penempatan,
            'gaji' => $request->gaji,
        ]);

        return redirect()->route('lowongan.dashboard')->with('sukses', 'Data berhasil disimpan!');
    }

    public function edit($id): View
    {
        $lowongan = Lowongan::findOrFail($id);
        return view('dashboard.edit-lowongan', compact('lowongan'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal' => 'required|string',
            'perusahaan' => 'required|string',
            'deskripsi' => 'required|string',
            'posisi' => 'required|string',
            'penempatan' => 'required|string',
            'gaji' => 'required|integer',
        ]);

        $lowongan = Lowongan::findOrFail($id);
        $lowongan->update([
            'judul' => $request->judul,
            'tanggal' => $request->tanggal,
            'perusahaan' => $request->perusahaan,
            'deskripsi' => $request->deskripsi,
            'posisi' => $request->posisi,
            'penempatan' => $request->penempatan,
            'gaji' => $request->gaji,
        ]);

        return redirect()->route('lowongan.dashboard')->with('sukses', 'Data berhasil diperbarui!');
    }

    public function destroy($id): RedirectResponse
    {
        $lowongan = Lowongan::findOrFail($id);
        $lowongan->delete();

        return redirect()->route('lowongan.dashboard')->with('sukses', 'Data berhasil dihapus!');
    }

}
