@extends('layouts.app')

@section('title', 'Hasil Timesheet')

@section('content')
@php
use Carbon\Carbon;
@endphp

<section class="min-h-screen bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-7xl lg:py-16 !pb-40 !pt-28">
        <img class="azvan h-auto max-w-full rounded-lg" src="{{ asset('storage/images/HASIL.svg') }}" alt="Hasil Timesheet">
        <div class="p-5 text-center">
            <h3 class="mb-2 text-2xl font-extrabold tracking-tight leading-none md:text-2xl xl:text-2xl dark:text-white">
                Hasil <a class="font-extrabold text-blue-500 dark:text-blue-400 hover:underline">Timesheet</a>
            </h3>
        </div>

        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                <div class="w-full md:w-1/2">
                    <form method="GET" action="{{ route('timesheets.hasil') }}" class="flex items-center">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="text" name="search" value="{{ request('search') }}" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="Cari nama atau nomor unit...">
                        </div>
                    </form>
                </div>
                <!-- <div class="flex flex-col md:flex-row md:space-x-2 space-y-2 md:space-y-0 w-full">
                    <input type="date" name="start_date" value="{{ request('start_date') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white w-full md:w-auto">
                    
                    <span class="flex items-center justify-center text-sm text-gray-900 dark:text-gray-100 md:justify-start">&nbsp; sampai dengan &nbsp;</span>
                    
                    <input type="date" name="end_date" value="{{ request('end_date', now()->format('Y-m-d')) }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white w-full md:w-auto">
                    
                    <button type="submit"
                        class="mx-1 text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xs px-3 py-1.5 w-full md:w-auto">
                        Filter
                    </button>
                </div> -->
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3 text-center">No</th>
                            <th scope="col" class="px-4 py-3 text-center">Tanggal</th>
                            <th scope="col" class="px-4 py-3 text-center">Shift</th>
                            <th scope="col" class="px-4 py-3 text-center">Nama</th>
                            <th scope="col" class="px-4 py-3 text-center">Unit</th>
                            <!-- <th scope="col" class="px-4 py-3 text-center">Total Jam Kerja</th>
                            <th scope="col" class="px-4 py-3 text-center">Jam Produktif</th>
                            <th scope="col" class="px-4 py-3 text-center">Efisiensi</th> -->
                            <th scope="col" class="px-4 py-3 text-center">Catatan</th>
                            <th scope="col" class="px-4 py-3 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($timesheets as $ts)
                            @php
                                $totalHours = floor($ts->total_work_minutes / 60);
                                $totalMins = $ts->total_work_minutes % 60;
                                $opHours = floor($ts->operational_minutes / 60);
                                $opMins = $ts->operational_minutes % 60;
                                $opPercentage = $ts->total_work_minutes > 0 ? round(($ts->operational_minutes / $ts->total_work_minutes) * 100) : 0;
                            @endphp
                            <tr class="border-b dark:border-gray-700">
                                <td class="px-4 py-3 text-center">{{ ($timesheets->currentPage() - 1) * $timesheets->perPage() + $loop->iteration }}</td>
                                <td class="px-4 py-3 text-center">{{ \Carbon\Carbon::parse($ts->tanggal)->format('d/m/Y') }}</td>
                                <td class="px-4 py-3 text-center">{{ ucfirst($ts->shift) }}</td>
                                <td class="px-4 py-3 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $ts->nama }}</td>
                                <td class="px-4 py-3 text-center">{{ $ts->nomor_unit }}</td>
                                <!-- <td class="px-4 py-3 text-center">{{ $totalHours }}j {{ $totalMins }}m</td>
                                <td class="px-4 py-3 text-center">{{ $opHours }}j {{ $opMins }}m</td>
                                <td class="px-4 py-3 text-center">{{ $opPercentage }}%</td> -->
                                
                                <td class="px-4 py-3 text-center truncate">{{ $ts->catatan }}</td>
                                <td class="px-4 py-3 text-center">
                                    <a href="{{ route('timesheets.show', ['name' => $ts->nama, 'aptnumx' => $ts->id_timesheet]) }}" class="text-white bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xs px-3 py-1.5">
                                        Detail
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="px-4 py-3 text-center">Tidak ada data timesheet ditemukan</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if($timesheets->hasPages())
                <div class="mt-4 px-5 py-3 flex flex-col md:flex-row justify-between items-center space-y-3 md:space-y-0">
                    <span class="text-sm text-gray-500 dark:text-gray-400">
                        Menampilkan <span class="font-medium">{{ $timesheets->firstItem() }}</span>
                        sampai <span class="font-medium">{{ $timesheets->lastItem() }}</span>
                        dari <span class="font-medium">{{ $timesheets->total() }}</span> data
                    </span>
                    
                    <nav aria-label="Pagination">
                        <ul class="inline-flex -space-x-px space-x-1">
                            @if ($timesheets->onFirstPage())
                                <li>
                                    <span class="px-3 py-2 text-sm leading-tight text-gray-400 bg-gray-200 border border-gray-300 rounded-l-lg cursor-not-allowed dark:bg-gray-700 dark:text-gray-500 dark:border-gray-600">
                                        Sebelumnya
                                    </span>
                                </li>
                            @else
                                <li>
                                    <a href="{{ $timesheets->previousPageUrl() }}" class="px-3 py-2 text-sm leading-tight text-gray-700 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-primary-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                        Sebelumnya
                                    </a>
                                </li>
                            @endif

                            @php
                                $start = max($timesheets->currentPage() - 1, 1);
                                $end = min($start + 2, $timesheets->lastPage());
                            @endphp

                            @for ($i = $start; $i <= $end; $i++)
                                @if ($i == $timesheets->currentPage())
                                    <li>
                                        <span class="px-3 py-2 text-sm leading-tight text-white bg-blue-600 border border-gray-300">{{ $i }}</span>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ $timesheets->url($i) }}" class="px-3 py-2 text-sm leading-tight text-gray-700 bg-white border border-gray-300 hover:bg-gray-100 hover:text-primary-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                            {{ $i }}
                                        </a>
                                    </li>
                                @endif
                            @endfor

                            @if ($timesheets->hasMorePages())
                                <li>
                                    <a href="{{ $timesheets->nextPageUrl() }}" class="px-3 py-2 text-sm leading-tight text-gray-700 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-primary-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                        Selanjutnya
                                    </a>
                                </li>
                            @else
                                <li>
                                    <span class="px-3 py-2 text-sm leading-tight text-gray-400 bg-gray-200 border border-gray-300 rounded-r-lg cursor-not-allowed dark:bg-gray-700 dark:text-gray-500 dark:border-gray-600">
                                        Selanjutnya
                                    </span>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            @endif
        </div>
    </div>
</section>
@endsection