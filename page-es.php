<?php
	/*
		Template Name: Regular Page	(ES)
	*/
	get_header('es'); ?>

<section id="main">
	<div class="container">
		<div class="row">
			<div class="<?=FULLWIDTH?>">
				<?php get_template_part('content', 'page'); ?>
			</div>
		</div>
	</div>
</section>
	
<?php get_footer('es'); ?>