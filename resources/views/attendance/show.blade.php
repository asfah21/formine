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
                <h2 class="text-xl font-bold mb-4">Detail Sesi: {{ $session->date }} ({{ $session->start_time }} -
                    {{ $session->end_time }})</h2>

                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border p-2">Nama</th>
                            <th class="border p-2">Jabatan</th>
                            <th class="border p-2">Jam Tidur</th>
                            <th class="border p-2">Sehat</th>
                            <th class="border p-2">Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($session as $sesi)
                            <tr class="text-center">
                                <td class="border p-2">{{ $sesi->name }}</td>
                                <td class="border p-2">{{ $sesi->position }}</td>
                                <td class="border p-2">{{ $sesi->sleep_time }}</td>
                                <td class="border p-2">{{ $sesi->is_healthy ? 'Ya' : 'Tidak' }}</td>
                                <td class="border p-2">
                                    <img src="{{ asset('storage/' . $sesi->photo) }}" alt="Foto Selfie"
                                        class="w-16 h-16 rounded">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <a href="{{ route('attendance.index') }}"
                    class="mt-4 inline-block bg-gray-500 text-white px-4 py-2 rounded">Kembali</a>
            </div>
        </div>
    </section>
@endsection
