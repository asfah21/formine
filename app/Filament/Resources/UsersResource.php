<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UsersResource\Pages;
use App\Filament\Resources\UsersResource\RelationManagers;
use App\Models\User;
use App\Models\Users;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UsersResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationGroup = 'Management';

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\TextInput::make('email')->email()->required(),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->required(),
                Forms\Components\Select::make('role')
                    ->label('Field')
                    ->options([
                        'super_admin' => 'Show All',
                        'admin' => 'Show',
                        'foreman' => 'Hide',
                    ])
                    ->required(),
                Forms\Components\Select::make('roles')
                    ->relationship('roles', 'name'),

                Forms\Components\TextInput::make('nik')
                    ->type('number'),

                Forms\Components\Select::make('gender')
                    ->options([
                        'L',
                        'P',
                    ]),
                Forms\Components\Select::make('agama')
                    ->options([
                        'Islam',
                        'Kristen',
                        'Protestan',
                        'Hindu',
                        'Budha',
                    ]),

                Forms\Components\TextInput::make('no_hp'),

                Forms\Components\TextInput::make('jabatan'),

                Forms\Components\TextInput::make('department'),

                Forms\Components\TextInput::make('alamat'),

                Forms\Components\TextInput::make('ring'),

                Forms\Components\TextInput::make('status'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->sortable()->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->sortable()->searchable(),

                Tables\Columns\TextColumn::make('role')
                    ->label('Show Field')
                    ->sortable()
                    ->searchable()
                    ->badge() // Mengaktifkan badge
                    ->formatStateUsing(function ($state) {
                        $roleMapping = [
                            'super_admin' => 'Show All',
                            'admin'       => 'Show',
                            'foreman'     => 'Hide',
                        ];
                        return $roleMapping[$state] ?? $state;
                    })
                    ->color(function ($state) {
                        // Mengatur warna badge berdasarkan role
                        return match ($state) {
                            'super_admin' => 'info',  // Hijau untuk super_admin
                            'admin'     => 'success',  // Biru untuk admin
                            'foreman'     => 'danger',   // Merah untuk foreman
                            default    => 'secondary',// Abu-abu untuk role lainnya
                        };
                    }),

                Tables\Columns\TextColumn::make('roles.name')
                    ->formatStateUsing(fn ($state) => ucwords(str_replace('_', ' ', $state)))
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUsers::route('/create'),
            'edit' => Pages\EditUsers::route('/{record}/edit'),
        ];
    }
}
