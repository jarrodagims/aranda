<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="<?=$sherpa_lang?>"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="<?=$sherpa_lang?>"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="<?=$sherpa_lang?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?=$sherpa_lang?>"> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <!-- If non-responsive, comment out the next line -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" type="image/x-icon" href="http://www.arandalawfirm.com/wp-content/uploads/2016/09/arandafav.ico">
		

        <?php wp_head(); ?>
<style type="text/css">
#main ul {
    padding: 2em;
    margin: 0;
    background: #34342F;
    list-style-type: disc;
    list-style-position: inside;
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-flow: row wrap;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    margin-bottom: 1.5em;
    color: #fff;
}
</style>
<script type="application/ld+json">
{
 "@context": "http://schema.org",
 "@type": "Attorney",
 "address": {
   "@type": "PostalAddress",
   "addressLocality": "El Paso",
   "addressRegion": "TX",
   "postalCode": "79902",
   "streetAddress": "2507 N Stanton St"
 },
 "description": "Experienced personal injury attorney in El Paso serving Texas and New Mexico.",
 "name": "Aranda Law Firm",
 "telephone": "915-201-0422",
 "openingHours": "Mo,Tu,We,Th,Fr 08:00-17:00",
 "url": "http://www.arandalawfirm.com/",
 "geo": {
    "@type": "GeoCoordinates",
    "latitude": "31.776152",
    "longitude": "-106.501374"
 		},
 "hasMap": "https://www.google.com/maps/place/Aranda+Law+Firm/@31.776152,-106.501374,15z/data=!4m5!3m4!1s0x0:0xb8284d3a2a0d1f93!8m2!3d31.776152!4d-106.501374",       
 "sameAs" : [ "https://www.facebook.com/Aranda-Law-Firm-344112272272399/",
    "https://twitter.com/ArandaLawFirmEP",
    "https://plus.google.com/+ArandaLawFirmElPaso?hl=en"]
        
}
</script>

    </head>
    <body <?php body_class(); ?>>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser.</p>
            <p class="browsehappy">Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <section id="header">
	        <div class="container">
		        <div class="row">
			        <div class="col-sm-12 col-md-3 col-lg-4 logo">
				        <a href="<?=SITEURL?>"><img src="<?=THEMEURL?>/img/Aranda-Law-Firm.png" width="281" alt="Aranda Law Firm"></a>
			        </div>
			        <div class="col-sm-9 col-md-7 col-lg-6"><h4>Licensed in Texas, New Mexico & Arizona</h4></div>
			        <div class ="hidden-xs col-sm-3 col-md-2 col-lg-2"><button class="btn-espanol pull-right">En Español</button></div>
			        <div class="col-sm-12 col-md-8">
				        <ul class="flex-container-address">
						  <li class="flex-item-address"><a href="https://goo.gl/maps/GupuiSY31y82" class="external"><span>2507 N Stanton St</span>, <span itemprop="addressLocality">El Paso</span>, <span itemprop="addressRegion">TX</span> <span>79902</span></a></li>
						  <li class="flex-item-address">TX - <span><a href="tel:915-201-0432">(915) 201-0432</a></span></li>
						  <li class="flex-item-address">NM - <span><a href="tel:575-386-5100">(575) 386-5100</a></span></li>
						</ul>
			        </div>
		        </div>
		    </div>
        </section>
        
		<section id="top-menu">
			<div class="container-fluid">
				
				<div class="container hidden-xs">
					<div class="row">
						<div class="col-sm-12">
						<?php
	
								// responsive_bs_menu('primary');
								$args = array(
									'container' => FALSE,
									'theme_location' => 'primary'
								);
								
								wp_nav_menu($args);
								
					        ?>						</div>
					</div>
				</div>
				
				<div class="row">
			        <div class="col-xs-12 hidden-sm hidden-md hidden-lg">
				        <?php
							// Call either the responsive_bs_menu() or the non_responsive_bs_menu() here
							// If you are using a menu besides 'primary', use this as the first argument in the function.
							// If you are using a second menu (for the right side), send the theme location of that as the second argument.
							// i.e. responsive_bs_menu($primary_menu_location, $secondary_menu_location);
							
							// If you don't send a second argument, it will default to no menu on the right side.
							responsive_bs_menu('primary');
							
				        ?>
			        </div>
				</div>
				
			</div>
		</section>