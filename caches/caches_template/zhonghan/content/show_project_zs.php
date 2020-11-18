<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<div id="Info_banner" class="I_banner02"   style="background:url(/Files/Images/info_banner/<?php echo $CATEGORYS[$top_parentid]['catid'];?>_317.jpg) center top no-repeat;
"></div>
<div class="position">
	<div class="position_main"><a href="<?php echo siteurl($siteid);?>">首页</a><span> > </span><?php echo catpos($catid);?> 正文</div>
</div>

<div class="inside clearfix">
	<div class="inside_left">
		<ul id="prnav" class="clearfix">
          <li><a href="javascript:void(0)"  class="current">项目介绍</a></li>
          <li><a href="javascript:void(0)">术前准备</a></li>
          <li><a href="javascript:void(0)">医美方法</a></li>
          <li><a href="javascript:void(0)">术后效果</a></li>
          <li><a href="javascript:void(0)">问题解答</a></li>
          <li><a href="<?php echo $CATEGORYS[$catid]['url'];?>">相关文章</a></li>
        </ul>
        <div id="container">
        	<div class="section scroll_top" id="section-1">
            	<p class="section_title">项目介绍</p>
                <div class="section_info clearfix">
                	<?php echo $xm_js;?>
                    <div class="section_A"><a href="/swt/">> 具体项目点击咨询...</a></div>
                </div>
            </div>
            <div class="section">
                <p class="section_title">适用人群</p>
                <div class="section_info clearfix">
                	<?php echo $xm_syrq;?>
                    <div class="section_A"><a href="/swt/">> 适用人群点击咨询...</a></div>
                </div>
            </div>
            <div class="section scroll_top" id="section-2">
            	<p class="section_title">术前准备</p>
                <div class="section_info clearfix">
                	<?php echo $xm_sqzb;?>
                    <div class="section_A"><a href="/swt/">> 术前准备点击咨询...</a></div>
                </div>
            </div>
            <div class="section scroll_top" id="section-3">
            	<p class="section_title">医美方式</p>
                <div class="section_info clearfix">
                	<?php echo $xm_ssfs;?>
                    <div class="section_A"><a href="/swt/">> 手术方式点击咨询...</a></div>
                </div>
            </div>
            <div class="section">
            	<p class="section_title">本院优势</p>
                <div class="section_info clearfix">
                	<?php echo $xm_byys;?>
                    <div class="section_A"><a href="/swt/">> 本院优势点击咨询...</a></div>
                </div>
            </div>
            <div class="section">
            	<p class="section_title">恢复时间</p>
                <div class="section_info clearfix">
                	<?php echo $xm_hfsj;?>
                    <div class="section_A"><a href="/swt/">> 恢复时间点击咨询...</a></div>
                </div>
            </div>
            <div class="section">
            	<p class="section_title">术后护理</p>
                <div class="section_info clearfix">
                	<?php echo $xm_shhl;?>
                    <div class="section_A"><a href="/swt/">> 术后护理点击咨询...</a></div>
                </div>
            </div>
            <div class="section scroll_top" id="section-4">
            	<p class="section_title">对比案例</p>
                <div class="section_info clearfix">
                	<div class="pranli">
                    	<div class="pranli_btn">
                        	<a class="prev">prev</a>
                            <a class="next">next</a>
                        </div>
                        <div class="pranli_BOX clearfix">
                        	<ul>
<?php if($xm_dbal) { ?>
<?php $sl_anli = explode('|',$xm_dbal);?>
<?php $n=1;if(is_array($sl_anli)) foreach($sl_anli AS $anli_id) { ?>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=5a40f73ed4dc88b699bc8811fb221d32&sql=select+id%2Cshuqian%2Cshuhou+from+sl_news_data+where+id%3D%24anli_id\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select id,shuqian,shuhou from sl_news_data where id=$anli_id LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            	<li>
                                	<div class="anliImg_left"><img src="<?php echo thumb($r[shuqian],128,155,1);?>"><div class="anliTAB_left">术前</div></div>
                        			<div class="anliImg_right"><img src="<?php echo thumb($r[shuhou],128,155,1);?>"><div class="anliTAB_right">术后</div></div>
                                </li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<?php $n++;}unset($n); ?>
<?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="section_A"><a href="/swt/">> 对比案例点击咨询...</a></div>
                </div>
            </div>
            <div class="section" >
            	<p class="section_title">医治专家</p>
                <div class="section_info clearfix">
                	<div class="mAuto clearfix">
<?php if($xm_yzzj) { ?>
<?php $sl_zhuanjia = explode('|',$xm_yzzj);?>
<?php $n=1;if(is_array($sl_zhuanjia)) foreach($sl_zhuanjia AS $zhuanjia_id) { ?>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=bf7aca8b58ca975e98ddade5a84b6f5e&sql=select+%2A+from+sl_news%2Csl_news_data+where+sl_news.id%3Dsl_news_data.id+AND+sl_news.id%3D%24zhuanjia_id\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from sl_news,sl_news_data where sl_news.id=sl_news_data.id AND sl_news.id=$zhuanjia_id LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    	<div class="przjBOX">
                        	<a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo thumb($r[thumb],132,158,1);?>">
                            <span class="font_14"><?php echo $r['title'];?></span><br /><span class="black"><?php echo $r['zj_zyzc'];?></span></a>
                        </div>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<?php $n++;}unset($n); ?>
<?php } ?>
                    </div>
                    <div class="section_A"><a href="/swt/">> 医治专家点击咨询...</a></div>
                </div>
            </div>
            <div class="section scroll_top" id="section-5">
            	<p class="section_title">常见问题</p>
                <div class="section_info clearfix">
                	<div class="prQA">
                    	<div class="prQ">：开内眼角手术安全吗?</div>
                        <div class="l_h20">
                        <span class="b font_14">&nbsp;A：</span>开眼角是一个简单的小手术，做开眼角手术是很安全的，但如果整形医院的专业设备相对较差，或是医生技术经验不够丰富，开眼角...<a href="/swt/" class="text_a">咨询详情</a>
                        </div>
                    </div>
                    <div class="prQA">
                    	<div class="prQ">：开内眼角手术安全吗?</div>
                        <div class="l_h20">
                        <span class="b font_14">&nbsp;A：</span>开眼角是一个简单的小手术，做开眼角手术是很安全的，但如果整形医院的专业设备相对较差，或是医生技术经验不够丰富，开眼角...<a href="#" class="text_a">咨询详情</a>
                        </div>
                    </div>
                    <div class="right m_t10"><div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_t163" data-cmd="t163" title="分享到网易微博"></a></div>
</div>
                </div>
            </div>
        </div>
       <div class="inside_contact"><div class="inside_contactBth01"><a href="/swt/">点击咨询</a></div><div class="inside_contactBth02"><a href="/swt/">专家预约</a></div></div>
    </div>
    
<?php include template("content","right_zs"); ?>

</div>

<?php include template("content","footer"); ?>
<script src="/Files/Scripts/sunlion.scrollTo.js"></script>
<script src="/Files/Scripts/sunlion.nav.js"></script>
<script src="/Files/Scripts/jquery.navScroll.js"></script>
<!--
<script language="javascript">
$("#prnav").smartFloat();//调取浮动
$(document).ready(function() {
  $('#prnav').onePageNav({
    begin: function() {
	  console.log('start');
    },
    end: function() {
	  console.log('stop');
    },
	scrollOffset: 30
  });
});
</script>
-->		  
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"1","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","t163"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","t163"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=86835285.js?cdnversion='+~(-new Date()/36e5)];
</script>
</body>
</html>