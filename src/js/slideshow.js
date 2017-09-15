(function($) {
 	var $bannerSlideshow = $('#slideshow');

	function bannerSlideshow() {
		$bannerSlideshow.flexslider({
			slideshow: false,
			controlNav: true,
			manualControls: $bannerSlideshow.find('.flex-control-paging li a'),
			directionNav: false
		});
	};

	bannerSlideshow();

	$(document).on('boomcms:chunkload', function(e) {
		if (e.chunk.type === 'slideshow') {
			$(e.target).removeData('flexslider');
	
			bannerSlideshow();
		}
	});
}(jQuery));