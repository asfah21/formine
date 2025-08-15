@extends('layouts.app')
@section('title', 'List Daftar Hadir Online')
@section('content')

    @php
        use Carbon\Carbon;
        $currentDate = Carbon::now('Asia/Singapore')->format('YYYY-MM-DD');
        $currentTime = Carbon::now('Asia/Singapore')->format('H:i');
    @endphp

    <section class="min-h-screen bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-5xl lg:py-16 !pb-40 !pt-28">

            <img class="azvan h-auto max-w-full rounded-lg" src="{{ asset('storage/images/dh-ol.svg') }}"
                alt="image description">

            <div class="w-full p-4 mb-4 mt-10 text-center bg-white border border-gray-200 rounded-lg shadow-sm sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <p class="text-base font-bold text-gray-500 sm:text-lg dark:text-gray-400 uppercase">DAFTAR PESERTA</p>

                <div class="flex flex-wrap items-center justify-center gap-4 sm:flex-nowrap">

                    <a href="#"
                        class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                        <svg class="me-3 w-7 h-7" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="apple"
                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path fill="currentColor"
                                d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z">
                            </path>
                        </svg>
                        <div class="text-left rtl:text-right">
                            <div class="mb-1 text-xs">Download on the</div>
                            <div class="-mt-1 font-sans text-sm font-semibold">Mac App Store</div>
                        </div>
                    </a>
                    <a href="#"
                        class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                        <svg class="me-3 w-7 h-7" aria-hidden="true" focusable="false" data-prefix="fab"
                            data-icon="google-play" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M325.3 234.3L104.6 13l280.8 161.2-60.1 60.1zM47 0C34 6.8 25.3 19.2 25.3 35.3v441.3c0 16.1 8.7 28.5 21.7 35.3l256.6-256L47 0zm425.2 225.6l-58.9-34.1-65.7 64.5 65.7 64.5 60.1-34.1c18-14.3 18-46.5-1.2-60.8zM104.6 499l280.8-161.2-60.1-60.1L104.6 499z">
                            </path>
                        </svg>
                        <div class="text-left rtl:text-right">
                            <div class="mb-1 text-xs">Get in on</div>
                            <div class="-mt-1 font-sans text-sm font-semibold">Google Play</div>
                        </div>
                    </a>
                </div>
            </div>


            {{-- <div class="p-5 text-center">
                <h3 class="mb-2 text-2xl font-extrabold tracking-tight leading-none md:text-2xl xl:text-2xl dark:text-white">
                    DAFTAR HADIR <a class="font-extrabold text-blue-500 dark:text-blue-400 hover:underline">ONLINE</a>
                </h3>
                <h2 class="mb-4">Detail Absensi: {{ $sesi->name }}</h2>
            </div> --}}


            <div class="flex items-center justify-center bg-gray-100 dark:bg-gray-900">
                <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-8 max-w-lg text-center">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Sertifikat Kehadiran</h2>
                    <p class="text-lg text-gray-700 dark:text-gray-300 mb-2">Diberikan kepada:</p>
                    <h3 class="text-2xl font-semibold text-blue-600 dark:text-blue-400">{{ $sesi->name}}</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-4">Tanggal Kehadiran: {{ $sesi->id }}</p>
                </div>
            </div>


        </div>
    </section>
@endsection
