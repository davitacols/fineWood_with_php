<!-- FineWood Template -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="David Ansa">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="Your Furniture Destination" />
    <meta name="keywords" content="furniture, home decor, FineWood" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Tiny Slider CSS -->
    <link href="css/tiny-slider.css" rel="stylesheet">

	<!-- Tailwind CSS -->
	<link href="css/tailwind.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <title>FineWood - Your Furniture Destination</title>
</head>

<body>

    <!-- Start Header/Navigation -->
    <nav class="custom-navbar navbar navbar-expand-md navbar-light bg-white shadow navbar-static-top" aria-label="Fine Wood navigation bar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('userpage') }}">
                <img src="{{ asset('images/fine_wood.png') }}" alt="Fine Wood Logo" width="50" height="50">
            </a>

            <!-- Toggler Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Navigation Links -->
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

                <!-- Search Form -->
                <form class="d-flex mx-3">
                    <div class="input-group">
                        <input class="form-control me-2 custom-search-input" type="search" placeholder="Search" aria-label="Find Item">
                        <button class="btn btn-outline-success custom-search-button" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>

                <!-- User Authentication -->
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
                        <h1>Checkout</h1>
                    </div>
                </div>
                <div class="col-lg-7">
                    <!-- Additional Content in Hero Section -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

	<!-- Checkout Form Section -->
	<div class="untree_co-section">
		<h2 class="text-2xl font-bold mb-4">Checkout</h2>
		<form method="POST" action="{{ route('checkout') }}" class="mt-4">
			@csrf

			<div class="mt-4">
				<label for="name" class="block text-sm font-medium text-gray-600">Name</label>
				<input id="name" class="form-input mt-1 block w-full rounded-md border-gray-300 focus:ring-indigo-500 focus:border-indigo-500" type="text" name="name" required autofocus />
			</div>

			<div class="mt-4">
				<label for="address" class="block text-sm font-medium text-gray-600">Address</label>
				<textarea id="address" class="form-input mt-1 block w-full rounded-md border-gray-300 focus:ring-indigo-500 focus:border-indigo-500" name="address" required></textarea>
			</div>

			<div class="grid grid-cols-2 gap-4 mt-4">
				<div>
					<label for="card_number" class="block text-sm font-medium text-gray-600">Card Number</label>
					<input id="card_number" class="form-input mt-1 block w-full rounded-md border-gray-300 focus:ring-indigo-500 focus:border-indigo-500" type="text" name="card_number" required />
				</div>
				<div>
					<label for="expiration_date" class="block text-sm font-medium text-gray-600">Expiration Date</label>
					<input id="expiration_date" class="form-input mt-1 block w-full rounded-md border-gray-300 focus:ring-indigo-500 focus:border-indigo-500" type="text" name="expiration_date" required />
				</div>
			</div>

			<div class="grid grid-cols-2 gap-4 mt-4">
				<div>
					<label for="cvv" class="block text-sm font-medium text-gray-600">CVV</label>
					<input id="cvv" class="form-input mt-1 block w-full rounded-md border-gray-300 focus:ring-indigo-500 focus:border-indigo-500" type="text" name="cvv" required />
				</div>
			</div>

			<div class="flex items-center justify-end mt-6">
				<button type="submit" class="px-6 py-3 text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-indigo-200 rounded-md">
					Place Order
				</button>
			</div>
		</form>
	</div>


    <!-- Start Footer Section -->
    <footer class="footer-section">
        <div class="container relative">
            <!-- Footer Content Goes Here -->
        </div>
    </footer>
    <!-- End Footer Section -->

    <!-- Bootstrap JavaScript and dependencies (Popper.js and jQuery) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Tiny Slider JavaScript -->
    <script src="js/tiny-slider.js"></script>

    <!-- Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>
</html>
