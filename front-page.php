<?php get_header(); ?>





<div class="masonry-grid" id="start">

		    <?php // Portfolio Project Loop
			$args = array(
		        'post_type' => 'project',
		        'orderby' => 'menu_order',
		        'order' => 'ASC'
		    );
		    $query = new WP_Query($args);
		    while ( $query->have_posts() ) : $query->the_post(); 
		    $terms = get_the_terms($post->ID, 'project_type');
		    ?>

			<div class="masonry-item project-loop col-md-4 col-sm-6 col-xs-12 <?php
					foreach ($terms as $taxindex => $taxitem) {
					echo 'project-' . $taxitem->slug . ' ';
					}
					?>">

	<?php $img = get_field('featured_image'); ?>

	<a href="<?php the_permalink(); ?>">


	<img src="<?php echo $img['sizes']['brentonic-700']; ?>" 
		sizes="(min-width: 992px) 33.33333vw, (min-width: 768px) 50vw, 100vw"
		srcset="<?php echo $img['sizes']['brentonic-3700']; ?> 3700w,
				<?php echo $img['sizes']['brentonic-3500']; ?> 3500w,
				<?php echo $img['sizes']['brentonic-3300']; ?> 3300w,
				<?php echo $img['sizes']['brentonic-3100']; ?> 3100w,
				<?php echo $img['sizes']['brentonic-2900']; ?> 2900w,
				<?php echo $img['sizes']['brentonic-2700']; ?> 2700w,
				<?php echo $img['sizes']['brentonic-2500']; ?> 2500w,
				<?php echo $img['sizes']['brentonic-2300']; ?> 2300w,
				<?php echo $img['sizes']['brentonic-2100']; ?> 2100w,
				<?php echo $img['sizes']['brentonic-1900']; ?> 1900w,
				<?php echo $img['sizes']['brentonic-1700']; ?> 1700w,
			    <?php echo $img['sizes']['brentonic-1500']; ?> 1500w,
			    <?php echo $img['sizes']['brentonic-1300']; ?> 1300w,
			    <?php echo $img['sizes']['brentonic-1100']; ?> 1100w,
			    <?php echo $img['sizes']['brentonic-900']; ?> 900w,
			    <?php echo $img['sizes']['brentonic-700']; ?> 700w,
			    <?php echo $img['sizes']['brentonic-500']; ?> 500w,
			    <?php echo $img['sizes']['brentonic-300']; ?> 300w"
		alt="<?php the_title(); ?>">

	</a>

<?php /* break; endif; endif; endwhile;  endif; */ ?>
				
				<a href="<?php the_permalink(); ?>">	
					<h2><?php the_title(); ?></h2>
				</a>
				<ul class="project-types">
				<?php
					foreach ($terms as $taxindex => $taxitem) {
					echo '<li>' . $taxitem->name . '</li>';
					}

					?>
				</ul>
				
			</div>

			<?php endwhile; ?>

</div>

<?php get_footer(); ?>