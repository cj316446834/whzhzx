<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<div id="Info_banner" class="I_banner04"></div>
<div class="position">
	<div class="position_main"><a href="<?php echo siteurl($siteid);?>">首页</a><span> > </span><?php echo catpos($catid);?> 频道</div>
</div>

<div class="inside clearfix" style=" padding:0">
	<div class="video_left">
    	<div class="video_top">
        	<p class="text_a font_14 l_h30 b">最新视频</p>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c908e5c9802f84e6066689eb58b9625b&action=lists&catid=%24catid&order=id+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>'6',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <div class="video_top_box">
            	<a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo thumb($r[thumb],199,128,1);?>" width="199" height="128" alt="<?php echo $r['title'];?>" /></a>
                    <div class="video_top_tit"><?php echo $r['title'];?></div>
            </div>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</div>
<?php $n=1;if(is_array(subcat($catid))) foreach(subcat($catid) AS $v) { ?>
        <div class="video_BOX">
        	<p class="txt_right"><span class="font_14 b left"><?php echo $v['catname'];?></span><a href="<?php echo $v['url'];?>" class="black2">+MORE</a></p>
            <div style="width:657px;">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=08526a95ce85e3932f5e59664a3c6d3e&action=lists&catid=%24v%5Bcatid%5D&order=id+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$v[catid],'order'=>'id DESC','limit'=>'6',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            	<div class="video_top_box">
                    <a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo thumb($r[thumb],199,128,1);?>" width="199" height="128" alt="<?php echo $r['title'];?>" /></a>
                    <div class="video_top_tit"><?php echo $r['title'];?></div>
                </div>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
<?php $n++;}unset($n); ?>
       <div class="inside_contact"><div class="inside_contactBth01"><a href="/swt/">点击咨询</a></div><div class="inside_contactBth02"><a href="/swt/">专家预约</a></div></div>
    </div>
    
<?php include template("content","inside_right"); ?>

</div>

<?php include template("content","footer"); ?>

</body>
</html>