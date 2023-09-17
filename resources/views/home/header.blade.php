<nav class="custom-navbar navbar navbar-expand-md navbar-light bg-white shadow navbar-static-top" aria-label="Fine Wood navigation bar">
    <div class="container">
        <a class="navbar-brand" href="index.html">Fine Wood<span>.</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li><a class="nav-link" href="shop.html">Shop</a></li>
                <li><a class="nav-link" href="about.html">About us</a></li>
                <li><a class="nav-link" href="services.html">Services</a></li>
                <li><a class="nav-link" href="blog.html">Blog</a></li>
                <li><a class="nav-link" href="contact.html">Contact us</a></li>

                @if (Route::has('login'))
                @auth
                <li class="nav-item">
                    <!-- Include your custom content within the x-app-layout component -->
                    <x-app-layout>
                    <!-- Content of your x-app-layout component goes here -->
                    </x-app-layout>
                </li>
                @else
                <li><a class="btn btn-primary" href="{{ route('login') }}">Login</a></li>
                <li><a class="btn btn-subset" href="{{ route('register') }}">Register</a></li>
                @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>
