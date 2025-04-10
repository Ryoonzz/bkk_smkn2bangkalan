<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Alumni;
use App\Models\Lowongan;

class DashboardAlumniController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Ambil user yang sedang login
        $alumni = $user->alumni; // Ambil data alumni berdasarkan user_id

        return view('dashboardAlumni.index', compact('user', 'alumni'));
    }

    public function lowongan()
    {
        $user = auth()->user();
        $alumni = Alumni::where('user_id', $user->id)->first();

        $query = Lowongan::query();

        // Filter berdasarkan penempatan
        if (request('penempatan')) {
            $query->where('penempatan', request('penempatan'));
        }

        // Filter berdasarkan jurusan
        if (request('jurusan')) {
            $query->where('jurusan', request('jurusan'));
        }

        // Filter berdasarkan pencarian
        if (request('cari')) {
            $query->where(function ($q) {
                $q->where('nama_perusahaan', 'like', '%' . request('cari') . '%')
                    ->orWhere('posisi', 'like', '%' . request('cari') . '%')
                    ->orWhere('deskripsi', 'like', '%' . request('cari') . '%');
            });
        }

        $lowongan = $query->paginate(10);

        return view('DashboardAlumni.lowongan', compact('alumni', 'lowongan'));
    }
}
