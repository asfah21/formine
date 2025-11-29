<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ActivityCode;
use Illuminate\Database\Seeder;

class ActivityCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Kategori: OPERASI
            [
                'code' => 'GET', 
                'name' => 'Ore getting, getting, ore geting, ambil material, or geting', 
                'category' => 'OPERASI'
            ],
            [
                'code' => 'BAR', 
                'name' => 'Barging, Pembenahan area dome, perapihan dome, penataan stockpile dome, barjing, dome barging, eto cargo, perapihan material dome', 
                'category' => 'OPERASI'
            ],
            [
                'code' => 'LOA', 
                'name' => 'Loading, load, muat, memuat, pemuatan, loading material, muat material', 
                'category' => 'OPERASI'
            ],
            [
                'code' => 'HAU', 
                'name' => 'Hauling, haul, angkut, hauling ob/overburden, hauling material, holing ore ,angkut material', 
                'category' => 'OPERASI'
            ],
            [
                'code' => 'DUM', 
                'name' => 'Dumping, dump, buang, membuang, pembuangan, dumping material, buang material', 
                'category' => 'OPERASI'
            ],
            [
                'code' => 'STR', 
                'name' => 'Stripping, strip, stripping waste, stripping OB/overburden', 
                'category' => 'OPERASI'
            ],
            [
                'code' => 'ANG', 
                'name' => 'Angsur, angsur ob, ansur ob, ansur ore, angsur batu',
                'category' => 'OPERASI'
            ],
            [
                'code' => 'QUA', 
                'name' => 'Quarry, quary, kuari, kumpul quarry, pengumpulan quarry, material quarry', 
                'category' => 'OPERASI'
            ],
            [
                'code' => 'DOS', 
                'name' => 'Dosing, dosis, penimbangan, timbang, penimbunan', 
                'category' => 'OPERASI'
            ],
            [
                'code' => 'TRM', 
                'name' => 'Trimming, trim, trimming material, trimming ore, merapihkan', 
                'category' => 'OPERASI'
            ],
            [
                'code' => 'STP', 
                'name' => 'Stockpiling, stock pile, stok pile, penumpukan, penimbunan, tumpuk material', 
                'category' => 'OPERASI'
            ],
            [
                'code' => 'PJL', 
                'name' => 'Perbaikan jalan, perawatan jalan, pemadatan jalan, hampar laminating jalan, pembaruan akses', 
                'category' => 'OPERASI'
            ],
            [
                'code' => 'TSL', 
                'name' => 'Trap soil, pembersihan tanah, cleaning trap soil', 
                'category' => 'OPERASI'
            ],
            [
                'code' => 'PSR', 
                'name' => 'Penyiraman jalan,', 
                'category' => 'OPERASI'
            ],

            // Kategori: MAINTENANCE
            [
                'code' => 'REP', 
                'name' => 'Repair, perbaikan, perbaikan unit, perawatan, maintenance, mentenes', 
                'category' => 'MAINTENANCE'
            ],
            [
                'code' => 'SRV', 
                'name' => 'Service, servis, servis rutin, perawatan rutin, ganti oli, penggantian oli', 
                'category' => 'MAINTENANCE'
            ],
            

            // Kategori: K3
            [
                'code' => 'K3H', 
                'name' => 'K3, P2H, P5M, safety talk, safety meeting, safety first, keselamatan kerja', 
                'category' => 'K3'
            ],

            // Kategori: IDLE
            [
                'code' => 'AID', 
                'name' => 'Aktivity Idle', 
                'category' => 'IDLE'
            ],
            [
                'code' => 'TRV', 
                'name' => 'Traveling, perjalanan, pergi, menuju, dari ke, dari lokasi, tiba di lokasi, mobilitas, travling', 
                'category' => 'IDLE'
            ],
            [
                'code' => 'STB', 
                'name' => 'Standby, menunggu arahan, menunggu job, no job, stb, waiting job, stendby, stembay, menunggu tugas, stanby hujan/licin', 
                'category' => 'IDLE'
            ],
            [
                'code' => 'WFL', 
                'name' => 'Waiting for fuel, menunggu bahan bakar, isi bbm, isi solar, pengisian bahan bakar, isi bahan bakar', 
                'category' => 'IDLE'
            ],
            [
                'code' => 'WTC', 
                'name' => 'Waiting for crew, menunggu kru, menunggu operator, ganti shift, pergantian shift, no crew', 
                'category' => 'IDLE'
            ],

            // Kategori: DOWNTIME
            [
                'code' => 'BDN', 
                'name' => 'Breakdown, rusak, kerusakan, mati mesin, mogok, unit rusak, perbaikan darurat', 
                'category' => 'DOWNTIME'
            ],

            // Kategori: BREAK / ISHOMA
            [
                'code' => 'ISM', 
                'name' => 'Istirahat, istirahat makan, ishoma, sholat, makan, break, tidur, bobo', 
                'category' => 'ISHOMA'
            ],
        ];

        foreach ($data as $row) {
            ActivityCode::updateOrCreate(['code' => $row['code']], $row);
        }
    }
}
