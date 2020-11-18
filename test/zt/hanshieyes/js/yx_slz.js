$(function(){
	
		var lstop = $('#yanbunav').offset().top;
		//alert(lstop);
		$(window).scroll(function() {
				 var scrolls = $(window).scrollTop();
					if(scrolls>=lstop){
						$('#yanbunav').addClass('fixed');
					}else{							
						$('#yanbunav').removeClass('fixed');
					}							
		});			
				
				
				
	})