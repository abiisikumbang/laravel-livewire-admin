<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>E-Gudang | Authentikasi</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-8 sm:pt-0  bg-[#474747] ">
        <div class="flex items-center justify-center mb-4 mr-8 ml-8">
            <a href="/">
                <img src="{{ asset('img/logo.jpg') }}"
                    style="border-radius: 90px; box-shadow:0 0 30px rgb(30, 30, 30); border: 1px solid rgba(218, 212, 212, 0.18);"
                    class="w-50 h-40 fill-current" alt="logo">
            </a>
        </div>

        <div style="background: rgba(20, 20, 20, 0.85);
                    border-radius: 20px;
                    padding: 40px;
                    max-width: 600px;
                    border: 1px solid rgba(66, 66, 66, 0.18);
                    box-shadow: 0 0 30px rgb(6, 6, 6);"
            class="w-full sm:max-w-md mt-6 px-6 py-4 shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
