@extends('layouts.app')
@section('title', 'Buat Sertifikat Online')
@section('content')

    @php
        use Carbon\Carbon;
        $currentDate = Carbon::now('Asia/Singapore')->format('YYYY-MM-DD');
        $currentTime = Carbon::now('Asia/Singapore')->format('H:i');
    @endphp

    <section class="min-h-screen bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16 !pt-28">
            <img class="azvan h-auto max-w-full rounded-lg" src="{{ asset('storage/images/cert.svg') }}" alt="image description">

            <div class="container mx-auto p-0">
                <form action="{{ route('cert.store') }}" method="POST">
                    @csrf
                    <div class="border-b-2 py-4 mb-7">
                        <div id="toast-simple" class="mt-2 flex items-center justify-center w-full p-4 text-gray-500 bg-white rounded-lg shadow-sm dark:text-gray-400 dark:bg-gray-800" role="alert">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M11 9a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"/>
                                <path fill-rule="evenodd" d="M9.896 3.051a2.681 2.681 0 0 1 4.208 0c.147.186.38.282.615.255a2.681 2.681 0 0 1 2.976 2.975.681.681 0 0 0 .254.615 2.681 2.681 0 0 1 0 4.208.682.682 0 0 0-.254.615 2.681 2.681 0 0 1-2.976 2.976.681.681 0 0 0-.615.254 2.682 2.682 0 0 1-4.208 0 .681.681 0 0 0-.614-.255 2.681 2.681 0 0 1-2.976-2.975.681.681 0 0 0-.255-.615 2.681 2.681 0 0 1 0-4.208.681.681 0 0 0 .255-.615 2.681 2.681 0 0 1 2.976-2.975.681.681 0 0 0 .614-.255ZM12 6a3 3 0 1 0 0 6 3 3 0 0 0 0-6Z" clip-rule="evenodd"/>
                                <path d="M5.395 15.055 4.07 19a1 1 0 0 0 1.264 1.267l1.95-.65 1.144 1.707A1 1 0 0 0 10.2 21.1l1.12-3.18a4.641 4.641 0 0 1-2.515-1.208 4.667 4.667 0 0 1-3.411-1.656Zm7.269 2.867 1.12 3.177a1 1 0 0 0 1.773.224l1.144-1.707 1.95.65A1 1 0 0 0 19.915 19l-1.32-3.93a4.667 4.667 0 0 1-3.4 1.642 4.643 4.643 0 0 1-2.53 1.21Z"/>
                              </svg>
                            <div class="text-sm font-bold text-gray-800 dark:text-white text-center">&nbsp;BUAT SERTIFIKAT ONLINE </div>
                        </div>
                    </div>

                    <!-- Step Content -->
                    <div class="grid gap-4 sm:gap-5 sm:grid-cols-2">

                        {{-- <div class="sm:col-span-2"> --}}
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pembuat
                                </label>
                            <div class="relative flex items-center">
                                <input type="text" name="name" id="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Dedi Cahyadi" required />
                            </div>
                        </div>

                        <div hidden>
                            <label for="agenda" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Sertifikat
                                </label>
                            <div class="relative flex items-center">
                                <input type="text" name="agenda" id="agenda"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="PKL" value="Praktik Kerja Lapangan" required />
                            </div>
                        </div>

                        <div>
                            <label for="instansi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Asal Instansi
                                </label>
                            <div class="relative flex items-center">
                                <input type="text" name="instansi" id="instansi"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Universitas Haluoleo" required />
                            </div>
                        </div>

                        <div id="date-range-picker" date-rangepicker class="flex items-center">
                            <div class="relative">
                                <label for="datepicker-range-start" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mulai Tanggal</label>
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="mt-6 w-4 h-4 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <input id="datepicker-range-start" type="text" datepicker datepicker-format="mm/dd/yyyy"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="date start">
                            </div>

                            <span class="mt-6 mx-1 text-gray-500 px-2">to</span>

                            <div class="relative">
                                <label for="datepicker-range-end" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sampai Tanggal</label>
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="mt-6 w-4 h-4 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                    </svg>
                                </div>
                                <input id="datepicker-range-end" type="text" datepicker datepicker-format="mm/dd/yyyy"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="date end">
                            </div>
                        </div>

                        <!-- Hidden input untuk submit ke server -->
                        <input name="mulai" id="hidden-mulai" hidden>
                        <input name="berakhir" id="hidden-berakhir" hidden>

                        <div>
                            <label for="lokasi"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lokasi</label>
                            <div class="relative flex items-center">
                                <select id="lokasi" name="lokasi" required
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option value="">Lokasi</option>
                                    <option value="Site-Wolo">Site-Wolo</option>
                                    <option value="HO">HO</option>
                                </select>
                            </div>
                        </div>

                        <div hidden>
                            <label for="duration" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Durasi
                                </label>
                            <div class="relative flex items-center">
                                <input type="text" name="duration" id="duration"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Durasi" value="24" required />
                            </div>
                        </div>

                        <div id="toast-simple" class="sm:col-span-2 py-4 mt-2 flex items-center justify-center w-full p-2 text-gray-500 bg-white rounded-lg shadow-sm dark:text-gray-400 dark:bg-gray-800" role="alert">
                            <div class="text-sm font-semibold italic text-gray-800 dark:text-white text-center">&nbsp;Anda harus mengisi seluruh nama peserta pada sesi ini sebelum sesi berakhir (24 jam) </div>
                        </div>

                        <div class="sm:col-span-2">
                            <div class="flex justify-center items-center">
                                <button type="submit" class="mt-5 mb-20 w-32 px-5 py-2 bg-blue-500 text-white rounded-lg"
                                    id="submitButton">Buat</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>
        function convertToMysqlDate(dateStr) {
            // Format dari Flowbite: mm/dd/yyyy
            const parts = dateStr.split('/');
            if (parts.length !== 3) return '';
            const [month, day, year] = parts;
            return `${year}-${month.padStart(2, '0')}-${day.padStart(2, '0')}`;
        }

        document.addEventListener('DOMContentLoaded', function () {
            const form = document.querySelector('form');
            const inputStart = document.getElementById('datepicker-range-start');
            const inputEnd = document.getElementById('datepicker-range-end');
            const hiddenStart = document.getElementById('hidden-mulai');
            const hiddenEnd = document.getElementById('hidden-berakhir');

            form.addEventListener('submit', function () {
                hiddenStart.value = convertToMysqlDate(inputStart.value);
                hiddenEnd.value = convertToMysqlDate(inputEnd.value);
            });
        });
    </script>



@endsection

