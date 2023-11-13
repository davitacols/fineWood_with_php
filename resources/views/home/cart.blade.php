<!-- /*
* Bootstrap 5
* Template Name: FineWood
* Template Author: David Ansa
* Template URI: github.com/davitacols
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Your Name">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JavaScript and dependencies (Popper.js and jQuery) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Bootstrap CSS -->
    <link href="home/css/bootstrap.min.css" rel="stylesheet">
    <link href="home/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="home/css/tiny-slider.css" rel="stylesheet">
    <link href="home/css/style.css" rel="stylesheet">
    <title>FineWood - Your Furniture Destination</title>
</head> 
<body>

<!-- Start Header/Navigation -->
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
<!-- End Header/Navigation -->

<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Cart</h1>
                </div>
            </div>
            <div class="col-lg-7">
                <!-- Additional content for the hero section -->
            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->

<div class="untree_co-section before-footer-section">
    <div class="container">
        <div class="row mb-5">
            <form class="col-md-12" method="post">
                <div class="site-blocks-table">
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="product-thumbnail">Image</th>
                            <th class="product-name">Product</th>
                            <th class="product-price">Price</th>
                            <th class="product-quantity">Quantity</th>
                            <th class="product-total">Total</th>
                            <th class="product-remove">Remove</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="product-thumbnail">
                                <img src="images/product-1.png" alt="Image" class="img-fluid">
                            </td>
                            <td class="product-name">
                                <h2 class="h5 text-black">Product 1</h2>
                            </td>
                            <td>$49.00</td>
                            <td>
                                <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-outline-black decrease" type="button">−</button>
                                    </div>
                                    <input type="text" class="form-control text-center quantity-amount" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-black increase" type="button">+</button>
                                    </div>
                                </div>
                            </td>
                            <td>$49.00</td>
                            <td><a href="{{ route('checkout') }}" class="btn btn-black btn-sm">X</a></td>
                        </tr>

                        <tr>
                            <!-- Repeat similar structure for other products -->
                        </tr>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>

        <div class="row">
          <!-- Cart update and continue shopping buttons -->
          < class="cart-buttons">
            <button class="update-cart-btn">Update Cart</button>
          <a href="{{ route('shop') }}" class="continue-shopping-btn">Continue Shopping</a>
        </div>

        <div class="row justify-content-end">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-12 text-right border-bottom mb-5">
                        <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                    </div>
                </div>
                <div class="row mb-3">
                  <!-- Cart subtotal -->
                  < class="cart-subtotal">
                  <span class="subtotal-label">Subtotal:</span>
                  <span class="subtotal-value">$50.00</span>
                </div>
                <div class="row mb-5">
                  <!-- Cart total -->
                  <div class="cart-total">
                      <span class="total-label">Total:</span>
                      <span class="total-value">$55.00</span>
                  </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='checkout.html'">Proceed To Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start Footer Section -->
<footer class="footer-section">
    <div class="container relative">
        <!-- Footer content here -->
    </div>
</footer>
<!-- End Footer Section -->

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/tiny-slider.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
