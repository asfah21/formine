@extends('layouts.app')
@section('title', 'P5M - Daftar Hadir')
@section('content')

    @if (session('success'))
        <div class="p-4 mb-4 text-green-800 bg-green-200 rounded">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="p-4 mb-4 text-red-800 bg-red-200 rounded">
            {{ session('error') }}
        </div>
    @endif

    @php
        use Carbon\Carbon;
        $currentDate = Carbon::now('Asia/Singapore')->format('YYYY-MM-DD');
        $currentTime = Carbon::now('Asia/Singapore')->format('H:i');
    @endphp

    <section class="min-h-screen bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-5xl lg:py-16 !pb-32 !pt-28">
            <img class="azvan h-auto max-w-full rounded-lg" src="{{ asset('storage/images/IT-WO.svg') }}"
                alt="image description">
            <div class="p-5 text-center">
                <h3
                    class="mt-1 mb-0 text-2xl font-extrabold tracking-tight leading-none md:text-2xl xl:text-2xl dark:text-white">
                    DAFTAR <a class="font-extrabold text-blue-500 dark:text-blue-400 hover:underline">HADIR</a> P5M
                </h3>
            </div>

            <div class="mx-auto max-w-5xl">

                <div class="mt-4 sm:mt-6 lg:flex lg:items-start xl:gap-12 lg:gap-12">
                    <form id="attendance-form" action="{{ route('attendance.store') }}" method="POST"
                        enctype="multipart/form-data"
                        class="w-full rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6 lg:max-w-xl lg:p-8">
                        @csrf
                        <div class="mb-6 grid grid-cols-2 gap-4">
                            <input type="hidden" name="session_id" value="{{ $currentSession->id }}">

                            <div class="col-span-2 sm:col-span-1">
                                <label for="full_name" class="mb-1 block text-sm font-medium text-gray-900 dark:text-white">
                                    Nama
                                </label>
                                <input type="text" id="full_name" name="name"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                    placeholder="Nama Anda" required>
                            </div>

                            <div class="col-span-2 sm:col-span-1">
                                <label for="jabatan" class="mb-1 block text-sm font-medium text-gray-900 dark:text-white">
                                    Jabatan
                                </label>
                                <input type="text" id="jabatan" name="position"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                    placeholder="Jabatan" required>
                            </div>

                            <div class="col-span-2 sm:col-span-1">
                                <label for="jam_tidur" class="mb-1 block text-sm font-medium text-gray-900 dark:text-white">
                                    Lama Tidur (Jam)
                                </label>
                                <input type="number" name="sleep_time" id="jam_tidur"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                    placeholder="Berapa lama tidur" min="0" max="24"
                                    oninput="if(this.value.length > 2) this.value = this.value.slice(0,2)" required>
                            </div>

                            <div class="col-span-2 sm:col-span-1">
                                <label for="is_healthy"
                                    class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">
                                    Anda Sehat?
                                </label>
                                <div class="relative flex items-center">
                                    <select id="is_healthy" name="is_healthy" required
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        <option value="">Pilih</option>
                                        <option value="1">Ya</option>
                                        <option value="0">Tidak</option>
                                    </select>
                                </div>
                            </div>

                            <div class="relative max-w-sm hidden">
                                <label for="date"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal <i
                                        class="text-xs font-light">(terisi otomatis)</i></label>
                                <div class="absolute inset-y-12 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <input name="date" id="date"
                                    value="{{ \Carbon\Carbon::now('Asia/Singapore')->format('YYYY-MM-DD') }}" datepicker
                                    datepicker-format="yyyy-mm-dd" type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Pilih tanggal">
                            </div>

                            <div class="relative max-w-sm hidden">
                                <label for="time"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam
                                    <i class="text-xs font-light">(terisi otomatis)</i></label>
                                <div class="absolute inset-y-0 end-0 top-7 flex items-center pe-3.5 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input value="{{ $currentTime }}" type="time" id="time" name="time"
                                    class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            </div>

                            <div class="col-span-2 sm:col-span-1">
                                <label for="location" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">
                                    Lokasi
                                </label>
                                <div class="relative flex items-center">
                                    <select id="location" name="location" required
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                        onchange="updateDisplay()">
                                        <option value="">Pilih</option>
                                        <option value="Office">Office</option>
                                        <option value="Workshop GSI">Workshop GSI</option>
                                        <option value="rea IUP CNI">Area IUP CNI</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-span-2 sm:col-span-1">
                                <label for="presenter"
                                    class="mb-1 block text-sm font-medium text-gray-900 dark:text-white">
                                    Pemateri
                                </label>
                                <input type="text" id="presenter" name="presenter"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                    placeholder="Pemateri" required>
                            </div>

                            <div class="col-span-2 sm:col-span-1 hidden">
                                <label for="presenter_department"
                                    class="mb-1 block text-sm font-medium text-gray-900 dark:text-white">
                                    Dept. Pemateri
                                </label>
                                <input type="text" id="presenter_department" name="presenter_department"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                    placeholder="Dept. Pemateri" value="IT" required>
                            </div>

                            <div class="col-span-full sm:col-span-2">
                                <label for="pesan"
                                    class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Keterangan
                                </label>
                                <textarea id="pesan" name="notes" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Provide a detailed explanation of your issue..." required></textarea>
                            </div>

                            <div class="col-span-2 sm:col-span-1">
                                <label for="title"
                                    class="mb-1 block text-sm font-medium text-gray-900 dark:text-white">
                                    Judul Materi
                                </label>
                                <input type="text" id="title" name="title"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                    placeholder="Judul Materi" required>
                            </div>

                            <div class="col-span-2 sm:col-span-1">

                                <label class="mb-1 mt-4 block text-sm font-medium text-gray-900 dark:text-white">Foto
                                    Selfie</label>
                                <video id="video" width="320" height="240" autoplay class="border rounded"></video>

                                <button type="button" id="capture-btn"
                                    class="mt-2 bg-blue-500 text-white px-4 py-2 rounded">Ambil Foto
                                </button>

                                <canvas id="canvas" class="hidden"></canvas>
                                <input type="hidden" name="photo" id="photo-input">
                            </div>

                            <button type="submit" class="mt-4 bg-green-500 text-white px-4 py-2 rounded">Simpan
                            </button>
                        </div>
                    </form>

                </div>

                <p class="mt-6 text-center text-gray-500 dark:text-gray-400 sm:mt-8 lg:text-left">
                    Work Order Form Issued by <a href="#" title=""
                        class="font-medium text-primary-700 underline hover:no-underline dark:text-primary-500">IT
                        Department</a>
                    for - PT Gunung Samudera Internasional
                </p>
            </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let video = document.getElementById('video');
            let canvas = document.getElementById('canvas');
            let photoInput = document.getElementById('photo-input');

            navigator.mediaDevices.getUserMedia({
                    video: true
                })
                .then(stream => video.srcObject = stream)
                .catch(err => console.error("Akses kamera ditolak!", err));

            document.getElementById('capture-btn').addEventListener('click', function() {
                let context = canvas.getContext('2d');
                canvas.width = video.videoWidth;
                canvas.height = video.videoHeight;
                context.drawImage(video, 0, 0, canvas.width, canvas.height);
                photoInput.value = canvas.toDataURL('image/jpeg');
            });
        });
    </script>
@endsection
