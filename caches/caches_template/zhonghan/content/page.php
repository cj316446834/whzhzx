<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<div id="Info_banner" class="I_banner01"></div>
<div class="position">
	<div class="position_main"><a href="<?php echo siteurl($siteid);?>">首页</a><span> > </span><?php echo catpos($catid);?> 正文</div>
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
    	<p class="inside_rightTit"><?php echo $title;?></p>
        <div class="inside_info">
            <?php echo $content;?>
        </div>
        <div class="inside_contact"><div class="inside_contactBth01"><a href="/swt/">点击咨询</a></div><div class="inside_contactBth02"><a href="/swt/">专家预约</a></div></div>
    </div>
</div>

<?php include template("content","footer"); ?>

</body>
</html>