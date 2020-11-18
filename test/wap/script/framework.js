//2014.12.20 http://www.nakeu.com

//window.onload = function() 
//{ 
//	$(".header").delay(0).animate({top:'0'},1000);
//	$(".all-elements").delay(0).fadeIn(1000);
//	$(".project").delay(0).fadeIn(1000);
////	$('#p-nav').delay(5000).animate({left:'-30%'}, 1000)
////	$('.projectBottn').delay(6000).animate({left:'0'}, 1000)
//}

var atime;
     $(function() {
         $("#loading").width($(window).width());
         $("#loading").height($(window).height());
         //$("#loading").fadeTo();
         document.onreadystatechange = subSomething; //当页面加载状态改变的时候执行这个方法.
         function subSomething() {
             if (document.readyState == "complete") {
                 //atime = setInterval(autobg, 100);
                 $("#loading").fadeOut(500);
                 $(".header").delay(0).animate({top:'0'},1000);
                 $(".all-elements").delay(0).fadeIn(1000);
                 $(".project").delay(0).fadeIn(1000);
             }
         }
     })



$(function() {
		
	$('.share').click(function(){
		$('.p-share').toggleClass('p-share-open');
		$('.p-shareBox').toggleClass('p-shareBox-open');
		$(".info-nav").removeClass('bounceInUp')
	})
	
	$('.p-sharecancel').click(function(){
		$('.p-share').removeClass('p-share-open');
		$('.p-shareBox').removeClass('p-shareBox-open');
	})
	$('.p-share').click(function(){
		$('.p-share').removeClass('p-share-open');
		$('.p-shareBox').removeClass('p-shareBox-open');
	})
	
	
	$(window).scroll(function() {
						if ($(window).scrollTop() > 300) {
							$("#bottomnav").fadeIn(1000);
						} else {
							$("#bottomnav").fadeOut(500);
						}
					});
	
	
	$("img").lazyload({
	placeholder : "images/pixel.gif",
	effect : "fadeIn"
	});
	

});


