        <section id="footer">
	        <div class="container">
		        <div class="row">
			        <div class="hidden-xs hidden-sm col-md-2">
				        <ul id="info">
					        <li class="head"><a href="<?=SITEURL?>">Home</a></li>
					        <li><a href="/personal-injury/">Personal Injury</a></li>
					        <li><a href="/criminal-defense/">Criminal Defense</a></li>
					        <li><a href="/family-law/">Family Law</a></li>
					        <li><a href="/about/">About Us</a></li>
					        <li><a href="/contact/">Contact Us</a></li>
				        </ul>
			        </div>
			         <div class="col-xs-12 col-sm-3 col-md-2">
				        <ul id="info">
					        <li class="head">Visit Our Office</li>
					        <li><span>Aranda Law Firm</span></li>
					        <li><a href="https://goo.gl/maps/GupuiSY31y82" class="external"><span>2507 N Stanton St</span>,</a></li>
					        <li><span>El Paso</span>, <span>TX</span> <span>79902</span></li>
					        <li>M-F: 8am-5pm</li>
					        <li>Sat: Closed</li>
				        </ul>
			        </div>
			        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
				        <ul id="info">
					        <li class="head"><a href="/contact">Contact Us</a></li>
					        <li>TX: <span><a href="tel:915-201-0432">(915) 201-0432</a></span></li>
					        <li>NM: <span><a href="tel:575-386-5100">(575) 386-5100</a></span></li>
				        </ul>
				        
				        <ul id="social">
					        <li class="head">Follow Us</li>
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
				        <ul id="credit">
					        <li><a href="<?=SITEURL?>"><img src="<?=THEMEURL?>/img/Aranda-Law-Firm.png" width="271"></a></li>
					        <li>©2016 The Aranda Law Firm.<br>
								All Rights Reserved | <a href="http://s.agims.com/privacy-policy.php" class="external">Privacy Policy</a> </li>
					        <li class="agi">Powered by <a href="http://agims.com" class="external">AGI Marketing</a></li>
				        </ul>
				    </div>			                
		        </div>
	        </div>
        </section>
<!-- jQuery library (served from Google) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="http://www.arandalawfirm.com/wp-content/themes/aranda2016/js/main.js"></script>

        <?php wp_footer(); ?>
    </body>
</html>