<?php
	/*
		Template Name: Testimonials	
	*/
	
	get_header(); ?>

<section id="main">
	<div class="container">
		<div class="row">
			<div class="<?=FULLWIDTHCOL?>">
				<?php get_template_part('content', 'page'); ?>
				<?php get_template_part('content', 'testimonials'); ?>
			</div>
		</div>
	</div>
</section>
	
<?php get_footer(); ?>
