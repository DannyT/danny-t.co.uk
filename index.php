<?php get_header(); ?>
    <?php while ( have_posts() ) : the_post() ?>
<article>
	<h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'dannyt' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	<div class="publish-date">
		<span class="day-of-month"><?php the_time('d') ?></span>
		<span class="month"><?php the_time('M') ?></span>
	</div>
	<?php the_excerpt(); ?> 
	<a href="<?php the_permalink(); ?>">Continue reading</a>
	</article>
	<?php endwhile; ?>
	<nav>
		<?php previous_posts_link('Newer Posts') ?>
		<?php next_posts_link('Older Posts'); ?>
	</nav>	
<?php get_footer(); ?>