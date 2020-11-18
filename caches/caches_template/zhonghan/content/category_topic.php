<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<div id="Info_banner" class="I_banner12"></div>
<div class="position">
	<div class="position_main"><a href="<?php echo siteurl($siteid);?>">首页</a><span> > </span><?php echo catpos($catid);?> 频道</div>
</div>

<div class="inside clearfix">
	<div class="inside_left">
<?php $n=1;if(is_array(subcat($catid))) foreach(subcat($catid) AS $v) { ?>
        <div class="m_b20">
        	<div class="zt_title txt_right"><span><?php echo $v['catname'];?></span><!--<a href="<?php echo $v['url'];?>" class="black2">+MORE</a>--></div>
            <div class="zt_info clearfix">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ec768dce396ee183e1f28a57ec184bc3&action=lists&catid=%24v%5Bcatid%5D&num=60&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 60;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$v[catid],'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$v[catid],'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            	<div class="zt_box">
                	<a href="<?php echo $r['url'];?>" target="_blank" title="<?php echo $r['title'];?>"><img src="<?php echo thumb($r[thumb],138,100,1);?>" width="138" height="100" alt="<?php echo $r['title'];?>" /><?php echo str_cut($r[title],36);?></a>
                </div>
				
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <!--<div id="pages" class="text-c" style="width:100%; padding-top:25px;text-align:center; height:30px; line-height:30px;clear:both;"><?php echo $pages;?></div>-->
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