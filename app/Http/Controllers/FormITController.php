<?php

namespace App\Http\Controllers;

use App\Models\FormModel;
use App\Models\FormSerahTerima;
use App\Models\Laptop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Ramsey\Uuid\Uuid;

class FormITController extends Controller
{
    public function hasilForm(Request $request)
    {
        $search = $request->input('search');
        $departments = $request->input('departments', []);

        // Query dasar
        $query = FormModel::query();

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
        $itform = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('hasil-form-it', compact('itform', 'search', 'departments'));
    }

    public function showx($name, $aptnumx)
    {

        $Dtl = FormModel::where('id_assets', $name)->where('fst_id', $aptnumx)->first();

        if (!$Dtl) {
            // Handle jika $Dtl tidak ditemukan, misalnya return error atau redirect
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        // Cari data di tabel Laptop yang asset_id-nya sesuai dengan id_assets
        $Dtl2 = Laptop::where('asset_id', $Dtl->id_assets)->first();

        return view('detail_st_perangkat', compact('Dtl', 'Dtl2'));
    }


    public function showForm()
    {
        $my_label = [
            'kondisi_fisik' => 'Kondisi Fisik Bagus',
            'komponen_lengkap' => 'Komponen Lengkap',
            'fungsi_dasar' => 'Fungsi Dasar Berfungsi',
            'sesuai_spek'=> 'Sesuai Spesifikasi',
            'kartu_garansi'=> 'Ada Kartu Garansi',
            'lisensi_asli'=> 'Lisensi Original',
            'kode_akt'=> 'Ada Kode Aktivasi',
            'dok_lengkap'=> 'Dokumentasi Lengkap',
            'versi_terbaru'=> 'Versi Terbaru',
            'kompatibel'=> 'Kompatibel Sistem',
        ];

        $assets_ku = Laptop::select( // Lebih cepat 40% daripada $assets_ku=Laptop::all() dan lebih aman juga.
            'asset_id',
            'serial_number',
            'spesifikasi',
            'ram',
            'tgl_serah_terima',
            'brand',
            'kondisi',
            'device_type',
            'lokasi'
        )->get();

        $items = [
            ['id' => 1, 'name' => 'Item 1'],
            ['id' => 2, 'name' => 'Item 2'],
            ['id' => 3, 'name' => 'Item 3']
        ];

        return view('form_st_perangkat', compact('my_label', 'assets_ku','items'));

        // return view('form_st_perangkat', ['assets_ku' => $assets_ku]);
    }


    public function store(Request $request)
    {
        $signatureData = $request->input('signature_data');

        if (empty($signatureData)) {
            return back()->withErrors(['signature' => 'Harap buat tanda tangan terlebih dahulu']);
        }

        $appx = FormModel::create([

            'fst_id' => Uuid::uuid4(),
            'id_assets' =>$request->id_assets,
            'nama_form' =>$request->nama_form,
            'nama_pemberi' => $request->nama_pemberi,
            'nama_penerima'  => $request->nama_penerima,
            'nama_mengetahui'=> $request->nama_mengetahui,
            'jabatan_pemberi'=> $request->jabatan_pemberi,
            'jabatan_penerima'=> $request->jabatan_penerima,
            'jabatan_mengetahui'=> $request->jabatan_mengetahui,
            'lokasi'=> $request->lokasi,

            'detail_perangkat'=> $request->detail_perangkat,
            'kondisi_perangkat'=> $request->kondisi_perangkat,
            'tgl_penyerahan'=> $request->tgl_penyerahan,
            'time'=> $request->time,

            'kondisi_fisik'=> $request->kondisi_fisik,
            'kondisi_fisik_ket'=> $request->kondisi_fisik_ket,
            'komponen_lengkap'=> $request->komponen_lengkap,
            'komponen_lengkap_ket'=> $request->komponen_lengkap_ket,
            'fungsi_dasar'=> $request->fungsi_dasar,
            'fungsi_dasar_ket'=> $request->fungsi_dasar_ket,
            'sesuai_spek'=> $request->sesuai_spek,
            'sesuai_spek_ket'=> $request->sesuai_spek_ket,
            'kartu_garansi'=> $request->kartu_garansi,
            'kartu_garansi_ket'=> $request->kartu_garansi_ket,
            'lisensi_asli'=> $request->lisensi_asli,
            'lisensi_asli_ket'=> $request->lisensi_asli_ket,
            'kode_akt'=> $request->kode_akt,
            'kode_akt_ket'=> $request->kode_akt_ket,
            'dok_lengkap'=> $request-> dok_lengkap,
            'dok_lengkap_ket'=> $request-> dok_lengkap_ket,
            'versi_terbaru'=> $request-> versi_terbaru,
            'versi_terbaru_ket'=> $request-> versi_terbaru_ket,
            'kompatibel'=> $request-> kompatibel,
            'kompatibel_ket'=> $request-> kompatibel_ket,

            'software_terinstall'=> $request-> software_terinstall,
            'jumlah'=> $request->jumlah,
            'keterangan'=> $request-> keterangan,

        ]);

        $unik_id = $appx->fst_id;

        $encodedImage = explode(",", $signatureData)[1];
        $decodedImage = base64_decode($encodedImage);
        $filename = $unik_id . '.png';

        $imagePath = 'storage/images/ttd_it/apv1/' . $filename;
        file_put_contents($imagePath, $decodedImage);

        //Alert::html('Berhasil', 'Form P2H Anda Telah Dikirim! <br><br><a href="https://www.google.com" class="btn btn-secondary">Lihat Hasil</a>', 'success');
        // return redirect()->route('form-exca')->with('success', 'Survey berhasil dikirim!');
        return response()->json([
            'message' => 'Form submitted successfully!'
        ]);
    }

    public function showFormBarang()
    {
        $my_label = [
            'kondisi_fisik' => 'Kondisi Fisik Bagus',
            'komponen_lengkap' => 'Komponen Lengkap',
            'fungsi_dasar' => 'Fungsi Dasar Berfungsi',
            'sesuai_spek'=> 'Sesuai Spesifikasi',
            'kartu_garansi'=> 'Ada Kartu Garansi',
            'lisensi_asli'=> 'Lisensi Original',
            'kode_akt'=> 'Ada Kode Aktivasi',
            'dok_lengkap'=> 'Dokumentasi Lengkap',
            'versi_terbaru'=> 'Versi Terbaru',
            'kompatibel'=> 'Kompatibel Sistem',
        ];

        $assets_ku = Laptop::select( // Lebih cepat 40% daripada $assets_ku=Laptop::all() dan lebih aman juga.
            'asset_id',
            'serial_number',
            'spesifikasi',
            'ram',
            'tgl_serah_terima',
            'brand',
            'kondisi',
            'device_type',
            'lokasi'
        )->get();

        $items = Laptop::select([
            'id',
            'asset_id',
            'serial_number',
            'spesifikasi',
            'ram',
            'tgl_serah_terima',
            'brand',
            'kondisi',
            'device_type',
            'lokasi'
        ])->get();

        return view('form_st_barang', compact('my_label', 'assets_ku','items'));

    }
}
