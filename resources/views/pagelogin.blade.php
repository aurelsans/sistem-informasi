<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div>
        <section class="h-100">
            <div class="container h-100">
                <div class="row justify-content-center h-100">
                    <div class="card-wrapper col-md-6">
                        <div class="brand">
                            <div class="card fat">
                                <div class="card-body">
                                    <h4 class="card-title">Login</h4>
                                    @if(session('error'))
                                    <p style="color: red;">{{ session('error') }}</p>
                                    @endif
                                    <form method="post" action="{{ route('plogin') }}">
                                        @csrf
                                        <form class="max-w-md mx-auto">
                                            <div class="relative z-0 w-full mb-5 group">
                                                <input type="username" name="username" id="username" class="block py-2.5 px-0 w-full text-sm 
      text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none 
      dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none 
      focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                                <label for="floating_email" class="peer-focus:font-medium absolute text-sm 
      text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 
      scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto 
      peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 
      peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Username</label>
                                            </div>
                                            <div class="relative z-0 w-full mb-5 group">
                                                <input type="password" name="password" id="password" class="block py-2.5 px-0 w-full 
      text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
      appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
      focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                                                <label for="password" class="peer-focus:font-medium 
      absolute text-sm text-gray-500 dark:text-gray-400 duration-300 
      transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] 
      peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
      peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 
      peer-focus:-translate-y-6">Password</label>
                                            </div>
                                </div>

                                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 
  focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto
px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>



    @vite('resources/js/app.js')
</body>

</html>