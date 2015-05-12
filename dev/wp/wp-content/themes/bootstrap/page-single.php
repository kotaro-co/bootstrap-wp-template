<?php
/*
Template Name: Page-Single
*/
?>

<?php get_header(); ?>

<?php get_header(1); ?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>
<?php endif; ?>

<p><img src="http://placeimg.com/960/300/people" width="100%"></p>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-1 col-sm-0"></div>
			<div class="col-md-10 col-sm-12">
				<h1>What's this site?</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<div class="row">
					<div class="col-sm-4">
						<p><img src="http://placeimg.com/200/200/people" class="img-circle" width="100%"></p>
						<p class="text-center">Lorem ipsum dolor sit amet</p>
					</div>
					<div class="col-sm-4">
						<p><img src="http://placeimg.com/200/200/tech" class="img-circle" width="100%"></p>
						<p class="text-center">consectetur adipisicing elit</p>
					</div>
					<div class="col-sm-4">
						<p><img src="http://placeimg.com/200/200/nature" class="img-circle" width="100%"></p>
						<p class="text-center">sed do eiusmod</p>
					</div>
				</div>
			</div>
			<div class="col-md-1 col-sm-0"></div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-1 col-sm-0"></div>
			<div class="col-md-10 col-sm-12">
				<div class="row">
					<div class="col-sm-6">
						<h3>Point 1</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p><a class="btn btn-success btn-lg" href="#" role="button">Learn more</a></p>
					</div>
					<div class="col-sm-6">
						<p><img src="http://placeimg.com/320/240/people" width="100%"></p>
					</div>
				</div>
			</div>
			<div class="col-md-1 col-sm-0"></div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-1 col-sm-0"></div>
			<div class="col-md-10 col-sm-12">
				<div class="row">
					<div class="col-sm-6 col-sm-push-6">
						<h3>Point 2</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p><a class="btn btn-success btn-lg" href="#" role="button">Learn more</a></p>
					</div>
					<div class="col-sm-6 col-sm-pull-6">
						<p><img src="http://placeimg.com/320/240/tech" width="100%"></p>
					</div>
				</div>
			</div>
			<div class="col-md-1 col-sm-0"></div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-1 col-sm-0"></div>
			<div class="col-md-10 col-sm-12">
				<div class="row">
					<div class="col-sm-6">
						<h3>Point 3</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p><a class="btn btn-success btn-lg" href="#" role="button">Learn more</a></p>
					</div>
					<div class="col-sm-6">
						<p><img src="http://placeimg.com/320/240/nature" width="100%"></p>
					</div>
				</div>
			</div>
			<div class="col-md-1 col-sm-0"></div>
		</div>
	</div>
</section>

<?php get_footer(); ?>