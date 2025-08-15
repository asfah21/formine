<?php

namespace App\Filament\Imports;

use App\Models\User;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;

class UsersImporter extends Importer
{
    protected static ?string $model = User::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('name')
                ->example('Muh. Al-Asfahani'),
            ImportColumn::make('email')
                ->example('asfah21@gmail.com'),
            ImportColumn::make('password')
                ->example('Shvan36@'),
            ImportColumn::make('role')
                ->example('admin'),
            ImportColumn::make('nik')
                ->example('7401101505950002'),
            ImportColumn::make('jabatan')
                ->example('IT-Support'),
            ImportColumn::make('department')
                ->example('HRGA-IT'),
            ImportColumn::make('status')
                ->example('Active'),
        ];
    }

    public function resolveRecord(): ?User
    {
        // return Users::firstOrNew([
        //     // Update existing records, matching them by `$this->data['column_name']`
        //     'email' => $this->data['email'],
        // ]);

        return new User();
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your users import has completed and ' . number_format($import->successful_rows) . ' ' . str('row')->plural($import->successful_rows) . ' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to import.';
        }

        return $body;
    }
}
