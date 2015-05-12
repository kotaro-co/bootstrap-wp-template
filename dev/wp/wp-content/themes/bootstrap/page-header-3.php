<?php
/*
Template Name: Header3
*/
?>

<?php get_header(); ?>

<?php get_header(3); ?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>