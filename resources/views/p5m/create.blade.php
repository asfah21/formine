@extends('layouts.app')

@section('content')
<div class="container !mt-20">
    <h2>Form Kehadiran Safety Talk</h2>
    <form action="{{ route('p5m.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label>Nama Karyawan</label>
        <input type="text" name="nama_karyawan" required>

        <label>Jabatan</label>
        <input type="text" name="jabatan" required>

        <label>Tanggal</label>
        <input type="date" name="tanggal" required>

        <label>Jam</label>
        <input type="time" name="jam" required>

        <label>Pemateri</label>
        <input type="text" name="pemateri" required>

        <label>Departemen</label>
        <input type="text" name="departemen" required>

        <label>Lokasi</label>
        <input type="text" name="lokasi" required>

        <label>Judul Materi</label>
        <input type="text" name="judul_materi" required>

        <label>Agenda</label>
        <textarea name="agenda" required></textarea>

        <label>Jam Tidur</label>
        <input type="number" name="jam_tidur" required>

        <label>Keterangan Sehat</label>
        <select name="keterangan_sehat">
            <option value="1">Sehat</option>
            <option value="0">Tidak Sehat</option>
        </select>

        <label>Jumlah Hadir</label>
        <input type="number" name="jumlah_hadir" required>

        <label>Jumlah Karyawan</label>
        <input type="number" name="jumlah_karyawan" required>

        <label>Upload Foto Selfie</label>
        <input type="file" id="foto" name="foto" accept="image/*" capture="user" onchange="previewImage(event)">

        <img id="preview" style="max-width: 300px; display: none; margin-top: 10px;"/>

        <button type="submit">Simpan</button>
    </form>
</div>

<script>
function previewImage(event) {
    const input = event.target;
    const preview = document.getElementById('preview');

    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = "block";
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endsection
