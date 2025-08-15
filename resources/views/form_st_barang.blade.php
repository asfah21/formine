@extends('layouts.app')

@section('title', 'Form Serah Terima Perangkat')

@section('content')

    <link type="text/css" rel="stylesheet" href="./my-css/my-sign-pad.css">
    <link type="text/css" rel="stylesheet" href="./my-css/azvan-ui.css">
    <!-- Tambahkan library Tom Select -->
    <link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.css" rel="stylesheet" />

    @php
        use Carbon\Carbon;
        $currentDate = Carbon::now('Asia/Singapore')->format('YYYY-MM-DD');
        $currentTime = Carbon::now('Asia/Singapore')->format('H:i');
    @endphp

    @php
        $fields_ku = [
            'kondisi_fisik',
            'komponen_lengkap',
            'fungsi_dasar',
            'sesuai_spek',
            'kartu_garansi',
            'lisensi_asli',
            'kode_akt',
            'dok_lengkap',
            'versi_terbaru',
            'kompatibel',
        ];
    @endphp

    <section class="min-h-screen bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16 !pt-28">
            <img class="azvan h-auto max-w-full rounded-lg" src="{{ asset('storage/images/CP.svg') }}"
                alt="image description">

            <div class="container mx-auto p-0">
                <form action="{{ route('form_st_perangkat') }}" method="POST" id="myForm">
                    @csrf
                    <div class="border-b-2 py-4 mb-7">
                        <div class="tracking-wide text-xs font-bold text-gray-500 dark:text-white mb-1 leading-tight">
                            Bagian: 1 dari 3</div>
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                            <div class="flex-1">
                                <div>
                                    <div class="text-lg font-bold text-gray-700 leading-tight dark:text-white">Informasi
                                        Perangkat</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step Content -->
                    <div class="grid gap-4 sm:gap-5 sm:grid-cols-2">

                        <div class="sm:col-span-2">
                            <label for="id_assets" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Asset</label>
                            <div class="relative flex items-center">
                                <select id="assetSelect" name="id_assets"
                                    class="bg-gray-50 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-0"
                                    required>
                                    <option value="">Silakan Pilih Asset</option>
                                    @foreach ($assets_ku as $asset)
                                        <option value="{{ $asset->asset_id }}">
                                            {{ $asset->asset_id }} - {{ $asset->device_type }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Hidden input untuk menyimpan ID terpilih -->
                        <input type="hidden" name="selected_ids" id="selected_ids">

                        <div class="sm:col-span-1">
                            <div class="bg-white dark:bg-gray-800 shadow">
                                <table class="w-full text-sm text-gray-900 dark:text-white" id="selected_items_table" style="display: none;">
                                    <thead>
                                        <tr class="bg-gray-200 dark:bg-gray-700">
                                            <th class="px-1 py-2 border">Nama Barang/Dokumen</th>
                                            <th class="px-1 py-2 border">Total</th>
                                            <th class="px-1 py-2 border">Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700" id="selected_items_body">
                                        <!-- Item akan ditambahkan di sini melalui JavaScript -->
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                new TomSelect("#assetSelect", {
                                    create: false,
                                    sortField: {
                                        field: "text",
                                        direction: "asc"
                                    }
                                });
                            });

                            document.getElementById('assetSelect').addEventListener('change', function() {
                                const select = this;
                                const selectedId = select.value;
                                const selectedText = select.options[select.selectedIndex].text;

                                if (selectedId) {
                                    addItemToTable(selectedId, selectedText);
                                    updateHiddenInput();
                                    select.value = ''; // Reset select setelah dipilih
                                }
                            });

                            function addItemToTable(id, name) {
                                // Cek duplikat
                                if (document.querySelector(`#selected_items_body tr[data-id="${id}"]`)) {
                                    alert('Item sudah ditambahkan');
                                    return;
                                }

                                const tableBody = document.getElementById('selected_items_body');
                                const table = document.getElementById('selected_items_table');

                                // Buat row baru
                                const newRow = document.createElement('tr');
                                newRow.setAttribute('data-id', id);
                                newRow.innerHTML = `
                                    <td class="border p-0 text-center">${id}</td>
                                    <td class="border p-0 text-center">${name.split('-')[1]}</td>
                                    <td class="border p-0 text-center">
                                        <button type="button" class="bg-red-500 text-white px-2 py-1 rounded" onclick="removeItem('${id}')">&#10006;</button>
                                    </td>
                                `;

                                tableBody.appendChild(newRow);
                                table.style.display = 'table'; // Tampilkan tabel jika hidden
                            }

                            function removeItem(id) {
                                const row = document.querySelector(`#selected_items_body tr[data-id="${id}"]`);
                                if (row) {
                                    row.remove();
                                    updateHiddenInput();
                                }

                                // Sembunyikan tabel jika kosong
                                const tableBody = document.getElementById('selected_items_body');
                                if (tableBody.children.length === 0) {
                                    document.getElementById('selected_items_table').style.display = 'none';
                                }
                            }

                            function updateHiddenInput() {
                                const ids = [];
                                document.querySelectorAll('#selected_items_body tr[data-id]').forEach(row => {
                                    ids.push(row.getAttribute('data-id'));
                                });
                                document.getElementById('selected_ids').value = ids.join(',');
                            }
                        </script>


                        <div class="relative max-w-sm hidden">
                            <label for="tgl_penyerahan"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal <i
                                    class="text-xs font-light">(terisi otomatis)</i></label>
                            <div class="absolute inset-y-12 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <input name="tgl_penyerahan" id="tgl_penyerahan"
                                value="{{ \Carbon\Carbon::now('Asia/Singapore')->format('YYYY-MM-DD') }}" datepicker
                                datepicker-format="yyyy-mm-dd" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Pilih tanggal">
                        </div>

                        <div class="relative max-w-sm hidden">
                            <!-- for="time" itu harus sama dengan id="time" dan name"time" -->
                            <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam
                                <i class="text-xs font-light">(terisi otomatis)</i></label>
                            <div class="absolute inset-y-0 end-0 top-7 flex items-center pe-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input value="{{ $currentTime }}" type="time" id="time" name="time"
                                class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                        </div>

                        <div>
                            <label for="detail_perangkat"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Detail
                                Perangkat</label>
                            <div class="relative flex items-center">
                                <select id="detail_perangkat" name="detail_perangkat"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    required>
                                    <option value="">Pilih detail</option>
                                    <option value="Perangkat Keras (Hardware)">Perangkat Keras (Hardware)</option>
                                    <option value="Perangkat Lunak (Software)">Perangkat Lunak (Software)</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="kondisi_perangkat"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kondisi
                                Perangkat</label>
                            <div class="relative flex items-center">
                                <select id="kondisi_perangkat" name="kondisi_perangkat"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    required>
                                    <option value="">Pilih kondisi</option>
                                    <option value="Baru">Baru</option>
                                    <option value="Bekas">Bekas</option>
                                    <option value="Rusak">Rusak</option>
                                </select>
                            </div>
                        </div>

                        <div class="border-b-2 py-3 sm:col-span-2">
                            <div class="tracking-wide text-xs font-bold text-gray-500 dark:text-white mb-1 leading-tight">
                                Bagian: 2 dari 3</div>
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                                <div class="flex-1">
                                    <div>
                                        <div class="text-lg font-bold text-gray-700 leading-tight dark:text-white">Detail
                                            Pengecekan</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col gap-4">
                            <div class="form-group">
                                <label for="exmp"
                                    class="block text-sm font-medium text-gray-900 dark:text-white text-center"></label>
                                <div class="p-2 border rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                                    <div class="flex items-center gap-8 justify-center"> <!-- Added justify-center -->
                                        <!-- Checkbox Style for Baik -->
                                        <label class="flex items-center gap-2 cursor-pointer">
                                            <input type="radio" name="exmp" id="exmp" value="Baik"
                                                class="hidden peer" checked />
                                            <div
                                                class="w-6 h-6 border-2 border-green-600 bg-green-600 rounded-md flex items-center justify-center">
                                                <!-- Checklist Icon -->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="w-3 h-3 fill-gray-900 dark:fill-white" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <span class="text-sm text-gray-900 dark:text-white">Ya</span>
                                        </label>

                                        <!-- Checkbox Style for Rusak -->
                                        <label class="flex items-center gap-2 cursor-pointer">
                                            <input type="radio" name="exmp" id="exmp2" value="Rusak"
                                                class="hidden peer" />
                                            <div
                                                class="w-6 h-6 border-2 border-red-600 bg-red-600 rounded-md flex items-center justify-center">
                                                <!-- X Icon -->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="w-3 h-3 fill-gray-900 dark:fill-white" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M6.293 6.293a1 1 0 011.414 0L10 8.586l2.293-2.293a1 1 0 011.414 1.414L11.414 10l2.293 2.293a1 1 0 01-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 01-1.414-1.414L8.586 10 6.293 7.707a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <span class="text-sm text-gray-900 dark:text-white">Tidak</span>
                                        </label>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border-b-2 mb-2 sm:col-span-2">
                            {{-- <h2 for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Periksa keliling atas bawah kendaraan</h2> --}}
                        </div>

                        @php
                            $counter = 1;
                        @endphp

                        @foreach ($fields_ku as $fielda)
                            <div class="flex flex-col gap-4">
                                <div class="form-group">
                                    <div class="p-2 border rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                                        <div class="flex items-center gap-4">
                                            <!-- Bagian Label "" -->
                                            <div class="flex-2">
                                                <span class="text-sm font-medium text-gray-900 dark:text-white">
                                                    <b>{{ sprintf('%02d', $counter) }}. {{ $my_label[$fielda] ?? ucfirst(str_replace('_', ' ', $fielda)) }}</b></span>

                                            </div>

                                            <!-- Bagian Input Radio -->
                                            <div class="flex-1 flex items-center justify-end gap-1.5 h-full">
                                                <!-- Checkbox Style for Baik -->
                                                <label class="flex items-center cursor-pointer">
                                                    <input type="radio" name="{{ $fielda }}" value="Baik"
                                                        class="hidden peer" checked />
                                                    <div
                                                        class="w-6 h-6 border-2 border-gray-300 peer-checked:border-green-600 peer-checked:bg-green-600 rounded-md flex items-center justify-center">
                                                        <!-- Checklist Icon -->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-3 h-3 fill-gray-900 dark:fill-white"
                                                            viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </div>
                                                    <span
                                                        class="flex items-center justify-center text-sm text-gray-900 dark:text-white"></span>
                                                </label>

                                                <!-- Checkbox Style for Rusak -->
                                                <label class="flex items-center cursor-pointer">
                                                    <input type="radio" name="{{ $fielda }}" value="Rusak"
                                                        class="hidden peer" />
                                                    <div
                                                        class="w-6 h-6 border-2 border-gray-300 peer-checked:border-red-600 peer-checked:bg-red-600 rounded-md flex items-center justify-center">
                                                        <!-- X Icon -->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-3 h-3 fill-gray-900 dark:fill-white"
                                                            viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                d="M6.293 6.293a1 1 0 011.414 0L10 8.586l2.293-2.293a1 1 0 011.414 1.414L11.414 10l2.293 2.293a1 1 0 01-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 01-1.414-1.414L8.586 10 6.293 7.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </div>
                                                    <span
                                                        class="flex items-center justify-center text-sm text-gray-900 dark:text-white"></span>
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            @php
                                $counter++;
                            @endphp
                        @endforeach

                        <div class="sm:col-span-2">
                            <label for="software_terinstall"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Software yang terinstall</label>
                            <div class="relative flex items-center">
                                <input type="text" name="software_terinstall" id="software_terinstall"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Tuliskan software yang terinstall..." required />
                            </div>
                        </div>

                        <div class="border-b-2 py-4 sm:col-span-2">
                            <div class="tracking-wide text-xs font-bold text-gray-500 dark:text-white mb-1 leading-tight">
                                Bagian: 3 dari 3</div>
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                                <div class="flex-1">
                                    <div>
                                        <div class="text-lg font-bold text-gray-700 leading-tight dark:text-white">
                                            Keterangan & Tanda Tangan</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="keterangan"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                            <textarea id="keterangan" name="keterangan" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Keterangan tambahan..."></textarea>
                        </div>

                        <!-- Tanda Tangan -->
                        <div class="sm:col-span-2">
                            <h3 class="mt-1 mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanda Tangan</h3>
                            <div
                                class="sm:col-span-2 flex flex-col items-center justify-center w-full p-4 bg-white border border-gray-300 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-600">
                                <div class="mb-3 text-center text-sm text-gray-500 dark:text-gray-400">
                                    <p>Draw your signature below</p>
                                </div>
                                <div
                                    class="sign_ku border border-gray-300 rounded-lg bg-white dark:bg-gray-700 dark:border-gray-600 p-4">
                                    <canvas id="signature-pad"
                                        class="w-full h-[240px] max-w-[700px] rounded-lg shadow-inner"></canvas>
                                </div>

                                <div class="center mt-4">
                                    <button id="clear-button" type="button"
                                        class="px-2 py-1 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-800">
                                        Hapus Tanda Tangan
                                    </button>
                                </div>
                            </div>

                            <!-- Input Tersembunyi untuk Data Tanda Tangan -->
                            <input type="hidden" name="signature_data" id="signature-data" required>

                            <div class="flex justify-center items-center">
                                <button type="submit" class="mt-5 mb-20 w-32 px-5 py-2 bg-blue-500 text-white rounded-lg"
                                    id="submitButton">Kirim</button>
                            </div>

                            <!-- Overlay -->
                            <div id="overlay" class="hideku fixed inset-0 bg-black bg-opacity-50 z-50"></div>
                        </div>
                </form>

                <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.js"></script>
                <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        const canvas = document.getElementById('signature-pad');
                        const signaturePad = new SignaturePad(canvas, {
                            backgroundColor: 'rgba(255, 255, 255, 1)',
                            penColor: 'rgb(0, 0, 0)'
                        });

                        const clearButton = document.getElementById('clear-button');
                        clearButton.addEventListener('click', () => {
                            signaturePad.clear();
                        });

                        const submitButton = document.querySelector('button[type="submit"]');
                        submitButton.addEventListener('click', (event) => {
                            if (signaturePad.isEmpty()) {
                                alert('Lengkapi form & tanda tangan terlebih dahulu');
                                event.preventDefault();
                                return;
                            }

                            const signatureDataURL = signaturePad.toDataURL();
                            const signatureInput = document.getElementById('signature-data');
                            signatureInput.value = signatureDataURL;
                        });

                        const resizeCanvas = () => {
                            const ratio = Math.max(window.devicePixelRatio || 1, 1);
                            canvas.width = canvas.offsetWidth * ratio;
                            canvas.height = canvas.offsetHeight * ratio;
                            canvas.getContext('2d').scale(ratio, ratio);
                            signaturePad.clear();
                        };

                        window.addEventListener('resize', resizeCanvas);
                        resizeCanvas();
                    });
                </script>

                <!-- Bubble Chat -->
                <div id="chatBubble"
                    style="position: fixed; bottom: 65px; right: 12px; z-index: 9999; display: flex; flex-direction: column; align-items: center;">
                    <a href="{{ url('./hasil-form-it') }}" id="chatButton" class="chat-bubble-btn">
                        <!-- Chat Bubble Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="-5 -5 34 34" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                        </svg>
                    </a>
                    <div class="chat-bubble-text text-gray-900 dark:text-white">
                        Hasil P2H
                    </div>
                </div>

                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        // Create a new chat bubble button
                        const chatButton = document.getElementById('chatButton');

                        // Set up event listener for the chat button
                        chatButton.addEventListener('click', function() {
                            window.location.href = './hasil-cp'; // Navigate to the URL
                        });
                    });
                </script>

                <!-- Sweet Alert Submit -->
                <script>
                    document.getElementById('myForm').addEventListener('submit', function(event) {
                        event.preventDefault(); // Prevent default form submission

                        const form = this;
                        const formData = new FormData(form);
                        const submitButton = form.querySelector('button[type="submit"]');

                        document.getElementById('overlay').classList.remove('hideku');
                        document.getElementById('overlay').classList.add('visible');

                        // Disable the submit button and show loading text
                        submitButton.disabled = true;
                        submitButton.innerHTML =
                            'Loading... <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>';

                        fetch(form.action, {
                                method: form.method,
                                body: formData,
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                                }
                            })
                            .then(response => {
                                if (!response.ok) {
                                    throw new Error('Terjadi error pada respons jaringan');
                                }
                                return response.json(); // Assuming the server returns JSON
                            })
                            .then(data => {
                                Swal.fire({
                                    title: 'Success!',
                                    text: 'Formulir Anda telah berhasil dikirimkan.',
                                    icon: 'success',
                                    confirmButtonText: 'OK',
                                    showCancelButton: false,
                                    cancelButtonText: 'Lihat Hasil',
                                    cancelButtonColor: '#3085d6',
                                }).then(result => {
                                    if (result.dismiss === Swal.DismissReason.cancel) {
                                        // Redirect to the specified URL when 'Lihat Hasil' is clicked
                                        window.location.href = './hasil-cp';
                                    } else {
                                        // Reload the page when 'OK' is clicked or modal is dismissed
                                        window.scrollTo({
                                            top: 0,
                                            behavior: 'smooth'
                                        });
                                        location.reload();
                                    }
                                }).catch(() => {
                                    // Reload the page if modal is closed without any action
                                    window.scrollTo({
                                        top: 0,
                                        behavior: 'smooth'
                                    });
                                    location.reload();
                                });
                            })
                            .catch(error => {
                                Swal.fire({
                                    title: 'Error!',
                                    text: 'Terjadi kesalahan dalam mengirimkan formulir.',
                                    icon: 'error',
                                    confirmButtonText: 'OK'
                                });
                            })
                            .finally(() => {
                                // Sembunyikan overlay setelah SweetAlert muncul
                                document.getElementById('overlay').classList.remove('visible');
                                document.getElementById('overlay').classList.add('hideku');
                                // Re-enable the submit button and reset its text
                                submitButton.disabled = false;
                                submitButton.innerHTML = 'Submit';
                            });
                    });
                </script>

                <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>

                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


            </div>
        </div>
    </section>
@endsection
