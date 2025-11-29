<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TimesheetResource\Pages;
use App\Models\Timesheet;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Select;

class TimesheetResource extends Resource
{
    protected static ?string $model = Timesheet::class;

    protected static ?string $navigationGroup = 'Formulir';
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationLabel = 'Timesheet';
    protected static ?string $modelLabel = 'Timesheet';

    public static function getNavigationBadge(): ?string
    {
        $count = static::getModel()::where(function ($query) {
            $query->where('approve_by', null);
        })->count();

        return $count > 0 ? (string) $count : null;
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('nama')
                ->label('Nama Operator')
                ->required(),
                
            TextInput::make('nomor_unit')
                ->label('Nomor Unit')
                ->required(),
                
            DatePicker::make('tanggal')
                ->label('Tanggal')
                ->format('Y-m-d')
                ->displayFormat('d/m/Y')
                ->native(false)
                ->required(),
                
            TextInput::make('shift')
                ->label('Shift')
                ->required(),
            TextInput::make('operational_minutes')
                ->label('Operational (Jam)')
                ->numeric()
                // saat form dibuka (record edit) → convert menit ke jam
                ->formatStateUsing(fn ($state) => $state ? round($state / 60, 1) : null)
                // saat form disimpan → convert jam ke menit
                ->dehydrateStateUsing(fn ($state) => $state ? $state * 60 : null)
                ->required(),
            
            TextInput::make('total_work_minutes')
                ->label('Total Work (Jam)')
                ->numeric()
                ->formatStateUsing(fn ($state) => $state ? round($state / 60, 1) : null)
                ->dehydrateStateUsing(fn ($state) => $state ? $state * 60 : null)
                ->required(),
            

            // TextInput::make('operational_minutes')
            //     ->label('Operational (Jam)')
            //     ->numeric(),
            //     // ->content(fn ($record) => $record ? round($record->operational_minutes / 60, 1) . ' Jam' : '-'),
            
            // TextInput::make('total_work_minutes')
            //     ->label('Total Work (Menit)')
            //     ->numeric(),    
            //     // ->content(fn ($record) => $record ? round($record->total_work_minutes / 60, 1) . ' Jam' : '-'),
            
                
            // TextInput::make('hm_awal')
            //     ->label('HM Awal')
            //     ->numeric()
            //     ->required(),
                
            // TextInput::make('hm_akhir')
            //     ->label('HM Akhir')
            //     ->numeric()
            //     ->required(),
                
            // Display existing entries in a table for editing
            Forms\Components\Fieldset::make('Rincian Waktu')
                ->schema([
                    Forms\Components\Repeater::make('entries')
                        ->label('')
                        ->relationship()
                        ->schema([
                            TimePicker::make('start_at')
                                ->label('Jam Mulai')
                                ->seconds(false)
                                ->required(),
                                
                            TimePicker::make('end_at')
                                ->label('Jam Selesai')
                                ->seconds(false)
                                ->required(),
                                
                            Select::make('activity_code_id')
                                ->label('Kode Aktivitas')
                                ->relationship('code', 'category' )
                                ->searchable()
                                ->preload()
                                ->required(),

                            TextInput::make('description')
                                ->label('Detail Kegiatan')
                                ->required(),
                            
                        ])
                        ->columns(4)
                        ->itemLabel(fn (array $state): ?string => 
                            isset($state['start_at'], $state['end_at']) 
                                ? "{$state['start_at']} - {$state['end_at']}  ⏱({$state['duration_minutes']} menit)" 
                                : null)
                        // ->reorderable()
                        ->defaultItems(0)
                        ->collapsible()
                        ->collapsed()
                        ->addActionLabel('Tambah Rincian Waktu')
                        ->deleteAction(
                            fn (Forms\Components\Actions\Action $action) => $action->requiresConfirmation(),
                        ),
                ])
                ->columnSpanFull(),
                
            // Textarea::make('catatan')
            //     ->label('Catatan')
            //     ->columnSpanFull(),
        ]);
    }

    protected static function handleApprovalToggle($record, $state)
    {
        if (!$record) {
            return; // If $record is null, exit the function
        }

        $record->update(['approve' => $state]);

        if ($state) {
            // If toggle is active, set approved_by with current user's name
            $email = Auth::user()->email;
            $name = Auth::user()->name;
            $record->update([
                'approve_by' => $name,
            ]);
        } else {
            // If toggle is inactive, clear approved_by
            $record->update([
                'approve_by' => null,
            ]);
        }
    }

    public static function table(Table $table): Table
    {
        $query = Timesheet::query()->orderBy('tanggal', 'desc');

        return $table
            ->query($query)
            ->columns([
                TextColumn::make('nama')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('tanggal')
                    ->label('Tanggal')
                    ->searchable()
                    ->sortable()
                    ->date('d/m/Y'),
                TextColumn::make('nomor_unit')
                    ->label('Unit')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('shift')
                    ->label('Shift')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('hm_diff')
                    ->label('HM Diff')
                    ->getStateUsing(fn ($record) => number_format($record->hm_akhir - $record->hm_awal, 2))
                    ->sortable(),
                
                TextColumn::make('total_work_minutes')
                    ->label('Total Menit')
                    ->formatStateUsing(fn ($state) => gmdate('H:i', $state * 60)),
                TextColumn::make('approval_status')
                    ->label('Status')
                    ->getStateUsing(fn($record) => $record->approve_by ? 'Approved' : 'Pending')
                    ->badge()
                    ->color(fn($state) => $state === 'Approved' ? 'success' : 'warning'),
                TextColumn::make('approve_by')
                    ->label('Approved by')
                    ->placeholder('Menunggu'),
                    
                // Add ToggleColumn for approval
                // ToggleColumn::make('approve')
                //     ->label('Approval')
                //     ->onColor('success')
                //     ->offColor('warning')
                //     ->toggleable(fn($record, $state) => static::handleApprovalToggle($record, $state))
                //     ->hidden(auth()->user()->role === 'foreman'),
            ])
            ->filters([
                // Add filters if needed
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->label('Approval')
                    ->icon('heroicon-o-check-badge'),
                Action::make('view')
                    ->label('Lihat')
                    ->icon('heroicon-s-eye')
                    ->color('success')
                    ->url(fn($record) => route('timesheets.show', [
                        'name' => $record->nama,
                        'aptnumx' => $record->id_timesheet,
                    ])),
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
            // Add relation managers if needed
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTimesheets::route('/'),
            'create' => Pages\CreateTimesheet::route('/create'),
            'edit' => Pages\EditTimesheet::route('/{record}/edit'),
        ];
    }
}
