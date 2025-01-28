<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lowongan;

class LowonganController extends Controller
{
    // public function index()
    // {
    //     $lowongan = Lowongan::all();
    //     return view('bkk.lowongan', compact('lowongan'));
    // }

    public function index(Request $request)
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
        return view('bkk.lowongan', compact('lowongan'));
    }

    public function show($id)
    {
        $lowongan = Lowongan::findOrFail($id);
        return view('bkk.show-lowongan', compact('lowongan'));
    }

    // public function cari(Request $request)
    // {
    //     $query = $request->input('q');

    //     if ($query) {
    //         $lowongan = Lowongan::where('judul', 'LIKE', "%$query%")
    //             ->orWhere('perusahaan', 'LIKE', "%$query%")
    //             ->orWhere('posisi', 'LIKE', "%$query%")
    //             ->orWhere('penempatan', 'LIKE', "%$query%")
    //             ->get();
    //     } else {
    //         $lowongan = collect(); // Koleksi kosong jika tidak ada query
    //     }

    //     return view('search', compact('lowongan'));
    // }
}
