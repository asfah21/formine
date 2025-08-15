document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('dataForm');
    const modal = document.getElementById('successModal');
    const closeModalButton = document.getElementById('closeModal');

    form.addEventListener('submit', function (event) {
        event.preventDefault(); // Mencegah reload halaman

        // Simulasi pengiriman data sukses (misalnya melalui AJAX)
        // Biasanya Anda akan menggunakan AJAX untuk pengiriman data ke server.
        // Di sini kita hanya menunjukkan modal sebagai contoh.

        // Tampilkan modal
        modal.classList.remove('hidden');

        // Jika perlu, Anda bisa melakukan AJAX request ke server untuk menyimpan data
        // Misalnya menggunakan fetch API atau library seperti Axios.
    });

    closeModalButton.addEventListener('click', function () {
        modal.classList.add('hidden'); // Menyembunyikan modal
    });
});
