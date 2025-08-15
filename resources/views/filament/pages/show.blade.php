<x-filament::page>
    <div>
        <h3 class="text-xl font-semibold">Atribut yang Mengandung Nilai</h3>
        <ul class="list-disc pl-5 mt-2">
            @forelse ($attributes as $attribute)
                <li>{{ $attribute }}</li>
            @empty
                <li>Tidak ada atribut yang mengandung nilai "Rusak" atau "Tidak Ada".</li>
            @endforelse
        </ul>
    </div>
</x-filament::page>
