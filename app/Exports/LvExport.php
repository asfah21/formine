<?php

namespace App\Exports;

use App\Models\Lv;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

class LvExport implements FromCollection, WithHeadings, WithMapping, WithStyles, WithColumnWidths
{
    public function collection()
    {
        return Lv::all();
    }

    public function headings(): array
    {
        return [
            'ID',
            'LV ID',
            'Nama Driver',
            'Tanggal',
            'Waktu',
            'Departemen',
            'Pengawas',
            'No Unit',
            'Shift',
            'Start HM',
            'Status',
            'Approve',
            'Pesan',
            'Level Oli Trans',
            'Air Radiator',
            'Level Oli Kemudi',
            'Level Oli Engine',
            'Level Oli Rem',
            'Level Oli Perseneling',
            'Body Unit',
            'Ban Baut Roda',
            'Kaca Spion',
            'Alarm Mundur',
            'Lampu Rem',
            'Lampu Depan',
            'Lampu Rotary',
            'Air Wiper',
            'Tiang Bendera',
            'Kemudi',
            'Rem Tangan',
            'Rem Kaki',
            'Klakson',
            'Panel Indikator',
            'WD',
            'Wipers',
            'Radio Rig',
            'Seat Belt',
            'Tempat Duduk',
            'Dongkrak',
            'Ganjal Roda',
            'Kabin Kaca',
            'Kunci Baut Roda',
            'APAR',
            'Dibuat Pada',
            'Diupdate Pada',
        ];
    }

    public function map($lv): array
    {
        return [
            $lv->id,
            $lv->lv_id,
            $lv->nama_driver,
            $lv->date,
            $lv->time,
            $lv->departemen,
            $lv->pengawas,
            $lv->no_unit,
            $lv->shift,
            $lv->start_hm,
            $lv->status,
            $lv->approve,
            $lv->pesan,
            $lv->LevelOlitrans,
            $lv->AirRadiator,
            $lv->LevelOlikemudi,
            $lv->LevelOliengine,
            $lv->LevelOlirem,
            $lv->LevelOliperseneling,
            $lv->BodyUnit,
            $lv->BanBautroda,
            $lv->KacaSpion,
            $lv->AlarmMundur,
            $lv->LampuRem,
            $lv->LampuDepan,
            $lv->LampuRotary,
            $lv->AirWiper,
            $lv->TiangBendera,
            $lv->Kemudi,
            $lv->RemTangan,
            $lv->RemKaki,
            $lv->Klakson,
            $lv->PanelIndikator,
            $lv->Wd,
            $lv->Wipers,
            $lv->RadioRig,
            $lv->SeatBelt,
            $lv->TempatDuduk,
            $lv->Dongkrak,
            $lv->GanjalRoda,
            $lv->KabinKaca,
            $lv->KunciBautroda,
            $lv->Apar,
            $lv->created_at,
            $lv->updated_at,
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => [
                'font' => [
                    'bold' => true,
                    'size' => 12,
                    'color' => ['rgb' => 'FFFFFF'],
                ],
                'fill' => [
                    'fillType' => Fill::FILL_SOLID,
                    'startColor' => ['rgb' => '4F81BD'],
                ],
                'alignment' => [
                    'horizontal' => Alignment::HORIZONTAL_CENTER,
                    'vertical' => Alignment::VERTICAL_CENTER,
                ],
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => Border::BORDER_THIN,
                    ],
                ],
            ],
        ];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 8,
            'B' => 15,
            'C' => 20,
            'D' => 15,
            'E' => 12,
            'F' => 15,
            'G' => 20,
            'H' => 15,
            'I' => 10,
            'J' => 15,
            'K' => 12,
            'L' => 12,
            'M' => 30,
        ];
    }
}
