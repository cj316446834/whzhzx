<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div id="footer">
	<div class="footerNAV clearfix">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=70f0453b28d3b62324557276e5c8c8f2&action=category&catid=0&num=5&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'5',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
		<div class="footerNAV_BOX"<?php if($r[catid]==5) { ?> style="border:none;"<?php } ?>>
        	<p class="footerNAV_BOX_title"><a href="<?php echo $r['url'];?>" target="_blank" class="white"><?php echo $r['catname'];?></a></p>
            <ul class="footerSUB">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4c5f019bd21c25b6be4de73305aa0043&action=category&catid=%24r%5Bcatid%5D&num=10&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'10',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $s) { ?>
            	<li><a href="<?php echo $s['url'];?>"><?php echo $s['catname'];?></a></li>
<?php if($n==5) { ?>
            </ul>
            <ul class="footerSUB">
<?php } ?>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
    <div class="footer">
		<div class="main clearfix">
        	<div class="left" style="margin-top:30px;"><img src="/Files/Images/footer_logo.gif" alt="武汉中翰整形美容医院" /></div>
            <div class="footerInfo">
            	<p class="white l_h20">美丽热线：<?php echo my_c('tel');?></p>
                <p class="l_h20"><?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=0f2545b3d0a448e13a98738a465512ab&pos=copyright\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'copyright',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?></p>
            </div>
            <div class="weixin">微信</div>
        </div>
	</div>       
</div>


<div class="fd_nav">
	<div class="fd_list">
    	<ul>
        	<li><a href="#"><span class="move_l pr">中翰经典项目</span></a></li>
            <li><a href="#"><span class="move_l route">来院线路</span></a>
            	<div class="luxian">
                    <ul id="luxian" class="luxian_li">
                        <li>公交</li>
                        <li>地铁</li>
                        <li>飞机</li>
                        <li>高铁</li>
                        <li>火车站</li>
                        <li>自驾游</li>
                    </ul>
                    <div class="luxian_info" id="luxian_info">
                        <div class="luxian_box">
                            <p class="b white">公交车</p>
                            <p class="m_t10">15路、25路、59路、66路、401路、413路、503路、510路、518路、519路、521路、538路、540路、543路、564路、576路、581路、583路、586路、590路、593路、596路、601路、608路、618路、702路、703路、709路、710路、715路、723路、728路、804路、806路、811路、901路
                            </p>
                        </div>
                        <div class="luxian_box">
                            <p class="b white">地铁路线</p>
                            <p class="l_h25 m_t10">① 乘坐地铁【地铁2号线】至『宝通寺站』D出口步行300米即到<br />
                                ② 乘坐地铁【地铁4号线】至『中南路站』D2出口，步行至中南路口左方向步行300米即到
                            </p>
                        </div>
                        <div class="luxian_box">
                            <p class="b white">飞机场路线</p>
                            <p class="l_h25 m_t10">天河机场 乘出租车至汉口火车站 转【地铁2号线】光谷方向 『宝通寺站』D出口，步行300米即到</p>
                        </div>
                        <div class="luxian_box">
                            <p class="b white">高铁路线</p>
                            <p class="l_h25 m_t10">乘坐地铁【地铁4号线】至『中南路站』D2出口，步行至中南路口左方向步行300米即到</p>
                        </div>
                        <div class="luxian_box">
                            <p class="b white">火车站路线</p>
                            <p class="l_h25 m_t10"><b>武昌站：</b>乘坐地铁【地铁4号线】至『中南路站』D2出口，步行至中南路口左方向步行300米即到<br />
                                <b>汉口站：</b>乘坐地铁【地铁2号线】至『宝通寺站』D出口步行300米即到
                            </p>
                        </div>
                        <div class="luxian_box">
                            <p class="b white">自驾游</p>
                            <p class="l_h25 m_t10">①：三环线文化大道/珞狮南路 出口，上野芷湖大桥行驶至街道口路口左转进入武珞路行驶1700米即到<br />
                                ②：武汉市任一地方，开车前往武昌武珞路，洪山公园即到，有50个停车位
                            </p>
                        </div>
                    </div>
                    <p class="white m_l15">医院地址:武汉市武昌区武珞路519号（省农业厅新大厦旁）</p>
                </div>
            </li>
            <li class="phone">美丽热线</li>
            <li><a href="<?php echo my_c('qq');?>" target="_blank"><span class="move_l QQ" rel="nofollow">QQ在线咨询</span></a></li>
			<li>
				<script>
				document.write('<script type="text/javascript"  data-lxb-uid="5830890" data-lxb-gid="44848" src="http://lxbjs.baidu.com/api/asset/api.js?t=' + new Date().getTime() + '" charset="utf-8"></scr' + 'ipt>' );
				</script>
				<div id="tels" style="border: 0px; margin-top:8px;">
					<input type="text"   class="input_text" name="tel" id="telInput" size="12" onfocus="if(this.value==this.defaultValue){this.value='';};" onblur="if(this.value==''){this.value=this.defaultValue;}" type="text" value="请输入您的电话" style=" height:18px; color:#A08336;"/>
					<input type="image" src="/Files/Images/huid.jpg" id="callBtn"  class="input_image" style="margin-bottom:-1px;"/>
				</div>
				<script>
				document.getElementById("callBtn").onclick = function () { 
				lxb.call(document.getElementById("telInput"));
				};
				</script>	
			<li>
        </ul>
    </div>
</div>

</script>


<!--<script type="text/javascript" src="/Files/Scripts/jquery-1.7.2.min.js"></script>-->

<script type="text/javascript" src="/swt/swt.js"></script>
<script type="text/javascript" src="/Files/Scripts/sunlion.SuperSlide.js"></script>
<script type="text/javascript" src="/Files/Scripts/Tab.js"></script>
<script type="text/javascript" src="/Files/Scripts/main.js"></script>
<script type="text/javascript" src="/Files/Scripts/sunlion.foucs.js"></script>
<script type="text/javascript" src="/Files/Scripts/jquery.touchSlider.js"></script>
<script type="text/javascript" src="/swt/qq.js"></script>

<!--企业QQ-->
<!--<iframe src="tencent://message/?Menu=yes&uin=800049518&Service=58&SigT=A7F6FEA02730C988595F83D024E1CF39D6EDB6C58377D961E140134A76B98E9997D284CDBF62D7A9F0678838B3BC04BBAD739BA5339B3F09B0CD74623FB0FA25FEC3BA8DD4C6C0F18FC117F48446F3083DCE28B2A66DF744AF9AB6B6E51C2A6225D47D611251FE4041C3D352326A0DA7534D5E34955DED0D&SigU=30E5D5233A443AB25C9A8672C5252EF1B06FB7B6B1F5724D9788DBEA04A4955D12E15A77495A6CD458F288B9B28DD544C93A27D09DA6AAAEADF5771DFF03DFA7DA12CF31B80CB28C" style="display: none;"></iframe>-->