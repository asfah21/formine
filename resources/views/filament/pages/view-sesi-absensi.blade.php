<x-filament::page>
    <div class="space-y-2">
        <!-- Header -->
        {{-- <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100 text-center">Detail Absensi</h2> --}}

        <!-- Flexbox: Dua Kolom Sejajar -->
        <div class="flex flex-row gap-2">
            <!-- Kolom Kiri -->
            <div class="flex-1 px-4 py-1 border border-gray-300 dark:border-gray-700 rounded-lg">
                <p class="text-sm text-gray-600 dark:text-gray-400">Judul</p>
                <h3 class="text-base font-semibold text-gray-800 dark:text-gray-200">{{ $record->judul }}</h3>

            </div>

            <!-- Kolom Kanan -->
            <div class="flex-1 px-4 py-1 border border-gray-300 dark:border-gray-700 rounded-lg">
                <p class="text-sm text-gray-600 dark:text-gray-400">Dibuat Oleh</p>
                <h3 class="text-base font-semibold text-gray-800 dark:text-gray-200">{{ $record->name }}</h3>
            </div>
        </div>

        <div class="flex flex-row gap-2">
            <!-- Kolom Kiri -->
            <div class="flex-1 px-4 py-1 border border-gray-300 dark:border-gray-700 rounded-lg">
                <p class="text-sm text-gray-600 dark:text-gray-400">Tanggal</p>
                <h3 class="text-base font-semibold text-gray-800 dark:text-gray-200">{{ \Carbon\Carbon::parse($record->start_time)->format('d-m-Y H:i') }}</h3>

            </div>

            <!-- Kolom Kanan -->
            <div class="flex-1 px-4 py-1 border border-gray-300 dark:border-gray-700 rounded-lg">
                <p class="text-sm text-gray-600 dark:text-gray-400">Lokasi</p>
                <h3 class="text-base font-semibold text-gray-800 dark:text-gray-200">{{ $record->lokasi }}</h3>
            </div>
        </div>

        <!-- Tabel Data -->
        <div class="filament-tables-component mt-8 pt-4">
            {{ $this->table }}
        </div>
    </div>
</x-filament::page>
