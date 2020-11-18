<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<div id="Info_banner" class="I_banner04"></div>
<div class="position">
	<div class="position_main"><a href="<?php echo siteurl($siteid);?>">首页</a><span> > </span><?php echo catpos($catid);?> 列表</div>
</div>

<div class="inside clearfix">
	<div class="inside_left">
    	<p class="inside_title"><?php echo $catname;?></p>
        <div class="video_BOX">
            <div style="width:657px;">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=43f84456de98353f9f2936b9ae3f215d&action=lists&catid=%24catid&num=21&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 21;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            	<div class="video_top_box">
                    <a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo thumb($r[thumb],199,128,1);?>" width="199" height="128" alt="<?php echo $r['title'];?>" /></a>
                    <div class="video_top_tit"><?php echo $r['title'];?></div>
                </div>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
        
        <!--<div class="digg"><a href="#">《上一页</a> </span><span class="current">1</span><a href="#?page=2">2</a><a href="#?page=3">3</a><a href="#?page=4">4</a><a href="#?page=5">5</a><a href="#?page=6">6</a><a href="#?page=7">7</a><a href="#?page=2">下一页》</a></div>-->
        
        <div class="inside_contact"><div class="inside_contactBth01"><a href="/swt/">点击咨询</a></div><div class="inside_contactBth02"><a href="/swt/">专家预约</a></div></div>
    </div>
    
<?php include template("content","inside_right"); ?>

</div>

<?php include template("content","footer"); ?>

</body>
</html>