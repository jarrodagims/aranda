<section id="home-main-testimonials" itemscope itemtype="http://schema.org/Attorney">
	<div class="container">
		<div class="row">
	
			<div class="col-sm-12 col-md-7 testimonials">
				<h2 style="color: #555;margin-top:0;"><?=__("Reviews",'sherpa')?></h2>
				
				<div class="reviewTitle"><img itemprop="image" src="https://www.arandalawfirm.com/wp-content/themes/aranda2016/img/Aranda-Law-Firm.png" alt="Aranda Law Firm" style="max-width: 150px;background: #34342f;"><br>
<div style="display:inline;color: #fff;font-size: 14px;font-weight: 400;font-style: italic;" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">Rated <span itemprop="ratingValue">5</span>/5 based on <span itemprop="reviewCount">6</span> customer reviews</div>
<span itemprop="name" style="color: #fff;font-size: 14px;font-weight: 500;font-style: italic;">Aranda Law Firm</span></div>
  				

				 <ul class="bxslider">
					 <? # This is where we will do a loop with testimonials ?>
					 <?php

                        // WP_Query arguments
                        $args = array(
                        	'post_type'              => array( 'testimonial' ),
                        	'nopaging'               => false,
                        	'posts_per_page'         => '6',
                        	'order'                  => 'DESC',
                        	'orderby'                => 'id',
                        );
                        
                        // The Query
                        $testimonials = new WP_Query( $args );
                        
                        // The Loop
                        if ( $testimonials->have_posts() ) {
                        	while ( $testimonials->have_posts() ) {
                        		$testimonials->the_post();
                        
                        						$writer = types_render_field('testimonial-writer',array());
                        						$starrating = types_render_field('star-rating',array());
                        						$star_url = THEMEURL . '/img/' . $starrating . '.png';
                        						$writer_title = types_render_field('testimonial-writer-title',array());
                        									?>
                        						<li itemprop="review" itemscope itemtype="http://schema.org/Review">
                        							<div class="testimonials-wrap" >
														<div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating"><meta itemprop="worstRating" content = "1"/><meta itemprop="BestRating" content = "5"/><meta itemprop="ratingValue" content = "5"/></div>
                        								<p class="writer-title" itemprop="author">
                        								<?=$writer?><br />
                        								<?=(!empty($writer_title) ? $writer_title . '<br />' : '')?>
                        								</p>
                        								<img src="<?=$star_url?>" class="star">
                        								<p class="excerpt" itemprop="description"><?=get_the_excerpt()?></p>
                        							</div>
                        						</li>
                        						<?php
                        	}
                        } else {
                        	// no posts found
                        }
                        
                        // Restore original Post Data
                        wp_reset_postdata();

						?>
				</ul>
			</div>
			
			
			<div class="col-sm-12 col-md-5 contact text-center">
				<ul class="flex-container">
					<li class="flex-item"><h2><?=__("See what The",'sherpa')?><span class="hidden-xs hidden-sm"><br></span> <?=__("Aranda Law Firm",'sherpa')?><span class="hidden-xs hidden-sm"><br></span> <?=__("can do for you.",'sherpa')?></h2></li>
					<li class="flex-item"><a href="/contact"><button class="btn-contact"><?=__("Contact Us Now",'sherpa')?></button></a></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3391.7920744002918!2d-106.50356804923533!3d31.776156541554222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e75845332d7e2b%3A0xb8284d3a2a0d1f93!2sAranda+Law+Firm!5e0!3m2!1sen!2sus!4v1474497006808" width="100%" height="250" frameborder="0" style="border: 0; margin-bottom: -8px;" allowfullscreen=""></iframe>       
 <section id="footer">
	        <div class="container">
		        <div class="row">
			        <div class="hidden-xs hidden-sm col-md-2">
				        <?=$footer_menu?>
			        </div>
			         <div class="col-xs-12 col-sm-3 col-md-2">
				        <ul id="info" class="list-unstyled">
					        <li class="head"><?=$visit?></li>
					        <li><span>Aranda Law Firm</span></li>
					        <li><a href="https://goo.gl/maps/GupuiSY31y82" class="external"><span>2507 N Stanton St</span>,</a></li>
					        <li><span>El Paso</span>, <span>TX</span> <span>79902</span></li>
					        <li>M-F: 8am-5pm</li>
					        <li>Sat: Closed</li>
				        </ul>
			        </div>
			        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
				        <ul id="info" class="list-unstyled">
					        <li class="head"><a href="/contact"><?=$contact?></a></li>
					        <li>TX: <span><a href="tel:915-996-9914">(915) 996-9914</a></span></li>
					        <li>NM: <span><a href="tel:575-386-5100">(575) 386-5100</a></span></li>
				        </ul>
				        
				        <ul id="social" class="list-unstyled">
					        <li class="head"><?=$follow?></li>
					        <li>
					        	<?php
									$lg = new SocialMedia(array('googleplus','twitter','facebook'));
									$lg->showNetworkButtons();
								?>
							</li>
				        </ul>
			        </div>
     <div class="col-xs-12 col-sm-3 col-md-4 col-lg-4">
				     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3391.7920744002918!2d-106.50356804923533!3d31.776156541554222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86e75845332d7e2b%3A0xb8284d3a2a0d1f93!2sAranda+Law+Firm!5e0!3m2!1sen!2sus!4v1474497006808" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
			        </div>
			       	
			         <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2 text-center">
				        <ul id="credit" class="list-unstyled">
					        <li><a href="<?=SITEURL?>"><img src="<?=THEMEURL?>/img/Aranda-Law-Firm.png" width="271"></a></li>
					        <li>&copy; <?=date('Y')?> The Aranda Law Firm.<br>
								All Rights Reserved | <a href="http://s.agims.com/privacy-policy.php" class="external">Privacy Policy</a> </li>
					        <li class="agi">Powered by <a href="http://agims.com" class="external">AGI Marketing</a></li>
				        </ul>
				    </div>			                
		        </div>
	        </div>
        </section>
<!-- bxSlider Javascript file -->
<!--<script src="/wp-content/themes/aranda2016/js/main.js"></script>-->
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

        <?php wp_footer(); ?>
<?php
			if(is_page("contact")){
				echo"<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = 'https://www.arandalawfirm.com/thank-you/';
}, false );
</script>";
			}
			if(is_page("contactenos")){
				echo"<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = 'https://www.arandalawfirm.com/es/gracias/';
}, false );
</script>";
			}
?>

		<script>
        $(document).ready(function() {
            $('#main article img').removeAttr('height').removeAttr('width').removeAttr('srcset').removeAttr('sizes');
        });
        </script>
        
        
        
        <!-- Google Code for click to call Conversion Page
        In your html page, add the snippet and call
        goog_report_conversion when someone clicks on the
        phone number link or button. -->
        <script type="text/javascript">
          /* <![CDATA[ */
          goog_snippet_vars = function() {
            var w = window;
            w.google_conversion_id = 955499306;
            w.google_conversion_label = "7OMFCNWurnQQqobPxwM";
            w.google_remarketing_only = false;
          }
          // DO NOT CHANGE THE CODE BELOW.
          goog_report_conversion = function(url) {
            goog_snippet_vars();
            window.google_conversion_format = "3";
            var opt = new Object();
            opt.onload_callback = function() {
            if (typeof(url) != 'undefined') {
              window.location = url;
            }
          }
          var conv_handler = window['google_trackConversion'];
          if (typeof(conv_handler) == 'function') {
            conv_handler(opt);
          }
        }
        /* ]]> */
        </script>
        <script type="text/javascript"
          src="//www.googleadservices.com/pagead/conversion_async.js">
        </script>
        
        
        
    </body>
</html>