<?php

namespace App\Http\Controllers;

use App\Models\Manhaul;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use Carbon\Carbon;


class ManhaulController extends Controller
{
    public function showForm()
    {
        $fieldLabels = [
            'kaca_depan'    => 'Kaca Depan',
            'kaca_spion'    => 'Kaca Spion',
            'wiper'         => 'wipers',
            'lampu_besar'   => 'Lampu Besar',
            'lampu_kecil'   => 'Lampu Kecil',
            'lampu_sein'    => 'Lampu Sein',
            'lampu_mundur'  => 'Lampu Mundur',
            'lampu_kabut'   => 'lampu Kabut',
            'kaca_jdl_pnpg' => 'Kaca Jendela Penumpang',
            'tangga_pnpg'   => 'Tangga Pegangan',
            'tangki_angin'  => 'tangki Angin',
            'baut_mur'      => 'Baut Mur',
            'ban_kondisi'   => 'Ban Kondisi',
            'per_baut_mur'  => 'Per Baut Mur',
            'tali_kipas'    => 'Tali Kipas',
            'tangki_solar'  => 'Tangki Solar',
            'level_oli_mesin'   => 'Level Oli Mesin',
            'level_air_radiator'=> 'Level Air Radiator',
            'level_oli_steering'=> 'Level Oli Steering',
            'level_oli_trans'=> 'Level Oli Transmisi',
            'fenders'       => 'Fenders',
            'cat'           => 'Cat',
            'kap_mesin'     => 'Kap Mesin',

            'pemadam_api'   => 'Pemadam Api',
            'seat_belt'     => 'Seat Belt',
            'radio'         => 'Radio',
            'ganjal_ban'    => 'Ganjal Ban',
            'tricon'        => 'Tricon',

            'kebersihan'    => 'Kebersihan',

            'oli_mesin_tek' => 'Oli Mesin',
            'air_pendingin' => 'Air Pendingin',
            'angin_tekanan' => 'Angin/Tekanan',
            'solar_isi_tangki'=> 'Solar/Isi Tangki',
            'klakson_angin' => 'Klakson Angin',
            'klakson_listrik'=> 'Klakson Listrik',
            'lampu_dim'     => 'Lampu Besar/Dim',
            'lampu_kecil2'  => 'Lampu Kecil',
            'lampu_sen'     => 'Lampu Sen/Signal',
            'lampu_rem'     => 'Lampu Rem',
            'lampu_kabut2'  => 'Lampu Kabut',
            'lampu_kabin'   => 'Lampu Kabin',
            'lampu_pnpg'    => 'Lampu Penumpang',
            'tachometer'    => 'Tachometer/RPM',
            'hilo_switch'   => 'Hi Low Switch',
            'pedal_gas'     => 'Pedal Gas',
            'seats'     => 'Tempat Duduk',
            'fan'       => 'Fan',
            'bel_pnpg'  => 'Bel Penumpang',
            'ac'        => 'AC',
            'radio2'    => 'Radio',
            'monitor'   => 'Monitor',
            'mic'       => 'Mic',
            'kabel_mic' => 'Kabel Mic',

            'kebocoran_oli' => 'Kebocoran Oil',
            'kebocoran_air' => 'Kebocoran Air',
            'kebocoran_udara'   => 'Kebocoran Udara',

            'suara_mesin'   => 'Suara Mesin',
            'suara_trans'   => 'Suara Transmisi',
            'suara_diff'    => 'Suara Differensial',

            'stir_kemudi'   => 'Stir/Kemudi',
            'lampu_mundur2' => 'Lampu Mundur',
            'rem_kaki'      => 'Rem Kaki',
            'rem_parkir'    => 'Rem Parkir',
            'gigi_pers'     => 'Gigi Persneling',
            'klakson_mundur'=> 'Klakson Mundur',
            'lampu_peringatan'=> 'Lampu Peringatan',
            'ems_cms'   => 'EMS/CMS',
            'retarder'  => 'Retarder',
            'strobe'    => 'Lampu Putar/Strobe',

        ];

        return view('form-manhaul', compact('fieldLabels'));
    }

    // public function hasilMH(Request $request)
    // {
    //     $manhaul = Manhaul::orderBy('created_at', 'desc')->get(); // Mengambil semua data tanpa paginasi
    //     return view('hasil-manhaul', compact('manhaul'));
    // }

    public function hasilMH(Request $request)
    {
        $search = $request->input('search');
        $departments = $request->input('departments', []);

        // Query dasar
        $query = Manhaul::query();

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
        $manhaul = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('hasil-manhaul', compact('manhaul', 'search', 'departments'));
    }

    public function showx($name, $aptnumx)
    {
        $manHauls = Manhaul::where('nama_driver', $name)->where('mh_id', $aptnumx)->first();

        return view('detail-mh', compact('manHauls'));
    }


    public function store(Request $request)
    {
        $signatureData = $request->input('signature_data');

        if (empty($signatureData)) {
            return back()->withErrors(['signature' => 'Harap buat tanda tangan terlebih dahulu']);
        }

        $appx = Manhaul::create([

            'mh_id'=> Uuid::uuid4(),
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

            'kaca_depan' => $request->kaca_depan,
            'kaca_spion' => $request->kaca_spion,
            'wiper' => $request->wiper,
            'lampu_besar' => $request->lampu_besar,
            'lampu_kecil' => $request->lampu_kecil,
            'lampu_sein' => $request->lampu_sein,
            'lampu_mundur' => $request->lampu_mundur,
            'lampu_kabut' => $request->lampu_kabut,
            'kaca_jdl_pnpg' => $request->kaca_jdl_pnpg,
            'tangga_pnpg' => $request->tangga_pnpg,
            'tangki_angin' => $request->tangki_angin,
            'baut_mur' => $request->baut_mur,
            'ban_kondisi' => $request->ban_kondisi,
            'per_baut_mur' => $request->per_baut_mur,
            'tali_kipas' => $request->tali_kipas,
            'tangki_solar' => $request->tangki_solar,
            'level_oli_mesin' => $request->level_oli_mesin,
            'level_air_radiator' => $request->level_air_radiator,
            'level_oli_steering' => $request->level_oli_steering,
            'level_oli_trans' => $request->level_oli_trans,
            'fenders' => $request->fenders,
            'cat' => $request->cat,
            'kap_mesin' => $request->kap_mesin,

            'pemadam_api' => $request->pemadam_api,
            'seat_belt' => $request->seat_belt,
            'radio' => $request->radio,
            'ganjal_ban' => $request->ganjal_ban,
            'tricon' => $request->tricon,

            'kebersihan' => $request->kebersihan,
            //Bagian 2
            'oli_mesin_tek' => $request->oli_mesin_tek,
            'air_pendingin' => $request->air_pendingin,
            'angin_tekanan' => $request->angin_tekanan,
            'solar_isi_tangki' => $request->solar_isi_tangki,
            'klakson_angin' => $request->klakson_angin,
            'klakson_listrik' => $request->klakson_listrik,
            'lampu_dim' => $request->lampu_dim,
            'lampu_kecil2' => $request->lampu_kecil2,
            'lampu_sen' => $request->lampu_sen,
            'lampu_rem' => $request->lampu_rem,
            'lampu_kabut2' => $request->lampu_kabut2,
            'lampu_kabin' => $request->lampu_kabin,
            'lampu_pnpg' => $request->lampu_pnpg,
            'tachometer' => $request->tachometer,
            'hilo_switch' => $request->hilo_switch,
            'pedal_gas' => $request->pedal_gas,
            'seats' => $request->seats,
            'fan' => $request->fan,
            'bel_pnpg' => $request->bel_pnpg,
            'ac' => $request->ac,
            'radio2' => $request->radio2,
            'monitor' => $request->monitor,
            'mic' => $request->mic,
            'kabel_mic' => $request->kabel_mic,

            'kebocoran_oli' => $request->kebocoran_oli,
            'kebocoran_air' => $request->kebocoran_air,
            'kebocoran_udara' => $request->kebocoran_udara,

            'suara_mesin' => $request->suara_mesin,
            'suara_trans' => $request->suara_trans,
            'suara_diff' => $request->suara_diff,
            // Bagian 3
            'stir_kemudi' => $request->stir_kemudi,
            'lampu_mundur2' => $request->lampu_mundur2,
            'rem_kaki' => $request->rem_kaki,
            'rem_parkir' => $request->rem_parkir,
            'gigi_pers' => $request->gigi_pers,
            'klakson_mundur' => $request->klakson_mundur,
            'lampu_peringatan' => $request->lampu_peringatan,
            'ems_cms' => $request->ems_cms,
            'retarder' => $request->retarder,
            'strobe' => $request->strobe,

        ]);

        $unik_id = $appx->mh_id;

        $encodedImage = explode(",", $signatureData)[1];
        $decodedImage = base64_decode($encodedImage);
        $filename = $unik_id . '.png';

        $imagePath = 'storage/images/ttd_mh/' . $filename;
        file_put_contents($imagePath, $decodedImage);

        //Alert::html('Berhasil', 'Form P2H Anda Telah Dikirim! <br><br><a href="https://www.google.com" class="btn btn-secondary">Lihat Hasil</a>', 'success');
        // return redirect()->route('form-manhaul')->with('success', 'Survey berhasil dikirim!');
        return response()->json([
            'message' => 'Form submitted successfully!'
        ]);
    }

    public function ttdPW(Request $request)
    {
        $signatureData = $request->input('signature_data');

        if (empty($signatureData)) {
            return back()->withErrors(['signature' => 'Harap buat tanda tangan terlebih dahulu']);
        }

        $unik_id = Uuid::uuid4();

        $encodedImage = explode(",", $signatureData)[1];
        $decodedImage = base64_decode($encodedImage);
        $filename = $unik_id . '.png';

        $imagePath = 'storage/images/ttd_mh_pw/' . $filename;
        file_put_contents($imagePath, $decodedImage);

        return back();

        //Alert::html('Berhasil', 'Form P2H Anda Telah Dikirim! <br><br><a href="https://www.google.com" class="btn btn-secondary">Lihat Hasil</a>', 'success');
        //return redirect()->route('form-manhaul')->with('success', 'Survey berhasil dikirim!');
        // return response()->json([
        //     'message' => 'Form submitted successfully!'
        // ]);
    }
}
