<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js"></script>
</head>

<body>
    <section class="h-screen flex">
        <div class="w-1/2 xl:w-1/2 p-6">
            <form class="space-y-4 md:space-y-6 max-w-md mx-auto" method="post" action="{{ route('login.action') }}">
                @csrf
                @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                    <strong class="font-bold">Error!</strong>
                    <p>{{ $errors->first() }}</p>
                </div>
                @endif
                <fieldset>
                    <div class="flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900">
                        <div class="w-full max-w-md p-6 space-y-8 bg-white rounded-xl shadow-md dark:bg-gray-800">
                            <h2 class="text-3xl font-bold leading-tight tracking-tight text-gray-900 dark:text-white">
                                <span class="inline-block mr-2">
                                    <i class="bi bi-handbag"></i>
                                </span>
                                SIMS Web App
                            </h2>
                            <form class="space-y-6" action="#" method="POST">
                                <div>
                                    <div class="mt-1 relative">
                                        <input id="email" name="email" type="email" autocomplete="email" required class="w-full px-3 py-2 pl-10 placeholder-gray-400 border rounded-md focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm" placeholder="Masukan email anda">
                                        <i class="bi bi-at absolute left-3 top-2 text-gray-900"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="mt-1">
                                        <input id="password" name="password" type="password" autocomplete="current-password" required class="w-full px-3 py-2 placeholder-gray-400 border rounded-md focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm" placeholder="Masukan password anda">
                                        <i class="bi bi-lock absolute left-3 top-2 text-gray-900"></i>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <input id="remember-me" name="remember-me" type="checkbox" class="w-4 h-4 text-orange-600 border-gray-300 rounded focus:ring-orange-500">
                                        <label for="remember-me" class="block ml-2 text-sm text-gray-700 dark:text-gray-200">
                                            Remember me
                                        </label>
                                    </div>
                                    <div class="text-sm">
                                        <a href="#" class="text-orange-600 hover:text-orange-500">
                                            Forgot your password?
                                        </a>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn custom-orange w-full h-8 rounded-md text-lg font-semibold" style="background-color: #f93104;">
                                        Masuk
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="w-1/2 xl:w-1/2 p-6">
            <img src="{{asset('assets/login.png')}}" alt="asset image" class="w-full h-full object-cover">
        </div>
    </section>
</body>

</html>
