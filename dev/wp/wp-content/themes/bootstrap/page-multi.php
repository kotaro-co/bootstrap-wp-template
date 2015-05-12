<?php
/*
Template Name: Page-Multi
*/
?>

<?php get_header(); ?>

<?php get_header(2); ?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>
<?php endif; ?>

<div class="container">
	<div class="row">
		<div class="col-sm-8">
		<main>
			<p><img src="http://placeimg.com/640/300/people" width="100%"></p>
			<h1>What's this site?</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<hr>

			<div class="row">
				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-body">
							<p><img src="http://placeimg.com/200/140/people?=10" width="100%"></p>
							<p class="text-center">Lorem ipsum dolor sit amet</p>
							<a href="" class="btn btn-block"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> View Detail</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-body">
							<p><img src="http://placeimg.com/200/140/tech?=11" width="100%"></p>
							<p class="text-center">consectetur adipisicing elit</p>
							<a href="" class="btn btn-block"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> View Detail</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-body">
							<p><img src="http://placeimg.com/200/140/nature?=12" width="100%"></p>
							<p class="text-center">sed do eiusmod</p>
							<a href="" class="btn btn-block"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> View Detail</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-body">
							<p><img src="http://placeimg.com/200/140/people?=13" width="100%"></p>
							<p class="text-center">Lorem ipsum dolor sit amet</p>
							<a href="" class="btn btn-block"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> View Detail</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-body">
							<p><img src="http://placeimg.com/200/140/tech?=14" width="100%"></p>
							<p class="text-center">consectetur adipisicing elit</p>
							<a href="" class="btn btn-block"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> View Detail</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-body">
							<p><img src="http://placeimg.com/200/140/nature?=15" width="100%"></p>
							<p class="text-center">sed do eiusmod</p>
							<a href="" class="btn btn-block"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> View Detail</a>
						</div>
					</div>
				</div>
			</div>

			<h2>News</h2>
			<div class="media">
				<div class="media-left">
					<a href="#">
						<img src="http://placeimg.com/80/60/any" width="80">
					</a>
				</div>
				<div class="media-body">
					<dl>
						<dt>2015.01.01</dt>
						<dd><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</a></dd>
					</dl>
				</div>
			</div>
			<div class="media">
				<div class="media-left">
					<a href="#">
						<img src="http://placeimg.com/80/60/any?=1" width="80">
					</a>
				</div>
				<div class="media-body">
					<dl>
						<dt>2015.02.02</dt>
						<dd><a href="">tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</a></dd>
					</dl>
				</div>
			</div>
			<div class="media">
				<div class="media-left">
					<a href="#">
						<img src="http://placeimg.com/80/60/any?=2" width="80">
					</a>
				</div>
				<div class="media-body">
					<dl>
						<dt>2015.05.05</dt>
						<dd><a href="">Ut enim ad minim veniam</a></dd>
					</dl>
				</div>
			</div>
			<div class="media">
				<div class="media-left">
					<a href="#">
						<img src="http://placeimg.com/80/60/any?=3" width="80">
					</a>
				</div>
				<div class="media-body">
					<dl>
						<dt>2015.12.12</dt>
						<dd><a href="">proident, sunt in culpa qui officia deserunt mollit anim</a></dd>
					</dl>
				</div>
			</div>
		</main>
		</div>
		<div class="col-sm-4">
			<h3>Genre</h3>
			<div class="row">
				<div class="col-sm-6"><p><button type="button" class="btn btn-block btn-lg btn-primary"><span class="glyphicon glyphicon-music" aria-hidden="true"></span> Music</button></p></div>
				<div class="col-sm-6"><p><button type="button" class="btn btn-block btn-lg btn-primary"><span class="glyphicon glyphicon-film" aria-hidden="true"></span> Movie</button></p></div>
				<div class="col-sm-6"><p><button type="button" class="btn btn-block btn-lg btn-primary"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> Photo</button></p></div>
				<div class="col-sm-6"><p><button type="button" class="btn btn-block btn-lg btn-primary"><span class="glyphicon glyphicon-fire" aria-hidden="true"></span> Nature</button></p></div>
				<div class="col-sm-6"><p><button type="button" class="btn btn-block btn-lg btn-primary"><span class="glyphicon glyphicon-plane" aria-hidden="true"></span> Travel</button></p></div>
				<div class="col-sm-6"><p><button type="button" class="btn btn-block btn-lg btn-primary"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Money</button></p></div>
			</div>

			<h3>Ranking</h3>
			<div class="row">
				<div class="col-sm-1 col-xs-1"><h3>1</h3></div>
				<div class="col-sm-10 col-xs-10">
					<div class="media">
						<div class="media-left">
							<p><img src="http://placeimg.com/80/60/any?=20" width="80"></p>
						</div>
						<div class="media-body">
							<p><a href="">proident, sunt in culpa</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-1 col-xs-1"><h3>2</h3></div>
				<div class="col-sm-10 col-xs-10">
					<div class="media">
						<div class="media-left">
							<p><img src="http://placeimg.com/80/60/any?=21" width="80"></p>
						</div>
						<div class="media-body">
							<p><a href="">proident, sunt in culpa</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-1 col-xs-1"><h3>3</h3></div>
				<div class="col-sm-10 col-xs-10">
					<div class="media">
						<div class="media-left">
							<p><img src="http://placeimg.com/80/60/any?=22" width="80"></p>
						</div>
						<div class="media-body">
							<p><a href="">proident, sunt in culpa</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-1 col-xs-1"><h3>4</h3></div>
				<div class="col-sm-10 col-xs-10">
					<div class="media">
						<div class="media-left">
							<p><img src="http://placeimg.com/80/60/any?=23" width="80"></p>
						</div>
						<div class="media-body">
							<p><a href="">proident, sunt in culpa</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-1 col-xs-1"><h3>5</h3></div>
				<div class="col-sm-10 col-xs-10">
					<div class="media">
						<div class="media-left">
							<p><img src="http://placeimg.com/80/60/any?=24" width="80"></p>
						</div>
						<div class="media-body">
							<p><a href="">proident, sunt in culpa</a></p>
						</div>
					</div>
				</div>
			</div>

			<a class="twitter-timeline" href="https://twitter.com/CNN" data-widget-id="597767790720786432">@CNNさんのツイート</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

			<hr>
			<p><a href=""><img src="http://placehold.it/200x40/cccccc/ffffff&text=Banner1" width="100%"></a></p>
			<p><a href=""><img src="http://placehold.it/200x40/cccccc/ffffff&text=Banner2" width="100%"></a></p>
			<p><a href=""><img src="http://placehold.it/200x40/cccccc/ffffff&text=Banner3" width="100%"></a></p>
		</div>
	</div>
</div>

<?php get_footer(); ?>