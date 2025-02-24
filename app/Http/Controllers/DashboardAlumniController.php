<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardAlumniController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Ambil user yang sedang login
        $alumni = $user->alumni; // Ambil data alumni berdasarkan user_id

        return view('dashboardAlumni.index', compact('user', 'alumni'));
    }
}
