// JavaScript Document

/*±³¾°²ã*/
document.writeln("  <div id=\"quanping\" style=\" background-color:#CCCCCC;display:none; width:100%; height:100%; position: fixed ! important;_position:absolute;_top:expression(offsetParent.scrollTop+0); top:0; left:0; opacity:0.6;filter:\'alpha(opacity=60)\';filter:alpha(opacity=60); z-index:10000;\"></div>");
/*Î¢ÐÅ²ã*/

document.write(" <iframe id='destiframeweix' src='/js/weixin.html' scrolling='no' width='515' height='280' frameborder='0' style='position: fixed ! important;_position:absolute;_top:expression(offsetParent.scrollTop+240); left:50%; top:50%; margin-top:-125px; margin-left:-257px; display:none; z-index:2147483647; background:none; _height:280px;'></iframe>");
document.write(" <iframe id='openVideo' src='/js/xzr_video.html' scrolling='no' width='360' height='280' frameborder='0' style='position: fixed ! important;_position:absolute;_top:expression(offsetParent.scrollTop+240); left:50%; top:50%; margin-top:-140px; margin-left:-180px; display:none; z-index:2147483647; background:none; _height:240px;'></iframe>");

$('.sendweix1').click(function(){
	$("#quanping").css("display","block");
	$("#destiframeweix").slideToggle();								 
 })
 $('.open_video').click(function(){
	$("#quanping").css("display","block");
	$("#openVideo").slideToggle();								 
 })

