<x-filament::page>
    <form action="{{ route('ttd-pengawas') }}" method="POST" id="myForm" class="space-y-6" wire:submit.prevent="save">
        @csrf
        {{ $this->form }} <!-- Menampilkan form yang didefinisikan di Profile.php -->

        <link type="text/css" rel="stylesheet" href="./my-css/my-sign-pad.css">
        <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.js"></script>

        <div>
            <h3 class="mt-1 mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Signature</h3>
            <div class="sm:col-span-2 flex flex-col items-center justify-center w-full p-4 sm:p-6 lg:p-8 bg-white border border-gray-300 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-600">
                <div class="flex justify-center items-center">
                    <img src="{{ asset('storage/images/ttd_mh_pw/' . $user->email .'.png') }}"
                        alt="Belum Ada Tanda Tangan"
                        class="w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-xl rounded-lg shadow-md">
                </div>
            </div>
        </div>

        <h4 class="bg-gray-300 dark:bg-gray-700 text-center text-gray-900 dark:text-gray-100 p-2 rounded-md">
            ⚠️ Silakan buat atau ganti tanda tangan Anda pada area pad dibawah ini ⬇️⬇️⬇️ lalu tekan "Save Changes" ⚠️
        </h4>

        <div>
            <div class="flex items-center justify-between mt-4">
                <h3 class="mt-1 mb-2 text-sm font-medium text-gray-900 dark:text-white">Draw Signature</h3>
                <x-filament::button id="clear-button" type="button"  color="danger" class="py-1 px-2 text-xs mt-1 mb-2">
                    Clear Signature
                </x-filament::button>

                {{-- <button id="clear-button" type="button" class="mt-1 mb-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:ring-red-300">
                    Clear Signature
                </button> --}}
            </div>

            <div class="sm:col-span-2 flex flex-col items-center justify-center w-full p-4 sm:p-6 lg:p-8 bg-white border border-gray-300 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-600">

                <!-- Area Tanda Tangan -->
                <div class="sign_ku border border-gray-300 rounded-lg bg-white dark:bg-gray-700 dark:border-gray-600 p-2">
                    <canvas id="signature-pad" class="w-full h-[360px] max-w-[700px] rounded-lg shadow-inner"></canvas>
                </div>
            </div>
        </div>

        <!-- Tombol Submit -->
        <x-filament::button type="button" id="submitButton">Save Changes</x-filament::button>
    </form>

    @if (session()->has('success'))
        <div class="bg-green-500 text-white p-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    <script>
        // Inisialisasi canvas tanda tangan
        const canvas = document.getElementById('signature-pad');
        const signaturePad = new SignaturePad(canvas, {
            backgroundColor: 'rgba(255, 255, 255, 1)', // Latar belakang putih
            penColor: 'rgb(0, 0, 0)' // Warna pena hitam
        });

        // Tombol Hapus Tanda Tangan
        const clearButton = document.getElementById('clear-button');
        clearButton.addEventListener('click', () => {
            signaturePad.clear(); // Membersihkan area tanda tangan
        });

        // Tombol Submit
        const submitButton = document.getElementById('submitButton');
        submitButton.addEventListener('click', async (event) => {
            event.preventDefault(); // Mencegah aksi default tombol submit

            // Validasi: Periksa apakah tanda tangan kosong
            if (signaturePad.isEmpty()) {
                alert('Harap buat tanda tangan terlebih dahulu.');
                return;
            }

            // Ambil data tanda tangan
            const dataURL = signaturePad.toDataURL();

            // Tambahkan data tanda tangan ke form sebagai input tersembunyi
            let signatureInput = document.querySelector('input[name="signature_data"]');
            if (!signatureInput) {
                signatureInput = document.createElement('input');
                signatureInput.type = 'hidden';
                signatureInput.name = 'signature_data';
                document.getElementById('myForm').appendChild(signatureInput);
            }
            signatureInput.value = dataURL;

            // Kirimkan data melalui Livewire (opsional)
            try {
                await @this.set('signature_data', dataURL); // Set data tanda tangan di Livewire
                await @this.save(); // Jalankan fungsi Livewire "save"

                // Setelah berhasil, submit form tradisional
                document.getElementById('myForm').submit();
            } catch (error) {
                console.error('Livewire Error:', error);
                alert('Gagal menyimpan data. Silakan coba lagi.');
            }
        });
    </script>
</x-filament::page>
