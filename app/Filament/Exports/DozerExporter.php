<?php

namespace App\Filament\Exports;

use App\Models\Dozer;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;
use OpenSpout\Common\Entity\Style\Style;
use OpenSpout\Common\Entity\Style\Color;
use OpenSpout\Common\Entity\Style\CellAlignment;
use OpenSpout\Common\Entity\Style\CellVerticalAlignment;
use OpenSpout\Common\Entity\Style\Border;
use OpenSpout\Common\Entity\Style\BorderPart;

class DozerExporter extends Exporter
{
    protected static ?string $model = Dozer::class;

    public static function getColumns(): array
    {
        return [
            // ExportColumn::make('bd_id')->label('BD ID'),
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
            ExportColumn::make('idler')->label('Idler'),
            ExportColumn::make('kap_trunion')->label('Kap & Trunion push arm'),
            ExportColumn::make('final_drive')->label('Final Drive'),
            ExportColumn::make('segmen_sprocket')->label('Segmen Sprocket'),
            ExportColumn::make('pemadam_api')->label('Pemadam Api'),
            ExportColumn::make('lampu_mk_blk')->label('Lampu Muka Belakang'),
            ExportColumn::make('track')->label('Track'),
            ExportColumn::make('roller_track')->label('Roller Track'),
            ExportColumn::make('ripper')->label('Ripper'),
            ExportColumn::make('bettery')->label('Battery'),
            ExportColumn::make('pivot_shaft')->label('Pivot Shaft'),
            ExportColumn::make('saringan_udara')->label('Saringan Udara'),
            ExportColumn::make('silinder_tilt')->label('Silinder Tilt blade'),
            ExportColumn::make('silinder_lift')->label('Silinder Lift blade'),
            ExportColumn::make('ruang_mesin')->label('Ruang Mesin'),
            ExportColumn::make('tangga_pggn')->label('Tangga Pegangan'),
            ExportColumn::make('kabin_luar')->label('Kabin Luar'),
            ExportColumn::make('kabin_opr')->label('Kabin Operator'),
            ExportColumn::make('jendela_pintu')->label('Jendela Pintu'),
            ExportColumn::make('kipas_kaca')->label('Kipas Kaca'),
            ExportColumn::make('kaca_spion')->label('Kaca Spion'),
            ExportColumn::make('handle_control')->label('Handle Control'),
            ExportColumn::make('level_oli_mesin')->label('Level Oli Mesin'),
            ExportColumn::make('level_oli_hidro')->label('Level Oli Hidrolik'),
            ExportColumn::make('level_air_radiator')->label('Level Air Radiator'),
            ExportColumn::make('pemadam_api2')->label('Pemadam Api 2'),
            ExportColumn::make('seat_belt')->label('Seat Belt'),
            ExportColumn::make('tricon')->label('Tricon'),
            ExportColumn::make('kebersihan')->label('Kebersihan'),
            ExportColumn::make('level_oli_mesin2')->label('Level Oli Mesin 2'),
            ExportColumn::make('level_oli_trans')->label('Level Oli Trans'),
            ExportColumn::make('level_oli_pivot')->label('Level Oli Pivot'),
            ExportColumn::make('level_oli_hidro2')->label('Level Oli Hidrolik 2'),
            ExportColumn::make('seats')->label('Tempat Duduk'),
            ExportColumn::make('ac')->label('AC'),
            ExportColumn::make('tuas_control')->label('Tuas Control'),
            ExportColumn::make('trottle')->label('Throttle'),
            ExportColumn::make('pedal_dece')->label('Pedal Decelator'),
            ExportColumn::make('kemudi')->label('Kemudi'),
            ExportColumn::make('tuas_trans')->label('Tuas Trans'),
            ExportColumn::make('pedal_rem')->label('Pedal Rem'),
            ExportColumn::make('tuas_rem')->label('Tuas Rem'),
            ExportColumn::make('klakson')->label('Klakson'),
            ExportColumn::make('kabin_opr2')->label('Kabin Operator 2'),
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
            ExportColumn::make('suara_transmisi')->label('Suara Transmisi'),
            ExportColumn::make('stir_kemudi')->label('Stir Kemudi'),
            ExportColumn::make('rem_kaki')->label('Rem Kaki'),
            ExportColumn::make('gigi_pers')->label('Gigi Persneling'),
            ExportColumn::make('klakson_mdr')->label('Klakson Mundur'),
            ExportColumn::make('lampu_peringatan')->label('Lampu Peringatan'),
            ExportColumn::make('ems_cms2')->label('EMS CMS 2'),
            ExportColumn::make('sistem_hidro')->label('Sistem Hidrolik'),
            ExportColumn::make('strobe')->label('Strobe'),
            ExportColumn::make('created_at')->label('Dibuat Pada'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Export data Bulldozer selesai. ' . number_format($export->successful_rows) . ' baris berhasil diekspor.';

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
            ->setBackgroundColor(Color::rgb(221, 37, 37))
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
