<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Filament\Notifications\Notification;


class Profile extends Page
{
    protected static string $view = 'filament.pages.profile'; // Merujuk ke Blade view

    protected static ?string $navigationGroup = 'Management';

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public $user;

    public $signature_data;

    public $name;

    public $email;

    public function mount()
    {
        $this->user = Auth::user();
        $this->name = $this->user->name;
        $this->email = $this->user->email;
    }


    protected function getFormSchema(): array
    {
        return [
            TextInput::make('name')
                ->label('Name')
                ->default($this->name)
                ->required()
                ->disabled(auth()->user()->role !== 'super_admin'),

            TextInput::make('email')
                ->label('Email')
                ->default($this->email)
                ->email()
                ->required()
                ->disabled(auth()->user()->role !== 'super_admin'),
        ];
    }

    public function save()
    {
        $this->validate([
            'signature_data' => 'required', // Validasi tanda tangan
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        // if ($this->signature_data) {
        //     $signatureData = explode(',', $this->signature_data)[1]; // Hapus header Base64
        //     $filePath = 'images/ttd_mh_pw/' . $this->email . '.png';

        //     // Simpan ke disk publik
        //     Storage::disk('public')->put($filePath, base64_decode($signatureData));

        // }

        if ($this->signature_data) {
            $signatureData = explode(',', $this->signature_data)[1]; // Hapus header Base64
            $decodedImage = base64_decode($signatureData);
            $filePath = 'storage/images/ttd_mh_pw/' . $this->email . '.png';

            // Simpan file menggunakan file_put_contents
            file_put_contents($filePath, $decodedImage);
        }


        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        // Kirim notifikasi sukses
        Notification::make()
            ->title('Profile updated successfully!')
            ->success()
            ->send();
    }
}

