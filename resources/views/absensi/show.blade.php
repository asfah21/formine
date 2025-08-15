@extends('layouts.app')
@section('title', 'List Daftar Hadir Online')
@section('content')

    @php
        use Carbon\Carbon;
        use Illuminate\Support\Str;
        $currentDate = Carbon::now('Asia/Singapore')->format('YYYY-MM-DD');
        $currentTime = Carbon::now('Asia/Singapore')->format('H:i');
    @endphp

    <section class="min-h-screen bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-5xl lg:py-16 !pb-40 !pt-28">

            <img class="azvan h-auto max-w-full rounded-lg" src="{{ asset('storage/images/dh-ol.svg') }}"
                alt="image description">

            <div class="w-full p-4 mb-4 mt-10 text-center bg-white border border-gray-200 rounded-lg shadow-sm sm:p-8 dark:bg-gray-900 dark:border-gray-700">
                <p class="mb-4 text-base font-bold text-gray-500 sm:text-lg dark:text-gray-400 uppercase">DAFTAR HADIR PESERTA {{$sesi->agenda}}</p>
                {{-- <h3 class="mb-4 text-2xl font-extrabold text-gray-900 dark:text-white uppercase">{{ $sesi->judul }} <a class="font-extrabold text-blue-500 dark:text-blue-400 hover:underline"></a></h3> --}}

                <div class="flex flex-wrap items-center justify-center gap-2 sm:flex-nowrap">
                    <a href="#"
                        class="w-full sm:w-auto text-gray-500 bg-gray-200 rounded-lg shadow-sm dark:text-gray-400 dark:bg-gray-800 px-4 py-1">

                        <div class="text-left rtl:text-right">
                            <div class="mb-0 text-xs text-gray-500 dark:text-gray-400 ">Judul</div>
                            <div class="mt-0 font-sans text-base font-semibold text-gray-800 dark:text-white">{{$sesi->judul}}</div>
                        </div>
                    </a>
                    <a href="#"
                        class="w-full sm:w-auto text-gray-500 bg-gray-200 rounded-lg shadow-sm dark:text-gray-400 dark:bg-gray-800 px-4 py-1">

                        <div class="text-left rtl:text-right">
                            <div class="mb-0 text-xs text-gray-500 dark:text-gray-400 ">Dibuat oleh</div>
                            <div class="mt-0 font-sans text-base font-semibold text-gray-800 dark:text-white">{{$sesi->name}}</div>
                        </div>
                    </a>
                </div>

                <div class="mt-2 flex flex-wrap items-center justify-center gap-2 sm:flex-nowrap">
                    <a href="#"
                        class="w-full sm:w-auto text-gray-500 bg-gray-200 rounded-lg shadow-sm dark:text-gray-400 dark:bg-gray-800 px-4 py-1">

                        <div class="text-left rtl:text-right">
                            <div class="mb-0 text-xs text-gray-500 dark:text-gray-400 ">Tanggal</div>
                            <div class="mt-0 font-sans text-base font-semibold text-gray-800 dark:text-white">
                                {{ \Carbon\Carbon::parse($sesi->start_time)->format('d-m-Y H:i') }}
                            </div>

                        </div>
                    </a>
                    <a href="#"
                        class="w-full sm:w-auto text-gray-500 bg-gray-200 rounded-lg shadow-sm dark:text-gray-400 dark:bg-gray-800 px-4 py-1">

                        <div class="text-left rtl:text-right">
                            <div class="mb-0 text-xs text-gray-500 dark:text-gray-400 ">Lokasi</div>
                            <div class="mt-0 font-sans text-base font-semibold text-gray-800 dark:text-white">{{$sesi->lokasi}}</div>
                        </div>
                    </a>
                </div>

            </div>


            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div class="w-full md:w-1/2">
                        <form method="GET" action="{{ route('absensi.show', ['id' => $sesi->id]) }}"
                            class="flex items-center">

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

                        </div>
                    </div>

                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3 text-center">No</th>
                                <th scope="col" class="px-4 py-3 text-center">Nama</th>
                                <th scope="col" class="px-4 py-3 text-center">Date</th>
                                <th scope="col" class="px-4 py-3 text-center">Time</th>
                                <th scope="col" class="px-4 py-3 text-center">Jabatan</th>
                                <th scope="col" class="px-4 py-3 text-center">Jam Tidur</th>
                                <th scope="col" class="px-4 py-3 text-center">Sehat/Tidak</th>
                                <th scope="col" class="px-4 py-3 text-center">Foto Selfie</th>
                                {{-- <th scope="col" class="px-4 py-3 text-center">Aksi</th> --}}

                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($absensis as $ses)
                                <tr class="border-b dark:border-gray-700">
                                    <td class="px-4 py-3 text-center">
                                        {{ ($absensis->currentPage() - 1) * $absensis->perPage() + $loop->iteration }}
                                    </td>
                                    <td
                                        class="px-4 py-3 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $ses->name }}</td>
                                    <td class="px-4 py-3 text-center">{{ $ses->created_at->format('Y-m-d') }}</td>
                                    <td class="px-4 py-3 text-center">{{ $ses->created_at->format('H:i:s') }}</td>
                                    <td class="px-4 py-3 text-center">{{ $ses->jabatan }}</td>
                                    <td class="px-4 py-3 text-center">
                                        {{ $ses->jam_tidur ? $ses->jam_tidur . ' jam' : '' }} {{-- Ternary Operation--}}
                                    </td>
                                    <td class="px-4 py-3 text-center">{{ $ses->sehat }}</td>
                                    <td class="px-4 py-3 text-center">
                                        <img src="{{ asset('storage/selfies/' . $ses->photo) }}" width="100" alt="Selfie"
                                            class="mx-auto">
                                    </td>
                                    <td class="px-4 py-3 text-center">
                                        <a href="{{ route('certs.show', [$ses->id, $ses->name]) }}"
                                           class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                                           Lihat Sertifikat
                                        </a>
                                    </td>
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
                        <span class="font-medium">{{ $absensis->firstItem() }}</span>
                        to
                        <span class="font-medium">{{ $absensis->lastItem() }}</span>
                        of
                        <span class="font-medium">{{ $absensis->total() }}</span>
                        results
                    </span>

                    <!-- Navigasi Pagination -->
                    <nav aria-label="Pagination">
                        <ul class="inline-flex -space-x-px space-x-1">
                            <!-- Previous Button -->
                            @if ($absensis->onFirstPage())
                                <li>
                                    <span
                                        class="px-3 py-2 text-sm leading-tight text-gray-400 bg-gray-200 border border-gray-300 rounded-l-lg cursor-not-allowed dark:bg-gray-700 dark:text-gray-500 dark:border-gray-600">
                                        Previous
                                    </span>
                                </li>
                            @else
                                <li>
                                    <a href="{{ $absensis->previousPageUrl() }}"
                                        class="px-3 py-2 text-sm leading-tight text-gray-700 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-primary-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                        Previous
                                    </a>
                                </li>
                            @endif

                            <!-- Logic for Page Numbers -->
                            @php
                                $start = max($absensis->currentPage() - 1, 1);
                                $end = min($start + 2, $absensis->lastPage());
                            @endphp

                            @for ($i = $start; $i <= $end; $i++)
                                @if ($i == $absensis->currentPage())
                                    <li>
                                        <span
                                            class="px-3 py-2 text-sm leading-tight text-white bg-primary-600 border border-gray-300">{{ $i }}</span>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ $absensis->url($i) }}"
                                            class="px-3 py-2 text-sm leading-tight text-gray-700 bg-white border border-gray-300 hover:bg-gray-100 hover:text-primary-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                            {{ $i }}
                                        </a>
                                    </li>
                                @endif
                            @endfor

                            <!-- Next Button -->
                            @if ($absensis->hasMorePages())
                                <li>
                                    <a href="{{ $absensis->nextPageUrl() }}"
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
@endsection
