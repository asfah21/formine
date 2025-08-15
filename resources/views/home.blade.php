@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

<div class="mt-10 sm:col-span-2">
    <label for="nama_driver" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name Lengkap</label>
    <div class="relative flex items-center">
      <input type="text" name="nama_driver" id="nama_driver" x-model="nama_driver" @input="hideTooltip('nama_driver')" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tuliskan nama anda" required />
      <div id="tooltip-nama_driver" class="absolute right-3 invisible flex items-center px-3 py-1.5 text-xs font-medium text-white bg-red-600 rounded shadow-md">⚠️ Nama wajib diisi!</div>
    </div>
  </div>

@endsection
