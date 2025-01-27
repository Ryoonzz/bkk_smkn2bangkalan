<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lowongan;

class LowonganController extends Controller
{
    public function index()
    {
        $lowongan = Lowongan::all();
        return view('bkk.lowongan', compact('lowongan'));
    }

    public function show($id)
    {
        $lowongan = Lowongan::findOrFail($id);
        return view('bkk.show-lowongan', compact('lowongan'));
    }
}
