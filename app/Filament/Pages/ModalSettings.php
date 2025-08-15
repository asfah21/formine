<?php

namespace App\Filament\Pages;

use Filament\Forms;
use Filament\Pages\Page;
use App\Models\ModalSetting;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Notifications\Notification;

class ModalSettings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-cog';

    protected static string $view = 'filament.pages.modal-settings';

    protected static ?string $navigationLabel = 'Modal Settings';

    public $message;
    public $is_active;

    public function mount()
    {
        $setting = ModalSetting::firstOrNew(['id' => 1]);

        $this->form->fill([
            'message' => $setting->message,
            'is_active' => $setting->is_active ?? true,
        ]);
    }

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\Textarea::make('message')
                ->label('Pesan Modal')
                ->required(),
            Forms\Components\Toggle::make('is_active')
                ->label('Aktifkan Modal')
                ->default(true),
        ];
    }

    public function save()
    {
        $data = $this->form->getState();

        // Update or create settings
        ModalSetting::updateOrCreate(
            ['id' => 1],
            [
                'message' => $data['message'],
                'is_active' => $data['is_active']
            ]
        );

        // Nonaktifkan semua pengaturan modal lainnya jika yang ini aktif
        if ($data['is_active']) {
            ModalSetting::where('id', '!=', 1)->update(['is_active' => false]);
        }

        Notification::make()
            ->title('Modal updated successfully!')
            ->success()
            ->send();
    }
}
