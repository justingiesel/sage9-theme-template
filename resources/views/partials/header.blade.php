<header class="banner">
  	<div class="container">
    	<a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  			<!-- <a class="navbar-brand" href="#">Navbar</a> -->
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  			</button>

  			<div class="collapse navbar-collapse" id="navbarSupportedContent">
    			@if (has_nav_menu('primary_navigation'))
		  			{!! wp_nav_menu($primarymenu) !!}
				@endif
    			<form class="form-inline my-2 my-lg-0">
      				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    			</form>
  			</div>
		</nav>

    	<div class="row">
    		<div class="col-sm-6">
    			<p>Some text..</p>
    		</div>
    		<div class="col-sm-6">
    			<p>More text..</p>
    		</div>    	
    	</div>
  	</div>
</header>