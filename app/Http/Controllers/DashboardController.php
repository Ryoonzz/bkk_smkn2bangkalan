<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use App\Models\Perusahaan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $lowongan = Lowongan::all();
        $perusahaan = Perusahaan::all();
        return view('dashboard.index', compact('lowongan', 'perusahaan'));
    }
}
