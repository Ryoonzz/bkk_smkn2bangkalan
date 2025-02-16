<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardAlumniController extends Controller
{
    public function index()
    {
        return view('dashboardAlumni.index');
    }
}
