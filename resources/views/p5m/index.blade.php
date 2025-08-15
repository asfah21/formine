@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4 !mt-20">
    <h1 class="text-2xl font-bold mb-4">Daftar Kehadiran Safety Talk</h1>

    {{-- Tabel daftar P5M --}}
    <table class="w-full border-collapse border border-gray-300 mb-6">
        <thead>
            <tr class="bg-gray-100">
                <th class="border p-2">#</th>
                <th class="border p-2">Nama</th>
                <th class="border p-2">Jabatan</th>
                <th class="border p-2">Tanggal</th>
                <th class="border p-2">Foto</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($p5ms as $key => $p5m)
            <tr>
                <td class="border p-2">{{ $key + 1 }}</td>
                <td class="border p-2">{{ $p5m->nama_karyawan }}</td>
                <td class="border p-2">{{ $p5m->jabatan }}</td>
                <td class="border p-2">{{ $p5m->tanggal }}</td>
                <td class="border p-2">
                    @if($p5m->foto)
                        <img src="{{ asset('storage/' . $p5m->foto) }}" class="w-16 h-16 rounded-full">
                    @else
                        <span class="text-gray-500">No Photo</span>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Form Upload --}}
    <div class="bg-white p-6 shadow-md rounded-lg">
        <h2 class="text-xl font-bold mb-4">Upload Foto Kehadiran</h2>
        <form action="{{ route('p5m.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="block mb-2">Nama Karyawan</label>
                <input type="text" name="nama_karyawan" class="border p-2 w-full" required>
            </div>

            <div class="mb-4">
                <label class="block mb-2">Jabatan</label>
                <input type="text" name="jabatan" class="border p-2 w-full" required>
            </div>

            <div class="mb-4">
                <label class="block mb-2">Tanggal</label>
                <input type="date" name="tanggal" class="border p-2 w-full" required>
            </div>

            {{-- Upload Foto dengan Preview --}}
            <div class="mb-4">
                <label class="block mb-2">Foto Selfie</label>
                <input type="file" name="foto" id="fotoInput" accept="image/*" class="border p-2 w-full" required>
                <div class="mt-2">
                    <img id="fotoPreview" class="hidden w-32 h-32 object-cover rounded-lg">
                </div>
            </div>

            {{-- Tombol Simpan --}}
            <button type="submit" id="simpanBtn" class="bg-blue-500 text-white px-4 py-2 rounded disabled:opacity-50" disabled>
                Simpan
            </button>
        </form>
    </div>
</div>

<script>
document.getElementById('fotoInput').addEventListener('change', function(event) {
    let file = event.target.files[0];
    if (file) {
        let reader = new FileReader();
        reader.onload = function(e) {
            let preview = document.getElementById('fotoPreview');
            preview.src = e.target.result;
            preview.classList.remove('hidden');
            document.getElementById('simpanBtn').disabled = false;
        };
        reader.readAsDataURL(file);
    }
});
</script>

@endsection
