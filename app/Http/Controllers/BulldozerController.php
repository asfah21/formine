<?php

namespace App\Http\Controllers;

use App\Models\Dozer;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class BulldozerController extends Controller
{
    public function showForm()
    {
        $fieldLabels = [
            'idler',
            'kap_trunion' =>'Kap & Trunion Push Arm',
            'final_drive',
            'segmen_sprocket',
            'pemadam_api',
            'lampu_mk_blk' =>'Lampu Muka/Belakang',
            'track',
            'roller_track',
            'ripper',
            'bettery',
            'pivot_shaft',
            'saringan_udara',
            'silinder_tilt'=>'Silinder Tilt Blade',
            'silinder_lift'=>'Silinder Lift Blade',
            'ruang_mesin',
            'tangga_pggn'=>'Tangga Pegangan',
            'kabin_luar',
            'kabin_opr' =>'Kabin Operator',
            'jendela_pintu' =>'Jendela, Pintu',
            'kipas_kaca',
            'kaca_spion',
            'handle_control',
            'level_oli_mesin',
            'level_oli_hidro'=>'Level Oli Hidrolik',
            'level_air_radiator',

            'pemadam_api2'=>'APAR',
            'seat_belt',
            'tricon',

            'kebersihan',

            'level_oli_mesin2'=>'Level Oli Mesin',
            'level_oli_trans'=>'Level Oli Transmisi',
            'level_oli_pivot'=>'Level Oli Pivotshaft',
            'level_oli_hidro2'=>'Level Oli Hidrolik',
            'seats'=>'Tempat Duduk',
            'ac',
            'tuas_control',
            'trottle',
            'pedal_dece'=>'Pedal Decelator',
            'kemudi',
            'tuas_trans'=>'Tuas Transmisi',
            'pedal_rem',
            'tuas_rem',
            'klakson',
            'kabin_opr2'=>'Kabin Operator',
            'lampu_mk_blk2'=>'Lampu Muka/Belakang',
            'lampu_kabin',
            'ems_cms'=>'EMS/CMS',
            'gauge',
            'radio',
            'monitor',
            'mic',
            'kabel_mic',

            'kebocoran_oli',
            'kebocoran_air',

            'suara_mesin',
            'suara_transmisi',

            'stir_kemudi',
            'rem_kaki',
            'gigi_pers'=>'Gigi Persneling',
            'klakson_mdr'=>'Klakson Mundur',
            'lampu_peringatan',
            'ems_cms2'=>'EMS/CMS',
            'sistem_hidro'=>'Sistem Hidrolik',
            'strobe',
        ];
        return view('form-bd', compact('fieldLabels'));

    }

    public function hasilBd(Request $request)
    {
        $search = $request->input('search');
        $departments = $request->input('departments', []);

        // Query dasar
        $query = Dozer::query();

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
        $bd = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('hasil-bd', compact('bd', 'search', 'departments'));
    }

    public function showx($name, $aptnumx)
    {
        $Dtl = Dozer::where('nama_driver', $name)->where('bd_id', $aptnumx)->first();

        return view('detail-bd', compact('Dtl'));
    }

    public function store(Request $request)
    {
        $signatureData = $request->input('signature_data');

        if (empty($signatureData)) {
            return back()->withErrors(['signature' => 'Harap buat tanda tangan terlebih dahulu']);
        }

        $appx = Dozer::create([

            'bd_id'=> Uuid::uuid4(),
            'nama_driver'=>$request->nama_driver,
            'departemen'=>$request->departemen,
            'pengawas'=>$request->pengawas,
            'date'=>$request->date,
            'time'=>$request->time,
            'pesan'=>$request->pesan,
            'approve'=>$request->approve,
            'status'=>$request->status,
            'no_unit'=>$request->no_unit,
            'hm_next_service'=>$request->hm_next_service,
            'start_hm'=>$request->start_hm,
            'finish_hm'=>$request->finish_hm,
            'shift'=>$request->shift,

            'idler'=>$request->idler,
            'kap_trunion'=>$request->kap_trunion,
            'final_drive'=>$request->final_drive,
            'segmen_sprocket'=>$request->segmen_sprocket,
            'pemadam_api'=>$request->pemadam_api,
            'lampu_mk_blk'=>$request->lampu_mk_blk,
            'track'=>$request->track,
            'roller_track'=>$request->roller_track,
            'ripper'=>$request->ripper,
            'bettery'=>$request->bettery,
            'pivot_shaft'=>$request->pivot_shaft,
            'saringan_udara'=>$request->saringan_udara,
            'silinder_tilt'=>$request->silinder_tilt,
            'silinder_lift'=>$request->silinder_lift,
            'ruang_mesin'=>$request->ruang_mesin,
            'tangga_pggn'=>$request->tangga_pggn,
            'kabin_luar'=>$request->kabin_luar,
            'kabin_opr'=>$request->kabin_opr,
            'jendela_pintu'=>$request->jendela_pintu,
            'kipas_kaca'=>$request->kipas_kaca,
            'kaca_spion'=>$request->kaca_spion,
            'handle_control'=>$request->handle_control,
            'level_oli_mesin'=>$request->level_oli_mesin,
            'level_oli_hidro'=>$request->level_oli_hidro,
            'level_air_radiator'=>$request->level_air_radiator,

            'pemadam_api2'=>$request->pemadam_api2,
            'seat_belt'=>$request->seat_belt,
            'tricon'=>$request->tricon,

            'kebersihan'=>$request->kebersihan,

            'level_oli_mesin2'=>$request->level_oli_mesin2,
            'level_oli_trans'=>$request->level_oli_trans,
            'level_oli_pivot'=>$request->level_oli_pivot,
            'level_oli_hidro2'=>$request->level_oli_hidro2,
            'seats'=>$request->seats,
            'ac'=>$request->ac,
            'tuas_control'=>$request->tuas_control,
            'trottle'=>$request->trottle,
            'pedal_dece'=>$request->pedal_dece,
            'kemudi'=>$request->kemudi,
            'tuas_trans'=>$request->tuas_trans,
            'pedal_rem'=>$request->pedal_rem,
            'tuas_rem'=>$request->tuas_rem,
            'klakson'=>$request->klakson,
            'kabin_opr2'=>$request->kabin_opr2,
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
            'suara_transmisi'=>$request->suara_transmisi,

            'stir_kemudi'=>$request->stir_kemudi,
            'rem_kaki'=>$request->rem_kaki,
            'gigi_pers'=>$request->gigi_pers,
            'klakson_mdr'=>$request->klakson_mdr,
            'lampu_peringatan'=>$request->lampu_peringatan,
            'ems_cms2'=>$request->ems_cms2,
            'sistem_hidro'=>$request->sistem_hidro,
            'strobe'=>$request->strobe,

        ]);

        $unik_id = $appx->bd_id;

        $encodedImage = explode(",", $signatureData)[1];
        $decodedImage = base64_decode($encodedImage);
        $filename = $unik_id . '.png';

        $imagePath = 'storage/images/ttd_bd/' . $filename;
        file_put_contents($imagePath, $decodedImage);

        //Alert::html('Berhasil', 'Form P2H Anda Telah Dikirim! <br><br><a href="https://www.google.com" class="btn btn-secondary">Lihat Hasil</a>', 'success');
        // return redirect()->route('form-bd')->with('success', 'Survey berhasil dikirim!');
        return response()->json([
            'message' => 'Form submitted successfully!'
        ]);
    }
}
