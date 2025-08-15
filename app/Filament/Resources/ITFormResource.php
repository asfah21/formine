<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ITFormResource\Pages;
use App\Filament\Resources\ITFormResource\RelationManagers;
use App\Models\ItForm;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ITFormResource extends Resource
{
    protected static ?string $model = ItForm::class;

    protected static ?string $navigationGroup = 'IT Management';

    protected static ?string $slug = 'it-form'; // 'huruf kecil dan tanpa spasi'

    protected static ?string $label = 'IT Form';

    protected static ?string $navigationLabel = 'IT Form';

    protected static ?string $navigationIcon = 'heroicon-o-computer-desktop';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListITForms::route('/'),
            'create' => Pages\CreateITForm::route('/create'),
            'edit' => Pages\EditITForm::route('/{record}/edit'),
        ];
    }
}
