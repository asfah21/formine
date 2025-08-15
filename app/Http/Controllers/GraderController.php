<?php

namespace App\Http\Controllers;

use App\Models\Grader;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class GraderController extends Controller
{
    public function showForm()
    {
        $fieldLabels = [
            'ban_mk_blk'    => 'Ban Muka/Belakang',
            'tandem'        => 'Tandem',
            'tangga_pggn'   => 'Tangga Pegangan',
            'lampu_mk_blk'  => 'Lampu Muka/Belakang',
            'selang_pipa_hidro'=> 'Selang/Pipa Hidrolik',
            'tangki_hidro'  => 'Tangki Hidro',
            'tabung_accu'   => 'Tabung Accumulator',
            'blade'         => 'Blade/Moloboard',
            'cutting_edge'  => 'Cutting Edge',
            'circle_blade'  => 'Circle Blade',
            'goose_neck'    => 'Gooseneck',
            'silinder_hidro'=> 'Silinder hidrolik',
            'silinder_arti' => 'Silinder Artikulasi',
            'battery'       => 'Battery',
            'indiaktor_saringan_udara'=> 'Indikator Filter Udara',
            'kabin_opr'     => 'Kabin Operator',
            'wiper'         => 'Wipers',
            'kaca_spion'    => 'Kaca Spion',
            'handle_control'=> 'Handle Control',
            'tabung_angin'  => 'Tabung Angin',
            'klakson_mdr'   => 'Klakson Mundur',
            'level_air_radi'=> 'Level Air Radiator',

            'pemadam_api'   => 'Pemadam Api',
            'seat_belt'     => 'Seat Belt',
            'ganjal_ban'    => 'Ganjal Ban',
            'tricon'        => 'Tricon',

            'kebersihan'    => 'Kebersihan',

            'level_oli_mesin'=> 'Level Oli Mesin',
            'level_oli_trans'=> 'Level Oli Transmisi',
            'level_oli_hidro'=> 'Level Oli Hidrolik',
            'tekanan_angin' => 'Tekanan Angin',
            'seats'         => 'Tempat Duduk',
            'ac'            => 'AC',
            'kemudi_stir'   => 'Kemudi Stir',
            'pengatur_stir' => 'Pengatur Stir',
            'pedal_rem'     => 'Pedal rem',
            'pedal_gas'     => 'Pedal Gas',
            'pedal_modul'   => 'Pedal Modular',
            'tuas_gigi'     => 'Tuas Gigi',
            'throttle'      => 'Throttle',
            'tuas_rem_parkir'=> 'Tuas Rem Parkir',
            'klakson'       => 'Klakson',
            'lampu_mk_blk2' => 'Lampu Muka/Belakang',
            'lampu_kabin'   => 'Lamou Kabin',
            'ems_cms'       => 'EMS/CMS',
            'gauge'         => 'Gauge',
            'radio'         => 'Radio Komunikasi',
            'emergency_steering'=> 'Emergency Steering',
            'radio2'        => 'Ruang Mesin',
            'monitor'       => 'Monitor',
            'mic'       => 'Mic',
            'kabel_mic' => 'Kabel Mic',

            'kebocoran_oli' => 'Kebocoran Oli',
            'kebocoran_air' => 'Kebocoran Air',
            'kebocoran_udara'=> 'Kebocoran Udara',

            'suara_mesin'   => 'Suara Mesin',
            'suara_trans'   => 'Suara Transmisi',

            'stir_kemudi'   => 'Stir Kemudi',
            'rem_kaki'      => 'Rem Kaki',
            'rem_parkir'    => 'Rem Parkir',
            'gigi_pers'     => 'Gigi Persneling',
            'klakson_mdr2'  => 'Klakson Mundur',
            'lampu_peringatan'=> 'Lampu Peringatan',
            'ems_cms2'      => 'EMS/CMS',
            'sistem_hidro'  => 'Sistem Hidrolik',
            'strobe'        => 'Lampu Putar',

        ];

    return view('form-mg', compact('fieldLabels'));
    }

    public function hasilMg(Request $request)
    {
        $search = $request->input('search');
        $departments = $request->input('departments', []);

        // Query dasar
        $query = Grader::query();

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
        $mg = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('hasil-mg', compact('mg', 'search', 'departments'));
    }

    public function showx($name, $aptnumx)
    {
        $Dtl = Grader::where('nama_driver', $name)->where('mg_id', $aptnumx)->first();

        return view('detail-mg', compact('Dtl'));
    }

    public function store(Request $request)
    {
        $signatureData = $request->input('signature_data');

        if (empty($signatureData)) {
            return back()->withErrors(['signature' => 'Harap buat tanda tangan terlebih dahulu']);
        }

        $appx = Grader::create([

            'mg_id'=> Uuid::uuid4(),
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

            'ban_mk_blk'=>$request->ban_mk_blk,
            'tandem'=>$request->tandem,
            'tangga_pggn'=>$request->tangga_pggn,
            'lampu_mk_blk'=>$request->lampu_mk_blk,
            'selang_pipa_hidro'=>$request->selang_pipa_hidro,
            'tangki_hidro'=>$request->tangki_hidro,
            'tabung_accu'=>$request->tabung_accu,
            'blade'=>$request->blade,
            'cutting_edge'=>$request->cutting_edge,
            'circle_blade'=>$request->circle_blade,
            'goose_neck'=>$request->goose_neck,
            'silinder_hidro'=>$request->silinder_hidro,
            'silinder_arti'=>$request->silinder_arti,
            'battery'=>$request->battery,
            'indiaktor_saringan_udara'=>$request->indiaktor_saringan_udara,
            'kabin_opr'=>$request->kabin_opr,
            'wiper'=>$request->wiper,
            'kaca_spion'=>$request->kaca_spion,
            'handle_control'=>$request->handle_control,
            'tabung_angin'=>$request->tabung_angin,
            'klakson_mdr'=>$request->klakson_mdr,
            'level_air_radi'=>$request->level_air_radi,

            'pemadam_api'=>$request->pemadam_api,
            'seat_belt'=>$request->seat_belt,
            'ganjal_ban'=>$request->ganjal_ban,
            'tricon'=>$request->tricon,

            'kebersihan'=>$request->kebersihan,

            'level_oli_mesin'=>$request->level_oli_mesin,
            'level_oli_trans'=>$request->level_oli_trans,
            'level_oli_hidro'=>$request->level_oli_hidro,
            'tekanan_angin'=>$request->tekanan_angin,
            'seats'=>$request->seats,
            'ac'=>$request->ac,
            'kemudi_stir'=>$request->kemudi_stir,
            'pengatur_stir'=>$request->pengatur_stir,
            'pedal_rem'=>$request->pedal_rem,
            'pedal_gas'=>$request->pedal_gas,
            'pedal_modul'=>$request->pedal_modul,
            'tuas_gigi'=>$request->tuas_gigi,
            'throttle'=>$request->throttle,
            'tuas_rem_parkir'=>$request->tuas_rem_parkir,
            'klakson'=>$request->klakson,
            'lampu_mk_blk2'=>$request->lampu_mk_blk2,
            'lampu_kabin'=>$request->lampu_kabin,
            'ems_cms'=>$request->ems_cms,
            'gauge'=>$request->gauge,
            'radio'=>$request->radio,
            'emergency_steering'=>$request->emergency_steering,
            'radio2'=>$request->radio2, //ganti jadi ruang_mesin
            'monitor'=>$request->monitor,
            'mic'=>$request->mic,
            'kabel_mic'=>$request->kabel_mic,

            'kebocoran_oli'=>$request->kebocoran_oli,
            'kebocoran_air'=>$request->kebocoran_air,
            'kebocoran_udara'=>$request->kebocoran_udara,
            'suara_mesin'=>$request->suara_mesin,
            'suara_trans'=>$request->suara_trans,

            'stir_kemudi'=>$request->stir_kemudi,
            'rem_kaki'=>$request->rem_kaki,
            'rem_parkir'=>$request->rem_parkir,
            'gigi_pers'=>$request->gigi_pers,
            'klakson_mdr2'=>$request->klakson_mdr2,
            'lampu_peringatan'=>$request->lampu_peringatan,
            'ems_cms2'=>$request->ems_cms2,
            'sistem_hidro'=>$request->sistem_hidro,
            'strobe'=>$request->strobe,
        ]);

        $unik_id = $appx->mg_id;

        $encodedImage = explode(",", $signatureData)[1];
        $decodedImage = base64_decode($encodedImage);
        $filename = $unik_id . '.png';

        $imagePath = 'storage/images/ttd_mg/' . $filename;
        file_put_contents($imagePath, $decodedImage);

        //Alert::html('Berhasil', 'Form P2H Anda Telah Dikirim! <br><br><a href="https://www.google.com" class="btn btn-secondary">Lihat Hasil</a>', 'success');
        // return redirect()->route('form-mg')->with('success', 'Survey berhasil dikirim!');
        return response()->json([
            'message' => 'Form submitted successfully!'
        ]);
    }
}
