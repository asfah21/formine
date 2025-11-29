@extends('layouts.app')

@section('title', 'Detail Timesheet')

@section('content')
@php
    use Carbon\Carbon;
    
    $totalHours = floor($timesheet->total_work_minutes / 60);
    $totalMins = $timesheet->total_work_minutes % 60;
    $opHours = floor($timesheet->operational_minutes / 60);
    $opMins = $timesheet->operational_minutes % 60;
    $opPercentage = $timesheet->total_work_minutes > 0 ? 
        round(($timesheet->operational_minutes / $timesheet->total_work_minutes) * 100) : 0;
@endphp

<section class="min-h-screen bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-7xl lg:py-16 !pb-40 !pt-28">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">
                Detail Timesheet
            </h1>
            <a href="{{ route('timesheets.hasil') }}" 
               class="text-white bg-gray-600 hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2">
                Kembali
            </a>
        </div>

        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 mb-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Informasi Dasar</h3>
                    <dl class="space-y-2">
                        <div class="flex justify-between">
                            <dt class="text-gray-600 dark:text-gray-300">Tanggal</dt>
                            <dd class="text-gray-900 dark:text-white">{{ \Carbon\Carbon::parse($timesheet->tanggal)->format('d/m/Y') }}</dd>
                        </div>
                        <div class="flex justify-between">
                            <dt class="text-gray-600 dark:text-gray-300">Shift</dt>
                            <dd class="text-gray-900 dark:text-white">{{ ucfirst($timesheet->shift) }}</dd>
                        </div>
                        <div class="flex justify-between">
                            <dt class="text-gray-600 dark:text-gray-300">Nama</dt>
                            <dd class="text-gray-900 dark:text-white">{{ $timesheet->nama }}</dd>
                        </div>
                        <div class="flex justify-between">
                            <dt class="text-gray-600 dark:text-gray-300">Unit</dt>
                            <dd class="text-gray-900 dark:text-white">{{ $timesheet->nomor_unit }}</dd>
                        </div>
                        <div class="flex justify-between">
                            <dt class="text-gray-600 dark:text-gray-300">HM Awal</dt>
                            <dd class="text-gray-900 dark:text-white">{{ $timesheet->hm_awal }}</dd>
                        </div>
                        <div class="flex justify-between">
                            <dt class="text-gray-600 dark:text-gray-300">HM Akhir</dt>
                            <dd class="text-gray-900 dark:text-white">{{ $timesheet->hm_akhir }}</dd>
                        </div>
                    </dl>
                </div>

                <div>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Ringkasan</h3>
                    <dl class="space-y-2">
                        <div class="flex justify-between">
                            <dt class="text-gray-600 dark:text-gray-300">Total Jam Kerja</dt>
                            <dd class="text-gray-900 dark:text-white">{{ $totalHours }}j {{ $totalMins }}m</dd>
                        </div>
                        <div class="flex justify-between">
                            <dt class="text-gray-600 dark:text-gray-300">Jam Produktif</dt>
                            <dd class="text-gray-900 dark:text-white">{{ $opHours }}j {{ $opMins }}m</dd>
                        </div>
                        <div class="flex justify-between">
                            <dt class="text-gray-600 dark:text-gray-300">Efisiensi</dt>
                            <dd class="text-gray-900 dark:text-white">{{ $opPercentage }}%</dd>
                        </div>
                    </dl>

                    @if($timesheet->catatan)
                        <div class="mt-4">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Catatan</h3>
                            <p class="text-gray-700 dark:text-gray-300 bg-gray-50 dark:bg-gray-700 p-3 rounded">
                                {{ $timesheet->catatan }}
                            </p>
                        </div>
                    @endif
                </div>

                @if($timesheet->signature_data)
                    <div class="md:col-span-2 lg:col-span-1">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Tanda Tangan</h3>
                        <div class="bg-white p-4 rounded-lg border border-gray-200 dark:border-gray-700">
                            <img src="{{ asset($timesheet->signature_data) }}" alt="Tanda Tangan" class="max-w-full h-auto">
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
            <div class="p-6">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Daftar Aktivitas</h3>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th class="px-4 py-3">Kode</th>
                                <th class="px-4 py-3">Keterangan</th>
                                <th class="px-4 py-3 text-center">Mulai</th>
                                <th class="px-4 py-3 text-center">Selesai</th>
                                <th class="px-4 py-3 text-center">Durasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($timesheet->entries as $entry)
                                <tr class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700">
                                    <td class="px-4 py-3 font-medium text-gray-900 dark:text-white">
                                        {{ $entry->code->code ?? 'N/A' }}
                                    </td>
                                    <td class="px-4 py-3">
                                        {{ $entry->description ?? '-' }}
                                    </td>
                                    <td class="px-4 py-3 text-center">
                                        {{ \Carbon\Carbon::parse($entry->start_at)->format('H:i') }}
                                    </td>
                                    <td class="px-4 py-3 text-center">
                                        {{ \Carbon\Carbon::parse($entry->end_at)->format('H:i') }}
                                    </td>
                                    <td class="px-4 py-3 text-center">
                                        {{ floor($entry->duration_minutes / 60) }}j {{ $entry->duration_minutes % 60 }}m
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-4 py-3 text-center">Tidak ada data aktivitas</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
