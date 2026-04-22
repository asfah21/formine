{{-- ============================================================ --}}
{{--  GSI Transition Modal — Partial Component                   --}}
{{--  Usage: @include('partials.gsi-transition-modal')           --}}
{{-- ============================================================ --}}

{{-- Modal Toggle Button (hidden, auto-triggered via JS) --}}
<button id="trigger-modal-btn"
    data-modal-target="progress-modal"
    data-modal-toggle="progress-modal"
    class="hidden"
    type="button">
    Toggle modal
</button>

{{-- Main Modal --}}
<div id="progress-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">

        {{-- Backdrop --}}
        <div class="fixed inset-0 bg-gray-900 bg-opacity-30 dark:bg-opacity-30"></div>

        {{-- Modal Content --}}
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">

            {{-- Close Button --}}
            <button type="button"
                class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                data-modal-hide="progress-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>

            <div class="p-4 md:p-5">

                {{-- Header --}}
                <div class="text-center mb-2 mt-2">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-blue-100 dark:bg-blue-900 mb-4 shadow-sm border border-blue-200 dark:border-blue-800">
                        <svg class="w-8 h-8 text-blue-600 dark:text-blue-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 5.365V3m0 2.365a5.338 5.338 0 0 1 5.133 5.368v1.8c0 2.386 1.867 2.982 1.867 4.175 0 .593 0 1.292-.538 1.292H5.538C5 18 5 17.301 5 16.708c0-1.193 1.867-1.789 1.867-4.175v-1.8A5.338 5.338 0 0 1 12 5.365ZM8.733 18c.094.852.306 1.54.944 2.112a3.48 3.48 0 0 0 4.646 0c.638-.572 1.236-1.26 1.33-2.112h-6.92Z" />
                        </svg>
                    </div>
                    <h3 class="mb-2 text-2xl font-extrabold text-yellow-500">Pemberitahuan Penting!</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400 px-2 leading-relaxed mb-3">
                        Demi kelancaran operasional, kedepannya seluruh form P2H akan dialihkan ke aplikasi
                        <strong class="text-blue-600 dark:text-blue-400 font-bold">GSI Super Apps</strong>.
                        Download sekarang!
                    </p>
                    
                </div>

                {{-- Download Buttons --}}
                <div class="flex flex-col gap-3 mb-3">
                    <a href="https://play.google.com/store/apps/details?id=com.gsicorp.id&hl=id"
                        class="group flex items-center justify-center px-5 py-3.5 text-base font-semibold text-gray-900 transition-all duration-300 ease-in-out bg-white border-2 border-gray-200 rounded-xl hover:border-gray-300 hover:bg-gray-50 shadow-sm hover:shadow-md dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 transform hover:-translate-y-0.5">
                        <svg class="w-6 h-6 mr-3 text-gray-900 dark:text-white transition-transform group-hover:scale-110"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M325.3 234.3L104.6 13l280.8 161.2-60.1 60.1zM47 0C34 6.8 25.3 19.2 25.3 35.3v441.3c0 16.1 8.7 28.5 21.7 35.3l256.6-256L47 0zm425.2 225.6l-58.9-34.1-65.7 64.5 65.7 64.5 60.1-34.1c18-14.3 18-46.5-1.2-60.8zM104.6 499l280.8-161.2-60.1-60.1L104.6 499z" />
                        </svg>
                        Download di Google Play
                    </a>

                    <a href="https://apps.apple.com/id/app/gsi-superapp/id6759630421"
                        class="group flex items-center justify-center px-5 py-3.5 text-base font-semibold text-gray-900 transition-all duration-300 ease-in-out bg-white border-2 border-gray-200 rounded-xl hover:border-gray-300 hover:bg-gray-50 shadow-sm hover:shadow-md dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 transform hover:-translate-y-0.5">
                        <svg class="w-7 h-7 mr-3 text-gray-900 dark:text-white transition-transform group-hover:scale-110"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12.152 6.896c-.948 0-2.415-1.078-3.96-1.04-2.04.027-3.91 1.183-4.961 3.014-2.117 3.675-.546 9.103 1.519 12.09 1.013 1.46 2.208 3.09 3.792 3.039 1.52-.065 2.09-.987 3.935-.987 1.831 0 2.35.987 3.96.948 1.637-.026 2.676-1.48 3.676-2.948 1.156-1.688 1.636-3.325 1.662-3.415-.039-.013-3.182-1.221-3.22-4.857-.026-3.04 2.48-4.494 2.597-4.559-1.429-2.09-3.623-2.324-4.39-2.376-2-.156-3.675 1.09-4.61 1.09zM15.53 3.83c.843-1.012 1.4-2.427 1.245-3.83-1.207.052-2.662.805-3.532 1.818-.78.896-1.454 2.338-1.273 3.714 1.338.104 2.715-.688 3.559-1.701z" />
                        </svg>
                        Download di App Store
                    </a>
                </div>

                <div class="flex items-center gap-3 my-4">
                    <div class="flex-1 border-t border-dashed border-gray-400"></div>

                    <h2 class="text-center font-bold whitespace-nowrap text-blue-500">
                        BACA DULU
                    </h2>

                    <div class="flex-1 border-t border-dashed border-gray-400"></div>
                </div>

                <div>

                    <div class="grid grid-cols-2 gap-3 mb-4 mt-3 px-2">

    <!-- SOP PAM -->
    <a href="./pam-sop"
        class="flex-1 flex flex-col items-center gap-3 p-3 border border-gray-400 rounded-xl hover:border-blue-500 hover:shadow-lg transition-all duration-200 group dark:bg-gray-800 dark:border-gray-700 dark:hover:border-blue-400">
        
        <div class="w-10 h-10 rounded-lg flex items-center justify-center dark:bg-blue-900/30">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-blue-600 dark:text-blue-400"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
            </svg>
        </div>

        <div class="text-center">
            <h3 class="text-base font-semibold text-gray-800 dark:text-white">SOP PAM</h3>
            <!-- <p class="text-xs text-gray-500 dark:text-gray-400">Standar Operasional Prosedur</p> -->
        </div>

        <span class="text-xs text-blue-600 dark:text-blue-400 flex items-center gap-1 group-hover:underline">
            Lihat
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
            </svg>
        </span>
    </a>

    <!-- SOP HSE -->
    <a href="./hse-sop"
        class="flex-1 flex flex-col items-center gap-3 p-3 border border-gray-400 rounded-xl hover:border-green-600 hover:shadow-lg transition-all duration-200 group dark:bg-gray-800 dark:border-gray-700 dark:hover:border-green-400">
        
        <div class="w-10 h-10 rounded-lg flex items-center justify-center dark:bg-green-900/30">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-green-600 dark:text-green-400"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
            </svg>
        </div>

        <div class="text-center">
            <h3 class="text-base font-semibold text-gray-800 dark:text-white">SOP HSE</h3>
            <!-- <p class="text-xs text-gray-500 dark:text-gray-400">Health, Safety & Environment</p> -->
        </div>

        <span class="text-xs text-green-500 flex items-center gap-1 group-hover:underline">
            Lihat
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
            </svg>
        </span>
    </a>

</div>
                </div>

                {{-- Skip Link --}}
                <div class="mt-6 flex justify-center">
                    <button data-modal-hide="progress-modal" type="button"
                        class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white transition-colors group">
                        Lanjutkan ke Form P2H
                        <svg class="w-4 h-4 ml-1 transition-transform group-hover:translate-x-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 12H5m14 0-4 4m4-4-4-4" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>

{{-- Auto-trigger script --}}
<script>
    window.addEventListener('DOMContentLoaded', () => {
        setTimeout(() => {
            const triggerBtn = document.getElementById('trigger-modal-btn');
            if (triggerBtn) triggerBtn.click();
        }, 123); // delay 123ms agar Flowbite sudah terinisialisasi
    });
</script>
