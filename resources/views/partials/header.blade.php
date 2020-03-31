<header class="banner">
	<div class="container">	
		<div class="row">
			<div class="col-lg-6">
				<a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
			</div>
			<div class="col-lg-6">
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<!-- <a class="navbar-brand" href="#">Navbar</a> -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				@if (has_nav_menu('primary_navigation'))
					{!! wp_nav_menu($primarymenu) !!}
				@endif
			</div>
		</div>
	</nav>
</header>