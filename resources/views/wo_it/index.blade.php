@extends('layouts.app')
@section('title', 'IT Work Order')
@section('content')

    @php
        use Carbon\Carbon;
        $currentDate = Carbon::now('Asia/Singapore')->format('YYYY-MM-DD');
        $currentTime = Carbon::now('Asia/Singapore')->format('H:i');
    @endphp

    <section class="min-h-screen bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-5xl lg:py-16 !pb-40 !pt-28">

            <img class="azvan h-auto max-w-full rounded-lg" src="{{ asset('storage/images/IT-WO.svg') }}"
                alt="image description">
            <div class="p-5 text-center">
                {{-- <h3 class="mb-2 text-2xl font-extrabold tracking-tight leading-none md:text-2xl xl:text-2xl dark:text-white">
                    Unit <a class="font-extrabold text-blue-500 dark:text-blue-400 hover:underline">Excavator</a>
                </h3> --}}
            </div>

            <a href="{{ route('wo_it.create') }}" class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-4 py-2 text-center inline-flex items-center me-2 mb-2">
                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
                &nbsp; Buat WO IT
            </a>

            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div class="w-full md:w-1/2">
                        <form method="GET" action="{{ route('wo_it.index') }}" class="flex items-center">
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
                                <button type="submit" class="text-white absolute end-[5px] bottom-[5px] bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-1 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                            </div>

                        </form>
                    </div>

                    <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                        <div class="flex items-center space-x-3 w-full md:w-auto">
                            <div id="actionsDropdown"
                                class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="actionsDropdownButton">
                                    <li>
                                        <a href="#"
                                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mass
                                            Edit</a>
                                    </li>
                                </ul>
                                <div class="py-1">
                                    <a href="#"
                                        class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete
                                        all</a>
                                </div>
                            </div>

                            <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown"
                                class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                                type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                    class="h-4 w-4 mr-2 text-gray-400" viewbox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                                        clip-rule="evenodd" />
                                </svg>
                                Filter
                                <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                </svg>
                            </button>

                            <form method="GET" action="{{ route('wo_it.index') }}">
                                <div id="filterDropdown"
                                    class="z-50 hidden absolute w-64 p-3 bg-white rounded-lg shadow dark:bg-gray-700">
                                    <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white flex justify-center">Pilih Department</h6>
                                    <ul class="grid grid-cols-2 gap-2 text-sm">
                                        @foreach (['HSEQT', 'OPERATION', 'HRGA-IT', 'EDP', 'PAM', 'SCM', 'FAT'] as $dept)
                                            <li class="flex items-center">
                                                <input id="{{ $dept }}" type="checkbox" name="departments[]"
                                                    value="{{ $dept }}"
                                                    class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                                                    {{ in_array($dept, request('departments', [])) ? 'checked' : '' }}>
                                                <label for="{{ $dept }}"
                                                    class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">{{ $dept }}</label>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div class="flex justify-center mt-4">
                                        <button type="submit"
                                            class="px-4 py-2 text-white bg-primary-600 hover:bg-primary-700 rounded-lg">
                                            Apply Filters
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3 text-center">No</th>
                                <th scope="col" class="px-4 py-3 text-center">Ticket</th>
                                <th scope="col" class="px-4 py-3 text-center">Nama</th>
                                <th scope="col" class="px-4 py-3 text-center">Tanggal</th>
                                {{-- <th scope="col" class="px-4 py-3 text-center">Jam</th> --}}
                                <th scope="col" class="px-4 py-3 text-center">Departemen</th>
                                <th scope="col" class="px-4 py-3 text-center">Issue</th>
                                <th scope="col" class="px-4 py-3 text-center">Detail</th>
                                <th scope="col" class="px-4 py-3 text-center">Status</th>
                                <th scope="col" class="px-4 py-3 text-center">Closed by</th>
                                {{-- <th scope="col" class="px-4 py-3 text-center">Open → Progress</th>
                                <th scope="col" class="px-4 py-3 text-center">Progress → Closed</th> --}}
                                <th scope="col" class="px-4 py-3 text-center">Durasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($workOrders as $mh)
                                <tr class="border-b dark:border-gray-700">
                                    <td class="px-4 py-3 text-center">
                                        {{ ($workOrders->currentPage() - 1) * $workOrders->perPage() + $loop->iteration }}</td>
                                    <td class="px-4 py-3 text-center">{{ $mh->ticket_number }}</td>
                                    <td
                                        class="px-4 py-3 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $mh->name }}</td>
                                    <td class="px-4 py-3 text-center">{{ Carbon::parse($mh->tanggal)->format('d/m/y') }}</td>
                                    {{-- <td class="px-4 py-3 text-center">{{ Carbon::parse($mh->jam)->format('H:i') }}</td> --}}

                                    <td class="px-4 py-3 text-center">{{ $mh->department }}</td>
                                    <td class="px-4 py-3 text-center">{{ $mh->request_type }}</td>
                                    <td class="px-4 py-3 text-center">{{ $mh->description }}</td>
                                    <td class="px-1 py-1 text-center">
                                        @php $status = trim($mh->status); @endphp
                                        @switch($status)
                                            @case('closed')
                                                <span class="font-semibold bg-green-100 text-green-800 text-xs px-2.5 pb-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                                                    Closed
                                                </span>
                                                @break

                                            @case('in_progress')
                                                <span class="font-semibold bg-yellow-100 text-yellow-800 text-xs px-2.5 pb-0.5 rounded-full dark:bg-yellow-900 dark:text-yellow-300">
                                                    Ongoing
                                                </span>
                                                @break

                                            @default
                                                {{-- Default status = "open" --}}
                                                <span class="font-semibold bg-red-100 text-red-800 text-xs px-2.5 pb-0.5 rounded-full dark:bg-red-900 dark:text-red-300">
                                                    Open
                                                </span>
                                        @endswitch
                                    </td>
                                    {{-- <td class="px-4 py-3 text-center">{{ $mh->resolved_by ?? 'Unassigned' }}</td> --}}
                                    <td class="px-4 py-3 text-center {{ $mh->resolved_by ? 'text-blue-500' : 'text-yellow-500' }}">
                                        {{ $mh->resolved_by === 'Muhammad Al-Asfahani' ? 'Azvan' : ($mh->resolved_by ?? 'Unassigned') }}
                                    </td>
                                    {{-- Tambahan --}}
                                    {{-- <td class="px-4 py-3 text-center">{{ $mh->open_to_in_progress }}</td>
                                    <td class="px-4 py-3 text-center">{{ $mh->in_progress_to_closed }}</td> --}}
                                    <td class="px-4 py-3 text-center">{{ $mh->total_duration }}</td>

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
                        <span class="font-medium">{{ $workOrders->firstItem() }}</span>
                        to
                        <span class="font-medium">{{ $workOrders->lastItem() }}</span>
                        of
                        <span class="font-medium">{{ $workOrders->total() }}</span>
                        results
                    </span>

                    <!-- Navigasi Pagination -->
                    <nav aria-label="Pagination">
                        <ul class="inline-flex -space-x-px space-x-1">
                            <!-- Previous Button -->
                            @if ($workOrders->onFirstPage())
                                <li>
                                    <span
                                        class="px-3 py-2 text-sm leading-tight text-gray-400 bg-gray-200 border border-gray-300 rounded-l-lg cursor-not-allowed dark:bg-gray-700 dark:text-gray-500 dark:border-gray-600">
                                        Previous
                                    </span>
                                </li>
                            @else
                                <li>
                                    <a href="{{ $workOrders->previousPageUrl() }}"
                                        class="px-3 py-2 text-sm leading-tight text-gray-700 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-primary-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                        Previous
                                    </a>
                                </li>
                            @endif

                            <!-- Logic for Page Numbers -->
                            @php
                                $start = max($workOrders->currentPage() - 1, 1);
                                $end = min($start + 2, $workOrders->lastPage());
                            @endphp

                            @for ($i = $start; $i <= $end; $i++)
                                @if ($i == $workOrders->currentPage())
                                    <li>
                                        <span
                                            class="px-3 py-2 text-sm leading-tight text-white bg-primary-600 border border-gray-300">{{ $i }}</span>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ $workOrders->url($i) }}"
                                            class="px-3 py-2 text-sm leading-tight text-gray-700 bg-white border border-gray-300 hover:bg-gray-100 hover:text-primary-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                            {{ $i }}
                                        </a>
                                    </li>
                                @endif
                            @endfor

                            <!-- Next Button -->
                            @if ($workOrders->hasMorePages())
                                <li>
                                    <a href="{{ $workOrders->nextPageUrl() }}"
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
