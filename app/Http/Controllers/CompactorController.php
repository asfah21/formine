<?php

namespace App\Http\Controllers;

use App\Models\Compactor;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class CompactorController extends Controller
{
    public function showForm()
    {
        $fieldLabels = [
        'ban_blk'=>'Ban Belakang',
        'drum',
        'tangga',
        'lampu_mk_blk'=>'Lampu Muka/Belakang',
        'selang_pipa_hidro'=>'Selang Pipa Hidrolik',
        'tangki_hidro'=>'Tangki Hidrolik',
        'battery_aki'=>'Battery/Aki',
        'ruang_mesin',
        'saringan_udara',
        'kabin_opr'=>'Kabin Operator',
        'jendela_pintu'=>'Jendela, Pintu',
        'wiper',
        'kaca_spion',
        'handle_control',
        'level_oli_mesin',
        'level_oli_hidro',
        'level_air_radiator',

        'pemadam_api',
        'seat_belt',
        'tricon',

        'kebersihan',

        'level_oli_mesin2'=>'Level Oli Mesin',
        'level_oli_trans'=>'Level Oli Transmisi',
        'level_oli_hidro2'=>'Level Oli Hidrolik',
        'level_bahan_bakar',
        'seats'=>'Tempat Duduk',
        'ac',
        'kemudi_stir'=>'Kemudi/Stir',
        'pedal_rem',
        'pedal_gas',
        'gas_tangan',
        'tuas_gigi_trans'=>'Tuas Gisi Transmisi',
        'tuas_maju_mdr'=>'Tuas Maju Mundur',
        'tuas_rem_parkir',
        'klakson',
        'lampu_mk_blk2'=>'Lampu Muka/Belakang',
        'lampu_kabin',
        'ems_cms',
        'gauge',
        'radio',
        'monitor',
        'mic',
        'kabel_mic',

        'kebocoran_oli',
        'kebocoran_air',

        'suara_mesin',
        'suara_trans'=>'Suara Transmisi',

        'stir_kemudi2'=>'Stir/Kemudi',
        'rem_kaki',
        'rem_parkir',
        'gigi_pers'=>'Gigi Perseneling',
        'klakson_mdr'=>'Klakson Mundur',
        'lampu_peringatan',
        'ems_cms2'=>'EMS/CMS',
        'sistem_hidro'=>'Sistem Hidrolik',
        'gauge2'=>'Gauge',
        'strobe',
        ];

        return view('form-cp', compact('fieldLabels'));
    }

    public function hasilCp(Request $request)
    {
        $search = $request->input('search');
        $departments = $request->input('departments', []);

        // Query dasar
        $query = Compactor::query();

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
        $cp = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('hasil-cp', compact('cp', 'search', 'departments'));
    }

    public function showx($name, $aptnumx)
    {
        $Dtl = Compactor::where('nama_driver', $name)->where('cp_id', $aptnumx)->first();

        return view('detail-cp', compact('Dtl'));
    }

    public function store(Request $request)
    {
        $signatureData = $request->input('signature_data');

        if (empty($signatureData)) {
            return back()->withErrors(['signature' => 'Harap buat tanda tangan terlebih dahulu']);
        }

        $appx = Compactor::create([

            'cp_id'=> Uuid::uuid4(),
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

            'ban_blk'=>$request->ban_blk,
            'drum'=>$request->drum,
            'tangga'=>$request->tangga,
            'lampu_mk_blk'=>$request->lampu_mk_blk,
            'selang_pipa_hidro'=>$request->selang_pipa_hidro,
            'tangki_hidro'=>$request->tangki_hidro,
            'battery_aki'=>$request->battery_aki,
            'ruang_mesin'=>$request->ruang_mesin,
            'saringan_udara'=>$request->saringan_udara,
            'kabin_opr'=>$request->kabin_opr,
            'jendela_pintu'=>$request->jendela_pintu,
            'wiper'=>$request->wiper,
            'kaca_spion'=>$request->kaca_spion,
            'handle_control'=>$request->handle_control,
            'level_oli_mesin'=>$request->level_oli_mesin,
            'level_oli_hidro'=>$request->level_oli_hidro,
            'level_air_radiator'=>$request->level_air_radiator,

            'pemadam_api'=>$request->pemadam_api,
            'seat_belt'=>$request->seat_belt,
            'tricon'=>$request->tricon,

            'kebersihan'=>$request->kebersihan,

            'level_oli_mesin2'=>$request->level_oli_mesin2,
            'level_oli_trans'=>$request->level_oli_trans,
            'level_oli_hidro2'=>$request->level_oli_hidro2,
            'level_bahan_bakar'=>$request->level_bahan_bakar,
            'seats'=>$request->seats,
            'ac'=>$request->ac,
            'kemudi_stir'=>$request->kemudi_stir,
            'pedal_rem'=>$request->pedal_rem,
            'pedal_gas'=>$request->pedal_gas,
            'gas_tangan'=>$request->gas_tangan,
            'tuas_gigi_trans'=>$request->tuas_gigi_trans,
            'tuas_maju_mdr'=>$request->tuas_maju_mdr,
            'tuas_rem_parkir'=>$request->tuas_rem_parkir,
            'klakson'=>$request->klakson,
            'lampu_mk_blk2'=>$request->lampu_mk_blk2,
            'lampu_kabin'=>$request->lampu_kabin,
            'ems_cms'=>$request->ems_cms,
            'gauge'=>$request->gauge,
            'radio'=>$request->radio,
            'monitor'=>$request->monitor,
            'mic'=>$request->mic,
            'kabel_mic'=>$request->kabel_mic,

            'kebocoran_oli'=>$request->kebocoran_oli,
            'kebocoran_air'=>$request->kebocoran_air,

            'suara_mesin'=>$request->suara_mesin,
            'suara_trans'=>$request->suara_trans,

            'stir_kemudi2'=>$request->stir_kemudi2,
            'rem_kaki'=>$request->rem_kaki,
            'rem_parkir'=>$request->rem_parkir,
            'gigi_pers'=>$request->gigi_pers,
            'klakson_mdr'=>$request->klakson_mdr,
            'lampu_peringatan'=>$request->lampu_peringatan,
            'ems_cms2'=>$request->ems_cms2,
            'sistem_hidro'=>$request->sistem_hidro,
            'gauge2'=>$request->gauge2,
            'strobe'=>$request->strobe,

        ]);

        $unik_id = $appx->cp_id;

        $encodedImage = explode(",", $signatureData)[1];
        $decodedImage = base64_decode($encodedImage);
        $filename = $unik_id . '.png';

        $imagePath = 'storage/images/ttd_cp/' . $filename;
        file_put_contents($imagePath, $decodedImage);

        //Alert::html('Berhasil', 'Form P2H Anda Telah Dikirim! <br><br><a href="https://www.google.com" class="btn btn-secondary">Lihat Hasil</a>', 'success');
        // return redirect()->route('form-cp')->with('success', 'Survey berhasil dikirim!');
        return response()->json([
            'message' => 'Form submitted successfully!'
        ]);
    }


}
