

(function($) {
	$.fn.navScroll = function(o) {
		o = $.extend({
			navAddClass: 'cur',
			conAddClass: 'posi',
			navH: 66,
			speedArg: 7
		}, o || {});

		var navAdd = o.navAddClass,conAdd = o.conAddClass,navH = o.navH,speedArg = o.speedArg;
		var _el = $(this),arrPos = [],timer = null;

		$('.' + conAdd + '').each(function() {
			arrPos.push($(this).offset().top);
		});

		_el.each(function(index) {
			$(this).attr('index', index);
			$(this).bind('click',
			function() {
				$(window).unbind('scroll', WinScroll);

				_el.each(function() {
					$(this).removeClass(navAdd);
				});

				$(this).addClass(navAdd);

				fnScroll($(this));
			});
		});

		function fnScroll(obj) {
			var iSpeed = 0;
			var iTarget = arrPos[obj.attr('index')]-navH;

			clearInterval(timer);
			
			timer = setInterval(function() {
				var oLength=$("#column a").length;
				var cur = $(document).scrollTop(),clientH = $(window).height(),docH = $(document).height();
				//alert(cur+"   "+clientH+"   " +docH+"  "+iTarget);
				if(obj.attr('index')==oLength-1){	
					if((cur+clientH)>=docH){
							
							iTarget=docH-clientH;
							//alert(iTarget);
					}
				}
				iSpeed = (iTarget - cur) / speedArg;
				iSpeed = iSpeed > 0 ? Math.ceil(iSpeed) : Math.floor(iSpeed)

				if (Math.abs(iTarget - cur) < 1) {
					clearInterval(timer);
					window.scrollTo(0, iTarget);
					$(window).bind('scroll', WinScroll);
				} else {					
					window.scrollTo(0, cur + iSpeed);
				}
			},
			30);
		}

		function WinScroll() {
			var cur = $(document).scrollTop()+navH;

			$.each(arrPos,
			function(i) {
				
				if (cur >= arrPos[i]) {
					if (cur < arrPos[i + 1]) {

						_el.each(function() {
							if ($(this).attr('index') == i) {
								$(this).addClass(navAdd);
							} else {
								$(this).removeClass(navAdd);
							}
						});
					} else {
						_el.each(function() {

							if ($(this).attr('index') == arrPos.length - 1) {
								$(this).addClass(navAdd);
							} else {
								$(this).removeClass(navAdd);
							}
						});
					}
				}
			});

		};
		$(window).bind('scroll', WinScroll);
	};

})(jQuery);

$('#column ul li a').navScroll({
			navAddClass: 'current',  
			conAddClass: 'scroll_top',
			navH: 66,
			speedArg: 7
		}); 