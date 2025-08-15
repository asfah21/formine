<?php

namespace App\Http\Controllers;

use App\Models\Dumptruck;
use Ramsey\Uuid\Uuid;
use Illuminate\Http\Request;

class DumpTruckController extends Controller
{
    public function showForm()
    {
        $fieldLabels = [
            'ban_muka_blk'      => 'Ban Muka/Belakang',
            'tangga_pggn'       => 'Tangga Pegangan',
            'lampu_muka_blk'    => 'Lamou Muka/Belakang',
            'selang_pipa'       => 'Selang Pipa',
            'tangki_hidrolik'   => 'Tangki Hidrolik',
            'tangki_udara'      => 'Tangki Udara',
            'tabung_accu'       => 'Tabung Accu',
            'hoist'             => 'Hoist',
            'silinder_hidrolik' => 'Silinder Hidrolik',
            'pto'               => 'PTO',
            'battery_aki'       => 'Battery/Aki',
            'ruang_mesin'       => 'Ruang Mesin',
            'tali_kipas'        => 'Tali Kipas',
            'saringan_udara'    => 'Saringan Udara',
            'kabin_operator'    => 'Kabin Operator',
            'wiper'             => 'Wipers',
            'spion'             => 'Spion',
            'ems_cms'           => 'EMS/CMS',
            'handle_kontrol'    => 'Handle Kontrol',
            'knalpot'           => 'Knalpot',
            'klakson_mdr'       => 'Klakson Mundur',
            'lampu_ptr'         => 'Lampu Putar',
            'pin_dump'          => 'Pin Dump',

            'pemadam_api'       => 'APAR',
            'seat_belt'         => 'Seat Belt',
            'radio'             => 'Radio',
            'ganjal_ban'        => 'Gajnal Ban',
            'tricon'            => 'Tricon',
            'kebersihan_equip'  => 'Kebersihan',

            'level_oli_mesin'   => 'Level Oli Mesin',
            'level_oli_trans'   => 'Level Oli Transmisi',
            'level_oli_hidrolik'=> 'Level Oli Hidrolik',
            'level_bahan_bakar' => 'Level Bahan Bakar ',
            'saringan_udara2'   => 'Saringan Udara',
            'tekanan_udara'     => 'Tekanan Udara',
            'seat_tempat_ddk'   => 'Tempat Duduk',
            'gauge'             => 'Gauge',
            'kemudi_stir'       => 'Kemudi/Stir',
            'pengatur_stir'     => 'Pengatur Stir',
            'pedal_rem'         => 'Pedal Rem',
            'pedal_gas'         => 'Pedal Gas',
            'retarder'          => 'Retarder',
            'tuas_gigi'         => 'Tuas Gigi',
            'gas_tangan'        => 'Gas Tangan',
            'tuas_rem_parkir'   => 'Tuas Rem Parkir',
            'klakson'           => 'Klakson',
            'lampu_muka_blk2'   => 'Lampu Muka/Belakang',
            'lampu_kabin'       => 'Lampu Kabin',
            'ems_cms_2'         => 'EMS/CMS',
            'ac'                => 'AC',
            'radio2'            => 'Radio Komunikasi',
            'monitor'           => 'Monitor',
            'mic'               => 'Mic',
            'kabel_mic'         => 'Kabel Mic',

            'kebocoran_oli'     => 'Kebocoran Oli',
            'kebocoran_air'     => 'Kebocoran Air',
            'kebocoran_udara'   => 'Kebocoran Udara',
            'batu_disela_roda'  => 'Batu Di Sela Roda',

            'suara_mesin'       => 'Suara Mesin',
            'suara_transmisi'   => 'Suara Transmisi',
            'suara_diff'        => 'Suara Differensial',

            'stir_kemudi'       => 'Stir/Kemudi',
            'retarder2'         => 'Retarder',
            'rem_kaki'          => 'Rem Kaki',
            'rem_parkir'        => 'Rem Parkir',
            'gigi_pers'         => 'Gigi Perseneling',
            'klakson_mundur'    => 'Klakson Mundur',
            'lampu_peringatan'  => 'Lampu Peringatan',
            'ems_cms3'          => 'EMS/CMS',
            'sistem_hidrolik'   => 'Sistem Hidrolik',
            'gauge2'            => 'Gauge',

        ];
        return view('form-dumptruck', compact('fieldLabels'));
    }

    public function hasilDT(Request $request)
    {
        $search = $request->input('search');
        $departments = $request->input('departments', []);

        // Query dasar
        $query = Dumptruck::query();

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
        $dumptruck = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('hasil-dumptruck', compact('dumptruck', 'search', 'departments'));
    }

    public function showx($name, $aptnumx)
    {
        $Dtl = Dumptruck::where('nama_driver', $name)->where('dt_id', $aptnumx)->first();

        return view('detail-dt', compact('Dtl'));
    }


    public function store(Request $request)
    {
        $signatureData = $request->input('signature_data');

        if (empty($signatureData)) {
            return back()->withErrors(['signature' => 'Harap buat tanda tangan terlebih dahulu']);
        }

        $appx = Dumptruck::create([

            'dt_id'=> Uuid::uuid4(),
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

            'ban_muka_blk' => $request->ban_muka_blk,
            'tangga_pggn'=> $request->tangga_pggn,
            'lampu_muka_blk'=> $request->lampu_muka_blk,
            'selang_pipa'=> $request->selang_pipa,
            'tangki_hidrolik'=> $request->tangki_hidrolik,
            'tangki_udara'=> $request->tangki_udara,
            'tabung_accu'=> $request->tabung_accu,
            'hoist'=> $request->hoist,
            'silinder_hidrolik'=> $request->silinder_hidrolik,
            'pto'=> $request->pto,
            'battery_aki'=> $request->battery_aki,
            'ruang_mesin'=> $request->ruang_mesin,
            'tali_kipas'=> $request->tali_kipas,
            'saringan_udara'=> $request->saringan_udara,
            'kabin_operator'=> $request->kabin_operator,
            'wiper'=> $request->wiper,
            'spion'=> $request->spion,
            'ems_cms'=> $request->ems_cms,
            'handle_kontrol'=> $request->handle_kontrol,
            'knalpot'=> $request->knalpot,
            'klakson_mdr'=> $request->klakson_mdr,
            'lampu_ptr'=> $request->lampu_ptr,
            'pin_dump'=> $request->pin_dump,

            'pemadam_api'=> $request->pemadam_api,
            'seat_belt'=> $request->seat_belt,
            'radio'=> $request->radio,
            'ganjal_ban'=> $request->ganjal_ban,
            'tricon'=> $request->tricon,
            'kebersihan_equip'=> $request->kebersihan_equip,

            'level_oli_mesin'=> $request->level_oli_mesin,
            'level_oli_trans'=> $request->level_oli_trans,
            'level_oli_hidrolik'=> $request->level_oli_hidrolik,
            'level_bahan_bakar'=> $request->level_bahan_bakar,
            'saringan_udara2'=> $request->saringan_udara2,
            'tekanan_udara'=> $request->tekanan_udara,
            'seat_tempat_ddk'=> $request->seat_tempat_ddk,
            'gauge'=> $request->gauge,
            'kemudi_stir'=> $request->kemudi_stir,
            'pengatur_stir'=> $request->pengatur_stir,
            'pedal_rem'=> $request->pedal_rem,
            'pedal_gas'=> $request->pedal_gas,
            'retarder'=> $request->retarder,
            'tuas_gigi'=> $request->tuas_gigi,
            'gas_tangan'=> $request->gas_tangan,
            'tuas_rem_parkir'=> $request->tuas_rem_parkir,
            'klakson'=> $request->klakson,
            'lampu_muka_blk2'=> $request->lampu_muka_blk2,
            'lampu_kabin'=> $request->lampu_kabin,
            'ems_cms_2'=> $request->ems_cms_2,
            'ac'=> $request->ac,
            'radio2'=> $request->radio2,
            'monitor'=> $request->monitor,
            'mic'=> $request->mic,
            'kabel_mic'=> $request->kabel_mic,

            'kebocoran_oli'=> $request->kebocoran_oli,
            'kebocoran_air'=> $request->kebocoran_air,
            'kebocoran_udara'=> $request->kebocoran_udara,
            'batu_disela_roda'=> $request->batu_disela_roda,

            'suara_mesin'=> $request->suara_mesin,
            'suara_transmisi'=> $request->suara_transmisi,
            'suara_diff'=> $request->suara_diff,
            'stir_kemudi'=> $request->stir_kemudi,
            'retarder2'=> $request->retarder2,
            'rem_kaki'=> $request->rem_kaki,
            'rem_parkir'=>$request->rem_parkir,
            'gigi_pers'=> $request->gigi_pers,
            'klakson_mundur'=> $request->klakson_mundur,
            'lampu_peringatan'=> $request->lampu_peringatan,
            'ems_cms3'=> $request->ems_cms3,
            'sistem_hidrolik'=> $request->sistem_hidrolik,
            'gauge2'=> $request->gauge2,

        ]);

        $unik_id = $appx->dt_id;

        $encodedImage = explode(",", $signatureData)[1];
        $decodedImage = base64_decode($encodedImage);
        $filename = $unik_id . '.png';

        $imagePath = 'storage/images/ttd_dt/' . $filename;
        file_put_contents($imagePath, $decodedImage);

        //Alert::html('Berhasil', 'Form P2H Anda Telah Dikirim! <br><br><a href="https://www.google.com" class="btn btn-secondary">Lihat Hasil</a>', 'success');
        // return redirect()->route('form-dumptruck')->with('success', 'Survey berhasil dikirim!');
        return response()->json([
            'message' => 'Form submitted successfully!'
        ]);
    }

}
