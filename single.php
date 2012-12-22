<?php get_header(); ?>
	<?php while ( have_posts() ) : the_post() ?>
		<article>
			<header>
				<h2><?php the_title(); ?></h2>
			</header>
			<div class="publish-date">
				<span class="day-of-month"><?php the_time('d') ?></span>
				<span class="month"><?php the_time('M') ?></span>
			</div>
			<?php the_content(); ?>

			<?php wp_link_pages(); ?>
		</article>
	<?php endwhile ?>
	
<?php get_footer(); ?>