@extends('layouts.app')
@section('title', 'Stock In')
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
                    Form <a class="font-extrabold text-blue-500 dark:text-blue-400 hover:underline">Barang Masuk</a>
                </h3>
            </div>

            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">

                <form action="{{ route('stock.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="type" value="in">
                    <label for="item_id"></label>
                    <div class="mt-4 flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                        <div class="w-full md:w-1/2">
                            <select id="item_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-1 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                                <option value="">Pilih Barang</option>
                                @foreach ($items as $item)
                                    <option value="{{ $item->id }}" data-name="{{ $item->name }}"
                                        data-spec="{{ $item->specification }}" data-stock="{{ $item->stock }}"
                                        data-jenis="{{ $item->jenis }}">
                                        {{ $item->name }} - {{ $item->specification }} (Stok: {{ $item->stock }}) -
                                        {{ $item->jenis }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="w-auto">

                            <button type="button" id="open_modal"
                                class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm pl-1 p-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 text-center inline-flex items-center">

                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M4.857 3A1.857 1.857 0 0 0 3 4.857v4.286C3 10.169 3.831 11 4.857 11h4.286A1.857 1.857 0 0 0 11 9.143V4.857A1.857 1.857 0 0 0 9.143 3H4.857Zm10 0A1.857 1.857 0 0 0 13 4.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 21 9.143V4.857A1.857 1.857 0 0 0 19.143 3h-4.286Zm-10 10A1.857 1.857 0 0 0 3 14.857v4.286C3 20.169 3.831 21 4.857 21h4.286A1.857 1.857 0 0 0 11 19.143v-4.286A1.857 1.857 0 0 0 9.143 13H4.857ZM18 14a1 1 0 1 0-2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 1 0 2 0v-2h2a1 1 0 1 0 0-2h-2v-2Z" clip-rule="evenodd"/>
                                  </svg>

                                &nbsp; Tambah Stock Baru
                            </button>
                            <button type="submit"
                                class="ml-2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm pl-1 p-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 text-center inline-flex items-center">

                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M5 3a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V7.414A2 2 0 0 0 20.414 6L18 3.586A2 2 0 0 0 16.586 3H5Zm3 11a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v6H8v-6Zm1-7V5h6v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
                                    <path fill-rule="evenodd" d="M14 17h-4v-2h4v2Z" clip-rule="evenodd"/>
                                </svg>
                                &nbsp; Simpan
                            </button>
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400" border="1"
                            id="items_table">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-4 py-3 text-center">Nama Barang</th>
                                    <th scope="col" class="px-4 py-3 text-center">Jenis Barang</th>
                                    <th scope="col" class="px-4 py-3 text-center">Jumlah</th>
                                    <th scope="col" class="px-4 py-3 text-center">Tanggal</th>
                                    <th scope="col" class="px-4 py-3 text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>

                    <div id="modal" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Tambah Barang Baru
                                    </h3>
                                    <button id="close_modal" type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5 space-y-4">
                                    <div>
                                        <label for="new_item_name"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                            Barang</label>
                                        <input type="text" id="new_item_name"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            placeholder="Masukkan nama barang baru">
                                    </div>
                                    <div>
                                        <label for="new_item_spec"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Spesifikasi
                                            Barang</label>
                                        <input type="text" id="new_item_spec"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                            placeholder="Masukkan spesifikasi barang">
                                    </div>
                                    <div>
                                        <label for="new_item_type"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                                            Barang</label>
                                        <select id="new_item_type"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:text-white">
                                            <option value="">Pilih Jenis</option>
                                            <option value="Asset">Asset</option>
                                            <option value="Stock">Stock</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="new_item_quantity"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah</label>
                                        <input type="number" id="new_item_quantity"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:text-white"
                                            value="1" min="1">
                                    </div>
                                    <div class="flex justify-end space-x-2">
                                        <button id="add_new_item" type="button"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Tambah
                                        </button>
                                        {{-- <button id="close_modal" type="button"
                                            class="text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:bg-gray-600 dark:hover:border-gray-600 dark:focus:ring-gray-600">
                                            Batal
                                        </button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
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

        // Untuk barang yang sudah ada
        document.getElementById("item_id").addEventListener("change", function() {
            let itemSelect = this;
            let selectedOption = itemSelect.options[itemSelect.selectedIndex];

            if (selectedOption.value === "") return;

            let tableBody = document.getElementById("items_table").getElementsByTagName('tbody')[0];

            // Cek apakah barang sudah ada di tabel (hindari duplikasi)
            if (document.querySelector(`#row-${selectedOption.value}`)) return;

            let newRow = tableBody.insertRow();
            newRow.setAttribute("id", `row-${selectedOption.value}`);
            newRow.innerHTML = `
                <td class="px-4 py-3 text-center">
                    ${selectedOption.getAttribute("data-name")} (${selectedOption.getAttribute("data-spec")})
                </td>
                <td class="px-4 py-3 text-center">
                    ${selectedOption.getAttribute("data-jenis")}
                </td>
                <td class="px-4 py-3 text-center">
                    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-1.5 px-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    type="number" name="items[${selectedOption.value}][quantity]" value="1" min="1" required>
                </td>
                <td class="px-4 py-3 text-center">
                    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-1.5 px-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    type="date" name="items[${selectedOption.value}][date]" value="${getCurrentDateUTC8()}" required>
                </td>
                <td class="px-4 py-3 text-center">
                    <button type="button" onclick="this.parentElement.parentElement.remove()" class="inline-flex items-center justify-center gap-1 px-2 py-1 text-white bg-red-600 hover:bg-red-700 rounded-lg text-xs font-medium transition whitespace-nowrap">
                        <svg class="w-[12px] h-[12px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                        </svg>
                        Hapus
                    </button>
                </td>
            `;
        });

        // Buka modal untuk tambah barang baru
        document.getElementById("open_modal").addEventListener("click", function() {
            document.getElementById("modal").style.display = "block";
        });

        // Tutup modal
        document.getElementById("close_modal").addEventListener("click", function() {
            document.getElementById("modal").style.display = "none";
        });

        // Tambah barang baru ke tabel, termasuk input hidden untuk nama, spesifikasi, dan jenis barang
        document.getElementById("add_new_item").addEventListener("click", function() {
            let name = document.getElementById("new_item_name").value;
            let spec = document.getElementById("new_item_spec").value;
            let jenis = document.getElementById("new_item_type").value;
            let quantity = document.getElementById("new_item_quantity").value;

            if (!name || !jenis || quantity <= 0) {
                alert("Harap isi semua kolom dengan benar!");
                return;
            }

            let tableBody = document.getElementById("items_table").getElementsByTagName('tbody')[0];
            let rowId = 'new-' + new Date().getTime();
            let newRow = tableBody.insertRow();
            newRow.setAttribute("id", rowId);

            newRow.innerHTML = `
                <td class="px-4 py-3 text-center">
                    ${name} (${spec})
                    <input type="hidden" name="new_items[${rowId}][name]" value="${name}">
                    <input type="hidden" name="new_items[${rowId}][specification]" value="${spec}">
                    <input type="hidden" name="new_items[${rowId}][jenis]" value="${jenis}">
                </td>
                <td class="px-4 py-3 text-center">
                    ${jenis}
                </td>
                <td class="px-4 py-3 text-center">
                    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-1.5 px-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    type="number" name="new_items[${rowId}][quantity]" value="${quantity}" min="1" required>
                </td>
                <td class="px-4 py-3 text-center">
                    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-1.5 px-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    type="date" name="new_items[${rowId}][date]" value="${getCurrentDateUTC8()}" required>
                </td>
                <td class="px-4 py-3 text-center">
                    <button type="button" onclick="this.parentElement.parentElement.remove()" class="inline-flex items-center justify-center gap-1 px-2 py-1 text-white bg-red-600 hover:bg-red-700 rounded-lg text-xs font-medium transition whitespace-nowrap">
                        <svg class="w-[12px] h-[12px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                        </svg>
                        Hapus
                    </button>
                </td>
            `;

            // Tutup modal dan reset input
            document.getElementById("modal").style.display = "none";
            document.getElementById("new_item_name").value = "";
            document.getElementById("new_item_spec").value = "";
            document.getElementById("new_item_type").value = "";
            document.getElementById("new_item_quantity").value = "1";
        });
    </script>
@endsection
