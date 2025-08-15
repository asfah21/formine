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
use App\Models\KetData; //dummy Model
use Illuminate\Support\Facades\DB;

class Keterangan extends Page implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;

    protected static ?string $navigationGroup = 'Comms System';
    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';
    protected static string $view = 'filament.pages.ket';

    protected static ?string $label = 'Keterangan Unit';

    protected static ?string $navigationLabel = 'Keterangan';

    protected function getTableQuery($search = null)
    {
        $adtQuery = Adt::query()
            ->whereNotNull('pesan')
            ->selectRaw("`adt_id` as id, `NomorUnit` as unit, `nama_driver` as nama_driver, `date`, `time`, `Shift` as shift, `pesan`");

        $compactorQuery = Compactor::query()
            ->whereNotNull('pesan')
            ->selectRaw("`cp_id` as id, `no_unit` as unit, `nama_driver` as nama_driver, `date`, `time`, `shift`, `pesan`");

        $dozerQuery = Dozer::query()
            ->whereNotNull('pesan')
            ->selectRaw("`bd_id` as id, `no_unit` as unit, `nama_driver` as nama_driver, `date`, `time`, `shift`, `pesan`");

        $dumptruckQuery = Dumptruck::query()
            ->whereNotNull('pesan')
            ->selectRaw("`dt_id` as id, `no_unit` as unit, `nama_driver` as nama_driver, `date`, `time`, `shift`, `pesan`");

        $excaQuery = Exca::query()
            ->whereNotNull('pesan')
            ->selectRaw("`ex_id` as id, `no_unit` as unit, `nama_driver` as nama_driver, `date`, `time`, `shift`, `pesan`");

        $graderQuery = Grader::query()
            ->whereNotNull('pesan')
            ->selectRaw("`mg_id` as id, `no_unit` as unit, `nama_driver` as nama_driver, `date`, `time`, `shift`, `pesan`");

        $lvQuery = Lv::query()
            ->whereNotNull('pesan')
            ->selectRaw("`lv_id` as id, `no_unit` as unit, `nama_driver` as nama_driver, `date`, `time`, `shift`, `pesan`");

        $manhaulQuery = Manhaul::query()
            ->whereNotNull('pesan')
            ->selectRaw("`mh_id` as id, `no_unit` as unit, `nama_driver` as nama_driver, `date`, `time`, `shift`, `pesan`");

        $query = $adtQuery
            ->unionAll($compactorQuery)
            ->unionAll($dozerQuery)
            ->unionAll($dumptruckQuery)
            ->unionAll($excaQuery)
            ->unionAll($graderQuery)
            ->unionAll($lvQuery)
            ->unionAll($manhaulQuery);

        return KetData::query()
            ->fromSub($query, 't')
            ->orderByDesc('t.date');
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('nama_driver')->label('Nama Driver')->sortable()->searchable(),
            TextColumn::make('unit')->label('Unit')->sortable()->searchable(),
            TextColumn::make('date')->label('Tanggal')->date()->sortable()->searchable(),
            TextColumn::make('time')->label('Jam')->sortable()->searchable(),
            TextColumn::make('shift')->label('Shift')->sortable()->searchable(),
            TextColumn::make('pesan')->label('Pesan / Keterangan')->sortable()->searchable()->wrap()->extraAttributes(['class' => 'text-justify']),

        ];
    }

    public function table(Table $table): Table
    {
        return $table
            ->query($this->getTableQuery())
            ->columns($this->getTableColumns())
            ->defaultSort('date', 'desc') //
            ->striped() ;
    }

}
