<?php
	/*
		Template Name: Contact (ES)
	*/
	get_header(); ?>

<section id="main">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
				<?php get_template_part('content', 'page'); ?>

			</div>
			<div class="col-sm-12 col-md-6 col-lg-5 col-lg-offset-1" id="contact">
				<?php echo do_shortcode( '[contact-form-7 id="1433" title="Aranda ES"]' ); ?>
			</div>
		</div>
	</div>
</section>
	
<?php get_footer(); ?>