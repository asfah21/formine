<?php

namespace App\Filament\Exports;

use App\Models\Manhaul;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;
use OpenSpout\Common\Entity\Style\Style;
use OpenSpout\Common\Entity\Style\Color;
use OpenSpout\Common\Entity\Style\CellAlignment;
use OpenSpout\Common\Entity\Style\CellVerticalAlignment;
use OpenSpout\Common\Entity\Style\Border;
use OpenSpout\Common\Entity\Style\BorderPart;

class ManhaulsExporter extends Exporter
{
    protected static ?string $model = Manhaul::class;

    public static function getColumns(): array
    {
        return [
            // ExportColumn::make('mh_id')->label('MH ID'),
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
            ExportColumn::make('kaca_depan')->label('Kaca Depan'),
            ExportColumn::make('kaca_spion')->label('Kaca Spion'),
            ExportColumn::make('wiper')->label('Wiper'),
            ExportColumn::make('lampu_besar')->label('Lampu Besar'),
            ExportColumn::make('lampu_kecil')->label('Lampu Kecil'),
            ExportColumn::make('lampu_sein')->label('Lampu Sein'),
            ExportColumn::make('lampu_mundur')->label('Lampu Mundur'),
            ExportColumn::make('lampu_kabut')->label('Lampu Kabut'),
            ExportColumn::make('kaca_jdl_pnpg')->label('Kaca Jendela Penumpang'),
            ExportColumn::make('tangga_pnpg')->label('Tangga Penumpang'),
            ExportColumn::make('tangki_angin')->label('Tangki Angin'),
            ExportColumn::make('baut_mur')->label('Baut Mur'),
            ExportColumn::make('ban_kondisi')->label('Ban Kondisi'),
            ExportColumn::make('per_baut_mur')->label('Per (Baut/Mur)'),
            ExportColumn::make('tali_kipas')->label('Tali Kipas'),
            ExportColumn::make('tangki_solar')->label('Tangki Solar'),
            ExportColumn::make('level_oli_mesin')->label('Level Oli Mesin'),
            ExportColumn::make('level_air_radiator')->label('Level Air Radiator'),
            ExportColumn::make('level_oli_steering')->label('Level Oli Steering'),
            ExportColumn::make('level_oli_trans')->label('Level Oli Trans'),
            ExportColumn::make('fenders')->label('Fenders'),
            ExportColumn::make('cat')->label('Cat'),
            ExportColumn::make('kap_mesin')->label('Kap Mesin'),
            ExportColumn::make('pemadam_api')->label('Pemadam Api'),
            ExportColumn::make('seat_belt')->label('Seat Belt'),
            ExportColumn::make('radio')->label('Radio'),
            ExportColumn::make('ganjal_ban')->label('Ganjal Ban'),
            ExportColumn::make('tricon')->label('Tricon'),
            ExportColumn::make('kebersihan')->label('Kebersihan'),
            ExportColumn::make('oli_mesin_tek')->label('Oli Mesin Tekanan'),
            ExportColumn::make('air_pendingin')->label('Air Pendingin'),
            ExportColumn::make('angin_tekanan')->label('Angin Tekanan'),
            ExportColumn::make('solar_isi_tangki')->label('Solar Isi Tangki'),
            ExportColumn::make('klakson_angin')->label('Klakson Angin'),
            ExportColumn::make('klakson_listrik')->label('Klakson Listrik'),
            ExportColumn::make('lampu_dim')->label('Lampu Dim'),
            ExportColumn::make('lampu_kecil2')->label('Lampu Kecil 2'),
            ExportColumn::make('lampu_sen')->label('Lampu Sen'),
            ExportColumn::make('lampu_rem')->label('Lampu Rem'),
            ExportColumn::make('lampu_kabut2')->label('Lampu Kabut 2'),
            ExportColumn::make('lampu_kabin')->label('Lampu Kabin'),
            ExportColumn::make('lampu_pnpg')->label('Lampu Penumpang'),
            ExportColumn::make('tachometer')->label('Tachometer/RPM'),
            ExportColumn::make('hilo_switch')->label('Hi Low Switch'),
            ExportColumn::make('pedal_gas')->label('Pedal Gas'),
            ExportColumn::make('seats')->label('Tempat duduk'),
            ExportColumn::make('fan')->label('Fan'),
            ExportColumn::make('bel_pnpg')->label('Bel Penumpang'),
            ExportColumn::make('ac')->label('AC'),
            ExportColumn::make('radio2')->label('Radio Komunikasi'),
            ExportColumn::make('monitor')->label('Monitor'),
            ExportColumn::make('mic')->label('Mic'),
            ExportColumn::make('kabel_mic')->label('Kabel Mic'),
            ExportColumn::make('kebocoran_oli')->label('Kebocoran Oli'),
            ExportColumn::make('kebocoran_air')->label('Kebocoran Air'),
            ExportColumn::make('kebocoran_udara')->label('Kebocoran Udara'),
            ExportColumn::make('suara_mesin')->label('Suara Mesin'),
            ExportColumn::make('suara_trans')->label('Suara Transmisi'),
            ExportColumn::make('suara_diff')->label('Suara Differential'),
            ExportColumn::make('stir_kemudi')->label('Stir Kemudi'),
            ExportColumn::make('lampu_mundur2')->label('Lampu Mundur 2'),
            ExportColumn::make('rem_kaki')->label('Rem Kaki'),
            ExportColumn::make('rem_parkir')->label('Rem Parkir'),
            ExportColumn::make('gigi_pers')->label('Gigi Persneling'),
            ExportColumn::make('klakson_mundur')->label('Klakson Mundur'),
            ExportColumn::make('lampu_peringatan')->label('Lampu Peringatan'),
            ExportColumn::make('ems_cms')->label('EMS CMS'),
            ExportColumn::make('retarder')->label('Retarder'),
            ExportColumn::make('strobe')->label('Strobe'),
            ExportColumn::make('created_at')->label('Dibuat Pada'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Export data MANHAUL selesai. ' . number_format($export->successful_rows) . ' baris berhasil diekspor.';

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
            ->setBackgroundColor(Color::rgb(79, 129, 189))
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
