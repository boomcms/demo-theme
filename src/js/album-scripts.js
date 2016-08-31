(function() {
	function checkImgHeight() {
		if($('.slides-1').length) {
				if($('.slides-1 img').length==1) {
					$('.slides-1 img').css({
						'top' : ($('.slides-1').height() - $('.slides-1 img').height()) / 2
					});
				}
		
		}
	}
	checkImgHeight();
	if(!$('.edit-mode').length){
        $(".album-images ul").lightGallery({
        	selector: '.album-item',
        	hideControlOnEnd: true,
        	subHtmlSelectorRelative: true
        }); 
    }
var $window = $(window);
    $window.on('resize load', function() {

    	checkImgHeight();
    });
  })();
