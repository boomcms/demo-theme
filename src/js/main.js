(function() {
	var $body = $('body'),
        v_height = 200,
        v_padding = 80,
        v_scroll = 0;

	$(window)
	.on('scroll', function()  {
		v_scroll = $(window).scrollTop();
		if(v_scroll + v_padding > v_height){
			$body.addClass('nav-fixed');
		}
		else {
			$body.removeClass('nav-fixed');
		}
	})
	// init resp menu scripts
	var $topnav = $('#topnav');
	 $topnav.smartmenus({ 
	 	markCurrentItem: true,
	 	markCurrentTree: true,
	 	keepHighlighted: true
	 });
		// add menu show hide toggle button on mobile
	var $mainMenuState = $('#main-menu-state');
	if ($mainMenuState.length) {
		// animate mobile menu
		$mainMenuState.change(function(e) {
		
			if (this.checked) {
				$topnav.hide().slideDown(250, function() { $topnav.css('display', ''); });
			} else {
				$topnav.show().slideUp(250, function() { $topnav.css('display', ''); });
			}
		});
		// hide mobile menu beforeunload
		$(window).bind('beforeunload unload', function() {
			if ($mainMenuState[0].checked) {
				$mainMenuState[0].click();
			}
		});
 };
})();