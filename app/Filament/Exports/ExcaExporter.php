<?php

namespace App\Filament\Exports;

use App\Models\Exca;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;
use OpenSpout\Common\Entity\Style\Style;
use OpenSpout\Common\Entity\Style\Color;
use OpenSpout\Common\Entity\Style\CellAlignment;
use OpenSpout\Common\Entity\Style\CellVerticalAlignment;
use OpenSpout\Common\Entity\Style\Border;
use OpenSpout\Common\Entity\Style\BorderPart;

class ExcaExporter extends Exporter
{
    protected static ?string $model = Exca::class;

    public static function getColumns(): array
    {
        return [
            // ExportColumn::make('ex_id')->label('EX ID'),
            ExportColumn::make('nama_driver')->label('Nama Driver'),
            ExportColumn::make('departemen')->label('Departemen'),
            ExportColumn::make('pengawas')->label('Pengawas'),
            ExportColumn::make('date')->label('Tanggal'),
            ExportColumn::make('time')->label('Waktu'),
            ExportColumn::make('no_unit')->label('No Unit'),
            // ExportColumn::make('hm_next_service')->label('HM Next Service'),
            ExportColumn::make('start_hm')->label('Start HM'),
            ExportColumn::make('finish_hm')->label('Finish HM'),
            ExportColumn::make('shift')->label('Shift'),
            ExportColumn::make('approve')
                ->label('Approve')
                ->formatStateUsing(function ($state) {
                    return ($state !== null && $state !== "0")
                        ? 'Approved'
                        : 'Waiting Approval';
                }),
            // ExportColumn::make('status')->label('Status'),
            ExportColumn::make('pesan')->label('Pesan'),
            ExportColumn::make('track')->label('Track'),
            ExportColumn::make('roller_track')->label('Roller Track'),
            ExportColumn::make('idler')->label('Idler'),
            ExportColumn::make('sprocket')->label('Sprocket'),
            ExportColumn::make('motor_travel')->label('Motor Travel'),
            ExportColumn::make('tangga_pggn')->label('Tangga Pengguna'),
            ExportColumn::make('lampu_mk_blk')->label('Lampu Marker Blinking'),
            ExportColumn::make('selang_pipa')->label('Selang Pipa'),
            ExportColumn::make('tangki_hidrolik')->label('Tangki Hidrolik'),
            ExportColumn::make('bucket')->label('Bucket'),
            ExportColumn::make('boom_bucket')->label('Boom Bucket'),
            ExportColumn::make('stick_arm_bucket')->label('Stick Arm Bucket'),
            ExportColumn::make('battery')->label('Battery'),
            ExportColumn::make('ruang_mesin')->label('Ruang Mesin'),
            ExportColumn::make('indikator_srg_udara')->label('Indikator Surga Udara'),
            ExportColumn::make('pemadam_api')->label('Pemadam Api'),
            ExportColumn::make('kabin_opr')->label('Kabin Operator'),
            ExportColumn::make('jendela_pintu')->label('Jendela Pintu'),
            ExportColumn::make('kipas_kaca')->label('Kipas Kaca'),
            ExportColumn::make('kaca_spion')->label('Kaca Spion'),
            ExportColumn::make('ems_cms')->label('EMS CMS'),
            ExportColumn::make('handle_control')->label('Handle Control'),
            ExportColumn::make('level_oli_mesin')->label('Level Oli Mesin'),
            ExportColumn::make('level_oli_hidrolik')->label('Level Oli Hidrolik'),
            ExportColumn::make('level_air_radiator')->label('Level Air Radiator'),
            ExportColumn::make('pemadam_api2')->label('Pemadam Api 2'),
            ExportColumn::make('seat_belt')->label('Seat Belt'),
            ExportColumn::make('tricon')->label('Tricon'),
            ExportColumn::make('kebersihan')->label('Kebersihan'),
            ExportColumn::make('level_oli_mesin2')->label('Level Oli Mesin 2'),
            ExportColumn::make('level_oli_hidrolik2')->label('Level Oli Hidrolik 2'),
            ExportColumn::make('level_oli_swing')->label('Level Oli Swing'),
            ExportColumn::make('seats')->label('Tempat Duduk'),
            ExportColumn::make('ac')->label('AC'),
            ExportColumn::make('kemudi_stir')->label('Kemudi Stir'),
            ExportColumn::make('throttle')->label('Throttle'),
            ExportColumn::make('tuas_rem_parkir')->label('Tuas Rem Parkir'),
            ExportColumn::make('tuas_kontrol')->label('Tuas Kontrol'),
            ExportColumn::make('klakson')->label('Klakson'),
            ExportColumn::make('kabin_operator')->label('Kabin Operator'),
            ExportColumn::make('lampu_mk_blk2')->label('Lampu Marker Blinking 2'),
            ExportColumn::make('lampu_kabin')->label('Lampu Kabin'),
            ExportColumn::make('ems')->label('EMS'),
            ExportColumn::make('switch_work_mode')->label('Switch Work Mode'),
            ExportColumn::make('switch_power_mode')->label('Switch Power Mode'),
            ExportColumn::make('switch_aec')->label('Switch AEC'),
            ExportColumn::make('radio')->label('Radio'),
            ExportColumn::make('monitor')->label('Monitor'),
            ExportColumn::make('mic')->label('Mic'),
            ExportColumn::make('kabel_mic')->label('Kabel Mic'),
            ExportColumn::make('kebocoran_oli')->label('Kebocoran Oli'),
            ExportColumn::make('kebocoran_air')->label('Kebocoran Air'),
            ExportColumn::make('suara_mesin')->label('Suara Mesin'),
            ExportColumn::make('suara_trans')->label('Suara Trans'),
            ExportColumn::make('stir_kemudi')->label('Stir Kemudi'),
            ExportColumn::make('klakson_travel')->label('Klakson Travel'),
            ExportColumn::make('ems_cms3')->label('EMS CMS 3'),
            ExportColumn::make('sistem_hidrolik')->label('Sistem Hidrolik'),
            ExportColumn::make('lampu_peringatan')->label('Lampu Peringatan'),
            ExportColumn::make('strobe')->label('Strobe'),
            ExportColumn::make('created_at')->label('Dibuat Pada'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Export data EXCA selesai. ' . number_format($export->successful_rows) . ' baris berhasil diekspor.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' baris gagal diekspor.';
        }

        return $body;
    }

    // STYLE HEADER
    public function getXlsxHeaderCellStyle(): ?Style
    {
        return (new Style())
            ->setFontBold()
            ->setFontSize(12)
            ->setFontColor(Color::WHITE)
            ->setBackgroundColor(Color::rgb(211, 102, 51))
            ->setCellAlignment(CellAlignment::CENTER)
            ->setCellVerticalAlignment(CellVerticalAlignment::CENTER)
            ->setBorder(
                new Border(
                    new BorderPart(Border::BOTTOM, Color::BLACK, Border::WIDTH_THIN),
                    new BorderPart(Border::LEFT, Color::BLACK, Border::WIDTH_THIN),
                    new BorderPart(Border::RIGHT, Color::BLACK, Border::WIDTH_THIN),
                    new BorderPart(Border::TOP, Color::BLACK, Border::WIDTH_THIN)
                )
            );
    }

    // STYLE DATA ROW
    public function getXlsxCellStyle(): ?Style
    {
        return (new Style())
            ->setFontSize(11)
            ->setCellAlignment(CellAlignment::LEFT)
            ->setCellVerticalAlignment(CellVerticalAlignment::CENTER)
            ->setBorder(
                new Border(
                    new BorderPart(Border::BOTTOM, Color::rgb(200, 200, 200), Border::WIDTH_THIN),
                    new BorderPart(Border::LEFT, Color::rgb(200, 200, 200), Border::WIDTH_THIN),
                    new BorderPart(Border::RIGHT, Color::rgb(200, 200, 200), Border::WIDTH_THIN),
                    new BorderPart(Border::TOP, Color::rgb(200, 200, 200), Border::WIDTH_THIN)
                )
            );
    }
}
