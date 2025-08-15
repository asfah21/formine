@extends('layouts.app')

@section('title', 'Form Excavator')

@section('content')

    <link type="text/css" rel="stylesheet" href="./my-css/my-sign-pad.css">
    <link type="text/css" rel="stylesheet" href="./my-css/azvan-ui.css">

    @php
    $modalSetting = \App\Models\ModalSetting::first();
    @endphp

    @if($modalSetting && $modalSetting->is_active)
        <!-- HTML -->
    <div class="mining-modal" id="miningModal">
    <div class="mining-modal-content">
        <div class="mining-modal-header">
        <img src="https://picsum.photos/seed/picsum/200/300" alt="Mining Operation" class="mining-modal-bg">
        <div class="mining-modal-header-content">
            <p>PT. Gunung Samudera Internasional</p>
	        <p>{{ $modalSetting->message }}</p>
        </div>
        <button class="mining-modal-close" onclick="closeMiningModal()">&times;</button>
        </div>

        <div class="mining-modal-body">
        <div class="mining-stats">
            <div class="stat-item">
            <i class="fas fa-hard-hat"></i>
            <div>
                <h3>5000+</h3>
                <p>Pekerja Terlatih</p>
            </div>
            </div>
            <div class="stat-item">
            <i class="fas fa-shield-alt"></i>
            <div>
                <h3>2JT+</h3>
                <p>Jam Kerja Aman</p>
            </div>
            </div>
        </div>

        <div class="mining-alert">
            <i class="fas fa-exclamation-triangle"></i>
            <p>Penting: Selalu patuhi protokol keselamatan di area tambang</p>
        </div>
        </div>

        <div class="mining-modal-footer">
        <button class="mining-btn primary" onclick="closeMiningModal()">Mengerti</button>
        <button class="mining-btn secondary">Selengkapnya</button>
        </div>
    </div>
    </div>

    <!-- CSS -->
    <style>
    .mining-modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.8);
    z-index: 9999;
    font-family: 'Arial', sans-serif;
    }

    .mining-modal-content {
    position: relative;
    background: #1a1a1a;
    margin: 7% auto;
    width: 80%;
    max-width: 600px;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0,0,0,0.5);
    }

    .mining-modal-header {
    position: relative;
    color: white;
    }

    .mining-modal-bg {
    width: 100%;
    height: 200px;
    object-fit: cover;
    filter: brightness(0.7);
    }

    .mining-modal-header-content {
    position: absolute;
    bottom: 20px;
    left: 20px;
    }

    .mining-modal-header h2 {
    margin: 0;
    font-size: 1.8em;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
    }

    .mining-modal-header p {
    margin: 5px 0 0;
    font-size: 1.1em;
    }

    .mining-modal-close {
    position: absolute;
    top: 15px;
    right: 15px;
    background: none;
    border: none;
    color: white;
    font-size: 2em;
    cursor: pointer;
    transition: 0.3s;
    }

    .mining-modal-close:hover {
    color: #ff4444;
    }

    .mining-modal-body {
    padding: 20px;
    background: #2a2a2a;
    color: #fff;
    }

    .mining-stats {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    margin-bottom: 20px;
    }

    .stat-item {
    display: flex;
    align-items: center;
    background: #333;
    padding: 15px;
    border-radius: 8px;
    }

    .stat-item i {
    font-size: 2em;
    margin-right: 15px;
    color: #4CAF50;
    }

    .mining-alert {
    background: #ff4444;
    padding: 15px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    }

    .mining-alert i {
    font-size: 1.5em;
    margin-right: 10px;
    }

    .mining-modal-footer {
    padding: 15px 20px;
    background: #222;
    display: flex;
    justify-content: flex-end;
    gap: 10px;
    }

    .mining-btn {
    padding: 10px 25px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    transition: 0.3s;
    }

    .mining-btn.primary {
    background: #4CAF50;
    color: white;
    }

    .mining-btn.secondary {
    background: #333;
    color: white;
    }

    .mining-btn:hover {
    opacity: 0.9;
    transform: translateY(-1px);
    }

    @keyframes modalEntry {
    from { transform: translateY(-50px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
    }
    </style>

    <!-- JavaScript -->
    <script>
    // Tampilkan modal saat halaman dimuat
    window.addEventListener('load', () => {
    const modal = document.getElementById('miningModal');
    modal.style.display = 'block';
    modal.style.animation = 'modalEntry 0.5s ease-out';
    });

    function closeMiningModal() {
    document.getElementById('miningModal').style.display = 'none';
    }

    // Tutup modal ketika klik di luar
    window.onclick = function(event) {
    const modal = document.getElementById('miningModal');
    if (event.target == modal) {
        closeMiningModal();
    }
    }
    </script>
    @endif

    @php
        use Carbon\Carbon;
        $currentDate = Carbon::now('Asia/Singapore')->format('YYYY-MM-DD');
        $currentTime = Carbon::now('Asia/Singapore')->format('H:i');
    @endphp

    @php
        $fields = [
            'ban_blk',
            'drum',
            'tangga',
            'lampu_mk_blk',
            'selang_pipa_hidro',
            'tangki_hidro',
            'battery_aki',
            'ruang_mesin',
            'saringan_udara',
            'kabin_opr',
            'jendela_pintu',
            'wiper',
            'kaca_spion',
            'handle_control',
            'level_oli_mesin',
            'level_oli_hidro',
            'level_air_radiator',

            'pemadam_api',
            'seat_belt',
            'tricon',

            'kebersihan',

            'level_oli_mesin2',
            'level_oli_trans',
            'level_oli_hidro2',
            'level_bahan_bakar',
            'seats',
            'ac',
            'kemudi_stir',
            'pedal_rem',
            'pedal_gas',
            'gas_tangan',
            'tuas_gigi_trans',
            'tuas_maju_mdr',
            'tuas_rem_parkir',
            'klakson',
            'lampu_mk_blk2',
            'lampu_kabin',
            'ems_cms',
            'gauge',
            'radio',
            'monitor',
            'mic',
            'kabel_mic',

            'kebocoran_oli',
            'kebocoran_air',

            'suara_mesin',
            'suara_trans',

            'stir_kemudi2',
            'rem_kaki',
            'rem_parkir',
            'gigi_pers',
            'klakson_mdr',
            'lampu_peringatan',
            'ems_cms2',
            'sistem_hidro',
            'gauge2',
            'strobe',
        ];
    @endphp

    <section class="min-h-screen bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16 !pt-28">
            <img class="azvan h-auto max-w-full rounded-lg" src="{{ asset('storage/images/CP.svg') }}" alt="image description">

            <div class="container mx-auto p-0">

                {{-- Start Pop Up --}}

                <!-- Modal toggle (hidden) -->
                <button id="trigger-modal-btn" data-modal-target="progress-modal" data-modal-toggle="progress-modal"
                    class="hidden block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">Toggle modal
                </button>

                <!-- Main modal -->
                <div id="progress-modal" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">

                        <!-- BACKDROP (overlay bg) -->
                        <div class="fixed inset-0 bg-gray-900 bg-opacity-30 dark:bg-opacity-30"></div>

                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                            <button type="button"
                                class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="progress-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="p-4 md:p-5">
                                <div class="grid grid-cols-2 gap-2 items-center">
                                    <svg class="w-10 h-10 text-gray-400 dark:text-gray-500 mb-4" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                                        <path
                                            d="M8 5.625c4.418 0 8-1.063 8-2.375S12.418.875 8 .875 0 1.938 0 3.25s3.582 2.375 8 2.375Zm0 13.5c4.963 0 8-1.538 8-2.375v-4.019c-.052.029-.112.054-.165.082a8.08 8.08 0 0 1-.745.353c-.193.081-.394.158-.6.231l-.189.067c-2.04.628-4.165.936-6.3.911a20.601 20.601 0 0 1-6.3-.911l-.189-.067a10.719 10.719 0 0 1-.852-.34 8.08 8.08 0 0 1-.493-.244c-.053-.028-.113-.053-.165-.082v4.019C0 17.587 3.037 19.125 8 19.125Zm7.09-12.709c-.193.081-.394.158-.6.231l-.189.067a20.6 20.6 0 0 1-6.3.911 20.6 20.6 0 0 1-6.3-.911l-.189-.067a10.719 10.719 0 0 1-.852-.34 8.08 8.08 0 0 1-.493-.244C.112 6.035.052 6.01 0 5.981V10c0 .837 3.037 2.375 8 2.375s8-1.538 8-2.375V5.981c-.052.029-.112.054-.165.082a8.08 8.08 0 0 1-.745.353Z" />
                                    </svg>

                                </div>
                                <h3 class="mb-1 text-xl font-bold text-gray-900 dark:text-white">Udah baca SOP/IK belum?
                                </h3>
                                <p class="text-gray-500 dark:text-gray-400 mb-6">Biar makin aman dalam bekerja, baca dulu
                                    SOP/IK sebelum mengoperasikan kendaraan ya!
                                <p>
                                <div class="flex justify-between mb-1 text-gray-500 dark:text-gray-400">
                                    <span class="text-xs italic text-gray-900 dark:text-white font-normal">Keselamatan kerja
                                        itu tanggung jawab bersama, guys!</span>
                                    <span class="text-xs font-semibold text-gray-900 dark:text-white"></span>
                                </div>
                                {{-- <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-600">
                                <div class="bg-orange-500 h-2.5 rounded-full" style="width: 100%"></div>
                            </div> --}}
                                <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-600 overflow-hidden">
                                    <div class="h-2.5 rounded-full"
                                        style="
                                    width: 100%;
                                    background-image: repeating-linear-gradient(
                                      45deg,
                                      #facc15,  /* kuning */
                                      #facc15 10px,
                                      #000000 10px,
                                      #000000 20px
                                    );
                                  ">
                                    </div>
                                </div>

                                <!-- Modal footer -->
                                <div class="flex items-center mt-6 space-x-4 rtl:space-x-reverse">
                                    <a href="./hse-sop" target="_blank">
                                        <button data-modal-hide="progress-modal" type="button"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Oke,
                                            Mau dong!</button>
                                    </a>
                                    <button data-modal-hide="progress-modal" type="button"
                                        class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Nggak</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    window.addEventListener('DOMContentLoaded', () => {
                        setTimeout(() => {
                            const triggerBtn = document.getElementById('trigger-modal-btn');
                            if (triggerBtn) {
                                triggerBtn.click();
                            }
                        }, 123); // delay 100ms untuk memastikan Flowbite sudah terinisialisasi
                    });
                </script>

                {{-- End Pop Up --}}

                <form action="{{ route('form-cp') }}" method="POST" id="myForm">
                    @csrf
                    <div class="border-b-2 py-4 mb-7">
                        <div class="tracking-wide text-xs font-bold text-gray-500 dark:text-white mb-1 leading-tight">
                            Bagian: 1 dari 3</div>
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                            <div class="flex-1">
                                <div>
                                    <div class="text-lg font-bold text-gray-700 leading-tight dark:text-white">Input
                                        Data Awal</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step Content -->
                    <div class="grid gap-4 sm:gap-5 sm:grid-cols-2">

                        {{-- <div class="sm:col-span-2">
                            <label for="nama_driver"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
                            <div class="relative flex items-center">
                                <input type="text" name="nama_driver" id="nama_driver"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Tuliskan nama anda" required />
                            </div>
                        </div> --}}

                        <div class="sm:col-span-2">
                            <div x-data="dropdown_name()" x-init="init()" class="relative">
                                <label for="nama_driver" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
                                <div class="relative flex items-center">
                                    <button
                                        @click="toggle"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white flex items-center justify-start"
                                        type="button"
                                        :disabled="isLoading"
                                    >
                                        <span class="text-left dark:text-gray-100" x-text="pilihText || 'Pilih Nama Anda'"></span>
                                        <template x-if="isLoading">
                                            <svg class="animate-spin ml-2 h-4 w-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                            </svg>
                                        </template>
                                        <svg x-show="!isLoading" class="w-4 h-4 ml-auto text-gray-700 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </button>
                                    <div
                                        id="tooltip-nama_driver"
                                        class="absolute right-3 invisible flex items-center px-3 py-1.5 text-xs font-medium text-white bg-red-600 rounded shadow-md"
                                        >
                                        ⚠️ Pilih Nama!
                                    </div>
                                </div>

                                <div
                                    x-show="isOpen"
                                    @click.away="close"
                                    class="absolute z-10 w-full mt-1 bg-white border border-gray-300 rounded-lg shadow-md dark:bg-gray-700 dark:border-gray-600"
                                >
                                    <input
                                        type="text"
                                        placeholder="Cari Nama Anda..."
                                        x-model="search"
                                        class="w-full px-4 py-2 text-sm border-b border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-700 dark:text-white"
                                        :disabled="isLoading"
                                    />
                                    <ul class="max-h-48 overflow-auto">
                                        <template x-if="isLoading">
                                            <li class="px-4 py-2 text-sm text-gray-500 dark:text-gray-400">Memuat data...</li>
                                        </template>

                                        <template x-if="!isLoading && error">
                                            <li class="px-4 py-2 text-sm text-red-500 dark:text-red-400">Gagal memuat data!</li>
                                        </template>

                                        <template x-for="driver in filteredDrivers" :key="driver">
                                            <li>
                                                <button
                                                    @click="select(driver)"
                                                    class="block w-full text-left px-4 py-2 text-sm hover:bg-primary-500 hover:text-white dark:hover:bg-primary-600 dark:text-white dark:hover:text-gray-100"
                                                    type="button"
                                                >
                                                    <span class="text-gray-900 dark:text-white" x-text="driver"></span>
                                                </button>
                                            </li>
                                        </template>
                                    </ul>
                                </div>

                                <input type="hidden" id="nama_driver" name="nama_driver" x-model="pilihValue" />
                            </div>
                        </div>

                        <div>
                            <label for="departemen"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Departemen</label>
                            <div class="relative flex items-center">
                                <select id="departemen" name="departemen" required
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option value="">Pilih Departement</option>
                                    <option value="HSEQT">HSEQT</option>
                                    <option value="OPERATION">OPERATION</option>
                                    <option value="HRGA-IT">HRGA-IT</option>
                                    <option value="EDP">EDP</option>
                                    <option value="PAM">PAM</option>
                                    <option value="SCM">SCM</option>
                                    <option value="FAT">FAT</option>
                                </select>
                            </div>
                        </div>

                        <!--Ujung-ujung nya tetap pakai alpine.js-->
                        <div x-data="dropdown()" class="relative">
                            <label for="no_unit" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Unit</label>
                            <div class="relative flex items-center">
                                <button
                                    @click="toggle"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white flex items-center justify-start"
                                    type="button"
                                    >
                                    <span class="text-left dark:text-gray-100" x-text="selectedText || 'Pilih Unit'"></span>
                                    <svg
                                        class="w-4 h-4 ml-auto text-gray-700 dark:text-gray-200"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div
                                    id="tooltip-no_unit"
                                    class="absolute right-3 invisible flex items-center px-3 py-1.5 text-xs font-medium text-white bg-red-600 rounded shadow-md"
                                >
                                    ⚠️ Pilih unit!
                                </div>
                            </div>

                            <div
                                x-show="isOpen"
                                @click.away="close"
                                class="absolute z-10 w-full mt-1 bg-white border border-gray-300 rounded-lg shadow-md dark:bg-gray-700 dark:border-gray-600"
                            >
                                <input
                                    type="text"
                                    placeholder="Cari Unit..."
                                    x-model="search"
                                    class="w-full px-4 py-2 text-sm border-b border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-700 dark:text-white"
                                />
                                <ul class="max-h-48 overflow-auto">
                                    <template x-for="unit in filteredUnits" :key="unit">
                                        <li>
                                            <button
                                                @click="select(unit)"
                                                class="block w-full text-left px-4 py-2 text-sm hover:bg-primary-500 hover:text-white dark:hover:bg-primary-600 dark:text-white dark:hover:text-gray-100"
                                                type="button"
                                            >
                                                <span class="text-gray-900 dark:text-white" x-text="unit"></span>
                                            </button>
                                        </li>
                                    </template>
                                </ul>
                            </div>

                            <input type="hidden" id="no_unit" name="no_unit" x-model="selectedValue" />
                        </div>

                        <div class="relative max-w-sm hidden">
                            <label for="date"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal <i
                                    class="text-xs font-light">(terisi otomatis)</i></label>
                            <div class="absolute inset-y-12 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <input name="date" id="date"
                                value="{{ \Carbon\Carbon::now('Asia/Singapore')->format('YYYY-MM-DD') }}" datepicker
                                datepicker-format="yyyy-mm-dd" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Pilih tanggal">
                        </div>

                        <div class="relative max-w-sm hidden" >
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
                            <label for="shift"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Shift</label>
                            <div class="relative flex items-center">
                                <select id="shift" name="shift"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    required>
                                    <option value="">Pilih shift</option>
                                    <option value="Siang">Siang</option>
                                    <option value="Malam">Malam</option>
                                </select>
                            </div>
                        </div>

                        <div class="w-full">
                            <label for="start_hm"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start HM
                                    <i class="text-xs font-light">(contoh: 2304.5)</i></label>
                            <div class="relative flex items-center">
                                <input type="number" name="start_hm" id="start_hm" step="0.1"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="KM Awal" required>
                            </div>
                        </div>

                        <div class="border-b-2 py-3 sm:col-span-2">
                            <div class="tracking-wide text-xs font-bold text-gray-500 dark:text-white mb-1 leading-tight">
                                Bagian: 2 dari 3</div>
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                                <div class="flex-1">
                                    <div>
                                        <div class="text-lg font-bold text-gray-700 leading-tight dark:text-white">Checklist
                                            Kesesuaian Unit </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col gap-4">
                            <div class="form-group">
                              <label for="exmp" class="block text-sm font-medium text-gray-900 dark:text-white text-center"></label>
                              <div class="p-2 border rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                                <div class="flex items-center gap-4 justify-center"> <!-- Added justify-center -->
                                  <!-- Checkbox Style for Baik -->
                                  <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="radio" name="exmp" id="exmp" value="Baik" class="hidden peer" checked />
                                    <div class="w-6 h-6 border-2 border-green-600 bg-green-600 rounded-md flex items-center justify-center">
                                      <!-- Checklist Icon -->
                                      <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 fill-gray-900 dark:fill-white" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 00-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" clip-rule="evenodd"/>
                                      </svg>
                                    </div>
                                    <span class="text-sm text-gray-900 dark:text-white">Baik</span>
                                  </label>

                                  <!-- Checkbox Style for Rusak -->
                                  <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="radio" name="exmp" id="exmp2" value="Rusak" class="hidden peer" />
                                    <div class="w-6 h-6 border-2 border-red-600 bg-red-600 rounded-md flex items-center justify-center">
                                      <!-- X Icon -->
                                      <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 fill-gray-900 dark:fill-white" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M6.293 6.293a1 1 0 011.414 0L10 8.586l2.293-2.293a1 1 0 011.414 1.414L11.414 10l2.293 2.293a1 1 0 01-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 01-1.414-1.414L8.586 10 6.293 7.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                      </svg>
                                    </div>
                                    <span class="text-sm text-gray-900 dark:text-white">Rusak</span>
                                  </label>

                                  <!-- Checkbox Style for Tidak Ada -->
                                  <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="radio" name="exmp" id="exmp3" value="Tidak Ada" class="hidden peer" />
                                    <div class="w-6 h-6 border-2 border-gray-600 bg-gray-600 rounded-md flex items-center justify-center">
                                      <!-- Dash Icon -->
                                      <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 fill-gray-900 dark:fill-white" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M4 10a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1z" />
                                      </svg>
                                    </div>
                                    <span class="text-sm text-gray-900 dark:text-white">Tidak Ada</span>
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

                        @foreach ($fields as $field)
                            <div class="flex flex-col gap-4">
                                <div class="form-group">
                                    <div class="p-2 border rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                                        <div class="flex items-center gap-4">
                                            <!-- Bagian Label "" -->
                                            <div class="flex-2">

                                                <span
                                                    class="text-sm font-medium text-gray-900 dark:text-white">
                                                    <b>{{ sprintf('%02d', $counter) }}. {{ $fieldLabels[$field] ?? ucfirst(str_replace('_', ' ', $field)) }}</b></span>
                                            </div>

                                            <!-- Bagian Input Radio -->
                                            <div class="flex-1 flex items-center justify-end gap-1.5 h-full">
                                                <!-- Checkbox Style for Baik -->
                                                <label class="flex items-center cursor-pointer">
                                                    <input type="radio" name="{{ $field }}" value="Baik"
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
                                                    <input type="radio" name="{{ $field }}" value="Rusak"
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

                                                <!-- Checkbox Style for Tidak Ada -->
                                                <label class="flex items-center gap-1 cursor-pointer">
                                                    <input type="radio" name="{{ $field }}" value="Tidak Ada"
                                                        class="hidden peer" />
                                                    <div
                                                        class="w-6 h-6 border-2 border-gray-300 peer-checked:border-gray-600 peer-checked:bg-gray-600 rounded-md flex items-center justify-center">
                                                        <!-- Dash Icon -->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-3 h-3 fill-gray-900 dark:fill-white"
                                                            viewBox="0 0 20 20" fill="currentColor">
                                                            <path d="M4 10a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1z" />
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

                        {{-- <div class="border-b-2 mb-2 sm:col-span-2">
                            <h2 for="name" class="block mb-2 text-m font-medium text-gray-900 dark:text-white italic">
                                Fungsi Meteran / Indikator Alarm</h2>
                        </div> --}}

                        <div class="border-b-2 py-4 sm:col-span-2">
                            <div class="tracking-wide text-xs font-bold text-gray-500 dark:text-white mb-1 leading-tight">
                                Bagian: 3 dari 3</div>
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                                <div class="flex-1">
                                    <div>
                                        <div class="text-lg font-bold text-gray-700 leading-tight dark:text-white">Keterangan &
                                            Tanda Tangan</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="pesan"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                            <textarea id="pesan" name="pesan" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Tuliskan keterangan..."></textarea>
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

                            <!-- Centang Kebenaran -->
                            <div class="flex items-start mt-3 mb-2">
                                <div class="flex items-center h-5">
                                  <input id="terms" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
                                </div>
                                <label for="terms" class="ms-2 text-justify text-sm font-medium text-gray-900 dark:text-gray-300">Saya menyatakan bahwa data P2H yang saya kirim akurat dan sesuai kondisi unit. Saya siap bertanggung jawab dan menerima sanksi jika terbukti data tersebut tidak sesuai.<a href="#" class="text-blue-600 hover:underline dark:text-blue-500">.</a></label>
                            </div>

                            <!-- Input Tersembunyi untuk Data Tanda Tangan -->
                            <input type="hidden" name="signature_data" id="signature-data" required>

                            <div class="flex justify-center items-center">
                                <button type="submit" class="mt-5 mb-20 w-32 px-5 py-2 bg-blue-500 text-white rounded-lg" id="submitButton">Kirim</button>
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
                    <a href="{{ url('./hasil-cp') }}" id="chatButton" class="chat-bubble-btn">
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
                        submitButton.innerHTML = 'Loading... <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>';

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
                                        window.scrollTo({ top: 0, behavior: 'smooth' });
                                        location.reload();
                                    }
                                }).catch(() => {
                                    // Reload the page if modal is closed without any action
                                    window.scrollTo({ top: 0, behavior: 'smooth' });
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

                <script>
                    function dropdown_name() {
                        return {
                            isOpen: false,
                            search: '',
                            pilihValue: '',
                            pilihText: '',
                            drivers: [],
                            isLoading: false,
                            error: false,
                            hasLoaded: false, // Flag untuk cek data sudah di-load

                            async init() {
                                // Inisialisasi event listener untuk scroll
                                this.$watch('isOpen', (value) => {
                                    if (value && !this.hasLoaded) {
                                        this.loadData();
                                    }
                                });
                            },

                            async loadData() {
                                try {
                                    this.isLoading = true;
                                    this.error = false;

                                    const response = await fetch('/IniAdalahListNamaKaryawanPTGSIPer16Januari2025');
                                    if (!response.ok) throw new Error('Gagal memuat data');

                                    const data = await response.json();
                                    this.drivers = data.map(driver => driver.name);
                                    this.hasLoaded = true;
                                } catch (err) {
                                    console.error('Error:', err);
                                    this.error = true;
                                } finally {
                                    this.isLoading = false;
                                }
                            },

                            toggle() {
                                if (!this.isOpen) {
                                    this.isOpen = true;
                                    if (!this.hasLoaded) {
                                        this.loadData();
                                    }
                                } else {
                                    this.isOpen = !this.isOpen;
                                }
                            },

                            close() {
                                this.isOpen = false;
                            },

                            select(driver) {
                                this.pilihValue = driver;
                                this.pilihText = driver;
                                this.isOpen = false;
                                document.getElementById('tooltip-nama_driver').classList.add('invisible');
                            },

                            get filteredDrivers() {
                                return this.drivers.filter(driver =>
                                    driver.toLowerCase().includes(this.search.toLowerCase())
                                );
                            },

                            // ... (updateFormDataNamaDriver tetap sama)
                        };
                    }

                    document.getElementById('submitButton').addEventListener('click', function(event) {
                    const selectedUnit = document.getElementById('nama_driver').value.trim(); // Ambil nilai dan hilangkan spasi

                        // Cek apakah unit sudah dipilih
                        if (!selectedUnit) {
                            event.preventDefault();  // Jangan submit jika unit tidak dipilih
                            const tooltip = document.getElementById('tooltip-nama_driver');
                            tooltip.classList.remove('invisible');  // Tampilkan pesan error

                            setTimeout(() => {
                                tooltip.classList.add('invisible');
                            }, 6000);

                            // Fokuskan ke elemen nomor unit
                            document.getElementById('nama_driver').scrollIntoView({ behavior: 'smooth', block: 'center' });

                            // Pastikan tooltip terlihat saat fokus pada elemen
                            tooltip.scrollIntoView({ behavior: 'smooth', block: 'center' });

                        }else {
                            // Jika unit sudah dipilih, sembunyikan tooltip
                            document.getElementById('tooltip-no_unit').classList.add('invisible');
                        }
                    });
                </script>

                <script>
                    function dropdown() {
                        return {
                            isOpen: false,
                            search: '',
                            selectedValue: '',
                            selectedText: '',
                            units: Array.from({ length: 10 }, (_, i) => `VB.${String(i + 101).padStart(3, '0')}`)
                            .filter(unit => !['VB.102', 'VB.109', 'VB.110', 'VB.108']
                            .includes(unit)),
                            // units: Array.from({ length: 120 }, (_, i) => `EX.${String(i + 201).padStart(3, '0')}`).concat(['EX.501']),
                            toggle() {
                                this.isOpen = !this.isOpen;
                            },
                            close() {
                                this.isOpen = false;
                            },
                            select(unit) {
                                this.selectedText = unit;
                                this.selectedValue = unit;
                                this.close();
                            },
                            get filteredUnits() {
                                return this.units.filter(unit => unit.toLowerCase().includes(this.search.toLowerCase()));
                            },
                        };
                    }

                    document.getElementById('submitButton').addEventListener('click', function(event) {
                        const selectedUnit = document.getElementById('no_unit').value.trim(); // Ambil nilai dan hilangkan spasi

                        // Cek apakah unit sudah dipilih
                        if (!selectedUnit) {
                            event.preventDefault();  // Jangan submit jika unit tidak dipilih
                            const tooltip = document.getElementById('tooltip-no_unit');
                            tooltip.classList.remove('invisible');  // Tampilkan pesan error

                            setTimeout(() => {
                                tooltip.classList.add('invisible');
                            }, 6000);

                            // Fokuskan ke elemen nomor unit
                            document.getElementById('no_unit').scrollIntoView({ behavior: 'smooth', block: 'center' });

                            // Pastikan tooltip terlihat saat fokus pada elemen
                            tooltip.scrollIntoView({ behavior: 'smooth', block: 'center' });

                        }else {
                            // Jika unit sudah dipilih, sembunyikan tooltip
                            document.getElementById('tooltip-no_unit').classList.add('invisible');
                        }
                    });

                </script>

                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            </div>
        </div>
    </section>
@endsection
