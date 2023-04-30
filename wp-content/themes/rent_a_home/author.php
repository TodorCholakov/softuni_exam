<?php

/**
 * The template for displaying author archives.
 */


 get_header(); ?>
This is archive page author

	<ul class="properties-listing">
		<?php if (have_posts()):?>
			<?php while(have_posts()): the_post(); ?>
				<?php get_template_part('template-parts/content', 'author'); ?>
			<?php endwhile; ?>
			<!-- pagination -->
			<?php posts_nav_link(); ?> 
		<?php endif; ?>
	</ul>
<?php get_footer(); ?>