<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>404 error page</title>
<style>
*{ padding:0; margin:0;}
body { background-color:#f8eee1; font-size:12px; color:#666; line-height:20px;}
a { text-decoration:none; color:#666;}
ul,li { list-style:none;}
.fl { float:left;}
.fr { float:right;}
.cl:after {display:block;clear:both;height:0;overflow:hidden;visibility:hidden;content:".";}
.cl {clear:both;*zoom:1;}


#main { width:900px; height:360px; padding:20px; margin:100px auto 0; background-color:#fff; border:1px solid #ccc; border-radius:10px;}
#main div.fl { width:462px; height:320px; padding:40px 0 0 10px; border-right:1px solid #c4c9ce;}
.search { padding:50px 0 0 30px;}
.search input { border-radius:5px;}
.search input.inp_srh { width:248px; height:26px; padding:0 6px; color:#666;}
.search input.btn_soso { width:100px; height:28px; background-color:#ec8427; border:none; border-radius:5px; font-size:14px; color:#fff; text-shadow:1px 1px 2px #666; cursor:pointer; box-shadow:1px 1px 3px #ccc;}

#main div.fr { width:410px; padding:10px 0 0; /*height:100px; background-color:#CCC;*/}
#main div.fr h3 { font:16px "微软雅黑"; color:#333; line-height:40px;}
#main div.fr p { text-indent:2em; margin-bottom:10px;}
.nav li { width:196px; border-bottom:1px solid #ccc;}
.nav li a { padding-left:12px; background:url(/__ErrorFiles__/jt_404.gif) no-repeat 0 center; line-height:30px;}
.nav li a:hover { color:#ec8427;}

.logo { display:block; width:160px;}
.logo img { display:block; width:100%;}

.main{text-align:center; margin:75px 0 0 0; font:normal normal 14px/1.8em normal;}
.error_img{margin:0 0 20px 0;}
</style>
</head>
<body>
<!--<span class="logo"><img src="/images/logo_404.jpg" /></span>-->
<div id="main" class="cl">
	<div class="fl">
    	<img src="/__ErrorFiles__/404_Tu.jpg" />
        <div class="search">
            <form action="/index.php" method="get" target="_blank">
            <input type="hidden" name="m" value="search"/>
            <input type="hidden" name="c" value="index"/>
            <input type="hidden" name="a" value="init"/>
            <input type="hidden" name="typeid" value="1"/>
            <input type="hidden" name="siteid" value="1"/>
            <input class="inp_srh" type="text" name="q" value="请输入您寻找的项目" onfocus="if(this.value == '请输入您寻找的项目') this.value = '';" onblur="if(this.value == '') this.value = '请输入您寻找的项目';" />
            <input type="submit" class="btn_soso" value="搜 索" />
            </form>
        </div>
    </div>
	<div class="fr">
    	<h3>艺星医疗美容集团</h3>
        <p>Yestar艺星整形隶属于上海艺星医疗美容医院有限公司，源自韩国的国际医学美容连锁品牌，自1992年成立至今，已经发展成为亚洲最大的医学美容集团，旗下拥有数十家医学美容连锁分支机构，遍布韩国、中国、日本、香港、台湾及东南亚地区。</p>
        <h3>艺星快速导航</h3>
        <div class="nav cl">
            <ul class="fl">
                <li><a href="/">艺星首页</a></li>
                <li><a href="/Yestar/list-147-1.shtml">品牌简介</a></li>
                <li><a href="/Yestar/list-146-1.shtml">品牌故事</a></li>
                <li><a href="/Yestar/list-152-1.shtml">创始人记</a></li>
                <li><a href="/Yestar/list-153-1.shtml">院长寄语</a></li>
            </ul>
            <ul class="fr">
            	<li><a href="/Yestar/list-6-1.shtml">整形美容中心</a></li>
                <li><a href="/Yestar/list-8-1.shtml">微整形美容中心</a></li>
                <li><a href="/Yestar/list-7-1.shtml">皮肤美容中心</a></li>
                <li><a href="/Yestar/list-198-1.shtml">口腔美容中心</a></li>
                <li><a href="/Yestar/list-9-1.shtml">抗衰老美容中心</a></li>
            </ul>
        </div>
    </div>
</div>



<!--<div class="main">
	<div class="error_img"><img src="/__ErrorFiles__/error_404.jpg" /></div>
	出错啦！请尝试访问<a href="/">首页</a>
</div>-->

</body>
</html>
