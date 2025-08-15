<?php

namespace App\Http\Controllers;

use App\Models\Adt;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class AdtController extends Controller
{
    public function showForm()
    {
        $fieldLabels = [
            'PassFuel'  => 'Pass Fuel',
            'Tyre'      => 'Tyre',
            'FinelDrive'=> 'Final Drive',
            'SelinderSteering'  => 'Selinder Steering',
            'DriveShaft'=> 'Drive Shaft',
            'DropBox'   => 'Drop Box',
            'Pivot'     => 'Pivot / Hitch',
            'CFrame'    => 'C-Frame',
            'LevelOliHidraulic' => 'Level Oli Hidrolik',
            'LevelOliTransmisi' => 'Level Oli Transmisi',
            'BatteryAki'    => 'Battery / Aki',
            'SelinderDump'      => 'Silinder Dump',
            'DumpBody'      => 'Dump Body / Vessel',
            'RubberSpring'  => 'Rubber Spring/Bogie',
            'PropellarShaft'=> 'Propellar Shaft',
            'AxelFront'     => 'Axel Front-Middle-Rear',
            'AFrame'        => 'A-Frame',
            'LevelOliBrake' => 'Level Oli Brake',
            'Muffler'       => 'Muffler/Knalpot',
            'LevelOliEngine'=> 'Level Oli Engine',
            'LevelAirCoolant'=> 'Level Air Coulant',
            'VBelt'         => 'V-Belt',
            'AirCleaner'    => 'Air Cleaner',
            'WaterSeparator'=> 'Water Separator',

            'Apar'          => 'APAR',
            'FireSup'       => 'Fire Suppression',
            'TaliPengaws'   => 'Seat Belt',
            'Radio'     => 'Radio',
            'SafetyCone'=> 'Safety Cone',

            'KebersihanEquip'   => 'Kebersihan',

            'LevelOliMesin'     => 'Level Oli Mesin',
            'LevelOliTransmisi2'=> 'Level Oli transmisi',
            'LevelOliHydraulic' => 'Level Oli Hidrolik',
            'LevelOliRem'   => 'Level Oli Rem',
            'LevelFuel'     => 'Level Fuel',
            'OliTemp'       => 'Oli Tempratur',
            'TekananRemTractor'=> 'Tekanan Rem Traktor',
            'TekananRemTrailer'=> 'Tekanan Rem Trailer',
            'Kemudi'        => 'Kemudi / Stir',
            'PangaturStir'  => 'Pengatur Stir',
            'PedalGas'      => 'Pedal Gas',
            'PedalRemService'=> 'Pedal Rem Service',
            'PedalRetarder' => 'Pedal Retarder',
            'Difflock'      => 'Difflock 6x6',
            'TuasTransmisi' => 'Tuas Transmisi',
            'TuasLeverDump' => 'Tuas Level Dump',
            'RemParkir'     => 'Rem Parkir',
            'LDB'   => 'LDB',
            'ATC'   => 'ATC',
            'LockTransmisi' => 'Lock Transmisi',
            'EngineBrake'   => 'DasEngine Brakeh',
            'SeatBelt'      => 'Seat Belt',
            'LeverSingnal'  => 'Lever Signal / Reting',
            'Klakson'       => 'Klakson',

            'KebocoranOli'  => 'Kebocoran Oli',
            'KebocoranAir'  => 'Kebocoran Air',
            'KebocoranUdara'=> 'Kebocoran Udara',
            'KebocoranFuel' => 'Kebocoran Fuel',

            'SuaraMasuk'    => 'Suara Mesin',
            'SuaraTransmisi'=> 'Suara Transmisi',
            'SuaraDifferential'=> 'Suara Differential',

            'StirKemudi'    => 'Stir/Kemudi',
            'Retarder'      => 'Retarder',
            'RemKaki'       => 'Rem Kaki',
            'RemParkir2'    => 'Rem Parkir',
            'GigiPerseneling'   => 'Gigi Persneling',
            'KlaksonMundur'     => 'Klakson Mundur',
            'LampuPeringatan'   => 'Lampu Peringatan',
            'Ecu'       => 'ECU',
            'SystemHidraulik'   => 'Sistem Hidrailuc',
            'Gauge'     => 'Gauge',
        ];

        return view('form-adt', compact('fieldLabels'));

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

    public function showx($name, $aptnumx)
    {
        $Dtl = Adt::where('nama_driver', $name)->where('adt_id', $aptnumx)->first();

        return view('detail-adt', compact('Dtl'));
    }

    public function store(Request $request)
    {
        $signatureData = $request->input('signature_data');

        if (empty($signatureData)) {
            return back()->withErrors(['signature' => 'Harap buat tanda tangan terlebih dahulu']);
        }

        $appx = Adt::create([

            'adt_id'=> Uuid::uuid4(),
            'nama_driver'=>$request->nama_driver,
            'date'=>$request->date,
            'time'=>$request->time,
            'departemen'=>$request->departemen,
            'pengawas'=>$request->pengawas,
            'status'=>$request->status,
            'approve'=>$request->approve,
            'pesan'=>$request->pesan,
            'Shift'=>$request->Shift,
            'NomorUnit'=>$request->NomorUnit,
            'HMNextService'=>$request->HMNextService,
            'StartHM'=>$request->StartHM,
            'FinishHM'=>$request->FinishHM,

            'PassFuel'=>$request->PassFuel,
            'Tyre'=>$request->Tyre,
            'FinelDrive'=>$request->FinelDrive,
            'SelinderSteering'=>$request->SelinderSteering,
            'DriveShaft'=>$request->DriveShaft,
            'DropBox'=>$request->DropBox,
            'Pivot'=>$request->Pivot,
            'CFrame'=>$request->CFrame,
            'LevelOliHidraulic'=>$request->LevelOliHidraulic,
            'LevelOliTransmisi'=>$request->LevelOliTransmisi,
            'BatteryAki'=>$request->BatteryAki,
            'SelinderDump'=>$request->SelinderDump,
            'DumpBody'=>$request->DumpBody,
            'RubberSpring'=>$request->RubberSpring,
            'PropellarShaft'=>$request->PropellarShaft,
            'AxelFront'=>$request->AxelFront,
            'AFrame'=>$request->AFrame,
            'LevelOliBrake'=>$request->LevelOliBrake,
            'Muffler'=>$request->Muffler,
            'LevelOliEngine'=>$request->LevelOliEngine,
            'LevelAirCoolant'=>$request->LevelAirCoolant,
            'VBelt'=>$request->VBelt,
            'AirCleaner'=>$request->AirCleaner,
            'WaterSeparator'=>$request->WaterSeparator,

            'Apar'=>$request->Apar,
            'FireSup'=>$request->FireSup,
            'TaliPengaws'=>$request->TaliPengaws,
            'Radio'=>$request->Radio,
            'SafetyCone'=>$request->SafetyCone,

            'KebersihanEquip'=>$request->KebersihanEquip,

            'LevelOliMesin'=>$request->LevelOliMesin,
            'LevelOliTransmisi2'=>$request->LevelOliTransmisi2,
            'LevelOliHydraulic'=>$request->LevelOliHydraulic,
            'LevelOliRem'=>$request->LevelOliRem,
            'LevelFuel'=>$request->LevelFuel,
            'OliTemp'=>$request->OliTemp,
            'TekananRemTractor'=>$request->TekananRemTractor,
            'TekananRemTrailer'=>$request->TekananRemTrailer,
            'Kemudi'=>$request->Kemudi,
            'PangaturStir'=>$request->PangaturStir,
            'PedalGas'=>$request->PedalGas,
            'PedalRemService'=>$request->PedalRemService,
            'PedalRetarder'=>$request->PedalRetarder,
            'Difflock'=>$request->Difflock,
            'TuasTransmisi'=>$request->TuasTransmisi,
            'TuasLeverDump'=>$request->TuasLeverDump,
            'RemParkir'=>$request->RemParkir,
            'LDB'=>$request->LDB,
            'ATC'=>$request->ATC,
            'LockTransmisi'=>$request->LockTransmisi,
            'EngineBrake'=>$request->EngineBrake,
            'SeatBelt'=>$request->SeatBelt,
            'LeverSingnal'=>$request->LeverSingnal,
            'Klakson'=>$request->Klakson,

            'KebocoranOli'=>$request->KebocoranOli,
            'KebocoranAir'=>$request->KebocoranAir,
            'KebocoranUdara'=>$request->KebocoranUdara,
            'KebocoranFuel'=>$request->KebocoranFuel,

            'SuaraMasuk'=>$request->SuaraMasuk,
            'SuaraTransmisi'=>$request->SuaraTransmisi,
            'SuaraDifferential'=>$request->SuaraDifferential,

            'StirKemudi'=>$request->StirKemudi,
            'Retarder'=>$request->Retarder,
            'RemKaki'=>$request->RemKaki,
            'RemParkir2'=>$request->RemParkir2,
            'GigiPerseneling'=>$request->GigiPerseneling,
            'KlaksonMundur'=>$request->KlaksonMundur,
            'LampuPeringatan'=>$request->LampuPeringatan,
            'Ecu'=>$request->Ecu,
            'SystemHidraulik'=>$request->SystemHidraulik,
            'Gauge'=>$request->Gauge,
        ]);

        $unik_id = $appx->adt_id;

        $encodedImage = explode(",", $signatureData)[1];
        $decodedImage = base64_decode($encodedImage);
        $filename = $unik_id . '.png';

        $imagePath = 'storage/images/ttd_adt/' . $filename;
        file_put_contents($imagePath, $decodedImage);

        //Alert::html('Berhasil', 'Form P2H Anda Telah Dikirim! <br><br><a href="https://www.google.com" class="btn btn-secondary">Lihat Hasil</a>', 'success');
        // return redirect()->route('form-adt')->with('success', 'Survey berhasil dikirim!');
        return response()->json([
            'message' => 'Form submitted successfully!'
        ]);
    }
}
