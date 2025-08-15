<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormModel extends Model
{
    use HasFactory;

    protected $table = 'form_serah_terimas';

    protected $fillable = [

        'fst_id',
        'id_assets',
        'nama_form',
        'nama_pemberi',
        'nama_penerima',
        'nama_mengetahui',
        'jabatan_pemberi',
        'jabatan_penerima',
        'jabatan_mengetahui',
        'lokasi',

        'detail_perangkat',
        'kondisi_perangkat',
        'tgl_penyerahan',
        'time',

        'kondisi_fisik',
        'kondisi_fisik_ket',
        'komponen_lengkap',
        'komponen_lengkap_ket',
        'fungsi_dasar',
        'fungsi_dasar_ket',
        'sesuai_spek',
        'sesuai_spek_ket',
        'kartu_garansi',
        'kartu_garansi_ket',
        'lisensi_asli',
        'lisensi_asli_ket',
        'kode_akt',
        'kode_akt_ket',
        'dok_lengkap',
        'dok_lengkap_ket',
        'versi_terbaru',
        'versi_terbaru_ket',
        'kompatibel',
        'kompatibel_ket',

        'software_terinstall',
        'jumlah',
        'keterangan',
    ];

}
