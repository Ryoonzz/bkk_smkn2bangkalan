<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Alumni;

class AlumniController extends Controller
{
    public function dashboard(Request $request): View
    {
        if ($request->has('cari')) {
            $alumni = Alumni::where('nama', 'LIKE', '%' . $request->cari . '%')
                ->orWhere('jurusan', 'LIKE', '%' . $request->cari . '%')
                ->orWhere('tahun_lulus', 'LIKE', '%' . $request->cari . '%')
                ->get();
        } else {
            $alumni = Alumni::all();
        }
        return view('dashboard.alumni', compact('alumni'));
    }

    public function create(): View
    {
        return view('dashboard.tambah-alumni');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama' => 'required|string',
            'nisn' => 'required|string',
            'tanggal_lahir' => 'required|string',
            'no_hp' => 'required|string',
            'alamat' => 'required|string',
            'jurusan' => 'required|string',
            'tahun_lulus' => 'required|integer',
        ]);

        //insert ke table user
        $user = new \App\Models\User;
        $user->role = 'alumni';
        $user->name = $request->nama;
        $user->username = $request->nisn;
        $user->password = bcrypt(str_replace('-', '', $request->tanggal_lahir));
        $user->remember_token = Str::random(60);
        $user->save();

        //insert ke table alumni
        $request->request->add(['user_id' => $user->id]);
        $alumni = Alumni::create($request->all());

        return redirect()->route('alumni.dashboard')->with('sukses', 'Data berhasil disimpan!');
    }

    public function edit($id): View
    {
        $alumni = Alumni::findOrFail($id);
        return view('dashboard.edit-alumni', compact('alumni'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'nama' => 'required|string',
            'tanggal_lahir' => 'required|string',
            'no_hp' => 'required|string',
            'alamat' => 'required|string',
            'jurusan' => 'required|string',
            'tahun_lulus' => 'required|integer',
        ]);

        $alumni = Alumni::findOrFail($id);
        $alumni->update($request->all());

        return redirect()->route('alumni.dashboard')->with('sukses', 'Data berhasil diperbarui!');
    }

    public function destroy($id): RedirectResponse
    {
        $alumni = Alumni::findOrFail($id);

        if ($alumni->user_id) {
            $user = \App\Models\User::find($alumni->user_id);
            if ($user) {
                $user->delete();
            }
        }

        $alumni->delete();

        return redirect()->route('alumni.dashboard')->with('sukses', 'Data berhasil dihapus!');
    }
}
