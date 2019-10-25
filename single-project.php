<?php get_header(); ?>

<div id="start">

<?php if (get_field('featured_image') ): ?>
	<?php $featuredimg = get_field('featured_image'); ?>
<div class="col-md-10 col-md-offset-1 featured-img">
<a href="<?php echo $featuredimg['url']; ?>">
			<img src="<?php echo $featuredimg['url']; ?>" 
				sizes="100vw"
				srcset="<?php echo $featuredimg['sizes']['brentonic-3700']; ?> 3700w,
						<?php echo $featuredimg['sizes']['brentonic-3500']; ?> 3500w,
						<?php echo $featuredimg['sizes']['brentonic-3300']; ?> 3300w,
						<?php echo $featuredimg['sizes']['brentonic-3100']; ?> 3100w,
						<?php echo $featuredimg['sizes']['brentonic-2900']; ?> 2900w,
						<?php echo $featuredimg['sizes']['brentonic-2700']; ?> 2700w,
						<?php echo $featuredimg['sizes']['brentonic-2500']; ?> 2500w,
						<?php echo $featuredimg['sizes']['brentonic-2300']; ?> 2300w,
						<?php echo $featuredimg['sizes']['brentonic-2100']; ?> 2100w,
						<?php echo $featuredimg['sizes']['brentonic-1900']; ?> 1900w,
						<?php echo $featuredimg['sizes']['brentonic-1700']; ?> 1700w,
					    <?php echo $featuredimg['sizes']['brentonic-1500']; ?> 1500w,
					    <?php echo $featuredimg['sizes']['brentonic-1300']; ?> 1300w,
					    <?php echo $featuredimg['sizes']['brentonic-1100']; ?> 1100w,
					    <?php echo $featuredimg['sizes']['brentonic-900']; ?> 900w,
					    <?php echo $featuredimg['sizes']['brentonic-700']; ?> 700w,
					    <?php echo $featuredimg['sizes']['brentonic-500']; ?> 500w,
					    <?php echo $featuredimg['sizes']['brentonic-300']; ?> 300w"
				alt="<?php the_title(); ?>">
		</a>
	</div>
<?php endif; ?>

<div class="col-md-12"><h1><?php the_title(); ?></h1></div>

<?php if (have_rows('portfolio') ): 
	while ( have_rows('portfolio') ): the_row(); ?>

<?php if (get_row_layout() == 'portfolio_row' ): ?>
	
	
<div class="layout-container">

	<?php if (get_sub_field('image') ): ?>



	 <?php $img = get_sub_field('image'); ?>

	 
    <!-- test -->
	<div class="col-lg-8 col-md-7 img-container"> 
		<a href="<?php echo $img['url']; ?>">
			<img src="<?php echo $img['url']; ?>" 
				sizes="(min-width: 1200px) 66.66667vw, (min-width: 992px) 58.33333vw, 100vw"
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

	</div>

		<?php if (get_sub_field('text') ): ?>
		<div class="col-lg-4 col-md-5 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0 text-container">
			<?php the_sub_field('text'); ?>
		</div>
		
		<?php endif; ?>

		<div class="clearfix"></div>

	<?php else : ?>

	<div class="col-lg-4 col-lg-offset-8 col-md-5 col-md-offset-7 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0 text-container">
		<?php the_sub_field('text'); ?>
	</div>




<?php endif; ?>

</div>

<?php endif; ?>

<?php if (get_row_layout() == 'video_iframe' ): ?>

<div class="col-md-10 col-md-offset-1">
<div class="fitvid-container">

<?php the_sub_field('video_iframe'); ?>
</div>
</div>

<?php endif; ?>

<?php if (get_row_layout() == 'text' ): ?>

<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0 text-container">

<?php the_sub_field('text'); ?>

</div>

<?php endif; ?>

<?php  
	endwhile;
	endif;
?>

<div class="row">
	<div class="col-xs-6 text-center">
		<?php previous_post_link('%link', '&lt; previous project'); ?>
	</div>
	<div class="col-xs-6 text-center">
		<?php next_post_link('%link', 'next project &gt;'); ?>
	</div>
</div>
<div class="col-sm-12 back-to-projects">
	<a href="<?php bloginfo('url'); ?>">Back to projects</a>
</div>

</div>

<?php get_footer(); ?>