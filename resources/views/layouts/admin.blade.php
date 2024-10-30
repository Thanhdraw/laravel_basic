<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <header class="py-4 bg-white shadow">
        @include('partials.nav_admin')
    </header>

    <main class="py-6">
        @yield('content')
    </main>


</body>
<footer class="py-4 text-white bg-gray-800">
    <div class="container mx-auto text-center">
        &copy; 2023 Admin Dashboard. All rights reserved.
    </div>
</footer>

</html>