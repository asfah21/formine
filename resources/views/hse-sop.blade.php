@extends('layouts.app')

@section('title', 'SOP & IK HSE')

@section('content')

    <link type="text/css" rel="stylesheet" href="./my-css/my-sign-pad.css">

    <section class="min-h-screen bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-5xl lg:py-16 !pb-28 !pt-28">

            <img class="azvan h-auto max-w-full rounded-lg" src="{{ asset('storage/images/SOP-IK-HSE.svg') }}"
                alt="image description">
            <div class="p-5 text-center">
                <h3 class="mt-1 mb-0 text-2xl font-extrabold tracking-tight leading-none md:text-2xl xl:text-2xl dark:text-white">
                    Search <a class="font-extrabold text-blue-500 dark:text-blue-400 hover:underline">SOP dan IK</a> HSE
                </h3>
            </div>

            <div class="mx-auto">
                <!-- Input Pencarian -->
                <input type="text" id="searchInput" placeholder="Cari SOP atau IK disini..."
                    class="w-full px-4 py-2 mb-4 text-sm border rounded-lg focus:ring focus:ring-blue-300 dark:bg-gray-800 dark:border-gray-600 dark:text-white" />

                {{-- <div id="sopDivider" class="flex items-center my-4 mt-4">
                    <span class="text-gray-700 dark:text-gray-300 font-medium mr-2">List SOP</span>
                    <hr class="flex-grow border-t border-gray-300 dark:border-gray-600">
                </div>

                <div id="itemList" class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 my-4">

                    @php
                        $sops = [
                            ['name' => 'Penggunaan Excavator', 'link' => 'https://drive.google.com/file/d/1UYijyYWg3Nk94cpe4Ok5QdVnmlGQQ1Rz/view?usp=drive_link'],
                            ['name' => 'Pemeliharaan Preventif & Korektif', 'link' => 'https://drive.google.com/file/d/1h3hNfo2BmSO7A3dzdIOGsC4GU00KezMV/view?usp=drive_link'],
                            ['name' => 'Tyre Management', 'link' => 'https://drive.google.com/file/d/1DkJBj5Z0W2-uVloJXaBtDKY0DvNfIh7u/view?usp=drive_link'],
                            ['name' => 'Kalibrasi', 'link' => 'https://drive.google.com/file/d/1yEUzJIu8fBlwP4vSrOdze2jy8NZ8CSRW/view?usp=drive_link'],
                            ['name' => 'Tools Facility Equipment Support', 'link' => 'https://drive.google.com/file/d/1iulynQbu_t7EkMSmGV0kfEGgWsq7g2EN/view?usp=drive_link'],
                        ];
                    @endphp

                    @foreach ($sops as $sop)
                        <a href="{{ $sop['link'] }}"
                            class="relative flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50
                                dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">

                            <span class="absolute top-0 right-0 bg-green-500 text-white text-[0.6rem] font-bold px-2 py-[2px] shadow-md"
                                style="border-bottom-left-radius: 10px; border-top-right-radius: 7px;">&nbsp;SOP
                            </span>

                            <svg class="me-2 h-4 w-4 shrink-0 text-gray-900 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none" />
                                <text x="50%" y="62%" text-anchor="middle" font-size="8" font-family="Arial, sans-serif"
                                    fill="currentColor" font-weight="bold">SOP</text>
                            </svg>

                            <span class="text-sm font-medium text-gray-900 dark:text-white">&nbsp;{{ $sop['name'] }}</span>
                        </a>

                    @endforeach
                </div> --}}

                <div id="sopDivider" class="flex items-center my-4 mt-8">
                    <span class="text-gray-700 dark:text-gray-300 font-medium mr-2">List IK (Intruksi Kerja)</span>
                    <hr class="flex-grow border-t border-gray-300 dark:border-gray-600">
                </div>

                <!-- Daftar Item -->
                <div id="itemList" class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 my-4">

                    @php
                        $iks = [
                            ['name' => 'Penggunaan Excavator', 'link' => 'https://drive.google.com/file/d/1UYijyYWg3Nk94cpe4Ok5QdVnmlGQQ1Rz/view?usp=drive_link'],
                            ['name' => 'Penggunaan Dozer', 'link' => 'https://drive.google.com/file/d/1ldyvCeszOdaY6rwiqLa2nUMetY2n70eU/view?usp=drive_link'],
                            ['name' => 'Penggunaan Vibro', 'link' => 'https://drive.google.com/file/d/1JBpadWXzIYCk0hebLZMCKBGljDNd4BpF/view?usp=drive_link'],
                            ['name' => 'Penggunaan Tower Lamp', 'link' => 'https://drive.google.com/file/d/1xWWT-crlUZvdejWsnKSfrUK1a0QO9ICX/view?usp=drive_link'],
                            ['name' => 'Penggunaan LV', 'link' => 'https://drive.google.com/file/d/1KHdG07R8YzQrSgF-QOCryRHbkRScrTvr/view?usp=drive_link'],
                            ['name' => 'Penggunaan Dump Truck', 'link' => 'https://drive.google.com/file/d/16f5-fcJBTN4O-urGc_U9ncn1yEBxvIq3/view?usp=drive_link'],
                            ['name' => 'Penggunaan Water Truck', 'link' => 'https://drive.google.com/file/d/1e5B55TfnYmFqtz-NJmBldS1UY9eB7o2p/view?usp=drive_link'],
                            ['name' => 'Penggunaan Fuel Truck', 'link' => 'https://drive.google.com/file/d/1iCZq_aoKPACPkJLvB_7nrUGOC1c5f5GG/view?usp=drive_link'],
                            ['name' => 'Penggunaan Breaker', 'link' => 'https://drive.google.com/file/d/1gqgXo4g_u0uWZhWy91TEPK0hBtjBCZMh/view?usp=drive_link'],
                            ['name' => 'Penggunaan Manhaul', 'link' => 'https://drive.google.com/file/d/1HEv3M_-Q7gZ8PT9GzTb40FuCt17lEqsf/view?usp=drive_link'],
                            ['name' => 'Penggunaan Forklift', 'link' => 'https://drive.google.com/file/d/1nlzS0RxJWYQBHjCMF9DYwxKgdTeQ6MU9/view?usp=drive_link'],
                            ['name' => 'Penggunaan ADT', 'link' => 'https://drive.google.com/file/d/1v5mP012fldmdCLtSiStQmDaSsT85Gt0A/view?usp=drive_link'],
                            ['name' => 'Penggunaan Crane Truck', 'link' => 'https://drive.google.com/file/d/12h01BP4Apmnfag04N-yph2HjqbMEJJ2K/view?usp=drive_link'],

                        ];
                    @endphp

                    @foreach ($iks as $ik)
                        {{-- <a href="{{ $ik['link'] }}" target="_blank" --}}
                        <a href="{{ $ik['link'] }}" target="_blank"
                            class="relative flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50
                                dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">

                            <span class="absolute top-0 right-0 bg-orange-500 text-white text-[0.6rem] font-bold px-2 py-[2px] shadow-md"
                                style="border-bottom-left-radius: 10px; border-top-right-radius: 7px;">&nbsp;IK
                            </span>

                            <svg class="me-2 h-4 w-4 shrink-0 text-gray-900 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <polygon points="7,2 17,2 22,7 22,17 17,22 7,22 2,17 2,7"
                                    stroke="currentColor" stroke-width="2" fill="none"/>
                                <text x="50%" y="62%" text-anchor="middle" font-size="8" font-family="Arial, sans-serif"
                                    fill="currentColor" font-weight="bold">IK</text>
                            </svg>

                            <span class="text-sm font-medium text-gray-900 dark:text-white">&nbsp;{{ $ik['name'] }}</span>
                        </a>

                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-10 px-10 sm:py-10 bg-gray-50 lg:py-20 dark:bg-gray-800 border-t border-b border-gray-100 dark:border-gray-700">
            <div class="mx-auto max-w-screen-md sm:text-center">
                <h2 class="mb-4 text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl dark:text-white">Saran dan Masukan</h2>
                <p class="mx-auto mb-8 max-w-2xl font-light text-gray-500 md:mb-12 sm:text-xl dark:text-gray-400">
                    Kami ingin tahu pendapatmu! Bagikan saran atau masukan supaya kami bisa jadi lebih baik. Silakan isi form berikut ini.
                </p>

                <form action="{{ route('feedback.submit') }}" method="POST">
                    @csrf
                    <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
                        <div class="relative w-full">
                            <label for="email"
                                class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email
                                address</label>
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="w-5 h-5 text-gray-500 dark:text-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                                </svg>
                            </div>
                            <input class="hidden" type="email" id="email" name="email"
                                value="asfah21@gmail.com">
                            <input
                                class="block p-3 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Ketik saran..." type="text" name="feedback" id="email"
                                required="">
                        </div>
                        <div>
                            <button type="submit"
                                class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-primary-700 border-primary-600 sm:rounded-none sm:rounded-r-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Kirim</button>
                        </div>
                    </div>
                    <div
                        class="mx-auto max-w-screen-sm text-xs text-left text-gray-500 newsletter-form-footer dark:text-gray-300 italic">
                        Your thoughts matter to us, we’d love to hear 'em.</div>
                </form>
            </div>
        </div>
    </section>

    <script>
        document.getElementById('searchInput').addEventListener('input', function() {
            let filter = this.value.toLowerCase();
            let items = document.querySelectorAll('#itemList a');
            let sopDividers = document.querySelectorAll('#sopDivider'); // Ambil semua elemen "sopDivider"

            sopDividers.forEach(function(divider) { // Sembunyikan semua SOP Divider saat mengetik
                divider.style.display = 'none';
            });

            let hasVisibleItem = false;

            items.forEach(function(item) {
                let text = item.textContent.toLowerCase();
                if (text.includes(filter)) {
                    item.style.display = 'flex'; // Tampilkan item yang sesuai pencarian
                    hasVisibleItem = true;
                } else {
                    item.style.display = 'none'; // Sembunyikan item yang tidak sesuai
                }
            });

            if (filter === '') {
                sopDividers.forEach(function(divider) {
                    divider.style.display = 'flex';
                });
            }
        });
    </script>

@endsection
