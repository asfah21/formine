@extends('layouts.app')
@section('title', 'Daftar Hadir')
@section('content')

    @php
        use Carbon\Carbon;
        $currentDate = Carbon::now('Asia/Singapore')->format('YYYY-MM-DD');
        $currentTime = Carbon::now('Asia/Singapore')->format('H:i');
    @endphp

    <section class="min-h-screen bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16 !pt-28">
            <img class="azvan h-auto max-w-full rounded-lg" src="{{ asset('storage/images/dh-ol.svg') }}" alt="image description">

            <div class="container mx-auto p-0">
                <form action="{{ route('absensi.submit', $sesi->unique_code) }}" method="POST" enctype="multipart/form-data" onsubmit="return submitForm();">
                    @csrf
                    <div class="pt-4 mb-2 text-center">
                        <div class="tracking-wide text-xs font-bold text-gray-500 dark:text-white mt-1 leading-tight">
                            PT GUNUNG SAMUDERA INTERNASIONAL
                        </div>
                        <div class="text-xl font-extrabold text-gray-700 leading-tight dark:text-white mt-0">
                            FORM <span class="text-blue-600 dark:text-blue-400">DAFTAR HADIR</span> {{$sesi->agenda}}
                        </div>
                    </div>

                    <hr class="my-4 border-gray-400 dark:border-white-100 border-b-1" />

                    <div class="flex flex-wrap items-center justify-center gap-2 sm:flex-nowrap pointer-events-none">
                        <a href="#"
                            class="w-full sm:w-auto text-gray-500 bg-gray-200 rounded-lg shadow-sm dark:text-gray-400 dark:bg-gray-800 px-4 py-1">

                            <div class="text-left rtl:text-right">
                                <div class="mb-0 text-xs text-gray-500 dark:text-gray-400 ">Judul</div>
                                <div class="font-sans text-sm font-semibold text-gray-800 dark:text-white">{{$sesi->judul}}</div>
                            </div>
                        </a>
                        <a href="#"
                            class="w-full sm:w-auto text-gray-500 bg-gray-200 rounded-lg shadow-sm dark:text-gray-400 dark:bg-gray-800 px-4 py-1">

                            <div class="text-left rtl:text-right">
                                <div class="mb-0 text-xs text-gray-500 dark:text-gray-400 ">Dibuat oleh</div>
                                <div class="font-sans text-sm font-semibold text-gray-800 dark:text-white">{{$sesi->name}}</div>
                            </div>
                        </a>
                    </div>

                    <div class="mt-2 flex flex-wrap items-center justify-center gap-2 sm:flex-nowrap pointer-events-none">
                        <a href="#"
                            class="w-full sm:w-auto text-gray-500 bg-gray-200 rounded-lg shadow-sm dark:text-gray-400 dark:bg-gray-800 px-4 py-1">

                            <div class="text-left rtl:text-right">
                                <div class="mb-0 text-xs text-gray-500 dark:text-gray-400 ">Tanggal</div>
                                <div class="font-sans text-sm font-semibold text-gray-800 dark:text-white">
                                    {{ \Carbon\Carbon::parse($sesi->start_time)->format('d-m-Y H:i') }}
                                </div>

                            </div>
                        </a>
                        <a href="#"
                            class="w-full sm:w-auto text-gray-500 bg-gray-200 rounded-lg shadow-sm dark:text-gray-400 dark:bg-gray-800 px-4 py-1">

                            <div class="text-left rtl:text-right">
                                <div class="mb-0 text-xs text-gray-500 dark:text-gray-400 ">Lokasi</div>
                                <div class="font-sans text-sm font-semibold text-gray-800 dark:text-white">{{$sesi->lokasi}}</div>
                            </div>
                        </a>
                    </div>

                    <hr class="mt-4 mb-8 border-gray-400 dark:border-white-100 border-b-1" />

                    <div class="grid gap-4 sm:gap-5 sm:grid-cols-2">
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
                            <div class="relative flex items-center">
                                <input type="text" name="name" id="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Tuliskan nama anda" required />
                            </div>
                        </div>

                        <div>
                            <label for="jabatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jabatan</label>
                            <div class="relative flex items-center">
                                <input type="text" name="jabatan" id="jabatan"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Jabatan anda" required />
                            </div>
                        </div>

                        @if ($sesi->agenda === 'P5M') {{-- ambil $sesi dari controller, dan agenda dari create.blade --}}
                        <div>
                            <label for="jam_tidur" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam Tidur</label>
                            <div class="relative flex items-center">
                                <input type="number" name="jam_tidur" id="jam_tidur" min="1" max="24"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Berapa lama tidur (1-24)" required />
                            </div>
                        </div>

                        <div>
                            <label for="sehat"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sehat</label>
                            <div class="relative flex items-center">
                                <select id="sehat" name="sehat" required
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option value="">Fit to Work?</option>
                                    <option value="Ya">Ya</option>
                                    <option value="Tidak">Tidak</option>
                                </select>
                            </div>
                        </div>
                        @endif

                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ambil Foto Selfie</label>
                            <div class="relative flex flex-col items-center">
                                <video id="video" class="w-full h-48 bg-gray-200 rounded-lg"></video>
                                <canvas id="canvas" class="hidden w-full h-48 rounded-lg"></canvas>
                                <input type="hidden" name="photo" id="photo">

                                <div class="mt-3 flex space-x-3">
                                    <button type="button" id="captureBtn" class="px-4 py-2 bg-green-500 text-white rounded-lg">Ambil Foto</button>
                                    <button type="button" id="retakeBtn" class="hidden px-4 py-2 bg-gray-500 text-white rounded-lg">Retake Photo</button>
                                </div>
                            </div>
                        </div>

                      <!-- Overlay + Modal -->
                        <div id="loadingModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-gray-900 bg-opacity-50 pointer-events-auto">
                            <div class="bg-white p-6 rounded-lg shadow-lg">
                                <p class="text-lg font-semibold text-center">⏳ Silakan tunggu...</p>
                            </div>
                        </div>

                        <!-- Tombol Kirim -->
                        <div class="sm:col-span-2">
                            <div class="flex justify-center items-center">
                                <button type="submit" id="submitButton" class="mt-5 mb-20 w-32 px-5 py-2 bg-blue-500 text-white rounded-lg">
                                    Kirim
                                </button>
                            </div>
                        </div>

                        <!-- Script -->
                        <script>
                            document.getElementById("submitButton").addEventListener("click", function (event) {
                                const form = document.querySelector("form");
                                const photoInput = document.getElementById("photo");

                                // Cek apakah foto sudah diambil
                                if (!photoInput.value) {
                                    alert("Harap ambil foto selfie terlebih dahulu!");
                                    event.preventDefault(); // Mencegah form terkirim
                                    return;
                                }

                                // Cek validitas form sebelum submit
                                if (form.checkValidity()) {
                                    event.preventDefault(); // Mencegah submit langsung
                                    document.getElementById("loadingModal").classList.remove("hidden");

                                    setTimeout(() => {
                                        form.submit(); // Kirim form setelah modal muncul
                                    }, 1000);
                                } else {
                                    form.reportValidity(); // Tampilkan pesan validasi untuk field yang belum terisi
                                }
                            });
                        </script>

                        {{-- <div class="sm:col-span-2">
                            <div class="flex justify-center items-center">
                                <button type="submit" class="mt-5 mb-20 w-32 px-5 py-2 bg-blue-500 text-white rounded-lg">Kirim</button>
                            </div>
                        </div> --}}


                    </div>
                </form>
            </div>

            <script>
                const video = document.getElementById('video');
                const canvas = document.getElementById('canvas');
                const captureBtn = document.getElementById('captureBtn');
                const retakeBtn = document.getElementById('retakeBtn');
                const photoInput = document.getElementById('photo');

                let stream;

                // Akses Kamera
                async function startCamera() {
                    try {
                        stream = await navigator.mediaDevices.getUserMedia({ video: true });
                        video.srcObject = stream;
                        video.play();
                    } catch (error) {
                        console.error("Error accessing camera:", error);
                    }
                }

                // Ambil Foto
                captureBtn.addEventListener('click', () => {
                    const context = canvas.getContext('2d');
                    canvas.width = video.videoWidth;
                    canvas.height = video.videoHeight;
                    context.drawImage(video, 0, 0, canvas.width, canvas.height);

                    // Konversi ke Base64
                    const photoData = canvas.toDataURL('image/png');
                    photoInput.value = photoData;

                    // Tampilkan canvas, sembunyikan video
                    video.classList.add('hidden');
                    canvas.classList.remove('hidden');
                    captureBtn.classList.add('hidden');
                    retakeBtn.classList.remove('hidden');

                    // Hentikan kamera
                    stream.getTracks().forEach(track => track.stop());
                });

                // Retake Foto
                retakeBtn.addEventListener('click', () => {
                    canvas.classList.add('hidden');
                    video.classList.remove('hidden');
                    captureBtn.classList.remove('hidden');
                    retakeBtn.classList.add('hidden');

                    photoInput.value = ''; // Hapus data foto
                    startCamera(); // Restart kamera
                });

                // Inisialisasi Kamera saat halaman dimuat
                document.addEventListener("DOMContentLoaded", startCamera);

                function submitForm() {
                    if (photoInput.value === "") {
                        alert("Harap ambil foto selfie terlebih dahulu!");
                        return false;
                    }
                    return true;
                }
            </script>


        </div>
    </section>
@endsection
