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
			<h1>Paper And Paper Board Industries</h1>
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
    <section class="wide-tb-80">
      <div class="container pos-rel">
        <div class="row align-items-start">

          <div class="col-md-12 col-lg-8">            
            <div class="row">
              <!-- Blog Items -->
              <div class="col-md-12">
                  <div class="text-left">
                    <img src="{{ url('assets/images/blog_single.jpg') }}" alt="" class="rounded mb-4">
                    <div class="meta-box"><a href="#">Business</a> <span>/</span>    September 28, 2018</div>
                    <h4 class="h4-md mb-3">Logistics Should Brace for Changes in Cargo</h4>
                    <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>

                    <p>Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>

                    <p>Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>

                  </div>
              </div>
              <!-- Blog Items -->
            </div>

          </div>


          <div class="col-md-12 col-lg-4">        
            <!-- Add Some Left Space -->    
            <aside class="sidebar-spacer row">

              <!-- Sidebar primary Start -->
              <div class="sidebar-primary col-lg-12 col-md-6">
                <!-- Recent Post Widget Start -->
                              <!-- Sidebar primary Start -->
              <div class="sidebar-primary col-lg-12 col-md-6">
                <!-- Recent Post Widget Start -->
                <div class="widget-wrap">
                  <h3 class="h3-md fw-7 mb-4">Recent Posts</h3>
                  <div class="blog-list-categories">
                    <ul class="list-unstyled">
                      <li class="active"><a href="{{ route('auto_parts') }}"> Auto Parts</a></li>
                      <li><a href="{{ route('engineering') }}">Engineering</a></li>
                      <li><a href="{{ route('merine') }}">Merine</a></li>
                      <li><a href="{{ route('food_industry') }}">Food Industry</a></li>
                      <li><a href="{{ route('construction_industry') }}">Construction Industry</a></li>
                      <li><a href="{{ route('steel_coils') }}">Steels & Coils</a></li>
                      <li><a href="{{ route('paper_board_industries') }}">Paper & Paper Board Industries</a></li>
                      <li><a href="{{ route('electronics_industries') }}">Electronics Industries</a></li>
                    </ul>                  
                  </div>
                </div>
              </div>
              <!-- Recent Post Widget End -->
                <!-- Text Widget Widget End --> 
              </div>
              <!-- Sidebar primary Start -->             

            </aside>
            <!-- Add Some Left Space -->    
          </div>

        </div>
        
      </div>
    </section>
    <!-- What We Offer End -->    
  </main>  
@endsection