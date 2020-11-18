$(document).ready(function() {
			$(".method-bth").hover(function() {
				$(this).find(".method-bj").stop().animate({width:'128px'},300)
			},
			function() {
				$(this).find(".method-bj").stop().animate({width:'0'},300)
			});	
		});
		$(document).ready(function(){
				$(".bigimg").zoomImgRollover();
			});
			
			
			jQuery(".zjbox").slide({titCell:".hd ul",mainCell:".bd .zj_con",autoPage:true,effect:"leftLoop",autoPlay:true,interTime:9000});