<!doctype html>
<html lang="en">
  
<head>

@include('layout.header')

</head>
<body>

  <!-- Page loader Start -->
  <div id="pageloader">   
    <div class="loader-item">
      <div class="loader">
        <div class="spin"></div>
        <div class="bounce"></div>
      </div>
    </div>
  </div>
  
	@include('layout.menu')
	@include('layout.slider')
  @yield('content')
	@include('layout.footer')
	@include('layout.footer_script')


  </body>

</html>