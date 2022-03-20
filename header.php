<!DOCTYPE html>
<html id="top">

	<head>
		<meta name="google-site-verification" content="GHIda8G3isQtiqdhmRCJ3WKrsnmwptge9U4iTeh0xgg" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php bloginfo('name'); ?></title>
		<link rel="icon" href="<?php bloginfo('url'); ?>/wp-content/themes/brentonbrookings-theme/img/favicon.png">
		<script src="https://use.typekit.net/gqd0zkw.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
	<!-- <div id="top"></div> -->
		
				<header>
					<a href="<?php bloginfo('url'); ?>" class="brand"><?php bloginfo('name'); ?></a>
					<button id="nav-toggle">
						<span></span>
						<span></span>
						<span></span>
					</button>
					<nav>
						<ul id="header-nav">
							<?php wp_nav_menu ( array( 'theme_location' => 'primary', 'container' => '', 'items_wrap' => '%3$s' ) ); ?>
						</ul>
						<ul id="header-social-icons">
							<?php if( get_field('linkedin', 70)): ?>
							<li><a href="<?php the_field('linkedin', 70); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
							<?php endif; ?>
							<?php if( get_field('facebook', 70)): ?>
							<li><a href="<?php the_field('facebook', 70); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<?php endif; ?>
							<?php if( get_field('twitter', 70)): ?>
							<li><a href="<?php the_field('twitter', 70); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<?php endif; ?>
							<?php if( get_field('tumblr', 70)): ?>
							<li><a href="<?php the_field('tumblr', 70); ?>" target="_blank"><i class="fa fa-tumblr"></i></a></li>
							<?php endif; ?>
							<?php if( get_field('pinterest', 70)): ?>
							<li><a href="<?php the_field('pinterest', 70); ?>" target="_blank"><i class="fa fa-pinterest"></i></a></li>
							<?php endif; ?>
							<?php if( get_field('instagram', 70)): ?>
							<li><a href="<?php the_field('instagram', 70); ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
							<?php endif; ?>
							<?php if( get_field('google_plus', 70)): ?>
							<li><a href="<?php the_field('google_plus', 70); ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
							<?php endif; ?>
							<?php if( get_field('vimeo', 70)): ?>
							<li><a href="<?php the_field('vimeo', 70); ?>" target="_blank"><i class="fa fa-vimeo"></i></a></li>
							<?php endif; ?>
							<?php if( get_field('youtube', 70)): ?>
							<li><a href="<?php the_field('youtube', 70); ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
							<?php endif; ?>
							<?php if( get_field('dribbble', 70)): ?>
							<li><a href="<?php the_field('dribbble', 70); ?>" target="_blank"><i class="fa fa-dribbble"></i></a></li>
							<?php endif; ?>
							<?php if( get_field('behance', 70)): ?>
							<li><a href="<?php the_field('behance', 70); ?>" target="_blank"><i class="fa fa-behance"></i></a></li>
							<?php endif; ?>
					</ul>
					</nav>
				</header>

		
		<div class="container-fluid site-content">
			<?php /* <img src="<?php bloginfo('url'); ?>/wp-content/themes/brentonbrookings-theme/img/name.png" alt="Brenton Brookings" id="name"> */ ?>