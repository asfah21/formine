<?php

namespace App\Http\Controllers;

use App\Models\P5M;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;

class P5MController extends Controller
{
    public function index()
    {
        $p5ms = P5M::all();
        return view('p5m.index', compact('p5ms'));
    }

    public function create()
    {
        return view('p5m.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_karyawan' => 'required|string',
            'jabatan' => 'required|string',
            'tanggal' => 'required|date',
            'jam' => 'required',
            'pemateri' => 'required|string',
            'departemen' => 'required|string',
            'lokasi' => 'required|string',
            'judul_materi' => 'required|string',
            'agenda' => 'required|string',
            'jam_tidur' => 'required|integer',
            'keterangan_sehat' => 'required|boolean',
            'jumlah_hadir' => 'required|integer',
            'jumlah_karyawan' => 'required|integer',
            'foto' => 'nullable|image|max:2048' // Max file sebelum kompresi
        ]);

        $path = null;

        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $compressedImage = Image::make($image)->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode('jpg', 80); // Kompresi dengan kualitas 80%

            // Simpan di storage Laravel
            Storage::put("public/fotos/{$filename}", $compressedImage);

            $path = "fotos/{$filename}";
        }

        P5M::create([
            'nama_karyawan' => $request->nama_karyawan,
            'jabatan' => $request->jabatan,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'pemateri' => $request->pemateri,
            'departemen' => $request->departemen,
            'lokasi' => $request->lokasi,
            'judul_materi' => $request->judul_materi,
            'agenda' => $request->agenda,
            'jam_tidur' => $request->jam_tidur,
            'keterangan_sehat' => $request->keterangan_sehat,
            'jumlah_hadir' => $request->jumlah_hadir,
            'jumlah_karyawan' => $request->jumlah_karyawan,
            'foto' => $path
        ]);

        return redirect()->route('p5m.index')->with('success', 'Data berhasil disimpan');
    }

    public function show(P5M $p5m)
    {
        return view('p5m.show', compact('p5m'));
    }
}
