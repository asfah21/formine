<?php

namespace App\Http\Controllers;

use App\Models\Towerlamp;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class TowerlampController extends Controller
{
    public function showForm()
    {
        $fieldLabels = [
        'jack_tl'               => 'Jack Tower Lamp',
        'baut_cover'            => 'Baut Cover',
        'kelengkapan_tl'        => 'Kelengkapan Tower Lamp',
        'sebelum_mesin_hidup'   => 'Sebelum Mesin Hidup',
        'jumlah_solar'          => 'Jumlah Solar',
        'level_oli_mesin'       => 'Level Oli Mesin',
        'kebocoran_oli_mesin'   => 'Kebocoran Oli Mesin',
        'level_air_battery'     => 'Level Air Battery',
        'level_air_radiator'    => 'Level Air Radiator',
        'kebocoran_solar'       => 'Kebocoran Solar',
        'kabel_wiring_kendor'   => 'Kabel Wiring Kendor',
        'instalasi_kabel_power' => 'Instalasi Kabel Power',
        'setelah_mesin_hidup'   => 'Setelah Mesin Hidup',
        'panaskan_mesin'        => 'Panaskan Mesin',
        'meteran_normal'        => 'Meteran Normal',
        'selector_on'         => 'Selector On',
        'suara_getaran_normal' => 'Suara Getaran Normal',
        'kondisi_switch'      => 'Kondisi Switch'
        ];

        return view('form-tl', compact('fieldLabels'));
    }

    public function hasilTl(Request $request)
    {
        $search = $request->input('search');
        $departments = $request->input('departments', []);

        // Query dasar
        $query = Towerlamp::query();

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
        $tl = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('hasil-tl', compact('tl', 'search', 'departments'));
    }

    public function showx($name, $aptnumx)
    {
        $Dtl = Towerlamp::where('nama_driver', $name)->where('tl_id', $aptnumx)->first();

        return view('detail-tl', compact('Dtl'));
    }

    public function store(Request $request)
    {
        $signatureData = $request->input('signature_data');

        if (empty($signatureData)) {
            return back()->withErrors(['signature' => 'Harap buat tanda tangan terlebih dahulu']);
        }

        $appx = Towerlamp::create([

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

            'jack_tl' => $request->jack_tl,
            'baut_cover' => $request->baut_cover,
            'kelengkapan_tl' => $request->kelengkapan_tl,
            'sebelum_mesin_hidup' => $request->sebelum_mesin_hidup,
            'jumlah_solar' => $request->jumlah_solar,
            'level_oli_mesin' => $request->level_oli_mesin,
            'kebocoran_oli_mesin' => $request->kebocoran_oli_mesin,
            'level_air_battery' => $request->level_air_battery,
            'level_air_radiator' => $request->level_air_radiator,
            'kebocoran_solar' => $request->kebocoran_solar,
            'kabel_wiring_kendor' => $request->kabel_wiring_kendor,
            'instalasi_kabel_power' => $request->instalasi_kabel_power,
            'setelah_mesin_hidup' => $request->setelah_mesin_hidup,
            'panaskan_mesin' => $request->panaskan_mesin,
            'meteran_normal' => $request->meteran_normal,
            'selector_on' => $request->selector_on,
            'suara_getaran_normal' => $request->suara_getaran_normal,
            'kondisi_switch' => $request->kondisi_switch,

        ]);

        $unik_id = $appx->tl_id;

        $encodedImage = explode(",", $signatureData)[1];
        $decodedImage = base64_decode($encodedImage);
        $filename = $unik_id . '.png';

        $imagePath = 'storage/images/ttd_tl/' . $filename;
        file_put_contents($imagePath, $decodedImage);

        //Alert::html('Berhasil', 'Form P2H Anda Telah Dikirim! <br><br><a href="https://www.google.com" class="btn btn-secondary">Lihat Hasil</a>', 'success');
        // return redirect()->route('form-tl')->with('success', 'Survey berhasil dikirim!');
        return response()->json([
            'message' => 'Form submitted successfully!'
        ]);
    }


}
