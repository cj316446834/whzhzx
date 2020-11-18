<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<div id="Info_banner" class="I_banner06"></div>
<div class="position">
	<div class="position_main"><a href="<?php echo siteurl($siteid);?>">首页</a><span> > </span><?php echo catpos($catid);?> 列表</div>
</div>

<div class="expert_slide">
<script type="text/javascript" src="/index.php?m=dbsource&c=call&a=get&id=2"></script>
</div>

<div class="expert_main clearfix">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=221b75295bd7826e417fd983705f196b&action=lists&catid=%24catid&moreinfo=1&num=25&order=listorder+ASC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 25;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'moreinfo'=>'1','order'=>'listorder ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'moreinfo'=>'1','order'=>'listorder ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
	<div class="expertBox">
    	<div class="expertBox_img">
        	<img src="<?php echo thumb($r[thumb],306,364,1);?>" width="306" height="364">
            <div class="expertBox_Hide">
            	<p class="font_14 b">专家简介：</p>
                <p class="text_em m_t10"><?php echo nl2br($r[description]);?></p>
                <p class="font_14 b m_t20">擅长项目：</p>
                <p class="text_em m_t10"><?php echo nl2br($r[zj_scxm]);?></p>
            </div>
        </div>
        <div class="expertBox_info">
        	<p class="txt_center"><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a></p>
            <p class="txt_center font_14 black2"><?php echo $r['zj_zyzc'];?></p>
            <ul class="expertBox_info_list">
            	<li class="left"><a href="<?php echo $r['url'];?>" target="_blank">专家详细资料</a></li>
                <li class="right"><a href="/swt/">预约挂号</a></li>
            </ul>
        </div>
    </div>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>

<?php include template("content","footer"); ?>

<script type="text/javascript">
jQuery(".expert_slide").slide({ mainCell:".bd ul",effect:"topLoop",autoPlay:true });

$(document).ready(function(){
		$(".expertBox_img").hover(function(){
			$(this).find('.expertBox_Hide').stop().animate({left:'0'},500);
		},
		function(){	
			$(this).find('.expertBox_Hide').stop().animate({left:'-306px'},500);
		});
	});
</script>
		  

</body>
</html>
