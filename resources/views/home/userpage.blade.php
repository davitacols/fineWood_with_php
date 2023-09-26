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
    <link href="home/css/bootstrap.min.css" rel="stylesheet">
    <link href="home/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="home/css/tiny-slider.css" rel="stylesheet">
    <link href="home/css/style.css" rel="stylesheet">
    <title>FineWood - Your Furniture Destination</title>
</head>

<body>

@include('home.header')

<!-- Start Hero Section -->
@include('home.slider')
<!-- End Hero Section -->

<!-- Start Product Section -->
@include('home.product')
<!-- End Product Section -->

<!-- Start Why Choose Us Section -->
@include('home.why')
<!-- End Why Choose Us Section -->

<!-- Start We Help Section -->
@include('home.help')
<!-- End We Help Section -->

<!-- Start Popular Product -->
@include('home.popular')
<!-- End Popular Product -->

@include('home.testimony')

<!-- Start Blog Section -->
<div class="blog-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6">
                <h2 class="section-title">Recent Blog</h2>
            </div>
            <div class="col-md-6 text-start text-md-end">
                <a href="#" class="more">View All Posts</a>
            </div>
        </div>

        <div class="row">

            <!-- Blog Post 1 -->
            <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                <div class="post-entry">
                    <a href="#" class="post-thumbnail"><img src="images/post-1.jpg" alt="Blog Post 1" class="img-fluid"></a>
                    <div class="post-content-entry">
                        <h3><a href="#">Top Furniture Trends in 2023</a></h3>
                        <div class="meta">
                            <span>by <a href="#">John Doe</a></span> <span>on <a href="#">Sep 1, 2023</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Blog Post 1 -->

            <!-- Blog Post 2 -->
            <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                <div class="post-entry">
                    <a href="#" class="post-thumbnail"><img src="images/post-2.jpg" alt="Blog Post 2" class="img-fluid"></a>
                    <div class="post-content-entry">
                        <h3><a href="#">Choosing the Perfect Sofa for Your Home</a></h3>
                        <div class="meta">
                            <span>by <a href="#">Jane Smith</a></span> <span>on <a href="#">Aug 28, 2023</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Blog Post 2 -->

            <!-- Blog Post 3 -->
            <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                <div class="post-entry">
                    <a href="#" class="post-thumbnail"><img src="images/post-3.jpg" alt="Blog Post 3" class="img-fluid"></a>
                    <div class="post-content-entry">
                        <h3><a href="#">Creating a Cozy Bedroom Space</a></h3>
                        <div class="meta">
                            <span>by <a href="#">Emily Johnson</a></span> <span>on <a href="#">Aug 25, 2023</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Blog Post 3 -->

        </div>
    </div>
</div>
<!-- End Blog Section -->

<!-- Start Footer Section -->
<footer class="footer-section">
    <div class="container relative">

        <div class="sofa-img">
            <img src="images/sofa.png" alt="Sofa Image" class="img-fluid">
        </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="subscription-form">
                    <h3 class="d-flex align-items-center"><span class="me-1"><img src="images/envelope-outline.svg" alt="Envelope Icon" class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>

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
                <img src="images\fine_wood.png" alt="Fine Wood Logo" width="75" height="75">
                <p class="mb-4">Explore a world of beautiful and functional furniture for your home. FineWood offers high-quality pieces to transform your living spaces.</p>

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
                            <li><a href="#">Shop</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-sm-6 col-md-3">
                        <ul class="list-unstyled">
                            <li><a href="#">Customer Support</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Shipping Information</a></li>
                            <li><a href="#">Returns & Exchanges</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-sm-6 col-md-3">
                        <ul class="list-unstyled">
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Cookie Policy</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-sm-6 col-md-3">
                        <ul class="list-unstyled">
                            <li><a href="#">Living Room Furniture</a></li>
                            <li><a href="#">Bedroom Furniture</a></li>
                            <li><a href="#">Dining Room Furniture</a></li>
                            <li><a href="#">Office Furniture</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-top copyright">
            <div class="row pt-4">
                <div class="col-lg-6">
                    <p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://yourwebsite.com">David Ansa</a> Distributed By <a href="https://themewagon.com">David Ansa</a>  <!-- License information: https://yourwebsite.com/license/ -->
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
