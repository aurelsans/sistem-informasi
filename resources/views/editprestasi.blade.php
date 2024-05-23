<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Prestasi</title>

    @vite('resources/css/app.css')

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <section class="bg-gray-50 dark:bg-gray-900 ">
        <div class="mx-auto max-w-screen-xl lg:py-8">
            <div
                class="py-8 px-10 mx-auto lg:max-w-screen-xl lg:py-8 bg-white lg:border lg:border-gray-200 lg:rounded-lg lg:shadow dark:bg-gray-800 dark:border-gray-700">
                <h1
                    class="text-2xl mb-4 font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Edit Prestasi
                </h1>

                @foreach($edit as $e)
                    <form action="/updateprestasi" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <label class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white">
                            Foto Prestasi yang ingin diedit:</label>
                        <input type="hidden" name="id" value="{{ $e->id }}">
                        <input type="hidden" name="gambar_prestasi_existing" value="{{ $e->gambar_prestasi }}">
                        <img src="{{ asset('foto_prestasi/' . $e->gambar_prestasi) }}" alt=""
                            style="width: 200px; height: auto;">

                        <label class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white"
                            for="gambar_prestasi">Gambar Prestasi</label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer 
                                            bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            name="gambar_prestasi" id="gambar_prestasi" type="file">
                        <div class="mt-1 mb-2 text-sm text-gray-500 dark:text-gray-300">
                            Tambahkan foto prestasi yang ingin diedit.
                        </div>

                        <div class="mb-5">
                            <label for="judul_prestasi"
                                class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white">Judul
                                Prestasi</label>
                            <input type="text" id="judul_prestasi" name="judul_prestasi" value="{{ $e->judul_prestasi }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                                            focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>

                        <label for="deskripsi_prestasi"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Deskripsi Prestasi
                        </label>
                        <textarea id="deskripsi_prestasi" name="deskripsi_prestasi" rows="4"
                            class="mb-2 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Tulis deskripsi prestasi...">{{ $e->deskripsi_prestasi }}
                                </textarea>

                        <label for="detail_prestasi"
                            class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white">
                            Detail Prestasi
                        </label>
                        <textarea id="detail_prestasi" name="detail_prestasi" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Tulis detail prestasi...">{{ $e->detail_prestasi }}</textarea>

                        <button type="submit" value="submit"
                            class="mt-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            Submit
                        </button>

                    </form>
                @endforeach
            </div>
        </div>
    </section>
</body>

</html>