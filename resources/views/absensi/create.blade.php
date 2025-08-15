@extends('layouts.app')
@section('title', 'Buat Daftar Hadir')
@section('content')

    @php
        use Carbon\Carbon;
        $currentDate = Carbon::now('Asia/Singapore')->format('YYYY-MM-DD');
        $currentTime = Carbon::now('Asia/Singapore')->format('H:i');
    @endphp

    <section class="min-h-screen bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16 !pt-28">
            <img class="azvan h-auto max-w-full rounded-lg" src="{{ asset('storage/images/dh-ol.svg') }}" alt="image description">

            <div class="container mx-auto p-0">
                <form action="{{ route('absensi.store') }}" method="POST">
                    @csrf
                    <div class="border-b-2 py-4 mb-7">
                        <div id="toast-simple" class="mt-2 flex items-center justify-center w-full p-4 text-gray-500 bg-white rounded-lg shadow-sm dark:text-gray-400 dark:bg-gray-800" role="alert">
                            <svg class="w-5 h-5 text-blue-600 dark:text-blue-500 rotate-45 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 17 8 2L9 1 1 19l8-2Zm0 0V9"/>
                            </svg>
                            <div class="text-sm font-bold text-center">BUAT DAFTAR HADIR ONLINE </div>
                        </div>

                        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                            {{-- <div class="flex-1">
                                <div>
                                    <div class="text-lg font-bold text-gray-700 leading-tight dark:text-white">DAFTAR HADIR
                                        ONLINE</div>
                                </div>
                            </div> --}}
                        </div>
                    </div>

                    <!-- Step Content -->
                    <div class="grid gap-4 sm:gap-5 sm:grid-cols-2">

                        {{-- <div class="sm:col-span-2"> --}}
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Anda
                                </label>
                            <div class="relative flex items-center">
                                <input type="text" name="name" id="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Nama Anda" required />
                            </div>
                        </div>

                        <div>
                            <label for="agenda"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Daftar Hadir</label>
                            <div class="relative flex items-center">
                                <select id="agenda" name="agenda" required
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option value="">Pilih Jenis </option>
                                    <option value="P5M">P5M</option>
                                    <option value="Rapat">Rapat</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="judul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul Daftar Hadir
                                </label>
                            <div class="relative flex items-center">
                                <input type="text" name="judul" id="judul"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Judul Kegiatan" required />
                            </div>
                        </div>

                        <div>
                            <label for="lokasi"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lokasi</label>
                            <div class="relative flex items-center">
                                <select id="lokasi" name="lokasi" required
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option value="">Lokasi</option>
                                    <option value="Office Samaenre">Office Samaenre</option>
                                    <option value="Parkiran PDM">Parkiran PDM</option>
                                    <option value="Workshop Ruby">Workshop Ruby</option>
                                    <option value="Amethys">Amethys</option>
                                    <option value="IUP Ceria">IUP Ceria</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="duration"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Durasi</label>
                            <div class="relative flex items-center">
                                <select id="duration" name="duration" required
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option value="">Masa Aktif Sesi</option>
                                    <option value="1">1 Jam</option>
                                    <option value="2">2 Jam</option>
                                    <option value="3">3 Jam</option>
                                    <option value="4">4 Jam</option>
                                    <option value="5">5 Jam</option>
                                    <option value="6">6 Jam</option>
                                </select>
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <div class="flex justify-center items-center">
                                <button type="submit" class="mt-5 mb-20 w-32 px-5 py-2 bg-blue-500 text-white rounded-lg"
                                    id="submitButton">Buat</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

