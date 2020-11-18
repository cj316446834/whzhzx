$(document).ready(function() {
	$(".StrengthBox").hover(function() {
			$(this).find(".circle-icon").stop().css({
				"-webkit-transform": "rotate(-360deg)",
				"-webkit-transition": "all 800ms"
			})
		},
		function() {
			$(this).find(".circle-icon").stop().css({
				"-webkit-transform": "rotate(360deg)",
				"-webkit-transition": "all 800ms"
			});
		});
		
	$(".method-bth").hover(function() {
			$(this).find(".method-bj").stop().animate({width:'210px'},300)
		},
		function() {
			$(this).find(".method-bj").stop().animate({width:'0'},300)
		});
});

$.fn.smartFloat = function() {
    var position = function(element) {
        var top = element.position().top, pos = element.css("position");
        $(window).scroll(function() {
            var scrolls = $(this).scrollTop();
            if (scrolls > top) {
                if (window.XMLHttpRequest) {
                    element.css({
                        position: "fixed",
                        top: 0
                    });    
                } else {
                    element.css({
                        top: scrolls
                    });    
                }
            }else {
                element.css({
                    position: "absolute",
                    top: top
                });    
            }
        });
    };
    return $(this).each(function() {
        position($(this));                         
    });
};







