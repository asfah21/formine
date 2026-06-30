{{-- ============================================================ --}}
{{--  GSI Super App — Full Page Redirect View                    --}}
{{--  Menampilkan informasi pengalihan form P2H ke GSI Super App --}}
{{-- ============================================================ --}}

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GSI Super Apps — Form P2H</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            -webkit-tap-highlight-color: transparent;
        }

        /* === Animasi tombol download === */
        @keyframes pulse-glow {
            0%, 100% {
                box-shadow: 0 0 8px rgba(5, 150, 105, 0.2), 0 0 20px rgba(55, 48, 163, 0.15), 0 0 30px rgba(180, 83, 9, 0.1);
            }
            50% {
                box-shadow: 0 0 16px rgba(5, 150, 105, 0.4), 0 0 40px rgba(55, 48, 163, 0.3), 0 0 50px rgba(180, 83, 9, 0.2);
            }
        }

        @keyframes float-icon {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-4px);
            }
        }

        @keyframes gradient-shift {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .download-btn {
            animation: pulse-glow 2s ease-in-out infinite, gradient-shift 4s ease infinite;
            position: relative;
            overflow: hidden;
            background-size: 200% 200% !important;
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .download-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                90deg,
                transparent,
                rgba(255, 255, 255, 0.2),
                transparent
            );
            transition: left 0.6s ease;
        }

        .download-btn:hover::before {
            left: 100%;
        }

        .download-btn:hover {
            transform: translateY(-2px) scale(1.02);
            animation: pulse-glow 1s ease-in-out infinite;
        }

        .download-btn:active {
            transform: translateY(0px) scale(0.98);
        }

        .download-btn .icon-download {
            animation: float-icon 2.5s ease-in-out infinite;
        }

        .download-btn:hover .icon-download {
            animation: float-icon 1s ease-in-out infinite;
        }

        .download-btn .btn-dots::after {
            content: '';
            animation: dots 1.5s steps(4, end) infinite;
        }

        @keyframes dots {
            0%   { content: ''; }
            25%  { content: '.'; }
            50%  { content: '..'; }
            75%  { content: '...'; }
            100% { content: ''; }
        }

        /* === Animasi tombol WA === */
        @keyframes wa-pulse-azvan {
            0%, 100% {
                transform: scale(1);
                box-shadow: 0 4px 6px rgba(22, 163, 74, 0.2);
            }
            50% {
                transform: scale(1.03);
                box-shadow: 0 8px 20px rgba(22, 163, 74, 0.4);
            }
        }

        @keyframes wa-pulse-firman {
            0%, 100% {
                transform: scale(1);
                box-shadow: 0 4px 6px rgba(22, 163, 74, 0.2);
            }
            50% {
                transform: scale(1.03);
                box-shadow: 0 8px 20px rgba(22, 163, 74, 0.4);
            }
        }

        .wa-btn-azvan {
            animation: wa-pulse-azvan 2s ease-in-out infinite;
        }

        .wa-btn-firman {
            animation: wa-pulse-firman 2s ease-in-out infinite;
            animation-delay: 1s; /* delay 1 detik agar tidak barengan */
        }

        .wa-btn-azvan:hover,
        .wa-btn-firman:hover {
            animation: none !important;
            transform: scale(1.03) !important;
        }

        /* Ripple effect on click */
        .ripple {
            position: relative;
            overflow: hidden;
        }

        .ripple::after {
            content: '';
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.4);
            width: 100px;
            height: 100px;
            margin-top: -50px;
            margin-left: -50px;
            top: 50%;
            left: 50%;
            transform: scale(0);
            opacity: 0;
        }

        .ripple:active::after {
            animation: ripple-effect 0.6s ease-out;
        }

        @keyframes ripple-effect {
            0% {
                transform: scale(0);
                opacity: 0.5;
            }
            100% {
                transform: scale(4);
                opacity: 0;
            }
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 via-white to-blue-100 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 min-h-screen flex items-center justify-center p-3 sm:p-4">

    <div class="relative w-full max-w-md mx-auto">

        {{-- Card Utama --}}
        <div class="relative bg-white rounded-2xl shadow-xl dark:bg-gray-700 border border-gray-200 dark:border-gray-600">

            <div class="p-4 sm:p-5">

                {{-- Header --}}
                <div class="text-center mb-3 mt-1">
                    <div class="flex items-center justify-center gap-2 sm:gap-3 mb-3">
                        <div class="flex-shrink-0">
                            <svg class="w-8 h-8 sm:w-10 sm:h-10 text-yellow-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-extrabold text-yellow-500">Attention!</h3>
                    </div>
                    <p class="text-xs sm:text-sm text-gray-500 dark:text-gray-400 px-1 sm:px-2 leading-relaxed mb-2">
                        Form P2H dialihkan ke aplikasi
                        <strong class="text-blue-600 dark:text-blue-400 font-bold">GSI Super Apps</strong>.
                        Download sekarang juga!
                    </p>
                </div>

                {{-- Download Button (auto-detect device) --}}
                <div class="mb-3">
                    <a id="download-btn" href="#" target="_blank" rel="noopener noreferrer"
                        class="download-btn ripple group flex items-center justify-center px-4 py-3 sm:px-5 sm:py-3.5 text-sm sm:text-base font-semibold text-white transition-all duration-300 ease-in-out bg-gradient-to-r from-indigo-700 via-emerald-700 to-amber-700 rounded-xl hover:from-indigo-800 hover:via-emerald-800 hover:to-amber-800 shadow-lg hover:shadow-xl dark:from-indigo-600 dark:via-emerald-600 dark:to-amber-600 dark:hover:from-indigo-700 dark:hover:via-emerald-700 dark:hover:to-amber-700">
                        <svg id="download-icon" class="icon-download w-5 h-5 sm:w-6 sm:h-6 mr-2.5 sm:mr-3 text-white"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 16l-4-4h3V8h2v4h3l-4 4zm0-14C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/>
                        </svg>
                        <span id="download-text">Download GSI Super Apps</span>
                    </a>
                </div>

                <script>
                    (function() {
                        const btn = document.getElementById('download-btn');
                        const icon = document.getElementById('download-icon');
                        const text = document.getElementById('download-text');
                        const ua = navigator.userAgent || navigator.vendor || window.opera;

                        const playStoreUrl = 'https://play.google.com/store/apps/details?id=com.gsicorp.id&hl=id';
                        const appStoreUrl = 'https://apps.apple.com/id/app/gsi-superapp/id6759630421';

                        // Detect Android
                        if (/android/i.test(ua)) {
                            btn.href = playStoreUrl;
                            icon.innerHTML = '<path fill="currentColor" d="M325.3 234.3L104.6 13l280.8 161.2-60.1 60.1zM47 0C34 6.8 25.3 19.2 25.3 35.3v441.3c0 16.1 8.7 28.5 21.7 35.3l256.6-256L47 0zm425.2 225.6l-58.9-34.1-65.7 64.5 65.7 64.5 60.1-34.1c18-14.3 18-46.5-1.2-60.8zM104.6 499l280.8-161.2-60.1-60.1L104.6 499z"/>';
                            text.textContent = 'Download di Google Play';
                        }
                        // Detect iOS (iPhone, iPad, iPod)
                        else if (/iPad|iPhone|iPod/.test(ua) || (navigator.platform === 'MacIntel' && navigator.maxTouchPoints > 1)) {
                            btn.href = appStoreUrl;
                            icon.innerHTML = '<path d="M12.152 6.896c-.948 0-2.415-1.078-3.96-1.04-2.04.027-3.91 1.183-4.961 3.014-2.117 3.675-.546 9.103 1.519 12.09 1.013 1.46 2.208 3.09 3.792 3.039 1.52-.065 2.09-.987 3.935-.987 1.831 0 2.35.987 3.96.948 1.637-.026 2.676-1.48 3.676-2.948 1.156-1.688 1.636-3.325 1.662-3.415-.039-.013-3.182-1.221-3.22-4.857-.026-3.04 2.48-4.494 2.597-4.559-1.429-2.09-3.623-2.324-4.39-2.376-2-.156-3.675 1.09-4.61 1.09zM15.53 3.83c.843-1.012 1.4-2.427 1.245-3.83-1.207.052-2.662.805-3.532 1.818-.78.896-1.454 2.338-1.273 3.714 1.338.104 2.715-.688 3.559-1.701z"/>';
                            text.textContent = 'Download di App Store';
                        }
                        // Desktop / unknown — tampilkan kedua opsi
                        else {
                            btn.href = playStoreUrl;
                            icon.innerHTML = '<path fill="currentColor" d="M325.3 234.3L104.6 13l280.8 161.2-60.1 60.1zM47 0C34 6.8 25.3 19.2 25.3 35.3v441.3c0 16.1 8.7 28.5 21.7 35.3l256.6-256L47 0zm425.2 225.6l-58.9-34.1-65.7 64.5 65.7 64.5 60.1-34.1c18-14.3 18-46.5-1.2-60.8zM104.6 499l280.8-161.2-60.1-60.1L104.6 499z"/>';
                            text.textContent = 'Download Super Apps';
                        }
                    })();
                </script>

                {{-- Separator --}}
                <div class="flex items-center gap-3 my-3 sm:my-4">
                    <div class="flex-1 border-t border-dashed border-gray-400"></div>
                    <h2 class="text-center font-bold whitespace-nowrap text-blue-500 text-sm sm:text-base">PANDUAN LOGIN</h2>
                    <div class="flex-1 border-t border-dashed border-gray-400"></div>
                </div>

                {{-- Panduan Login --}}
                <div class="bg-blue-50 dark:bg-blue-900/20 rounded-xl p-3 sm:p-4 mb-3 border border-blue-200 dark:border-blue-800">
                    <div class="flex items-start gap-2.5">
                        <div class="flex-shrink-0 mt-0.5">
                            <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div class="text-xs sm:text-sm text-gray-700 dark:text-gray-300 space-y-1.5">
                            <p class="font-semibold text-blue-700 dark:text-blue-300">Cara Login :</p>
                            <ol class="list-decimal list-inside space-y-1 ml-1">
                                <li>Download & install <strong>GSI Super Apps</strong></li>
                                <li>Login pakai <strong>NIK </strong> contoh:<span class="font-mono font-bold text-blue-600 dark:text-blue-400 bg-blue-100 dark:bg-blue-900/40 px-2 py-0.5 rounded">623001</span> </li>
                                <li>Password default : <span class="font-mono font-bold text-blue-600 dark:text-blue-400 bg-blue-100 dark:bg-blue-900/40 px-2 py-0.5 rounded">123</span> atau <span class="font-mono font-bold text-blue-600 dark:text-blue-400 bg-blue-100 dark:bg-blue-900/40 px-2 py-0.5 rounded">NIK</span></li>
                                <li>Aktifkan GPS / lokasi sebelum <span class="font-mono font-bold text-blue-600 dark:text-blue-400 bg-blue-100 dark:bg-blue-900/40 px-2 py-0.5 rounded">LOGIN</span> </li>
                                <li class="text-yellow-600 dark:text-yellow-400 font-medium">⚠️ Ubah password setelah login!</li>
                            </ol>
                        </div>
                    </div>
                </div>

                {{-- Kontak IT --}}
                <div class="bg-gray-50 dark:bg-gray-800 rounded-xl p-3 sm:p-4 mb-3 border border-gray-200 dark:border-gray-600">
                    <div class="flex items-start gap-2.5 mb-3">
                        <div class="flex-shrink-0 mt-0.5">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <div class="text-xs sm:text-sm text-gray-600 dark:text-gray-400">
                            <p class="font-semibold text-gray-700 dark:text-gray-200">Ada kendala? Hubungi IT</p>
                        </div>
                    </div>
                    <div class="flex flex-row gap-2">
                        <!-- Firman -->
                        <a href="https://wa.me/6285240803399" target="_blank" rel="noopener noreferrer"
                            class="wa-btn-firman flex-1 group flex items-center justify-center gap-1.5 sm:gap-2.5 px-3 py-2 sm:px-4 sm:py-2.5 text-xs sm:text-sm font-semibold text-white transition-all duration-300 ease-in-out bg-gradient-to-r from-green-600 to-green-500 rounded-xl hover:from-green-700 hover:to-green-600 shadow-md hover:shadow-lg active:scale-[0.98]">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                            <span>Firmansyah</span>
                        </a>
                        <!-- Azvan -->
                        <a href="https://wa.me/6282271548976" target="_blank" rel="noopener noreferrer"
                            class="wa-btn-azvan flex-1 group flex items-center justify-center gap-1.5 sm:gap-2.5 px-3 py-2 sm:px-4 sm:py-2.5 text-xs sm:text-sm font-semibold text-white transition-all duration-300 ease-in-out bg-gradient-to-r from-green-600 to-green-500 rounded-xl hover:from-green-700 hover:to-green-600 shadow-md hover:shadow-lg active:scale-[0.98]">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                            <span>Azvan</span>
                        </a>
                    </div>
                </div>

                {{-- Separator --}}
                <div class="flex items-center gap-3 my-3 sm:my-4">
                    <div class="flex-1 border-t border-dashed border-gray-400"></div>
                    <h2 class="text-center font-bold whitespace-nowrap text-blue-500 text-sm sm:text-base">LANJUT BACA</h2>
                    <div class="flex-1 border-t border-dashed border-gray-400"></div>
                </div>

                {{-- SOP Links --}}
                <div class="flex flex-row items-stretch gap-2.5 sm:gap-3 mb-2 mt-2 px-1 sm:px-2">
                    <!-- SOP PAM -->
                    <a href="./pam-sop"
                        class="flex-1 flex flex-row items-center gap-2 p-2.5 sm:p-3 border border-gray-400 rounded-xl hover:border-blue-500 hover:shadow-lg transition-all duration-200 group dark:bg-gray-800 dark:border-gray-700 dark:hover:border-blue-400 active:scale-[0.98]">
                        <div class="flex-shrink-0 w-7 h-7 sm:w-8 sm:h-8 rounded-lg flex items-center justify-center dark:bg-blue-900/30">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 sm:w-7 sm:h-7 text-blue-600 dark:text-blue-400"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <div class="flex-1 text-left">
                            <h3 class="text-sm sm:text-base font-semibold text-gray-800 dark:text-white">SOP PAM</h3>
                        </div>
                        <span class="flex-shrink-0 text-[10px] sm:text-xs text-blue-600 dark:text-blue-400 flex items-center gap-1 group-hover:underline">

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-2.5 sm:w-3 sm:h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                            </svg>
                        </span>
                    </a>

                    <!-- SOP HSE -->
                    <a href="./hse-sop"
                        class="flex-1 flex flex-row items-center gap-2 p-2.5 sm:p-3 border border-gray-400 rounded-xl hover:border-green-600 hover:shadow-lg transition-all duration-200 group dark:bg-gray-800 dark:border-gray-700 dark:hover:border-green-400 active:scale-[0.98]">
                        <div class="flex-shrink-0 w-7 h-7 sm:w-8 sm:h-8 rounded-lg flex items-center justify-center dark:bg-green-900/30">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 sm:w-7 sm:h-7 text-green-600 dark:text-green-400"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <div class="flex-1 text-left">
                            <h3 class="text-sm sm:text-base font-semibold text-gray-800 dark:text-white">SOP HSE</h3>
                        </div>
                        <span class="flex-shrink-0 text-[10px] sm:text-xs text-green-500 flex items-center gap-1 group-hover:underline">

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-2.5 sm:w-3 sm:h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                            </svg>
                        </span>
                    </a>
                </div>

                {{-- Kembali ke Beranda --}}
                {{-- <div class="mt-4 sm:mt-5 flex justify-center">
                    <a href="{{ route('welcome.show') }}"
                        class="inline-flex items-center text-xs sm:text-sm font-medium text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white transition-colors group active:text-gray-700">
                        Kembali ke Beranda
                        <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 ml-1 transition-transform group-hover:translate-x-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 12H5m14 0-4 4m4-4-4-4" />
                        </svg>
                    </a>
                </div> --}}

            </div>
        </div>
    </div>

</body>
</html>
