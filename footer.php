</div>
<footer>
	<?php wp_footer(); ?>
	<p id="legal">Copyright &copy; <?php the_time('Y'); ?> Brenton Brookings. All&nbsp;rights reserved.</p>
	<ul id="footer-social-icons">
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
					<a href="#top" class="smoothscroll" id="toplink">Back to top</a>
</footer>
</body>
</html>