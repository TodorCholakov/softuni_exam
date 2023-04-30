
<?php get_header(); ?>
<?php wp_nav_menu( array(
    'theme_location' => 'primary-menu',
) );
?>
<span class="meta-date">Posted on <?php echo get_the_date(); ?></span>
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