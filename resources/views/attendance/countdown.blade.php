@extends('layouts.app')
@section('title', 'P5M - Daftar Hadir')
@section('content')

    @php
        use Carbon\Carbon;
        $currentDate = Carbon::now('Asia/Singapore')->format('YYYY-MM-DD');
        $currentTime = Carbon::now('Asia/Singapore')->format('H:i');
    @endphp

    <section class="min-h-screen bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-5xl lg:py-16 !pb-32 !pt-28">
            <img class="azvan h-auto max-w-full rounded-lg" src="{{ asset('storage/images/IT-WO.svg') }}"
                alt="image description">
            <div class="p-5 text-center">
                <h3
                    class="mt-1 mb-0 text-2xl font-extrabold tracking-tight leading-none md:text-2xl xl:text-2xl dark:text-white">
                    IT <a class="font-extrabold text-blue-500 dark:text-blue-400 hover:underline">Work Order</a> Request
                </h3>
            </div>

            <div class="max-w-lg mx-auto p-6 bg-white shadow-md rounded text-center">
                <h2 class="text-xl font-bold mb-4">Sesi Belum Dibuka</h2>
                <p class="text-gray-600">Sesi akan dibuka dalam:</p>
                <p id="countdown" class="text-2xl font-bold text-red-500 mt-2"></p>
            </div>

            <script>
                let countdown = {{ $countdown }};

                function updateCountdown() {
                    let hours = Math.floor(countdown / 3600);
                    let minutes = Math.floor((countdown % 3600) / 60);
                    let seconds = countdown % 60;
                    document.getElementById('countdown').textContent = `${hours} jam ${minutes} menit ${seconds} detik`;
                    countdown--;
                    if (countdown < 0) {
                        location.reload();
                    } else {
                        setTimeout(updateCountdown, 1000);
                    }
                }
                updateCountdown();
            </script>
        </div>
    </section>
@endsection
