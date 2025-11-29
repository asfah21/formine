<?php

namespace App\Filament\Exports;

use App\Models\Compactor;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;
use OpenSpout\Common\Entity\Style\Style;
use OpenSpout\Common\Entity\Style\Color;
use OpenSpout\Common\Entity\Style\CellAlignment;
use OpenSpout\Common\Entity\Style\CellVerticalAlignment;
use OpenSpout\Common\Entity\Style\Border;
use OpenSpout\Common\Entity\Style\BorderPart;

class CompactorExporter extends Exporter
{
    protected static ?string $model = Compactor::class;

    public static function getColumns(): array
    {
        return [
            // ExportColumn::make('cp_id')->label('CP ID'),
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
            ExportColumn::make('ban_blk')->label('Ban Belakang'),
            ExportColumn::make('drum')->label('Drum'),
            ExportColumn::make('tangga')->label('Tangga'),
            ExportColumn::make('lampu_mk_blk')->label('Lampu Muka/ Belakang'),
            ExportColumn::make('selang_pipa_hidro')->label('Selang Pipa Hidrolik'),
            ExportColumn::make('tangki_hidro')->label('Tangki Hidrolik'),
            ExportColumn::make('battery_aki')->label('Battery Aki'),
            ExportColumn::make('ruang_mesin')->label('Ruang Mesin'),
            ExportColumn::make('saringan_udara')->label('Saringan Udara'),
            ExportColumn::make('kabin_opr')->label('Kabin Operator'),
            ExportColumn::make('jendela_pintu')->label('Jendela/Pintu'),
            ExportColumn::make('wiper')->label('Wiper'),
            ExportColumn::make('kaca_spion')->label('Kaca Spion'),
            ExportColumn::make('handle_control')->label('Handle Control'),
            ExportColumn::make('level_oli_mesin')->label('Level Oli Mesin'),
            ExportColumn::make('level_oli_hidro')->label('Level Oli Hidrolik'),
            ExportColumn::make('level_air_radiator')->label('Level Air Radiator'),
            ExportColumn::make('pemadam_api')->label('Pemadam Api'),
            ExportColumn::make('seat_belt')->label('Seat Belt'),
            ExportColumn::make('tricon')->label('Tricon'),
            ExportColumn::make('kebersihan')->label('Kebersihan'),
            ExportColumn::make('level_oli_mesin2')->label('Level Oli Mesin 2'),
            ExportColumn::make('level_oli_trans')->label('Level Oli Trans'),
            ExportColumn::make('level_oli_hidro2')->label('Level Oli Hidrolik 2'),
            ExportColumn::make('level_bahan_bakar')->label('Level Bahan Bakar'),
            ExportColumn::make('seats')->label('Tempat Duduk'),
            ExportColumn::make('ac')->label('AC'),
            ExportColumn::make('kemudi_stir')->label('Kemudi Stir'),
            ExportColumn::make('pedal_rem')->label('Pedal Rem'),
            ExportColumn::make('pedal_gas')->label('Pedal Gas'),
            ExportColumn::make('gas_tangan')->label('Gas Tangan'),
            ExportColumn::make('tuas_gigi_trans')->label('Tuas Gigi Trans'),
            ExportColumn::make('tuas_maju_mdr')->label('Tuas Maju Mundur'),
            ExportColumn::make('tuas_rem_parkir')->label('Tuas Rem Parkir'),
            ExportColumn::make('klakson')->label('Klakson'),
            ExportColumn::make('lampu_mk_blk2')->label('Lampu Muka Belakang 2'),
            ExportColumn::make('lampu_kabin')->label('Lampu Kabin'),
            ExportColumn::make('ems_cms')->label('EMS CMS'),
            ExportColumn::make('gauge')->label('Gauge'),
            ExportColumn::make('radio')->label('Radio'),
            ExportColumn::make('monitor')->label('Monitor'),
            ExportColumn::make('mic')->label('Mic'),
            ExportColumn::make('kabel_mic')->label('Kabel Mic'),
            ExportColumn::make('kebocoran_oli')->label('Kebocoran Oli'),
            ExportColumn::make('kebocoran_air')->label('Kebocoran Air'),
            ExportColumn::make('suara_mesin')->label('Suara Mesin'),
            ExportColumn::make('suara_trans')->label('Suara Trans'),
            ExportColumn::make('stir_kemudi2')->label('Stir Kemudi'),
            ExportColumn::make('rem_kaki')->label('Rem Kaki'),
            ExportColumn::make('rem_parkir')->label('Rem Parkir'),
            ExportColumn::make('gigi_pers')->label('Gigi Persneling'),
            ExportColumn::make('klakson_mdr')->label('Klakson Mundur'),
            ExportColumn::make('lampu_peringatan')->label('Lampu Peringatan'),
            ExportColumn::make('ems_cms2')->label('EMS CMS 2'),
            ExportColumn::make('sistem_hidro')->label('Sistem Hidrolik'),
            ExportColumn::make('gauge2')->label('Gauge 2'),
            ExportColumn::make('strobe')->label('Strobe'),
            ExportColumn::make('created_at')->label('Dibuat Pada'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Export data Compactor selesai. ' . number_format($export->successful_rows) . ' baris berhasil diekspor.';

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
            ->setBackgroundColor(Color::rgb(100, 193, 221))
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
