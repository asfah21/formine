<?php

namespace App\Http\Controllers;

use App\Models\Compressor;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class CompressorController extends Controller
{
    public function showForm()
    {
        $fieldLabels = [
        'kebersian_mesin' => 'Kebersian Mesin',
        'switch' => 'Switch/Sakelar',
        'periksa_hose' => 'Periksa Hose/Tubing',
        'periksa_sebelum_mesin_hidup' => 'Pemeriksaan Sebelum Mesin Hidup',
        'periksa_kondisi_level_solar' => 'Periksa Kondisi Level Solar',
        'periksa_kondisi_level_oli_mesin' => 'Periksa Kondisi Level Oli Mesin',
        'periksa_kondisi_kebocoran_oli_mesin' => 'Periksa Kondisi Kebocoran Oli Mesin',
        'periksa_kondisi_level_oli_kompresor' => 'Periksa Kondisi Level Oli Kompresor',
        'periksa_kondisi_level_air_battery' => 'Periksa Kondisi Level Air Battery',
        'periksa_kondisi_level_air_radiator' => 'Periksa Kondisi Level Air Radiator',
        'periksa_kondisi_kebocoran_solar' => 'Periksa Kebocoran Solar',
        'periksa_air_cleaner' => 'Periksa Air Cleaner',
        'periksa_kabel_wiring_kendor' => 'Periksa Kabel/Wiring Apakah Ada yang Kendor atau Lepas',
        'cek_semua_instalasi' => 'Cek Semua Instalasi/Kabel Power Tidak Ada yang Rusak',
        'pemeriksaan_setelah_mesin_hidup' => 'Pemeriksaan Setelah Mesin Hidup',
        'panaskan_mesin' => 'Panaskan Mesin Selama 1-2 Menit',
        'cek_semua_meteran_normal' => 'Cek Semua Meteran Dalam Kondisi Normal',
        'periksa_v_pulley' => 'Periksa V Pulley',
        'periksa_suara_getaran_tidak_normal' => 'Periksa Apakah Ada Suara atau Getaran Tidak Normal',
        'buang_sisa_air_pada_drain' => 'Buang Sisa Air Pada Drain Plug'
        ];

        return view('form-cr', compact('fieldLabels'));
    }

    public function hasilCr (Request $request)
    {
        $search = $request->input('search');
        $departments = $request->input('departments', []);

        // Query dasar
        $query = Compressor::query();

        // Filter pencarian
        if ($search) {
            $query->where('nama_driver', 'like', '%' . $search . '%')
                  ->orWhere('no_unit', 'like', '%' . $search . '%');
        }

        // Filter berdasarkan departemen
        if (!empty($departments)) {
            $query->whereIn('departemen', $departments);
        }

        // Urutkan data terbaru
        $cr = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('hasil-cr', compact('cr', 'search', 'departments'));
    }

    public function showx($name, $aptnumx)
    {
        $Dtl = Compressor::where('nama_driver', $name)->where('tl_id', $aptnumx)->first();

        return view('detail-cr', compact('Dtl'));
    }

    public function store(Request $request)
    {
        $signatureData = $request->input('signature_data');

        if (empty($signatureData)) {
            return back()->withErrors(['signature' => 'Harap buat tanda tangan terlebih dahulu']);
        }

        $appx = Compressor::create([

            'tl_id'=> Uuid::uuid4(),
            'nama_driver' => $request->nama_driver,
            'departemen' => $request->departemen,
            'pengawas' => $request->pengawas, // Digunakan sebagai ttd_pengawas
            'date' => $request->date,
            'time' => $request->time,
            'pesan' => $request->pesan,
            'status' => $request->status, // Digunakan sebagai ttd_admin
            'no_unit' => $request->no_unit,
            'hm_next_service' => $request->hm_next_service,
            'start_hm' => $request->start_hm,
            'finish_hm' => $request->finish_hm,
            'shift' => $request->shift,

            'kebersian_mesin' => $request->kebersian_mesin,
            'switch' => $request->switch,
            'periksa_hose' => $request->periksa_hose,
            'periksa_sebelum_mesin_hidup' => $request->periksa_sebelum_mesin_hidup,
            'periksa_kondisi_level_solar' => $request->periksa_kondisi_level_solar,
            'periksa_kondisi_level_oli_mesin' => $request->periksa_kondisi_level_oli_mesin,
            'periksa_kondisi_kebocoran_oli_mesin' => $request->periksa_kondisi_kebocoran_oli_mesin,
            'periksa_kondisi_level_oli_kompresor' => $request->periksa_kondisi_level_oli_kompresor,
            'periksa_kondisi_level_air_battery' => $request->periksa_kondisi_level_air_battery,
            'periksa_kondisi_level_air_radiator' => $request->periksa_kondisi_level_air_radiator,
            'periksa_kondisi_kebocoran_solar' => $request->periksa_kondisi_kebocoran_solar,
            'periksa_air_cleaner' => $request->periksa_air_cleaner,
            'periksa_kabel_wiring_kendor' => $request->periksa_kabel_wiring_kendor,
            'cek_semua_instalasi' => $request->cek_semua_instalasi,
            'pemeriksaan_setelah_mesin_hidup' => $request->pemeriksaan_setelah_mesin_hidup,
            'panaskan_mesin' => $request->panaskan_mesin,
            'cek_semua_meteran_normal' => $request->cek_semua_meteran_normal,
            'periksa_v_pulley' => $request->periksa_v_pulley,
            'periksa_suara_getaran_tidak_normal' => $request->periksa_suara_getaran_tidak_normal,
            'buang_sisa_air_pada_drain' => $request->buang_sisa_air_pada_drain,

        ]);

        $unik_id = $appx->tl_id;

        $encodedImage = explode(",", $signatureData)[1];
        $decodedImage = base64_decode($encodedImage);
        $filename = $unik_id . '.png';

        $imagePath = 'storage/images/ttd_cr/' . $filename;
        file_put_contents($imagePath, $decodedImage);

        //Alert::html('Berhasil', 'Form P2H Anda Telah Dikirim! <br><br><a href="https://www.google.com" class="btn btn-secondary">Lihat Hasil</a>', 'success');
        // return redirect()->route('form-tl')->with('success', 'Survey berhasil dikirim!');
        return response()->json([
            'message' => 'Form submitted successfully!'
        ]);
    }


}
