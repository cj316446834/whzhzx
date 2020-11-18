<?php
// +------------------------------------------------------------
// | E族网络插件中心--自定义文件管理
// +----------------------------------------------------------------------
// | E族网络：启城 QQ:249650606 Tel:18665035290 www.ei77.com
// +----------------------------------------------------------------------
// | 欢迎进入CMS技术交流群：1700270
// +----------------------------------------------------------------------
// | 版本号：20130824
// +----------------------------------------------------------------------
defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_app_class('admin','admin',0);
class file extends admin {
	function __construct() {
		parent::__construct();
	$this->siteid = $this->get_siteid();
	$this->db=ei_cal_db('ei_file');
	$this->tpl_edit=pc_base::load_config('system','tpl_edit');
	}
	function init() {
	$data=$this->db->select();
	$tpl_edit=$this->tpl_edit;
	$big_menu=array("?m=plug&c=file&a=init","文件列表");
	$big_menu2=array("?m=plug&c=file&a=edit&add=1","增加");
	include $this->admin_tpl('file_lish');//加载模板
	}
	function edit(){//文件修改加载
	$tpl_edit=$this->tpl_edit;
	if(!$tpl_edit)showmessage('需要开启在线编辑模板功能!',HTTP_REFERER);
		if($_GET['add'])$add=1;
		if(!$add){
			$data=$this->db->get_one(array('id'=>$_GET['id']));
			extract($data);	
		//	$filename=$filename;//设置一个文件名
			$file=$this->cal_dir().$dir.$filename;
			$content=$this->cal_file($file);
			if(is_dir($dir))$is_write=1;
		}else{		
			$is_write=1;
			$big_menu=array("?m=plug&c=file&a=init","文件列表");
		}
		include $this->admin_tpl('file_edit');//加载模板
	}

	function edit_file() {//写出一个文件//文件路径,文件名,内容
		if ($_POST['dosubmit']) {
			if($_POST['info']['add']){//是否新增
			$add=1;
			}else{$id=safe_replace($_POST['info']['id']);}
			$info['description']=safe_replace($_POST['info']['description'])   ;
			$info['dir']=safe_replace($_POST['info']['dir'])   ;
			$info['filename']=safe_replace($_POST['info']['filename']);
			$info['istemplates']=$_POST['info']['istemplates']?1:0;
			if($info['istemplates']){
				$info['templates']=safe_replace($_POST['info']['templates']);
			}
			$info['username']= param::get_cookie('admin_username');
			$info['updatetime']=TIME() ;		
			if(!$add){//修改,写出文件
				$this->db->update($info,array('id'=>$id));//修改数据库
				//$configfile=safe_replace($_POST['code']);//文件内容安全过滤
				$configfile = str_replace('\\','',$_POST['code']);//过滤转义符 /文件内容未过滤
				$dir=$this->cal_dir().$info['dir'];
				$file=$dir.$info['filename'];
				if(!is_dir($dir)) {mkdir($dir, 0777,1);}
				$mm=file_put_contents($file, $configfile);
				@chmod($file,0777);
				if($mm){		
				showmessage('修改完成!', '', '', 'edit');
				}else{showmessage('写出文件出错!',HTTP_REFERER);}			
			}else{//增加
			$this->db->insert($info);//新增加数据库
			showmessage('新增加完毕,你现在可以修改这个文件了!',"?m=plug&c=file&a=init");
			}
		}
	}
	function add_file_te() {//读取一个模板文件生成到指定位置
		if(!isset($_GET['id']) or !$_GET['id']) showmessage('错误!',HTTP_REFERER);	
		$id=safe_replace($_GET['id']) ;
		//是否定义变量
		$db=$this->db->get_one(array("id"=>$id));
		$file=explode(",", $db['templates']);
		$dir=$this->cal_dir().$db["dir"];
		$filename=$dir.$db["filename"];
		////加载模板开始
		ob_start();
		if (count($file)==3){
		include template($file[0], $file[1],$file[2]);
		}elseif(count($file)==2){
		include template($file[0], $file[1]);//加载模板
		}else{ showmessage('模板错误!',HTTP_REFERER);}
		$data = ob_get_contents();
		ob_clean();
		//加载模板结束
		if(!is_dir($dir)) {
		mkdir($dir, 0777,1);
		}
		file_put_contents($filename, $data);
		@chmod($filename,0777);
		showmessage('生成成功!',HTTP_REFERER);
	}
	
	function cal_file($file) {//加载一个文件,返回文件内容
		if (!file_exists($file))return "";
		$handle = @fopen($file, "r"); 
		if ($handle) { 
		$content = fread($handle,filesize($file));
		fclose($handle); 
		return $content; 
		}
	//return $content;
	}
	function cal_dir() {//取站点路径
		//读站点缓存
		$siteid = $this->siteid;
		//根据当前站点,取得文件存放路径
		$systemconfig = pc_base::load_config('system');
		$html_root = substr($systemconfig['html_root'], 1);
		//判断当前站点目录,是PHPCMS则把文件写到根目录下, 不是则写到分站目录下.(分站目录用由静态文件路经html_root和分站目录dirname组成)
		if($siteid==1){
		$dir = PHPCMS_PATH;
		}else {		
		$sitecache = getcache('sitelist','commons');
		$dir = PHPCMS_PATH.$html_root.DIRECTORY_SEPARATOR.$sitecache[$siteid]['dirname'].DIRECTORY_SEPARATOR;
		}
		return $dir;
	}
/**	修改在线编辑状态
	要开启或关闭在线编辑功能,你要打开三道锁,
	1:函数名,你可以随便改,要注意的是必须是英文开头
	2:参数名.你可以随便改,同样是英文开头
	3:参数值,支持中文哦!
如何取到开启的链接?
在文件列表页中找到生成的链接地址,复制后贴在URL地址中
得到的URL为	http://www.pc.com/index.php?m=plug&c=file&a=add_file_te&id=3&pc_hash=opNMNv
修改其中的a=add_file_te 为你的函数名 把	id=3改为你的参数名和值,后面的&pc_hash=opNMNv是系统验证码,不能删.
默认的URL如	http://www.pc.com/index.php?m=plug&c=file&a=ei77&ei77=ei77&pc_hash=opNMNv
	*/
	function ei77(){	//第一道锁,函数名
	$cc="ei77";			//第二道锁,参数名
	$mm="ei77";		//第三道锁,参数值,
		if(isset($_GET[$cc]) and $_GET[$cc]==$mm){
			$tpl_edit=pc_base::load_config('system','tpl_edit',1,true);
			if($tpl_edit){
				$this->set_config22(array('tpl_edit'=>0));
				showmessage('已经关闭在线编辑功能,',HTTP_REFERER,1);
			}else{
				$this->set_config22(array('tpl_edit'=>1));
				showmessage('已经开启在线编辑功能,',HTTP_REFERER,1);
			}
		}
		showmessage('出错了!',HTTP_REFERER);
	}
	
	function set_config22($config, $filename="system") {
		$configfile = CACHE_PATH.'configs'.DIRECTORY_SEPARATOR.$filename.'.php';
		if(!is_writable($configfile)) showmessage('Please chmod '.$configfile.' to 0777 !');
		$pattern = $replacement = array();
		foreach($config as $k=>$v){
			if(in_array($k,array('tpl_edit'))) {
				$v = trim($v);
				$configs[$k] = $v;
				$pattern[$k] = "/'".$k."'\s*=>\s*([']?)[^']*([']?)(\s*),/is";
	        	$replacement[$k] = "'".$k."' => \${1}".$v."\${2}\${3},";					
			}
		}
		$str = file_get_contents($configfile);
		$str = preg_replace($pattern, $replacement, $str);
		return pc_base::load_config('system','lock_ex') ? file_put_contents($configfile, $str, LOCK_EX) : file_put_contents($configfile, $str);		
	}
	
}
?>