<?php

namespace App\Filament\Widgets;

use App\Models\Exca;
use App\Models\Manhaul;
use App\Models\Adt;
use App\Models\Compactor;
use App\Models\Dozer;
use App\Models\Dumptruck;
use App\Models\Grader;
use App\Models\Lv;
use Filament\Widgets\ChartWidget;

class LaptopChart extends ChartWidget
{
    protected static ?string $heading = 'Komponen Rusak';

    public function getDescription(): ?string
    {
        return 'Identifikasi komponen rusak pada unit per bulan';
    }

    protected function getData(): array
    {
        // Daftar model yang akan dihitung
        $models = [
            Exca::class,
            Manhaul::class,
            Adt::class,
            Compactor::class,
            Dozer::class,
            Dumptruck::class,
            Grader::class,
            Lv::class
        ];

        $damagesPerMonth = [];

        // Loop untuk menghitung jumlah unit rusak per model
        foreach ($models as $model) {
            // Menambahkan hasil untuk model tertentu
            $damagesPerMonth[$model] = [];

            // Loop untuk menghitung jumlah unit rusak dari Januari sampai Desember
            for ($i = 1; $i <= 12; $i++) {
                // Menghitung jumlah unit rusak per bulan untuk model ini
                $damagesPerMonth[$model][] = floor(
                    $model::whereMonth('created_at', $i)  // Menyaring berdasarkan bulan
                        ->where(function($query) use ($model) {
                            // Mengecek semua kolom dalam tabel model untuk mencari 'Rusak'
                            foreach (app($model)->getFillable() as $column) {
                                $query->orWhere($column, 'LIKE', '%Rusak%');
                            }
                        })
                        ->count()  // Menghitung jumlah unit yang rusak per bulan
                );
            }
        }

        $colors = [
            '#FF5733', // Exca
            '#33FF57', // Manhaul
            '#3357FF', // Adt
            '#57FF33', // Compactor
            '#5733FF', // Dozer
            '#FF33A6', // Dumptruck
            '#FFFFFF', // Grader
            '#33C0FF'  // Lv
        ];

        // Format data untuk grafik
        return [
            'datasets' => array_map(function($model, $index) use ($damagesPerMonth, $colors) {
                return [
                    'label' => class_basename($model) . '',  // Menampilkan nama model dengan label "Rusak"
                    'data' => $damagesPerMonth[$model],  // Data jumlah unit rusak per bulan untuk model
                    'backgroundColor' => $colors[$index],  // Menetapkan warna latar belakang untuk dataset
                    'borderColor' => $colors[$index],      // Menetapkan warna batas untuk dataset
                    'borderWidth' => 1,                    // Mengatur lebar batas (opsional)
                ];
            }, $models, array_keys($models)),  // Menambahkan index untuk mengakses warna yang sesuai
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
