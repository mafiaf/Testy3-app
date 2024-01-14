<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testy3-app</title>
    <!-- Add your CSS links, meta tags, etc. here -->
</head>
<body>

    <header>
        <!-- Your navigation bar goes here -->
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                @if (Auth::check())
                    <li><a href="{{ route('profile.show') }}">My Profile</a></li>
                    <li><a href="{{ route('profile.edit') }}">Edit Profile</a></li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <li><button type="submit">Logout</button></li>
                    </form>
                @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @endif
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Your footer content goes here -->
    </footer>

</body>
</html>
