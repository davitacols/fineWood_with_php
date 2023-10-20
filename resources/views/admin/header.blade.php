<div class="container-fluid page-body-wrapper">
  <!-- partial:partials/_navbar.html -->
  <nav class="navbar p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand" href="#"><img src="{{ asset('path/to/admin-logo.png') }}" alt="admin logo"></a>
    </div>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link btn btn-success create-new-button" href="#">+ Create New Project</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      @auth
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </li>
      @else
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">Login</a>
      </li>
      @if (Route::has('register'))
      <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">Register</a>
      </li>
      @endif
      @endauth
    </ul>
  </nav>
</div>
