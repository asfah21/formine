<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SesiAbsensi;
use App\Models\Absensi;
use Illuminate\Support\Str;
use Carbon\Carbon;

class SesiAbsensiController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $departments = $request->input('departments', []);

        // Query dasar dengan absensi count
        $query = SesiAbsensi::withCount('absensi');

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
        $sesiAbsensi = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('absensi.index', compact('sesiAbsensi', 'search', 'departments'));
    }

    // public function index(Request $request)
    // {
    //     $search = $request->input('search');
    //     $departments = $request->input('departments', []);

    //     // Query dasar
    //     $query = SesiAbsensi::query();

    //     // Filter pencarian
    //     if ($search) {
    //         $query->where('name', 'like', '%' . $search . '%')
    //             ->orWhere('end_time', 'like', '%' . $search . '%');
    //     }

    //     // Filter berdasarkan departemen
    //     if (!empty($departments)) {
    //         $query->whereIn('department', $departments);
    //     }

    //     // Urutkan data terbaru & paginasi
    //     $sesiAbsensi = $query->orderBy('created_at', 'desc')->paginate(10);

    //     return view('absensi.index', compact('sesiAbsensi', 'search', 'departments'));
    // }

    // Form membuat sesi absensi
    public function create()
    {
        return view('absensi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'duration' => 'required|integer|min:1|max:24', // Pastikan ini angka
        ]);

        $duration = (int) $request->duration; // Konversi ke integer
        $formattedDate = Carbon::now()->format('d-m-Y'); // Format tanggal: 20-03-2025

        SesiAbsensi::create([
            'name' => $request->name,
            'unique_code' => Str::random(10),
            'duration' => $duration, // Pastikan integer
            'judul' => $request->judul,
            // 'judul' => $request->judul . ' -- [' . $formattedDate . ']',
            'lokasi' => $request->lokasi,
            'agenda' => $request->agenda,

        ]);

        return redirect()->route('absensi.index')->with('success', 'Sesi Absensi Berhasil Dibuat');
    }

    public function show(Request $request, $id)
    {
        $search = $request->input('search');
        $sesi = SesiAbsensi::findOrFail($id);

        // Query dasar
        $query = Absensi::where('sesi_absensi_id', $sesi->id);

        // Filter pencarian
        if ($search) {
            $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('created_at', 'like', '%' . $search . '%');
        }

        // Urutkan data terbaru & paginasi
        $absensis = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('absensi.show', compact('sesi', 'absensis', 'search'));
    }

    public function cert($id, $name)
    {
        // Ambil satu data berdasarkan sesi_absensi_id dan name
        $sesi = Absensi::where('id', $id)->where('name', $name)->firstOrFail(); // Pastikan ada hasil

        return view('absensi.cert', compact('sesi'));
    }
}
