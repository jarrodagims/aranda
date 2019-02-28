<?php
	/*
		Template Name: Contact
	*/
	get_header(); ?>

<section id="main">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-8" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
				<?php get_template_part('content', 'page'); ?>

			</div>
			<div class="col-sm-12 col-md-4" id="contact">
				<?php
    				
    				
    				if(ICL_LANGUAGE_CODE=='en'):
    				echo do_shortcode( '[contact-form-7 id="64" title="Aranda"]' );
                    elseif(ICL_LANGUAGE_CODE=='es'):
                    echo do_shortcode( '[contact-form-7 id="1433" title="Aranda ES"]' );
    				endif;
                ?>
			</div>
		</div>
	</div>
</section>
	
<?php get_footer(); ?>