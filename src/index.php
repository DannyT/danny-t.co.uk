<?php get_header(); ?>
<div role="main">
    <?php while ( have_posts() ) : the_post() ?>
	<article>
		<h1><?php the_title(); ?></h1>
		
		<?php the_excerpt(); ?>
		
		<a href="<?php the_permalink(); ?>">Continue reading</a>
	</article>
	<?php endwhile; ?>
</div>
<?php get_footer(); ?>