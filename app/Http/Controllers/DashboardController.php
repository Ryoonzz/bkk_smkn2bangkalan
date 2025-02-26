<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use App\Models\Perusahaan;
use App\Models\Lamaran;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $lowongan = Lowongan::all();
        $perusahaan = Perusahaan::all();
        return view('dashboard.index', compact('lowongan', 'perusahaan'));
    }

    public function daftarPelamar(Request $request)
    {
        if ($request->has('cari')) {
            $lamaran = Lamaran::whereHas('alumni', function ($query) use ($request) {
                $query->where('nama', 'LIKE', '%' . $request->cari . '%');
            })
                ->orWhereHas('lowongan', function ($query) use ($request) {
                    $query->where('judul', 'LIKE', '%' . $request->cari . '%')
                        ->orWhere('perusahaan', 'LIKE', '%' . $request->cari . '%');
                })
                ->get();
        } else {
            $lamaran = Lamaran::all();
        }
        return view('dashboard.lamaran', compact('lamaran'));
    }
}
