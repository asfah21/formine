@extends('layouts.app')
@section('title', 'Stock & Riwayat Barang')
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
            <div class="p-5 text-center">
                <h3 class="mb-2 text-2xl font-extrabold tracking-tight leading-none md:text-2xl xl:text-2xl dark:text-white">
                    LIST <a class="font-extrabold text-blue-500 dark:text-blue-400 hover:underline">STOCK</a> IT
                </h3>
            </div>

            <div class="border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400">
                    <li class="me-2">
                        <button onclick="openTab(event, 'profile')"
                            class="mb-2 tab-link inline-flex items-center justify-center p-2 border rounded-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-600 group active"
                            id="defaultTab">
                            <svg class="w-4 h-4 me-2 text-gray-400 group-hover:text-gray-500 dark:text-gray-500 dark:group-hover:text-gray-300"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                            </svg>Real Stock
                        </button>
                    </li>
                    <li class="me-2">
                        <button onclick="openTab(event, 'dashboard')"
                            class="mb-2 tab-link inline-flex items-center justify-center p-2 border rounded-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-600 group">
                            <svg class="w-4 h-4 me-2 text-blue-600 dark:text-blue-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                <path
                                    d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                            </svg>Riwayat
                        </button>
                    </li>
                </ul>

                <div id="profile"
                    class="tab-content p-4 bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                    <div
                        class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 py-4">
                        <div class="w-full md:w-1/2">
                            <form method="GET" action="{{ route('stock.index') }}" class="flex items-center">
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

                        <div class="flex items-center gap-2 w-full md:w-auto">
                            <div class="w-auto">
                                <a href="{{ route('stock.in') }}"
                                    class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-2 py-1.5 text-center inline-flex items-center">
                                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    &nbsp; Stock In
                                </a>
                            </div>

                            <div class="w-auto">
                                <a href="{{ route('stock.out') }}"
                                    class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-2 py-1.5 text-center inline-flex items-center">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>

                                    &nbsp; Stock Out
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table border="1" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-4 py-3 text-center">No</th>
                                    <th scope="col" class="px-4 py-3 text-center">Tanggal</th>
                                    <th scope="col" class="px-4 py-3 text-center">ID</th>
                                    <th scope="col" class="px-4 py-3 text-center">Nama Barang</th>

                                    <th scope="col" class="px-4 py-3 text-center">Stock</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($items as $sesi)
                                    <tr class="border-b dark:border-gray-700">
                                        <td class="px-4 py-3 text-center">
                                            {{ ($items->currentPage() - 1) * $items->perPage() + $loop->iteration }} </td>
                                        <td class="px-4 py-3 text-center">
                                            {{ Carbon::parse($sesi->created_at)->format('d/m/Y') }}</a></td>
                                        <td class="px-4 py-3 text-center"> {{ $sesi->id }}</td>
                                        <td
                                            class="px-4 py-3 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $sesi->name }} - {{ $sesi->specification }}</td>

                                        <td class="px-4 py-3 text-center">{{ $sesi->stock }}</a></td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">No records found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div
                        class="mt-4 py-6 px-5 flex flex-col md:flex-row justify-between items-center space-y-3 md:space-y-0">
                        <!-- Informasi Showing -->
                        <span class="text-sm text-gray-500 dark:text-gray-400">
                            Showing
                            <span class="font-medium">{{ $items->firstItem() }}</span>
                            to
                            <span class="font-medium">{{ $items->lastItem() }}</span>
                            of
                            <span class="font-medium">{{ $items->total() }}</span>
                            results
                        </span>

                        <!-- Navigasi Pagination -->
                        <nav aria-label="Pagination">
                            <ul class="inline-flex -space-x-px space-x-1">
                                <!-- Previous Button -->
                                @if ($items->onFirstPage())
                                    <li>
                                        <span
                                            class="px-3 py-2 text-sm leading-tight text-gray-400 bg-gray-200 border border-gray-300 rounded-l-lg cursor-not-allowed dark:bg-gray-700 dark:text-gray-500 dark:border-gray-600">
                                            Previous
                                        </span>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ $items->previousPageUrl() }}"
                                            class="px-3 py-2 text-sm leading-tight text-gray-700 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-primary-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                            Previous
                                        </a>
                                    </li>
                                @endif

                                <!-- Logic for Page Numbers -->
                                @php
                                    $start = max($items->currentPage() - 1, 1);
                                    $end = min($start + 2, $items->lastPage());
                                @endphp

                                @for ($i = $start; $i <= $end; $i++)
                                    @if ($i == $items->currentPage())
                                        <li>
                                            <span
                                                class="px-3 py-2 text-sm leading-tight text-white bg-primary-600 border border-gray-300">{{ $i }}</span>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ $items->url($i) }}"
                                                class="px-3 py-2 text-sm leading-tight text-gray-700 bg-white border border-gray-300 hover:bg-gray-100 hover:text-primary-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                                {{ $i }}
                                            </a>
                                        </li>
                                    @endif
                                @endfor

                                <!-- Next Button -->
                                @if ($items->hasMorePages())
                                    <li>
                                        <a href="{{ $items->nextPageUrl() }}"
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

                <div id="dashboard"
                    class="tab-content p-4 hidden bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                    <div
                        class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 py-4">
                        <div class="w-full md:w-1/2">
                            <form method="GET" action="{{ route('stock.index') }}" class="flex items-center">
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
                                    <input type="text" name="search" value="{{ request('search') }}"
                                        id="simple-search"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="Search">
                                    <button type="submit"
                                        class="text-white absolute end-[5px] bottom-[5px] bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-1 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                                </div>

                            </form>
                        </div>

                        <div class="flex items-center gap-2 w-full md:w-auto">
                            <div class="w-auto">
                                <a href="{{ route('stock.in') }}"
                                    class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-2 py-1.5 text-center inline-flex items-center">
                                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    &nbsp; Stock In
                                </a>
                            </div>

                            <div class="w-auto">
                                <a href="{{ route('stock.out') }}"
                                    class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-2 py-1.5 text-center inline-flex items-center">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>

                                    &nbsp; Stock Out
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table border="1" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-4 py-3 text-center">No</th>
                                    <th scope="col" class="px-4 py-3 text-center">Tanggal</th>
                                    <th scope="col" class="px-4 py-3 text-center">ID</th>
                                    <th scope="col" class="px-4 py-3 text-center">Nama Barang</th>
                                    <th scope="col" class="px-4 py-3 text-center">Jenis</th>
                                    <th scope="col" class="px-4 py-3 text-center">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($stocks as $ses)
                                    <tr class="border-b dark:border-gray-700">
                                        <td class="px-4 py-3 text-center">
                                            {{ ($stocks->currentPage() - 1) * $stocks->perPage() + $loop->iteration }}
                                        </td>
                                        <td class="px-4 py-3 text-center">
                                            {{ Carbon::parse($ses->date)->format('d/m/Y') }}</td>
                                        <td class="px-4 py-3 text-center">
                                            {{ $ses->item->id }}</td>
                                        <td
                                            class="px-4 py-3 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $ses->item->name }} - {{ $ses->item->specification }}</td>
                                        {{-- <td class="px-4 py-3 text-center">{{ $ses->item->specification }}</td> --}}
                                        <td class="px-4 py-3 text-center">
                                            <span
                                                class="px-2.5 py-0.5 rounded-sm text-xs font-medium
                                                {{ $ses->type == 'in' ? 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300' : 'bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-300' }}">
                                                {{ $ses->type == 'in' ? 'Masuk' : 'Keluar' }}
                                            </span>
                                        </td>


                                        <td class="px-4 py-3 text-center">{{ $ses->quantity }}</a></td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">No records found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div
                        class="mt-4 py-6 px-5 flex flex-col md:flex-row justify-between items-center space-y-3 md:space-y-0">
                        <!-- Informasi Showing -->
                        <span class="text-sm text-gray-500 dark:text-gray-400">
                            Showing
                            <span class="font-medium">{{ $stocks->firstItem() }}</span>
                            to
                            <span class="font-medium">{{ $stocks->lastItem() }}</span>
                            of
                            <span class="font-medium">{{ $stocks->total() }}</span>
                            results
                        </span>

                        <!-- Navigasi Pagination -->
                        <nav aria-label="Pagination">
                            <ul class="inline-flex -space-x-px space-x-1">
                                <!-- Previous Button -->
                                @if ($stocks->onFirstPage())
                                    <li>
                                        <span
                                            class="px-3 py-2 text-sm leading-tight text-gray-400 bg-gray-200 border border-gray-300 rounded-l-lg cursor-not-allowed dark:bg-gray-700 dark:text-gray-500 dark:border-gray-600">
                                            Previous
                                        </span>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ $stocks->previousPageUrl() }}"
                                            class="px-3 py-2 text-sm leading-tight text-gray-700 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-primary-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                            Previous
                                        </a>
                                    </li>
                                @endif

                                <!-- Logic for Page Numbers -->
                                @php
                                    $start = max($stocks->currentPage() - 1, 1);
                                    $end = min($start + 2, $stocks->lastPage());
                                @endphp

                                @for ($i = $start; $i <= $end; $i++)
                                    @if ($i == $stocks->currentPage())
                                        <li>
                                            <span
                                                class="px-3 py-2 text-sm leading-tight text-white bg-primary-600 border border-gray-300">{{ $i }}</span>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ $stocks->url($i) }}"
                                                class="px-3 py-2 text-sm leading-tight text-gray-700 bg-white border border-gray-300 hover:bg-gray-100 hover:text-primary-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                                {{ $i }}
                                            </a>
                                        </li>
                                    @endif
                                @endfor

                                <!-- Next Button -->
                                @if ($stocks->hasMorePages())
                                    <li>
                                        <a href="{{ $stocks->nextPageUrl() }}"
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
        </div>

        <script>
            function openTab(evt, tabName) {
                // Sembunyikan semua konten tab
                document.querySelectorAll(".tab-content").forEach(tab => {
                    tab.classList.add("hidden");
                });

                // Hilangkan tanda aktif dari semua tab
                document.querySelectorAll(".tab-link").forEach(tab => {
                    tab.classList.remove("active", "border", "bg-gray-200", "text-blue-600");
                });

                // Tampilkan tab yang dipilih
                document.getElementById(tabName).classList.remove("hidden");

                // Tambahkan class aktif pada tab yang diklik
                evt.currentTarget.classList.add("active", "border", "bg-gray-200", "text-blue-600");
            }

            // Set default tab
            document.getElementById("defaultTab").click();
        </script>

    </section>
@endsection
