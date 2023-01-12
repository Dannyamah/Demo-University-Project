<x-guest-layout>


	<!--page-banner-area start-->
	<div class="page-banner height-200 bg-1">
		<div class="d-table">
			<div class="page-title vertical-middle text-center">
				<h2>Contact</h2>
			</div>
		</div>
	</div>
	<!--page-banner-area end-->

	<!--breadcrumb-area start-->
	<div class="breadcrumb-area mt-25">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="site-breadcrumb">
						<ul class="list-none">
							<li><a href="{{ route('welcome') }}">Home</a></li>
							<li><i class="fa fa-angle-right"></i></li>
							<li>Contact</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--breadcrumb-area end-->

	<!--contact-us-area start-->
	<div class="contact-area mt-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="customer-supporter">
						<div class="section-title style-4">
							<h2>How can we help you?</h2>
						</div>
						<div class="single-supporter mt-70">
							<div class="row">
								<div class="col-md-5">
									<img src="assets/images/contact/1.jpg" alt="" />
								</div>
								<div class="col-md-7">
									<div class="supporter-desc mt-sm-20">
										<h3>Azure Wilson</h3>
										<p>Customer Realations</p>
										<p>963.806.0919</p>
										<p>AzureWilson@consulting.com</p>
									</div>
								</div>
							</div>
						</div>
						<div class="single-supporter mt-65">
							<div class="row">
								<div class="col-md-5">
									<img src="assets/images/contact/2.jpg" alt="" />
								</div>
								<div class="col-md-7">
									<div class="supporter-desc mt-sm-20">
										<h3>Keith Wilson</h3>
										<p>Customer Support</p>
										<p>963.806.0919</p>
										<p>KeithWilson@consulting.com</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="contact-form input-form mt-sm-50">
						<form id="contactForm" method="POST" action="https://formspree.io/lionsbite69@gmail.com">
							<div class="row">
								<div class="col-sm-12">
									<input type="text" name="name" placeholder="Name" required />
								</div>
								<div class="col-sm-12 mt-30">
									<input type="text" name="email" placeholder="Email" required />
								</div>
								<div class="col-sm-12 mt-30">
									<input type="text" name="subject" placeholder="Subject" required />
								</div>
								<div class="col-sm-12 mt-30">
									<textarea name="message" placeholder="Message" required></textarea>
								</div>
								<div class="col-sm-12 mt-40">
									<button class="btn-common d-inline-block">Send message</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--contact-us-area end-->

	<!--google-map area start-->
	<div class="google-map-area mt-80">
		<div id="googleMap" style="width:100%;height:620px;"></div>
	</div>
	<!--google-map area end-->

	<!--office-address-area start-->
	<div class="office-address-area mt-70">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="office-address">
						<h3>France</h3>
						<p>40 Baria Sreet 133/2 NewYork City, US</p>
						<p>Email: info.contact@gmail.com</p>
						<p>Phone: 123-456-7890</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="office-address">
						<h3>United States</h3>
						<p>40 Baria Sreet 133/2 NewYork City, US</p>
						<p>Email: info.contact@gmail.com</p>
						<p>Phone: 123-456-7890</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="office-address">
						<h3>Viet Nam</h3>
						<p>40 Baria Sreet 133/2 NewYork City, US</p>
						<p>Email: info.contact@gmail.com</p>
						<p>Phone: 123-456-7890</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--office-address-area end-->

</x-guest-layout>
