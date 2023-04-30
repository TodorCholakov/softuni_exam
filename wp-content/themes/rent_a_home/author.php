
<?php get_header(); ?>
<?php wp_nav_menu( array(
    'theme_location' => 'primary-menu',
) );
?>
<span class="meta-date">Author <?php echo get_the_author(); ?></span>
	<ul class="properties-listing">
		<?php if (have_posts()):?>
			<?php while(have_posts()): the_post(); ?>
				<?php get_template_part('template-parts/rent', 'item'); ?>
			<?php endwhile; ?>
			<!-- pagination -->
			<?php posts_nav_link(); ?> 
		<?php endif; ?>
	</ul>
<?php get_footer(); ?>