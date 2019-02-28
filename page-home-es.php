<?php
	/*
		Template Name: Home	(ES)
	*/
	get_header('es'); ?>

<section id="home-main">
	<div class="container-fluid grad1">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-8">
					<ul class="flex-container">
						<li class="flex-item"><h1>Un abogado de lesiones personales comprometidos con la justicia</h1></li>
						<li><p>El dolor y el sufrimiento experimentado por las víctimas de lesiones personales pueden variar de forma moderada a insoportable. Ya que es imposible regresar el tiempo para evitar estos accidentes, lo mejor que puede hacer es: Contactar al bufete de abogados Aranda para que represente sus intereses!</p></li>
						<li class="flex-item"><a href="/contact"><button class="btn-contact">Contáctenos ahora</button></a></li>
					</ul>
				</div>
                <div class="col-sm-12 col-md-4">
                    <?php echo do_shortcode( '[contact-form-7 id="1433" title="Aranda ES"]' ); ?>
                </div>
			</div>
		</div>
	</div>
</section>

<section id="home-main-about">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6 about">
				<h1>Confie en el bufete<span class="hidden-xs hidden-sm"><br></span> de abogados Aranda</h1>
				<p>Accidentes con lesiones personales muchas veces pueden terminar en una demanda o una orden de liquidación para ayudar a las víctimas a recuperarse de las secuelas. El bufete de abogados Aranda ofrece la representación calificada que se merece. Como resultado, nos apasiona la representación de víctimas de lesiones personales.</p>
                <p>El bufete de abogados Aranda puede ayudar si usted ha sufrido a través de cualquiera de estos accidentes: accidentes de tráfico; Accidentes de Camiones de Carga; Accidentes de Motocicleta; Resbalones y caídas; Accidentes de mordedura de perro; Accidentes de Trabajo; Accidentes de productos defectuosos; Accidentes de peatones y Accidentes de construcción.</p>
			</div>
			
			<div class="col-sm-12 col-md-6 cases">
				<h2>Áreas de Práctica Jurídica</h2>
				<ul class="list-style">
					<li><a href="/es/lesiones-personales/"><img src="<?=THEMEURL?>/img/personal-injury-icon.png"> Lesiones Personales</a></li>
					<li><a href="/es/defensa-criminal/"><img src="<?=THEMEURL?>/img/criminal-charges-icon.png"> Defensa Criminal</a></li>
					<li><a href="/es/lesiones-personales/"><img src="<?=THEMEURL?>/img/dwi-icon.png"> Accidentes Automovilísticos</a></li>
					<li><a href="/es/ley-familiar/"><img src="<?=THEMEURL?>/img/family-law-icon.png"> Ley Familiar</a></li>
					<li><a href="/es/ley-familiar/"><img src="<?=THEMEURL?>/img/divorce-icon.png"> Divorcio</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3391.7920744002918!2d-106.50356804923533!3d31.776156541554222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e75845332d7e2b%3A0xb8284d3a2a0d1f93!2sAranda+Law+Firm!5e0!3m2!1sen!2sus!4v1474497006808" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen=""></iframe>

<section id="home-main-text">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-5"><iframe class="ytvideo" width="100%" height="315"  src="https://www.youtube.com/embed/CJA9_2-DaO8?rel=0" frameborder="0" allowfullscreen></iframe></div>
			<div class="col-sm-12 col-md-7">
				<h1>La experiencia y habilidad en el suroeste</h1>
				<p>El bufete de abogados Aranda entiende que una buena representación legal es una prioridad. Su caso estará en manos de una firma de abogados que cuenta con la experiencia en la representación de muchos tipos de casos diferentes. Tenemos las habilidades que son importantes para lograr sus intereses.<p>
                <p>Proporcionamos representación legal en las siguientes áreas: Lesiones Personales, Defensa Criminal, DWI / DUI (conducir bajo los efectos del alcohol), Derecho de Familia y Divorcio.</p>
                <p>Ofrecemos nuestros servicios en todo el Suroeste. A pesar de que estamos ubicados en El Paso, TX., tenemos licencia para practicar leyes en los siguientes estados: Texas, Nuevo México y Arizona.</p>
			</div>
		</div>
	</div>
</section>

<section id="home-main-google">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-5"><a href="https://plus.google.com/+ArandaLawFirmElPaso?hl=es" class="external btn-google"><i class="fa fa-google-plus fa-2x fa-fw" aria-hidden="true" style="margin-right: 25px;"></i> Comparta su experiencia con nosotros en Google</a></div>
			<div class="col-sm-12 col-md-7"><h3>Coméntenos su experiencia de trabajo con el bufete de abogados Aranda.</h3></div>
		</div>
	</div>
</section>

<section id="home-main-testimonials">
	<div class="container">
		<div class="row">
	
			<div class="col-sm-12 col-md-7 testimonials">
				<h1>Testimonios</h1>
				
				 <ul class="bxslider">
					 <? # This is where we will do a loop with testimonials ?>
					 <?php
						$temp_query = clone $wp_query;
						query_posts('post_type=testimonial&posts_per_page=4');
						if(have_posts()) {
						while(have_posts()) {
						the_post();
						
						
						$writer = types_render_field('testimonial-writer',array());
						$starrating = types_render_field('star-rating',array());
						$star_url = THEMEURL . '/img/' . $starrating . '.png';
						$writer_title = types_render_field('testimonial-writer-title',array());
									?>
						<li>
							<div class="testimonials-wrap">
								
								<p class="writer-title">
								<?=$writer?><br />
								<?=(!empty($writer_title) ? $writer_title . '<br />' : '')?>
								</p>
								<img src="<?=$star_url?>" class="star">
								<p class="excerpt"><?=get_the_excerpt()?></p>
							</div>
						</li>
						<?php
							}
							}
							$wp_query = clone $temp_query;
						?>
				</ul>
			</div>
			
			
			<div class="col-sm-12 col-md-5 contact text-center">
				<ul class="flex-container">
					<li class="flex-item"><h2>Vea lo que el<span class="hidden-xs hidden-sm"><br></span> Bufete de abogados Aranda<span class="hidden-xs hidden-sm"><br></span> puede hacer por usted.</h2></li>
					<li class="flex-item"><a href="/contact"><button class="btn-contact">Contáctenos ahora</button></a></li>
				</ul>
			</div>
		</div>
	</div>
</section>

	
<?php get_footer('es'); ?>