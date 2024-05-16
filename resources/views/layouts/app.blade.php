<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <nav>
            <div class="header-container mx-auto flex justify-between items-center py-4">
                <div class="text-xl font-bold pl-4">
                    <div class="logo">
                        <a href="{{ route('landing') }}" class="text-xl font-bold">WebProject</a>
                    </div>
                </div>
                <div class="nav-links flex space-x-4">
                    <a href="{{ route('landing') }}">Home</a>
                    <a href="{{ route('contact') }}">Contact</a>
                    <a href="{{ route('about') }}">About</a>
                    <a href="{{ route('informasi') }}">Informasi</a>
                    <a href="{{ route('rekomendasi') }}">Rekomendasi</a>
                    <a href="{{ route('booking') }}">Booking</a>
                    @auth
                        <a href="{{ route('settings') }}">Settings</a>
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="text-white">Logout</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            </div>
        </nav>
    </header>
    <main class="content-container mx-auto py-8">
        @if (session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('success') }}
        </div>
        @endif
        @yield('content')
    </main>
    <footer class="footer">
        <div class="container mx-auto text-center">
            &copy; 2023 WebProject. All rights reserved.
        </div>
    </footer>
</body>
</html>