<x-app-layout>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif
    <x-slot name="header">
        <div class="flex  justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Daftar Pasien') }}
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
    <div x-data="{ open: false }" class="pt-5 flex justify-end px-6">
        <button x-on:click="open = !open"
            class="inline-block rounded bg-blue-600 px-4 py-3 text-sm font-medium text-white transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:bg-blue-500">
            Tambah Pasien
        </button>
        <div x-show="open"
            class="py-12 backdrop-blur-3xl transition duration-150 ease-in-out z-10 fixed top-0 right-0 bottom-0 left-0"
            id="modal">
            <div role="alert" class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
                <div class="relative py-2 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">
                    <div class="w-full flex justify-start text-gray-600 mb-3">

                    </div>
                    <h1 class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-7">
                        Tambah pasien</h1>
                    <form method="POST" action="{{ route('admin-pasien.store') }}">
                        @csrf
                        <input type="hidden" name="password" value="admin#123">
                        <div class="w-full md:w-full px-3 mb-6">
                            <label for="user_id"
                                class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Nama
                                Pasien</label>
                            <input
                                class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none focus:border-[#98c01d]"
                                type="text" name="name" required />

                        </div>
                        <div class="w-full px-3 mb-6">
                            <label for="email"
                                class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Email</label>
                            <input
                                class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none focus:border-[#98c01d]"
                                type="text" name="email" required />
                        </div>
                        <div class="w-full px-3 mb-6">
                            <label for="alamat"
                                class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Alamat</label>
                            <textarea textarea rows="4"
                                class="appearance-none block w-full bg-white text-gray-900 font-medium border border-gray-400 rounded-lg py-3 px-3 leading-tight focus:outline-none focus:border-[#98c01d]"
                                type="text" name="alamat" required> </textarea>
                        </div>
                        <div class="w-full md:w-full px-3 mb-6">
                            <button type="submit"
                                class="appearance-none block w-full bg-green-700 text-gray-100 font-bold border border-gray-200 rounded-lg py-3 px-3 leading-tight hover:bg-green-600 focus:outline-none focus:bg-white focus:border-gray-500">Tambah
                                Pasien</button>
                        </div>
                    </form>
                    <button x-on:click="open = ! open"
                        class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="20"
                            height="20" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <line x1="18" y1="6" x2="6" y2="18" />
                            <line x1="6" y1="6" x2="18" y2="18" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-4 flex justify-center h-min-screen py-10">
        <div class="w-full lg:w-full m-1 bg-white shadow-lg text-lg rounded-sm border border-gray-200">
            <div class="overflow-x-auto rounded-lg p-3">
                <table class="table-auto w-full">
                    <thead class="text-sm font-semibold uppercase text-gray-800 bg-gray-50 mx-auto">
                        <tr>
                            <th class="p-2">
                                <div class="font-semibold text-center">No</div>
                            </th>
                            <th class="p-2">
                                <div class="font-semibold text-center">Nama Pasien</div>
                            </th>
                            <th class="p-2">
                                <div class="font-semibold text-center">Email</div>
                            </th>
                            <th class="p-2">
                                <div class="font-semibold text-center">Alamat</div>
                            </th>
                            <th class="p-2">
                                <div class="font-semibold text-center">Aksi</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pasiens as $pasien)
                            <tr x-data="{ open: false }">
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $pasien->name }}</td>
                                <td class="text-center">{{ $pasien->email }}</td>
                                <td class="text-center">{{ $pasien->alamat }}</td>
                                <td class="p-2">
                                    <div class="flex justify-center">
                                        <form action="{{ route('admin-pasien.destroy', $pasien->id) }}" method="POST"
                                            class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="deleteRecord(event)"
                                                class="rounded-md hover:bg-red-100 text-red-600 p-2 flex justify-between items-center"
                                                type="submit">
                                                {{ __('Delete') }}
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
