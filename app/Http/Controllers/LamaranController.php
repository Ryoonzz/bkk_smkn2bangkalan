<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lamaran;
use App\Models\Lowongan;
use Illuminate\Support\Facades\Auth;

class LamaranController extends Controller
{
    public function store($lowongan_id)
    {
        $user = Auth::user();

        if (!$user->alumni) {
            return redirect()->back()->with('error', 'Hanya alumni yang bisa melamar.');
        }

        Lamaran::create([
            'alumni_id' => $user->alumni->id,
            'lowongan_id' => $lowongan_id,
        ]);

        return redirect()->back()->with('sukses', 'Lamaran berhasil dikirim.');
    }

    public function batal($lowongan_id)
    {
        $user = Auth::user();

        if (!$user->alumni) {
            return redirect()->back()->with('error', 'Hanya alumni yang bisa membatalkan lamaran.');
        }

        $lamaran = Lamaran::where('alumni_id', $user->alumni->id)
            ->where('lowongan_id', $lowongan_id)
            ->first();

        if ($lamaran) {
            $lamaran->delete();
            return redirect()->back()->with('sukses', 'Lamaran berhasil dibatalkan.');
        }

        return redirect()->back()->with('error', 'Lamaran tidak ditemukan.');
    }
}
