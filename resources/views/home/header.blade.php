<nav class="custom-navbar navbar navbar-expand-md navbar-light bg-white shadow navbar-static-top" aria-label="Fine Wood navigation bar">
  <div class="container">
    <a class="navbar-brand" href="{{ route('userpage') }}">
      <img src="{{ asset('images/fine_wood.png') }}" alt="Fine Wood Logo" width="50" height="50">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="custom-navbar-nav navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('userpage') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('shop') }}">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('about.html') }}">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('services.html') }}">Services</a>
        </li>
      </ul>

      <form class="d-flex mx-3">
        <div class="input-group">
          <input class="form-control me-2 custom-search-input" type="search" placeholder="Search" aria-label="Find Item">
          <button class="btn btn-outline-success custom-search-button" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </form>

      @if (Route::has('login'))
        <div class="d-flex">
          @auth
            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->name }}
              </button>
              <ul class="dropdown-menu" aria-labelledby="userDropdown">
                <li>
                  <a class="dropdown-item" href="{{ url('/home') }}">Settings</a>
                </li>
                <li>
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item">
                      <i class="fas fa-sign-out-alt"></i> Logout
                    </button>
                  </form>
                </li>
              </ul>
            </div>
          @else
            <a href="{{ route('login') }}" class="btn btn-primary mx-2">Log in</a>

            @if (Route::has('register'))
              <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
            @endif
          @endauth
        </div>
      @endif
    </div>
  </div>
</nav>