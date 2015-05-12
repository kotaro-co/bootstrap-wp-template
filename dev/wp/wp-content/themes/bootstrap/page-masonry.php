<?php
/*
Template Name: Page-Masonry
*/
?>

<?php get_header(); ?>

<?php get_header(3); ?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>
<?php endif; ?>

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
		</div>
		<div class="col-md-1 col-sm-0"></div>
	</div>
</div>

<main>
<div class="tr-masonry-container">

	<div class="panel panel-default tr-masonry-item">
		<img src="http://placeimg.com/200/140/any?=1" width="238" height="167">
		<div class="panel-body">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
			<ul class="list-inline">
				<li><a href=""><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> 10</a></li>
				<li><a href=""><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 5</a></li>
				<li><a href=""><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> 2</a></li>
			</ul>
		</div>
		<ul class="list-group">
			<li class="list-group-item">
				<div class="media-left">
					<a href="#"><img src="http://placeimg.com/40/40/person?=1" width="40"></a>
				</div>
				<div class="media-body">
					Good Design.inc <br><b>Tech Archives</b>
				</div>
			</li>
		</ul>
	</div>

	<div class="panel panel-default tr-masonry-item">
		<img src="http://placeimg.com/200/140/any?=2" width="238" height="167">
		<div class="panel-body">
			<p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
			<ul class="list-inline">
				<li><a href=""><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> 10</a></li>
				<li><a href=""><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 5</a></li>
				<li><a href=""><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> 2</a></li>
			</ul>
		</div>
		<ul class="list-group">
			<li class="list-group-item">
				<div class="media-left">
					<a href="#"><img src="http://placeimg.com/40/40/person?=2" width="40"></a>
				</div>
				<div class="media-body">
					Good Design.inc <br><b>Tech Archives</b>
				</div>
			</li>
		</ul>
	</div>

	<div class="panel panel-default tr-masonry-item">
		<img src="http://placeimg.com/200/140/any?=3" width="238" height="167">
		<div class="panel-body">
			<p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p>
			<ul class="list-inline">
				<li><a href=""><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> 10</a></li>
				<li><a href=""><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 5</a></li>
				<li><a href=""><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> 2</a></li>
			</ul>
		</div>
		<ul class="list-group">
			<li class="list-group-item">
				<div class="media-left">
					<a href="#"><img src="http://placeimg.com/40/40/person?=3" width="40"></a>
				</div>
				<div class="media-body">
					Good Design.inc <br><b>Tech Archives</b>
				</div>
			</li>
		</ul>
	</div>

	<div class="panel panel-default tr-masonry-item">
		<img src="http://placeimg.com/200/140/any?=4" width="238" height="167">
		<div class="panel-body">
			<p>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<ul class="list-inline">
				<li><a href=""><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> 10</a></li>
				<li><a href=""><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 5</a></li>
				<li><a href=""><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> 2</a></li>
			</ul>
		</div>
		<ul class="list-group">
			<li class="list-group-item">
				<div class="media-left">
					<a href="#"><img src="http://placeimg.com/40/40/person?=4" width="40"></a>
				</div>
				<div class="media-body">
					Good Design.inc <br><b>Tech Archives</b>
				</div>
			</li>
		</ul>
	</div>

	<div class="panel panel-default tr-masonry-item">
		<img src="http://placeimg.com/200/140/any?=5" width="238" height="167">
		<div class="panel-body">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
			<ul class="list-inline">
				<li><a href=""><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> 10</a></li>
				<li><a href=""><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 5</a></li>
				<li><a href=""><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> 2</a></li>
			</ul>
		</div>
		<ul class="list-group">
			<li class="list-group-item">
				<div class="media-left">
					<a href="#"><img src="http://placeimg.com/40/40/person?=5" width="40"></a>
				</div>
				<div class="media-body">
					Good Design.inc <br><b>Tech Archives</b>
				</div>
			</li>
		</ul>
	</div>

	<div class="panel panel-default tr-masonry-item">
		<img src="http://placeimg.com/200/140/any?=6" width="238" height="167">
		<div class="panel-body">
			<p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
			<ul class="list-inline">
				<li><a href=""><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> 10</a></li>
				<li><a href=""><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 5</a></li>
				<li><a href=""><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> 2</a></li>
			</ul>
		</div>
		<ul class="list-group">
			<li class="list-group-item">
				<div class="media-left">
					<a href="#"><img src="http://placeimg.com/40/40/person?=6" width="40"></a>
				</div>
				<div class="media-body">
					Good Design.inc <br><b>Tech Archives</b>
				</div>
			</li>
		</ul>
	</div>

	<div class="panel panel-default tr-masonry-item">
		<img src="http://placeimg.com/200/140/any?=7" width="238" height="167">
		<div class="panel-body">
			<p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p>
			<ul class="list-inline">
				<li><a href=""><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> 10</a></li>
				<li><a href=""><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 5</a></li>
				<li><a href=""><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> 2</a></li>
			</ul>
		</div>
		<ul class="list-group">
			<li class="list-group-item">
				<div class="media-left">
					<a href="#"><img src="http://placeimg.com/40/40/person?=7" width="40"></a>
				</div>
				<div class="media-body">
					Good Design.inc <br><b>Tech Archives</b>
				</div>
			</li>
		</ul>
	</div>

	<div class="panel panel-default tr-masonry-item">
		<img src="http://placeimg.com/200/140/any?=8" width="238" height="167">
		<div class="panel-body">
			<p>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<ul class="list-inline">
				<li><a href=""><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> 10</a></li>
				<li><a href=""><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 5</a></li>
				<li><a href=""><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> 2</a></li>
			</ul>
		</div>
		<ul class="list-group">
			<li class="list-group-item">
				<div class="media-left">
					<a href="#"><img src="http://placeimg.com/40/40/person?=8" width="40"></a>
				</div>
				<div class="media-body">
					Good Design.inc <br><b>Tech Archives</b>
				</div>
			</li>
		</ul>
	</div>

</div>

<nav class="text-center">
	<ul class="pagination">
		<li><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
		<li class="active"><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">5</a></li>
		<li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
	</ul>
</nav>

</main>

<script src="<?php bloginfo('template_url'); ?>/assets/js/masonry.pkgd.min.js"></script>
<script>
$(function(){
	$('.tr-masonry-container').masonry({
		columnWidth: 240,
		itemSelector: '.tr-masonry-item',
		"gutter": 20,
		"isFitWidth": true
	});
});
</script>

<?php get_footer(); ?>