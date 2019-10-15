<nav class="navbar" style="width: 75%; margin: 1em auto;">
    <ul class="navbar-menu">
        <li class="navbar-item">
            <a href="{{ route('home') }}">Protokolle</a>
        </li>
        <li class="navbar-item">
            <a href="{{ route('protocols.create') }}">Anlegen</a>
        </li>
    </ul>
    <ul class="navbar-end">
        @if (Route::has('login'))
            <li class="navbar-item">
                @auth
                    <a class="button is-light" href="{{ url('/home') }}">Home</a>
                @else
                    <a class="button is-primary" href="{{ route('login') }}">Login</a>
                @endauth
            </li>
        @endif
        @if (Route::has('register'))
            <li class="navbar-item">
                <a class="button is-primary" href="{{ route('register') }}">Register</a>
            </li>
        @endif
    </ul>
</nav>