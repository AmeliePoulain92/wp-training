<?php get_header(); ?>

<?php if(have_posts()): ?>
	<?php while(have_posts()): the_post(); ?>
		<h1><?php the_title('"', '"', true); ?></h1>
		<div class="description">
			<?php the_content(); ?>
		</div>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>