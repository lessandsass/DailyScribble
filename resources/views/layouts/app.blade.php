<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>Daily Scribble</title>

</head>
<body class="bg-gray-900 text-gray-300">

    <nav class="p-6 bg-gray-800 text-gray-300 flex justify-between">
        <ul class="flex items-center">
            <li><a href="{{ route('home') }}" class="p-3">Home</a></li>
            <li>
                <a href="{{ route('dashboard') }}" class="p-3">Dashboard</a>
            </li>
        </ul>

        <ul class="flex items-center">
            <li>
                <a href="" class="p-3">Login</a>
            </li>
            <li>
                <a href="" class="p-3">Register</a>
            </li>
            <li>
                <a href="#" class="p-3">Vipurthanan</a>
            </li>
            <li>
                <a href="#" class="p-3">Logout</a>
            </li>
        </ul>
    </nav>


    <div class="container mx-auto mt-6 px-6">
        @yield('content')
    </div>

</body>
</html>



