<x-app-layout>
    <x-slot name="header">
        <div class="flex  justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Daftar Jadwal Dokter') }}
            </h2>
            <form action="" method="get">
                <div class="flex border-1 border-gray-200 rounded-md focus-within:ring-2 ring-teal-500">
                    <input type="text"
                        class="w-full rounded-tl-md h-10 rounded-md px-2 py-3 text-sm text-gray-600 focus:outline-none"
                        placeholder="Search" name="search" value="{{ request()->get('search') }}" />
                    <button type="submit" class="rounded-tr-md rounded-br-md px-2 py-3 hidden md:block">
                        <svg class="w-4 h-4 fill-current" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </x-slot>
        <div class="flex flex-col mx-3 mt-6 lg:flex-row">
            <div class="w-full lg:w-1/3 m-1">
                <form class="w-full bg-white shadow-md p-6" method="POST" action="{{ route('jadwal.store') }}">
                    @csrf
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-full px-3 mb-6">
                            <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2"
                                htmlFor="dokter_id">Nama dokter</label>
                            <select name="dokter_id" id="dokter_id"
                                class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none focus:border-[#98c01d]">
                                @foreach ($doktors as $doktor)
                                    <option value="{{ $doktor->id }}">{{ $doktor->nama }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="w-full px-3 mb-6">
                            <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2"
                                htmlFor="hari">Hari</label>
                            <select name="hari" id="hari"
                            class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none focus:border-[#98c01d]">
                            <option selected disabled>Pilih Hari</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jum'at">Jum'at</option>
                            <option value="Sabtu">Sabtu</option>
                            <option value="Minggu">Minggu</option>
                            </select>
                        </div>
                        <div class="w-full px-3 mb-6">
                            <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2"
                                htmlFor="jam_mulai">Jam mulai</label>
                            <input
                                class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none focus:border-[#98c01d]"
                                type="time" name="jam_mulai" required> </textarea>
                        </div>
                        <div class="w-full px-3 mb-6">
                            <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2"
                                htmlFor="jam_selesai">Jam selesai</label>
                            <input
                                class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none focus:border-[#98c01d]"
                                type="time" name="jam_selesai" required> </textarea>
                        </div>

                        <div class="w-full md:w-full px-3 mb-6">
                            <button type="submit"
                                class="appearance-none block w-full bg-green-700 text-gray-100 font-bold border border-gray-200 rounded-lg py-3 px-3 leading-tight hover:bg-green-600 focus:outline-none focus:bg-white focus:border-gray-500">Tambah
                                jadwal</button>
                        </div>

                    </div>
                </form>
            </div>
            <div class="w-full lg:w-2/3 m-1 bg-white shadow-lg text-lg rounded-sm border border-gray-200">
                <div class="overflow-x-auto rounded-lg p-3">
                    <table class="table-auto w-full">
                        <thead class="text-sm font-semibold uppercase text-gray-800 bg-gray-50 mx-auto">
                            <tr>
                                <th class="p-2">
                                    <div class="font-semibold text-center">No</div>
                                </th>
                                <th class="p-2">
                                    <div class="font-semibold text-center">Nama dokter</div>
                                </th>
                                <th class="p-2">
                                    <div class="font-semibold text-center">Hari</div>
                                </th>
                                <th class="p-2">
                                    <div class="font-semibold text-center">Jam mulai</div>
                                </th>
                                <th class="p-2">
                                    <div class="font-semibold text-center">Jam selesai</div>
                                </th>
                                <th class="p-2">
                                    <div class="font-semibold text-center">Aksi</div>
                                </th>
                            </tr>
                            @foreach ($jadwal_dokters as $jadwal_dokter)
                                <tr x-data="{ open: false }">
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $jadwal_dokter->dokter->nama }}</td>
                                    <td class="text-center">{{ $jadwal_dokter->hari }}</td>
                                    <td class="text-center">{{ $jadwal_dokter->jam_mulai }}</td>
                                    <td class="text-center">{{ $jadwal_dokter->jam_selesai }}</td>
                                    <td class="p-2">
                                        <div class="flex justify-center">
                                            <a x-on:click="open = ! open"
                                                class="rounded-md hover:bg-green-100 text-green-600 p-2 flex justify-between items-center">
                                                <span>

                                                </span> Edit
                                            </a>

                                            <form action="{{ route('jadwal.destroy', $jadwal_dokter->id) }}"
                                                class="inline-block" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button onclick="deleteRecord(event)"
                                                    class="rounded-md hover:bg-red-100 text-red-600 p-2 flex justify-between items-center"
                                                    type="submit">
                                                    {{ __('Delete') }}



                                                </button>
                                            </form>

                                            <div x-show="open"
                                                class="py-12 bg-gray-700 transition duration-150 ease-in-out z-10 fixed top-0 right-0 bottom-0 left-0"
                                                id="modal">
                                                <div role="alert" class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
                                                    <div
                                                        class="relative py-8 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">
                                                        <div class="w-full flex justify-start text-gray-600 mb-3">

                                                        </div>
                                                        <h1
                                                            class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-7">
                                                            Masukkan Data Baru</h1>
                                                        <form action="{{ route('jadwal.update', $jadwal_dokter->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PATCH')
                                                            <label for="dokter_id"
                                                                class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Jadwal Dokter</label>

                                                                <select name="dokter_id" id="dokter_id"
                                                                class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none focus:border-[#98c01d]">
                                                                @foreach ($doktors as $doktor)
                                                                    <option value="{{ $doktor->id }}">{{ $doktor->nama }}
                                                                    </option>
                                                                @endforeach
                                                            </select>

                                                            <label for="hari"
                                                                class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Hari</label>
                                                            <input name="hari"
                                                                class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                                                value="{{ $jadwal_dokter->hari }}" required />
                                                            <label for="jam_mulai"
                                                                class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Jam Mulai</label>
                                                            <input name="jam_mulai" type="time"
                                                                class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                                                value="{{ $jadwal_dokter->jam_mulai }}" required />
                                                            <label for="jam_selesai"
                                                                class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Jam Selesai</label>
                                                            <input name="jam_selesai" type="time"
                                                                class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border"
                                                                value="{{ $jadwal_dokter->jam_selesai }}" required />

                                                            <div class="flex items-center justify-start w-full">
                                                                <button type="submit"
                                                                    class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-700 transition duration-150 ease-in-out hover:bg-green-600 bg-green-700 rounded text-white px-8 py-2 text-sm">Simpan
                                                                    Perubahan</button>
                                                                <button type="button" x-on:click="open = ! open"
                                                                    class="focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-gray-400 ml-3 bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded px-8 py-2 text-sm">Batal</button>
                                                            </div>
                                                        </form>
                                                        <button x-on:click="open = ! open"
                                                            class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-x" width="20"
                                                                height="20" viewBox="0 0 24 24" stroke-width="2.5"
                                                                stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" />
                                                                <line x1="18" y1="6" x2="6"
                                                                    y2="18" />
                                                                <line x1="6" y1="6" x2="18"
                                                                    y2="18" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </thead>
                    </table>
                </div>
            </div>

        </div>

        </div>
        <script>
            let modal = document.getElementById("modal");

            function modalHandler(val) {
                if (val) {
                    fadeIn(modal);
                } else {
                    fadeOut(modal);
                }
            }

            function fadeOut(el) {
                el.style.opacity = 1;
                (function fade() {
                    if ((el.style.opacity -= 0.1) < 0) {
                        el.style.display = "none";
                    } else {
                        requestAnimationFrame(fade);
                    }
                })
                ();
            }

            function fadeIn(el, display) {
                el.style.opacity = 0;
                el.style.display = display || "flex";
                (function fade() {
                    let val = parseFloat(el.style.opacity);
                    if (!((val += 0.2) > 1)) {
                        el.style.opacity = val;
                        requestAnimationFrame(fade);
                    }
                })();
            }
        </script>


</x-app-layout>
