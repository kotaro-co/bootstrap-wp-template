<header>
<nav class="navbar-white hidden-xs">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="#"><span class="glyphicon glyphicon-leaf" aria-hidden="true"></span> <span class="txt-large"><?php bloginfo('name'); ?></span></a>
		</div>
		<div class="collapse navbar-collapse">
			<?php get_search_form(); ?>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#help"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Help</a></li>
				<li><a href="#sitemap"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Sitemap</a></li>
				<li><a href="#privacy"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Privacy Policy</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>
<nav class="navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand visible-xs-block" href="#"><span class="glyphicon glyphicon-leaf" aria-hidden="true"></span> <span class="txt-large"><?php bloginfo('name'); ?></span></a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
			<div class="visible-xs-block"><?php get_search_form(); ?></div>
			<ul class="nav nav-justified">
				<li><a href="#">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#contact">Contact</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li class="dropdown-header">Nav header</li>
						<li><a href="#">Separated link</a></li>
						<li><a href="#">One more separated link</a></li>
					</ul>
				</li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>
</header>
