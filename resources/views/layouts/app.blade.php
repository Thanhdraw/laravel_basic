<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Online Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-gray-200" x-data="{ cartOpen: false, isOpen: false, dropdownOpen: false }">

    @include('partials.header')

    <main class="h-screen bg-slate-200">
        @yield('content') <!-- Nội dung sẽ hiển thị tại đây -->
    </main>


    @include('partials.footer')
</body>

</html>