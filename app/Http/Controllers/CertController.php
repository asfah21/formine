<?php

namespace App\Http\Controllers;

use App\Models\Cert;
use App\Models\SesiCert;
use Illuminate\Http\Request;

class CertController extends Controller
{
    // Menampilkan halaman cert berdasarkan unique_code
    public function form($unique_code)
    {
        $sesi = SesiCert::where('unique_code', $unique_code)->firstOrFail();

        // Cek apakah sesi masih aktif
        if (!$sesi->isActive()) {
            return redirect()->route('cert.index')->with('error', 'Sesi Daftar Hadir Telah Berakhir');
        }

        return view('cert.sertifikat', compact('sesi'));
    }

    public function submitte(Request $request, $unique_code)
    {
        $sesi = SesiCert::where('unique_code', $unique_code)->firstOrFail();

        // Cek apakah sesi masih aktif
        if (!$sesi->isActive()) {
            return redirect()->route('cert.index')->with('error', 'Sesi Daftar Hadir Telah Berakhir');
        }

        $request->validate([
            'name' => 'required|string|max:255',
        ]);


        Cert::create([
            'sesi_cert_id' => $sesi->id,
            'name' => $request->name,
            'jabatan' =>$request->jabatan,
            'nilai' =>$request->nilai,
        ]);

        return redirect()->route('cert.index')->with('success', 'cert Berhasil Disimpan');
    }

    public function submit(Request $request, $unique_code)
    {
        $sesi = SesiCert::where('unique_code', $unique_code)->firstOrFail();

        if (!$sesi->isActive()) {
            return redirect()->route('cert.index')->with('error', 'Sesi Daftar Hadir Telah Berakhir');
        }

        $request->validate([
            'users.*.name' => 'required|string|max:255',
            'users.*.jabatan' => 'required|string|max:255',
            'users.*.nilai' => 'required|string|max:100',
        ]);

        foreach ($request->users as $user) {
            Cert::create([
                'sesi_cert_id' => $sesi->id,
                'name' => $user['name'],
                'jabatan' => $user['jabatan'],
                'nilai' => $user['nilai'],
            ]);
        }

        return redirect()->route('cert.index')->with('success', 'Semua peserta berhasil disimpan!');
    }

}
