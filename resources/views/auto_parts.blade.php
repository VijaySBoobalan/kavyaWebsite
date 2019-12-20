@extends('layout.master')

@section('content')

<div class="slider bg-navy-blue bg-scroll pos-rel breadcrumbs-page">
		<div class="container">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="icofont-home"></i></a></li>
					<li class="breadcrumb-item active" aria-current="page">Auto Parts</li>
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
	<section class="wide-tb-100">
      <div class="container">
        <div class="row">
            <!-- Heading Main -->
            <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s" style="visibility: visible; animation-delay: 0s; animation-name: fadeInDown;">
              <h1 class="heading-main">
                <span>COMPANY'S NEWS</span>
                Recent Posts
              </h1>
            </div>
            <!-- Heading Main -->

            <!-- Blog Items -->
            <div class="col-sm-12 col-md-4 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                <div class="blog-warp">
                  <img src="{{ url('assets/images/blog_img_1.jpg') }}" alt="" class="rounded">
                  <div class="meta-box"><a href="#">Business</a> <span>/</span>    September 28, 2018</div>
                  <h4 class="h4-md mb-3"><a href="#">Freight Payment and Auditing Services</a></h4>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantiumg</p>
                </div>
            </div>
            <!-- Blog Items -->

            <!-- Blog Items -->
            <div class="col-sm-12 col-md-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="blog-warp">
                  <img src="{{ url('assets/images/blog_img_2.jpg') }}" alt="" class="rounded">
                  <div class="meta-box"><a href="#">Business</a> <span>/</span>    September 28, 2018</div>
                  <h4 class="h4-md mb-3"><a href="#">Freight Payment and Auditing Services</a></h4>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantiumg</p>
                </div>
            </div>
            <!-- Blog Items -->

            <!-- Blog Items -->
            <div class="col-sm-12 col-md-4 wow fadeInRight" data-wow-duration="0" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
                <div class="blog-warp">
                  <img src="{{ url('assets/images/blog_img_3.jpg') }}" alt="" class="rounded">
                  <div class="meta-box"><a href="#">Business</a> <span>/</span>    September 28, 2018</div>
                  <h4 class="h4-md mb-3"><a href="#">Freight Payment and Auditing Services</a></h4>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantiumg</p>
                </div>
            </div>
            <!-- Blog Items -->


        </div>
      </div>
    </section>
</main>

@endsection