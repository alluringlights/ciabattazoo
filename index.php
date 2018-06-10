<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-9">

			<?php

			if ( have_posts() ) {
			    while ( have_posts() ) {
			        the_post();
			        the_title( '<h3><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			        the_date();
			        the_content();
			    }
			}

			?>

		</div>
	</div>
</div>

<?php get_footer(); ?>




