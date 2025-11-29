<?php

namespace App\Filament\Exports;

use App\Models\Dumptruck;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;
use OpenSpout\Common\Entity\Style\Style;
use OpenSpout\Common\Entity\Style\Color;
use OpenSpout\Common\Entity\Style\CellAlignment;
use OpenSpout\Common\Entity\Style\CellVerticalAlignment;
use OpenSpout\Common\Entity\Style\Border;
use OpenSpout\Common\Entity\Style\BorderPart;

class DumptruckExporter extends Exporter
{
    protected static ?string $model = Dumptruck::class;

    public static function getColumns(): array
    {
        return [
            // ExportColumn::make('dt_id')->label('DT ID'),
            ExportColumn::make('nama_driver')->label('Nama Driver'),
            ExportColumn::make('departemen')->label('Departemen'),
            ExportColumn::make('pengawas')->label('Pengawas'),
            ExportColumn::make('date')->label('Tanggal'),
            ExportColumn::make('time')->label('Waktu'),
            ExportColumn::make('no_unit')->label('No Unit'),
            // ExportColumn::make('hm_next_service')->label('HM Next Service'),
            ExportColumn::make('start_hm')->label('Start HM'),
            // ExportColumn::make('finish_hm')->label('Finish HM'),
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
            ExportColumn::make('ban_muka_blk')->label('Ban Muka Blinking'),
            ExportColumn::make('tangga_pggn')->label('Tangga Pengguna'),
            ExportColumn::make('lampu_muka_blk')->label('Lampu Muka Blinking'),
            ExportColumn::make('selang_pipa')->label('Selang Pipa'),
            ExportColumn::make('tangki_hidrolik')->label('Tangki Hidrolik'),
            ExportColumn::make('tangki_udara')->label('Tangki Udara'),
            ExportColumn::make('tabung_accu')->label('Tabung Accu'),
            ExportColumn::make('hoist')->label('Hoist'),
            ExportColumn::make('silinder_hidrolik')->label('Silinder Hidrolik'),
            ExportColumn::make('pto')->label('PTO'),
            ExportColumn::make('battery_aki')->label('Battery Aki'),
            ExportColumn::make('ruang_mesin')->label('Ruang Mesin'),
            ExportColumn::make('tali_kipas')->label('Tali Kipas'),
            ExportColumn::make('saringan_udara')->label('Saringan Udara'),
            ExportColumn::make('kabin_operator')->label('Kabin Operator'),
            ExportColumn::make('wiper')->label('Wiper'),
            ExportColumn::make('spion')->label('Spion'),
            ExportColumn::make('ems_cms')->label('EMS CMS'),
            ExportColumn::make('handle_kontrol')->label('Handle Kontrol'),
            ExportColumn::make('knalpot')->label('Knalpot'),
            ExportColumn::make('klakson_mdr')->label('Klakson Mundur'),
            ExportColumn::make('lampu_ptr')->label('Lampu Pointer'),
            ExportColumn::make('pin_dump')->label('Pin Dump'),
            ExportColumn::make('pemadam_api')->label('Pemadam Api'),
            ExportColumn::make('seat_belt')->label('Seat Belt'),
            ExportColumn::make('radio')->label('Radio'),
            ExportColumn::make('ganjal_ban')->label('Ganjal Ban'),
            ExportColumn::make('tricon')->label('Tricon'),
            ExportColumn::make('kebersihan_equip')->label('Kebersihan Equipment'),
            ExportColumn::make('level_oli_mesin')->label('Level Oli Mesin'),
            ExportColumn::make('level_oli_trans')->label('Level Oli Trans'),
            ExportColumn::make('level_oli_hidrolik')->label('Level Oli Hidrolik'),
            ExportColumn::make('level_bahan_bakar')->label('Level Bahan Bakar'),
            ExportColumn::make('saringan_udara2')->label('Saringan Udara 2'),
            ExportColumn::make('tekanan_udara')->label('Tekanan Udara'),
            ExportColumn::make('seat_tempat_ddk')->label('Seat Tempat Duduk'),
            ExportColumn::make('gauge')->label('Gauge'),
            ExportColumn::make('kemudi_stir')->label('Kemudi Stir'),
            ExportColumn::make('pengatur_stir')->label('Pengatur Stir'),
            ExportColumn::make('pedal_rem')->label('Pedal Rem'),
            ExportColumn::make('pedal_gas')->label('Pedal Gas'),
            ExportColumn::make('retarder')->label('Retarder'),
            ExportColumn::make('tuas_gigi')->label('Tuas Gigi'),
            ExportColumn::make('gas_tangan')->label('Gas Tangan'),
            ExportColumn::make('tuas_rem_parkir')->label('Tuas Rem Parkir'),
            ExportColumn::make('klakson')->label('Klakson'),
            ExportColumn::make('lampu_muka_blk2')->label('Lampu Muka Blinking 2'),
            ExportColumn::make('lampu_kabin')->label('Lampu Kabin'),
            ExportColumn::make('ems_cms_2')->label('EMS CMS 2'),
            ExportColumn::make('ac')->label('AC'),
            ExportColumn::make('radio2')->label('Radio 2'),
            ExportColumn::make('monitor')->label('Monitor'),
            ExportColumn::make('mic')->label('Mic'),
            ExportColumn::make('kabel_mic')->label('Kabel Mic'),
            ExportColumn::make('kebocoran_oli')->label('Kebocoran Oli'),
            ExportColumn::make('kebocoran_air')->label('Kebocoran Air'),
            ExportColumn::make('kebocoran_udara')->label('Kebocoran Udara'),
            ExportColumn::make('batu_disela_roda')->label('Batu Disela Roda'),
            ExportColumn::make('suara_mesin')->label('Suara Mesin'),
            ExportColumn::make('suara_transmisi')->label('Suara Transmisi'),
            ExportColumn::make('suara_diff')->label('Suara Diff'),
            ExportColumn::make('stir_kemudi')->label('Stir Kemudi'),
            ExportColumn::make('retarder2')->label('Retarder 2'),
            ExportColumn::make('rem_kaki')->label('Rem Kaki'),
            ExportColumn::make('rem_parkir')->label('Rem Parkir'),
            ExportColumn::make('gigi_pers')->label('Gigi Persneling'),
            ExportColumn::make('klakson_mundur')->label('Klakson Mundur'),
            ExportColumn::make('lampu_peringatan')->label('Lampu Peringatan'),
            ExportColumn::make('ems_cms3')->label('EMS CMS 3'),
            ExportColumn::make('sistem_hidrolik')->label('Sistem Hidrolik'),
            ExportColumn::make('gauge2')->label('Gauge 2'),
            ExportColumn::make('created_at')->label('Dibuat Pada'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Export data DT selesai. ' . number_format($export->successful_rows) . ' baris berhasil diekspor.';

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
            ->setFontColor(Color::BLACK)
            ->setBackgroundColor(Color::rgb(255, 242, 127))
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
