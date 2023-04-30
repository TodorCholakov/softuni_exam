
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?> </title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
	<div class="site-wrapper">
		<header class="site-header">
            <?php 
				if(is_home()): ?>
					<h1 class="site-title">
						<a href=<?php echo esc_url(get_home_url()); ?>>Properties Offers</a>
					</h1>
			<?php 	else : ?>
					<p class="site-title">
						<a href=<?php echo esc_url(get_home_url()); ?>>Properties Offers</a>
					</p>
			<?php endif; ?>
		</header>