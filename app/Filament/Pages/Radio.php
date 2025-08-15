<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use App\Models\Adt;
use App\Models\Compactor;
use App\Models\Dozer;
use App\Models\Dumptruck;
use App\Models\Exca;
use App\Models\Grader;
use App\Models\Lv;
use App\Models\Manhaul;
use App\Models\RadioData; //dummy Model

class Radio extends Page implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;

    protected static ?string $navigationGroup = 'Comms System';
    protected static ?string $navigationIcon = 'heroicon-o-radio';
    protected static string $view = 'filament.pages.radio';

    protected function getTableQuery()
    {
        $adtQuery = Adt::query()
            ->whereIn('Radio', ['Rusak', 'Tidak Ada'])
            ->selectRaw("`adt_id` as id, `NomorUnit` as unit, `nama_driver` as driver, `date`, `Shift` as shift, `Radio` as status_radio");

        $compactorQuery = Compactor::query()
            ->whereIn('radio', ['Rusak', 'Tidak Ada'])
            ->selectRaw("`cp_id` as id, `no_unit` as unit, `nama_driver` as driver, `date`, `shift`, `radio` as status_radio");

        $dozerQuery = Dozer::query()
            ->whereIn('radio', ['Rusak', 'Tidak Ada'])
            ->selectRaw("`bd_id` as id, `no_unit` as unit, `nama_driver` as driver, `date`, `shift`, `radio` as status_radio");

        $dumptruckQuery = Dumptruck::query()
            ->whereIn('radio', ['Rusak', 'Tidak Ada'])
            ->selectRaw("`dt_id` as id, `no_unit` as unit, `nama_driver` as driver, `date`, `shift`, `radio` as status_radio");

        $excaQuery = Exca::query()
            ->whereIn('radio', ['Rusak', 'Tidak Ada'])
            ->selectRaw("`ex_id` as id, `no_unit` as unit, `nama_driver` as driver, `date`, `shift`, `radio` as status_radio");

        $graderQuery = Grader::query()
            ->whereIn('radio', ['Rusak', 'Tidak Ada'])
            ->selectRaw("`mg_id` as id, `no_unit` as unit, `nama_driver` as driver, `date`, `shift`, `radio` as status_radio");

        $lvQuery = Lv::query()
            ->whereIn('RadioRig', ['Rusak', 'Tidak Ada'])
            ->selectRaw("`lv_id` as id, `no_unit` as unit, `nama_driver` as driver, `date`, `shift`, `RadioRig` as status_radio");

        $manhaulQuery = Manhaul::query()
            ->whereIn('radio', ['Rusak', 'Tidak Ada'])
            ->selectRaw("`mh_id` as id, `no_unit` as unit, `nama_driver` as driver, `date`, `shift`, `radio` as status_radio");

        // Gabungkan semua query dengan UNION ALL
        $unionQuery = $adtQuery
            ->unionAll($compactorQuery)
            ->unionAll($dozerQuery)
            ->unionAll($dumptruckQuery)
            ->unionAll($excaQuery)
            ->unionAll($graderQuery)
            ->unionAll($lvQuery)
            ->unionAll($manhaulQuery);

        // Subquery pertama: menambahkan window function
        $subquery = RadioData::query()
            ->fromSub($unionQuery, 'data')
            ->selectRaw("data.*, ROW_NUMBER() OVER (PARTITION BY data.unit ORDER BY data.date DESC) as rn");

        // Subquery kedua: filter berdasarkan rn
        return RadioData::query()
            ->fromSub($subquery, 't')
            ->where('t.rn', '=', 1)
            ->orderByDesc('t.date');
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('driver')->label('Nama Driver')->sortable()->searchable(),
            TextColumn::make('unit')->label('Unit')->sortable()->searchable(),
            TextColumn::make('date')->label('Tanggal')->date()->sortable()->searchable(),
            TextColumn::make('shift')->label('Shift')->sortable()->searchable(),
            TextColumn::make('status_radio')
                ->label('Status Radio')
                ->sortable()
                ->searchable()
                ->badge()
                ->color(fn ($state) => $state === 'Rusak' ? 'danger' : 'warning'),
        ];
    }

    public function table(Table $table): Table
    {
        return $table
            ->query($this->getTableQuery()) // Pastikan ini mengembalikan query builder
            ->columns($this->getTableColumns())
            ->defaultSort('date', 'desc')
            ->striped();
    }

    public function getStats(): array
    {
        $radios = Adt::whereIn('Radio', ['Rusak'])->distinct('NomorUnit')->count() +
            Compactor::whereIn('radio', ['Rusak'])->distinct('no_unit')->count() +
            Dozer::whereIn('radio', ['Rusak'])->distinct('no_unit')->count() +
            Dumptruck::whereIn('radio', ['Rusak'])->distinct('no_unit')->count() +
            Exca::whereIn('radio', ['Rusak'])->distinct('no_unit')->count() +
            Grader::whereIn('radio', ['Rusak'])->distinct('no_unit')->count() +
            Lv::whereIn('RadioRig', ['Rusak'])->distinct('no_unit')->count() +
            Manhaul::whereIn('radio', ['Rusak'])->distinct('no_unit')->count();

        $no_radios = Adt::whereIn('Radio', ['Tidak Ada'])->distinct('NomorUnit')->count() +
            Compactor::whereIn('radio', ['Tidak Ada'])->distinct('no_unit')->count() +
            Dozer::whereIn('radio', ['Tidak Ada'])->distinct('no_unit')->count() +
            Dumptruck::whereIn('radio', ['Tidak Ada'])->distinct('no_unit')->count() +
            Exca::whereIn('radio', ['Tidak Ada'])->distinct('no_unit')->count() +
            Grader::whereIn('radio', ['Tidak Ada'])->distinct('no_unit')->count() +
            Lv::whereIn('RadioRig', ['Tidak Ada'])->distinct('no_unit')->count() +
            Manhaul::whereIn('radio', ['Tidak Ada'])->distinct('no_unit')->count();

        return [
            'total_radios_rusak' => $radios,
            'total_no_radios' => $no_radios,
        ];
    }
}
