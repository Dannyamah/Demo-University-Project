<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from noyon.me/html/academ-preview/{{ route('welcome') }} by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Dec 2022 13:21:38 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Swift University</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="manifest" href="site.html">
	<link rel="apple-touch-icon" href="icon.png">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
	<!-- Place favicon.ico in the root directory -->

	<!-- bootstrap v4.0.0 -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- font-awesome css -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- themify-icons css -->
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<!-- themify-icons css -->
	<link rel="stylesheet" href="assets/css/ionicons.min.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- cssanimation css -->
	<link rel="stylesheet" href="assets/css/cssanimation.min.css">
	<!-- jquery-ui.min css -->
	<link rel="stylesheet" href="assets/css/jquery-ui.min.css">
	<!-- venobox css -->
	<link rel="stylesheet" href="assets/css/venobox.css">
	<!-- jquery.mmenu css -->
	<link rel="stylesheet" href="assets/css/jquery.mmenu.css">
	<!-- slick css -->
	<link rel="stylesheet" href="assets/css/slick.css">
	<!-- slick-theme css -->
	<link rel="stylesheet" href="assets/css/slick-theme.css">
	<!-- helper css -->
	<link rel="stylesheet" href="assets/css/helper.css">
	<!-- style css -->
	<link rel="stylesheet" href="style.css">
	<!-- responsive css -->
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
	<!--[if lte IE 9]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!--header-area start-->
	<header id="sticker" class="header-area">
		<div class="container-fluid">
			<div class="row height-100 align-items-center">
				<div class="col-xl-2 col-lg-2 col-sm-4 col-4">
					<div class="logo">
						<a href="{{ route('welcome') }}"><img src="assets/images/logo.png" alt="logo" /></a>
					</div>
				</div>
				<div class="col-xl-6 col-lg-8 col-sm-2 col-2">
					<div class="mainmenu">
						<nav>
							<ul>
								<li><a href="{{ route('welcome') }}">Home</a>
								</li>
								<li><a href="{{ route('courses') }}">Courses</a>
								</li>
								<li><a href="{{ route('events') }}">Events</a>
								</li>
								<li><a href="{{ route('gallery') }}">Gallery</a>
								</li>
								<li><a href="{{ route('blog') }}">Blog</a>
								</li>
								<li><a href="{{ route('shop') }}">Shop</a>
								</li>
								<li><a href="{{ route('contact') }}">Contact</a></li>
							</ul>
						</nav>
					</div>
					<div class="d-hidden mobile-menu">
						<nav id="mobile-menu">
							<ul>
								<li><a href="{{ route('welcome') }}">Home</a>
								</li>
								<li><a href="{{ route('courses') }}">Courses</a>
								</li>
								<li><a href="{{ route('events') }}">Events</a>
								</li>
								<li><a href="{{ route('gallery') }}">Gallery</a>
								</li>
								<li><a href="{{ route('blog') }}">Blog</a>
								</li>
								<li><a href="{{ route('shop') }}">Shop</a>
								</li>
								<li><a href="{{route('contact')}}">Contact</a>
                                </li>
								<li><a href="{{route('register')}}">Register</a>
                                    <span>/</span>
                                    <a href="{{route('login')}}">Sign In</a>
							</ul>
						</nav>
					</div>
				</div>
				<div class="col-xl-4 col-lg-2 col-sm-6 col-6">
					<div class="header-right text-right">
						<a href="{{ route('login') }}" class="btn-common ds-md-none mr-90">Get Started</a>
						<div class="mini-cart">
							<ul>
								<li class="mmenu-icon"><a href="#mobile-menu"><i class="fa fa-bars"></i></a></li>
								<li><a href="javascript:void(0);" class="minicart-icon"><i class="fa fa-shopping-cart"></i></a>
									<div class="cart-dropdown">
										<ul>
											<li>
												<div class="mini-cart-thumb">
													<a href="javascript:void(0);"><img src="assets/images/products/cart/thumb-1.jpg" alt="" /></a>
												</div>
												<div class="mini-cart-heading">
													<span>$460.00 x 1</span>
													<h5><a href="#">Kabino Bedside Table</a></h5>
												</div>
												<div class="mini-cart-remove">
													<button><i class="ion-ios-close"></i></button>
												</div>
											</li>
											<li>
												<div class="mini-cart-thumb">
													<a href="#"><img src="assets/images/products/cart/thumb-2.jpg" alt="" /></a>
												</div>
												<div class="mini-cart-heading">
													<span>$460.00 x 1</span>
													<h5><a href="#">Kabino Bedside Table</a></h5>
												</div>
												<div class="mini-cart-remove">
													<button><i class="ion-ios-close"></i></button>
												</div>
											</li>
										</ul>
										<div class="minicart-total fix">
											<span class="pull-left">total:</span>
											<span class="pull-right">$460.00</span>
										</div>
										<div class="mini-cart-checkout">
											<a href="" class="btn-common view-cart">VIEW CART</a>
											<a href="" class="btn-common checkout mt-10">CHECK OUT</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
                        @if (Auth::user())

						<div class="register-login">
							<a href="{{ route('dashboard') }}">Dashboard</a>
						</div>
                        @else

						<div class="register-login">
							<a href="{{route('register')}}">Register</a>
							<span>/</span>
							<a href="javascript:void(0);" data-toggle="modal" data-target="#login">Sign in</a>
						</div>
                        @endif
					</div>
				</div>
			</div>
		</div>
	</header>
	<!--header-area end-->

{{$slot}}

<!--footer-area start-->
<footer class="footer-area mt-60">
    <!--footer-top-->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="company-info">
                        <img src="assets/images/logo.png" alt="logo" />
                        <ul class="list-none">
                            <li>
                                <span>Email:</span>
                                <a href="#">Educate.support@info.com</a>
                            </li>
                            <li>
                                <span>Call directly:</span>
                                <a href="#">(+88) 111 555 666</a>
                            </li>
                            <li>
                                <span>Address:</span>
                                <a href="#">40 Baria Sreet 133/2 NewYork City, US</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget">
                        <h3>Our Links</h3>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="footer-menu">
                                    <ul class="list-none">
                                        <li><a href="#">Teachers</a></li>
                                        <li><a href="{{ route('courses') }}">Courses</a></li>
                                        <li><a href="#">Support</a></li>
                                        <li><a href="#">Why Edugate</a></li>
                                        <li><a href="#">Social Media</a></li>
                                        <li><a href="#">Site Map</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="footer-menu">
                                    <ul class="list-none">
                                        <li><a href="#">Company</a></li>
                                        <li><a href="{{ route('courses') }}">Latest Courses</a></li>
                                        <li><a href="#">Partners</a></li>
                                        <li><a href="{{ route('blog') }}">Blog Posts</a></li>
                                        <li><a href="#">Help Topic</a></li>
                                        <li><a href="#">Policies</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget mt-30">
                        <h3>Recent Posts</h3>
                        <div class="recent-posts mt-05">
                            <ul class="list-none">
                                <li>
                                    <h4><a href="#">How to get better at learning</a></h4>
                                    <ul class="list-none">
                                        <li><a href="#">December 05, 2019</a></li>
                                        <li><span>|</span></li>
                                        <li>By <a href="#">Ms. Lucius</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h4><a href="#">The future of web design</a></h4>
                                    <ul class="list-none">
                                        <li><a href="#">December 05, 2019</a></li>
                                        <li><span>|</span></li>
                                        <li>By <a href="#">Ms. Lucius</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <h4><a href="#">How to get better at website</a></h4>
                                    <ul class="list-none">
                                        <li><a href="#">December 05, 2019</a></li>
                                        <li><span>|</span></li>
                                        <li>By <a href="#">Ms. Lucius</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget mt-30">
                        <h3>Our Gallery</h3>
                        <div class="footer-gallery mt-20">
                            <a href="#"><img src="assets/images/gallery/1.jpg" alt="" /></a>
                            <a href="#"><img src="assets/images/gallery/2.jpg" alt="" /></a>
                            <a href="#"><img src="assets/images/gallery/3.jpg" alt="" /></a>
                            <a href="#"><img src="assets/images/gallery/4.jpg" alt="" /></a>
                            <a href="#"><img src="assets/images/gallery/5.jpg" alt="" /></a>
                            <a href="#"><img src="assets/images/gallery/6.jpg" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer-bottom-->
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="copyright-text">
                        <p>Copyright 2019 Academ - All Right Reserved</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 d-xs-none">
                    <ul class="list-none">
                        <li><a href="#">Policy</a></li>
                        <li><a href="#">Term & Conditions</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">FAQs</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer-area end-->

<!-- modernizr js -->
<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
<!-- jquery-3.3.1 version -->
<script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
<!-- jquery-migrate-3.0.0.min.js version -->
<script src="assets/js/vendor/jquery-migrate-3.0.0.min.js"></script>
<!-- bootstra.min js -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- jquery-ui.min js -->
<script src="assets/js/jquery-ui.min.js"></script>
<!-- mmenu js -->
<script src="assets/js/jquery.mmenu.js"></script>
<!---venobox-js-->
<script src="assets/js/venobox.min.js"></script>
<!---slick-js-->
<script src="assets/js/slick.min.js"></script>
<!---counterup-js-->
<script src="assets/js/jquery.counterup.min.js"></script>
<!---waypoints-js-->
<script src="assets/js/waypoints.js"></script>
<!-- jquery.countdown js -->
<script src="assets/js/jquery.countdown.min.js"></script>
<!---isotop-js-->
<script src="assets/js/isotope.pkgd.min.js"></script>
<!---letteranimation-js-->
<script src="assets/js/letteranimation.min.js"></script>
<!-- plugins js -->
<script src="assets/js/plugins.js"></script>
<!-- main js -->
<script src="assets/js/main.js"></script>

<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body login-popup">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-close"></i>
                </button>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="login-left overlay">
                            <img src="assets/images/register/4.jpg" alt="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="login-right pr-30">
                            <div class="section-title">
                                <h3>Sign Up and Connect to <br/> Academ</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                            </div>
                            <div class="input-form register-form mt-10">
                                <form id="contactForm" data-toggle="validator" method="POST" action="{{route('login')}}"> @csrf
                                    <div class="row">
                                        <div class="col-sm-12 mt-25">
                                            <label>Email*</label>
                                            <input type="text" name="email" />
                                        </div>
                                        <div class="col-sm-12 mt-25">
                                            <label>Password*</label>
                                            <input type="password" name="password"/>
                                        </div>
                                        <div class="col-lg-6 mt-30">
                                            <input type="checkbox" id="agree" />
                                            <label for="agree">Remember</label>
                                        </div>
                                        <div class="col-lg-6 mt-30">
                                            <button class="btn-common">Login</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

<!-- Mirrored from noyon.me/html/academ-preview/{{ route('welcome') }} by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Dec 2022 13:21:38 GMT -->
</html>
