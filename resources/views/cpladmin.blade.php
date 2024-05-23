<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Universitas Muhammadiyah</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body class="font-sans">

    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                        aria-controls="logo-sidebar" type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                    <span class="text-2xl font-black tracking-tight dark:text-white">Dasboard
                        Admin</span>
                </div>
            </div>
        </div>
    </nav>

    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="prestasiadmin"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                        </svg>
                        <span class="ms-3">Prestasi</span>
                    </a>
                </li>
                <li>
                    <a href="cpladmin"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-black dark:group-hover:text-white"
                            aria-hidden="true" height="800px" width="800px" version="1.1" id="_x32_"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 512 512" xml:space="preserve">

                            <g>
                                <path class="st0" d="M462.277,306.305v-84.362h-9.334c-39.53,0.008-74.723,6.847-103.747,15.651
		c-5.69-11.507-12.261-23.387-17.891-33.162c24.955-21.296,40.8-52.956,40.8-88.327C372.104,51.978,320.119,0,256,0
		c-64.12,0-116.105,51.978-116.105,116.105c0,35.372,15.845,67.032,40.8,88.327c-5.63,9.775-12.201,21.655-17.891,33.162
		c-29.024-8.804-64.217-15.644-103.74-15.651h-9.334v84.362c-28.174,0.553-38.941,23.782-38.941,52.374s10.767,51.821,38.941,52.366
		v67.152l9.005,0.314l0.262,0.008c2.8,0.112,28.479,1.21,63.261,5.868c34.774,4.645,78.672,12.896,117.657,27.053l1.546,0.56h29.076
		l1.546-0.56c40.248-14.62,85.721-22.931,121.003-27.494c17.637-2.285,32.735-3.651,43.399-4.436
		c5.331-0.395,9.542-0.649,12.425-0.799c1.434-0.074,2.538-0.127,3.27-0.157c0.373-0.014,0.642-0.03,0.821-0.036l0.269-0.008
		l9.005-0.314v-67.152c28.166-0.545,38.933-23.774,38.933-52.366S490.442,306.858,462.277,306.305z M230.746,488.628
		c-37.895-12.052-77.694-19.063-109.429-23.185c-23.402-3.039-42.398-4.48-52.927-5.115v-52.314
		c20.251-7.243,34.745-26.59,34.745-49.334c0-22.745-14.494-42.092-34.745-49.342v-68.592c48.618,1.396,90.06,13.493,119.809,25.604
		c15.808,6.436,28.307,12.866,36.797,17.66c2.196,1.232,4.107,2.352,5.75,3.345V488.628z M268.813,492.817
		c-0.5,0.171-1,0.343-1.5,0.522h-22.625c-0.501-0.179-1.001-0.351-1.501-0.522V293.47h25.626V492.817z M443.609,309.337
		c-20.25,7.25-34.737,26.597-34.737,49.342c0,22.744,14.486,42.092,34.737,49.334v52.314c-10.529,0.635-29.524,2.076-52.926,5.115
		c-31.735,4.122-71.527,11.133-109.429,23.185V287.354c8.116-4.876,22.998-13.097,43.294-21.304
		c29.689-12.014,70.855-23.924,119.062-25.306V309.337z" />
                            </g>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Capaian Pembelajaran</span>
                    </a>
                </li>
                <li>
                    <a href="profesiadmin"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
                        </svg>

                        <span class="flex-1 ms-3 whitespace-nowrap">Profesi Lulusan</span>
                    </a>
                </li>
                <li>
                    <a href="spekadmin"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Spesifikasi</span>
                    </a>
                </li>
                <li>
                    <a href="fasilitasadmin"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Fasilitas</span>
                    </a>
                </li>
                <li>
                    <a href="routeradmin"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                        </svg>

                        <span class="flex-1 ms-3 whitespace-nowrap">Router</span>
                    </a>
                </li>
                <li>
                    <a href="/register"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                            <path
                                d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                            <path
                                d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Sign Up</span>
                    </a>
                </li>
                <div class="p-3 flex items-center justify-between border-t ">
                    <div class="flex items-center">
                        <img class="rounded-full h-10 w-10" src="/gambar/profile.png">
                        <div class="ml-2 flex flex-col">
                            @if(Auth::check())
                                <div class="leading-snug text-sm text-gray-900 font-bold">{{ Auth::user()->name }}</div>
                                <div class="leading-snug text-xs text-gray-600">{{ Auth::user()->username }}</div>
                            @else
                                <div class="leading-snug text-sm text-gray-900 font-bold">Guest</div>
                                <div class="leading-snug text-xs text-gray-600">guest</div>
                            @endif
                        </div>
                    </div>
                    <a href="/logout">
                        <button
                            class="h-8 px-3 text-xs font-bold text-red-600 border border-red-600 rounded-full hover:bg-red-200">
                            Sign Out</button>
                    </a>
                </div>
            </ul>
        </div>
    </aside>

    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <h2 class="text-2xl font-bold tracking-tight dark:text-white">Capaian Pembelajaran</h2>
            <a href="/tambahcapaian"><button
                    class="mt-4 mb-4 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Tambah
                    Capaian</button></a>
            <a href="/tambahdeskripsi"><button
                    class="mt-4 mb-4 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Tambah
                    Deskripsi Capaian</button></a>


            <div>
                <div class="ml-4 mr-4 bg-white rounded-t-lg dark:bg-gray-800">
                    <div class="mt-4 mb-4 relative shadow-md sm:rounded-lg">
                        <table class="rounded-t-lg table-auto text-sm text-left rtl:text-right ">
                            <thead
                                class="mt-4 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-4 py-2">Nama</th>
                                    <th scope="col" class="px-4 py-2">Action</th>
                                    <th scope="col" class="px-4 py-2">Deskripsi Capaian</th>
                                    <th scope="col" class="px-4 py-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($capaian as $c)
                                        <tr>

                                            <td scope="col" class="border px-4 py-3">{{$c->judul_capaian}}</td>
                                            <td scope="col" class="border px-4 py-3">
                                                <button data-modal-target="popup-modal1" data-modal-toggle="popup-modal1"
                                                    type="button"
                                                    class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                                            </td>

                                            <div id="popup-modal1" tabindex="-1"
                                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <div class="relative p-4 w-full max-w-md max-h-full">
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                        <button type="button"
                                                            class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                            data-modal-hide="popup-modal1">
                                                            <svg class="w-3 h-3" aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 14 14">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <div class="p-4 md:p-5 text-center">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                            </path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="w-16 h-16 flex items-center text-red-500 mx-auto"
                                                                viewBox="0 0 20 20" fill="currentColor">
                                                                <path fill-rule="evenodd"
                                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                                    clip-rule="evenodd" />
                                                            </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                                class="w-4 h-4 -m-1 flex items-center text-red-500 mx-auto"
                                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">

                                                                <h2 class="text-xl font-bold py-4 ">Are you sure?</h3>
                                                                    <p class="text-sm text-gray-500 px-8">Do you really want to
                                                                        delete your account?
                                                                        This process cannot be undone</p>
                                                                    <a href="/hapuscapaian/{{ $c->id }}">
                                                                        <button data-modal-hide="popup-modal1" type="button"
                                                                            class="mt-8 text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                                            Yes, I'm sure
                                                                        </button>
                                                                    </a>
                                                                    <button data-modal-hide="popup-modal1" type="button"
                                                                        class="mt-8 py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No,
                                                                        cancel
                                                                    </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            @foreach($deskripsiCapaian as $deskripsi)
                                                        @if($deskripsi->capaian_id == $c->id)
                                                                    <td scope="col" class="border px-4 py-3">{{$deskripsi->deskripsi}}</td>
                                                                    <td scope="col" class="border px-4 py-3">
                                                                        <a href="/editdeskripsi/{{$deskripsi->id}}">
                                                                            <button
                                                                                class="mr-2 font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</button></a>
                                                                        <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                                                                            type="button"
                                                                            class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                                                                    </td>
                                                                    <div id="popup-modal" tabindex="-1"
                                                                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                                        <div class="relative p-4 w-full max-w-md max-h-full">
                                                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                                                <button type="button"
                                                                                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                                                    data-modal-hide="popup-modal">
                                                                                    <svg class="w-3 h-3" aria-hidden="true"
                                                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                                        viewBox="0 0 14 14">
                                                                                        <path stroke="currentColor" stroke-linecap="round"
                                                                                            stroke-linejoin="round" stroke-width="2"
                                                                                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                                                    </svg>
                                                                                    <span class="sr-only">Close modal</span>
                                                                                </button>
                                                                                <div class="p-4 md:p-5 text-center">
                                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                                        stroke-width="2"
                                                                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                                                    </path>
                                                                                    </svg>
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        class="w-16 h-16 flex items-center text-red-500 mx-auto"
                                                                                        viewBox="0 0 20 20" fill="currentColor">
                                                                                        <path fill-rule="evenodd"
                                                                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                                                            clip-rule="evenodd" />
                                                                                    </svg><svg xmlns="http://www.w3.org/2000/svg"
                                                                                        class="w-4 h-4 -m-1 flex items-center text-red-500 mx-auto"
                                                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">

                                                                                        <h2 class="text-xl font-bold py-4 ">Are you sure?</h3>
                                                                                            <p class="text-sm text-gray-500 px-8">Do you really want to
                                                                                                delete your account?
                                                                                                This process cannot be undone</p>
                                                                                            <a href="/deletedeskripsi/{{ $deskripsi->id }}">
                                                                                                <button data-modal-hide="popup-modal" type="button"
                                                                                                    class="mt-8 text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                                                                    Yes, I'm sure
                                                                                                </button>
                                                                                            </a>
                                                                                            <button data-modal-hide="popup-modal" type="button"
                                                                                                class="mt-8 py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No,
                                                                                                cancel
                                                                                            </button>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </tr>
                                                            </tbody>
                                                        @endif
                                            @endforeach
                                @endforeach
                        </table>
                        ​
                    </div>
                </div>
            </div>

        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>