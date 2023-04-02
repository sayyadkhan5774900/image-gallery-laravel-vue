<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

    @vite('resources/css/app.css')

    @vite('resources/js/app.js')


</head>

<body class="antialiased">
    <div class="max-w-lg mx-auto mt-24">
        <h1 class="text-4xl font-bold text-center">
            Image Uploader
        </h1>
        <div id="app"></div>
    </div>


	@vite('resources/js/app.js')
</body>

</html>
