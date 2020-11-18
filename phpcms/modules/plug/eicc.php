<?php
// +----------------------------------------------------------------------
// |	E族网络		自定义变量文件 
// +----------------------------------------------------------------------
// |	E族网络：启城 QQ:249650606 Tel:18665035290 www.ei77.com
// +----------------------------------------------------------------------
// |	欢迎进入CMS技术交流群：1700270，修改日期：20130313
// +----------------------------------------------------------------------
// |	函数列表
// +----------------------------------------------------------------------
defined('IN_PHPCMS') or exit('No permission resources.');
pc_base::load_app_class('admin','admin',0);
class eicc extends admin {
	private $db;
	function __construct() {
		parent::__construct();
		$this->db = pc_base::load_model('module_model');
		pc_base::load_app_func('global');
	}
	/**
	 * 配置信息
	 */
	public function init() {
		$show_validator = true;
		$data = pc_base::load_config('c',"myc");	//加载配置文件
		$cname	= pc_base::load_config('c',"cname");
		$big_menu=array("","变量列表");
		include $this->admin_tpl('cc');//加载模板
	 }
	 /**
	 * 保存配置信息
	 */
	public function save() {		
		if(!$_POST[pc_hash] && !$_POST[dosubmit]){showmessage('错误参数'.$snda_error, HTTP_REFERER);}
		//过滤空值
		$myc=array_filter($_POST['info']);
		$cid=array_filter($_POST['cid']);
		if(count($cid)!=count($myc)){
		showmessage('标签名和值要对等'.$snda_error, HTTP_REFERER);
		}
		//重新赋值
		$info = array();
		$info['myc']=array_combine($cid ,$myc);
		foreach ($cid as $key=>$name) {
			$names[$name]=$_POST['cname'][$key];
		}
		$info['cname']=$names;
		$this->set_config11($info,'c');	 //保存进config文件
		showmessage('保存配置完成'.$snda_error, HTTP_REFERER);
	}

	function set_config11($config, $filename="c") {
/*	系统原写配置文件用的是替换方法,这里用的是全新写文件方法.系统方法可保留备注,但会替换所有重复的变量,比如在不同数组下的所有同一参数都会被修改,不用用数组方式写配置
这个方法可以用数组方式写配置,但不能保留备注
	*/
		$configfile = CACHE_PATH.'configs'.DIRECTORY_SEPARATOR.$filename.'.php';//设置文件目录
		if(!is_writable($configfile)) showmessage('Please chmod '.$configfile.' to 0777 !');//判断权限是否可写
//		$str = file_get_contents($configfile);//读取文件信息
//		$data = pc_base::load_config('c');	//加载配置文件
//		$data=array_merge($data,$config);

		$str=var_export($config,TRUE);
		$str='<?php
return '.$str.';
?>';
		return pc_base::load_config('system','lock_ex') ? file_put_contents($configfile, $str, LOCK_EX) : file_put_contents($configfile, $str);		
	}
	
}
?>