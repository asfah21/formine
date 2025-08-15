<x-filament::page>
    <div class="p-6 space-y-4">
        <h1 class="text-xl font-bold">Status Unit Radio</h1>

        <div class="mt-4 p-4 bg-gray-100 dark:bg-gray-800 rounded-lg">
            {{-- <h2 class="text-lg font-semibold">Statistik</h2> --}}
            <p>Total Radio Rusak: {{ $this->getStats()['total_radios_rusak'] }} unit</p>
            <p >Total Tidak Ada Radio: {{ $this->getStats()['total_no_radios'] }} unit</p>
        </div>

        <div class="filament-tables-component">
            {{ $this->table }}
        </div>
    </div>
</x-filament::page>
