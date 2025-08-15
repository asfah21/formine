<?php

namespace App\Http\Controllers;

use App\Models\Lv;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class LvController extends Controller
{
    public function showForm()
    {
        $fieldLabels = [
            'LevelOlitrans'     => 'Level Oli Transmisi',
            'AirRadiator'       => 'Air Radiator',

            'LevelOlikemudi'    => 'Level Oli Kemudi',
            'LevelOliengine'    => 'Level Oli Engine',
            'LevelOlirem'       => 'Level Oli rem',
            'LevelOliperseneling' => 'Level Oli Perseneling',
            'BodyUnit'      => 'Body Unit',
            'BanBautroda'   => 'Ban, Baut, Roda',
            'KacaSpion'     => 'Kaca Spion',
            'AlarmMundur'   => 'Alarm Mundur',
            'LampuRem'      => 'Lampu Rem & Sein',
            'LampuDepan'    => 'Lampu Depan',
            'LampuRotary'   => 'Lampu Rotary',
            'AirWiper'      => 'Air Wiper & Air Aki',
            'TiangBendera'  => 'Tiang Bendera',
            'Kemudi'        => 'Kemudi (Steering)',
            'RemTangan'     => 'Ren Tangan',
            'RemKaki'       => 'Rem Kaki',
            'Klakson'       => 'Klakson',
            'PanelIndikator'=> 'Panel Indikator/Gauge',
            'Wd'            => '4WD Double Gardan',
            'Wipers'        => 'Wipers',
            'RadioRig'      => 'Radio Rig',
            'SeatBelt'      => 'Seat Belt',
            'TempatDuduk'   => 'Tempat Duduk',
            'Dongkrak'      => 'Dongkrak',
            'GanjalRoda'    => 'Ganjal Roda',
            'KabinKaca'     => 'Kabin Kaca',
            'KunciBautroda' => 'Kunci, Baut, Roda',
            'Apar'     => 'APAR',
        ];

        return view('form-lv', compact('fieldLabels'));
    }

    public function hasilLv(Request $request)
    {
        $search = $request->input('search');
        $departments = $request->input('departments', []);

        // Query dasar
        $query = Lv::query();

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
        $lv = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('hasil-lv', compact('lv', 'search', 'departments'));
    }

    public function showx($name, $aptnumx)
    {
        $Dtl = Lv::where('nama_driver', $name)->where('lv_id', $aptnumx)->first();

        return view('detail-lv', compact('Dtl'));
    }

    public function store(Request $request)
    {
        $signatureData = $request->input('signature_data');

        if (empty($signatureData)) {
            return back()->withErrors(['signature' => 'Harap buat tanda tangan terlebih dahulu']);
        }

        $appx = Lv::create([

            'lv_id'=>  Uuid::uuid4(),
            'nama_driver'=>$request->nama_driver,
            'date'=>$request->date,
            'time'=>$request->time,
            'departemen'=>$request->departemen,
            'pengawas'=>$request->pengawas,
            'no_unit'=>$request->no_unit,
            'shift'=>$request->shift,
            'start_hm'=>$request->start_hm,
            'status'=>$request->status,
            'approve'=>$request->approve,
            'pesan'=>$request->pesan,

            'LevelOlitrans'=>$request->LevelOlitrans,
            'AirRadiator'=>$request->AirRadiator,
            'LevelOlikemudi'=>$request->LevelOlikemudi,
            'LevelOliengine'=>$request->LevelOliengine,
            'LevelOlirem'=>$request->LevelOlirem,
            'LevelOliperseneling'=>$request->LevelOliperseneling,
            'BodyUnit'=>$request->BodyUnit,
            'BanBautroda'=>$request->BanBautroda,
            'KacaSpion'=>$request->KacaSpion,
            'AlarmMundur'=>$request->AlarmMundur,
            'LampuRem'=>$request->LampuRem,
            'LampuDepan'=>$request->LampuDepan,
            'LampuRotary'=>$request->LampuRotary,
            'AirWiper'=>$request->AirWiper,
            'TiangBendera'=>$request->TiangBendera,
            'Kemudi'=>$request->Kemudi,
            'RemTangan'=>$request->RemTangan,
            'RemKaki'=>$request->RemKaki,
            'Klakson'=>$request->Klakson,
            'PanelIndikator'=>$request->PanelIndikator,
            'Wd'=>$request->Wd,
            'Wipers'=>$request->Wipers,
            'RadioRig'=>$request->RadioRig,
            'SeatBelt'=>$request->SeatBelt,
            'TempatDuduk'=>$request->TempatDuduk,
            'Dongkrak'=>$request->Dongkrak,
            'GanjalRoda'=>$request->GanjalRoda,
            'KabinKaca'=>$request->KabinKaca,
            'KunciBautroda'=>$request->KunciBautroda,
            'Apar'=>$request->Apar,

        ]);

        $unik_id = $appx->lv_id;

        $encodedImage = explode(",", $signatureData)[1];
        $decodedImage = base64_decode($encodedImage);
        $filename = $unik_id . '.png';

        $imagePath = 'storage/images/ttd_lv/' . $filename;
        file_put_contents($imagePath, $decodedImage);

        //Alert::html('Berhasil', 'Form P2H Anda Telah Dikirim! <br><br><a href="https://www.google.com" class="btn btn-secondary">Lihat Hasil</a>', 'success');
        // return redirect()->route('form-lv')->with('success', 'Survey berhasil dikirim!');
        return response()->json([
            'message' => 'Form submitted successfully!'
        ]);
    }
}
