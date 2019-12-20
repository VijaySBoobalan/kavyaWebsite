<header class="fixed-top header-fullpage top-transparent wow fadeInDown">
    <div class="top-bar-right">
      <div class="container">
        <div class="row align-items-center">
          <div class="col">
            <i class="icofont-google-map"></i>  Kavya Transports
          </div>
          <div class="col-md-auto">

            <span class="mr-3"><i class="icofont-ui-touch-phone"></i> +91 90472 44000</span>,
            <span class="mr-3"><i class="icofont-ui-touch-phone"></i> +91 94868 71772</span>,
            <span class="mr-3"><i class="icofont-ui-touch-phone"></i> +91 93845 45215</span>

            <span class="mr-3"><i class="icofont-ui-email"></i> Email Us : info@kavyatransports.com</span>
            <!-- Topbar Language Dropdown Start -->
              <div class="dropdown d-inline-flex lang-toggle shadow-sm">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hover="dropdown" data-animations="slideInUp slideInUp slideInUp slideInUp">
                  <img src="{{ url('assets/images/ind.png') }}" alt="" class="dropdown-item-icon"> 
                  <span class="d-inline-block d-lg-none">INR</span>
                  <span class="d-none d-lg-inline-block">India</span> <i class="icofont-rounded-down"></i>
                </a>
                
              </div>            
              <!-- Topbar Language Dropdown End -->        
          </div>
        </div>
      </div>
    </div>
    
    <!-- Main Navigation Start -->
    <nav class="navbar navbar-expand-lg bg-transparent">
      <div class="container p-0 text-nowrap">
        <div class="d-flex align-items-center w-100 col pl-0">
          <a class="navbar-brand rounded-bottom light-bg" href="{{ route('home') }}">
            <img src="{{ url('assets/images/logo1.jpeg') }}" alt="">
          </a> 
        </div>
        <!-- Topbar Request Quote Start -->
        <div class="d-inline-flex request-btn order-lg-last col p-0"> 
          <a class="nav-link mr-2 ml-auto" href="#" id="search_home"><i class="icofont-search"></i></a>
          <a class="btn-theme icon-left bg-kavya-blue no-shadow align-self-center" href="#" role="button" data-toggle="modal" data-target="#request_popup"><i class="icofont-page"></i> <span class="d-none d-sm-inline-block"> Request Quote</span></a> 
          <!-- Toggle Button Start -->
          <button class="navbar-toggler x collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
          <!-- Toggle Button End -->  
        </div>
        <!-- Topbar Request Quote End -->

        <div class="collapse navbar-collapse" id="navbarCollapse" data-hover="dropdown" data-animations="slideInUp slideInUp slideInUp slideInUp">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">About Us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle-mob" href="index.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our Service Industry <i class="icofont-rounded-down"></i></a>
                <ul class="dropdown-menu">                  
                  <li><a class="dropdown-item" href="{{ route('auto_parts') }}">Auto Parts</a></li>
                  <li><a class="dropdown-item" href="{{ route('engineering') }}">Engineering</a></li>                  
                  <li><a class="dropdown-item" href="{{ route('merine') }}">Merine</a></li>
                  <li><a class="dropdown-item" href="{{ route('food_industry') }}">Food Industry</a></li>
                  <li><a class="dropdown-item" href="{{ route('construction_industry') }}">Construction Industry</a></li>                  
                  <li><a class="dropdown-item" href="{{ route('steel_coils') }}">Steel & Coils</a></li>

                  <li><a class="dropdown-item" href="{{ route('paper_board_industries') }}">Paper & Paper Board Industries</a></li>                    
                  <li><a class="dropdown-item" href="{{ route('electronics_industries') }}">Electronics Industries</a></li>                  
                                  
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('services') }}">Services</a>
              </li>
              {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle-mob" href="index.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Projects <i class="icofont-rounded-down"></i></a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="project-grid.html">Projects Grid</a></li>
                  <li><a class="dropdown-item" href="project-masonary.html">Projects Masonary</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle-mob" href="index.html" id="blog-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog <i class="icofont-rounded-down"></i></a>
                
                <ul class="dropdown-menu" aria-labelledby="blog-menu">
                  <li><a class="dropdown-item" href="blog-list.html">Blog List</a></li>
                  <li><a class="dropdown-item" href="blog-standard.html">Blog Standard</a></li>
                  <li><a class="dropdown-item" href="blog-grid.html">Blog Grid</a></li>
                  <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
                </ul>
              </li> --}}
              <li class="nav-item">
                <a class="nav-link" href="{{ route('Contact') }}">Contact Us</a>
              </li>
          </ul>
          <!-- Main Navigation End -->
        </div>
      </div>
    </nav>
    <!-- Main Navigation End -->
  </header>
