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
				<a class="navbar-brand" href="{{ route('userblade') }}">
				<img src="{{ asset('images/fine_wood.png') }}" alt="Fine Wood Logo" width="50" height="50">
				</a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="custom-navbar-nav navbar-nav me-auto mb-2 mb-md-0">
					<li class="nav-item">
					<a class="nav-link" href="{{ url('index.html') }}">Home</a>
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
								<h1>Shop</h1>
							</div>
						</div>
						<div class="col-lg-7">
							
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		

		<!-- Start Product Section -->
		<div class="product-section">
			<div class="container">
				<div class="row">
				<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
					<div class="product-item">
					<img src="images/product-1.png" class="img-fluid product-thumbnail">
					<h3 class="product-title">Nordic Chair</h3>
					<strong class="product-price">$50.00</strong>

					<span class="icon-cross">
						<img src="images/cross.svg" class="img-fluid">
					</span>

					<a href="{{ route('cart') }}" class="btn btn-primary">Add to Cart</a>
					</div>
				</div>
				<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
					<div class="product-item">
					<img src="images/product-2.png" class="img-fluid product-thumbnail">
					<h3 class="product-title">Kruzo Aero Chair</h3>
					<strong class="product-price">$78.00</strong>

					<span class="icon-cross">
						<img src="images/cross.svg" class="img-fluid">
					</span>

					<a href="{{ route('cart') }}" class="btn btn-primary">Add to Cart</a>
					</div>
				</div>
				<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
					<div class="product-item">
					<img src="images/product-3.png" class="img-fluid product-thumbnail">
					<h3 class="product-title">Ergonomic Chair</h3>
					<strong class="product-price">$43.00</strong>

					<span class="icon-cross">
						<img src="images/cross.svg" class="img-fluid">
					</span>

					<a href="{{ route('cart') }}" class="btn btn-primary">Add to Cart</a>
					</div>
				</div>
				</div>
			</div>
		</div>



		<!-- Start Footer Section -->
		<footer class="footer-section">
			<div class="container relative">

				<div class="sofa-img">
					<img src="images/sofa.png" alt="Image" class="img-fluid">
				</div>

				<div class="row">
					<div class="col-lg-8">
						<div class="subscription-form">
							<h3 class="d-flex align-items-center"><span class="me-1"><img src="images/envelope-outline.svg" alt="Image" class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>

							<form action="#" class="row g-3">
								<div class="col-auto">
									<input type="text" class="form-control" placeholder="Enter your name">
								</div>
								<div class="col-auto">
									<input type="email" class="form-control" placeholder="Enter your email">
								</div>
								<div class="col-auto">
									<button class="btn btn-primary">
										<span class="fa fa-paper-plane"></span>
									</button>
								</div>
							</form>

						</div>
					</div>
				</div>

				<div class="row g-5 mb-5">
					<div class="col-lg-4">
						<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Furni<span>.</span></a></div>
						<p class="mb-4">Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant</p>

						<ul class="list-unstyled custom-social">
							<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
						</ul>
					</div>

					<div class="col-lg-8">
						<div class="row links-wrap">
							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">About us</a></li>
									<li><a href="#">Services</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="#">Contact us</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Support</a></li>
									<li><a href="#">Knowledge base</a></li>
									<li><a href="#">Live chat</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Our team</a></li>
									<li><a href="#">Leadership</a></li>
									<li><a href="#">Privacy Policy</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Nordic Chair</a></li>
									<li><a href="#">Kruzo Aero</a></li>
									<li><a href="#">Ergonomic Chair</a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>

				<div class="border-top copyright">
					<div class="row pt-4">
						<div class="col-lg-6">
							<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a>  Distributed By <a href="https://themewagon.com">ThemeWagon</a> <!-- License information: https://untree.co/license/ -->
            				</p>
						</div>

						<div class="col-lg-6 text-center text-lg-end">
							<ul class="list-unstyled d-inline-flex ms-auto">
								<li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>

					</div>
				</div>

			</div>
		</footer>
		<!-- End Footer Section -->	


		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>
	</body>

</html>
