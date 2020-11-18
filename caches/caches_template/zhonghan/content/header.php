<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<meta name="robots" content ="all">
<meta name="author" content="whzhzxmr" />
<meta http-equiv="X-UA-Compatible" content="IE=7,IE=9">
<!--[if (gte IE 6)&(lte IE 8)]>
<script>!window.jQuery && document.write('<script src="/Files/scripts/html5.js"><\/script>');</script>
<![endif]-->
<link href="/Files/Style/global.css" type="text/css" rel="stylesheet">
<link href="/Files/Style/Layout.css" type="text/css" rel="stylesheet">
<link href="/Files/Style/fancybox.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/Files/Style/newindex.css" />
<link rel="stylesheet" href="/index_banner/bannerCSS.css">
<!--[if IE 6]>
<script src="/Files/scripts/minmax.js"></script>
<script src="/Files/scripts/DD_belatedPNG_0.0.8a-min.js"></script>

<script>
DD_belatedPNG.fix('.png,.png img,img,background');
</script>
<![endif]-->
<script type="text/javascript" src="/Files/Scripts/jquery-1.8.1.js"></script>
</head>
<body>
<div id="top">
	<div style="width:1200px; margin:0 auto;">
    	<div class="left">
        	 <div class="top_acTitle">最新消息</div>
             <div class="top_infolist">
             	<ul>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=660904a0e7a317547db5a57926f822e7&action=position&posid=1&order=listorder+ASC&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder ASC','limit'=>'3',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                	<li><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
             </div>
        </div>
        <div class="top_right">
        	<ul>
        		<li><a href="<?php echo my_c('weibo');?>" target="_blank" rel="nofollow">官方微博</a></li><li class="top_phone"><?php echo my_c('tel');?></li>
            </ul>
        </div>
    </div>
</div>
<div id="head">
	<div  style="width:1200px; margin:0 auto;">
    	<div class="logo"><a href="<?php echo siteurl($siteid);?>" title="武汉中翰整形美容医院" >武汉中翰整形美容医院</a></div>
        <nav>
        	<ul class="navlist" id="nav">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=70f0453b28d3b62324557276e5c8c8f2&action=category&catid=0&num=5&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'5',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        	    <li>
                	<a href="<?php echo $r['url'];?>">
                		<div class="txt_center left"><p class="nav_cn"><?php echo $r['catname'];?></p><p class="nav_ko"><?php echo $r['description'];?></p></div><div class="nav_box"></div>
                    </a>
                </li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				<div class="safety">
					<a href="/zt/AnesthesiaSafetySystem/">
						<p class="nav_cn">安全与术后管理</p>
						<p class="nav_ko">안전은수술후관리다</p>
					</a>
				</div>
            </ul>
            <div id="menu">
            	<div class="menu_main" id="menu_left">
                	<div class="menu_box">
                        <div class="menu_info"><!------------品牌中心---------->
                        	<div class="menu_list" style="margin-left:150px; margin-right:50px;">
                            	<p><a href="<?php echo $CATEGORYS['12']['url'];?>">品牌</a></p>
                                <ul>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a62cb8c87bbd7f92d1a8632796e2c12e&action=category&catid=1&num=7&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'1','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'7',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                    <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                </ul>
                            </div>
                            
                            <div class="menu_jj">
                                <div class="menu_jjBox">
                                	<div class="menu_jj_img"><img src="/Files/Images/tmp/pic31.jpg" alt="中翰整形"/></div>
                                    <div class="menu_jj_info">
                                    武汉中翰整形美容医院座落在武汉市武昌美丽的洪山公园旁，是湖北省卫生厅批准成立的现代化专业整形美容医院。集临床、科研、国际学术交流为一体，是全国整形美容医院品牌联盟常务理事单位 、武汉市医院协会理事单位、全国美国赛...<a href="<?php echo $CATEGORYS['12']['url'];?>" target="_blank" class="text_a">[查看全文]</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="menu_zt">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=789d0aa0ebf065689634d281793a61d4&action=position&posid=5&order=listorder+ASC&num=2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'5','order'=>'listorder ASC','limit'=>'2',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            	<div class="menu_ztBox">
                                	<div class="menu_ztBox_img"><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo thumb($r[thumb],186,80,1);?>" width="186" height="80" alt="<?php echo $r['title'];?>" /></a></div>
                                    <div class="menu_ztBox_info">
                                    <p><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a></p>
                                    <p class="m_t5"><?php echo str_cut($r[description],160);?></p>
                                    </div>
                                </div>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            </div>
                        </div>
                        <div class="menu_info"><!------------整形美容中心---------->
<?php $n=1;if(is_array(subcat(2))) foreach(subcat(2) AS $v) { ?>
                        	<div class="menu_list">
                            	<p><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></p>
                                <ul>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=92d4dfa82678d085c3530b283b0a4053&action=category&siteid=1&catid=%24v%5Bcatid%5D&num=8\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('siteid'=>'1','catid'=>$v[catid],'limit'=>'8',));}?>
<?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
<?php $sunlion = "`catid`='$r[catid]' AND `xm`='1'"?>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e9264b3dc0a6294b1fe077ada544b9c0&action=lists&catid=%24r%5Bcatid%5D&moreinfo=1&where=%24sunlion&order=id+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$r[catid],'moreinfo'=>'1','where'=>$sunlion,'order'=>'id DESC','limit'=>'1',));}?>
<?php if($data) { ?>
<?php $n=1;if(is_array($data)) foreach($data AS $t) { ?>
                                    <li><a href="<?php echo $t['url'];?>"><?php echo $r['catname'];?></a></li>
<?php $n++;}unset($n); ?>
<?php } else { ?>
                                    <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
<?php } ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                </ul>
                            </div>
<?php $n++;}unset($n); ?>
                            <div class="menu_zt">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2d03582266bc990287d2722d6bf7bc9a&action=position&posid=6&order=listorder+ASC&num=2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'6','order'=>'listorder ASC','limit'=>'2',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            	<div class="menu_ztBox">
                                	<div class="menu_ztBox_img"><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo thumb($r[thumb],186,80,1);?>" width="186" height="80" alt="<?php echo $r['title'];?>" /></a></div>
                                    <div class="menu_ztBox_info">
                                    <p><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a></p>
                                    <p class="m_t5"><?php echo str_cut($r[description],160);?></p>
                                    </div>
                                </div>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            </div>
                        </div>
                        <div class="menu_info"><!------------皮肤美容中心---------->

<?php $n=1;if(is_array(subcat(3))) foreach(subcat(3) AS $v) { ?>
                        	<div class="menu_list m_r45">
                            	<p><a href="<?php echo $v['url'];?>"><?php echo $v['cid'];?><?php echo $v['catname'];?></a></p>
                                <ul>
<?php $n=1;if(is_array(subcat($v[catid]))) foreach(subcat($v[catid]) AS $r) { ?>
<?php $sunlion = "`catid`='$r[catid]' AND `xm`='1'"?>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e9264b3dc0a6294b1fe077ada544b9c0&action=lists&catid=%24r%5Bcatid%5D&moreinfo=1&where=%24sunlion&order=id+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$r[catid],'moreinfo'=>'1','where'=>$sunlion,'order'=>'id DESC','limit'=>'1',));}?>
<?php if($data) { ?>
<?php $n=1;if(is_array($data)) foreach($data AS $t) { ?>
                                    <li><a href="<?php echo $t['url'];?>"><?php echo $r['catname'];?></a></li>
<?php $n++;}unset($n); ?>
<?php } else { ?>
                                    <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
<?php } ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<?php $n++;}unset($n); ?>
                                </ul>
                            </div>
<?php $n++;}unset($n); ?>
                            <div class="menu_zt">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1c4becb6bc7fd856a91fd7b5f0c6b7db&action=position&posid=7&order=listorder+ASC&num=2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'7','order'=>'listorder ASC','limit'=>'2',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            	<div class="menu_ztBox">
                                	<div class="menu_ztBox_img"><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo thumb($r[thumb],186,80,1);?>" width="186" height="80" alt="<?php echo $r['title'];?>" /></a></div>
                                    <div class="menu_ztBox_info">
                                    <p><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a></p>
                                    <p class="m_t5"><?php echo str_cut($r[description],160);?></p>
                                    </div>
                                </div>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            </div>
   
                        </div>
                        <div class="menu_info"><!------------注射美容中心---------->
                            <div class="mAuto">
							<div class="menuIMGBox">
                           <a href="/zsmrzx/"><img src="/Files/Images/tmp/pic36.jpg" alt="微整形"/></a>
                            </div>
							
<?php $n=1;if(is_array(subcat(4))) foreach(subcat(4) AS $v) { ?>
                        	<div class="menu_list m_r20">
                            	<p><a href="<?php echo $v['url'];?>"><?php echo $v['cid'];?><?php echo $v['catname'];?></a></p>
                                <ul>
<?php $n=1;if(is_array(subcat($v[catid]))) foreach(subcat($v[catid]) AS $r) { ?>
<?php $sunlion = "`catid`='$r[catid]' AND `xm`='1'"?>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e9264b3dc0a6294b1fe077ada544b9c0&action=lists&catid=%24r%5Bcatid%5D&moreinfo=1&where=%24sunlion&order=id+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$r[catid],'moreinfo'=>'1','where'=>$sunlion,'order'=>'id DESC','limit'=>'1',));}?>
<?php if($data) { ?>
<?php $n=1;if(is_array($data)) foreach($data AS $t) { ?>
                                    <li><a href="<?php echo $t['url'];?>"><?php echo $r['catname'];?></a></li>
<?php $n++;}unset($n); ?>
<?php } else { ?>
                                    <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
<?php } ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<?php $n++;}unset($n); ?>
                                </ul>
                            </div>
<?php $n++;}unset($n); ?>
                            </div>
                            <div class="menu_zt">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3a08c91faf3c5d71df6d56b0f4922a07&action=position&posid=8&order=listorder+ASC&num=2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'8','order'=>'listorder ASC','limit'=>'2',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            	<div class="menu_ztBox">
                                	<div class="menu_ztBox_img"><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo thumb($r[thumb],186,80,1);?>" width="186" height="80" alt="<?php echo $r['title'];?>" /></a></div>
                                    <div class="menu_ztBox_info">
                                    <p><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a></p>
                                    <p class="m_t5"><?php echo str_cut($r[description],160);?></p>
                                    </div>
                                </div>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            </div>
                        </div>
                        <div class="menu_info"><!------------口腔美容中心---------->
                            <div class="mAuto">
							<div class="menuIMGBox">
                           <a href="/html/kou-qiang/"><img src="/Files/Images/tmp/pic37.jpg" alt="牙齿"/></a>
                            </div>
<?php $n=1;if(is_array(subcat(5))) foreach(subcat(5) AS $v) { ?>
                        	<div class="menu_list m_r20">
                            	<p><a href="<?php echo $v['url'];?>"><?php echo $v['cid'];?><?php echo $v['catname'];?></a></p>
                                <ul>
<?php $n=1;if(is_array(subcat($v[catid]))) foreach(subcat($v[catid]) AS $r) { ?>
<?php $sunlion = "`catid`='$r[catid]' AND `xm`='1'"?>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e9264b3dc0a6294b1fe077ada544b9c0&action=lists&catid=%24r%5Bcatid%5D&moreinfo=1&where=%24sunlion&order=id+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$r[catid],'moreinfo'=>'1','where'=>$sunlion,'order'=>'id DESC','limit'=>'1',));}?>
<?php if($data) { ?>
<?php $n=1;if(is_array($data)) foreach($data AS $t) { ?>
                                    <li><a href="<?php echo $t['url'];?>"><?php echo $r['catname'];?></a></li>
<?php $n++;}unset($n); ?>
<?php } else { ?>
                                    <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
<?php } ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<?php $n++;}unset($n); ?>
                                </ul>
                            </div>
<?php $n++;}unset($n); ?>
                            </div>
                            <div class="menu_zt">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=40321ff017d190cff2059e56948cedd7&action=position&posid=9&order=listorder+ASC&num=2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'9','order'=>'listorder ASC','limit'=>'2',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            	<div class="menu_ztBox">
                                	<div class="menu_ztBox_img"><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo thumb($r[thumb],186,80,1);?>" width="186" height="80" alt="<?php echo $r['title'];?>" /></a></div>
                                    <div class="menu_ztBox_info">
                                    <p><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a></p>
                                    <p class="m_t5"><?php echo str_cut($r[description],160);?></p>
                                    </div>
                                </div>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </nav>
        
    </div>
</div>