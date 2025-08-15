<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adt;
use App\Models\Dumptruck;
use App\Models\Lv;
use App\Models\Exca;

class AllHasilController extends Controller
{
    public function hasilAll()
    {
        // Ambil data dari tabel exca dan dumptruck
        $dataExca = Exca::select('nama_driver', 'no_unit')
                        ->get();

        $dataDumptruck = Dumptruck::select('nama_driver', 'no_unit')
                                ->get();

        // Gabungkan kedua data
        $gabunganData = $dataExca->merge($dataDumptruck);

        return view('hasil-all', compact('gabunganData'));
    }

    public function hasilAdt(Request $request)
    {
        $search = $request->input('search');
        $departments = $request->input('departments', []);

        // Query dasar
        $query = Adt::query();

        // Filter pencarian
        if ($search) {
            $query->where('nama_driver', 'like', '%' . $search . '%')
                  ->orWhere('NomorUnit', 'like', '%' . $search . '%');
        }

        // Filter berdasarkan departemen
        if (!empty($departments)) {
            $query->whereIn('departemen', $departments);
        }

        // Urutkan data terbaru
        $adt = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('hasil-adt', compact('adt', 'search', 'departments'));
    }

    public function hasilA(Request $request)
    {
        // $search = $request->input('search');
        // $unit = $request->input('unit');
        // $date = $request->input('date');
        // $departments = $request->input('departments', []);

        // // // Query dasar untuk tabel Adt
        // // $queryAdt = Adt::query();
        // // if ($search) {
        // //     $queryAdt->where('nama_driver', 'like', '%' . $search . '%')
        // //             ->orWhere('NomorUnit', 'like', '%' . $search . '%');
        // // }
        // // if ($unit) {
        // //     $queryAdt->where('NomorUnit', 'like', '%' . $unit . '%');
        // // }
        // // if ($date) {
        // //     $queryAdt->whereDate('date', $date);
        // // }
        // // if (!empty($departments)) {
        // //     $queryAdt->whereIn('departemen', $departments);
        // // }

        // // $adtResults = $queryAdt->orderBy('date', 'desc')->get();

        // // Query dasar untuk tabel Lv
        // $queryLv = Lv::query();
        // if ($search) {
        //     $queryLv->where('nama_driver', 'like', '%' . $search . '%')
        //             ->orWhere('no_unit', 'like', '%' . $search . '%');
        // }
        // if ($unit) {
        //     $queryLv->where('no_unit', 'like', '%' . $unit . '%');
        // }
        // if ($date) {
        //     $queryLv->whereDate('date', $date);
        // }
        // if (!empty($departments)) {
        //     $queryLv->whereIn('departemen', $departments);
        // }

        // $lvResults = $queryLv->orderBy('date', 'desc')->get();

        // // Query dasar untuk tabel Exca
        // $queryExca = Exca::query();
        // if ($search) {
        //     $queryExca->where('nama_driver', 'like', '%' . $search . '%')
        //             ->orWhere('no_unit', 'like', '%' . $search . '%');
        // }
        // if ($unit) {
        //     $queryExca->where('no_unit', 'like', '%' . $unit . '%');
        // }
        // if ($date) {
        //     $queryExca->whereDate('date', $date);
        // }
        // if (!empty($departments)) {
        //     $queryExca->whereIn('departemen', $departments);
        // }

        // $excaResults = $queryExca->orderBy('date', 'desc')->get();

        // // Gabungkan semua hasil dari berbagai tabel
        // $hasil = $lvResults->merge($excaResults);

        // // Pilih untuk menampilkan hasil gabungan
        // $results = $hasil->sortByDesc('date');

        // return view('hasil-all', compact('results', 'search', 'unit', 'date', 'departments'));


    }

    public function zhasilAll(Request $request)
{
    // Ambil hasil query untuk setiap tabel
    // $lvResults = Lv::all();  // Anda bisa menambahkan filter jika perlu
    $excaResults = Exca::all();
    $dtResults = Dumptruck::all();

    // Gabungkan hasil dari berbagai tabel
    $hasil = $dtResults->merge($excaResults);

    // Urutkan hasil berdasarkan tanggal (pastikan kolomnya ada di setiap tabel)
    $hasil = $hasil->sortByDesc('created_at'); // Ganti 'tanggal' dengan nama kolom yang sesuai

    // Kirim hasil gabungan ke Blade
    return view('hasil-all', compact('hasil'));
}

}

