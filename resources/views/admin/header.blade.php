<style>
  .container-scroller {
    position: relative;
    overflow: hidden;
    height: 100%;
    min-height: 100%;
  }

  .container-fluid.page-body-wrapper {
    height: 100%;
    min-height: 100%;
    padding-left: 0;
  }

  .navbar {
    padding: 0;
  }

  .navbar-brand-wrapper {
    padding: 0;
  }

  .navbar-brand {
    display: block;
    padding: 0;
  }

  .navbar-brand img {
    height: 50px;
    width: auto;
  }

  .navbar-nav {
    margin-left: auto;
  }

  .navbar-nav .nav-item {
    margin-left: 20px;
  }

  .navbar-nav .nav-item .nav-link {
    padding: 0;
    color: #4caf50;
    font-weight: 600;
  }

  .navbar-nav .nav-item .nav-link:hover {
    color: #45a049;
  }

  .navbar-nav .nav-item .nav-link.create-new-button {
    padding: 10px 20px;
    border-radius: 5px;
    background-color: #4caf50;
    color: #ffffff;
    font-weight: 600;
  }

  .navbar-nav .nav-item .nav-link.create-new-button:hover {
    background-color: #45a049;
  }

  .navbar-nav .nav-item .nav-link.create-new-button:focus {
    background-color: #45a049;
  }

  .navbar-nav .nav-item .nav-link.create-new-button:active {
    background-color: #45a049;
  }

  .navbar-nav .nav-item .nav-link.create-new-button:visited {
    background-color: #45a049;
  }

  .navbar-nav .nav-item .nav-link.create-new-button:link {
    background-color: #45a049;
  }

  .navbar-nav .nav-item .nav-link.create-new-button:disabled {
    background-color: #45a049;
  }

  .navbar-nav .nav-item .nav-link.create-new-button:not(:disabled):not(.disabled).active,
  .navbar-nav .nav-item .nav-link.create-new-button:not(:disabled):not(.disabled):active,
  .show>.btn-primary.dropdown-toggle.create-new-button {
    background-color: #45a049;
  }
</style>

<div class="container-fluid page-body-wrapper">
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
