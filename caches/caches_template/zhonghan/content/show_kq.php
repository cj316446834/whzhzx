<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<div id="Info_banner" class="I_banner03"></div>
<div class="position">
	<div class="position_main"><a href="<?php echo siteurl($siteid);?>">首页</a><span> > </span><?php echo catpos($catid);?> 正文</div>
</div>

<div class="inside clearfix">
	<div class="inside_left">
        <div class="news_info">
        	<div class="news_info_title">
            	<div class="news_date"><span><?php echo date('m月',strtotime($inputtime));?></span><br /><span class="font_18 b"><?php echo date('d',strtotime($inputtime));?></span></div>
                <div class="news_biaoti">
                	<h1 class="news_title_text"><?php echo $title;?></h1>
                    <p>
                    	<div class="news_info_UPtitle">
                        	<ul>
                            	<li class="left">来源：<span class="black2"><?php echo $copyfrom;?></span></li>
                                <li class="left">阅读量：<span class="black2" id="hits">832</span></li>
                                <li class="left">
                                <!-- JiaThis Button BEGIN -->
<div class="jiathis_style">
	<a href="http://www.jiathis.com/share" class=" news_jiathis jiathis  jiathis_separator" target="_blank">我要分享</a>
</div>
<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1375793877052507" charset="utf-8"></script>
<!-- JiaThis Button END -->
                                </li>
                                <li class="right">
                                【字体大小：<a href="javascript:doZoom(16)"><span class="black2">大</span></a> <a href="javascript:doZoom(14)"><span class="black2">中</span></a> <a href="javascript:doZoom(12)"><span class="black2">小</span></a>】
                                </li>
                            </ul>
                        </div>
                    </p>
                </div>
            </div>
             
            <div class="news_main" id="zoom"><!------------正文 开始----------->
<?php if($guke) { ?>
            	<div class="pranli_BOX clearfix">
                    <ul>
                        <li>
                            <div class="anliImg_left"><img src="<?php echo thumb($shuqian,128,155,1);?>"><div class="anliTAB_left">术前</div></div>
                            <div class="anliImg_right"><img src="<?php echo thumb($shuhou,128,155,1);?>"><div class="anliTAB_right">术后</div></div>
                        </li>
                    </ul>
                </div>
<?php } ?>
                <?php echo $content;?>
            </div><!------------正文 结束----------->
        </div>
        <div class="inside_contact"><div class="inside_contactBth01"><a href="/swt/">点击咨询</a></div><div class="inside_contactBth02"><a href="/swt/">专家预约</a></div></div>
        
        <div class="wz_Next_Prev">
        	<ul>
            	<li class="left">上一篇：<a href="<?php echo $previous_page['url'];?>"><?php echo $previous_page['title'];?></a></li>
                <li class="right txt_right">下一篇：<a href="<?php echo $next_page['url'];?>"><?php echo $next_page['title'];?></a></li>
            </ul>
        </div>
        <div class="wz_box">
			<div class="wz_yuedu">
					<dl class="wz_list">
						<dt>相关延伸阅读</dt>
	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=59d3146c936b0bbb61d83c4d89437c20&action=relation&relation=%24relation&id=%24id&catid=%24catid&num=5&keywords=%24rs%5Bkeywords%5D\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'relation')) {$data = $content_tag->relation(array('relation'=>$relation,'id'=>$id,'catid'=>$catid,'keywords'=>$rs[keywords],'limit'=>'5',));}?>
	<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<dd><a href="<?php echo $r['url'];?>"><em></em><?php echo $r['title'];?></a></dd>
	<?php $n++;}unset($n); ?>
	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</dl>
            </div>
            <div class="left m_l20">
            	<dl class="wz_list">
                	<dt>热点推荐</dt>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9e58e91e9736f2b4925d2162b35d2628&action=hits&num=5&catid=%24catid&order=views+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>$catid,'order'=>'views DESC',)).'9e58e91e9736f2b4925d2162b35d2628');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>$catid,'order'=>'views DESC','limit'=>'5',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <dd><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><em></em><?php echo $r['title'];?></a></dd>
                <?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </dl>
           </div>     
        </div>
    </div>
    
<?php include template("content","right_kq"); ?>

</div>

<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>
<?php include template("content","footer"); ?>

</body>
</html>