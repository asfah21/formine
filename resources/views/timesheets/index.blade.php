@extends('layouts.app')

@section('title', 'Form Timesheet')

@section('content')

    <link type="text/css" rel="stylesheet" href="./my-css/my-sign-pad.css">
    <link type="text/css" rel="stylesheet" href="./my-css/azvan-ui.css">

    @php
      use Carbon\Carbon;

      $now = Carbon::now('Asia/Singapore'); // UTC+8
      $hour = (int) $now->format('H');
      $minute = (int) $now->format('i');

      if ($hour < 6) {
          // Jam 00:00 – 05:59
          $defaultDate = $now->copy()->subDay()->format('Y-m-d');
          $defaultShift = 'malam';
      } elseif ($hour < 18) {
          // Jam 06:00 – 17:59
          $defaultDate = $now->format('Y-m-d');
          $defaultShift = 'siang';
      } else {
          // Jam 18:00 – 23:59
          $defaultDate = $now->format('Y-m-d');
          $defaultShift = 'malam';
      }
    @endphp

    <style>
      
      .chat-bubble-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: #1b8632;
            /* Color of the chat bubble */
            border-radius: 18%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-decoration: none;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .chat-bubble-btn:hover {
            background-color: #0d6320;
            /* Darker color on hover */
        }

        .chat-bubble-text {
            margin-top: 0px;
            text-align: center;
            font-size: 9px;
            /* color: white; */
            background-color: none;
            padding: 2px 2px;
            border-radius: 15%;
            width: 50px;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }

    </style>


<section class="min-h-screen bg-white dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-4xl lg:py-16 !pt-28">
    <img class="azvan h-auto max-w-full rounded-lg" src="{{ asset('storage/images/LV.svg') }}" alt="Azvan IT">
    <div class="p-5 text-center">
            <h3 class="mb-2 text-2xl font-extrabold tracking-tight leading-none md:text-2xl xl:text-2xl dark:text-white">
                Timesheet <a class="font-extrabold text-blue-500 dark:text-blue-400 hover:underline">Online</a>
            </h3>
        </div>

    <div class="container mx-auto p-0">
    <!-- <h1 class="text-2xl font-bold mb-4">Timesheet – Standar Tambang</h1> -->

    @if ($errors->any())
      <div class="mb-4 p-3 rounded bg-red-100 text-red-700">
        <ul class="list-disc ml-5">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    @if (session('success'))
      <div class="mb-4 p-3 rounded bg-green-100 text-green-700">{{ session('success') }} lihat hasil <a href="{{ route('timesheets.hasil') }}" class="font-extrabold text-blue-500 dark:text-blue-400 hover:underline">disini</a></div>
    @endif

    <form action="{{ route('timesheets.store') }}" method="POST" id="tsForm" >
      @csrf
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div>
          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
          <input type="text" name="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required placeholder="Nama Anda"/>
        </div>
        <div>
          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal (otomatis)</label>
          <input type="date" name="tanggal" 
                value="{{ $defaultDate }}" 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                        focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
                        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                        dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                required readonly/>
        </div>
        <div>
          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Shift (otomatis)</label>
          <select name="shift" id="shift"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                        focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
                        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                        dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                  required readonly>
            <option readonly value="siang" {{ $defaultShift === 'siang' ? 'selected' : '' }}>Siang (06:00–18:00)</option>
            <option readonly value="malam" {{ $defaultShift === 'malam' ? 'selected' : '' }}>Malam (18:00–06:00)</option>
          </select>
        </div>        
        <!-- <div>
          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Unit</label>
          <input type="text" name="nomor_unit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required placeholder="Masukkan Nomor Unit"/>
        </div> -->

        <!--Ujung-ujung nya tetap pakai alpine.js-->
        <div x-data="dropdown()" class="relative">
                            <label for="nomor_unit" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                                Unit</label>
                            <div class="relative flex items-center">
                                <button @click="toggle"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white flex items-center justify-start"
                                    type="button">
                                    <span class="text-left dark:text-gray-100"
                                        x-text="selectedText || 'Pilih Unit'"></span>
                                    <svg class="w-4 h-4 ml-auto text-gray-700 dark:text-gray-200"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div id="tooltip-nomor_unit"
                                    class="absolute right-3 invisible flex items-center px-3 py-1.5 text-xs font-medium text-white bg-red-600 rounded shadow-md">
                                    ⚠️ Pilih unit!
                                </div>
                            </div>

                            <div x-show="isOpen" @click.away="close"
                                class="absolute z-10 w-full mt-1 bg-white border border-gray-300 rounded-lg shadow-md dark:bg-gray-700 dark:border-gray-600">
                                <input type="text" placeholder="Cari Unit..." x-model="search"
                                    class="w-full px-4 py-2 text-sm border-b border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-700 dark:text-white" />
                                <ul class="max-h-48 overflow-auto">
                                    <template x-for="unit in filteredUnits" :key="unit">
                                        <li>
                                            <button @click="select(unit)"
                                                class="block w-full text-left px-4 py-2 text-sm hover:bg-primary-500 hover:text-white dark:hover:bg-primary-600 dark:text-white dark:hover:text-gray-100"
                                                type="button">
                                                <span class="text-gray-900 dark:text-white" x-text="unit"></span>
                                            </button>
                                        </li>
                                    </template>
                                </ul>
                            </div>

                            <input type="hidden" id="nomor_unit" name="nomor_unit" x-model="selectedValue" />
                        </div>
        <div>
          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">HM Awal</label>
          <input type="number" name="hm_awal" id="hm_awal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" min="0" required placeholder="Masukkan HM Awal"/>
        </div>
        <div>
          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">HM Akhir</label>
          <input type="number" name="hm_akhir" id="hm_akhir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" min="0" required placeholder="Masukkan HM Akhir"/>
        </div>
      </div>

      <div>
        <label class="block mt-4 mb-2 text-sm font-medium text-gray-900 dark:text-white">Catatan</label>
        <textarea name="catatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" rows="2" placeholder="Catatan atau Keterangan"></textarea>
      </div>

      <!-- Notes Shift -->
      <div class="mt-6 p-3 rounded-lg bg-yellow-100 border border-yellow-300 text-sm text-gray-800 dark:text-gray-200 dark:bg-yellow-900 dark:border-yellow-700 dark:text-yellow-200">
        <strong>Sekilas Info:</strong><br>
        - <strong>AM</strong> berarti <b>sebelum</b> tengah hari <span class="font-semibold">12:00</span> siang<br>
        - <strong>PM</strong> berarti <b>sesudah</b> tengah hari <span class="font-semibold">12:00</span> siang<br>
        - <b>Shift Siang</b> = 06:00 AM sampai 05:59 PM<br> 
        - <b>Shift Malam</b> = 06:00 PM sampai 05:59 AM<br> 
      </div>

      <div class="mt-6 mb-2 flex items-center gap-2">
        <button type="button" id="genSlots" class="px-3 py-2 rounded-lg bg-blue-600 text-white">Generate Aktivitas Perjam</button>
        <!-- <button type="button" id="addRow" class="px-3 py-2 rounded-lg bg-blue-600 text-white">Tambah Aktivitas</button> -->
      </div>

      <!-- Autocomplete Activity Section -->
      <div class="mt-4 p-2 bg-gray-50 dark:bg-gray-800 rounded-x-lg">
        <!-- <h3 class="text-lg font-medium mb-3 dark:text-white">Tambah Aktivitas</h3> -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div class="hidden">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Aktivitas</label>
            <input type="text" id="activityInput" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Contoh: HAULING OB KE AMETYS">
          </div>
          <div class="hidden">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Aktivitas</label>
            <select id="activityCodeSelect" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
              <option value="">Pilih kode aktivitas...</option>
              @foreach($codes as $code)
                <option value="{{ $code->id }}" data-keywords="{{ strtolower($code->name) }}">[{{ $code->code }}] {{ $code->name }}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>

      <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-center rtl:text-right text-gray-500 dark:text-gray-400">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
              <th scope="col" class="px-6 py-3">#</th>
              <th scope="col" class="px-6 py-3">Mulai</th>
              <th scope="col" class="px-6 py-3">Selesai</th>
              <th scope="col" class="px-6 py-3">Deskripsi</th>
              <th scope="col" class="px-6 py-3">Kode Aktivitas</th>
              <th scope="col" class="px-6 py-3">Durasi (mnt)</th>
            </tr>
          </thead>
          <tbody id="rows"></tbody>
        </table>
      </div>

      <!-- Signature and Confirmation Section -->
      <div class="mt-8 border-t-2 pt-6 sm:col-span-2">
        <h3 class="mb-4 text-lg font-semibold text-gray-900 dark:text-white">Konfirmasi & Tanda Tangan</h3>
        
        <!-- Tanda Tangan -->
        <div class="sm:col-span-2">
          <!-- <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanda Tangan</label> -->
          <div class="flex flex-col items-center justify-center w-full p-4 bg-white border border-gray-300 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-600">
            <div class="mb-3 text-center text-sm text-gray-500 dark:text-gray-400">
              <p>Draw your signature below</p>
            </div>
            <div class="sign_ku border border-gray-300 rounded-lg bg-white dark:bg-gray-700 dark:border-gray-600 p-4">
              <canvas id="signature-pad" class="w-full h-[240px] max-w-[700px] rounded-lg shadow-inner"></canvas>
            </div>

            <div class="center mt-4">
              <button id="clear-button" type="button"
                class="px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-800">
                Hapus Tanda Tangan
              </button>
            </div>
          </div>

          <!-- Hidden Input for Signature Data -->
          <input type="hidden" name="signature_data" id="signature-data" required>

          <!-- Confirmation Checkbox -->
          <div class="flex items-start mt-6 mb-2">
            <div class="flex items-center h-5">
              <input id="confirmation-checkbox" name="confirmation" type="checkbox" value="1" required
                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800">
            </div>
            <label for="confirmation-checkbox"
              class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
              Saya menyatakan bahwa data yang saya isi adalah benar dan dapat dipertanggungjawabkan
            </label>
          </div>
        </div>
      </div>

      <button type="submit" class="px-4 py-2 mt-6 rounded-lg bg-green-600 text-white">Simpan Timesheet</button>
    </form>

     <!-- Bubble Chat -->
     <div id="chatBubble" style="position: fixed; bottom: 65px; right: 12px; z-index: 9999; display: flex; flex-direction: column; align-items: center;">
        <a href="{{ url('/timesheets/hasil') }}" id="chatButton" class="chat-bubble-btn">
          <!-- Chat Bubble Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="-5 -5 34 34" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
            </svg>
        </a>
        <div class="chat-bubble-text text-gray-900 dark:text-white">Hasil TS</div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Create a new chat bubble button
            const chatButton = document.getElementById('chatButton');

            // Set up event listener for the chat button
            chatButton.addEventListener('click', function() {
                window.location.href = '/timesheets/hasil'; // Navigate to the URL
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', () => {
        // Initialize signature pad
        const canvas = document.getElementById('signature-pad');
        const signaturePad = new SignaturePad(canvas, {
          backgroundColor: 'rgba(255, 255, 255, 1)',
          penColor: 'rgb(0, 0, 0)'
        });

        // Clear button
        const clearButton = document.getElementById('clear-button');
        clearButton.addEventListener('click', () => {
          signaturePad.clear();
        });

        // Handle form submission
        const form = document.getElementById('tsForm');
        form.addEventListener('submit', (event) => {
          if (signaturePad.isEmpty()) {
            event.preventDefault();
            alert('Harap beri tanda tangan terlebih dahulu');
            return;
          }

          // Convert signature to data URL and store in hidden input
          const signatureDataURL = signaturePad.toDataURL();
          document.getElementById('signature-data').value = signatureDataURL;
        });

        // Handle canvas resizing
        const resizeCanvas = () => {
          const ratio = Math.max(window.devicePixelRatio || 1, 1);
          canvas.width = canvas.offsetWidth * ratio;
          canvas.height = canvas.offsetHeight * ratio;
          canvas.getContext('2d').scale(ratio, ratio);
          signaturePad.clear();
        };

        // Initial resize
        window.addEventListener('resize', resizeCanvas);
        resizeCanvas();

        // Existing event listeners
        document.getElementById('genSlots').addEventListener('click', generateSlots);
        document.getElementById('addRow')?.addEventListener('click', () => addRow());
        
        // Update form validation to include signature check
        const originalClientValidate = window.clientValidate;
        window.clientValidate = function(e) {
          if (!document.getElementById('confirmation-checkbox').checked) {
            e.preventDefault();
            alert('Harap centang konfirmasi kebenaran data');
            return false;
          }
          return originalClientValidate ? originalClientValidate(e) : true;
        };
      });
    </script>

    

                <!-- Dropdown Unit-->
                <script>
                    function dropdown() {
                      return {
                        isOpen: false,
                        search: '',
                        selectedValue: '',
                        selectedText: '',

                        units: []
                          // EX
                          .concat([
                            'EX.209','EX.213','EX.214','EX.235','EX.236','EX.237','EX.238','EX.239','EX.242','EX.243',
                            'EX.313','EX.314','EX.315','EX.501'
                          ])
                          // DT
                          .concat([
                            'DT.046','DT.047','DT.049','DT.050','DT.051','DT.052','DT.053','DT.054','DT.055','DT.057',
                            'DT.114','DT.115','DT.116','DT.117','DT.118','DT.119','DT.120'
                          ])
                          // BD
                          .concat(['BD.101','BD.106'])
                          // CP
                          .concat(['CP.107'])
                          // MG
                          .concat(['MG.001']),

                        toggle() { this.isOpen = !this.isOpen; },
                        close() { this.isOpen = false; },
                        select(unit) {
                          this.selectedText = unit;
                          this.selectedValue = unit;
                          this.close();
                        },
                        get filteredUnits() {
                          return this.units.filter(u =>
                            u.toLowerCase().includes(this.search.toLowerCase())
                          );
                        },
                      };
                    }

                    document.getElementById('submitButton').addEventListener('click', function(event) {
                        const selectedUnit = document.getElementById('nomor_unit').value.trim(); // Ambil nilai dan hilangkan spasi

                        // Cek apakah unit sudah dipilih
                        if (!selectedUnit) {
                            event.preventDefault(); // Jangan submit jika unit tidak dipilih
                            const tooltip = document.getElementById('tooltip-nomor_unit');
                            tooltip.classList.remove('invisible'); // Tampilkan pesan error

                            setTimeout(() => {
                                tooltip.classList.add('invisible');
                            }, 6000);

                            // Fokuskan ke elemen nomor unit
                            document.getElementById('nomor_unit').scrollIntoView({
                                behavior: 'smooth',
                                block: 'center'
                            });

                            // Pastikan tooltip terlihat saat fokus pada elemen
                            tooltip.scrollIntoView({
                                behavior: 'smooth',
                                block: 'center'
                            });

                        } else {
                            // Jika unit sudah dipilih, sembunyikan tooltip
                            document.getElementById('tooltip-nomor_unit').classList.add('invisible');
                        }
                    });
                </script>

    <script>
      const codes = @json($codes->map(fn($c)=>['id'=>$c->id,'code'=>$c->code,'name'=>$c->name]));
      const rowsEl = document.getElementById('rows');
      const shiftEl = document.getElementById('shift');
      const activityInput = document.getElementById('activityInput');
      const activityCodeSelect = document.getElementById('activityCodeSelect');

      // Function to calculate Levenshtein distance (for fuzzy matching)
      function levenshteinDistance(a, b) {
        if (a.length === 0) return b.length;
        if (b.length === 0) return a.length;

        const matrix = [];
        for (let i = 0; i <= b.length; i++) {
          matrix[i] = [i];
        }
        for (let j = 0; j <= a.length; j++) {
          matrix[0][j] = j;
        }
        for (let i = 1; i <= b.length; i++) {
          for (let j = 1; j <= a.length; j++) {
            const cost = a[j - 1] === b[i - 1] ? 0 : 1;
            matrix[i][j] = Math.min(
              matrix[i - 1][j] + 1,
              matrix[i][j - 1] + 1,
              matrix[i - 1][j - 1] + cost
            );
          }
        }
        return matrix[b.length][a.length];
      }

      // Function to find the best fuzzy match
      function findBestFuzzyMatch(input, options, maxDistance = 3) {
        let bestMatch = null;
        let highestScore = 0;
        
        options.forEach(option => {
          if (!option.value) return;
          
          const text = option.textContent.toLowerCase();
          const keywords = option.getAttribute('data-keywords').toLowerCase();
          let score = 0;
          
          // Split input into individual words
          const inputWords = input.split(/\s+/).filter(w => w.length > 0);
          const keywordWords = keywords.split(/[,\s]+/).filter(w => w.length > 0);
          
          // Check for matches at the beginning of the input
          for (let i = 0; i < inputWords.length; i++) {
            const inputWord = inputWords[i];
            
            // Check if this word matches any keyword
            for (const keyword of keywordWords) {
              // Exact match at the beginning of the input
              if (i === 0 && keyword === inputWord) {
                score = Math.max(score, 100);
              }
              // Match at the beginning of the input (partial word)
              else if (i === 0 && keyword.startsWith(inputWord)) {
                score = Math.max(score, 90);
              }
              // Exact match later in the input
              else if (keyword === inputWord) {
                score = Math.max(score, 70);
              }
              // Partial match later in the input
              else if (keyword.includes(inputWord) || inputWord.includes(keyword)) {
                score = Math.max(score, 50);
              }
              
              // Check for typo tolerance using Levenshtein distance
              const distance = levenshteinDistance(inputWord, keyword);
              const maxAllowedDistance = Math.min(3, Math.floor(keyword.length / 3));
              if (distance <= maxAllowedDistance) {
                // Higher score for matches at the beginning
                const positionScore = i === 0 ? 80 : 40;
                // Higher score for closer matches
                const distanceScore = (1 - (distance / keyword.length)) * 100;
                score = Math.max(score, (positionScore + distanceScore) / 2);
              }
            }
          }
          
          // If this is the best match so far, save it
          if (score > highestScore) {
            highestScore = score;
            bestMatch = option;
          }
        });
        
        return highestScore > 30 ? bestMatch : null;
      }

      // Autocomplete functionality
      activityInput.addEventListener('input', function() {
        const input = this.value.trim().toLowerCase();
        if (!input) {
          activityCodeSelect.value = '';
          return;
        }

        const options = activityCodeSelect.querySelectorAll('option');
        let bestMatch = null;
        let highestScore = 0;
        
        // First try exact and partial matches
        options.forEach(option => {
          if (!option.value) return;
          
          const keywords = option.getAttribute('data-keywords').toLowerCase();
          const optionCode = option.textContent.toLowerCase();
          let score = 0;
          
          // Exact match in code (e.g., 'p2h' matches '[P2H]')
          if (optionCode.includes(`[${input}]`)) {
            score = 100;
          } 
          // Check for matches at the beginning of the input
          else {
            const inputWords = input.split(/\s+/).filter(w => w.length > 0);
            const keywordWords = keywords.split(/[,\s]+/).filter(w => w.length > 0);
            
            for (let i = 0; i < inputWords.length; i++) {
              const inputWord = inputWords[i];
              
              // Check against each keyword
              for (const keyword of keywordWords) {
                // Exact match at the beginning of the input
                if (i === 0 && keyword === inputWord) {
                  score = Math.max(score, 100);
                }
                // Match at the beginning of the input (partial word)
                else if (i === 0 && keyword.startsWith(inputWord)) {
                  score = Math.max(score, 90);
                }
                // Exact match later in the input
                else if (keyword === inputWord) {
                  score = Math.max(score, 70);
                }
                // Partial match later in the input
                else if (keyword.includes(inputWord) || inputWord.includes(keyword)) {
                  score = Math.max(score, 50);
                }
              }
            }
          }
          
          // If this is the best match so far, save it
          if (score > highestScore) {
            highestScore = score;
            bestMatch = option.value;
          }
        });
        
        // If no good match found, try fuzzy matching
        if (highestScore < 50) {
          const fuzzyMatch = findBestFuzzyMatch(input, options);
          if (fuzzyMatch) {
            bestMatch = fuzzyMatch.value;
          }
        }
        
        // Only update if we found a match
        if (bestMatch) {
          activityCodeSelect.value = bestMatch;
        }
      });

      function codeSelectHTML(name) {
        return `<select name="${name}" class="activity-code-select max-w-72 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
        ${codes.map(c => {
          const truncatedName = c.name.length > 6
            ? c.name.slice(0, 6) + "…" 
            : c.name;
          return `<option value="${c.id}" data-keywords="${c.name.toLowerCase()}">[${c.code}] ${truncatedName}</option>`;}).join('')}</select>`;
      }

      function syncTimesChain(tr) {
        const rows = [...rowsEl.children];
        const idx = rows.indexOf(tr);
        if (idx === -1) return;

        const startInput = tr.querySelector('input[name$="[start_time]"]');
        const endInput   = tr.querySelector('input[name$="[end_time]"]');

        // Jika end_time diubah -> geser semua start_time setelahnya
        if (endInput) {
          let curEnd = endInput.value;
          for (let i = idx + 1; i < rows.length; i++) {
            const nextStart = rows[i].querySelector('input[name$="[start_time]"]');
            const nextEnd   = rows[i].querySelector('input[name$="[end_time]"]');
            if (!nextStart || !nextEnd) continue;

            let duration = getMinutes(nextEnd.value) - getMinutes(nextStart.value); // durasi baris tetap
            nextStart.value = curEnd;
            nextEnd.value = minutesToTime(getMinutes(curEnd) + duration);
            curEnd = nextEnd.value;
          }
        }

        // Jika start_time diubah -> geser semua end_time sebelumnya
        if (startInput) {
          let curStart = startInput.value;
          for (let i = idx - 1; i >= 0; i--) {
            const prevStart = rows[i].querySelector('input[name$="[start_time]"]');
            const prevEnd   = rows[i].querySelector('input[name$="[end_time]"]');
            if (!prevStart || !prevEnd) continue;

            let duration = getMinutes(prevEnd.value) - getMinutes(prevStart.value);
            prevEnd.value = curStart;
            prevStart.value = minutesToTime(getMinutes(curStart) - duration);
            curStart = prevStart.value;
          }
        }
        updateDurations();
      }

      // Helper: ubah time string ke menit
      function getMinutes(t) {
        const [h, m] = t.split(":").map(Number);
        return h * 60 + m;
      }
      function minutesToTime(mins) {
        let h = Math.floor(mins / 60) % 24;
        let m = mins % 60;
        return String(h).padStart(2, "0") + ":" + String(m).padStart(2, "0");
      }
        
      function addRow(start='', end='', disableDelete = false) {
        const idx = rowsEl.children.length;
        const tr = document.createElement('tr');
        // Menambahkan semua kelas ke elemen tr
        tr.className = 'bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200';
        const deleteButton = disableDelete 
          ? '<button type="button" class="px-2 py-1 bg-gray-400 text-white rounded-lg cursor-not-allowed" disabled>×</button>'
          : '<button type="button" class="rm px-2 py-1 bg-red-600 text-white rounded-lg">×</button>';
        tr.innerHTML = `
          <td class="px-1 py-2 text-center">${deleteButton}</td>
          <td class="px-1 py-2"><input type="time" name="entries[${idx}][start_time]" value="${start}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required step="60" lang="en-GB" /></td>
          <td class="px-1 py-2"><input type="time" name="entries[${idx}][end_time]" value="${end}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required step="60" lang="en-GB" /></td>

          <td class="px-1 py-2"><input type="text" name="entries[${idx}][description]" class="autocomplete-description bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Wajib diisi kegiatan Anda berdasarkan jam" required /></td>
          <td class="px-1 py-2">${codeSelectHTML(`entries[${idx}][activity_code_id]`)}</td>
          <td class="px-1 py-2 text-center"><span class="dur">0</span></td>        
        `;
        rowsEl.appendChild(tr);
        tr.querySelectorAll('input[type="time"]').forEach(input => {
          input.addEventListener('change', (e) => {
            syncFlexible(tr, e.target);
          });
        });

        // Only add event listener if not disabled
        const deleteBtn = tr.querySelector('.rm');
        if (deleteBtn) {
          deleteBtn.addEventListener('click', () => {
            const rows = [...rowsEl.children];
            const idx = rows.indexOf(tr);
            const prevRow = tr.previousElementSibling;
            const nextRow = tr.nextElementSibling;

            const startInput = tr.querySelector('input[name$="[start_time]"]');
            const endInput   = tr.querySelector('input[name$="[end_time]"]');

            if (prevRow && nextRow) {
              // Hapus di tengah → sambung prev.end = next.start lalu propagasi ke bawah
              const prevEnd = prevRow.querySelector('input[name$="[end_time]"]');
              const nextStart = nextRow.querySelector('input[name$="[start_time]"]');
              if (prevEnd && nextStart) prevEnd.value = nextStart.value;
              // Pastikan semua baris setelah prev ikut nempel
              propagateForwardFromIndex(idx - 1);
            } else if (!prevRow && nextRow) {
              // Hapus baris awal → next.start = start yang dihapus, lalu propagasi ke bawah
              const nextStart = nextRow.querySelector('input[name$="[start_time]"]');
              if (nextStart && startInput) nextStart.value = startInput.value;
              propagateForwardFromIndex(idx); // mulai dari index next yang lama
            } else if (prevRow && !nextRow) {
              // Hapus baris akhir → prev.end = end yang dihapus (tidak ada bawah)
              const prevEnd = prevRow.querySelector('input[name$="[end_time]"]');
              if (prevEnd && endInput) prevEnd.value = endInput.value;
            }
            tr.remove();
            renumberRows();
            updateDurations();
          });
        }
        updateDurations();
      }

      function renumberRows(){
        [...rowsEl.children].forEach((tr,idx)=>{
          tr.querySelectorAll('input,select').forEach(el=>{
            el.name = el.name.replace(/entries\[[0-9]+\]/, `entries[${idx}]`);
          });
        });
      }

      function pad(n){ return (n<10?'0':'')+n; }

      function generateSlots(){
        rowsEl.innerHTML='';
        const shift = shiftEl.value;
        if(!shift){ alert('Pilih shift terlebih dulu'); return; }

        let totalSlots = 0;
        let slots = [];

        if(shift==='siang'){
          // 06:00–18:00 per 60 menit
          totalSlots = 12;
          for(let h=6; h<18; h++){
            slots.push({start: `${pad(h)}:00`, end: `${pad(h+1)}:00`});
          }
        } else {
          // 18:00–24:00 dan 00:00–06:00 (hari berikut)
          totalSlots = 12;
          for(let h=18; h<24; h++) slots.push({start: `${pad(h)}:00`, end: `${pad(h+1===24?0:h+1)}:00`});
          for(let h=0; h<6; h++)   slots.push({start: `${pad(h)}:00`, end: `${pad(h+1)}:00`});
        }

        // Add all slots with delete button disabled for first and last
        slots.forEach((slot, index) => {
          const isFirstOrLast = (index === 0 || index === totalSlots - 1);
          addRow(slot.start, slot.end, isFirstOrLast);
        });
      }

      function minutesBetween(a,b){
        // hitung durasi menit untuk tampilan saja
        const toMin = t=>{const [H,M]=t.split(':').map(Number); return H*60+M;};
        let m = toMin(b) - toMin(a);
        if(m<0) m += 24*60; // lintas tengah malam
        return m;
      }

      function updateDurations(){
        [...rowsEl.children].forEach(tr=>{
          const s = tr.querySelector('input[name$="[start_time]"]').value;
          const e = tr.querySelector('input[name$="[end_time]"]').value;
          const span = tr.querySelector('.dur');
          if(s && e) span.textContent = minutesBetween(s,e);
        });
      }

      function indexOfRow(tr){
    return [...rowsEl.children].indexOf(tr);
}

// Geser ke bawah: pastikan start[i+1] = end[i] untuk semua baris setelah index tertentu
function propagateForwardFromIndex(startIdx){
  const rows = [...rowsEl.children];
  for(let i = Math.max(0, startIdx); i < rows.length - 1; i++){
    const curEnd = rows[i].querySelector('input[name$="[end_time]"]').value;
    const nextStart = rows[i+1].querySelector('input[name$="[start_time]"]');
    if(nextStart) nextStart.value = curEnd;
  }
  updateDurations();
}

// Geser ke atas: pastikan end[i-1] = start[i] untuk semua baris sebelum index tertentu
function propagateBackwardFromIndex(startIdx){
  const rows = [...rowsEl.children];
  for(let i = Math.min(rows.length - 1, startIdx); i > 0; i--){
    const curStart = rows[i].querySelector('input[name$="[start_time]"]').value;
    const prevEnd  = rows[i-1].querySelector('input[name$="[end_time]"]');
    if(prevEnd) prevEnd.value = curStart;
  }
  updateDurations();
}

// Sinkronisasi fleksibel: edit start → propagate backward; edit end → propagate forward
function syncFlexible(tr, changedInput){
  const rows = [...rowsEl.children];
  const idx  = rows.indexOf(tr);
  if(idx === -1) return;

  if(changedInput && /\[end_time\]$/.test(changedInput.name)){
    // End diubah → yang di bawah menyesuaikan start-nya berantai
    propagateForwardFromIndex(idx);
  } else if(changedInput && /\[start_time\]$/.test(changedInput.name)){
    // Start diubah → yang di atas menyesuaikan end-nya berantai
    propagateBackwardFromIndex(idx);
  } else {
    // fallback, jaga dua arah
    propagateBackwardFromIndex(idx);
    propagateForwardFromIndex(idx);
  }
}

    function clientValidate(e){
      const shift = shiftEl.value;
      const hmAwal = Number(document.getElementById('hm_awal').value||0);
      const hmAkhir= Number(document.getElementById('hm_akhir').value||0);
      if(hmAkhir < hmAwal){
        e.preventDefault(); alert('HM akhir harus ≥ HM awal'); return false;
      }

      let times = [];
      for(const tr of [...rowsEl.children]){
        const s = tr.querySelector('input[name$="[start_time]"]').value;
        const e2= tr.querySelector('input[name$="[end_time]"]').value;
        if(!s || !e2){ e.preventDefault(); alert('Lengkapi jam mulai/selesai'); return false; }

        // Validasi range shift kasar di client
        if(shift==='siang'){
          if(!(s>='06:00' && s<'18:00' && e2>='06:00' && e2<='18:00')){
            e.preventDefault(); alert('Semua jam harus 06:00–18:00 untuk shift siang'); return false;
          }
        } else {
          const ok = (s>='18:00' || s<'06:00') && (e2>='18:00' || e2<='06:00');
          if(!ok){ e.preventDefault(); alert('Semua jam harus 18:00–06:00 untuk shift malam'); return false; }
        }

        times.push({s, e: e2});
      }

      // Cek overlap sederhana (urutkan menit absolut dengan asumsi shift)
      const toAbs = (t)=>{ let [H,M]=t.split(':').map(Number); return H*60+M; };
      let intervals = times.map(({s,e})=>{
        let a=toAbs(s), b=toAbs(e);
        if(shift==='malam'){
          if(a<18*60) a += 24*60; // pindah ke hari+1
          if(b<18*60) b += 24*60;
        }
        if(b<=a) b += 24*60; // jaga lintas tengah malam
        return [a,b];
      }).sort((x,y)=>x[0]-y[0]);

      for(let i=1;i<intervals.length;i++){
        if(intervals[i][0] < intervals[i-1][1]){ e.preventDefault(); alert('Jam overlap antar baris'); return false; }
      }
      return true;
    }

    document.addEventListener('DOMContentLoaded', function() {
      // Add event delegation for dynamically added select elements
      document.addEventListener('input', function(e) {
        // Handle description input changes
        if (e.target.matches('input[name$="[description]"].autocomplete-description')) {
          const input = e.target.value.trim().toLowerCase();
          if (!input) return;
          
          const row = e.target.closest('tr');
          const select = row.querySelector('select.activity-code-select');
          if (!select) return;
          
          const options = select.querySelectorAll('option');
          let bestMatch = null;
          let highestScore = 0;
          
          options.forEach(option => {
            if (!option.value) return;
            
            const keywords = option.getAttribute('data-keywords').toLowerCase();
            let score = 0;
            
            // Split input into individual words
            const inputWords = input.split(/\s+/).filter(w => w.length > 0);
            const keywordWords = keywords.split(/[,\s]+/).filter(w => w.length > 0);
            
            // Check for matches at the beginning of the input
            for (let i = 0; i < inputWords.length; i++) {
              const inputWord = inputWords[i];
              
              // Check if this word matches any keyword
              for (const keyword of keywordWords) {
                // Exact match at the beginning of the input
                if (i === 0 && keyword === inputWord) {
                  score = Math.max(score, 100);
                }
                // Match at the beginning of the input (partial word)
                else if (i === 0 && keyword.startsWith(inputWord)) {
                  score = Math.max(score, 90);
                }
                // Exact match later in the input
                else if (keyword === inputWord) {
                  score = Math.max(score, 70);
                }
                // Partial match later in the input
                else if (keyword.includes(inputWord) || inputWord.includes(keyword)) {
                  score = Math.max(score, 50);
                }
                
                // Check for typo tolerance using Levenshtein distance
                const distance = levenshteinDistance(inputWord, keyword);
                const maxAllowedDistance = Math.min(3, Math.floor(keyword.length / 3));
                if (distance <= maxAllowedDistance) {
                  // Higher score for matches at the beginning
                  const positionScore = i === 0 ? 80 : 40;
                  // Higher score for closer matches
                  const distanceScore = (1 - (distance / keyword.length)) * 100;
                  score = Math.max(score, (positionScore + distanceScore) / 2);
                }
              }
            }
            
            // If this is the best match so far, save it
            if (score > highestScore) {
              highestScore = score;
              bestMatch = option;
            }
          });
          
          // Only update if we found a good match
          if (highestScore > 30 && bestMatch) {
            select.value = bestMatch.value;
          }
        }
      });
    });

    document.getElementById('genSlots').addEventListener('click', generateSlots);
    document.getElementById('addRow').addEventListener('click', ()=>addRow());
    document.getElementById('tsForm').addEventListener('submit', clientValidate);
  </script>

@endsection
