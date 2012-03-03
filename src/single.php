<?php get_header(); ?>
<!-- AddThis Button -->
<div class="addthis_toolbox addthis_default_style ">
	<a class="addthis_button_preferred_1"></a>
	<a class="addthis_button_preferred_2"></a>
	<a class="addthis_button_preferred_3"></a>
	<a class="addthis_button_preferred_4"></a>
	<a class="addthis_button_compact"></a>
	<a class="addthis_counter addthis_bubble_style"></a>
</div>
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
		</article>
	<?php endwhile ?>
	
<?php get_footer(); ?>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f2283ab1ff8dae9"></script>