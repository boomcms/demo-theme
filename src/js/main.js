(function() {
	var $body = $('body'),
        $window = $(window),
        $topnav = $body.find('#topnav'),
        v_height = 200,
        v_padding = 80,
        v_scroll = 0;

	$window
        .on('scroll', function()  {
            v_scroll = $window.scrollTop();

            if (v_scroll + v_padding > v_height) {
                $body.css({
                    paddingTop: $topnav.height()
                });

                $topnav.addClass('fixed');
            } else {
                $topnav.removeClass('fixed');

                $body.css({
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

    $topnav
        .on('click', '#mobile-nav', function(e) {
            e.preventDefault();

            $topnav.toggleClass('open');
        });

    $(".album-images ul").lightGallery({
        selector: 'a',
        hideControlOnEnd: true,
        subHtmlSelectorRelative: true,
        download: false
    });
})();
