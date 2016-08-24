(function($) {
 	var $bannerSlideshow = $('#slideshow');
 	var $carousels = $('.carousel-list');

	function bannerSlideshow() {
		$bannerSlideshow.flexslider({
			slideshow: false,
			controlNav: true,
			manualControls:$bannerSlideshow.find('.flex-control-paging li a'),
			directionNav: false
		});
	};


	function makeCarousels() {
		if($carousels.length>0)  {
			$carousels.each(function(key, val) {
				// console.log('init carousel ' + key);
				$(val).flexslider({
			      animation: "slide",
			      animationLoop: false,
			      itemWidth: 300,
			      itemMargin: 5,
			      minItems: 1,
			      directionNav: false,
			      maxItems: 3
			  });
			});
		}
	};

	makeCarousels();
	bannerSlideshow();


	$(document).on('boomcms:chunkload', function(e) {
		if (e.chunk.type === 'slideshow') {
			$(e.target).removeData('flexslider');
	
			bannerSlideshow();
		}
	});

	$bannerSlideshow.on('click', '.prev', function(e) {
		e.preventDefault();
 
		$bannerSlideshow.flexslider('prev');
	});

	$bannerSlideshow.on('click', '.next', function(e) {
		e.preventDefault();

		$bannerSlideshow.flexslider('next');
	});


}(jQuery));