<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<div id="Info_banner" class="I_banner02"   style="background:url(/Files/Images/info_banner/<?php echo $CATEGORYS[$top_parentid]['catid'];?>_317.jpg) center top no-repeat;
"></div>
<div class="position">
	<div class="position_main"><a href="<?php echo siteurl($siteid);?>">首页</a><span> > </span><?php echo catpos($catid);?> 频道</div>
</div>

<div class="inside clearfix">
	<div class="inside_left">
    	<p class="inside_title"><?php echo $catname;?></p>
        <div class="inside_leftBox clearfix">
<?php $n=1;if(is_array(subcat($catid))) foreach(subcat($catid) AS $v) { ?>
        	<div class="inside_ProjectBox02"><!-----<?php echo $v['catname'];?> 开始----->
            	<div class="inside_prBoxtop">
<?php $catids = $v[catid]?>
<?php $sunlion = "`catid` in($catids) AND `xm`='1'"?>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0d36bebdc28e41168b95958d1ed4352c&action=lists&catid=%24v%5Bcatid%5D&where=%24sunlion&order=id+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$v[catid],'where'=>$sunlion,'order'=>'id DESC','limit'=>'1',));}?>
<?php if($data) { ?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                	<div class="inside_prBoxImg"><a href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r[thumb],112,132,1);?>" width="112" height="132" alt="<?php echo $v['catname'];?>" /></a></div>
                    <div class="inside_prBoxText">
                    	<p class="txt_center b black font_14 m_t10"><a href="<?php echo $r['url'];?>"><?php echo $v['catname'];?></a></p>
                        <p class="text_em l_h20 m_t10"><?php echo str_cut($r[description],160);?><a href="<?php echo $r['url'];?>" class="text_a">[详情]</a></p>
                    </div>
<?php $n++;}unset($n); ?>
<?php } else { ?>
                	<div class="inside_prBoxImg"><a href="<?php echo $v['url'];?>"><img src="<?php echo thumb($v[image],112,132,1);?>" width="112" height="132" alt="<?php echo $v['catname'];?>" /></a></div>
                    <div class="inside_prBoxText">
                    	<p class="txt_center b black font_14 m_t10"><a href="<?php echo $r['url'];?>"><?php echo $v['catname'];?></a></p>
                        <p class="text_em l_h20 m_t10"><?php echo str_cut($v[description],160);?><a href="<?php echo $v['url'];?>" class="text_a">[详情]</a></p>
                    </div>
<?php } ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>
                <ul class="inside_prlist m_t10">
<?php $sunlion = "`catid` in($catids) AND `xm`='0'"?>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f5ce3947ea524685c2c08f6e19459a1d&action=lists&catid=%24v%5Bcatid%5D&where=%24sunlion&order=id+DESC&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$v[catid],'where'=>$sunlion,'order'=>'id DESC','limit'=>'3',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                	<li><a href="<?php echo $v['url'];?>" target="_blank"<?php echo title_style($v[style]);?>><?php echo $v['title'];?></a></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div><!-----<?php echo $v['catname'];?> 结束----->
<?php $n++;}unset($n); ?>
        </div>
        <div class="inside_contact"><div class="inside_contactBth01"><a href="/swt/">点击咨询</a></div><div class="inside_contactBth02"><a href="/swt/">专家预约</a></div></div>
    </div>
    
<?php include template("content","right_pf"); ?>

</div>

<?php include template("content","footer"); ?>

</body>
</html>