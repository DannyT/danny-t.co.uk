<?php get_header(); ?>
	<?php while ( have_posts() ) : the_post() ?>
		<article class="reading-width centered">
				<header>
					<h1><?php the_title(); ?></h1>
				</header>
				<?php the_content(); ?>

				<?php wp_link_pages(); ?>
			</article>
	<?php endwhile ?>

<?php get_footer(); ?>