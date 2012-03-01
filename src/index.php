<?php get_header(); ?>
    <?php while ( have_posts() ) : the_post() ?>
	<article>
		<h2><?php the_title(); ?></h2>
		
		<?php the_excerpt(); ?> 
		
		<a href="<?php the_permalink(); ?>">Continue reading</a>
	</article>
	<?php endwhile; ?>
<?php get_footer(); ?>