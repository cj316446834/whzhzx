<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<div id="Info_banner" class="I_banner06"></div>
<div class="position">
	<div class="position_main"><a href="<?php echo siteurl($siteid);?>">首页</a><span> > </span><?php echo catpos($catid);?> 资料</div>
</div>

<div class="inside clearfix">
	<div class="video_left">
    	<div class="video_top">
        	<p class="case_title text_a">专家详细资料</p>
            <div class="expert_infoTop">
            	<div class="expert_infoTop_Img"><img src="<?php echo thumb($thumb,218,260,1);?>" width="218" height="260" alt="<?php echo $title;?>" /></div>
                <div class="left m_l20">
                	<p class="font_16 b"><span class="text_a"><?php echo $title;?></span>&emsp;<span><?php echo $zj_zyzc;?></span></p>
                    <p class="m_t10 l_h25">
                        <?php echo nl2br($zj_xxzc);?>
                    </p>
                    <p class="m_t20"><span class="zx_btn left"><a href="/swt/">我要提问</a></span><span class="zx_btn left m_l20"><a href="/swt/"><em></em><span class="zx_p">专家预约</span></a></span></p>
                </div>
            </div>
		</div>
        <div class="video_BOX">
        	<?php echo $content;?>
        </div>
        
        <div class="inside_contact"><div class="inside_contactBth01"><a href="/swt/">点击咨询</a></div><div class="inside_contactBth02"><a href="/swt/">专家预约</a></div></div>
        
        <div class="wz_Next_Prev">
        	<ul>
            	<li class="left">上一位：<a href="<?php echo $previous_page['url'];?>"><?php echo $previous_page['title'];?></a></li>
                <li class="right txt_right">下一位：<a href="<?php echo $next_page['url'];?>"><?php echo $next_page['title'];?></a></li>
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
                    <dd><a href="#"><em></em>做双眼皮多少钱</a></dd>
                    <dd><a href="#"><em></em>割双眼皮多久恢复</a></dd>
                    <dd><a href="#"><em></em>做韩式双眼皮医院哪家好?</a></dd>
                    <dd><a href="#"><em></em>压双眼皮是怎么做的</a></dd>
                    <dd><a href="#"><em></em>双眼皮下垂怎么办</a></dd>
                </dl>
           </div>     
        </div>
        
    </div>
    
<?php include template("content","inside_right"); ?>

</div>

<?php include template("content","footer"); ?>	  

</body>
</html>