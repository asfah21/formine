<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absensi;
use App\Models\SesiAbsensi;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class AbsensiController extends Controller
{
    // Menampilkan halaman absensi berdasarkan unique_code
    public function form($unique_code)
    {
        $sesi = SesiAbsensi::where('unique_code', $unique_code)->firstOrFail();

        // Cek apakah sesi masih aktif
        if (!$sesi->isActive()) {
            return redirect()->route('absensi.index')->with('error', 'Sesi Daftar Hadir Telah Berakhir');
        }

        return view('absensi.absensi', compact('sesi'));
    }

    public function submit(Request $request, $unique_code)
    {
        $sesi = SesiAbsensi::where('unique_code', $unique_code)->firstOrFail();

        // Cek apakah sesi masih aktif
        if (!$sesi->isActive()) {
            return redirect()->route('absensi.index')->with('error', 'Sesi Daftar Hadir Telah Berakhir');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'required|string', // Base64 string
        ]);

        // Konversi Base64 menjadi file gambar
        $imageData = $request->photo;
        $imageParts = explode(";base64,", $imageData);
        if (count($imageParts) != 2) {
            return redirect()->route('absensi.index')->with('error', 'Format foto tidak valid');
        }

        $imageBase64 = base64_decode($imageParts[1]);

        $fileName = uniqid() . '.png'; // Gunakan variabel yang sama
        $filePath = 'storage/selfies/' . $fileName;

        // $fileName = 'selfies/' . uniqid() . '.png';
        // $filePath = storage_path('app/public/' . $fileName);

        file_put_contents($filePath, $imageBase64);

        Absensi::create([
            'sesi_absensi_id' => $sesi->id,
            'name' => $request->name,
            'photo' => $fileName,
            'jabatan' =>$request->jabatan,
            'jam_tidur' =>$request->jam_tidur,
            'sehat'=>$request->sehat
        ]);

        return redirect()->route('absensi.index', $sesi->unique_code)->with('success', 'Absensi Berhasil Disimpan');
    }

}
