<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $lowongan = Lowongan::orderBy('created_at', 'desc')->take(6)->get();
        return view('bkk.index', compact('lowongan'));
    }
}
