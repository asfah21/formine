<?php

namespace App\Filament\Widgets;

use App\Models\Adt;
use App\Models\Compactor;
use App\Models\Dozer;
use App\Models\Dumptruck;
use App\Models\Exca;
use App\Models\Grader;
use App\Models\Laptop;
use App\Models\Lv;
use App\Models\Manhaul;
use Illuminate\Support\HtmlString;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class B_RusakStats extends BaseWidget
{
    protected function getStats(): array
    {
        $total = Adt::where(function($query) {
                    foreach ((new Adt())->getFillable() as $column) {
                        $query->orWhere($column, 'LIKE', '%Rusak%');
                    }
                })->distinct('NomorUnit')->count() +

                Compactor::where(function($query) {
                    foreach ((new Compactor())->getFillable() as $column) {
                        $query->orWhere($column, 'LIKE', '%Rusak%');
                    }
                })->distinct('no_unit')->count() +

                Dozer::where(function($query) {
                    foreach ((new Dozer())->getFillable() as $column) {
                        $query->orWhere($column, 'LIKE', '%Rusak%');
                    }
                })->distinct('no_unit')->count() +

                Dumptruck::where(function($query) {
                    foreach ((new Dumptruck())->getFillable() as $column) {
                        $query->orWhere($column, 'LIKE', '%Rusak%');
                    }
                })->distinct('no_unit')->count() +

                Exca::where(function($query) {
                    foreach ((new Exca())->getFillable() as $column) {
                        $query->orWhere($column, 'LIKE', '%Rusak%');
                    }
                })->distinct('no_unit')->count() +

                Grader::where(function($query) {
                    foreach ((new Grader())->getFillable() as $column) {
                        $query->orWhere($column, 'LIKE', '%Rusak%');
                    }
                })->distinct('no_unit')->count() +

                Lv::where(function($query) {
                    foreach ((new Lv())->getFillable() as $column) {
                        $query->orWhere($column, 'LIKE', '%Rusak%');
                    }
                })->distinct('no_unit')->count() +

                Manhaul::where(function($query) {
                    foreach ((new Manhaul())->getFillable() as $column) {
                        $query->orWhere($column, 'LIKE', '%Rusak%');
                    }
                })->distinct('no_unit')->count();

        $total_tidak_ada = Adt::where(function($query) {
                    foreach ((new Adt())->getFillable() as $column) {
                        $query->orWhere($column, 'LIKE', '%Tidak Ada%');
                    }
                })->count() +

                Compactor::where(function($query) {
                    foreach ((new Compactor())->getFillable() as $column) {
                        $query->orWhere($column, 'LIKE', '%Tidak Ada%');
                    }
                })->count() +

                Dozer::where(function($query) {
                    foreach ((new Dozer())->getFillable() as $column) {
                        $query->orWhere($column, 'LIKE', '%Tidak Ada%');
                    }
                })->count() +

                Dumptruck::where(function($query) {
                    foreach ((new Dumptruck())->getFillable() as $column) {
                        $query->orWhere($column, 'LIKE', '%Tidak Ada%');
                    }
                })->count() +

                Exca::where(function($query) {
                    foreach ((new Exca())->getFillable() as $column) {
                        $query->orWhere($column, 'LIKE', '%Tidak Ada%');
                    }
                })->count() +

                Grader::where(function($query) {
                    foreach ((new Grader())->getFillable() as $column) {
                        $query->orWhere($column, 'LIKE', '%Tidak Ada%');
                    }
                })->count() +

                Lv::where(function($query) {
                    foreach ((new Lv())->getFillable() as $column) {
                        $query->orWhere($column, 'LIKE', '%Tidak Ada%');
                    }
                })->count() +

                Manhaul::where(function($query) {
                    foreach ((new Manhaul())->getFillable() as $column) {
                        $query->orWhere($column, 'LIKE', '%Tidak Ada%');
                    }
                })->count();

        $laptop = Laptop::where('device_type', 'Laptop')->count();
        $other =    Laptop::where('device_type', '!=', 'Laptop')->count();

        $radios = Adt::whereIn('Radio', ['Rusak', 'Tidak Ada'])->distinct('NomorUnit')->count() +
                Compactor::whereIn('radio', ['Rusak', 'Tidak Ada'])->distinct('no_unit')->count() +
                Dozer::whereIn('radio', ['Rusak', 'Tidak Ada'])->distinct('no_unit')->count() +
                Dumptruck::whereIn('radio', ['Rusak', 'Tidak Ada'])->distinct('no_unit')->count() +
                Exca::whereIn('radio', ['Rusak', 'Tidak Ada'])->distinct('no_unit')->count() +
                Grader::whereIn('radio', ['Rusak', 'Tidak Ada'])->distinct('no_unit')->count() +
                Lv::whereIn('RadioRig', ['Rusak', 'Tidak Ada'])->distinct('no_unit')->count() +
                Manhaul::whereIn('radio', ['Rusak', 'Tidak Ada'])->distinct('no_unit')->count();

                if ($radios > 0) {
                    // Jika ada radio yang rusak, ambil dan gabungkan no_unit
                    $no_units = [
                        'Adt' => Adt::whereIn('Radio', ['Rusak', 'Tidak Ada'])->distinct('NomorUnit')->pluck('NomorUnit')->toArray(),
                        'Compactor' => Compactor::whereIn('radio', ['Rusak', 'Tidak Ada'])->distinct('no_unit')->pluck('no_unit')->toArray(),
                        'Dozer' => Dozer::whereIn('radio', ['Rusak', 'Tidak Ada'])->distinct('no_unit')->pluck('no_unit')->toArray(),
                        'Dumptruck' => Dumptruck::whereIn('radio', ['Rusak', 'Tidak Ada'])->distinct('no_unit')->pluck('no_unit')->toArray(),
                        'Exca' => Exca::whereIn('radio', ['Rusak', 'Tidak Ada'])->distinct('no_unit')->pluck('no_unit')->toArray(),
                        'Grader' => Grader::whereIn('radio', ['Rusak', 'Tidak Ada'])->distinct('no_unit')->pluck('no_unit')->toArray(),
                        'Lv' => Lv::whereIn('RadioRig', ['Rusak', 'Tidak Ada'])->distinct('no_unit')->pluck('no_unit')->toArray(),
                        'Manhaul' => Manhaul::whereIn('radio', ['Rusak', 'Tidak Ada'])->distinct('no_unit')->pluck('no_unit')->toArray()
                    ];

                    // Gabungkan array no_unit menjadi string
                    foreach ($no_units as $key => $units) {
                        $no_units[$key] = implode(', ', $units); // Gabungkan menjadi string
                    }

                    // Gabungkan semua no_unit menjadi satu string dan hapus jika hanya kosong
                    $no_units_string = implode(', ', array_filter($no_units));

        $response = [
            Stat::make('Rusak', $total)
                ->description('Komponen Unit Rusak')
                ->descriptionIcon('heroicon-m-circle-stack')
                ->chart([10, 2, 0, 0, 0, 0, 0])
                ->color('danger'),

            Stat::make('Tidak Ada', $total_tidak_ada)
                ->description('Komponen Unit Tidak Ada')
                ->descriptionIcon('heroicon-m-check-badge')
                ->chart([10, 2, 0, 0, 0, 0, 0])
                ->color('gray'),

            Stat::make('Radio Rig', $radios)
                ->description('Issue Radio Rig Terdeteksi')
                ->descriptionIcon('heroicon-m-radio')
                ->chart([10, 2, 8, 2, 8, 2, 10])
                ->color('primary'),

            // Stat::make(new HtmlString('<span style="font-size: 2em; font-weight: bold;">' . $radios . '</span> Issue Radio Rig :'), '')
            //     ->description(htmlspecialchars($no_units_string))
            //     ->chart([10, 2, 8, 2, 8, 2, 10])
            //     ->color('primary'),

            Stat::make(new HtmlString('<span style="font-size: 2em; font-weight: bold;">' . $laptop . '</span> Aset Lainnya'), '')
                ->description(new HtmlString('<span style="font-size: 2em; font-weight: bold;">' . $other . '</span> Laptop '))
                ->chart([10, 2, 8, 2, 8, 2, 10])
                ->color('success'),
            ];


        // if (!empty($no_units_string)) {
        //         $response[] = Stat::make('No Unit', '')
        //         ->description(htmlspecialchars($no_units_string))
        //         ->color('secondary');
        //     }

            return $response;

        }
        // else{

        //     return [
        //    Stat::make('Peralatan Rusak', $total)
        //         ->description('Unit Terindikasi Rusak')
        //         ->descriptionIcon('heroicon-m-circle-stack')
        //         ->chart([10, 2, 0, 0, 0, 0, 0])
        //         ->color('danger'),
        //     Stat::make('Peralatan Tidak Ada', $total_tidak_ada)
        //         ->description('Unit Peralatan Tidak Ada')
        //         ->descriptionIcon('heroicon-m-check-badge')
        //         ->chart([10, 2, 0, 0, 0, 0, 0])
        //         ->color('gray'),
        //     Stat::make('Radio Rig', $radios)
        //         ->description('Data')
        //         ->descriptionIcon('heroicon-m-exclamation-circle')
        //         ->chart([10, 2, 0, 0, 0, 0, 0])
        //         ->color('secondary'),
        //     ];
        // }
    }
    protected function getColumnCount(): int
    {
        return 4; // Set to 4 columns
    }
}
