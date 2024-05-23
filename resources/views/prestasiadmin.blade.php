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
               <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
                  type="button"
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
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                     <path fill-rule="evenodd"
                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                        clip-rule="evenodd" />
                  </svg>
                  <span class="ms-3">Prestasi</span>
               </a>
            </li>
            <li>
               <a href="cpladmin"
                  class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                  <svg
                     class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-black dark:group-hover:text-white"
                     height="800px" width="800px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                     <style type="text/css">
                        .st0 {
                           fill: #000000;
                        }
                     </style>
                     <g>
                        <path class="st0" d="M463.29,305.295v-84.777h-9.38c-39.71,0-75.128,6.873-104.271,15.713c-3.467-7.023-7.264-14.182-10.956-20.92
		c1.59-1.441,3.166-2.919,4.682-4.435c22.331-22.316,36.183-53.253,36.168-87.343c0.016-34.089-13.837-65.026-36.168-87.336
		C321.035,13.837,290.089,0,256.007,0c-34.082,0-65.027,13.837-87.343,36.198c-22.331,22.309-36.182,53.246-36.182,87.336
		c0,34.09,13.851,65.027,36.182,87.343c1.516,1.516,3.076,3.017,4.682,4.435c-3.706,6.738-7.503,13.897-10.97,20.92
		c-29.159-8.84-64.547-15.713-104.257-15.713h-9.38v84.777c-28.318,0.526-39.154,23.877-39.154,52.631
		c0,28.754,10.836,52.106,39.154,52.631v67.481l9.035,0.315h0.255c2.836,0.098,28.634,1.208,63.586,5.89
		c34.938,4.667,79.044,12.958,118.244,27.193l1.545,0.563h29.22l1.545-0.563c40.445-14.692,86.158-23.044,121.59-27.629
		c17.739-2.288,32.896-3.661,43.611-4.456c5.358-0.398,9.604-0.646,12.501-0.811c1.441-0.068,2.536-0.128,3.286-0.15
		c0.36-0.023,0.646-0.038,0.811-0.038h0.27l9.049-0.315v-67.481c28.319-0.548,39.124-23.877,39.124-52.631
		C502.414,329.172,491.609,305.836,463.29,305.295z M49.746,391.821c-0.315,0-0.646,0-1.006-0.015
		c-6.438-0.068-20.395-1.756-20.395-33.879c0-32.131,13.957-33.819,20.395-33.88c0.36-0.022,0.691-0.022,1.006-0.022
		c6.498,0,12.576,1.861,17.739,5.043c9.694,5.958,16.147,16.673,16.147,28.859c0,12.186-6.453,22.894-16.147,28.852
		C62.322,389.967,56.244,391.821,49.746,391.821z M230.63,286.259v202.262c-38.089-12.126-78.069-19.15-109.974-23.314
		c-23.502-3.046-42.576-4.48-53.171-5.125V407.51c20.365-7.293,34.906-26.728,34.906-49.584c0-22.856-14.542-42.299-34.906-49.584
		v-68.921c48.863,1.395,90.494,13.536,120.389,25.73c15.893,6.453,28.469,12.914,36.978,17.731c2.192,1.246,4.127,2.371,5.778,3.37
		V286.259z M268.884,492.708c-0.495,0.165-1.006,0.353-1.501,0.541h-22.736c-0.495-0.188-0.99-0.376-1.516-0.541V292.396h25.753
		V492.708z M256.007,228.682c-28.574,0-54.402-11.353-73.341-29.812c-0.33-0.33-0.66-0.646-1.006-0.975
		c-10.28-10.296-18.414-22.669-23.742-36.46c18.459-3.482,35.418-10.445,50.545-19.03c25.498-14.452,45.923-33.459,60.09-48.849
		c6.123-6.649,11.061-12.629,14.723-17.296c5.898,7.602,14.797,18.752,24.942,30.315c9.11,10.378,19.21,21.086,29.235,29.978
		c4.997,4.458,9.995,8.464,14.947,11.773c1.681,1.103,3.347,2.108,5.013,3.061c-4.878,17.836-14.317,33.774-27.043,46.508
		c-0.346,0.33-0.675,0.668-1.021,0.998C310.379,217.352,284.552,228.682,256.007,228.682z M444.545,460.082
		c-10.595,0.645-29.67,2.079-53.201,5.125c-31.875,4.142-71.856,11.188-109.944,23.314c0,0,0,0-0.014,0V286.236
		c0.014,0,0.014,0,0.014,0c8.164-4.899,23.157-13.168,43.492-21.4c29.834-12.066,71.18-24.042,119.654-25.415v68.921
		c-20.365,7.286-34.922,26.728-34.922,49.584c0,22.856,14.557,42.291,34.922,49.584V460.082z M463.29,391.806
		c-0.375,0.015-0.705,0.015-1.02,0.015c-6.498,0-12.562-1.831-17.724-5.02c-9.695-5.98-16.178-16.688-16.178-28.874
		c0-12.186,6.483-22.901,16.178-28.882c5.162-3.181,11.226-5.02,17.724-5.02c0.315,0,0.646,0,1.02,0.022
		c6.453,0.083,20.38,1.794,20.38,33.88C483.669,390.012,469.743,391.723,463.29,391.806z" />
                        <circle class="st0" cx="215.383" cy="161.037" r="12.502" />
                        <circle class="st0" cx="296.632" cy="161.037" r="12.502" />
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
                  <svg
                     class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                     aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
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
         <h2 class="text-2xl font-bold tracking-tight dark:text-white">Prestasi Mahasiswa</h2>
         <a href="/tambahprestasi"><button
               class="mt-4 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Tambah
               Prestasi</button></a>

         @foreach($prestasi as $p)
         <div class="mt-8 grid lg:grid-cols-2 md:grid-cols-3 gap-2">
            <div>
            <img class="w-full object-cover h-48 rounded-lg "
               src="{{ asset('foto_prestasi/' . $p->gambar_prestasi) }}">
            </div>
            <div>
            <div class="ml-2 bg-white rounded-t-lg dark:bg-gray-800">
               <h3 class="text-2xl font-black text-gray-900 dark:text-white">{{$p->judul_prestasi}}</h3>
               <p class="font-medium">{{$p->deskripsi_prestasi}}</p>
               <textarea rows="5"
                  class="w-full text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400">{{$p->detail_prestasi}}</textarea>
            </div>
            </div>
         </div>

         <a
            href="/editprestasi/{{ $p->id }}">
         <button
            class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm 
            px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            Edit</button></a>
      @endforeach
      </div>
   </div>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>