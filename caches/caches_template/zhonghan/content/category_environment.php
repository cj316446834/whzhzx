<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<div id="Info_banner" class="I_banner07"></div>
<div class="position">
	<div class="position_main"><a href="<?php echo siteurl($siteid);?>">首页</a><span> > </span><?php echo catpos($catid);?> 列表</div>
</div>

<div class="Hj">
	<div class="Hj_slide">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=aec6fc2048a89b18e5ff63ee78d72195&pos=HJPic\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'HJPic',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	</div>

<?php $n=1;if(is_array(subcat($catid))) foreach(subcat($catid) AS $v) { ?>
    <div class="hj_main">
    	<div class="hj_main_tit"><?php echo $v['catname'];?></div>
        <div class="hj_main_list clearfix">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=63db9645a0ed5139b22ec98ce2aed336&action=lists&catid=%24v%5Bcatid%5D&order=id+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$v[catid],'order'=>'id ASC','limit'=>'20',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $t) { ?>
        	<div class="hj_box">
            	<div class="hj_box_img"><a rel="group" href="<?php echo $t['thumb'];?>"><div class="hj_MG"></div><img alt="<?php echo $t['title'];?>" src="<?php echo thumb($t[thumb],171,102,1);?>" /><div class="MG"></div></a></div>
                <p class="hj_box_tit"><?php echo $t['title'];?></p>
            </div>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
    </div>
<?php $n++;}unset($n); ?>
    
</div>

<?php include template("content","footer"); ?>

<script type="text/javascript" src="/Files/Scripts/sunlion.fancybox.js"></script>
<script type="text/javascript">
jQuery(".Hj_slide").slide({ mainCell:".bd ul",effect:"left",autoPlay:true });

$(document).ready(function(){
		$(".hj_box_img").hover(function(){
			$(this).find('.hj_MG').stop().animate({opacity:'.8'},500);
			$(this).find('.MG').stop().animate({bottom:'35px'},400);
		},
		function(){	
			$(this).find('.hj_MG').stop().animate({opacity:'0'},500);
			$(this).find('.MG').stop().animate({bottom:'-32px'},400);
		});
	});

$(function(){
$("a[rel=group]").fancybox({
		'titlePosition' : 'over',
		'cyclic'        : true,
		'titleFormat'	: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
	});
});
</script>
		  

</body>
</html>
