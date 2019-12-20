@extends('layout.master')

@section('content')

	<!-- Page Breadcrumbs Start -->
	<div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page">
		<div class="container">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="icofont-home"></i></a></li>
					<li class="breadcrumb-item active" aria-current="page">About Us</li>
				</ol>
			</nav>
			<h1>About  Us</h1>
			<div class="breadcrumbs-description">
				Meet the amazing team behind this project and find out more about how we work.
			</div>
		</div>
	</div>
	<!-- Page Breadcrumbs End -->
	<!-- Main Body Content Start -->
	<main id="body-content">
		<!-- What Makes Us Special Start -->
		<section class="wide-tb-80">
			<div class="container pos-rel">
				<div class="row align-items-center">
					<div class="col-md-6 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s">
						<h2 class="mb-4 fw-7">
						About <span class="fw-7 txt-kavya-blue">KavyaTransports</span>
						</h2>
						<p>We at Kavya Transports take immense pride in our status as pioneer in the Indian transport
							industry since last 15 years. “Kavya Transports” is the leading transport organization with fleet of tempos,
						trucks and trailers and built with the strong network across India at all the main stations.   </p>
						<p>Backed
							by the experience since 2004, we have the knowledge, expertise, confidence and infrastructure to
							cater to the ever changing requirements of our esteemed clients. Kavya Transports is equipped with the well
						experience human resources and latest technology of transport service.</p>
					</div>
					<div class="col-md-6 wow fadeInRight" data-wow-duration="0" data-wow-delay="0s">
						<img src="{{ url('assets/images/map-bg-orange.jpg') }}" alt="">
					</div>
				</div>
				
			</div>
		</section>
		<!-- What Makes Us Special End -->
		<!-- What Makes Us Special Start -->
		<section class="bg-light-gray wide-tb-100 pb-5 why-choose">
			<div class="container pos-rel">
				<div class="row">
					<!-- Heading Main -->
					<div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
						<h1 class="heading-main">
						<span>Our Goodness</span>
						What Makes Us Special
						</h1>
					</div>
					<!-- Heading Main -->
					
					<!-- Icon Box 2 -->
					<div class="col-12 col-lg-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0s">
						<div class="icon-box-2">
							<div class="media">
								<div class="service-icon">
									<i class="icofont-id"></i>
								</div>
								<div class="service-inner-content media-body">
									<h4 class="h4-md">Our Values</h4>
									<p>kavya Transports has always been values-driven. Our shared values guide our actions that help us make a difference. These values continue to direct the growth and business of all the  Group of business.</p>
								</div>
							</div>
						</div>
					</div>
					<!-- Icon Box -->
					<!-- Icon Box 2 -->
					<div class="col-12 col-lg-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s">
						<div class="icon-box-2">
							<div class="media">
								<div class="service-icon">
									<i class="icofont-live-support"></i>
								</div>
								<div class="service-inner-content media-body">
									<h4 class="h4-md">QUALIFIED EMPLOYEES</h4>
									<p>Express is a team of dedicated and qualified drivers, managers, and dispatchers who are ready to work for a personalized delivery solution to satisfy your needs.</p>
								</div>
							</div>
						</div>
					</div>
					<!-- Icon Box -->
					<!-- Icon Box 2 -->
					<div class="col-12 col-lg-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.4s">
						<div class="icon-box-2">
							<div class="media">
								<div class="service-icon">
									<i class="icofont-history"></i>
								</div>
								<div class="service-inner-content media-body">
									<h4 class="h4-md">24/7 ONLINE SUPPORT</h4>
									<p>Our online support is available 24 hours a day to answer your every question and help you solve any issue you may have before, during, or after the delivery process.</p>
								</div>
							</div>
						</div>
					</div>
					<!-- Icon Box -->
				</div>
				
			</div>
		</section>
		<!-- What Makes Us Special End -->
		<!-- Client Testimonials Start -->
		
		<!-- Client Testimonials End -->
		<!-- Counter Start -->
		<section class="wide-tb-100 mb-spacer-md">
			<div class="container wide-tb-100 pb-0">
				<div class="row d-flex align-items-center">
					<!-- Counter Col Start -->
					<div class="col col-12 col-lg-3 col-sm-6 wow slideInUp" data-wow-duration="0" data-wow-delay="0s">
						<div class="counter-style-1 light-bg">
							<p class="mb-1"><i class="icofont-google-map"></i></p>
							<span class="counter">4</span>
							<div>
								Our Locations
							</div>
						</div>
					</div>
					<!-- Counter Col End -->
					<!-- Counter Col Start -->
					<div class="col col-12 col-lg-3 col-sm-6 wow slideInUp" data-wow-duration="0" data-wow-delay="0.3s">
						<div class="counter-style-1 light-bg">
							<p class="mb-1"><i class="icofont-globe"></i></p>
							<span class="counter">110</span>
							<span>+</span>
							<div>
								Pan India
							</div>
						</div>
					</div>
					<!-- Counter Col End -->
					<!-- Spacer For Medium -->
					<div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>
					<!-- Spacer For Medium -->
					<!-- Counter Col Start -->
					<div class="col col-12 col-lg-3 col-sm-6 wow slideInUp" data-wow-duration="0" data-wow-delay="0.6s">
						<div class="counter-style-1 light-bg">
							<p class="mb-1"><i class="icofont-vehicle-delivery-van"></i></p>
							<span class="counter">240</span>
							<span>+</span>
							<div>
								Attached Vehicles
							</div>
						</div>
					</div>
					<!-- Counter Col End -->
					<!-- Counter Col Start --> <div class="col col-12 col-lg-3
					col-sm-6 wow slideInUp" data-wow-duration="0" data-wow-delay="0.9s"> <div
						class="counter-style-1 light-bg"> <p class="mb-1"><i
							class="icofont-umbrella-alt"></i></p> <span class="counter">2340</span> <div>
							Tonnes Transported Per Year </div> </div> </div> <!-- Counter Col End -->
							</div> </div>         </section> <!-- Counter End -->
							<!-- Tracking Your Freight Start -->
							<section class="pos-rel bg-sky-blue">
								<div class="container-fluid">
									<div class="row align-items-center">
										<div class="col-lg-5 col-12 p-0">
											<img src="{{ url('assets/images/why-choose-us.jpg') }}" class="w-100" alt="">
										</div>
										<div class="col-lg-6 col-12">
											<div class="p-5 about-whoose">
												<!-- Heading Main -->
												<h1 class="heading-main text-left mb-4">
												<span>Why Choose Us</span>
												Kavya Transports
												</h1>
												<!-- Heading Main -->
												
												<!-- Tracking Form -->
												<p>At Kavya Transports, we provide solutions delivering innovative transportation and logistics solutions that are vital to the success of the companies and people we serve. We’ve built our business on three core values: commitment to our customers, dedication to excellence and innovative thinking. Provide your business—small or large—with leasing solutions by developing new processes that meet your unique and ever evolving needs. We are a global provider of logistics, transportation and distribution services. We address transportation and logistics challenges facing individuals, small companies, and complex multinational organizations.</p>
												<!-- Tracking Form -->
											</div>
										</div>
									</div>
								</div>
							</section>
							<!-- Tracking Your Freight End -->
							
							<!-- Free Quote Start -->
							<section class="bg-white wide-tb-100 mb-spacer-md">
								<div class="container">
									<!-- Heading Main -->
									<div class="col-sm-12">
										<h1 class="heading-main">
										<span>Request a </span>
										Free Quote
										</h1>
									</div>
									<!-- Heading Main -->
									<div class="row">
										<!-- Right Text Start -->
										<div class="col-lg-4 wow fadeInRight" data-wow-duration="0" data-wow-delay="0.2s">
											<div class="align-self-stretch h-100 align-items-center d-flex bg-with-text">
											<spanp>What We Stand For</p>
											Wherever You Need To Go, We'll Help You Get There
										</div>
									</div>
									<!-- Right Text Start -->
									<!-- Spacer For Medium -->
									<div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>
									<!-- Spacer For Medium -->
									<div class="col-lg-8 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0.2s">
										<!-- Free Quote From -->
										<form action="#" method="post" novalidate="novalidate" class="rounded-field gray-field">
											<div class="form-row mb-4">
												<div class="col">
													<input type="text" name="name" class="form-control" placeholder="Your Name">
												</div>
												<div class="col">
													<input type="text" name="email" class="form-control" placeholder="Email">
												</div>
											</div>
											<div class="form-row mb-4">
												<div class="col">
													<select title="Please choose a package" required="" name="package" class="custom-select" aria-required="true" aria-invalid="false">
														<option value="">Transport Type</option>
														<option value="Type 1">Type 1</option>
														<option value="Type 2">Type 2</option>
														<option value="Type 3">Type 3</option>
														<option value="Type 4">Type 4</option>
													</select>
												</div>
												<div class="col">
													<select title="Please choose a package" required="" name="package" class="custom-select" aria-required="true" aria-invalid="false">
														<option value="">Type of freight</option>
														<option value="Type 1">Type 1</option>
														<option value="Type 2">Type 2</option>
														<option value="Type 3">Type 3</option>
														<option value="Type 4">Type 4</option>
													</select>
												</div>
											</div>
											<div class="form-row mb-4">
												<div class="col">
													<textarea rows="7" placeholder="Message" class="form-control"></textarea>
												</div>
											</div>
											<div class="form-row text-center">
												<button type="submit" class="form-btn mx-auto btn-theme bg-kavya-blue">Request Quote <i class="icofont-rounded-right"></i></button>
											</div>
										</form>
										<!-- Free Quote From -->
									</div>
									
								</div>
							</div>
						</section>
						<!-- Free Quote End -->
						<!-- Clients Start -->
						<section class="wide-tb-100 bg-fixed clients-bg pos-rel">
							<div class="bg-overlay blue opacity-80"></div>
							<div class="container">
								<div class="row">
									<!-- Heading Main -->
									<div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
										<h1 class="heading-main">
										<span>SOME OF OUR</span>
										Clients
										</h1>
									</div>
									<!-- Heading Main -->
									<div class="col-sm-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s">
										<div class="owl-carousel owl-theme" id="home-clients">
											<!-- Client Logo -->
											<div class="item icon-box-1" style="opacity: 1">
												<img src="{{ url('assets/images/clients/aadhi.png') }}" alt="" style="opacity: 1">
											</div>
											<!-- Client Logo -->
											<!-- Client Logo -->
											<div class="item  icon-box-1" style="opacity: 1">
												<img src="{{ url('assets/images/clients/ever.png') }}" alt="" style="opacity: 1">
											</div>
											<!-- Client Logo -->
											<!-- Client Logo -->
											<div class="item  icon-box-1" style="opacity: 1">
												<img src="{{ url('assets/images/clients/gocargo.png') }}" alt="" style="opacity: 1">
											</div>
											<!-- Client Logo -->
											<!-- Client Logo -->
											<div class="item  icon-box-1" style="opacity: 1">
												<img src="{{ url('assets/images/clients/halidon.png') }}" alt="" style="opacity: 1">
											</div>
											<!-- Client Logo -->
											<!-- Client Logo -->
											<div class="item  icon-box-1" style="opacity: 1">
												<img src="{{ url('assets/images/clients/hero.png') }}" alt="" style="opacity: 1">
											</div>
											<!-- Client Logo -->
											<!-- Client Logo -->
											<div class="item  icon-box-1" style="opacity: 1">
												<img src="{{ url('assets/images/clients/honda.png') }}" alt="" style="opacity: 1">
											</div>
											<!-- Client Logo -->
											<!-- Client Logo -->
											<div class="item  icon-box-1" style="opacity: 1">
												<img src="{{ url('assets/images/clients/indo.png') }}" alt="" style="opacity: 1">
											</div>
											<!-- Client Logo -->
											<!-- Client Logo -->
											<div class="item  icon-box-1" style="opacity: 1">
												<img src="{{ url('assets/images/clients/power.png') }}" alt="" style="opacity: 1">
											</div>
											<!-- Client Logo -->
											<!-- Client Logo -->
											<div class="item  icon-box-1" style="opacity: 1">
												<img src="{{ url('assets/images/clients/safi.png') }}" alt="" style="opacity: 1">
											</div>
											<!-- Client Logo -->
											<!-- Client Logo -->
											<div class="item  icon-box-1" style="opacity: 1">
												<img src="{{ url('assets/images/clients/sheba.png') }}" alt="" style="opacity: 1">
											</div>
											<!-- Client Logo -->
											<!-- Client Logo -->
											<div class="item  icon-box-1" style="opacity: 1">
												<img src="{{ url('assets/images/clients/vasu.png') }}" alt="" style="opacity: 1">
											</div>
											<!-- Client Logo -->
										</div>
									</div>
								</div>
							</div>
						</section>
						<!-- Clients End -->
						
						<!-- Callout Start -->
						<section class="wide-tb-80 bg-scroll bg-img-6 pos-rel callout-style-1">
							<div class="bg-overlay blue opacity-60"></div>
							<div class="container">
								<div class="row align-items-center">
									<div class="col-lg-4 col-md-12 mb-0 wow slideInUp" data-wow-duration="0" data-wow-delay="0.1s">
										<h4 class="h4-xl">Interested in working with Kavya Transports?</h4>
									</div>
									<div class="col wow slideInUp" data-wow-duration="0" data-wow-delay="0.2s">
										<div class="center-text">
											We don’t just manage suppliers, we micro-manage them. We have a consultative, personalized approach
										</div>
									</div>
									<div class="col-sm-auto wow slideInUp" data-wow-duration="0" data-wow-delay="0.3s">
										<a href="#" class="btn btn-theme bg-white bordered">Get In Touch <i class="icofont-rounded-right"></i></a>
									</div>
								</div>
							</div>
						</section>
						<!-- Callout End -->
					</main>
					<!-- Email Subscribe Start -->
					<section class="wide-tb-50 pb-0 bg-sky-blue footer-subscribe">
						<div class="container wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
							<div class="row">
								<div class="col-sm-12 d-flex col-md-12 col-lg-6 offset-lg-3">
									<div class="d- align-items-center d-sm-inline-flex  w-100">
										<div class="head">
											<span class="d-block">SUBSCRIBE For</span> NEWSLETTER
										</div>
										<form class="flex-nowrap col ml-auto">
											<input type="text" class="form-control" placeholder="Enter order number">
											<button type="submit" class="btn btn-theme bg-navy-blue">Check Now <i class="icofont-envelope"></i></button>
										</form>
									</div>
								</div>
								
							</div>
						</div>
					</section>
					<!-- Email Subscribe End -->

@endsection