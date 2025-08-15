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

            <img class="azvan h-auto max-w-full rounded-lg" src="{{ asset('storage/images/cert.svg') }}"
                alt="image description">

            <div class="w-full p-4 mb-4 mt-10 text-center bg-white border border-gray-200 rounded-lg shadow-sm sm:p-8 dark:bg-gray-900 dark:border-gray-700">
                {{-- <p class="mb-4 text-base font-bold text-gray-500 sm:text-lg dark:text-gray-400 uppercase">SERTIFIKAT PESERTA {{$sesi->agenda}}</p> --}}
                {{-- <h3 class="mb-4 text-2xl font-extrabold text-gray-900 dark:text-white uppercase">{{ $sesi->judul }} <a class="font-extrabold text-blue-500 dark:text-blue-400 hover:underline"></a></h3> --}}

                <div class="flex flex-wrap items-center justify-center gap-2 sm:flex-nowrap">
                    <a href="#"
                        class="w-full sm:w-auto text-gray-500 bg-gray-200 rounded-lg shadow-sm dark:text-gray-400 dark:bg-gray-800 px-4 py-1">

                        <div class="text-left rtl:text-right">
                            <div class="mb-0 text-xs text-gray-500 dark:text-gray-400 ">Sertifikat</div>
                            <div class="mt-0 font-sans text-base font-semibold text-gray-800 dark:text-white">{{$sesi->agenda}}</div>
                        </div>
                    </a>
                    <a href="#"
                        class="w-full sm:w-auto text-gray-500 bg-gray-200 rounded-lg shadow-sm dark:text-gray-400 dark:bg-gray-800 px-4 py-1">

                        <div class="text-left rtl:text-right">
                            <div class="mb-0 text-xs text-gray-500 dark:text-gray-400 ">Asal Instansi</div>
                            <div class="mt-0 font-sans text-base font-semibold text-gray-800 dark:text-white">{{$sesi->instansi}}</div>
                        </div>
                    </a>
                </div>

                <div class="mt-2 flex flex-wrap items-center justify-center gap-2 sm:flex-nowrap">
                    <a href="#"
                        class="w-full sm:w-auto text-gray-500 bg-gray-200 rounded-lg shadow-sm dark:text-gray-400 dark:bg-gray-800 px-4 py-1">

                        <div class="text-left rtl:text-right">
                            <div class="mb-0 text-xs text-gray-500 dark:text-gray-400 ">Waktu</div>
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

                                <th scope="col" class="px-4 py-3 text-center">Tanggal Input</th>
                                <th scope="col" class="px-4 py-3 text-center">Jabatan</th>
                                <th scope="col" class="px-4 py-3 text-center">Nilai</th>

                                <th scope="col" class="px-4 py-3 text-center">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($certs as $ses)
                                <tr class="border-b dark:border-gray-700">
                                    <td class="px-4 py-3 text-center">
                                        {{ ($certs->currentPage() - 1) * $certs->perPage() + $loop->iteration }}
                                    </td>
                                    <td class="px-4 py-3 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $ses->name }}</td>

                                    <td class="px-4 py-3 text-center">{{ $ses->created_at->format('Y-m-d') }}</td>
                                    <td class="px-4 py-3 text-center">{{ $ses->jabatan }}</td>
                                    <td class="px-4 py-3 text-center">{{ $ses->nilai }}</td>

                                    <td class="px-4 py-3 text-center">

                                        <a href="{{ route('cert.detail', [$ses->id, $ses->name]) }}"
                                            class="text-white bg-[#FF9119] hover:bg-[#FF9119]/80 focus:ring-4 focus:outline-none focus:ring-[#FF9119]/50 font-medium rounded-lg text-sm px-2 py-2 text-center inline-flex items-center dark:hover:bg-[#FF9119]/80 dark:focus:ring-[#FF9119]/40">
                                            <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7.171 12.906-2.153 6.411 2.672-.89 1.568 2.34 1.825-5.183m5.73-2.678 2.154 6.411-2.673-.89-1.568 2.34-1.825-5.183M9.165 4.3c.58.068 1.153-.17 1.515-.628a1.681 1.681 0 0 1 2.64 0 1.68 1.68 0 0 0 1.515.628 1.681 1.681 0 0 1 1.866 1.866c-.068.58.17 1.154.628 1.516a1.681 1.681 0 0 1 0 2.639 1.682 1.682 0 0 0-.628 1.515 1.681 1.681 0 0 1-1.866 1.866 1.681 1.681 0 0 0-1.516.628 1.681 1.681 0 0 1-2.639 0 1.681 1.681 0 0 0-1.515-.628 1.681 1.681 0 0 1-1.867-1.866 1.681 1.681 0 0 0-.627-1.515 1.681 1.681 0 0 1 0-2.64c.458-.361.696-.935.627-1.515A1.681 1.681 0 0 1 9.165 4.3ZM14 9a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"/>
                                              </svg>
                                            &nbsp;Sertifikat
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
                        <span class="font-medium">{{ $certs->firstItem() }}</span>
                        to
                        <span class="font-medium">{{ $certs->lastItem() }}</span>
                        of
                        <span class="font-medium">{{ $certs->total() }}</span>
                        results
                    </span>

                    <!-- Navigasi Pagination -->
                    <nav aria-label="Pagination">
                        <ul class="inline-flex -space-x-px space-x-1">
                            <!-- Previous Button -->
                            @if ($certs->onFirstPage())
                                <li>
                                    <span
                                        class="px-3 py-2 text-sm leading-tight text-gray-400 bg-gray-200 border border-gray-300 rounded-l-lg cursor-not-allowed dark:bg-gray-700 dark:text-gray-500 dark:border-gray-600">
                                        Previous
                                    </span>
                                </li>
                            @else
                                <li>
                                    <a href="{{ $certs->previousPageUrl() }}"
                                        class="px-3 py-2 text-sm leading-tight text-gray-700 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-primary-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                        Previous
                                    </a>
                                </li>
                            @endif

                            <!-- Logic for Page Numbers -->
                            @php
                                $start = max($certs->currentPage() - 1, 1);
                                $end = min($start + 2, $certs->lastPage());
                            @endphp

                            @for ($i = $start; $i <= $end; $i++)
                                @if ($i == $certs->currentPage())
                                    <li>
                                        <span
                                            class="px-3 py-2 text-sm leading-tight text-white bg-primary-600 border border-gray-300">{{ $i }}</span>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ $certs->url($i) }}"
                                            class="px-3 py-2 text-sm leading-tight text-gray-700 bg-white border border-gray-300 hover:bg-gray-100 hover:text-primary-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                            {{ $i }}
                                        </a>
                                    </li>
                                @endif
                            @endfor

                            <!-- Next Button -->
                            @if ($certs->hasMorePages())
                                <li>
                                    <a href="{{ $certs->nextPageUrl() }}"
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
