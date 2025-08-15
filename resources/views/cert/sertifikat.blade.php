@extends('layouts.app')
@section('title', 'Daftar Hadir')
@section('content')

    <section class="min-h-screen bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16 !pt-28">
            <img class="azvan h-auto max-w-full rounded-lg" src="{{ asset('storage/images/cert.svg') }}" alt="image description">

            <div class="container mx-auto p-0">

                <form action="{{ route('cert.submit', $sesi->unique_code) }}" method="POST">
                    @csrf

                    <div class="pt-4 mb-2 text-center">
                        <div class="tracking-wide text-xs font-bold text-gray-500 dark:text-white mt-1 leading-tight">
                            PT GUNUNG SAMUDERA INTERNASIONAL
                        </div>
                        <div class="uppercase text-xl font-extrabold text-gray-700 leading-tight dark:text-white mt-0">
                            PESERTA <span class="text-blue-600 dark:text-blue-400">SERTIFIKAT</span> {{$sesi->agenda}}
                        </div>
                        <div class="tracking-wide text-xl uppercase font-bold text-gray-500 dark:text-white mt-1 leading-tight">
                           - {{$sesi->instansi}} -
                        </div>
                    </div>

                    <hr class="my-4 border-gray-400 dark:border-white-100 border-b-1" />

                    <div id="user-fields-wrapper">
                        <!-- Form baris pertama -->
                        <div class="user-form border p-3 mb-6 rounded-lg bg-gray-50 dark:bg-gray-800 relative">
                            <h3 class="font-bold text-gray-800 dark:text-white mb-3">Peserta 1</h3>
                            <div class="grid sm:grid-cols-3 gap-4">
                                <input type="text" name="users[0][name]" class="form-input w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Lengkap" required>
                                <input type="text" name="users[0][jabatan]" class="form-input w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Jabatan PKL" required>
                                <select name="users[0][nilai]"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 form-select w-full" required>
                                    <option value="">Pilih Nilai</option>
                                    <option value="Sangat Baik">Sangat Baik</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Cukup">Cukup</option>
                                    <option value="Kurang">Kurang</option>
                                </select>
                            </div>
                            <!-- Tombol Hapus (disembunyikan jika hanya satu baris) -->
                            <button type="button" class="remove-user absolute top-2 right-3 bg-red-500 text-white text-xs px-2 py-1 rounded hidden">Hapus</button>
                        </div>
                    </div>

                    <div class="flex justify-between items-center mb-10">

                        <button type="button"  id="add-user"  class="text-white bg-[#1da1f2] hover:bg-[#1da1f2]/90 focus:ring-4 focus:outline-none focus:ring-[#1da1f2]/50 font-medium rounded-lg text-sm px-4 py-2 text-center inline-flex items-center dark:focus:ring-[#1da1f2]/55 me-2 mb-2">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M9 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H7Zm8-1a1 1 0 0 1 1-1h1v-1a1 1 0 1 1 2 0v1h1a1 1 0 1 1 0 2h-1v1a1 1 0 1 1-2 0v-1h-1a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
                              </svg>
                            &nbsp;Tambah Peserta
                        </button>

                        <button type="submit" class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-[#1da1f2]/50 font-medium rounded-lg text-sm px-4 py-2 text-center inline-flex items-center dark:focus:ring-[#1da1f2]/55 me-2 mb-2">
                            <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M11.403 5H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-6.403a3.01 3.01 0 0 1-1.743-1.612l-3.025 3.025A3 3 0 1 1 9.99 9.768l3.025-3.025A3.01 3.01 0 0 1 11.403 5Z" clip-rule="evenodd"/>
                                <path fill-rule="evenodd" d="M13.232 4a1 1 0 0 1 1-1H20a1 1 0 0 1 1 1v5.768a1 1 0 1 1-2 0V6.414l-6.182 6.182a1 1 0 0 1-1.414-1.414L17.586 5h-3.354a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
                              </svg>
                            &nbsp;Kirim
                        </button>


                    </div>
                </form>


                {{-- <form action="{{ route('cert.submit', $sesi->unique_code) }}" method="POST" enctype="multipart/form-data" onsubmit="return submitForm();">
                    @csrf
                    <div class="pt-4 mb-2 text-center">
                        <div class="tracking-wide text-xs font-bold text-gray-500 dark:text-white mt-1 leading-tight">
                            PT GUNUNG SAMUDERA INTERNASIONAL
                        </div>
                        <div class="uppercase text-xl font-extrabold text-gray-700 leading-tight dark:text-white mt-0">
                            PESERTA <span class="text-blue-600 dark:text-blue-400">SERTIFIKAT</span> {{$sesi->agenda}}
                        </div>
                        <div class="tracking-wide text-xl uppercase font-bold text-gray-500 dark:text-white mt-1 leading-tight">
                           - {{$sesi->instansi}} -
                        </div>
                    </div>

                    <hr class="my-4 border-gray-400 dark:border-white-100 border-b-1" />

                    <hr class="mt-4 mb-8 border-gray-400 dark:border-white-100 border-b-1" />

                    <div class="grid gap-4 sm:gap-5 sm:grid-cols-2">
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
                            <div class="relative flex items-center">
                                <input type="text" name="name" id="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Ida Salehah" required />
                            </div>
                        </div>

                        <div>
                            <label for="jabatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jabatan Selama PKL</label>
                            <div class="relative flex items-center">
                                <input type="text" name="jabatan" id="jabatan"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Admin Operation" required />
                            </div>
                        </div>

                        <div>
                            <label for="nilai"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nilai Selama PKL</label>
                            <div class="relative flex items-center">
                                <select id="nilai" name="nilai" required
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option value="">Pilih Nilai </option>
                                    <option value="Sangat Baik">Sangat Baik</option>
                                    <option value="Baik" >Baik</option>
                                    <option value="Cukup" >Cukup</option>
                                    <option value="Kurang" >Kurang</option>
                                </select>
                            </div>
                        </div>

                        <!-- Tombol Kirim -->
                        <div class="sm:col-span-2">
                            <div class="flex justify-center items-center">
                                <button type="submit" class="mt-5 mb-20 w-32 px-5 py-2 bg-blue-500 text-white rounded-lg">
                                    Kirim
                                </button>
                            </div>
                        </div>

                    </div>
                </form> --}}

            </div>

        </div>
    </section>

    <script>
        let userIndex = 1;

        function updateRemoveButtons() {
            const userForms = document.querySelectorAll('.user-form');
            userForms.forEach((form, index) => {
                const removeBtn = form.querySelector('.remove-user');
                // Sembunyikan tombol hapus kalau cuma 1 form
                removeBtn.style.display = userForms.length > 1 ? 'block' : 'none';
                // Update judul peserta
                const title = form.querySelector('h3');
                title.textContent = `Peserta ${index + 1}`;
            });
        }

        document.getElementById('add-user').addEventListener('click', function () {
            const wrapper = document.getElementById('user-fields-wrapper');

            const newField = document.createElement('div');
            newField.classList.add('user-form', 'border', 'p-3', 'mb-6', 'rounded-lg', 'bg-gray-50', 'dark:bg-gray-800', 'relative');
            newField.innerHTML = `
                <h3 class="font-bold text-gray-800 dark:text-white mb-3">Peserta ${userIndex + 1}</h3>
                <div class="grid sm:grid-cols-3 gap-4">
                    <input type="text" name="users[${userIndex}][name]" class="form-input w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Lengkap" required>
                    <input type="text" name="users[${userIndex}][jabatan]" class="form-input w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Jabatan PKL" required>
                    <select name="users[${userIndex}][nilai]" class="form-select w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                        <option value="">Pilih Nilai</option>
                        <option value="Sangat Baik">Sangat Baik</option>
                        <option value="Baik">Baik</option>
                        <option value="Cukup">Cukup</option>
                        <option value="Kurang">Kurang</option>
                    </select>
                </div>
                <button type="button" class="remove-user absolute top-2 right-3 bg-red-500 text-white text-xs px-2 py-1 rounded">Hapus</button>
            `;
            wrapper.appendChild(newField);
            userIndex++;
            updateRemoveButtons();
        });

        // Delegasi event untuk tombol hapus
        document.getElementById('user-fields-wrapper').addEventListener('click', function (e) {
            if (e.target.classList.contains('remove-user')) {
                e.target.closest('.user-form').remove();
                updateRemoveButtons();
            }
        });

        // Inisialisasi pertama
        updateRemoveButtons();
    </script>

@endsection
