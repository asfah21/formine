<?php

namespace App\Http\Controllers;

use App\Models\Cert;
use App\Models\SesiCert;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

class SesiCertController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $departments = $request->input('departments', []);

        // Query dasar dengan cert count
        $query = SesiCert::withCount('cert');

        // Filter pencarian
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('judul', 'like', '%' . $search . '%')
                    ->orWhere('end_time', 'like', '%' . $search . '%');
            });
        }

        // Filter berdasarkan departemen
        if (!empty($departments)) {
            $query->whereIn('department', $departments);
        }

        // Urutkan data terbaru & paginasi
        $sesiCert = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('cert.index', compact('sesiCert', 'search', 'departments'));
    }

    // Form membuat sesi cert
    public function create()
    {
        return view('cert.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'duration' => 'required|integer|min:1|max:72', // Pastikan ini angka
            'site_mgr' => 'required|string|max:255',
        ]);

        $duration = (int) $request->duration; // Konversi ke integer
        $formattedDate = Carbon::now()->format('d-m-Y'); // Format tanggal: 20-03-2025

        SesiCert::create([
            'name' => $request->name,
            'unique_code' => Str::random(10),
            'duration' => $duration, // Pastikan integer
            // 'judul' => $request->judul,
            'lokasi' => $request->lokasi,
            'agenda' => $request->agenda,

            'instansi' => $request->instansi,
            'durasi'=> $request->durasi,
            'mulai'=> $request->mulai,
            'berakhir' => $request->berakhir,

            'site_mgr' => $request->site_mgr,

        ]);

        return redirect()->route('cert.index')->with('success', 'Sesi cert Berhasil Dibuat');
    }

    public function show(Request $request, $id)
    {
        $search = $request->input('search');
        $sesi = SesiCert::findOrFail($id);

        // Query dasar
        $query = Cert::where('sesi_cert_id', $sesi->id);

        // Filter pencarian
        if ($search) {
            $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('created_at', 'like', '%' . $search . '%');
        }

        // Urutkan data terbaru & paginasi
        $certs = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('cert.show', compact('sesi', 'certs', 'search'));
    }

    // public function cert($id, $name)
    // {
    //     // Ambil satu data berdasarkan sesi_cert_id dan name
    //     $sesi = Cert::where('id', $id)->where('name', $name)->firstOrFail(); // Pastikan ada hasil
    //     $certi = $sesi->sesi;

    //     return view('cert.detail', compact('sesi', 'certi'));
    // }

    public function cert($id, $name)
    {
        // Ambil satu data berdasarkan sesi_cert_id dan name
        $sesi = Cert::where('id', $id)->where('name', $name)->firstOrFail(); // Pastikan ada hasil
        $certi = $sesi->sesi;

        // Hitung durasi
        $start = Carbon::parse($certi->mulai);
        $end = Carbon::parse($certi->berakhir);
        $diff = $start->diff($end);

        $bulan = $diff->m + ($diff->y * 12);
        $hari = $diff->d;

        $angkaKeKata = [
            0 => 'nol', 1 => 'satu', 2 => 'dua', 3 => 'tiga', 4 => 'empat',
            5 => 'lima', 6 => 'enam', 7 => 'tujuh', 8 => 'delapan', 9 => 'sembilan',
            10 => 'sepuluh', 11 => 'sebelas', 12 => 'dua belas', 13 => 'tiga belas',
            14 => 'empat belas', 15 => 'lima belas', 16 => 'enam belas', 17 => 'tujuh belas',
            18 => 'delapan belas', 19 => 'sembilan belas', 20 => 'dua puluh', 21 => 'dua puluh satu',
            22 => 'dua puluh dua', 23 => 'dua puluh tiga', 24 => 'dua puluh empat', 25 => 'dua puluh lima',
            26 => 'dua puluh enam', 27 => 'dua puluh tujuh', 28 => 'dua puluh delapan', 29 => 'dua puluh sembilan',
            30 => 'tiga puluh', 31 => 'tiga puluh satu'
        ];

        $durasi = '';
        if ($bulan > 0) {
            $durasi .= "$bulan ({$angkaKeKata[$bulan]}) bulan ";
        }
        if ($hari > 0) {
            $durasi .= "$hari ({$angkaKeKata[$hari]}) hari";
        }

        return view('cert.detail', compact('sesi', 'certi', 'durasi'));
    }

}
