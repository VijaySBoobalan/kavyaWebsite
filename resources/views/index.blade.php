@extends('layout.master')

@section('content')

	<!-- Main Body Content Start -->
  <main id="body-content">
    <!-- Contact Callout Start -->
    <section class="contact-callout bg-kavya-blue wide-tb-70 mb-spacer-md">
      <div class="container">
        <div class="row">
          <!-- Contact Column One -->
          <div class="col-12 col-lg-3 col-sm-6">
            <div class="row align-items-start">
              <div class="col-sm-auto col-2 text-center">
                <i class="icofont-wall-clock icofont-2x"></i>
              </div>
              <div class="col pl-0">
                <h5 class="mb-3 h5-xs fw-6">OPENING HOURS</h5>
                <div class="text">
                  We Are Happy to Service <span align="center">24*7</span>
                </div>
              </div>
            </div>
          </div>
          <!-- Contact Column One -->

          <!-- Contact Column One -->
          <div class="col-12 col-lg-5 col-sm-6">
            <div class="row align-items-start">
              <div class="col-sm-auto col-2 text-center">
                <i class="icofont-phone icofont-2x"></i>
              </div>
              <div class="col pl-0">
                <h5 class="mb-3 h5-xs fw-6">CALL US ANYTIME</h5>
                <div class="text">
                  +91 90472 44000, 
                  +91 94868 71772, 
                  +91 93845 45215
                </div>
              </div>
            </div>
          </div>
          <!-- Contact Column One -->

          <!-- Spacer For Medium -->
          <!-- <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div> -->
          <!-- Spacer For Medium -->

          <!-- Contact Column One -->
          <div class="col-12 col-lg-4 col-sm-6">
            <div class="row align-items-start">
              <div class="col-sm-auto col-2 text-center">
                <i class="icofont-envelope icofont-2x"></i>
              </div>
              <div class="col pl-0">
                <h5 class="mb-3 h5-xs fw-6">EMAIL US</h5>
                <div class="text">
                  <a href="#" class="link-light">info@kavyatransports.com</a><br>
                  <a href="#" class="link-light">rajdhanabalan@kavyatransports.com</a><br>
                </div>
              </div>
            </div>
          </div>
          <!-- Contact Column One -->
         
        </div>
      </div>
    </section>
    <!-- Contact Callout End -->

    <!-- Welcome To Cargo Start -->
    <section class="bg-white wide-tb-100">
      <div class="container">
        <div class="row">
          <!-- Heading Main -->
          <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
            <h1 class="heading-main">
              <span>WELCOME TO</span>
              Kavya Transports
            </h1>
          </div>
          <!-- Heading Main -->

          <!-- Icon Box 1 -->
          <div class="col-md-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.1s">    
            <a href="service-details.html">          
              <div class="icon-box-1">
                <img src="{{ url('assets/images/icon-box-1.jpg') }}" alt="">
                <div class="text">
                  <i class="icofont-vehicle-delivery-van"></i>
                  Road Transportation
                </div>
              </div>              
            </a>
          </div>
          <!-- Icon Box 1 -->

          <!-- Icon Box 1 -->
          <div class="col-md-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.4s">
            <a href="service-details.html">
              <div class="icon-box-1">
                <img src="{{ url('assets/images/icon-box-2.jpg') }}" alt="">
                <div class="text">
                  <i class="icofont-airplane-alt"></i>
                  Ocean
                </div>
              </div>
            </a>              
          </div>
          <!-- Icon Box 1 -->

          <!-- Icon Box 1 -->
          <div class="col-md-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.6s">
            <a href="service-details.html">          
              <div class="icon-box-1">
                <img src="{{ url('assets/images/icon-box-3.jpg') }}" alt="">
                <div class="text">
                  <i class="icofont-ship"></i>
                  Warehouse & Hub Operations
                </div>
              </div>    
            </a>          
          </div>
          <!-- Icon Box 1 -->

        </div>
      </div>
    </section>
    <!-- Welcome To Cargo End -->

    <!-- What Makes Us Special Start -->
    <section class="bg-light-gray wide-tb-100 bg-wave">
      <div class="container pos-rel">
        <div class="row">
          <div class="img-business-man">
            <img src="{{ url('assets/images/business-man.png') }}" alt="">
          </div>
          <!-- Heading Main -->
          <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
            <h1 class="heading-main">
              <span>Our Goodness</span>
              What Makes Us Special
            </h1>
          </div>
          <!-- Heading Main -->
          <div class="col-md-8 ml-auto why-choose wow fadeInRight" data-wow-duration="0" data-wow-delay="0.6s">
              <div class="row">
                <!-- Icon Box 2 -->
                <div class="col-12 col-lg-6 special-box-fade">              
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
                <div class="col-12 col-lg-6">              
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

                <!-- Spacer For Medium -->
                <div class="w-100 spacer-60 d-none d-md-none d-lg-block d-sm-none"></div>
                <!-- Spacer For Medium -->

                <!-- Icon Box 2 -->
                <div class="col-12 col-lg-6 ">              
                  <div class="icon-box-2">
                    <div class="media">
                        <div class="service-icon">
                            <i class="icofont-history"></i>
                        </div>
                        <div class="service-inner-content media-body">
                            <h4 class="h4-md">Reliability & Punctuality</h4>
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis. Vivamus ac ultrices diam, vitae accumsan tellus.</p>
                        </div>
                    </div>
                  </div>              
                </div>
                <!-- Icon Box -->

                <!-- Icon Box 2 -->
                <div class="col-12 col-lg-6">              
                  <div class="icon-box-2">
                    <div class="media">
                        <div class="service-icon">
                            <i class="icofont-briefcase-1"></i>
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

              <div class="col-sm-12 text-center">
                <div class="spacer-50">
                </div>
                <a href="#" class="btn-theme bg-kavya-blue">Request Quote <i class="icofont-rounded-right"></i></a>
                <div class="spacer-30">
                </div>
              </div>
          </div>
        </div>
        
      </div>
    </section>
    <!-- What Makes Us Special End -->

    <!-- Counter Start -->
    <section class="wide-tb-100 bg-scroll counter-bg pos-rel">
      <div class="bg-overlay blue opacity-50"></div>
      <div class="container">
        <div class="row">
            <!-- Counter Col Start -->
            <div class="col counter-style-1 col-6 col-lg-3 col-sm-6 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s">
              <p><i class="icofont-google-map"></i></p>
              <span class="counter">4</span>
              <div>
                Our Locations
              </div>
            </div>
            <!-- Counter Col End -->

            <!-- Counter Col Start -->
            <div class="col counter-style-1 col-6 col-lg-3 col-sm-6 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s">
              <p><i class="icofont-globe"></i></p>
              <span class="counter">110</span>
              <span>+</span>
              <div>
                Pan India
              </div>
            </div>
            <!-- Counter Col End -->

            <!-- Spacer For Medium -->
            <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>
            <!-- Spacer For Medium -->

            <!-- Counter Col Start -->
            <div class="col counter-style-1 col-6 col-lg-3 col-sm-6 wow fadeInRight" data-wow-duration="0" data-wow-delay="0">
              <p><i class="icofont-vehicle-delivery-van"></i></p>
             <span class="counter">240</span>
              <span>+</span>
              <div>
                Attached Vehicles
              </div>
            </div>
            <!-- Counter Col End -->

            <!-- Counter Col Start -->
            <div class="col counter-style-1 col-6 col-lg-3 col-sm-6 wow fadeInRight" data-wow-duration="0" data-wow-delay="0s">
              <p><i class="icofont-umbrella-alt"></i></p>
              <span class="counter">2340</span>
              <span>+</span>
              <div>
                Tonnes Transported Per Year
              </div>
            </div>
            <!-- Counter Col End -->
        </div>
      </div>        
    </section>
    <!-- Counter End -->

    <!-- Tracking Your Freight Start -->
    <section class="wide-tb-100 pb-0">
      <div class="container">
        <div class="row">              
            <div class="col-lg-7 ml-lg-auto pos-rel col-md-12">               

              <!-- Heading Main -->
              <h1 class="heading-main text-left">
                <span>get updates</span>
                Tracking Your Freight
              </h1>
              <!-- Heading Main -->
              
              <!-- Tracking Form -->
              <form class="form-inline tracking">
                <input type="text" class="form-control mb-2 mr-sm-2 col" placeholder="Enter order number">
                <button type="submit" class="btn btn-theme bg-kavya-blue mb-2 ml-3">Check Now <i class="icofont-rounded-right"></i></button>
              </form>
              <!-- Tracking Form -->

              <!-- Forklift Image -->
              <div class="forklift-image wow slideInLeft" data-wow-duration="0" data-wow-delay="0s">
                <img src="{{ url('assets/images/6.png') }}" alt="" style="width: 675px;">
              </div>
              <!-- Forklift Image -->

            </div>              
        </div>
      </div>        
    </section>
    <!-- Tracking Your Freight End -->

    <!-- About Us Start -->
    <section class="bg-white wide-tb-100 mb-spacer-md">
      <div class="container">          
        <!-- Heading Main -->
        <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
          <h1 class="heading-main">
            <span>Who we are</span>
            About Us
          </h1>
        </div>
        <!-- Heading Main -->

        <div class="row wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s">
            <div class="col-lg-8">
              <!-- Blockquote Start -->
              <div class="about-bg bg-sky-blue">
                <div class="row d-flex align-items-end">                    
                  <div class="col-12 pt-5 order-sm-12 col-sm-6">
                    <blockquote class="blockquote style-one">
                      <p class="mb-0">There is no design without discipline. There is no discipline without intelligence.</p>
                      <footer class="blockquote-footer"><cite title="Source Title">Steven Snell Google</cite></footer>
                    </blockquote>
                  </div>
                  <div class="col-12 mb-0 order-sm-1 col-sm-6">
                    <img src="{{ url('assets/images/about_img.png') }}" alt="">
                  </div>
                </div>
              </div>
              <!-- Blockquote Start -->
            </div>

            <!-- Spacer For Medium -->
            <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>
            <!-- Spacer For Medium -->

            <!-- Right Text Start -->
            <div class="col-lg-4">
              <div class="align-self-stretch h-100 align-items-center d-flex bg-with-text">
                  Whether you require distribution or fulfillment, defined freight forwarding, or a complete supply chain solution, we are here for you.
              </div>
            </div>
            <!-- Right Text Start -->
        </div>

        <div class="row text-center mobile-100">
          <div class="col-sm-12">
            <div class="spacer-50"></div>
            <a href="#" class="btn-theme bg-kavya-blue">Request Quote <i class="icofont-rounded-right"></i></a>
            <a href="#" class="ml-5 link-kavya-blue icon-left play-video"><i class="icofont-play"></i> Watch Our Short Video</a>
          </div>
          <div class="video-box">
              <!-- close-video -->
              <div class="close-video">
                  <i class="fa fa-times"></i>
              </div><!-- /close-video -->
          </div><!-- /video-box -->
        </div>
      </div>
    </section>
    <!-- About Us End -->

    <!-- Free Quote Start -->
    <section class="wide-tb-100 bg-fixed free-quote pb-0">
      <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-7">
              <div class="free-quote-form">
                <!-- Heading Main -->
                <h1 class="heading-main mb-4">
                  <span>Request a </span>
                  Free Quote
                </h1>
                <!-- Heading Main -->

                <!-- Free Quote From -->
                <form action="#" method="post" novalidate="novalidate" class="col rounded-field">
                    <div class="form-row mb-4">
                        <input type="text" name="name" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-row mb-4">
                        <input type="text" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-row mb-4">
                        <select title="Please choose a package" required="" name="package" class="custom-select" aria-required="true" aria-invalid="false">
                            <option value="">Transport Type</option>
                            <option value="Type 1">Type 1</option>
                            <option value="Type 2">Type 2</option>
                            <option value="Type 3">Type 3</option>
                            <option value="Type 4">Type 4</option>
                        </select>
                    </div>
                    <div class="form-row mb-4">
                        <select title="Please choose a package" required="" name="package" class="custom-select" aria-required="true" aria-invalid="false">
                            <option value="">Type of freight</option>
                            <option value="Type 1">Type 1</option>
                            <option value="Type 2">Type 2</option>
                            <option value="Type 3">Type 3</option>
                            <option value="Type 4">Type 4</option>
                        </select>
                    </div>
                    <div class="form-row mb-4">
                      <textarea rows="7" placeholder="Message" class="form-control"></textarea>
                    </div>
                    <div class="form-row text-center">
                        <button type="submit" class="form-btn mx-auto btn-theme bg-kavya-blue">Submit Now <i class="icofont-rounded-right"></i></button>
                    </div>
                </form>
                <!-- Free Quote From -->
              </div>
            </div>
        </div>
      </div>
    </section>
    <!-- Free Quote End -->

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
                        <div class="client-testimonial-icon rounded-circle bg-kavya-blue">
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
                        <div class="client-testimonial-icon rounded-circle bg-kavya-blue">
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
                        <div class="client-testimonial-icon rounded-circle bg-kavya-blue">
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

    <!-- Client Testimonials Start -->
    <section class="wide-tb-80 bg-kavya-blue callout-style-1 wow fadeInUp" data-wow-duration="0" data-wow-delay="0s">
      <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12 mb-0">
              <h4 class="h4-xl">Interested in working with Kavya Transports?</h4>
            </div>
            <div class="col">
              <div class="center-text">
                We don’t just manage suppliers, we micro-manage them. We have a consultative, personalized approach
              </div>
            </div>
            <div class="col-sm-auto">
              <a href="#" class="btn-theme bg-white light">Get In Touch <i class="icofont-rounded-right"></i></a>
            </div>
        </div>
      </div>
    </section>
    <!-- Client Testimonials End -->

    <!-- Company News Start -->
    <section class="wide-tb-100">
      <div class="container">
        <div class="row">
            <!-- Heading Main -->
            <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
              <h1 class="heading-main">
                <span>COMPANY'S NEWS</span>
                Recent Posts
              </h1>
            </div>
            <!-- Heading Main -->

            <!-- Blog Items -->
            <div class="col-sm-12 col-md-4 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0.1s">
                <div class="blog-warp">
                  <img src="{{ url('images/blog_img_1.jpg') }}" alt="" class="rounded">
                  <div class="meta-box"><a href="#">Business</a> <span>/</span>    September 28, 2018</div>
                  <h4 class="h4-md mb-3"><a href="#">Freight Payment and Auditing Services</a></h4>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantiumg</p>
                </div>
            </div>
            <!-- Blog Items -->

            <!-- Blog Items -->
            <div class="col-sm-12 col-md-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.1s">
                <div class="blog-warp">
                  <img src="{{ url('images/blog_img_2.jpg') }}" alt="" class="rounded">
                  <div class="meta-box"><a href="#">Business</a> <span>/</span>    September 28, 2018</div>
                  <h4 class="h4-md mb-3"><a href="#">Freight Payment and Auditing Services</a></h4>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantiumg</p>
                </div>
            </div>
            <!-- Blog Items -->

            <!-- Blog Items -->
            <div class="col-sm-12 col-md-4 wow fadeInRight" data-wow-duration="0" data-wow-delay="0.1s">
                <div class="blog-warp">
                  <img src="{{ url('images/blog_img_3.jpg') }}" alt="" class="rounded">
                  <div class="meta-box"><a href="#">Business</a> <span>/</span>    September 28, 2018</div>
                  <h4 class="h4-md mb-3"><a href="#">Freight Payment and Auditing Services</a></h4>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantiumg</p>
                </div>
            </div>
            <!-- Blog Items -->


        </div>
      </div>
    </section>
    <!-- Company News End -->

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

    <!-- Google Map Start -->
    <section class="map-bg">
      <div class="contact-details row d-flex">
        <div class="col">
          <h4>Germany</h4>
          <p><i class="icofont-phone"></i> +1 (408) 786 - 5117</p>
          <div class="text-nowrap"><i class="icofont-email"></i> <a href="#">germany@Kavya Transports.com</a></div>
        </div>
        <div class="col">
          <h4>Spain</h4>
          <p><i class="icofont-phone"></i> +1 (408) 786 - 5117</p>
          <div class="text-nowrap"><i class="icofont-email"></i> <a href="#">spain@Kavya Transports.com</a></div>
        </div>
      </div>
      <div id="map-holder" class="pos-rel">
          <div id="map_extended">
              <p>This will be replaced with the Google Map.</p>
          </div>
      </div>      
    </section>     
    <!-- Google Map Start -->
  </main>
  <!-- Main Body Content Start -->


@endsection