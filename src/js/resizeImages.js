$(document).ready(function() {
	var resizeTimeout = null;

	function resizeImages() {
		top.$('[data-asset]').each(function() {
			var $this = $(this),
				width = Math.ceil($this.width() / 100) * 100,
				height = Math.ceil($this.height() / 100) * 100,
				url = '/asset/' + $this.attr('data-asset') + '/view/' + width + '/' + height;

			if (parseInt($this.attr('data-asset')) > 0) {
				if (typeof($this.attr('data-width')) === 'undefined' || width > parseInt($this.attr('data-width')) + 20) {
					$this.attr('data-width', width);
					var $img = new Image();
					$img.src = url;

					$img.onload = function() {
					if ($img.complete && typeof $img.naturalWidth !== "undefined" && $img.naturalWidth !== 0) {
						$this.css('background-image', 'url(' + url + ')');
						$this.parent().addClass('bg-loaded');
					} else {
						$this.parent().addClass('bg-not-there');
					}
				};

				} else  {
					var $img = new Image();
					width = parseInt($this.attr('data-width'));
					if(parseInt($this.attr('data-height'))) {
						height = parseInt($this.attr('data-height'));
					}
					url = '/asset/' + $this.attr('data-asset') + '/view/' + width + '/' + height;
					$img.src = url;	


					$img.onload = function() {
					if ($img.complete && typeof $img.naturalWidth !== "undefined" && $img.naturalWidth !== 0) {
						$this.css('background-image', 'url(' + url + ')');
						$this.parent().addClass('bg-loaded');
					} else {
						$this.parent().addClass('bg-not-there');
					}
				};

				}
			}
			else {
				$this.parent().addClass('bg-not-linked');
			}
		});

	};

	resizeImages();

	$(top.document).ajaxSuccess(function() {
		resizeImages();
	});

	$(document).on('boomcms:chunkload', function(e) {
		console.log('chunkload');
		resizeImages($(e.target));
		resizeImages($(e.target).find('[data-asset]'));
	});

	$(window).resize(function() {
		if (resizeTimeout !== null) {
			clearTimeout(resizeTimeout);
		}

		resizeTimeout = setTimeout(resizeImages, 500);
	});
});