<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lamaran;
use App\Models\Lowongan;
use Illuminate\Support\Facades\Auth;
use App\Models\RiwayatLamaran;
use Carbon\Carbon;

class LamaranController extends Controller
{
    public function store($lowongan_id)
    {
        $user = Auth::user();

        if (!$user->alumni) {
            return redirect()->back()->with('error', 'Hanya alumni yang bisa melamar.');
        }

        $lowongan = Lowongan::findOrFail($lowongan_id);

        // Cek riwayat aksi
        $riwayat = RiwayatLamaran::where('alumni_id', $user->alumni->id)
            ->where('lowongan_id', $lowongan_id)
            ->first();

        if ($riwayat) {
            // Cek batasan aksi
            if ($riwayat->jumlah_aksi >= 3) {
                $waktuTunggu = Carbon::parse($riwayat->terakhir_aksi)->addHours(24);
                if (now()->lt($waktuTunggu)) {
                    $sisaWaktu = $waktuTunggu->diffForHumans(now());
                    return redirect()->back()->with('error', 'Kamu sudah mencapai batas maksimal aksi lamar-batal. Silakan coba lagi ' . $sisaWaktu);
                } else {
                    // Reset jumlah aksi kalo sudah melewati 24 jam
                    $riwayat->jumlah_aksi = 0;
                }
            }

            // Update jumlah aksi dan waktu terakhir
            $riwayat->jumlah_aksi += 1;
            $riwayat->terakhir_aksi = now();
            $riwayat->save();
        } else {
            // Buat riwayat baru
            RiwayatLamaran::create([
                'alumni_id' => $user->alumni->id,
                'lowongan_id' => $lowongan_id,
                'jumlah_aksi' => 1,
                'terakhir_aksi' => now()
            ]);
        }

        // Buat lamaran baru
        Lamaran::create([
            'alumni_id' => $user->alumni->id,
            'lowongan_id' => $lowongan_id
        ]);

        return redirect()->back()->with('success', 'Kamu berhasil mengirim lamaran di ' . $lowongan->judul);
    }

    public function batal($lowongan_id)
    {
        $user = Auth::user();

        if (!$user->alumni) {
            return redirect()->back()->with('error', 'Hanya alumni yang bisa membatalkan lamaran.');
        }

        $lowongan = Lowongan::findOrFail($lowongan_id);

        // Cek riwayat aksi
        $riwayat = RiwayatLamaran::where('alumni_id', $user->alumni->id)
            ->where('lowongan_id', $lowongan_id)
            ->first();

        if ($riwayat) {
            // Cek batasan aksi
            if ($riwayat->jumlah_aksi >= 3) {
                $waktuTunggu = Carbon::parse($riwayat->terakhir_aksi)->addHours(24);
                if (now()->lt($waktuTunggu)) {
                    $sisaWaktu = $waktuTunggu->diffForHumans(now());
                    return redirect()->back()->with('error', 'Anda telah mencapai batas maksimal aksi lamar-batal. Silakan coba lagi ' . $sisaWaktu);
                } else {
                    // Reset jumlah aksi kalo sudah melewati 24 jam
                    $riwayat->jumlah_aksi = 0;
                }
            }

            // Update jumlah aksi dan waktu terakhir
            $riwayat->jumlah_aksi += 1;
            $riwayat->terakhir_aksi = now();
            $riwayat->save();
        } else {
            // Buat riwayat baru
            RiwayatLamaran::create([
                'alumni_id' => $user->alumni->id,
                'lowongan_id' => $lowongan_id,
                'jumlah_aksi' => 1,
                'terakhir_aksi' => now()
            ]);
        }

        // Hapus lamaran
        $lamaran = Lamaran::where('alumni_id', $user->alumni->id)
            ->where('lowongan_id', $lowongan_id)
            ->first();

        if ($lamaran) {
            $lamaran->delete();
            return redirect()->back()->with('success', 'Kamu berhasil membatalkan lamaran di ' . $lowongan->judul);
        }

        return redirect()->back()->with('error', 'Lamaran tidak ditemukan.');
    }
}
