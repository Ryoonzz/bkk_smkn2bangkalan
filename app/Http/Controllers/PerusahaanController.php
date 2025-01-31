<?php

namespace App\Http\Controllers;

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
                ->get();
        } else {
            $perusahaan = Perusahaan::all();
        }
        return view('bkk.perusahaan', compact('perusahaan'));
    }

    public function show($id)
    {
        $perusahaan = Perusahaan::findOrFail($id);
        return view('bkk.show-perusahaan', compact('perusahaan'));
    }
}
