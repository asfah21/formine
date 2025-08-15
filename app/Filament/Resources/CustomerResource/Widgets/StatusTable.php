<?php

namespace App\Filament\Resources\CustomerResource\Widgets;

use App\Models\Exca;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class StatusTable extends BaseWidget
{
    public function table(Table $table): Table
    {
        return $table
            ->query(Exca::query())
            ->columns([
                TextColumn::make('status')
            ]);
    }
}
