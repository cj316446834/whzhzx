<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>    <div class="inside_right">
	
    	<div class="inside_right_ad">
        	<div class="adBth">
            	<ul>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c2437c52f8fbf1cd0a4d094126c1eb0d&action=position&posid=3&order=listorder+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'3','order'=>'listorder DESC','limit'=>'6',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                	<li><?php echo $n;?></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
            <div class="inside_adBox">
                <ul>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c2437c52f8fbf1cd0a4d094126c1eb0d&action=position&posid=3&order=listorder+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'3','order'=>'listorder DESC','limit'=>'6',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li><a href="<?php echo $r['url'];?>" target="_blank" title="<?php echo $r['title'];?>"><img alt="<?php echo $r['title'];?>" src="<?php echo thumb($r[thumb],260,338,1);?>" width="260" height="338" /></a></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
        </div>

        <div class="inside_Xm">
        	<div class="inside_right_title">经典项目</div>
            <div class="inside_Xminfo clearfix">
            	<ul>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=d59b90b270cbfc19fb2fb9058befedbd&pos=jingdian\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'jingdian',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
        </div>
        <div class="inside_zj">
        	<div class="inside_right_title">专家推荐</div>
            <div class="inside_zjInfo">
            	<div class="inside_zjlist">
                	<ul>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3b3cbef6359a2e66dbb9ddd4892260e6&action=position&posid=16&order=listorder+ASC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'16','order'=>'listorder ASC','limit'=>'6',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    	<li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo thumb($r[thumb],258,307,1);?>" width="258" height="307"  alt="<?php echo $r['title'];?>" /><span class="font_18 black"><?php echo $r['title'];?></span><br /><span class="post">(<?php echo $r['zj_zyzc'];?>)</span></a></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>
                </div>
                <div class="zjbth clearfix">
                	<ul>
	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1a3cee8b1a86ea6223bf997f4b98a134&action=position&posid=16&order=listorder+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'16','order'=>'listorder DESC','limit'=>'6',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                	<li><?php echo $n;?></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</ul>
                </div>
            </div>
        </div>
        
        <div class="inside_zj">
        	<div class="inside_right_title">资讯推荐</div>
            <div class="inside_tj">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6bdc8cc1963d6284700261c77e539a7e&action=hits&catid=%24catid&num=6&order=views+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>$catid,'order'=>'views DESC',)).'6bdc8cc1963d6284700261c77e539a7e');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>$catid,'order'=>'views DESC','limit'=>'6',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
            	<ul>
<!--
<script type="text/javascript" src="/index.php?m=dbsource&c=call&a=get&id=1"></script>
-->
                  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li><em></em><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],55,…);?></a></li>
				<?php $n++;}unset($n); ?>


                </ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
        
        <div class="inside_zixun">
        	<p>美丽热线</p>
            <p class="font_22"><?php echo my_c('tel');?></p>
            <p class="m_b10">门诊时间 8:00-20:00</p>
            <div class="consultBth"><a href="/swt/">在线咨询</a></div>
        </div>
    </div>