<!doctype html>
<html lang="en">
  
<head>

@include('layout.header')

</head>
<body>

  <!-- Page loader Start -->
  <div id="pageloader">   
    <div class="loader-item">
      {{-- <div class="loader">
        <div class="spin"></div>
        <div class="bounce"></div>
      </div> --}}
      <img class="wow fadeInLeft" data-wow-duration="0" data-wow-delay="0.2s" src="{{ url('assets/images/logo1.jpeg') }}" alt="">
      <h1 class="wow fadeInRight" data-wow-duration="0" data-wow-delay="0.2s">Kavya Transports</h1>
    </div>
  </div>
  
	@include('layout.menu')

  @yield('slider')

  @yield('content')

	@include('layout.footer')
  
	@include('layout.footer_script')


  </body>

</html>