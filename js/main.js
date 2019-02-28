// @codekit-prepend "plugins.js";


(function( $ ) {
	$(document).ready(function() {
	
		$('.external').each(function() {
			$(this).attr('target','_blank');
		});
		
		$('.bxslider').bxSlider({
			speed: 1000,
			autoStart: true, 
			auto: true,
			infiniteLoop: true,
			autoControls: true,
            pause: 5000
		});
		
		
			
	});	
})(jQuery);		