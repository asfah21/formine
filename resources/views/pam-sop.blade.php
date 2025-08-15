@extends('layouts.app')

@section('title', 'SOP & JSA PAM')

@section('content')

    <link type="text/css" rel="stylesheet" href="./my-css/my-sign-pad.css">

    <section class="min-h-screen bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-5xl lg:py-16 !pb-40 !pt-28">

            <img class="azvan h-auto max-w-full rounded-lg" src="{{ asset('storage/images/SOP-JSA-PAM.svg') }}"
                alt="image description">
            <div class="p-5 text-center">
                <h3 class="mt-1 mb-0 text-2xl font-extrabold tracking-tight leading-none md:text-2xl xl:text-2xl dark:text-white">
                    Search <a class="font-extrabold text-blue-500 dark:text-blue-400 hover:underline">SOP-IK-JSA</a> PAM
                </h3>
            </div>

            <div class="mx-auto">
                <!-- Input Pencarian -->
                <input type="text" id="searchInput" placeholder="Cari SOP-IK-JSA disini..."
                    class="w-full px-4 py-2 mb-4 text-sm border rounded-lg focus:ring focus:ring-blue-300 dark:bg-gray-800 dark:border-gray-600 dark:text-white" />

                <div id="sopDivider" class="flex items-center my-4 mt-4">
                    <span class="text-gray-700 dark:text-gray-300 font-medium mr-2">List SOP</span>
                    <hr class="flex-grow border-t border-gray-300 dark:border-gray-600">
                </div>

                <!-- Daftar Item -->
                <div id="itemList" class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 my-4">

                    @php
                        $sops = [
                            ['name' => 'Pemeliharaan Asset', 'link' => 'https://drive.google.com/file/d/17O72B-0hsFgGoCTj0vUGNuMZPbU6Ctwd/view?usp=drive_link'],
                            ['name' => 'Pemeliharaan Preventif & Korektif', 'link' => 'https://drive.google.com/file/d/1h3hNfo2BmSO7A3dzdIOGsC4GU00KezMV/view?usp=drive_link'],
                            ['name' => 'Tyre Management', 'link' => 'https://drive.google.com/file/d/1DkJBj5Z0W2-uVloJXaBtDKY0DvNfIh7u/view?usp=drive_link'],
                            ['name' => 'Kalibrasi', 'link' => 'https://drive.google.com/file/d/1yEUzJIu8fBlwP4vSrOdze2jy8NZ8CSRW/view?usp=drive_link'],
                            ['name' => 'Tools Facility Equipment Support', 'link' => 'https://drive.google.com/file/d/1iulynQbu_t7EkMSmGV0kfEGgWsq7g2EN/view?usp=drive_link'],
                        ];
                    @endphp

                    @foreach ($sops as $sop)
                        {{-- <a href="{{ $sop['link'] }}" target="_blank" --}}
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
                </div>

                <div id="sopDivider" class="flex items-center my-4 mt-8">
                    <span class="text-gray-700 dark:text-gray-300 font-medium mr-2">List IK</span>
                    <hr class="flex-grow border-t border-gray-300 dark:border-gray-600">
                </div>

                <!-- Daftar Item -->
                <div id="itemList" class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 my-4">

                    @php
                        $sops = [
                            ['name' => 'Melepas & Memasang Tyre dari Rim', 'link' => 'https://drive.google.com/file/d/1nc5Jkwv02r9rYlSM62d8IDL7OlgC6Gln/view?usp=drive_link'],
                            ['name' => 'Melepas & Memasang Tyre Grader', 'link' => 'https://drive.google.com/file/d/1ZsYXefhfxZg3u9i-9oxKpLtoAtoxBWtx/view?usp=drive_link'],
                            ['name' => 'Melepas & Memasang Tyre ADT', 'link' => 'https://drive.google.com/file/d/1cdGOpAB7LbALAmzClLJSMTNr8wAPpWw6/view?usp=drive_link'],
                            ['name' => 'Melepas & Memasang Tyre Rim Split', 'link' => 'https://drive.google.com/file/d/16H9r28GOBNDyx8JqnjCFDVxHcabIGmPC/view?usp=drive_link'],
                            ['name' => 'Penggunaan Dongkrak', 'link' => 'https://drive.google.com/file/d/1xE-mvAZF-q1ykuh2TRBD7ytwutgfkp4i/view?usp=drive_link'],
                            ['name' => 'Tyre Repair', 'link' => 'https://drive.google.com/file/d/1L9KK2Tvohw7leHxH0kYuWVMfX4ojtHrS/view?usp=drive_link'],
                            ['name' => 'Las & Cutting Oxygen Acytilene', 'link' => 'https://drive.google.com/file/d/181EAitmFKovPc3URl9BVr7hFEuVmcSD3/view?usp=drive_link'],
                            ['name' => 'Pengoperasian Kompresor Udara', 'link' => 'https://drive.google.com/file/d/1OpNOUEhQ5x9qPh28CiOq3JszhKLefP2n/view?usp=drive_link'],
                            ['name' => 'Pengoperasian Mesin Gerinda Tangan', 'link' => 'https://drive.google.com/file/d/1R7LSRX9S-wFbQ6aiE6135-pWxpsg3eYW/view?usp=drive_link'],
                            ['name' => 'Pengoperasian Mesin Bor Tangan', 'link' => 'https://drive.google.com/file/d/1Ih7IzqbkX9YBzUvxWDm-BTsX09-A-2HJ/view?usp=drive_link'],
                            ['name' => 'Remove & Install System Hydraulic', 'link' => 'https://drive.google.com/file/d/1Gse_6RyNgti2h2B8G3MMyjACD39uAf1Q/view?usp=drive_link'],
                            ['name' => 'Greasing', 'link' => 'https://drive.google.com/file/d/10oGSW_2XvtybsdppTzn_jtCPm3b8WrnS/view?usp=drive_link'],
                            ['name' => 'Pengelasan', 'link' => 'https://drive.google.com/file/d/1cIH7AgRoCRxM56-houaP57EFv3IErSRl/view?usp=drive_link'],
                            ['name' => 'Melepas dan Memasang Tyre', 'link' => 'https://drive.google.com/file/d/1s9eTNEIJrOEa8DdBFqt84itihfMvrEYH/view?usp=drive_link'],
                            ['name' => 'Backlog', 'link' => 'https://drive.google.com/file/d/13oDjyBr8ROah9crfXw2BYZ4GQnJ_hLcn/view?usp=drive_link'],
                            ['name' => 'Memasang Cylinder Unit Excavator', 'link' => 'https://drive.google.com/file/d/1UEeRLHyaR6cwDVUQjBpKuI1UKUmzJHIu/view?usp=drive_link'],
                            ['name' => 'Periksa & Setel Rem Tangan Unit DT', 'link' => 'https://drive.google.com/file/d/1ENqKKGs7k6MVI4I4rVBwe5FvfoRwmZjv/view?usp=drive_link'],
                            ['name' => 'Pengerjaan Undercarriage', 'link' => 'https://drive.google.com/file/d/10CWACNn_1ACi8JosuZcVqVnLOvQ409ps/view?usp=drive_link'],
                        ];
                    @endphp

                    @foreach ($sops as $sop)
                        {{-- <a href="{{ $sop['link'] }}" target="_blank" --}}
                        <a href="{{ $sop['link'] }}"
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

                            <span class="text-sm font-medium text-gray-900 dark:text-white">&nbsp;{{ $sop['name'] }}</span>
                        </a>

                    @endforeach
                </div>

                <div id="sopDivider" class="flex items-center my-4 mt-8">
                    <span class="text-gray-700 dark:text-gray-300 font-medium mr-2">List JSA</span>
                    <hr class="flex-grow border-t border-gray-300 dark:border-gray-600">
                </div>

                <div id="itemList" class="grid gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 my-4">
                    @php
                        $items = [
                            ['name' => 'Service Dump Truck (DT)', 'link' => 'https://drive.google.com/file/d/1gK9ixSEAujjsPgwvLjMT-i72mVU0SWpe/view?usp=drive_link'],
                            ['name' => 'Service Alat-Alat Berat', 'link' => 'https://drive.google.com/file/d/1gV0q6_lnvhFyH_m1FfepErXbyTI46ZWM/view?usp=drive_link'],
                            ['name' => 'Install Scraper Mud Excavator', 'link' => 'https://drive.google.com/file/d/1j7ZMJ4Uy_QpVduROk3LQBMBAdlZXzqZa/view?usp=drive_link'],
                            ['name' => 'Repair Bucket Excavator', 'link' => 'https://drive.google.com/file/d/1JkdGwXsTPxuB9-wLOvzfEuRJg4sYQrLR/view?usp=drive_link'],
                            ['name' => 'Replace Cutting Edge', 'link' => 'https://drive.google.com/file/d/16gTK9U8dgqiuP50pd-q7MharZpsCgkZ_/view?usp=drive_link'],
                            ['name' => 'Memarkir Unit', 'link' => 'https://drive.google.com/file/d/1N3Rzh3C8N95zYer7s9_Q9RkkJx8I_oEW/view?usp=drive_link'],
                            ['name' => 'Mengisi Angin dan Inspeksi Tyre', 'link' => 'https://drive.google.com/file/d/1o5UhbvKp0Ix89ifMs3scyzQo7rB9X8cN/view?usp=drive_link'],
                            ['name' => 'Ganti Oli', 'link' => 'https://drive.google.com/file/d/1smkjmG2aPPqMIzIRUO6TZAr4CmbkN7cN/view?usp=drive_link'],
                            ['name' => 'Menggunakan Las Oxy-Acetylene', 'link' => 'https://drive.google.com/file/d/1yGK0KTHIFrbTs8RUcPcTzQ9zyIHr0GZp/view?usp=drive_link'],
                            ['name' => 'Membersihkan Area Workshop', 'link' => 'https://drive.google.com/file/d/1REdga7a8iejYUjrJqx-9ol6nvb9Izk6y/view?usp=drive_link'],
                            ['name' => 'Mengangkat Barang secara Manual', 'link' => 'https://drive.google.com/file/d/1iTz6gh5l2hcQw24htDQI3S4DF7vjmFLf/view?usp=drive_link'],
                            ['name' => 'Perbaikan Alat diluar Workshop', 'link' => 'https://drive.google.com/file/d/1wUIh5ntW4ciyJ1cjNmHc_5VTJBV6QyWw/view?usp=drive_link'],
                            ['name' => 'Tembak Gemuk Pengangkut Truck', 'link' => 'https://drive.google.com/file/d/1N9Sq1g_DO1NyRucS3Ic13Jb39WhX-gsW/view?usp=drive_link'],
                            ['name' => 'Install Guard Bottom Sweeper Join', 'link' => 'https://drive.google.com/file/d/1KT6HTjHp1bnkaLI4ZDEFXF9XFe5EvJTG/view?usp=drive_link'],
                            ['name' => 'Pengelasan diruang Terbuka', 'link' => 'https://drive.google.com/file/d/1phPXnWEMGiGAl6jcebqy5MVT7AT12--x/view?usp=drive_link'],
                            ['name' => 'Pengoperasian Tower Lamp', 'link' => 'https://drive.google.com/file/d/11hkbfoX9G7J2nfDgGhfq885HD5Rc3-l_/view?usp=drive_link'],
                            ['name' => 'Pemindahan Tower Lamp', 'link' => 'https://drive.google.com/file/d/1o9x41H9IP0Hb-_OxD-w3qcDnxkmfPapt/view?usp=drive_link'],
                            ['name' => 'Pengelasan Pipa Fuel Storage', 'link' => 'https://drive.google.com/file/d/1whGNwGjKM9T4Jg6VkW-iIDSCI2RdGjzC/view?usp=drive_link'],
                            ['name' => 'Pengisian Angin dengan Kerangkeng', 'link' => 'https://drive.google.com/file/d/1hM00uGgL-BBs_UaPa3rjfVXA-nM4AesJ/view?usp=drive_link'],
                            ['name' => 'Remove & Install Engine', 'link' => 'https://drive.google.com/file/d/1Rx4EgdXVZwXLN0HS7BRidWng-Ef-DSYV/view?usp=drive_link'],
                            ['name' => 'Pembangunan Workshop', 'link'=> 'https://drive.google.com/file/d/12QIir0y8cXxLRcmMv0bS9PjIDmE7zndp/view?usp=drive_link'],
                            ['name' => 'Lifting Crane', 'link'=> 'https://drive.google.com/file/d/1kkPHkMqPQuDZW8hgYKB0YDecuicNF7vU/view?usp=drive_link'],
                            ['name' => 'Remove & Install Turnable Bearing', 'link'=> 'https://drive.google.com/file/d/18bhyQjgW7h30W6Z9fhzM0lS_zxo-dVUt/view?usp=drive_link'],
                        ];
                    @endphp

                    @foreach ($items as $item)
                        {{-- <a href="{{ $item['link'] }}" target="_blank" --}}
                        <a href="{{ $item['link'] }}"
                            class="relative flex items-center rounded-lg border border-gray-200 bg-white px-4 py-2 hover:bg-gray-50
                                dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">

                            <span class="absolute top-0 right-0 bg-blue-500 text-white text-[0.6rem] font-bold px-2 py-[2px] shadow-md"
                                style="border-bottom-left-radius: 10px; border-top-right-radius: 7px;">&nbsp;JSA
                            </span>

                            <svg class="me-2 h-4 w-4 shrink-0 text-gray-900 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <rect x="2" y="2" width="20" height="20" rx="2" stroke="currentColor"
                                    stroke-width="2" fill="none" />
                                <text x="50%" y="61%" text-anchor="middle" font-size="8" font-family="Arial, sans-serif"
                                    fill="currentColor" font-weight="bold">JSA</text>
                            </svg>

                            <span class="text-sm font-medium text-gray-900 dark:text-white">&nbsp;{{ $item['name'] }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-10 px-10 mb-10 sm:py-10 bg-gray-50 lg:py-20 dark:bg-gray-800 border-t border-b border-gray-100 dark:border-gray-700">
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
