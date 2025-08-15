@extends('layouts.app')
@section('title', 'List Daftar Hadir Online')

@push('meta')
    <meta property="og:title" content="Daftar Hadir Online PT GSI" />
    <meta property="og:description" content="Silakan isi absensi pada link berikut ini" />
    <meta property="og:image" content="{{ asset('storage/images/qr-code1.png') }}" />
    <meta property="og:type" content="website" />
@endpush

@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oxanium:wght@700&display=swap');

        #clock-container {
            width: 105px;
            /* Lebar tetap */
            height: 40px;
            /* Tinggi tetap */
            background-color: rgb(15, 15, 15);
            color: limegreen;
            /* Warna hijau seperti kalkulator */
            font-family: 'Oxanium', sans-serif;
            font-size: 19px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            text-align: center;
            padding: 2px 0;
            line-height: 1;
        }

        #digital-clock {
            min-width: 100px;
            letter-spacing: 1px;
            text-align: center;
            line-height: 1;
            padding-top: 2px;
        }

        #digital-text {
            font-size: 6px !important;
            text-align: center;
            line-height: 1.5;
        }

        /* Warna merah untuk detik */
        #seconds {
            color: rgb(133, 145, 134);
        }
    </style>

    @if (session('error'))
    <div id="popup-modal" tabindex="-1" class="fixed inset-0 z-50 flex justify-center items-center w-full h-screen bg-black bg-opacity-50">
        <div class="relative p-4 w-full max-w-md">
            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" onclick="closeModal()">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-red-500 w-12 h-12 dark:text-red-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                    <h3 class="mb-5 text-lg font-semibold text-gray-900 dark:text-white">Peringatan!</h3>
                    <p class="text-gray-700 dark:text-gray-300">{{ session('error') }}</p>
                    <div class="mt-5">
                        <button onclick="closeModal()" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            OK
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function closeModal() {
            document.getElementById('popup-modal').style.display = 'none';
        }

        // Auto close modal after 5 seconds
        setTimeout(() => {
            closeModal();
        }, 5000);
    </script>
@endif


    @php
        use Carbon\Carbon;
        $currentDate = Carbon::now('Asia/Singapore')->format('YYYY-MM-DD');
        $currentTime = Carbon::now('Asia/Singapore')->format('H:i');
    @endphp

    <section class="min-h-screen bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-5xl lg:py-16 !pb-40 !pt-28">

            <img class="azvan h-auto max-w-full rounded-lg" src="{{ asset('storage/images/dh-ol.svg') }}"
                alt="image description">
            <div class="p-5 text-center">
                <h3 class="mb-2 text-2xl font-extrabold tracking-tight leading-none md:text-2xl xl:text-2xl dark:text-white">
                    LIST <a class="font-extrabold text-blue-500 dark:text-blue-400 hover:underline">DAFTAR HADIR</a> ONLINE
                </h3>
            </div>

            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div class="w-full md:w-1/2">
                        <form method="GET" action="{{ route('absensi.index') }}" class="flex items-center">
                            <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="text" name="search" value="{{ request('search') }}" id="simple-search"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                    placeholder="Search">
                                <button type="submit"
                                    class="text-white absolute end-[5px] bottom-[5px] bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-1 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                            </div>

                        </form>
                    </div>

                    <div
                        class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                        <div class="flex items-center space-x-3 w-full md:w-auto">

                            <div id="clock-container">
                                <span id="digital-clock">
                                    <span id="hours">00</span>:<span id="minutes">00</span>:<span
                                        id="seconds">00</span>
                                </span>
                                <span id="digital-text">CURRENT TIME (UTC+8 WITA)</span>
                            </div>

                            <a href="{{ route('absensi.create') }}"
                                class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-4 py-2 text-center inline-flex items-center">
                                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                &nbsp; Buat Daftar Hadir
                            </a>
                        </div>
                    </div>

                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3 text-center">No</th>
                                <th scope="col" class="px-4 py-3 text-center">Judul Kegiatan</th>
                                <th scope="col" class="px-4 py-3 text-center">Dibuat</th>
                                <th scope="col" class="px-4 py-3 text-center">Waktu</th>
                                <th scope="col" class="px-4 py-3 text-center">Peserta</th>

                                <th scope="col" class="px-4 py-3 text-center">Aktif</th>
                                <th scope="col" class="px-4 py-3 text-center">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($sesiAbsensi as $sesi)
                                <tr class="border-b dark:border-gray-700">
                                    <td class="px-4 py-3 text-center">
                                        {{ ($sesiAbsensi->currentPage() - 1) * $sesiAbsensi->perPage() + $loop->iteration }} </td>
                                    <td class="px-4 py-3 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <a href="{{route('absensi.form', $sesi->unique_code)}}">{{ $sesi->judul }}</a></td>
                                    <td class="px-4 py-3 text-center">
                                        <a href="{{route('absensi.form', $sesi->unique_code)}}">{{ $sesi->name }}</a></td>
                                    <td class="px-4 py-3 text-center"><a href="{{route('absensi.form', $sesi->unique_code)}}">
                                        {{ \Carbon\Carbon::parse($sesi->start_time)->format('d-m-y H:i') }}</a></td>

                                    <td class="px-4 py-3 text-center"><a href="{{route('absensi.form', $sesi->unique_code)}}">
                                        {{ $sesi->absensi_count }}</a></td> <!-- Menampilkan jumlah absensis -->



                                    <td class="px-4 py-3 text-center"><a href="{{route('absensi.form', $sesi->unique_code)}}">
                                        <span id="countdown-{{ $sesi->id }}" data-end-time="{{ $sesi->end_time }}" class="font-semibold">
                                            Loading...
                                        </span></a>
                                    </td>

                                    {{-- <td class="px-4 py-3 text-center">
                                        @if ($sesi->isActive())
                                            <a href=" {{route('absensi.show', $sesi->id)}}"
                                                class="px-2 py-1 text-white bg-green-600 hover:bg-green-700 rounded-lg text-xs font-medium transition whitespace-nowrap">
                                                Isi Daftar Hadir
                                            </a>
                                        @else
                                            <span class="px-2 py-1 text-gray-600 bg-gray-400 rounded-lg text-xs font-medium cursor-not-allowed">
                                                Selesai
                                            </span>
                                        @endif
                                    </td> --}}

                                    <td class="px-4 py-3 text-center">
                                        <a href="{{ route('absensi.show', $sesi->id) }}"
                                            class=" mr-1 inline-flex items-center justify-center gap-1 px-2 py-1 text-white bg-green-600 hover:bg-green-700 rounded-lg text-xs font-medium transition whitespace-nowrap">
                                            <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                                                <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                            </svg>
                                            <span class="leading-none">Lihat</span>
                                        </a>


                                        @if ($sesi->isActive())
                                            {{-- <a href="https://wa.me/?text={{ urlencode('Silakan isi daftar hadir ' . $sesi->judul. ' pada link berikut: ' . route('absensi.form', $sesi->unique_code)) }}" --}}
                                                <a href="https://wa.me/?text={{ urlencode("Salam Team!! Silakan isi daftar hadir pada link dibawah ini ya : \n\n Agenda : *{$sesi->agenda}* \n Judul : *{$sesi->judul}* \n Waktu : *" . \Carbon\Carbon::parse($sesi->start_time)->translatedFormat('d F Y H:i') . "* \n Lokasi : *{$sesi->lokasi}* \n\n Link : " . route('absensi.form', $sesi->unique_code)) }}"

                                                target="_blank"
                                                class="inline-flex items-center justify-center gap-1 px-2 py-1 text-white bg-blue-700 hover:bg-blue-800 rounded-lg text-xs font-medium transition whitespace-nowrap">
                                                 <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15.141 6 5.518 4.95a1.05 1.05 0 0 1 0 1.549l-5.612 5.088m-6.154-3.214v1.615a.95.95 0 0 0 1.525.845l5.108-4.251a1.1 1.1 0 0 0 0-1.646l-5.108-4.251a.95.95 0 0 0-1.525.846v1.7c-3.312 0-6 2.979-6 6.654v1.329a.7.7 0 0 0 1.344.353 5.174 5.174 0 0 1 4.652-3.191l.004-.003Z"/>
                                                 </svg>
                                                 <span class="leading-none">Share</span>
                                            </a>
                                        @else
                                            <span class="px-0 py-1 text-gray-600 rounded-lg text-xs font-medium"></span>
                                        @endif

                                    </td>

                                </tr>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">No records found</td>
                                </tr>
                            @endforelse
                        </tbody>

                    </table>
                </div>

                <div class="mt-4 py-6 px-5 flex flex-col md:flex-row justify-between items-center space-y-3 md:space-y-0">
                    <!-- Informasi Showing -->
                    <span class="text-sm text-gray-500 dark:text-gray-400">
                        Showing
                        <span class="font-medium">{{ $sesiAbsensi->firstItem() }}</span>
                        to
                        <span class="font-medium">{{ $sesiAbsensi->lastItem() }}</span>
                        of
                        <span class="font-medium">{{ $sesiAbsensi->total() }}</span>
                        results
                    </span>

                    <!-- Navigasi Pagination -->
                    <nav aria-label="Pagination">
                        <ul class="inline-flex -space-x-px space-x-1">
                            <!-- Previous Button -->
                            @if ($sesiAbsensi->onFirstPage())
                                <li>
                                    <span
                                        class="px-3 py-2 text-sm leading-tight text-gray-400 bg-gray-200 border border-gray-300 rounded-l-lg cursor-not-allowed dark:bg-gray-700 dark:text-gray-500 dark:border-gray-600">
                                        Previous
                                    </span>
                                </li>
                            @else
                                <li>
                                    <a href="{{ $sesiAbsensi->previousPageUrl() }}"
                                        class="px-3 py-2 text-sm leading-tight text-gray-700 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-primary-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                        Previous
                                    </a>
                                </li>
                            @endif

                            <!-- Logic for Page Numbers -->
                            @php
                                $start = max($sesiAbsensi->currentPage() - 1, 1);
                                $end = min($start + 2, $sesiAbsensi->lastPage());
                            @endphp

                            @for ($i = $start; $i <= $end; $i++)
                                @if ($i == $sesiAbsensi->currentPage())
                                    <li>
                                        <span
                                            class="px-3 py-2 text-sm leading-tight text-white bg-primary-600 border border-gray-300">{{ $i }}</span>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ $sesiAbsensi->url($i) }}"
                                            class="px-3 py-2 text-sm leading-tight text-gray-700 bg-white border border-gray-300 hover:bg-gray-100 hover:text-primary-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                            {{ $i }}
                                        </a>
                                    </li>
                                @endif
                            @endfor

                            <!-- Next Button -->
                            @if ($sesiAbsensi->hasMorePages())
                                <li>
                                    <a href="{{ $sesiAbsensi->nextPageUrl() }}"
                                        class="px-3 py-2 text-sm leading-tight text-gray-700 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-primary-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                        Next
                                    </a>
                                </li>
                            @else
                                <li>
                                    <span
                                        class="px-3 py-2 text-sm leading-tight text-gray-400 bg-gray-200 border border-gray-300 rounded-r-lg cursor-not-allowed dark:bg-gray-700 dark:text-gray-500 dark:border-gray-600">
                                        Next
                                    </span>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </section>

    <script>
        function updateClock() {
            const now = new Date();
            const utc8Time = new Date(now.getTime() + (8 * 60 * 60 * 1000)); // Tambah 8 jam untuk UTC+8
            const hours = utc8Time.getUTCHours().toString().padStart(2, '0');
            const minutes = utc8Time.getUTCMinutes().toString().padStart(2, '0');
            const seconds = utc8Time.getUTCSeconds().toString().padStart(2, '0');

            document.getElementById('hours').textContent = hours;
            document.getElementById('minutes').textContent = minutes;
            document.getElementById('seconds').textContent = seconds; // Bagian detik berwarna merah
        }

        setInterval(updateClock, 1000);
        updateClock(); // Jalankan sekali saat halaman dimuat
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            function startCountdown(elementId, endTime) {
                const countdownElement = document.getElementById(elementId);
                const endDate = new Date(endTime).getTime();

                function updateCountdown() {
                    const now = new Date().getTime();
                    const timeLeft = endDate - now;

                    if (timeLeft <= 0) {
                        countdownElement.textContent = "Sesi Berakhir";
                        countdownElement.style.color = ""; // Warna default
                        return;
                    }

                    const hours = Math.floor((timeLeft / (1000 * 60 * 60)) % 24);
                    const minutes = Math.floor((timeLeft / (1000 * 60)) % 60);
                    const seconds = Math.floor((timeLeft / 1000) % 60);

                    countdownElement.textContent = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
                    countdownElement.style.color = "lime"; // Warna lime saat countdown masih berjalan
                }

                updateCountdown();
                setInterval(updateCountdown, 1000);
            }

            document.querySelectorAll("[id^='countdown-']").forEach(el => {
                const endTime = el.getAttribute("data-end-time");
                if (endTime) {
                    startCountdown(el.id, endTime);
                }
            });
        });
    </script>
@endsection
