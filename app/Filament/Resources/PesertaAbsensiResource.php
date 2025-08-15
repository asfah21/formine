<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PesertaAbsensiResource\Pages;
use App\Filament\Resources\PesertaAbsensiResource\RelationManagers;
use App\Models\Absensi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PesertaAbsensiResource extends Resource
{
    protected static ?string $model = Absensi::class;

    protected static ?string $navigationGroup = 'Daftar Hadir Online';

    protected static ?string $navigationIcon = 'heroicon-o-identification';

    protected static ?string $navigationLabel = 'List Peserta';

    // protected static ?string $slug = 'daftar-hadir';
    protected static ?string $label = 'List Peserta';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('no')
                ->label('No')
                ->rowIndex(),
            TextColumn::make('name')
                ->label('Nama')
                ->sortable()
                ->searchable(),
            TextColumn::make('sesi.agenda')
                ->label('Agenda')
                ->sortable()
                ->searchable()
                ->alignment('center'),
            TextColumn::make('jabatan')
                ->label('Jabatan')
                ->sortable()
                ->searchable()
                ->alignment('center'),
            TextColumn::make('jam_tidur')
                ->label('Jam Tidur')
                ->formatStateUsing(fn ($state) => $state . ' Jam')
                ->sortable()
                ->searchable()
                ->alignment('center'),
            TextColumn::make('sehat')
                ->label('Sehat')
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                    'Ya' => 'success',
                    'Tidak' => 'danger',
                })
                ->sortable()
                ->alignment('center'),
            ImageColumn::make('photo')
                ->label('Foto Selfie')
                ->getStateUsing(fn ($record) => asset('storage/selfies/' . $record->photo))
                ->circular()
                ->alignment('center'),
            ])


            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
            // ->bulkActions([
            //     Tables\Actions\BulkActionGroup::make([
            //         Tables\Actions\DeleteBulkAction::make(),
            //     ]),
            // ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPesertaAbsensis::route('/'),
            'create' => Pages\CreatePesertaAbsensi::route('/create'),
            'edit' => Pages\EditPesertaAbsensi::route('/{record}/edit'),
        ];
    }
}
