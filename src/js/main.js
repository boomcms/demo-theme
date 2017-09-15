(function() {
	var $body = $('body'),
        $window = $(window),
        v_height = 200,
        v_padding = 80,
        v_scroll = 0;

	$window
        .on('scroll', function()  {
            v_scroll = $window.scrollTop();

            if (v_scroll + v_padding > v_height) {
                $body
                    .css({
                        paddingTop: $body.find('#navbar').height()
                    })
                    .addClass('nav-fixed');
            } else {
                $body
                    .removeClass('nav-fixed')
                     d.css({
                        paddingTop: 0
                    });
            }
        });

	$body
        .on('click', '#sidebar_nav_open', function() {
            $body.addClass('sidebar-open');
        })
        .on('click', '#sidebar_nav_close', function() {
            $body.removeClass('sidebar-open');
        });

    $(".album-images ul").lightGallery({
        selector: 'a',
        hideControlOnEnd: true,
        subHtmlSelectorRelative: true,
        download: false
    });
	
	// init resp menu scripts
	var $topnav = $('#topnav');

    $body.on('click', 'label.main-menu-btn', function() {
        if($('#main-menu-state').is(':checked')) {
            $body.removeClass('mobile-menu-open');
        } else {
            $body.addClass('mobile-menu-open');
        }
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