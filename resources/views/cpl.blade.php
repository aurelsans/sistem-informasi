<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Universitas Muhammadiyah</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <link href="/dist/output.css" rel="stylesheet" />
</head>

<body class="font-sans">

    <nav class="bg-white border-gray-200 fixed w-full z-20 top-0 start-0  dark:bg-gray-900">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto p-4">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center flex items-center space-x-3 rtl:space-x-reverse"
                id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                <img src="gambar/logo.png" class="h-20 w-auto sm:max-w-full" alt="...">

                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <li class="me-2 ml-auto" role="presentation">
                        <button
                            class="md:hidden inline-block p-4 rounded-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 
                     focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            type="button" data-drawer-target="drawer-body-scrolling"
                            data-drawer-show="drawer-body-scrolling" data-drawer-body-scrolling="true"
                            aria-controls="drawer-body-scrolling">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 17 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                            </svg>
                        </button>
                    </li>
                </div>


                <!-- drawer init and show -->
                <div id="mega-menu" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
                    <ul class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
                        <!-- Beranda-->
                        <li class="me-2" role="presentation">
                            <a href="/indexsi" class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab"
                                data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                                aria-selected="false">Beranda</a>
                        </li>
                        <!-- End Beranda -->

                        <!--Penelitian-->
                        <li class="me-2" role="presentation">
                            <button id="penelitian-tab" data-dropdown-toggle="dropdownNavbarPen"
                                data-dropdown-trigger="hover" class="inline-block p-4 border-b-2 rounded-t-lg hover:text-blue-600 hover:border-blue-600 dark:hover:text-gray-300
                     flex items-center justify-between w-full">Penelitian
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <!-- Dropdown Penelitian -->
                            <div id="dropdownNavbarPen"
                                class="z-10 hidden font-normal bg-white divide-y divide-blue-600 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="penelitian-tab">
                                    <li>
                                        <a href="/laboratorium"
                                            class="block px-4 py-2 text-left dark:hover:bg-gray-600 dark:hover:text-white">
                                            Laboratorium</a>
                                    </li>
                                    <li>
                                        <a href="/kkdk"
                                            class="block px-4 py-2 text-left dark:hover:bg-gray-600 dark:hover:text-white">KKDK</a>
                                    </li>
                                    <li>
                                        <a href="/riset"
                                            class="block px-4 py-2 text-left dark:hover:bg-gray-600 dark:hover:text-white">Riset</a>
                                    </li>
                                    <li>
                                        <a href="http://103.63.25.9/"
                                            class="block px-4 py-2 text-left dark:hover:bg-gray-600 dark:hover:text-white">Grafik Publikasi</a>
                                    </li>

                                </ul>
                            </div>
                            <!-- End Drop -->
                        </li>
                        <!-- End Penelitian -->

                        <!-- Kemahasiswaan -->
                        <li class="me-2" role="presentation">
                            <button id="kemahasiswaan-tab" data-dropdown-toggle="dropdownNavbarMhs"
                                data-dropdown-trigger="hover" class="inline-block p-4 border-b-2 rounded-t-lg hover:text-blue-600 hover:border-blue-600 dark:hover:text-gray-300
                              flex items-center justify-between w-full">Kemahasiswaan
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <!-- Dropdown Kemahasiswaan -->
                            <div id="dropdownNavbarMhs"
                                class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="kemahasiswaan-tab">
                                    <li>
                                        <a href="/layanan" 
                                            class="block px-4 py-2 text-left dark:hover:bg-gray-600 dark:hover:text-white">Layanan
                                            Mahasiswa</a>
                                    </li>
                                    <li>
                                        <a href="/prestasi" 
                                            class="block px-4 py-2 text-left dark:hover:bg-gray-600 dark:hover:text-white">Prestasi
                                            Mahasiswa</a>
                                    </li>
                                    <li>
                                        <a href="/kehidupank" 
                                            class="block px-4 py-2 text-left dark:hover:bg-gray-600 dark:hover:text-white">
                                            Kehidupan Kampus</a>
                                    </li>
                                    <li>
                                        <a href="beasiswa" 
                                            class="block px-4 py-2 text-left dark:hover:bg-gray-600 dark:hover:text-white">
                                            Beasiswa</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Drop -->
                        </li>
                        <!-- End Kemahasiswaan -->

                        <!-- Kurikulum -->
                        <li role="presentation">
                            <button id="kurikulum-tab" data-dropdown-toggle="dropdownNavbarKurikulum"
                                data-dropdown-trigger="hover" class="inline-block p-4 border-b-2 rounded-t-lg hover:text-blue-600 hover:border-blue-600 dark:hover:text-gray-300
                              flex items-center justify-between w-full">Kurikulum
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <!-- Dropdown Kurikulum -->
                            <div id="dropdownNavbarKurikulum"
                                class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="kurikulum-tab">
                                    <li>
                                        <a href="/cpl" 
                                            class="block px-4 py-2 text-left dark:hover:bg-gray-600 dark:hover:text-white">
                                            CPL</a>
                                    </li>
                                    <li>
                                        <a href="/kurikulum" 
                                            class="block px-4 py-2 text-left dark:hover:bg-gray-600 dark:hover:text-white">
                                            Kurikulum</a>
                                    </li>
                                    <li>
                                        <a href="/profesi" 
                                            class="block px-4 py-2 text-left dark:hover:bg-gray-600 dark:hover:text-white">
                                            Profesi</a>
                                    </li>
                                    <li>
                                        <a href="profil"
                                            class="block px-4 py-2 text-left dark:hover:bg-gray-600 dark:hover:text-white">Profil
                                            Lulusan</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Drop -->
                        </li>

                        <!-- Tentang -->
                        <li role="presentation">
                            <button id="tentang-tab" data-dropdown-toggle="dropdownNavbarTentang"
                                data-dropdown-trigger="hover" class="inline-block p-4 border-b-2 rounded-t-lg hover:text-blue-600 hover:border-blue-600 dark:hover:text-gray-300
                              flex items-center justify-between w-full">Tentang
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <!-- Dropdown Tentang -->
                            <div id="dropdownNavbarTentang"
                                class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="tentang-tab">
                                    <li>
                                        <a href="/sambutan" 
                                            class="block px-4 py-2 text-left dark:hover:bg-gray-600 dark:hover:text-white">Sambutan
                                            Kaprodi</a>
                                    </li>
                                    <li>
                                        <a href="/prodi" 
                                            class="block px-4 py-2 text-left dark:hover:bg-gray-600 dark:hover:text-white">Prodi
                                            SI</a>
                                    </li>
                                    <li>
                                        <a href="/staf" 
                                            class="block px-4 py-2 text-left dark:hover:bg-gray-600 dark:hover:text-white">Staf
                                            Pengajar</a>
                                    </li>
                                    <li>
                                        <a href="/manajemen" 
                                            class="block px-4 py-2 text-left dark:hover:bg-gray-600 dark:hover:text-white">Manajemen</a>
                                    </li>
                                    <li>
                                        <a href="/survey" 
                                            class="block px-4 py-2 text-left dark:hover:bg-gray-600 dark:hover:text-white">Survey</a>
                                    </li>
                                    <li>
                                        <a href="/kontak" 
                                            class="block px-4 py-2 text-left dark:hover:bg-gray-600 dark:hover:text-white">Kontak</a>
                                    </li>
                                    <li class="hidden">
                                        <a href="/kontak" id="kontak-tab" data-tabs-target="#kontak" type="button" role="tab"
                                            aria-controls="kontak" aria-selected="false"
                                            class="hidden block px-4 py-2 text-left dark:hover:bg-gray-600 dark:hover:text-white">Kontak</a>
                                    </li>
                        </li>
                    </ul>
                </div>
                <!-- End Drop -->
                </li>

                <button id="dropdownSearchButton" data-dropdown-toggle="dropdownSearch" data-dropdown-placement="bottom"
                    class="text-white text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button"><svg xmlns="http://www.w3.org/2000/svg"
                        class="absolute inset-y-0 my-auto h-8 w-12 border-r border-transparent stroke-gray-500 px-3.5 peer-focus:border-lime-300 peer-focus:stroke-lime-500"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>

                <!-- Dropdown search -->
                <div id="dropdownSearch" class="z-10 hidden bg-white rounded-lg shadow w-60 dark:bg-gray-700">
                    <div class="p-3">
                        <label for="input-group-search" class="sr-only">Search</label>
                        <div class="relative">
                            <div
                                class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="text" id="input-group-search"
                                class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search">
                        </div>
                    </div>
                </div>
            </ul>
        </div>
        </div>
    </nav>

    <!-- drawer component -->
    <div id="drawer-body-scrolling"
        class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80 dark:bg-gray-800"
        tabindex="-1" aria-labelledby="drawer-body-scrolling-label">
        <h5 id="drawer-body-scrolling-label" class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">
            Menu</h5>
        <button type="button" data-drawer-hide="drawer-body-scrolling" aria-controls="drawer-body-scrolling" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 
         inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
        <div class="py-4 overflow-y-auto">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="/indexsi" type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group 
                  hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-beranda"
                        data-collapse-toggle="dropdown-beranda">
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Beranda</span>
                    </a>
                </li>

                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="dropdown-penelitian" data-collapse-toggle="dropdown-penelitian">
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Penelitian</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="dropdown-penelitian" class="hidden py-2 space-y-2">
                        <li>
                            <a href="/laboratorium"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                Laboratorium</a>
                        </li>
                        <li>
                            <a href="/kkdk"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                KKDK</a>
                        </li>
                        <li>
                            <a href="/riset"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                Riset</a>
                        </li>
                        <li>
                            <a href="http://103.63.25.9/"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                Grafik Publikasi</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="dropdown-mhs" data-collapse-toggle="dropdown-mhs">
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Kemahasiswaan</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="dropdown-mhs" class="hidden py-2 space-y-2">
                        <li>
                            <a href="/layanan"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                Layanan Mahasiswa</a>
                        </li>
                        <li>
                            <a href="/prestasi"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Prestasi
                                Mahasiswa</a>
                        </li>
                        <li>
                            <a href="/kehidupank"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Kehidupan
                                Kampus</a>
                        </li>
                        <li>
                            <a href="/beasiswa"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Beasiswa</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="dropdown-kurikulum" data-collapse-toggle="dropdown-kurikulum">
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Kurikulum</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="dropdown-kurikulum" class="hidden py-2 space-y-2">
                        <li>
                            <a href="/cpl"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                CPL</a>
                        </li>
                        <li>
                            <a href="/kurikulum"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                Kurikulum</a>
                        </li>
                        <li>
                            <a href="/profesi"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                Profesi</a>
                        </li>
                        <li>
                            <a href="/profil"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                Profil Lulusan</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="dropdown-tentang" data-collapse-toggle="dropdown-tentang">
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Tentang</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="dropdown-tentang" class="hidden py-2 space-y-2">
                        <li>
                            <a href="/sambutan"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                Sambutan Kaprodi</a>
                        </li>
                        <li>
                            <a href="/prodi"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                Prodi SI</a>
                        </li>
                        <li>
                            <a href="/staf"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                Staf Pengajar</a>
                        </li>
                        <li>
                            <a href="/manajemen"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                Manajemen</a>
                        </li>
                        <li>
                            <a href="/survey"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                Survey</a>
                        </li>
                        <li>
                            <a href="/kontak"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                Kontak</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
    <!-- end drawer-->

  <!-- :::::::::::::::::::::::::::: START CPL ::::::::::::::::::::::::::::: --------------------------------------------------------- -->
 <div class="bg-white dark:bg-gray-900 py-12 px-4 mx-auto max-w-screen-xl text-center lg:py-15"></div>

<section class="dark:bg-dark bg-white py-[70px]">
   <div class="mx-auto px-4 sm:container">
      <div class="border-primary border-l-[5px] pl-5">
         <h2 class="text-dark mb-2 text-2xl font-semibold dark:text-white">
            Capaian Pembelajaran Lulusan (CPL)
         </h2>
         <p class="text-body-color dark:text-dark-6 text-sm font-medium">
            Capaian pembelajaran lulusan dalam Program Studi Sistem Informasi (SI) untuk berhasil berkontribusi
            di berbagai lingkungan kerja.
         </p>
      </div>
   </div>

   <div class=" px-2 mx-auto max-w-screen-xl py-8">
      <!-- accordion ----------------------------------------------------------------------------------- -->
      <div id="accordion2-color" data-accordion="collapse"
         data-active-classes="bg-blue-100 dark:bg-gray-800 text-blue-600 dark:text-white">
         <h2 id="accordion2-color-heading-1">
            <button type="button"
               class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3"
               data-accordion-target="#accordion2-color-body-1" aria-expanded="true"
               aria-controls="accordion2-color-body-1">
               <span>Sikap</span>
               <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     d="M9 5 5 1 1 5" />
               </svg>
            </button>
         </h2>
         <div id="accordion2-color-body-1" class="hidden" aria-labelledby="accordion2-color-heading-1">
            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
               <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
                  <li><a>Mampu bekerja sama dan memiliki kepekaan sosial dan kepedulian yang tinggi terhadap
                        masyarakat, dan lingkungannya.</a></li>
                  <li><a>Memiliki moral, etika, dan kepribadian yang baik di dalam menyelesaikan tugasnya.</a>
                  </li>
               </ul>
            </div>
         </div>
         <h2 id="accordion2-color-heading-2">
            <button type="button"
               class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3"
               data-accordion-target="#accordion2-color-body-2" aria-expanded="false"
               aria-controls="accordion2-color-body-2">
               <span>Keterampilan Umum</span>
               <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     d="M9 5 5 1 1 5" />
               </svg>
            </button>
         </h2>
         <div id="accordion2-color-body-2" class="hidden" aria-labelledby="accordion2-color-heading-2">
            <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
               <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
                  <li><a>Mampu membuat rekomendasi dan menerapkan metodologi terbaik dalam sebuah proyek
                        <i>software development</i>.</a></li>
                  <li><a>Mampu menganalisa, merancang, dan mengimplementasikan suatu sistem berbasi komputer
                        secara efisien untuk menyelesaikan masalah, menggunakan pemrograman procedural dan
                        berorientasi objek.</a></li>
                  <li><a>Mampu menentukan tahapan dan melakukan <i>testing</i> atau uji kelayakan suatu
                        sistem.</a>
                  </li>
               </ul>
            </div>
         </div>
         <h2 id="accordion3-color-heading-3">
            <button type="button"
               class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3"
               data-accordion-target="#accordion3-color-body-3" aria-expanded="false"
               aria-controls="accordion3-color-body-3">
               <span>Pengetahuan</span>
               <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     d="M9 5 5 1 1 5" />
               </svg>
            </button>
         </h2>
         <div id="accordion3-color-body-3" class="hidden" aria-labelledby="accordion3-color-heading-3">
            <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
               <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
                  <li><a>Menguasai kaidah pengembangan perangkat lunak berbasis web dan mobile yang
                        memenuhi standar kualitas dan keamanan.</a></li>
                  <li><a>Menguasai konsep mencipta atau membangun rekayasa perangkat lunak, dan
                        rekayasa data.</a></li>
                  <li><a>Menguasai sumber daya teknologi dan platformnya untuk pengembangan aplikasi
                        berbasis multimedia.</a>
                  </li>
               </ul>
            </div>
         </div>
         <h2 id="accordion4-color-heading-4">
            <button type="button"
               class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3"
               data-accordion-target="#accordion4-color-body-4" aria-expanded="false"
               aria-controls="accordion4-color-body-4">
               <span>Keterampilan Khusus</span>
               <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     d="M9 5 5 1 1 5" />
               </svg>
            </button>
         </h2>
         <div id="accordion4-color-body-4" class="hidden" aria-labelledby="accordion4-color-heading-4">
            <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
               <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
                  <li><a>Menerapkan dan mengevaluasi metode keamanan perangkat lunak.</a></li>
                  <li><a>Mampu menganalisa dan membangun suatu sistem dengan menentukan proses
                        bisnis sesuai kebbutuhan.</a></li>
                  <li><a>Mampu menerapkan manajemen data, informasi, dan pengetahuan.</a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>

</section>
</div>
<!-- :::::::::::::::::::::::::::: END CPL ::::::::::::::::::::::::::::: ----------------------------------------------------------------------------------- -->


<footer class="bg-dark-blue dark:bg-gray-900">
         <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path
               d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
               class="fill-gray"></path>
         </svg>
         <div class="py-8 px-8 mx-auto max-w-screen-xl lg:py-8">
            <div class="md:flex md:justify-between">
               <div class="grid lg:grid-cols-4 gap-8 sm:gap-6 sm:grid-cols-4 px-20">
                  <div>
                     <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Contact Us
                     </h2>
                     <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                           <a>Jl. Karimata No. 49 Jember - Jawa Timur - Indonesia</a>
                        </li>
                        <li>
                           <a class="inline-flex text-white">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-3.5 h-3.5">
                                 <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                              </svg><a class="px-2 text-white">(0331) 336728</a>
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div>
                     <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">System</h2>
                     <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                           <a href="https://estudy.unmuhjember.ac.id/" target="_blank"
                              class="hover:underline hover:text-white">E-Study (Pembelajaran Online)</a>
                        </li>
                        <li class="mb-4">
                           <a href="https://sia.unmuhjember.ac.id/" target="_blank"
                              class="hover:underline hover:text-white">SIstem Informasi Akademik (SIA)</a>
                        </li>
                        <li class="mb-4">
                           <a href="http://jurnal.unmuhjember.ac.id/" target="_blank"
                              class="hover:underline hover:text-white">Jurnal Online Universitas Muhammadiyah
                              Jember
                              (EISSN)</a>
                        </li>
                        <li class="mb-4">
                           <a href="http://repository.unmuhjember.ac.id/" target="_blank"
                              class="hover:underline hover:text-white">Digital Library (Book, Tesis, Riset)</a>
                        </li>
                        <li class="mb-4">
                           <a href="https://perpustakaan.unmuhjember.ac.id/id/" target="_blank"
                              class="hover:underline hover:text-white">Sistem Informasi Perpustakaan</a>
                        </li>
                     </ul>
                  </div>
                  <div>
                     <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">link</h2>
                     <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li>
                           <a href="https://muhammadiyah.or.id/" target="_blank"
                              class="hover:underline hover:text-white">Pimpinan Pusat Muhammadiyah</a>
                        </li>
                     </ul>
                  </div>
                  <div>
                     <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">web statistic
                     </h2>
                     <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                           <a href="https://www.alexa.com/siteinfo/unmuhjember.ac.id" target="_blank"
                              class="hover:underline hover:text-white">Alexa</a>
                        </li>
                        <li class="mb-4">
                           <a href="https://www.webometrics.info/en/search/Rankings/unmuhjember.ac.id" target="_blank"
                              class="hover:underline hover:text-white">Webomatrics</a>
                        </li>
                        <li class="mb-4">
                           <a href="https://www.4icu.org/reviews/14176.htm" target="_blank"
                              class="hover:underline hover:text-white">4icu</a>
                        </li>
                     </ul>
                  </div>

               </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
               <span class="text-sm text-white sm:text-center dark:text-gray-400">© 2023 <a
                     href="https://unmuhjember.ac.id/id/" target="_blank" class="hover:underline">Universitas
                     Muhammadiyah Jember</a>.
                  All
                  Rights Reserved.
               </span>
               <div class="flex mt-4 sm:justify-center sm:mt-0">
                  <a href="https://wa.link/j5i1h9" target="_blank"
                     class="text-white hover:text-gray-900 dark:hover:text-white ms-5">
                     <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 31 25">
                        <path fill-rule="evenodd"
                           d="M24.50391,7.50391c-2.25781,-2.25781 -5.25781,-3.50391 -8.45312,-3.50391c-6.58594,0 -11.94922,5.35938 -11.94922,11.94531c-0.00391,2.10547 0.54688,4.16016 1.59375,5.97266l-1.69531,6.19141l6.33594,-1.66406c1.74219,0.95313 3.71094,1.45313 5.71094,1.45703h0.00391c6.58594,0 11.94531,-5.35937 11.94922,-11.94922c0,-3.19141 -1.24219,-6.19141 -3.49609,-8.44922zM16.05078,25.88281h-0.00391c-1.78125,0 -3.53125,-0.48047 -5.05469,-1.38281l-0.36328,-0.21484l-3.76172,0.98438l1.00391,-3.66406l-0.23437,-0.375c-0.99609,-1.58203 -1.51953,-3.41016 -1.51953,-5.28516c0,-5.47266 4.45703,-9.92578 9.9375,-9.92578c2.65234,0 5.14453,1.03516 7.01953,2.91016c1.875,1.87891 2.90625,4.37109 2.90625,7.02344c0,5.47656 -4.45703,9.92969 -9.92969,9.92969zM21.49609,18.44531c-0.29687,-0.14844 -1.76562,-0.87109 -2.03906,-0.96875c-0.27344,-0.10156 -0.47266,-0.14844 -0.67187,0.14844c-0.19922,0.30078 -0.76953,0.97266 -0.94531,1.17188c-0.17187,0.19531 -0.34766,0.22266 -0.64453,0.07422c-0.30078,-0.14844 -1.26172,-0.46484 -2.40234,-1.48437c-0.88672,-0.78906 -1.48828,-1.76953 -1.66016,-2.06641c-0.17578,-0.30078 -0.01953,-0.46094 0.12891,-0.60937c0.13672,-0.13281 0.30078,-0.34766 0.44922,-0.52344c0.14844,-0.17187 0.19922,-0.29687 0.30078,-0.49609c0.09766,-0.19922 0.04688,-0.375 -0.02734,-0.52344c-0.07422,-0.14844 -0.67187,-1.62109 -0.92187,-2.21875c-0.24219,-0.58203 -0.48828,-0.5 -0.67187,-0.51172c-0.17187,-0.00781 -0.37109,-0.00781 -0.57031,-0.00781c-0.19922,0 -0.52344,0.07422 -0.79687,0.375c-0.27344,0.29688 -1.04297,1.01953 -1.04297,2.48828c0,1.46875 1.07031,2.89063 1.21875,3.08984c0.14844,0.19531 2.10547,3.21094 5.10156,4.50391c0.71094,0.30859 1.26563,0.49219 1.69922,0.62891c0.71484,0.22656 1.36719,0.19531 1.88281,0.12109c0.57422,-0.08594 1.76563,-0.72266 2.01563,-1.42187c0.24609,-0.69531 0.24609,-1.29297 0.17188,-1.41797c-0.07422,-0.125 -0.27344,-0.19922 -0.57422,-0.35156z"
                           clip-rule="evenodd" />
                     </svg>
                     <span class="sr-only">WhatsApp page</span>
                  </a>
                  <a href="https://www.instagram.com/unmuhjember_ofc/" target="_blank"
                     class="text-white hover:text-gray-900 dark:hover:text-white ms-5">
                     <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 29 25">
                        <path fill-rule="evenodd"
                           d="M 11.46875 5 C 7.917969 5 5 7.914063 5 11.46875 L 5 20.53125 C 5 24.082031 7.914063 27 11.46875 27 L 20.53125 27 C 24.082031 27 27 24.085938 27 20.53125 L 27 11.46875 C 27 7.917969 24.085938 5 20.53125 5 Z M 11.46875 7 L 20.53125 7 C 23.003906 7 25 8.996094 25 11.46875 L 25 20.53125 C 25 23.003906 23.003906 25 20.53125 25 L 11.46875 25 C 8.996094 25 7 23.003906 7 20.53125 L 7 11.46875 C 7 8.996094 8.996094 7 11.46875 7 Z M 21.90625 9.1875 C 21.402344 9.1875 21 9.589844 21 10.09375 C 21 10.597656 21.402344 11 21.90625 11 C 22.410156 11 22.8125 10.597656 22.8125 10.09375 C 22.8125 9.589844 22.410156 9.1875 21.90625 9.1875 Z M 16 10 C 12.699219 10 10 12.699219 10 16 C 10 19.300781 12.699219 22 16 22 C 19.300781 22 22 19.300781 22 16 C 22 12.699219 19.300781 10 16 10 Z M 16 12 C 18.222656 12 20 13.777344 20 16 C 20 18.222656 18.222656 20 16 20 C 13.777344 20 12 18.222656 12 16 C 12 13.777344 13.777344 12 16 12 Z"
                           clip-rule="evenodd" />
                     </svg>
                     <span class="sr-only">Instagram account</span>
                  </a>
                  <a href="https://www.youtube.com/@unmuh_jember" target="_blank"
                     class="text-white hover:text-gray-900 dark:hover:text-white ms-5">
                     <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 30 25">
                        <path fill-rule="evenodd"
                           d="M16,6c-3.76562,0 -7.09375,0.39063 -9.125,0.6875c-1.67969,0.24609 -3.03516,1.51172 -3.34375,3.1875c-0.26172,1.42578 -0.53125,3.51172 -0.53125,6.125c0,2.61328 0.26953,4.69922 0.53125,6.125c0.30859,1.67578 1.66406,2.94531 3.34375,3.1875c2.03906,0.29688 5.37891,0.6875 9.125,0.6875c3.74609,0 7.08594,-0.39062 9.125,-0.6875c1.67969,-0.24219 3.03516,-1.51172 3.34375,-3.1875c0.26172,-1.42969 0.53125,-3.51953 0.53125,-6.125c0,-2.60547 -0.26562,-4.69531 -0.53125,-6.125c-0.30859,-1.67578 -1.66406,-2.94141 -3.34375,-3.1875c-2.03125,-0.29687 -5.35937,-0.6875 -9.125,-0.6875zM16,8c3.63281,0 6.87891,0.37109 8.84375,0.65625c0.84375,0.125 1.50391,0.76172 1.65625,1.59375c0.24219,1.32031 0.5,3.27734 0.5,5.75c0,2.46875 -0.25781,4.42969 -0.5,5.75c-0.15234,0.83203 -0.80859,1.47266 -1.65625,1.59375c-1.97266,0.28516 -5.23437,0.65625 -8.84375,0.65625c-3.60937,0 -6.875,-0.37109 -8.84375,-0.65625c-0.84375,-0.12109 -1.50391,-0.76172 -1.65625,-1.59375c-0.24219,-1.32031 -0.5,-3.27344 -0.5,-5.75c0,-2.48047 0.25781,-4.42969 0.5,-5.75c0.15234,-0.83203 0.80859,-1.46875 1.65625,-1.59375c1.96094,-0.28516 5.21094,-0.65625 8.84375,-0.65625zM13,10.28125v11.4375l1.5,-0.84375l7,-4l1.5,-0.875l-1.5,-0.875l-7,-4zM15,13.71875l3.96875,2.28125l-3.96875,2.28125z"
                           clip-rule="evenodd" />
                     </svg>
                     <span class="sr-only">YouTube account</span>
                  </a>
               </div>
            </div>
         </div>
      </footer>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

</html>