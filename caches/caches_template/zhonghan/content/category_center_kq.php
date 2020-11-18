<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<div id="Info_banner" class="I_banner02" style="background:url(/Files/Images/info_banner/<?php echo $CATEGORYS[$top_parentid]['catid'];?>_317.jpg) center top no-repeat;
}"></div>
<div class="position">
	<div class="position_main"><a href="<?php echo siteurl($siteid);?>">首页</a><span> > </span><?php echo catpos($catid);?> 频道</div>
</div>

<div class="inside clearfix">
	<div class="inside_left">
    	<div class="inside_leftBox clearfix">
<?php $n=1;if(is_array(subcat($catid))) foreach(subcat($catid) AS $v) { ?>
        	<div class="inside_ProjectBox"><!-------<?php echo $v['catname'];?> 开始------>
            	<p class="inside_prTitle"><span class="left"><?php echo $v['catname'];?></span><a href="<?php echo $v['url'];?>">+MORE</a></p>
                <div class="inside_prDT">
                	<p><a href="<?php echo $v['url'];?>"><img src="<?php echo thumb($v[image],338,100,1);?>" width="338" height="100" alt="<?php echo $v['catname'];?>" /></a></p>
                    <p class="text_em l_h20 m_t5"><?php echo str_cut($v[description],210);?><a href="<?php echo $v['url'];?>" class="text_a">[详情]</a></p>
                </div>
                <ul class="inside_prlist">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=09adf68b4e2e0c7cd45523b715badefb&action=lists&catid=%24v%5Bcatid%5D&num=3&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$v[catid],'order'=>'id DESC','limit'=>'3',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $t) { ?>
                	<li><a href="<?php echo $t['url'];?>" target="_blank"<?php echo title_style($t[style]);?>><?php echo $t['title'];?></a></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
                <p class="inside_prSUB">
<?php $n=1;if(is_array(subcat($v[catid]))) foreach(subcat($v[catid]) AS $s) { ?>
<?php if($n<4) { ?>
                	<a href="<?php echo $s['url'];?>"><?php echo $s['catname'];?></a>
<?php } ?>
<?php $n++;}unset($n); ?>
                </p>
            </div><!-------<?php echo $v['catname'];?> 结束------>
<?php $n++;}unset($n); ?>
        </div>
        <div class="inside_contact"><div class="inside_contactBth01"><a href="/swt/">点击咨询</a></div><div class="inside_contactBth02"><a href="/swt/">专家预约</a></div></div>
    </div>
    
<?php include template("content","right_kq"); ?>

</div>

<?php include template("content","footer"); ?>

</body>
</html>