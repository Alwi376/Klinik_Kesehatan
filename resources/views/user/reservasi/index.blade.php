<x-app-layout>
    <x-slot name="header">
        <div class="flex  justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Daftar Reservasi') }}
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
    <form action="{{ route('reservasi.index') }}" method="GET" class="flex justify-end pt-6 pr-4 space-x-4">
        <select name="status"
            class="rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            <option value="" selected disabled>Tampilkan data berdasarkan status</option>
            <option value="all" {{ request('status') == 'all' ? 'selected' : '' }}>Semua</option>
            <option value="menunggu" {{ request('status') == 'menunggu' ? 'selected' : '' }}>Menunggu</option>
            <option value="ditolak" {{ request('status') == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
            <option value="diterima" {{ request('status') == 'diterima' ? 'selected' : '' }}>Diterima</option>
        </select>
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
            Filter
        </button>
    </form>



    <div class="flex flex-col mx-3 mt-4 lg:flex-row">
        <div class="w-full lg:w-full m-1 bg-white shadow-lg text-lg rounded-sm border border-gray-200">
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
                                <div class="font-semibold text-center">Nama Pasien</div>
                            </th>
                            <th class="p-2">
                                <div class="font-semibold text-center">Hari & Jam reservasi</div>
                            </th>
                            <th class="p-2">
                                <div class="font-semibold text-center">Tanggal reservasi</div>
                            </th>
                            <th class="p-2">
                                <div class="font-semibold text-center">Keluhan Pasien</div>
                            </th>
                            <th class="p-2">
                                <div class="font-semibold text-center">Status</div>
                            </th>

                            <th class="p-2">
                                <div class="font-semibold text-center">Aksi</div>
                            </th>
                        </tr>
                        @forelse ($reservasis as $reservasi)
                            <tr x-data="{ open: false }">
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $reservasi->dokter->nama }}</td>
                                <td class="text-center">{{ $reservasi->pasien->name }}</td>
                                <td class="text-center">{{ $reservasi->jadwalDokter->hari }}
                                    ({{ $reservasi->jadwalDokter->jam_mulai }} -
                                    {{ $reservasi->jadwalDokter->jam_selesai }})
                                </td>
                                <td class="text-center">{{ $reservasi->tanggal_reservasi }}</td>
                                <td class="text-center">{{ $reservasi->keluhan }}</td>
                                <td class="text-center">
                                    {{ $reservasi->status }}
                                </td>
                                <td class="p-2">
                                    <div x-data="{ open: false }" class="flex justify-center">
                                        @if ($reservasi->status == 'menunggu')
                                            <a x-on:click="open = ! open"
                                                class="rounded-md hover:bg-green-100 text-green-600 p-2 flex justify-between items-center">
                                                Konfirmasi
                                            </a>
                                        @endif


                                        <form action="{{ route('reservasi.destroy', $reservasi->id) }}"
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
                                            class="flex justify-center backdrop-blur-sm py-2 transition duration-150 ease-in-out z-10 fixed top-0 right-0 bottom-0 left-0"
                                            id="modal">
                                            <div role="alert" class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
                                                <div
                                                    class="relative py-8 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">
                                                    <div class="w-full text-gray-600 mb-3">

                                                    </div>
                                                    <h1
                                                        class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-7">
                                                        Konfirmasi data reservasi</h1>
                                                    <form action="{{ route('reservasi.update', $reservasi->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('patch')
                                                        <select name="status"
                                                            class="rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                                            <option value="menunggu"
                                                                {{ $reservasi->status == 'menunggu' ? 'selected' : '' }}>
                                                                Menunggu
                                                            </option>
                                                            <option value="ditolak"
                                                                {{ $reservasi->status == 'ditolak' ? 'selected' : '' }}>
                                                                Ditolak
                                                            </option>
                                                            <option value="diterima"
                                                                {{ $reservasi->status == 'diterima' ? 'selected' : '' }}>
                                                                Diterima
                                                            </option>
                                                        </select>
                                                        <button type="submit">Simpan</button>
                                                    </form>

                                                    <button x-on:click="open = ! open"
                                                        class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-x" width="20"
                                                            height="20" viewBox="0 0 24 24" stroke-width="2.5"
                                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                                            stroke-linejoin="round">
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
                        @empty
                            <tr>
                                <td colspan="10" class="py-8 italic normal-case">
                                  <div class="flex justify-center items-center text-gray-600">
                                    <svg class="w-6 h-6" viewBox="-2.88 -2.88 29.76 29.76" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" transform="rotate(0)">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                    </g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g id="Warning / Stop_Sign">
                                            <path id="Vector"
                                                d="M5.75 5.75L18.25 18.25M12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21Z"
                                                stroke="#000000" stroke-width="0.72" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </g>
                                    </g>
                                </svg>


                                Data tidak dapat ditemukan
                                  </div>
                                </td>
                            </tr>
                        @endforelse
                    </thead>
                </table>
            </div>
        </div>

    </div>

    </div>
    <script>
        function hari(id) {
            // Sembunyikan semua div yang berisi jadwal
            @foreach ($doktors as $dokter)
                @if ($dokter->jadwalDokter->count() > 0)
                    document.getElementById('hari_{{ $dokter->id }}').classList.add('hidden');
                @endif
            @endforeach

            // Tampilkan div jadwal dokter yang dipilih
            document.getElementById('hari_' + id).classList.remove('hidden');
        }
    </script>
    <script>
        document.addEventListener('change', function(event) {
            const select = event.target.closest('select[name="status"]');
            if (select) {
                const konfirmasiButton = select.closest('tr').querySelector('[x-on\\:click]');
                if (select.value === 'menunggu') {
                    // Pastikan tombol tetap terlihat jika status 'menunggu'
                    konfirmasiButton.style.display = 'flex';
                } else {
                    // Tombol konfirmasi disembunyikan jika status selain 'menunggu'
                    konfirmasiButton.style.display = 'none';
                }
            }
        });
    </script>

</x-app-layout>
