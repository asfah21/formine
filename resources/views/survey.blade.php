  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Survey Kendaraan</title>
      @vite(['resources/css/app.css', 'resources/js/app.js'])
      <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
  </head>

    @php
        use Carbon\Carbon;
        $currentDate = Carbon::now('Asia/Singapore')->format('YYYY-MM-DD');
        $currentTime = Carbon::now('Asia/Singapore')->format('H:i');   // Format it as Y-m-d for HTML date input compatibility
    @endphp

  <body>
  <!-- Start Navigation-->

  <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo">
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
    </a>
    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
      <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>

  <!--form-->

  <section class="min-h-screen bg-white dark:bg-gray-900"> <!--min-h-screen agar elemen body / section memiliki minimal tinggi layar penuh.-->
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16 !pt-28"> <!-- pt-28 mengacu pada 7rem karena 1rem = 4px, jadi 7rem = 7 * 4 = 28) --->

      <img class="azvan h-auto max-w-full rouded-lg" src="{{ asset('storage/images/p2h-gbr.png') }}" alt="image description">

        <h2 class="mt-6 mb-4 text-xl font-bold text-gray-900 dark:text-white text-center">Formulir P2H Bus / Manhaul</h2>

        <div class="container mx-auto p-4">
            <form id="myForm">
              <!-- Input Nama -->
              <div class="mb-4 relative">
                <label for="nama" class="block text-gray-700 dark:text-gray-300 font-semibold">Nama:</label>
                <input
                  id="nama"
                  name="nama"
                  type="text"
                  required
                  placeholder="Masukkan nama Anda"
                  class="w-full p-2 border rounded focus:outline-none focus:ring-2 border-gray-300 focus:ring-blue-400 dark:border-gray-600"
                  data-error-message="⚠️ Nama wajib diisi!"
                />
                <div
                  id="tooltip-nama"
                  role="tooltip"
                  class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-red-600 rounded-lg shadow-sm tooltip"
                >
                  Nama tidak boleh kosong!
                  <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
              </div>

              <!-- Input Email -->
              <div class="mb-4 relative">
                <label for="email" class="block text-gray-700 dark:text-gray-300 font-semibold">Email:</label>
                <input
                  id="email"
                  name="email"
                  type="email"
                  required
                  placeholder="Masukkan email Anda"
                  class="w-full p-2 border rounded focus:outline-none focus:ring-2 border-gray-300 focus:ring-blue-400 dark:border-gray-600"
                  data-error-message="⚠️ Email harus valid!"
                />
                <div
                  id="tooltip-email"
                  role="tooltip"
                  class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-red-600 rounded-lg shadow-sm tooltip"
                >
                  Email harus valid!
                  <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
              </div>

              <!-- Input Alamat -->
              <div class="mb-4 relative">
                <label for="alamat" class="block text-gray-700 dark:text-gray-300 font-semibold">Alamat:</label>
                <input
                  id="alamat"
                  name="alamat"
                  type="text"
                  required
                  placeholder="Masukkan alamat Anda"
                  class="w-full p-2 border rounded focus:outline-none focus:ring-2 border-gray-300 focus:ring-blue-400 dark:border-gray-600"
                  data-error-message="⚠️ Alamat wajib diisi!"
                />
                <div
                  id="tooltip-alamat"
                  role="tooltip"
                  class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-red-600 rounded-lg shadow-sm tooltip"
                >
                  Alamat tidak boleh kosong!
                  <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
              </div>

              <!-- Tombol Submit -->
              <button
                type="button"
                id="submit"
                class="px-4 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400"
              >
                Submit
              </button>
            </form>
          </div>

          <style>
            @keyframes bounce-error {
              0%, 100% {
                transform: translateY(0);
              }
              50% {
                transform: translateY(-5px);
              }
            }

            .error-input {
              animation: bounce-error 0.5s ease-in-out;
            }
          </style>

          <script>
            document.getElementById('submit').addEventListener('click', function () {
              const requiredInputs = document.querySelectorAll('#myForm [required]');
              let firstInvalidElement = null;

              // Reset semua error sebelumnya
              requiredInputs.forEach((input) => {
                input.classList.remove('border-red-500', 'error-input');
                input.placeholder = input.dataset.defaultPlaceholder || input.placeholder; // Reset placeholder
                const tooltip = document.querySelector(`#tooltip-${input.id}`);
                if (tooltip) {
                  tooltip.classList.add('invisible'); // Sembunyikan tooltip
                }
              });

              // Validasi input
              requiredInputs.forEach((input) => {
                if (!input.value.trim()) {
                  if (!input.dataset.defaultPlaceholder) {
                    input.dataset.defaultPlaceholder = input.placeholder;
                  }

                  // Tambahkan pesan error
                  input.placeholder = input.dataset.errorMessage || '⚠️ Field ini wajib diisi!';
                  input.classList.add('border-red-500', 'error-input'); // Tambahkan animasi bounce
                  const tooltip = document.querySelector(`#tooltip-${input.id}`);
                  if (tooltip) {
                    tooltip.classList.remove('invisible'); // Tampilkan tooltip
                  }

                  if (!firstInvalidElement) {
                    firstInvalidElement = input;
                  }
                }
              });

              // Scroll ke elemen pertama yang tidak valid
              if (firstInvalidElement) {
                firstInvalidElement.scrollIntoView({ behavior: 'smooth' });
              } else {
                document.getElementById('myForm').submit();
              }
            });

            // Reset error ketika input diisi ulang
            document.querySelectorAll('#myForm [required]').forEach((input) => {
              input.addEventListener('input', function () {
                if (input.value.trim()) {
                  input.classList.remove('border-red-500', 'error-input');
                  const tooltip = document.querySelector(`#tooltip-${input.id}`);
                  if (tooltip) {
                    tooltip.classList.add('invisible'); // Sembunyikan tooltip
                  }
                  input.placeholder = input.dataset.defaultPlaceholder || input.placeholder; // Reset placeholder
                }
              });
            });
          </script>



  </section>

  <footer class="fixed bottom-0 left-0 z-20 w-full p-4 bg-white border-t border-gray-200 shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800 dark:border-gray-600">
      <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="https://flowbite.com/" class="hover:underline">PT GSI</a>-All Rights Reserved
      </span>
      <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
          <li>
              <a href="#" class="hover:underline me-4 md:me-6">About</a>
          </li>
  </footer>

  </body>

  </html>
