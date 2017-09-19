$(document).ready(function() {
    var resizeTimeout = null;

    function resizeImages($el) {
        if (!$el) {
            $el = top.$('[data-asset]');
        }

        $el.each(function() {
            var $this = $(this),
                width = Math.ceil($this.width() / 250) * 250,
                url = '/asset/' + $this.attr('data-asset') + '/view/' + width;

            if (parseInt($this.attr('data-asset')) > 0) {
                if (typeof($this.attr('data-width')) === 'undefined' || width > parseInt($this.attr('data-width')) + 20) {
                    $this.attr('data-width', width);

                    if ($this.is('img')) {
                        $this.attr('src', url);
                    } else {
                        $this.css('background-image', 'url(' + url + ')');
                    }
                }
            }
        });
    };

    resizeImages();

    $(document).on('boomcms:chunkload', function(e) {
        resizeImages($(e.target));
        resizeImages($(e.target).find('[data-asset]'));
    });

    $(document).ajaxComplete(function() {
        resizeImages();
    });

    $(window).resize(function() {
        if (resizeTimeout !== null) {
            clearTimeout(resizeTimeout);
        }

        resizeTimeout = setTimeout(resizeImages, 500);
    });
});
