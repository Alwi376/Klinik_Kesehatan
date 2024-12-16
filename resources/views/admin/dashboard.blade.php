<x-app-layout>
    <x-slot name="header">
        <div class="flex  justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </x-slot>

    <div class="mt-12 container mx-auto">
        <div class="mb-12 grid gap-y-10 gap-x-6 md:grid-cols-2 xl:grid-cols-4">
            <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                <div
                    class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-blue-600 to-blue-400 text-white shadow-blue-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                    <svg fill="#ffffff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" class="w-6 h-6" viewBox="0 0 484.814 484.814"
                        xml:space="preserve">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g>
                                <g id="Layer_2_44_">
                                    <g>
                                        <path
                                            d="M147.937,344.352c-7.859,0-14.228,6.375-14.228,14.229c0,7.855,6.368,14.229,14.228,14.229 c7.857,0,14.225-6.373,14.225-14.229C162.161,350.727,155.794,344.352,147.937,344.352z">
                                        </path>
                                        <path
                                            d="M373.898,332.414c-16.762-6.044-30.195-12.256-41.078-19.016c-1.912-1.28-2.59-1.438-4.26-2.358 c-6.137-3.383-12.02-0.59-13.711,1.563c-0.467,0.594-0.943,1.186-1.43,1.775c-12.75,14.913-54.729,32.975-54.744,32.979 c-3.285,0.898-5.703,3.896-5.703,7.468c0,0.006,0,0.013,0,0.013l-0.002,0.008l0.146,51.587c0,31.793-25.656,57.656-57.157,57.656 c-31.563,0-57.242-25.863-57.242-57.656v-21.589c-10.882-3.775-18.706-14.092-18.706-26.263 c0-15.366,12.457-27.825,27.825-27.825c15.365,0,27.823,12.459,27.823,27.825c0,11.903-7.489,22.034-18.003,26.008v20.877 c0,22.528,17.158,40.875,38.281,40.875c21.088,0,38.268-18.347,38.268-40.875l0.099-50.294l0.001-0.014 c0-0.005-0.001-0.009-0.001-0.014l0.001-0.325c0,0-0.011-0.025-0.02-0.048c-0.159-3.213-2.543-5.594-5.171-6.922 c-0.033-0.017-44.73-22.312-57.838-38.996c-1.691-2.152-7.573-4.945-13.71-1.563c-11.44,6.306-26.995,11.507-46.654,18.597 c-60.62,21.854-78.094,44.147-78.094,59.353c0,15.179,0,99.575,0,99.575h209.436h0.305h209.437c0,0,0-84.396,0-99.575 C451.994,370.035,434.523,354.268,373.898,332.414z">
                                        </path>
                                        <path
                                            d="M143.533,146.218c3.119,40.98,19.417,23.318,22.778,41.27c6.613,35.324,20.119,36.678,24.861,48.836 c1.064,2.734,1.689,15.803,1.689,20.143c0,14.541-0.796,22.244-6.487,29.627c-1.292,1.676-3.469,7.148-0.686,11.299 c12.588,18.771,36.885,34.552,59.717,34.845c22.832-0.293,47.128-16.072,59.718-34.845c2.781-4.149,0.604-9.622-0.688-11.299 c-5.689-7.383-6.488-15.086-6.488-29.627c0-4.34,0.625-17.408,1.689-20.143c4.742-12.158,18.248-13.512,24.861-48.836 c3.361-17.951,19.66-0.289,22.779-41.27c0-16.332-8.898-20.393-8.898-20.393s4.523-24.17,6.295-42.768 C346.869,59.875,331.143,0,247.264,0c-0.305,0-1.319,0-1.858,0c-0.541,0-1.556,0-1.861,0c-83.877,0-99.605,59.875-97.41,83.057 c1.772,18.598,6.295,42.768,6.295,42.768S143.533,129.886,143.533,146.218z">
                                        </path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="p-4 text-right">
                    <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">Jumlah
                        Dokter</p>
                    <h4
                        class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                        {{ $jumlah_dokter }}</h4>
                </div>
            </div>
            <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                <div
                    class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-pink-600 to-pink-400 text-white shadow-pink-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                        class="w-6 h-6 text-white">
                        <path fill-rule="evenodd"
                            d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="p-4 text-right">
                    <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">Jumlah
                        Pasien</p>
                    <h4
                        class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                        {{ $jumlah_pasien }}</h4>
                </div>
            </div>
            <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                <div
                    class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-green-600 to-green-400 text-white shadow-green-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                    <svg fill="#ffffff" class="w-6 h-6" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 56 56" xml:space="preserve">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g>
                                <path
                                    d="M30.852,19.618l13.219-9.013l-4.864-7.123C37.719,1.302,35.243,0,32.585,0c-1.612,0-3.166,0.479-4.495,1.387 c-1.758,1.2-2.945,3.021-3.342,5.126c-0.397,2.105,0.046,4.233,1.247,5.991L30.852,19.618z">
                                </path>
                                <path
                                    d="M51.614,21.65L45.2,12.257L31.98,21.27l6.421,9.403c1.488,2.18,3.964,3.482,6.623,3.482c1.612,0,3.166-0.479,4.495-1.387 C53.161,30.281,54.101,25.293,51.614,21.65z">
                                </path>
                                <path
                                    d="M31.36,34.868c2.864-3.355,2.464-8.415-0.891-11.279c-1.441-1.229-3.282-1.907-5.186-1.907 c-2.354,0-4.575,1.02-6.093,2.798l-5.563,6.517L25.289,41.98L31.36,34.868z">
                                </path>
                                <path
                                    d="M12.327,32.52l-7.42,8.693c-2.864,3.355-2.464,8.415,0.891,11.279c1.441,1.229,3.283,1.907,5.186,1.907 c2.354,0,4.575-1.02,6.093-2.798l6.912-8.098L12.327,32.52z">
                                </path>
                                <path
                                    d="M30.703,38.717L18.598,52.899c-0.132,0.155-0.278,0.293-0.418,0.439c0.01,0.001,0.019,0.004,0.029,0.005l11.67,1.39 l2.224-15.848L30.703,38.717z">
                                </path>
                                <path
                                    d="M41.946,40.056L34.09,39.12l-2.224,15.848l8.189,0.975C40.371,55.981,40.687,56,40.999,56c0,0,0,0,0.001,0 c4.05,0,7.465-3.033,7.944-7.055C49.465,44.565,46.326,40.577,41.946,40.056z">
                                </path>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="p-4 text-right">
                    <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">Stok
                        Obat</p>
                    <h4
                        class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                        {{ $stok_obat }}</h4>
                </div>
            </div>

        </div>
        <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
            <div class="mb-4 flex items-center justify-between">
                <div class="flex w-full">
                    <h3 class="text-xl font-bold text-gray-900 mb-2 w-full">Riwayat Rekam Medis</h3>
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

            </div>
            <div class="flex flex-col mt-8">
                <div class="overflow-x-auto rounded-lg">
                    <div class="align-middle inline-block min-w-full">
                        <div class="shadow overflow-hidden sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-100">
                                    <tr>
                                        <th scope="col"
                                            class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Pasien
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Diagnosa
                                        </th>
                                        <th scope="col"
                                            class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Tanggal
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    @foreach ($rekamMedis as $rekam_medis)
                                        <tr x-data="{ open: false }">
                                            <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                {{ $rekam_medis->pasien->name }}
                                            </td>
                                            <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                {{ $rekam_medis->diagnosa }}
                                            </td>
                                            <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                {{ $rekam_medis->tanggal_periksa }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>


</x-app-layout>
