<nav class="custom-navbar navbar navbar-expand-md navbar-light bg-white shadow navbar-static-top" aria-label="Fine Wood navigation bar">
    <div class="container">
        <!-- Replace this part with your logo image -->
        <a class="navbar-brand" href="{{ url('index.html') }}">
            <img src="{{ asset('images/fine_wood.png') }}" alt="Fine Wood Logo" width="50" height="50">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav mb-2 mb-md-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('index.html') }}">Home</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ url('shop.html') }}">Shop</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('about.html') }}">About us</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('services.html') }}">Services</a></li>

                <!-- Search Box -->
                <li class="nav-item">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Find Item">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </li>
                
                

                <!-- Authentication Links -->
                @if (Route::has('login'))
                    <div class="d-flex">
                        @auth
                            <div class="dropdown">
                                <button class="btn btn-secondary btn-xs dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="userDropdown">
                                    <li><a class="dropdown-item" href="{{ url('/home') }}">Settings</a></li>                              
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="dropdown-item">Logout</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-primary small-btn mx-2">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-secondary small-btn mx-2">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </ul>
        </div>
    </div>
</nav>