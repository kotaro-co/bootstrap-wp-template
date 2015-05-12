<?php get_header(); ?>
<?php get_header(1); ?>

<main>
<div class="container">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<section>
				<h1><?php the_title(); ?></h1>
				<ul class="list-inline well well-sm">
					<li class="cal"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> <?php the_time('Y年m月j日') ?></li>
					<li class="cat"><span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span> <?php the_category(', ') ?></li>
					<li class="tag"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> <?php the_tags('', ', '); ?></li>
				</ul>
				<?php if(has_post_thumbnail()) { echo the_post_thumbnail(); } ?>
				<?php the_content(); ?>
			</section>
			<hr>
		<?php endwhile; ?>
			<nav>
				<ul class="pager">
					<li><?php previous_post_link('%link', '古い記事へ'); ?></li>
					<li><?php next_post_link('%link', '新しい記事へ'); ?></li>
				</ul>
			</nav>

	<?php else : ?>

		<h1>記事が見つかりませんでした。</h1>
		<p>検索で見つかるかもしれません。</p><br />
		<?php get_search_form(); ?>

	<?php endif; ?>
</div>
</main>

<?php get_footer(); ?>