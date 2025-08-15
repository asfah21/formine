
    let signaturePad; // Variabel global untuk SignaturePad
    const canvas = document.getElementById('signature-pad');
    const clearButton = document.getElementById('clear-button');
    const submitButton = document.getElementById('submitButton');

    // Fungsi untuk menginisialisasi ulang SignaturePad
    const initializeSignaturePad = () => {
        // Jika SignaturePad sudah ada, hapus instansi sebelumnya
        if (signaturePad) {
            signaturePad.off();
            signaturePad.clear();
        }

        // Buat instansi baru SignaturePad
        signaturePad = new SignaturePad(canvas, {
            backgroundColor: 'rgba(255, 255, 255, 1)', // Latar belakang putih
            penColor: 'rgb(0, 0, 0)', // Warna pena hitam
        });

        resizeCanvas(); // Pastikan canvas sesuai dengan ukuran layar
    };

    // Fungsi Resize Canvas agar responsif
    const resizeCanvas = () => {
        const ratio = Math.max(window.devicePixelRatio || 1, 1); // Mendukung resolusi tinggi
        canvas.width = canvas.offsetWidth * ratio;
        canvas.height = canvas.offsetHeight * ratio;
        canvas.getContext('2d').scale(ratio, ratio); // Skalakan resolusi
        if (signaturePad) {
            signaturePad.clear(); // Hapus tanda tangan saat resize untuk menghindari data tidak valid
        }
    };

    // Fungsi untuk memeriksa apakah tanda tangan memiliki garis dengan warna tertentu
    const hasBlackStroke = () => {
        const strokes = signaturePad.toData(); // Mendapatkan semua stroke
        if (!strokes || strokes.length === 0) return false; // Tidak ada stroke

        // Periksa apakah ada stroke dengan warna hitam
        return strokes.some(stroke => stroke.penColor === 'rgb(0, 0, 0)');
    };

    // Tombol Hapus Tanda Tangan
    clearButton.addEventListener('click', () => {
        if (signaturePad) {
            signaturePad.clear(); // Membersihkan area tanda tangan
        }
    });

    // Tombol Submit
    submitButton?.addEventListener('click', (event) => {
        event.preventDefault(); // Mencegah aksi default tombol submit

        // Validasi: Periksa apakah tanda tangan kosong atau tidak mengandung garis hitam
        if (signaturePad.isEmpty() || !hasBlackStroke()) {
            alert('Harap buat tanda tangan terlebih dahulu');
            return; // Menghentikan proses jika tanda tangan kosong atau tidak valid
        }

        // Mengambil data tanda tangan
        const dataURL = signaturePad.toDataURL();

        // Menambahkan input tersembunyi ke dalam form
        const signatureInput = document.createElement('input');
        signatureInput.type = 'hidden';
        signatureInput.name = 'signature_data';
        signatureInput.value = dataURL;

        // Menambahkan input ke dalam form
        const form = document.querySelector('form');
        form.appendChild(signatureInput);

        // Submit form
        form.submit();
    });

    // Fungsi untuk menangani perubahan ukuran layar
    const handleResize = () => {
        resizeCanvas(); // Sesuaikan ukuran canvas
    };

    // Tambahkan event listener untuk resize
    window.addEventListener('resize', handleResize);

    // Inisialisasi SignaturePad saat pertama kali halaman dimuat
    document.addEventListener('DOMContentLoaded', () => {
        initializeSignaturePad(); // Inisialisasi SignaturePad
    });

    // Scroll naik ke atas (Tombol Next dan Prev)
    document.getElementById('nextButton').addEventListener('click', function () {
        window.scrollTo({
            top: 0,
        });
    });
    document.getElementById('prevButton').addEventListener('click', function () {
        window.scrollTo({
            top: 0,
        });
    });
