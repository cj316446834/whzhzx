// JavaScript Document
jQuery(".top_infolist").slide({titCell:"", mainCell:"ul",effect:"topLoop",autoPlay:true,vis:1,scroll:1,trigger:"click"});

//banner begin
$(document).ready(function () {
	$(".main_visual").hover(function(){
		$("#btn_prev,#btn_next").fadeIn()
		},function(){
		$("#btn_prev,#btn_next").fadeOut()
		})
	$dragBln = false;
	$(".main_image").touchSlider({
		flexible : true,
		speed : 400,
		btn_prev : $("#btn_prev"),
		btn_next : $("#btn_next"),
		paging : $(".flicking_con a"),
		counter : function (e) {
			$(".flicking_con a").removeClass("on").eq(e.current-1).addClass("on");
		}
	});
	$(".main_image").bind("mousedown", function() {
		$dragBln = false;
	})
	$(".main_image").bind("dragstart", function() {
		$dragBln = true;
	})
	$(".main_image a").click(function() {
		if($dragBln) {
			return false;
		}
	})
	timer = setInterval(function() { $("#btn_next").click();}, 5000);
	$(".main_visual").hover(function() {
		clearInterval(timer);
	}, function() {
		timer = setInterval(function() { $("#btn_next").click();}, 5000);
	})
	$(".main_image").bind("touchstart", function() {
		clearInterval(timer);
	}).bind("touchend", function() {
		timer = setInterval(function() { $("#btn_next").click();}, 5000);
	})
});//banner over！



$(document).ready(function($){
	$("#nav").tabso({
			cntSelect:"#menu_left",
			tabEvent:"mouseover",
			tabStyle:"move-animate",
			direction : "left",
			aniSpeed : "1000"
		});
		
	$(".fd_list li a").hover(function(){
		$(this).find('.move_l').stop().animate({marginTop:'-50px'},200);
	},
	function(){	
		$(this).find('.move_l').stop().animate({marginTop:'0px'},200);
	});
	
	//页面底部特效
	$("#luxian").tabso({
		cntSelect:"#luxian_info",
		tabEvent:"mouseover",
		onStyle :"lxOn",
		aniSpeed :500,
		tabStyle:"fade"
	});
	
	$(".fd_list li").hover(function(){
		$(this).find('.luxian').stop().show(500);
		
	},
	function(){	
		$(this).find('.luxian').stop().hide(500);
	});
	
});
/*jQuery("#nav").slide({mainCell:".menu_box",titCell:".navlist",effect:"left"});*/

$(function(){

	var aLi=$("ul.navlist li");
	var oMenu=$("#menu");
	var timer=null;
	var state=0;

	aLi.hover(
	function()
	{
			if(state==0)
			{
			$("#blackbox").remove();
			oMenu.css("display","block");
			$("#head").after("<div id='blackbox'></div>");
			$("#blackbox").css({"backgroundColor":"#000000","opacity":"0"});
			$("#blackbox").animate({opacity:'0.7'},500);
			clearInterval(timer);
			}
			else
			{
			clearInterval(timer);
			}
	},	
	function()
	{
		timer=setInterval(function(){
		$("#blackbox").animate({opacity:'0'},0,function(){$("#blackbox").remove();});oMenu.css("display","none"); state=0;},100);	
	}
	);
	oMenu.hover(
		function()
			{
			clearInterval(timer); state=1;
			},
		function(){
			timer=setInterval(function(){
				
			$("#blackbox").animate({opacity:'0'},0,function(){$("#blackbox").remove();});oMenu.css("display","none"); state=0;},100);})
});

//内页广告幻灯
jQuery(".inside_right_ad").slide({ mainCell:".inside_adBox ul",effect:"leftLoop",vis:1,scroll:1,titCell:".adBth li",autoPlay:true});
//内页右侧专家
jQuery(".inside_zjInfo").slide({ mainCell:".inside_zjlist ul",effect:"leftLoop",vis:1,scroll:1,titCell:".zjbth li",autoPlay:true});
//案例
jQuery(".pranli").slide({ mainCell:".pranli_BOX ul",effect:"leftLoop",vis:2,scroll:2,autoPlay:false});
//内页经典项目
$(document).ready(function(){
		$(".inside_Xminfo li").hover(function(){
			$(this).find('.xm_move01').stop().animate({marginTop:'-74px'},400);
		},
		function(){	
			$(this).find('.xm_move01').stop().animate({marginTop:'0px'},400);
		});
	});


//浮动
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
                    position: "",
                    top: top
                });    
            }
        });
    };
    return $(this).each(function() {
        position($(this));                         
    });
};	





//案例整形导航定位
var DT=$('.Details_nav').offset().top;
	$('.Details_nav>li').click(function(){
		var s=$('.Details_nav>li').index(this);
		$(window).scrollTop($('.mainCon>.container:eq('+s+')').offset().top-60);
	});
	$(window).scroll(function(){
		var wt=$(window).scrollTop(),l=$('.mainCon>.container'),s=l.length-1;
		if(wt<DT||wt>=l.last().offset().top+l.last().height()-5){
			$('.Details_nav').removeClass('aa');
			$('.Details_nav>li:first').addClass('current').siblings().removeClass('current');
		}else{
			$('.Details_nav').addClass('aa');
			for(var i=0;i<s;i++){
				if(wt>=parseInt(l.eq(i).offset().top-60)&&wt<parseInt(l.eq(i+1).offset().top-60)){
					s=i;
					break;
				}
			}
			$('.Details_nav>li:eq('+s+')').addClass('current').siblings().removeClass('current');
		}
	});


//新闻详情字体大小控制
function doZoom(size)
{document.getElementById('zoom').style.fontSize=size+'px';}





