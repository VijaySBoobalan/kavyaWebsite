@extends('layout.master')

@section('content')

	<div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page">
		<div class="container">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="icofont-home"></i></a></li>
					<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('services') }}">Services</a></li>
          <li class="breadcrumb-item active" aria-current="page">Air Fright</li>
				</ol>
			</nav>
			<h1>Services</h1>
			<div class="breadcrumbs-description">
				Meet the amazing team behind this project and find out more about how we work.
			</div>
		</div>
	</div>
	<!-- Page Breadcrumbs End -->
	<!-- Main Body Content Start -->
  <!-- Main Body Content Start -->
  <main id="body-content">

    <!-- What We Offer Start -->
    <section class="wide-tb-80 bg-fixed what-we-offer">
      <div class="container pos-rel">
        <div class="row align-items-center">

          <div class="col-md-6">            
            <h2 class="mb-4 fw-7 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s">
              Quality <span class="fw-3 txt-kavya-blue">and</span> Performance <br><span class="fw-3 txt-kavya-blue">at the right price</span>
            </h2>

            <p class="wow fadeInLeft" data-wow-duration="0" data-wow-delay="0.2s">Energistically utilize team driven niche markets rather than leveraged platforms. Monotonectally restore tactical "outside the box" thinking and technically sound deliverables. </p>

            <p class="wow fadeInLeft" data-wow-duration="0" data-wow-delay="0.4s">Compellingly develop fully researched process improvements through innovative opportunities. Credibly productize highly efficient potentialities for vertical core competencies. Quickly maintain pandemic experiences rather than low-risk high-yield processes.</p>
          </div>


          <div class="col-md-6">            
            
          </div>

        </div>
        
      </div>
    </section>
    <!-- What We Offer End -->


    <!-- Welcome To Cargo Start -->
<section class="bg-white wide-tb-100">
       
      <div class="container">
        <div class="row">
          <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
            <h1 class="heading-main">
              <span>what we offer</span>
              Suggested Our Main Services
            </h1>
          </div>
          <!-- Icon Box 1 -->
          <div class="col-md-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.1s">    
            <a href="{{ route('WHOperations') }}">          
              <div class="icon-box-1">
                <img src="{{ url('assets/images/blog_img_10.jpg') }}" alt="">
                <div class="text">
                  <i class="icofont-fork-lift"></i>
                  WAREHOUSE & HUB OPERATIONS
                </div>
              </div>              
            </a>
          </div>
          <!-- Icon Box 1 -->

          <!-- Icon Box 1 -->
          <div class="col-md-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.4s">
            <a href="{{ route('ContractLogistics') }}">
              <div class="icon-box-1">
                <img src="{{ url('assets/images/blog_img_9.jpg') }}" alt="">
                <div class="text">
                  <i class="icofont-exchange"></i>
                  CONTRACT LOGISTICS
                </div>
              </div>
            </a>              
          </div>
          <!-- Icon Box 1 -->

          <!-- Icon Box 1 -->
          <div class="col-md-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.6s">
            <a href="{{ route('CargoExpress') }}">          
              <div class="icon-box-1">
                <img src="{{ url('assets/images/blog_img_2.jpg') }}" alt="">
                <div class="text">
                  <i class="icofont-runner-alt-1"></i>
                  CARGO EXPRESS
                </div>
              </div>    
            </a>          
          </div>
          <!-- Icon Box 1 -->
        </div>
      </div>
    </section>
    <!-- Welcome To Cargo End -->
    <!-- Welcome To Cargo End -->

    <!-- What Makes Us Special Start -->
    <section class="bg-sky-blue wide-tb-100">
      <div class="container pos-rel">
        <div class="row">
          <div class="img-business-man">
            <img src="{{ url('assets/images/courier-man') }}.png" alt="">
          </div>
          <!-- Heading Main -->
          <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
            <h1 class="heading-main">
              <span>Our Goodness</span>
              What Makes Us Special
            </h1>
          </div>
          <!-- Heading Main -->
          <div class="col-md-6 ml-auto">
              <div class="row">
                <!-- Icon Box 2 -->
                <div class="col-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0s">              
                  <div class="icon-box-3 mb-5 bg-sky-blue">
                    <div class="media">
                        <div class="service-icon mr-5">
                            <i class="icofont-box"></i>
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
                <div class="col-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s">              
                  <div class="icon-box-3 mb-5 bg-sky-blue">
                    <div class="media">
                        <div class="service-icon mr-5">
                            <i class="icofont-shield"></i>
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
                <div class="col-12 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.4s">              
                  <div class="icon-box-3 bg-sky-blue">
                    <div class="media">
                        <div class="service-icon mr-5">
                            <i class="icofont-tree-alt"></i>
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
        </div>
        
      </div>
    </section>
    <!-- What Makes Us Special End -->

    <!-- How It Works Start -->
    <section class="bg-light-gray">
      <div class="container-fluid p-0">
        <div class="row align-items-center no-gutters">       
            <!-- Icon Boxes -->
            <div class="col-lg-4 text-center"> 
              <div class="px-5 wide-tb-100 wow slideInLeft" data-wow-duration="0" data-wow-delay="0s" >
                <div class="service-icon mx-auto mb-5 icon-box-5">
                    <i class="icofont-glass"></i>
                </div>
                <h4 class="h4-md">SAFE & SECURE</h4>
                Nunc non mollis nulla. Sed tconsectetur elit id mi consectetur bibendum.
              </div>
            </div>
            <!-- Icon Boxes -->
            
            <!-- Icon Boxes -->
            <div class="col-lg-4 text-center bg-fixed clients-bg pos-rel"> 
              <div class="bg-overlay white opacity-40"></div>
              <div class="px-5 wide-tb-100 wow slideInUp" data-wow-duration="0" data-wow-delay="0s" style="position: relative; z-index: 999;">
                <div class="service-icon mx-auto mb-5 icon-box-5">
                    <i class="icofont-delivery-time"></i>
                </div>
                <h4 class="h4-md">FAST DELIVERY</h4>
                Nunc non mollis nulla. Sed tconsectetur elit id mi consectetur bibendum.
              </div>
            </div>
            <!-- Icon Boxes -->

            <!-- Icon Boxes -->
            <div class="col-lg-4 text-center"> 
              <div class="px-5 wide-tb-100 wow slideInRight" data-wow-duration="0" data-wow-delay="0s">
                <div class="service-icon mx-auto mb-5 icon-box-5">
                    <i class="icofont-live-support"></i>
                </div>
                <h4 class="h4-md">24/7 Support</h4>
                Nunc non mollis nulla. Sed tconsectetur elit id mi consectetur bibendum.
              </div>
            </div>
            <!-- Icon Boxes -->
        </div>
      </div>        
    </section>
    <!-- How It Works End -->

    <!-- Client Testimonials Start -->
    <section class="wide-tb-100">
      <div class="container">
        <div class="row">
            <!-- Heading Main -->
            <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
              <h1 class="heading-main">
                <span>What Our</span>
                Customers Saying
              </h1>
            </div>
            <!-- Heading Main -->
            <div class="col-sm-12">
              <div class="owl-carousel owl-theme" id="home-client-testimonials">

                <!-- Client Testimonials Slider Item -->
                <div class="item">
                  <div class="client-testimonial bg-wave">
                    <div class="media">
                        <div class="client-testimonial-icon rounded-circle bg-navy-blue">
                            <img src="{{ url('assets/images/team_1.jpg') }}" alt="">
                        </div>
                        <div class="client-inner-content media-body">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Aliquam gravida, urna quis ornare imperdiet, </p>
                            <footer class="blockquote-footer"><cite title="Source Title">John Gerry  Design Hunt</cite></footer>
                        </div>
                    </div>
                  </div>
                </div>
                <!-- Client Testimonials Slider Item -->

                <!-- Client Testimonials Slider Item -->
                <div class="item">
                  <div class="client-testimonial bg-wave">
                    <div class="media">
                        <div class="client-testimonial-icon rounded-circle bg-navy-blue">
                            <img src="{{ url('assets/images/team_2.jpg') }}" alt="">
                        </div>
                        <div class="client-inner-content media-body">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Aliquam gravida, urna quis ornare imperdiet, </p>
                            <footer class="blockquote-footer"><cite title="Source Title">John Gerry  Design Hunt</cite></footer>
                        </div>
                    </div>
                  </div>
                </div>
                <!-- Client Testimonials Slider Item -->

                <!-- Client Testimonials Slider Item -->
                <div class="item">
                  <div class="client-testimonial bg-wave">
                    <div class="media">
                        <div class="client-testimonial-icon rounded-circle bg-navy-blue">
                            <img src="{{ url('assets/images/team_3.jpg') }}" alt="">
                        </div>
                        <div class="client-inner-content media-body">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Aliquam gravida, urna quis ornare imperdiet, </p>
                            <footer class="blockquote-footer"><cite title="Source Title">John Gerry  Design Hunt</cite></footer>
                        </div>
                    </div>
                  </div>
                </div>
                <!-- Client Testimonials Slider Item -->

              </div>
            </div>
        </div>
      </div>
    </section>
    <!-- Client Testimonials End -->

    <!-- Callout Start -->
    <section class="wide-tb-80 bg-scroll bg-img-6 pos-rel callout-style-1">
      <div class="bg-overlay blue opacity-60"></div>
      <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12 mb-0">
              <h4 class="h4-xl">Interested in working with Logzee?</h4>
            </div>
            <div class="col">
              <div class="center-text">
                We don’t just manage suppliers, we micro-manage them. We have a consultative, personalized approach
              </div>
            </div>
            <div class="col-sm-auto">
              <a href="#" class="btn btn-theme bg-white bordered">Get In Touch <i class="icofont-rounded-right"></i></a>
            </div>
        </div>
      </div>
    </section>
    <!-- Callout End -->    
  </main>


@endsection