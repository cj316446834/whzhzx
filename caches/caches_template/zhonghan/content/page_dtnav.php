<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link href="/Files/Style/dtnav.css" type="text/css" rel="stylesheet">
<div id="Info_banner" class="I_banner01"></div>
<div class="position">
	<div class="position_main"><a href="<?php echo siteurl($siteid);?>">首页</a><span> > </span><?php echo catpos($catid);?></div>
</div>

<div class="main clearfix">
	<div class="inside_sub">
    	<div class="inside_subnav">
        	<div class="inside_navtitle"><p class="inside_title_Ch">品牌中心</p><p class="inside_title_Ko">메 인 화면</p></div>
            <div class="inside_nav">
            	<ul>
<?php $n=1;if(is_array(subcat(1))) foreach(subcat(1) AS $v) { ?>
                	<li<?php if($catid==$v[catid]) { ?>  class="on"}<?php } ?>><a href="<?php echo $CATEGORYS[$v['catid']]['url'];?>"><?php echo $CATEGORYS[$v['catid']]['catname'];?></a></li>
<?php $n++;}unset($n); ?>
            	</ul>
            </div>
            <div class="inside_SUBconsult">
            	<p>美丽热线</p>
                <p class="font_22">027-87866888</p>
                <p class="m_b15">门诊时间 8:00-21:00</p>
                <div class="consultBth"><a href="/swt/">在线咨询</a></div>
            </div>
        </div>
        <div class="inside_subBOX"></div>
    </div>
    <div class="inside_main">
    	<p class="inside_rightTit">网站地图</p>
        <div class="inside_info">
            <div class="wzdt">
			<div class="ppzx bb_S">
			<h3><a href="<?php echo $CATEGORYS['12']['url'];?>" target="_blank">品牌中心：</a></h3>
			<dl>
				
				<dd class="cl">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dc7cc59d2a659cdd679cd623317476b7&action=category&catid=1&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'1','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['catname'];?></a>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>	
				</dd>
			</dl>
			</div>
			<div class="zxmr xmzx bb_S">
			<?php $n=1;if(is_array(subcat(2))) foreach(subcat(2) AS $v) { ?>
			<h3><a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['catname'];?>：</a></h3>
			<dl>
			    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1c47cd31a8f8c2e255f0ba9f09d06145&action=category&siteid=1&catid=%24v%5Bcatid%5D\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('siteid'=>'1','catid'=>$v[catid],'limit'=>'20',));}?>
				<?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
				<?php $sunlion = "`catid`='$r[catid]' AND `xm`='1'"?>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e9264b3dc0a6294b1fe077ada544b9c0&action=lists&catid=%24r%5Bcatid%5D&moreinfo=1&where=%24sunlion&order=id+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$r[catid],'moreinfo'=>'1','where'=>$sunlion,'order'=>'id DESC','limit'=>'1',));}?>
				<?php if($data) { ?>
				<?php $n=1;if(is_array($data)) foreach($data AS $t) { ?>
			    <dt><a href="<?php echo $t['url'];?>" target="_blank"><?php echo $r['catname'];?></a></dt>
				<?php $n++;}unset($n); ?>
				<?php } else { ?>
				<dd class="cl"><a href="<?php echo $t['url'];?>" target="_blank"><?php echo $r['catname'];?></a></dd>
				<?php } ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</dl>
			<?php $n++;}unset($n); ?>
			</div>
			<div class="pfmr xmzx bb_S">
			<?php $n=1;if(is_array(subcat(3))) foreach(subcat(3) AS $v) { ?>
			<h3><a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['catname'];?>：</a></h3>
			<dl>
			    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1c47cd31a8f8c2e255f0ba9f09d06145&action=category&siteid=1&catid=%24v%5Bcatid%5D\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('siteid'=>'1','catid'=>$v[catid],'limit'=>'20',));}?>
				<?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
				<?php $sunlion = "`catid`='$r[catid]' AND `xm`='1'"?>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e9264b3dc0a6294b1fe077ada544b9c0&action=lists&catid=%24r%5Bcatid%5D&moreinfo=1&where=%24sunlion&order=id+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$r[catid],'moreinfo'=>'1','where'=>$sunlion,'order'=>'id DESC','limit'=>'1',));}?>
				<?php if($data) { ?>
				<?php $n=1;if(is_array($data)) foreach($data AS $t) { ?>
			    <dt><a href="<?php echo $t['url'];?>" target="_blank"><?php echo $r['catname'];?></a></dt>
				<?php $n++;}unset($n); ?>
				<?php } else { ?>
				<dd class="cl"><a href="<?php echo $t['url'];?>" target="_blank"><?php echo $r['catname'];?></a></dd>
				<?php } ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</dl>
			<?php $n++;}unset($n); ?>
			</div>
			<div class="wzxmr xmzx bb_S">
			<?php $n=1;if(is_array(subcat(4))) foreach(subcat(4) AS $v) { ?>
			<h3><a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['catname'];?>：</a></h3>
			<dl>
			    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1c47cd31a8f8c2e255f0ba9f09d06145&action=category&siteid=1&catid=%24v%5Bcatid%5D\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('siteid'=>'1','catid'=>$v[catid],'limit'=>'20',));}?>
				<?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
				<?php $sunlion = "`catid`='$r[catid]' AND `xm`='1'"?>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e9264b3dc0a6294b1fe077ada544b9c0&action=lists&catid=%24r%5Bcatid%5D&moreinfo=1&where=%24sunlion&order=id+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$r[catid],'moreinfo'=>'1','where'=>$sunlion,'order'=>'id DESC','limit'=>'1',));}?>
				<?php if($data) { ?>
				<?php $n=1;if(is_array($data)) foreach($data AS $t) { ?>
			    <dt><a href="<?php echo $t['url'];?>" target="_blank"><?php echo $r['catname'];?></a></dt>
				<?php $n++;}unset($n); ?>
				<?php } else { ?>
				<dd class="cl"><a href="<?php echo $t['url'];?>" target="_blank"><?php echo $r['catname'];?></a></dd>
				<?php } ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</dl>
			<?php $n++;}unset($n); ?>
			</div>
			<div class="kqmr xmzx bb_S">
			<?php $n=1;if(is_array(subcat(5))) foreach(subcat(5) AS $v) { ?>
			<h3><a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['catname'];?>：</a></h3>
			<dl>
			    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1c47cd31a8f8c2e255f0ba9f09d06145&action=category&siteid=1&catid=%24v%5Bcatid%5D\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('siteid'=>'1','catid'=>$v[catid],'limit'=>'20',));}?>
				<?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
				<?php $sunlion = "`catid`='$r[catid]' AND `xm`='1'"?>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e9264b3dc0a6294b1fe077ada544b9c0&action=lists&catid=%24r%5Bcatid%5D&moreinfo=1&where=%24sunlion&order=id+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$r[catid],'moreinfo'=>'1','where'=>$sunlion,'order'=>'id DESC','limit'=>'1',));}?>
				<?php if($data) { ?>
				<?php $n=1;if(is_array($data)) foreach($data AS $t) { ?>
			    <dt><a href="<?php echo $t['url'];?>" target="_blank"><?php echo $r['catname'];?></a></dt>
				<?php $n++;}unset($n); ?>
				<?php } else { ?>
				<dd class="cl"><a href="<?php echo $t['url'];?>" target="_blank"><?php echo $r['catname'];?></a></dd>
				<?php } ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</dl>
			<?php $n++;}unset($n); ?>
			</div>
			<div class="kslmr xmzx bb_S">
			<h3><a href="<?php echo $CATEGORYS['13']['url'];?>" target="_blank">精彩专题：</a></h3>
			<div class="cl">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fedc5ad991b7fa9255df5ec1c5c5da86&action=category&catid=13&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'13','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['catname'];?></a>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>	
			</div>
			</div>
			
			<div class="kqmr xmzx bb_S">
			<?php $n=1;if(is_array(subcat(14))) foreach(subcat(14) AS $v) { ?>
			<h3><a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['catname'];?>：</a></h3>
			<dl>
			    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1c47cd31a8f8c2e255f0ba9f09d06145&action=category&siteid=1&catid=%24v%5Bcatid%5D\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('siteid'=>'1','catid'=>$v[catid],'limit'=>'20',));}?>
				<?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
				<?php $sunlion = "`catid`='$r[catid]' AND `xm`='1'"?>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e9264b3dc0a6294b1fe077ada544b9c0&action=lists&catid=%24r%5Bcatid%5D&moreinfo=1&where=%24sunlion&order=id+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$r[catid],'moreinfo'=>'1','where'=>$sunlion,'order'=>'id DESC','limit'=>'1',));}?>
				<?php if($data) { ?>
				<?php $n=1;if(is_array($data)) foreach($data AS $t) { ?>
			    <dd><a href="<?php echo $t['url'];?>" target="_blank"><?php echo $r['catname'];?></a></dd>
				<?php $n++;}unset($n); ?>
				<?php } else { ?>
				<dt class="cl"><a href="<?php echo $t['url'];?>" target="_blank"><?php echo $r['catname'];?></a></dt>
				<?php } ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</dl>
			<?php $n++;}unset($n); ?>
			</div>
			
			<div class="kslmr xmzx bb_S">
			<h3><a href="<?php echo $CATEGORYS['17']['url'];?>" target="_blank">新闻中心：</a></h3>
			</div>
			
			<div class="kslmr xmzx bb_S">
			<h3><a href="<?php echo $CATEGORYS['44']['url'];?>" target="_blank">问答中心：</a></h3>
			</div>
			
			
			</div>
        </div>
        <div class="inside_contact"><div class="inside_contactBth01"><a href="/swt/">点击咨询</a></div><div class="inside_contactBth02"><a href="/swt/">专家预约</a></div></div>
    </div>
</div>

<?php include template("content","footer"); ?>

</body>
</html>