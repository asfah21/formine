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

            <div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded">
                <h2 class="text-xl font-bold mb-4">Daftar Sesi Safety Talk</h2>

                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border p-2">Tanggal</th>
                            <th class="border p-2">Waktu</th>
                            <th class="border p-2">Status</th>
                            <th class="border p-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sessions as $session)
                            <tr class="text-center">
                                <td class="border p-2">{{ $session->date }}</td>
                                <td class="border p-2">{{ $session->start_time }} - {{ $session->end_time }}</td>
                                <td class="border p-2">
                                    <span
                                        class="px-2 py-1 text-white rounded {{ $session->is_active ? 'bg-green-500' : 'bg-red-500' }}">
                                        {{ $session->is_active ? 'Aktif' : 'Tidak Aktif' }}
                                    </span>
                                </td>
                                <td class="border p-2">
                                    <a href="{{ route('attendance.show', $session->id) }}"
                                        class="bg-blue-500 text-white px-4 py-2 rounded">
                                        Lihat Peserta
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
