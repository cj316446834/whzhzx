		//导航
		/*
			$(document).ready(function() {
				$('#nav').onePageNav();
			});
		*/	
		//项目一
	$(function(){
			$(".part1con li").each(function(i){
					$(this).mouseover(function(e) {
						var $THIS = $(this);
                        $THIS.find(".filter_bg").stop().animate({top:'0'},300,function(){
								$THIS.find(".filter_text").stop().animate({top:'0'},200);
							});
						$(this).siblings("li").find(".filter_text").stop().animate({top:'-100%'});
						$(this).siblings("li").find(".filter_bg").stop().animate({top:'-100%'});
						
                    });
				});
			$(".shadow_inner").hide();
			$(".shadow_link").each(function(i){
					$(this).mouseover(function(e) {
                        $(".shadow_inner").hide();
						$(".shadow_inner").eq(i).show();
                    });
					$(this).mouseout(function(e) {
                        $(".shadow_inner").hide();
                    });
				})
		})
			
		//图片放大	
		$(document).ready(function(){
				$(".bigimg").zoomImgRollover();
			});
			