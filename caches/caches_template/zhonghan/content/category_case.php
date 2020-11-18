<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<style type="text/css">
.aa{position: fixed; top:0px;_position:absolute;_bottom:auto;_top:expression(eval(document.documentElement.scrollTop-185));}
</style>

<div id="Info_banner" class="I_banner05"></div>
<div class="position">
	<div class="position_main"><a href="<?php echo siteurl($siteid);?>">首页</a><span> > </span><?php echo catpos($catid);?> 频道</div>
</div>

<div class="inside clearfix">
	<div class="inside_left">
    	<p class="text_a case_title"><?php echo $catname;?></p>
        <div class="mainCon">
		<ul id="prnav" class="Details_nav clearfix">
<?php $n=1;if(is_array(subcat($catid))) foreach(subcat($catid) AS $v) { ?>
          <li<?php if($n==1) { ?> class="current"<?php } ?> style="width:122px;"><a href="javascript:;"><?php echo $v['catname'];?></a></li>
<?php $n++;}unset($n); ?>
        </ul>
<?php $n=1;if(is_array(subcat($catid))) foreach(subcat($catid) AS $v) { ?>
        <div id="section-1" class="container" ><!-------------------------<?php echo $v['catname'];?> 开始----------------------->
			<div class="zt_title txt_right clearfix">
                <div class="case_box_title"><?php echo $v['catname'];?></div>
                <ul class="case_box_list">
<?php $n=1;if(is_array(subcat($v[catid]))) foreach(subcat($v[catid]) AS $s) { ?>
                    <li<?php if($n==q) { ?> class="on"<?php } ?>><a href="#"><?php echo $s['catname'];?></a></li>
<?php $n++;}unset($n); ?>
                </ul>
            </div>
            
            <div class="zt_info">
            	<div class="case_width">
<?php $n=1;if(is_array(subcat($v[catid]))) foreach(subcat($v[catid]) AS $s) { ?>
                	<div class="pranli left"><!---<?php echo $s['catname'];?>--->
                    	<div class="pranli_btn">
                        	<a class="prev">prev</a>
                            <a class="next">next</a>
                        </div>
                        <div class="pranli_BOX">
                        	<ul>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=54fbd0303f1d0ab104e2820a087ad755&action=lists&catid=%24s%5Bcatid%5D&order=listorder+ASC&moreinfo=1&num=12\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$s[catid],'order'=>'listorder ASC','moreinfo'=>'1','limit'=>'12',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            	<li>
                                	<div class="anliImg_left"><img src="<?php echo thumb($r[shuqian],128,155,1);?>" width="128" height="155" /><div class="anliTAB_left">术前</div></div>
                        			<div class="anliImg_right"><img src="<?php echo thumb($r[shuhou],128,155,1);?>" width="128" height="155" /><div class="anliTAB_right">术后</div></div>
                                </li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            </ul>
                        </div>
                    </div>
<?php $n++;}unset($n); ?>
                </div>
            </div>
            
        </div><!-------------------------<?php echo $v['catname'];?> 结束----------------------->
<?php $n++;}unset($n); ?>
        </div>
        
        <div class="inside_contact"><div class="inside_contactBth01"><a href="/swt/">点击咨询</a></div><div class="inside_contactBth02"><a href="/swt/">专家预约</a></div></div>
    </div>
    
<?php include template("content","inside_right"); ?>

</div>

<?php include template("content","footer"); ?>

<script src="/Files/Scripts/sunlion.scrollTo.js"></script>
<script src="/Files/Scripts/sunlion.nav.js"></script>
<script language="javascript">
$(".case_box_list").tabso({
		cntSelect:".case_width",
		tabEvent:"mouseover",
		tabStyle:"fade",
		onStyle : "on"
	});
</script>
</body>
</html>