<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sagile Management Tools</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="bg-gray-200">
        <nav class="p-6 bg-white flex justify-between mb-6">
            <ul class="flex items-center">
                <li>
                    <a href="/" class="p-3">Home</a>
                </li>
                <li>
                    <a href="{{ route('dashboard') }}" class="p-3">Dashboard</a>
                </li>
                @auth
                <li>
                    <a href="{{ route('project') }}" class="p-3">Projects</a>
                </li>
                <li>
                    <a href="{{ route('codingstandard') }}" class="p-3">Coding standards</a>
                </li>
                <li>
                    <a href="{{ route('status') }}" class="p-3">Status</a>
                </li>
                <li>
                    <a href="{{ route('performancefeature') }}" class="p-3">Performance feature</a>
                </li>
                <li>
                    <a href="{{ route('securityfeature') }}" class="p-3">Security feature</a>
                </li>
                @endauth
            </ul>

            <ul class="flex items-center">
                @auth
                    <li>
                        <a href="" class="p-3">{{Auth::user()->name}}</a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="post" class="p-3 inline">
                            @csrf
                            <button type ="submit">Logout</button>
                        </form>
                    </li>
                @endauth

                @guest
                    <li>
                        <a href="{{ route('login') }}" class="p-3">Login</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}" class="p-3">Register</a>
                    </li>
                @endguest
            </ul>
        </nav>
        @yield('content')
    </body>
</html>