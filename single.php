<?php get_header(); ?>
	--><div class="grid__item one-whole desk-three-fifths">
		<?php while ( have_posts() ) : the_post() ?>
			<article class="reading-width centered">
				<header>
					<h1><?php the_title(); ?></h1>
					<div class="publish-date">
						<span class="day-of-month"><?php the_time('d') ?></span>
						<span class="month"><?php the_time('M') ?></span>
					</div>
					<p class="author">by <?php the_author(); ?></p>
				</header>
				<?php the_content(); ?>

				<?php wp_link_pages(); ?>
			</article>
		<?php endwhile ?>
	</div><!--	
<?php get_footer(); ?>