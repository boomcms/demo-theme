$(document).ready(function(){function t(t){t||(t=top.$("[data-asset]")),t.each(function(){var t=$(this),a=250*Math.ceil(t.width()/250),e="/asset/"+t.attr("data-asset")+"/view/"+a;parseInt(t.attr("data-asset"))>0&&(void 0===t.attr("data-width")||a>parseInt(t.attr("data-width"))+20)&&(t.attr("data-width",a),t.is("img")?t.attr("src",e):t.css("background-image","url("+e+")"))})}var a=null;t(),$(document).on("boomcms:chunkload",function(a){t($(a.target)),t($(a.target).find("[data-asset]"))}),$(document).ajaxComplete(function(){t()}),$(window).resize(function(){null!==a&&clearTimeout(a),a=setTimeout(t,500)})}),function(t){function a(){e.flexslider({slideshow:!1,controlNav:!0,directionNav:!1})}var e=t("#slideshow");a(),t(document).on("boomcms:chunkload",function(e){"slideshow"===e.chunk.type&&(t(e.target).removeData("flexslider"),a())})}(jQuery),function(){var t=$("body"),a=$(window),e=t.find("#topnav"),n=0;a.on("scroll",function(){n=a.scrollTop(),n+80>200?(t.css({paddingTop:e.height()}),e.addClass("fixed")):(e.removeClass("fixed"),t.css({paddingTop:0}))}),t.on("click","#sidebar_nav_open",function(){t.addClass("sidebar-open")}).on("click","#sidebar_nav_close",function(){t.removeClass("sidebar-open")}),e.on("click","#mobile-nav",function(t){t.preventDefault(),e.toggleClass("open")}),$(".album-images ul").lightGallery({selector:"a",hideControlOnEnd:!0,subHtmlSelectorRelative:!0,download:!1})}();