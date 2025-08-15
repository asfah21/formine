<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ItWoResource\Pages;
use App\Filament\Resources\ItWoResource\RelationManagers;
use App\Models\ItWorkOrder;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\EditableColumn;
use Filament\Tables\Columns\SelectColumn;

class ItWoResource extends Resource
{
    protected static ?string $model = ItWorkOrder::class;
    protected static ?string $navigationGroup = 'IT Management';
    protected static ?string $slug = 'it-wo';
    protected static ?string $label = 'IT Work Order';
    protected static ?string $navigationLabel = 'IT WO';
    protected static ?string $navigationIcon = 'heroicon-o-computer-desktop';

    public static function canAccess(): bool
    {
        return auth()->user()?->role === 'super_admin';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('ticket_number')
                    ->label('No Ticket')
                    ->disabled(),
                TextInput::make('name')
                    ->label('Nama'),
                DatePicker::make('tanggal')
                    ->label('Tanggal'),
                TimePicker::make('jam')
                    ->label('Jam'),
                TextInput::make('department')
                    ->label('Department'),
                TextInput::make('request_type')
                    ->label('Issue'),
                Textarea::make('description')
                    ->Label('Detail / Keterangan'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // TextColumn::make('ticket_number')
                //     ->label('Ticket')
                //     ->searchable()
                //     ->sortable(),
                TextColumn::make('name')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('tanggal')
                    ->label('Tanggal')
                    ->searchable()
                    ->sortable()
                    ->formatStateUsing(fn ($state) => \Carbon\Carbon::parse($state)->format('d-m-y')),
                TextColumn::make('department')
                    ->label('Dept.')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('request_type')
                    ->label('Issue')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('description')
                    ->label('Detail')
                    ->searchable()
                    ->wrap(),
                // ->extraAttributes(['class' => 'text-justify']),
                SelectColumn::make('status')
                    ->label('Status')
                    ->sortable()
                    ->options([
                        'open' => 'Open',
                        'in_progress' => 'Ongoing',
                        'closed' => 'Closed',
                    ])
                    ->selectablePlaceholder(false)
                    ->afterStateUpdated(fn ($record, $state) => $record->update(['status' => $state]))
                    ->disabled(fn ($record) => $record->status === 'closed'),

                TextColumn::make('resolved_by')
                    ->label('Closed by')
                    ->badge()
                    ->color(fn ($state) => $state ? 'info' : 'primary')
                    ->formatStateUsing(fn ($state) => $state === 'Muhammad Al-Asfahani' ? 'Azvan' : $state)
                    ->wrap()
                    ->searchable()
                    ->sortable(),
                // TextColumn::make('open_to_in_progress')
                //     ->label('Open → In Progress')
                //     ->sortable(),
                // TextColumn::make('in_progress_to_closed')
                //     ->label('In Progress → Closed')
                //     ->sortable(),
                TextColumn::make('total_duration')
                    ->label('Duration'),
            ])
            ->defaultSort('tanggal', 'desc') // Data terbaru muncul di atas
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    EditAction::make(),
                    DeleteAction::make(),
                ]),
                // ...
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
            'index' => Pages\ListItWos::route('/'),
            'create' => Pages\CreateItWo::route('/create'),
            'edit' => Pages\EditItWo::route('/{record}/edit'),
        ];
    }
}
