<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pendaftaran Pasien') }}
        </h2>
    </x-slot>
    <div class="flex justify-between px-20 py-3 h-min-screen">
        <div class="w-full lg:w-1/3 m-1">
            <form class="w-full bg-white shadow-md p-6" method="POST" action="{{ route('pasien.store') }}">
                @csrf
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-full px-3 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2"
                            for="nama">Nama Pasien</label>
                        <input
                            class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none focus:border-[#98c01d]"
                            type="text" name="nama" placeholder="Masukkan nama pasien" required />
                    </div>
                    <div class="w-full md:w-full px-3 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2"
                            for="umur">Umur Pasien</label>
                        <input
                            class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none focus:border-[#98c01d]"
                            type="text" name="umur" placeholder="Masukkan umur pasien" required />
                    </div>
                    <div class="w-full px-3 mb-6">
                        <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2"
                            for="alamat">Alamat</label>
                        <textarea rows="4"
                            class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none focus:border-[#98c01d]"
                            type="text" name="alamat" placeholder="Masukkan alamat" required></textarea>
                    </div>

                    <div class="w-full md:w-full px-3 mb-6">
                        <button type="submit"
                            class="appearance-none block w-full bg-green-700 text-gray-100 font-bold border border-gray-200 rounded-lg py-3 px-3 leading-tight hover:bg-green-600 focus:outline-none focus:bg-white focus:border-gray-500">Tambah
                            pasien baru</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
