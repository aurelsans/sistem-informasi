<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Fasilitas</title>

    @vite('resources/css/app.css')

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <section class="bg-white dark:bg-gray-900 ">
        <div class="mx-auto max-w-screen-xl lg:py-8">
            <div
                class="py-8 px-10 mx-auto lg:max-w-screen-xl lg:py-8 bg-white lg:border lg:border-gray-200 lg:rounded-lg lg:shadow dark:bg-gray-800 dark:border-gray-700">
                <h1
                    class="text-2xl mb-4 font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Edit Fasilitas Komputer
                </h1>

                @foreach($editfa as $ef)
                    <form action="/updatefasilitas" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $ef->id }}">

                        <div class="mb-5">
                            <label for="nama_fasil"
                                class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white">
                                Nama Fasilitas
                            </label>
                            <input type="text" id="nama_fasil" name="nama_fasil" value="{{ $ef->nama_fasil }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                                        focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                                        dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>

                        <div class="mb-5">
                            <label for="detail_fasil"
                                class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white">
                                Detail Fasilitas
                            </label>
                            <input type="text" id="detail_fasil" name="detail_fasil" value="{{ $ef->detail_fasil }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                                    focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                                    dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>

                        <button type="submit" value="submit"
                            class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            Submit
                        </button>

                    </form>
                @endforeach
            </div>
        </div>
    </section>

</body>

</html>