<!-- Improved Code -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex flex-row h-screen">
        <!-- Sidebar -->
        <nav class="w-64 h-screen overflow-y-auto" style="background-color: #fe2f01;">
            <div class="sidebar text-center py-4">
                <!-- Added bi bi icon handbag to the left of the title -->
                <div class="flex items-center mb-4">
                    <i class="bi bi-handbag text-white mr-2 text-lg leading-[1.5]" style="line-height: 1.5;"></i> <!-- Added leading-[1.5] to increase the line height -->
                    <h3 class="text-white text-lg leading-[1.5]" style="line-height: 1.5;">SIMS Web Apps</h3> <!-- Added leading-[1.5] to increase the line height -->
                    <!-- Added toggle button -->
                    <button class="flex items-center justify-center w-8 h-8 ml-4 text-white rounded-md focus:outline-none">
                        <i class="bi bi-list text-white"></i>
                    </button>
                </div>
                <div class="text-white">
                    <div class="my-2 bg-gray-600 h-[1px]"></div>
                </div>
                <a href="{{ route('admin/products') }}">
                    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                        <i class="bi bi-box-seam text-white"></i>
                        <span class="text-white ml-4 font-bold">Product</span>
                    </div>
                </a>
                <a href="{{ route('admin/profile') }}">
                    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                        <i class="bi bi-person text-white"></i>
                        <span class="text-white ml-4 font-bold">Profile</span>
                    </div>
                </a>
                <a href="{{ route('logout') }}">
                    <div class="my-4 bg-gray-600 h-[1px]"></div>
                    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                        <i class="bi bi-box-arrow-in-right text-white"></i>
                        <span class="text-white ml-4 font-bold">Logout</span>
                    </div>
                </a>
            </div>
        </nav>
        <!-- Main Content -->
        <main class="flex flex-col w-full h-screen px-4 py-8 mt-10">
            <div>@yield('contents')</div>
        </main>
    </div>
</body>

</html>
