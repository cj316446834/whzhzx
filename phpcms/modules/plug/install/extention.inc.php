<?php
// +------------------------------------------------------------
// | 后台菜单文件--E族网络插件中心
// +----------------------------------------------------------------------
// | E族网络：启城 QQ:249650606 Tel:18665035290 www.ei77.com
// +----------------------------------------------------------------------
// | 欢迎进入CMS技术交流群：1700270
// +----------------------------------------------------------------------
// | 版本号：20130824
// +----------------------------------------------------------------------
defined('IN_PHPCMS') or exit('Access Denied');
defined('INSTALL') or exit('Access Denied');
$iphpcmsdb = $menu_db->get_one(array('name'=>'plug','parentid'=>'0'));//查找插件中心菜单是否已经存在
if($iphpcmsdb){
$parentid =$iphpcmsdb['id'];
}else{
$parentid = $menu_db->insert(array('name'=>'plug', 'parentid'=>0, 'm'=>'plug', 'c'=>'index', 'a'=>'init', 'data'=>'', 'listorder'=>0, 'display'=>'1'), true);
}


$eidb = $menu_db->get_one(array('name'=>'mycajian','parentid'=>$parentid));//查找插件中心菜单是否已经存在
if($eidb){
	$mid =$eidb['id'];
}else{
	$mid = $menu_db->insert(array(//设置子栏目菜单
	'name'=>'mycajian',
	'parentid'=>$parentid, 
	'm'=>'plug',
	'c'=>'index', 
	'a'=>'init', 
	'data'=>'', 
	'listorder'=>15, 
	'display'=>'1'
	), true);
}

$menu_db->insert(array(//设置文件菜单
'name'=>'myfile', //自定义文件编辑器
'parentid'=>$mid,
'm'=>'plug', 
'c'=>'file', 
'a'=>'init', 
'data'=>'', 
'listorder'=>0, 
'display'=>'1'
));
$menu_db->insert(array(
'name'=>'eicc', //全局变量插件
'parentid'=>$mid, 
'm'=>'plug', 
'c'=>'eicc', 
'a'=>'init', 
'data'=>'', 
'listorder'=>0, 
'display'=>'1'
));
$language = array('plug'=>'插件','mycajian'=>'插件中心','eicc'=>'自定义变量','myfile'=>'单页管理');
?>