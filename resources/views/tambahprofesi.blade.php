<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Profesi</title>

    @vite('resources/css/app.css')

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <section class="bg-white">
        <div class="mx-auto max-w-screen-xl lg:py-8">
            <div
                class="py-8 px-10 mx-auto lg:max-w-screen-xl lg:py-8 bg-white lg:border lg:border-gray-200 lg:rounded-lg lg:shadow dark:bg-gray-800 dark:border-gray-700">
                <h1
                    class="text-2xl mb-4 font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Tambah Profesi
                </h1>
                <form action="/simpanprofesi" method="post">
                    @csrf <!-- Laravel CSRF token -->

                    <div class="mb-5">
                        <label for="nama_profesi"
                            class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white">Nama Profesi</label>
                        <input type="text" id="nama_profesi" name="nama_profesi"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 
                            focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                            dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>

                    <label for="deskripsi_profesi"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Deskripsi Profesi
                    </label>
                    <textarea id="deskripsi_profesi" name="deskripsi_profesi" rows="4"
                        class="mb-2 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Tulis deskripsi profesi..."></textarea>

                    <button type="submit" value="submit"
                        class="mt-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Submit
                    </button>

                </form>
            </div>
        </div>
    </section>

</body>

</html>