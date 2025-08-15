@extends('layouts.app')
@section('title', 'Stock Out')
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
                <h3 class="mb-2 text-2xl font-extrabold tracking-tight leading-none md:text-2xl xl:text-2xl dark:text-white">
                    Form <a class="font-extrabold text-blue-500 dark:text-blue-400 hover:underline">Barang Keluar</a>
                </h3>
            </div>

            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-visible">
                <form action="{{ route('stock.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="type" value="out">

                    <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                        <div class="mt-4 w-full md:w-1/2 relative">
                            <input type="text" id="search" name="search"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-3 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                placeholder="Cari barang..." onkeyup="searchItem()" autocomplete="off">

                            <ul id="item-list"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg absolute focus:border-primary-500 block w-full pl-1 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white w-full mt-1 max-h-52 overflow-y-auto hidden z-50 top-[-100%]">
                                @foreach ($items as $item)
                                    <li
                                        @if ($item->stock > 0) onclick="selectItem('{{ $item->id }}', '{{ $item->name }}', '{{ $item->specification }}', '{{ $item->stock }}')"
                                            class="cursor-pointer p-2 hover:bg-gray-100 dark:hover:bg-gray-600"
                                        @else
                                            class="text-gray-500 p-2 cursor-not-allowed" @endif>
                                        {{ $item->name }} - {{ $item->specification }} (Stok: {{ $item->stock }})
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="w-auto">
                            <button type="submit"
                                class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm pl-1 p-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 text-center inline-flex items-center">

                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M5 3a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V7.414A2 2 0 0 0 20.414 6L18 3.586A2 2 0 0 0 16.586 3H5Zm3 11a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v6H8v-6Zm1-7V5h6v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1Z"
                                        clip-rule="evenodd" />
                                    <path fill-rule="evenodd" d="M14 17h-4v-2h4v2Z" clip-rule="evenodd" />
                                </svg>
                                &nbsp; Simpan
                            </button>
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400" border="1"
                            id="selected-items">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-4 py-3 text-center">Nama Barang</th>
                                    <th scope="col" class="px-4 py-3 text-center">Stock</th>
                                    <th scope="col" class="px-4 py-3 text-center">Jumlah</th>
                                    <th scope="col" class="px-4 py-3 text-center">Tanggal</th>
                                    <th scope="col" class="px-4 py-3 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>

                </form>

            </div>
        </div>
    </section>

    <script>
        function getCurrentDateUTC8() {
            let now = new Date();
            now.setHours(now.getHours() + 8); // Set ke UTC+8
            return now.toISOString().split('T')[0]; // Format YYYY-MM-DD
        }

        function searchItem() {
            let input = document.getElementById('search').value.toLowerCase();
            let itemList = document.getElementById('item-list');
            let items = itemList.getElementsByTagName('li');
            let found = false;

            for (let i = 0; i < items.length; i++) {
                let text = items[i].textContent.toLowerCase();
                if (text.includes(input)) {
                    items[i].style.display = '';
                    found = true;
                } else {
                    items[i].style.display = 'none';
                }
            }

            // Tampilkan dropdown jika ada hasil pencarian
            itemList.style.display = found ? 'block' : 'none';
        }

        function selectItem(id, name, spec, stock) {
            if (stock == 0) return; // Cegah pemilihan barang dengan stok 0

            let tbody = document.getElementById('selected-items').getElementsByTagName('tbody')[0];
            let inputSearch = document.getElementById('search');
            let itemList = document.getElementById('item-list');

            // Cek apakah barang sudah ada di tabel
            if (document.getElementById(`row-${id}`)) return;

            let fullName = name + ' - ' + spec;

            // Tambahkan ke tabel
            let row = `<tr id="row-${id}">
                <td class="px-4 py-3 text-center">
                    <input type="hidden" name="item_id[]" value="${id}">
                    ${fullName}
                </td>
                <td class="px-4 py-3 text-center">
                    <input type="text" value="${stock}" readonly style="border: none; background: transparent; text-align: center;">
                </td>
                <td class="px-4 py-3 text-center">
                    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-1 px-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    type="number" name="quantity[]" value="1" min="1" max="${stock}" required>
                </td>
                <td class="px-4 py-3 text-center">
                    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-1 px-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    type="date" name="date[]" value="${getCurrentDateUTC8()}" required>
                </td>
                <td class="px-4 py-3 text-center">
                    <button class="inline-flex items-center justify-center gap-1 px-2 py-1 text-white bg-red-600 hover:bg-red-700 rounded-lg text-xs font-medium transition whitespace-nowrap" type="button" onclick="removeItem(${id})">
                        <svg class="w-[12px] h-[12px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                        </svg>
                        Hapus
                    </button>
                </td>
            </tr>`;
            tbody.innerHTML += row;

            // Bersihkan input pencarian
            inputSearch.value = '';
            itemList.style.display = 'none';
        }

        function removeItem(id) {
            document.getElementById(`row-${id}`).remove();
        }

        // Sembunyikan dropdown jika klik di luar
        document.addEventListener('click', function(event) {
            let searchBox = document.getElementById('search');
            let itemList = document.getElementById('item-list');

            if (!searchBox.contains(event.target) && !itemList.contains(event.target)) {
                itemList.style.display = 'none';
            }
        });
    </script>
@endsection
