<?php

namespace App\Http\Controllers;

use Ramsey\Uuid\Uuid;
use App\Models\Exca;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ExcaController extends Controller
{
    public function index()
    {
        // Ambil semua data driver dari database
        $drivers = User::all(['name']); // Ambil hanya kolom yang diperlukan

        return response()->json($drivers); // Kembalikan data dalam format JSON
    }

    public function hasilEX(Request $request)
    {
        $search = $request->input('search');
        $departments = $request->input('departments', []);

        // Query dasar
        $query = Exca::query();

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
        $exca = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('hasil-exca', compact('exca', 'search', 'departments'));
    }

    public function showx($name, $aptnumx)
    {
        $Dtl = Exca::where('nama_driver', $name)->where('ex_id', $aptnumx)->first();

        return view('detail-exca', compact('Dtl'));
    }

    public function showForm()
    {
        $fieldLabels = [
            'track'             => 'Track',
            'roller_track'      => 'Track Roller',
            'idler'             => 'Idler',
            'sprocket'          => 'Sprocket',
            'motor_travel'      => 'Motor Travel',
            'tangga_pggn'       => 'Tangga Pegangan',
            'lampu_mk_blk'      => 'Lampu Muka/Belakang',
            'selang_pipa'       => 'Selang Pipa',
            'tangki_hidrolik'   => 'Tangki Hidrolik',
            'bucket'            => 'Bucket',
            'boom_bucket'       =>'Boom Bucket',
            'stick_arm_bucket'  =>'Stick Arm Bucket',
            'battery'           =>'Battery',
            'ruang_mesin'       =>'Ruang Mesin',
            'indikator_srg_udara'   =>'Indikator Filter Udara',
            'pemadam_api'       =>'Pemadam Api (APAR)',
            'kabin_opr'         =>'Kabin Operator',
            'jendela_pintu'     =>'Jendela/Pintu',
            'kipas_kaca'        =>'Kipas Kaca',
            'kaca_spion'        =>'Kaca Spion',
            'ems_cms'           =>'EMS / CMS',
            'handle_control'    =>'Handle Control',
            'level_oli_mesin'   =>'Level Oli Mesin',
            'level_oli_hidrolik'=>'Level Oli Hidrolik',
            'level_air_radiator'=>'Level Air Radiator',

            'pemadam_api2'      =>'APAR',
            'seat_belt'         =>'Seat Belt',
            'tricon'            => 'Tricon',

            'kebersihan'        =>'Kebersihan',

            'level_oli_mesin2'  =>'Level Oli Mesin',
            'level_oli_hidrolik2'=>'Level Oli Hidrolik',
            'level_oli_swing'   =>'Level Oli Swing',
            'seats'             =>'Tempat Duduk',
            'ac'                =>'AC',
            'kemudi_stir'       =>'Kemudi / Stir',
            'throttle'          =>'Throttle',
            'tuas_rem_parkir'   =>'Tuas Rem Parkir',
            'tuas_kontrol'      =>'Tuas Kontrol',
            'klakson'           =>'Klakson',
            'kabin_operator'    =>'Kabin Operator',
            'lampu_mk_blk2'     =>'Lampu Muka /Belakang',
            'lampu_kabin'       =>'Lampu Kabin',
            'ems'               =>'EMS/CMS',
            'switch_work_mode'  =>'Switch Work Mode',
            'switch_power_mode' =>'Swith Power Mode',
            'switch_aec'        =>'Switch AEC',
            'radio'             =>'Radio',
            'monitor'           =>'Monitor',
            'mic'               =>'Mic',
            'kabel_mic'         =>'Kabel Mic',

            'kebocoran_oli'     =>'Kebocoran Oli',
            'kebocoran_air'     =>'Kebocoran Air',
            'suara_mesin'       =>'Suara Mesin',
            'suara_trans'       =>'suara Transmisi',

            'stir_kemudi'       =>'Stir / Kemudi',
            'klakson_travel'    =>'Klakson Travel',
            'ems_cms3'          =>'EMS/CMS',
            'sistem_hidrolik'   =>'Sistem Hidrolik',
            'lampu_peringatan'  =>'Lampu Peringatan',
            'strobe'            =>'Strobe',
        ];

        return view('form-exca', compact('fieldLabels'));
    }


    public function store(Request $request)
    {
        // $request->validate([
        //     'no_unit' => 'required|string|max:255',
        //     // Tambahkan validasi lainnya jika diperlukan
        // ], [
        //     'no_unit.required' => 'Nomor unit harus dipilih.',
        // ]);

        $signatureData = $request->input('signature_data');

        if (empty($signatureData)) {
            return back()->withErrors(['signature' => 'Harap buat tanda tangan terlebih dahulu']);
        }

        $appx = Exca::create([

            'ex_id'=> Uuid::uuid4(),
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

            'track'=>$request->track,
            'roller_track'=>$request->roller_track,
            'idler'=>$request->idler,
            'sprocket'=>$request->sprocket,
            'motor_travel'=>$request->motor_travel,
            'tangga_pggn'=>$request->tangga_pggn,
            'lampu_mk_blk'=>$request->lampu_mk_blk,
            'selang_pipa'=>$request->selang_pipa,
            'tangki_hidrolik'=>$request->tangki_hidrolik,
            'bucket'=>$request->bucket,
            'boom_bucket'=>$request->boom_bucket,
            'stick_arm_bucket'=>$request->stick_arm_bucket,
            'battery'=>$request->battery,
            'ruang_mesin'=>$request->ruang_mesin,
            'indikator_srg_udara'=>$request->indikator_srg_udara,
            'pemadam_api'=>$request->pemadam_api,
            'kabin_opr'=>$request->kabin_opr,
            'jendela_pintu'=>$request->jendela_pintu,
            'kipas_kaca'=>$request->kipas_kaca,
            'kaca_spion'=>$request->kaca_spion,
            'ems_cms'=>$request->ems_cms,
            'handle_control'=>$request->handle_control,
            'level_oli_mesin'=>$request->level_oli_mesin,
            'level_oli_hidrolik'=>$request->level_oli_hidrolik,
            'level_air_radiator'=>$request->level_air_radiator,

            'pemadam_api2'=>$request->pemadam_api2,
            'seat_belt'=>$request->seat_belt,
            'tricon'=>$request->tricon,

            'kebersihan'=>$request->kebersihan,

            'level_oli_mesin2'=>$request->level_oli_mesin2,
            'level_oli_hidrolik2'=>$request->level_oli_hidrolik2,
            'level_oli_swing'=>$request->level_oli_swing,
            'seats'=>$request->seats,
            'ac'=>$request->ac,
            'kemudi_stir'=>$request->kemudi_stir,
            'throttle'=>$request->throttle,
            'tuas_rem_parkir'=>$request->tuas_rem_parkir,
            'tuas_kontrol'=>$request->tuas_kontrol,
            'klakson'=>$request->klakson,
            'kabin_operator'=>$request->kabin_operator,
            'lampu_mk_blk2'=>$request->lampu_mk_blk2,
            'lampu_kabin'=>$request->lampu_kabin,
            'ems'=>$request->ems,
            'switch_work_mode'=>$request->switch_work_mode,
            'switch_power_mode'=>$request->switch_power_mode,
            'switch_aec'=>$request->switch_aec,
            'radio'=>$request->radio,
            'monitor'=>$request->monitor,
            'mic'=>$request->mic,
            'kabel_mic'=>$request->kabel_mic,

            'kebocoran_oli'=>$request->kebocoran_oli,
            'kebocoran_air'=>$request->kebocoran_air,
            'suara_mesin'=>$request->suara_mesin,
            'suara_trans'=>$request->suara_trans,

            'stir_kemudi'=>$request->stir_kemudi,
            'klakson_travel'=>$request->klakson_travel,
            'ems_cms3'=>$request->ems_cms3,
            'sistem_hidrolik'=>$request->sistem_hidrolik,
            'lampu_peringatan'=>$request->lampu_peringatan,
            'strobe'=>$request->strobe,

        ]);

        $unik_id = $appx->ex_id;

        $encodedImage = explode(",", $signatureData)[1];
        $decodedImage = base64_decode($encodedImage);
        $filename = $unik_id . '.png';

        $imagePath = 'storage/images/ttd_exca/' . $filename;
        file_put_contents($imagePath, $decodedImage);

        //Alert::html('Berhasil', 'Form P2H Anda Telah Dikirim! <br><br><a href="https://www.google.com" class="btn btn-secondary">Lihat Hasil</a>', 'success');
        // return redirect()->route('form-exca')->with('success', 'Survey berhasil dikirim!');
        return response()->json([
            'message' => 'Form submitted successfully!'
        ]);
    }
}
