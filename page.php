<?php get_header(); ?>
	<?php while ( have_posts() ) : the_post() ?>
		<article>
			<header>
				<h2><?php the_title(); ?></h2>
			</header>
			<?php the_content(); ?>
		</article>
	<?php endwhile ?>

<?php get_footer(); ?>