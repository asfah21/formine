<?php

namespace App\Filament\Imports;

use App\Models\Laptop;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;

class DeviceImporter extends Importer
{
    protected static ?string $model = Laptop::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('asset_id')
                ->example('ITLT-034')
                ->requiredMapping()
                ->rules(['required', 'max:255']),

            ImportColumn::make('device_type')
                ->example('Laptop')
                ->rules(['max:55']),

            ImportColumn::make('brand')
                ->example('Lenovo')
                ->requiredMapping()
                ->rules(['required', 'max:255']),

            ImportColumn::make('model')
                ->example('Ideapad')
                ->requiredMapping()
                ->rules(['required', 'max:255']),

            ImportColumn::make('spesifikasi')
                ->example('Intel Core-i3')
                ->rules(['max:55']),

            ImportColumn::make('ram')
                ->example('8 GB')
                ->rules(['max:25']),

            ImportColumn::make('os')
                ->example('Windows 11 Home Premium')
                ->rules(['max:55']),

            ImportColumn::make('serial_number')
                ->example('AF1C023D')
                ->requiredMapping()
                ->rules(['required', 'max:255']),

            ImportColumn::make('arrival_date')
                ->example('2023-07-25')
                ->requiredMapping()
                ->rules(['required', 'date']),

            ImportColumn::make('kondisi')
                ->example('Baik')
                ->rules(['max:55']),

            ImportColumn::make('lokasi')
                ->example('Site Wolo')
                ->rules(['max:55']),

            ImportColumn::make('status')
                ->example('Ready')
                ->rules(['max:55']),
            ImportColumn::make('remark')
                ->example('Dalam Kondisi Baik'),
        ];
    }

    public function resolveRecord(): ?Laptop
    {
        // return Laptop::firstOrNew([
        //     // Update existing records, matching them by `$this->data['column_name']`
        //     'email' => $this->data['email'],
        // ]);

        return new Laptop();
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your import has completed and ' . number_format($import->successful_rows) . ' ' . str('row')->plural($import->successful_rows) . ' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to import.';
        }

        return $body;
    }
}
