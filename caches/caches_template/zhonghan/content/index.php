<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<?php echo show_ad(1, 1);?>
<div id="in_sub">
	<div style="width:1200px; margin:0 auto">
        <div class="in-sub">
            <ul>
                <li><a href="<?php echo $CATEGORYS['13']['url'];?>">精彩专题</a></li>
                <li><a href="<?php echo $CATEGORYS['14']['url'];?>" rel="nofollow">中翰案例</a></li>
                <li><a href="<?php echo $CATEGORYS['15']['url'];?>" rel="nofollow">尖端设备</a></li>
                <li><a href="<?php echo $CATEGORYS['16']['url'];?>" rel="nofollow">医院环境</a></li>
                <li><a href="<?php echo $CATEGORYS['41']['url'];?>" rel="nofollow"><?php echo $CATEGORYS['41']['catname'];?></a></li>
                <!--<li><a href="<?php echo $CATEGORYS['44']['url'];?>">问答中心</a></li>-->
				<li><a href="/swt/">问答</a></li>
                <li><a href="<?php echo $CATEGORYS['191']['url'];?>" rel="nofollow"><?php echo $CATEGORYS['191']['catname'];?></a></li>
            </ul>
        </div>
        <div class="in_search">
            <form action="/index.php" method="get" target="_blank">
            <input name="info[title]" type="text" class="in_input" value="请输入您要搜索的关键字" onfocus="if(this.value=='请输入您要搜索的关键字') {this.value='';}this.style.color='#666';" onblur="if(this.value=='') {this.value='请输入您要搜索的关键字';this.style.color='#ccc';}" style="color: rgb(204, 204, 204);"><input type="submit" class="in_searchBth" value="搜索" />
            <input type="hidden" name="info[catid]" value="0">
            <input type="hidden" name="info[typeid]" value="0">
            <input type="hidden" name="info[keywords]" value="">
            <input type="hidden" name="orderby" value="a.id DESC">
            <input type="hidden" name="m" value="content">
            <input type="hidden" name="c" value="search">
            <input type="hidden" name="a" value="init">
            <input type="hidden" name="catid" value="2">
            <input type="hidden" name="dosubmit" value="1">
            </form>
        </div>
    </div>
</div>

<div class="in_cont">
	<!--index_zt/s-->
	<div class="index_zt">
		<ul class="index_ztlist">
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=2095fff0621f7a93555c81d6af31551f&pos=wangpai\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'wangpai',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			<li class="zt_more">
				<a href="<?php echo $CATEGORYS['13']['url'];?>" target="_blank" rel="nofollow">
					<div class="ztlist_pic">
						<div class="ztlist_piclink">
							
						</div>
					</div>
					<p>更多项目</p>
				</a>
			</li>
		</ul>
	</div>
	<!--index_zt/e-->
	<div class="clear"></div>
	<!--indexbox1/s-->
	<div class="indexbox1">
		<div class="left indexbox1_1">
			<h3>活动专区<span>/Activity</span></h3>
			<!--<h3>专家来院<span>/ExpertsVisit</span></h3>-->
			<div class="activity act_border">
				<div class="index_hd">
					<div class="act_hdcon">
						<ul>
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2e74a57a19e753b674f897047827fdfd&action=position&posid=18&order=listorder+DESC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','order'=>'listorder DESC','limit'=>'5',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
							<li><a href="<?php echo $r['url'];?>" target="_blank"  title="<?php echo $r['title'];?>"><img src="<?php echo thumb($r[thumb],346,310,1);?>" width="346" height="310"/></a></li>
						<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

						</ul>
					</div>
					<div class="hdBth">
						<ul>
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2e74a57a19e753b674f897047827fdfd&action=position&posid=18&order=listorder+DESC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','order'=>'listorder DESC','limit'=>'5',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
							<li><?php echo $n;?></li>
						<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</ul>
					</div>
				</div>
				<div class="act_bot">
					<div class="timAtel left">
						<div class="time">
							<p>门诊时间(无假日医院)</p>
							<b>08：00-21：00</b>
						</div>
						<div class="link"></div>
						<div class="tel">
							<p>专家咨询热线</p>
							<b>027-87866888</b>
						</div>
					</div>
					<div class="Aorder">
						<a href="/swt/" target="_blank" class="zxzx">
							<i id="divRsjs3"></i>
							<p>在线咨询</p>
						</a>
						<a href="/swt/" target="_blank" class="mfyy">
							<p>免费预约</p>
						</a>
					</div>
				</div>
			</div>
			
		</div>
		
		<div class="left indexbox1_2">
			<h3>中翰新闻<span>/News</span></h3>
			<div class="News act_border">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=14a1d100fb871517df83c9509ab0ba2e&action=lists&catid=17&order=updatetime+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'17','order'=>'updatetime DESC','limit'=>'6',));}?>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<?php if($n==1) { ?>
				<div class="newtop">
					<div class="newpic">
						<img src="<?php echo thumb($r[thumb],167,125,1);?>" width="167" height="125" />
					</div>
					<div class="newcont">
						<h4><?php echo str_cut($r[title],72);?></h4>
						<p><?php echo str_cut($r[description],120);?></p>
						<a href="<?php echo $r['url'];?>" target="_blank">查看详情→</a>
					</div>
				</div>
				<ul class="newmidden">
				<?php } else { ?>
					<li><a href="<?php echo $r['url'];?>" target="_blank" title="<?php echo $r['title'];?>"<?php echo title_style($r[style]);?>>·<?php echo $r['title'];?></a><!--<span>[<?php echo date('Y-m-d',$r[inputtime]);?>]</span>--></li>
				<?php } ?>
				<?php $n++;}unset($n); ?>
				</ul>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				<div class="hotxm">
					<b>推荐项目</b>
					<div class="hotxm_con">
						<div class="hotxmBth">
							<a class="prev"></a>
							<a class="next"></a>
							<ul>
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=52a93e37a921bc70448addd0fd41e6e7&action=position&posid=19&order=listorder+DESC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'19','order'=>'listorder DESC','limit'=>'5',));}?>
							<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<li><?php echo $n;?></li>
							<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							</ul>
						</div>
						<div class="xmbox">
							<ul>
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=52a93e37a921bc70448addd0fd41e6e7&action=position&posid=19&order=listorder+DESC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'19','order'=>'listorder DESC','limit'=>'5',));}?>
							<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<li>
									<a href="<?php echo $r['url'];?>" target="_blank">
										<img src="<?php echo thumb($r[thumb],186,80,1);?>" width="186" height="80" />
										<p><?php echo $r['title'];?></p>
									</a>
								</li>
							<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="rigth indexbox1_3">
			<h3>权威专家<span>/Experts</span></h3>
			<div class="Experts act_border">
				<div class="zjbox">
					<div class="zjBth">
						<ul>
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a1d861c06902b696424c9588ee167205&action=position&posid=20&order=listorder+DESC&num=7\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'20','order'=>'listorder DESC','limit'=>'7',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
							<li><?php echo $n;?></li>
						<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</ul>
					</div>
					<div class="zj_con">
						<ul>
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a1d861c06902b696424c9588ee167205&action=position&posid=20&order=listorder+DESC&num=7\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'20','order'=>'listorder DESC','limit'=>'7',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
							<li><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo thumb($r[thumb],342,241,1);?>" width="342" height="241"/></a></li>
						<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</ul>
					</div>
				</div>
				<div class="zjlist">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3a37946a11018432c2f8a59685ac35ee&action=lists&catid=33&num=8&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'33','order'=>'listorder ASC','limit'=>'8',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li><a href="<?php echo $r['url'];?>" target="_blank"<?php echo title_style($r[style]);?>><img src="<?php echo thumb($r[thumb],74,77,1);?>" width="74" height="77"/> <p><?php echo $r['title'];?></p></a></li>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</div>
			</div>
		</div>
	</div>
	<!--indexbox1/e-->
	<div class="clear"></div>
			<!--indexbox2/s-->
		<div class="indexbox2 maTop50">
		  <div class="xnM4 clearFix">
		    <div class="Sub_Title">
		    	<h3>中翰明星美容 <span>/The star beauty base</span></h3>
		    	<div class="indexlink"></div>
			</div>
		    <div class="xnStar">
		      <div class="area m1"><a style="cursor:pointer; height: 340px;" class="wh1"><img src="/Files/Images/index_pic01.jpg"/><!--<span class="msg w1">香港著名影星温碧霞成为武汉中翰整形美容医院形象大使</span>
			  -->
			  </a></div>
		      <div class="area m2"> 
		      	<a style="cursor:pointer;" class="wh2"><img src="/Files/Images/index_pic02.jpg"/>
				<!--<span class="msg w1">中翰代言女神温碧霞</span>-->
				</a>
		      	<a style="cursor:pointer;" class="wh3"><img src="/Files/Images/index_pic03.jpg" title="男版白娘子·张磊粉丝见面会"/><span class="msg w1">男版白娘子·张磊粉丝见面会</span></a> 
		      	<a style="cursor:pointer;" class="wh4"><img src="/Files/Images/index_pic04.jpg" title="环球旅游小姐签约我院形象代言人"/><span class="msg w1">环球旅游小姐签约我院形象代言人</span></a> 
		      	<a style="cursor:pointer;" class="wh5"><img src="/Files/Images/index_pic05.jpg"  title="整形联盟责任宣言"/><span class="msg w1">整形联盟责任宣言</span></a> 
		      	<a style="cursor:pointer;" class="wh1"><img src="/Files/Images/index_pic06.jpg" title=""/>
				<span class="msg w1">歌坛巨星费翔（左二）莅临中翰，与我院董事会成员合影。</span>
				</a> 
		      </div>
		    </div>
		    <div class="center"></div>
		    <div class="xnStar">
		      <div class="area m2"> 
		      	<a style="cursor:pointer;" class="wh2"><img src="/Files/Images/index_pic07.jpg" title="中翰·湖北卫视真人秀花落谁家"/><span class="msg w1">中翰·湖北卫视真人秀花落谁家</span></a> 
		      	<a style="cursor:pointer;" class="wh3"><img src="/Files/Images/index_pic08.jpg" title="我院领导与万梓良合影"/><span class="msg w1">我院领导与万梓良合影</span></a> 
		      	<a style="cursor:pointer;" class="wh1"><img src="/Files/Images/index_pic09.jpg" title="环球旅游小姐前十强与我院领导合影"/><span class="msg w1">环球旅游小姐前十强与我院领导合影</span></a> 
		      	<a style="cursor:pointer;" class="wh4"><img src="/Files/Images/index_pic10.jpg" title="环球旅游小姐冠军我院求美"/><span class="msg w1">环球旅游小姐冠军我院求美</span></a> 
		      	<a style="cursor:pointer;" class="wh5"><img src="/Files/Images/index_pic11.jpg" title="中翰美丽新娘大型公益活动"/><span class="msg w1">中翰美丽新娘大型公益活动</span></a> 
		      </div>
		      <div class="area m1">
		      	<a style="cursor:pointer;" class="wh1"><img src="/Files/Images/index_pic12.jpg"/>
				<span class="msg w1">温碧霞与我院领导合影</span>
				</a> 
		      	<a style="cursor:pointer; height: 226px;" class="wh1"><img src="/Files/Images/index_pic13.jpg"/>
				<span class="msg w1">影视巨星范冰冰(右三)莅临我院</span>
				</a>
		      </div>
		    </div>
		  </div>
		</div>
		<!--indexbox2/e-->
		<div class="clear"></div>
		<!--indexbox3/s-->
		 <div class="indexbox3 clearFix maTop50">
				<div class="Sub_Title">
					<h3>武汉中翰10年 <span>/倾心塑美  美传天下</span></h3>
					<div class="indexlink"></div>
				</div>
				<div class="m6Left">
				  <ul>
					<li>
					  <div class="Text">
						<div class="bt">中翰荣誉</div>
						<div class="Nr">10年中翰，荣获超过50项卓越荣誉及成就。囊括社会认可、技术突破、世界顶级伙伴赞誉。社会、同行及顾客最珍贵的信赖是我们最大的前进动力。</div>
						<Div class="RTa">
							<a href="/swt/" target="_blank" class="RTa1"></a>
							<a href="/swt/" target="_blank" class="RTa2"></a>
						</Div>
					  </div>
					  <div class="Pic"><img src="/Files/Images/tenyear1.jpg" /></div>
					</li>
					<li>
					  <div class="Text">
						<div class="bt">安全体系</div>
						<div class="Nr">严谨的术前检查验证、国际化标准手术室,严密的档案保密制度、技艺精湛的专家团队,国际先进的设备，一切都为您的美丽蜕变提供强有力的安全保障。</div>
						<Div class="RTa">
							<a href="/swt/" target="_blank" class="RTa1"></a>
							<a href="/swt/" target="_blank" class="RTa2"></a>
						</Div>
					  </div>
					  <div class="Pic"><img src="/Files/Images/tenyear2.jpg" /></div>
					</li>
					<li>
					  <div class="Text">
						<div class="bt">正品联盟</div>
						<div class="Nr">郑重承诺：武汉中翰所使用的整形美容产品均通过美国FDA、欧盟CE及中国SFDA等国际国内权威机构的认证,以细致、谨慎、精益求精的专业精神，将求美者权益保护进行到底</div>
						<Div class="RTa">
							<a href="/swt/" target="_blank" class="RTa1"></a>
							<a href="/swt/" target="_blank" class="RTa2"></a>
						</Div>
					  </div>
					  <div class="Pic"><img src="/Files/Images/tenyear3.jpg" /></div>
					</li>
					<li>
					  <div class="Text">
						<div class="bt">星级环境</div>
						<div class="Nr">医院按照星级宾馆式装修，形成豪华与简约、庄重与和谐完美结合的艺术风格，给顾客营造了一个安全、舒适、洁净的医疗环境和氛围。在原有基础上增设SPA美容会所,用全新健康理念带给您身心愉悦的理疗体验</div>
						<Div class="RTa">
							<a href="/swt/" target="_blank" class="RTa1"></a>
							<a href="/swt/" target="_blank" class="RTa2"></a>
						</Div>
					  </div>
					  <div class="Pic"><img src="/Files/Images/tenyear4.jpg" /></div>
					</li>
					<li>
					  <div class="Text">
						<div class="bt">五心服务</div>
						<div class="Nr">一直秉承 “做一例手术、留一个精品、交一个朋友”的信念为求美者提供高质量的服务流程,以最温馨体贴的服务让求美者感受到家的温暖。</div>
						<Div class="RTa">
							<a href="/swt/" target="_blank" class="RTa1"></a>
							<a href="/swt/" target="_blank" class="RTa2"></a>
						</Div>
					  </div>
					  <div class="Pic"><img src="/Files/Images/tenyear5.jpg" /></div>
					</li>
				  </ul>
				</div>
				<div class="m6Right"> 
					<a><b>中翰荣誉/</b>见证品牌辉煌</a>
					<a><b>安全体系/</b>美丽蜕变有保障</a> 
					<a><b>正品联盟/</b>100%正品100%信赖</a>
					<a><b>星级环境/</b>让顾客体验愉悦</a>
					<a><b>五心服务/</b>一切以客户为主</a>
				</div>
			  </div>
		<!--indexbox3/e-->
</div>
<div class="indexHj">
	<div class="Hjmain">
		<div class="hjTab">
			<h3>医院环境</h3>
			<h3>合作伙伴</h3>
		</div>
		<div class="hjTabCon">
			<ul class="hjSidle">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3cbcb3a718c1cc7fcae02199570306d1&action=lists&catid=16&order=listorder+DESC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'16','order'=>'listorder DESC','limit'=>'5',));}?>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<li><img src="<?php echo thumb($r[thumb],224,143,1);?>"/></li>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</ul>
			<ul class="hbSidle">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=94614c0bce4c1e53bdf6d69f0b916258&action=type_list&typeid=53&siteid=%24siteid&linktype=1&order=listorder+ASC&return=link_logo\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$link_logo = $link_tag->type_list(array('typeid'=>'53','siteid'=>$siteid,'linktype'=>'1','order'=>'listorder ASC','limit'=>'20',));}?>
			<?php $n=1;if(is_array($link_logo)) foreach($link_logo AS $v) { ?>
				<li>
					<a target="_blank" style="cursor:pointer;">
						<img src="<?php echo $v['logo'];?>" />
						<?php echo $v['name'];?>
					</a>
				</li>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</ul>
		</div>
	</div>
</div>
<div class="clear"></div>

<?php include template("content","footer"); ?>
	<script type="text/javascript">
		/*活动专区*/
		jQuery(".index_hd").slide({ mainCell:".act_hdcon ul",effect:"leftLoop",vis:1,scroll:1,titCell:".hdBth li",autoPlay:true,interTime:5000});
		
		/*随机数*/
		function GetRandomNum(Min,Max){   
		var Range = Max - Min;   
		var Rand = Math.random();   
		return(Min + Math.round(Rand * Range));   
		}   
		var num = GetRandomNum(40,70);
		$(document).ready(function() { 	
		document.getElementById("divRsjs3").innerHTML=num;
		//document.getElementById("divRsjs2").innerHTML=num;
		});

		/*推荐项目*/
		jQuery(".hotxm_con").slide({titCell:".hotxmBth ul",mainCell:".xmbox ul",autoPage:true,effect:"leftLoop",autoPlay:true,vis:2,interTime:5000});
		
		/*特邀专家*/
		jQuery(".zjbox").slide({ mainCell:".zj_con ul",effect:"leftLoop",vis:1,scroll:1,titCell:".zjBth li",autoPlay:true,interTime:5000});
		
		/*中翰十年*/
		jQuery(".indexbox3").slide({titCell:".m6Right a",mainCell:".m6Left ul"});
		
		/*环境/伙伴*/
		jQuery(".Hjmain").slide({titCell:".hjTab h3",mainCell:".hjTabCon "});
		
	</script>
	
	</body>
</html>