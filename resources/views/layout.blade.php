<div>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title')</title>
</head>
<body>
    <header class="w-full bg-blue-700 p-10 my-10 text-center text-white font-bold">Header</header>
    <main>
        @yield('content')
    </main>
    <footer class="w-full bg-blue-700 p-10 my-10 text-center text-white font-bold"> Footer</footer>
</body>
</html>