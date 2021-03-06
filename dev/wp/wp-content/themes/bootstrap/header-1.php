<header class="tr-header1">
<nav class="navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><span class="glyphicon glyphicon-leaf" aria-hidden="true"></span> <span class="txt-large"><?php bloginfo('name'); ?></span></a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
			<?php get_search_form(); ?>
			<?php wp_nav_menu( array( 'theme_location' => 'primary',
				'container_class' => 'menu',
				'menu_class' => 'nav navbar-nav navbar-right',
				'menu_id' => 'menu-primary-items',
				'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>' ) ); ?>
			<ul class="nav navbar-nav navbar-right">
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
