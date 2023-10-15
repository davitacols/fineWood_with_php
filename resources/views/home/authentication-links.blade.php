@if (Route::has('login'))
    @auth
        <x-app-layout>
            <div class="container">
                </div>
        </x-app-layout>
    @else
        <a href="{{ route('login') }}" class="nav-link">Login</a>
        <a href="{{ route('register') }}" class="nav-link">Register</a>
    @endauth
@endif
