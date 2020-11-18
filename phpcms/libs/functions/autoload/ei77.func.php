<?php
/**
 *  E族网络		E族工具箱
 *
 * @copyright			(C) E族网络：启城 
 * @license				QQ:249650606 Tel:18665035290 http://www.ei77.com
 * @lastmodify			2013-04-18
 */

defined('IN_PHPCMS') or exit('No permission resources.');

/**
*	根据任意表名条件取一条内容
*	ei_dbcal_one($dbname,$where,$firid='')
*	@param $dbname		表名
*	@param $where		条件数组
*	@param $firid		是否取指定字段信息
*	@param 2013-4-21
**/
	function ei_dbcal_one($dbname,$where,$firid=''){
		if(!$dbname or !$where or !is_array($where))return false;
		$db = ei_cal_db($dbname);//返回数据库
		if($firid)return $db->get_one($where,$firid);
		return $db->get_one($where);
	}
/**
*	根据表名或模型ID返回数据库,或返回表名
*	ei_cal_db($name,$isdb=true)
*	@param $name		数据表名
*	@param $isdb		取数据库或表名	@true/false
*	@param 	2013-4-21
**/
	function ei_cal_db($name,$isdb=true){
	$db = pc_base::load_model('sitemodel_model');
		if(is_int($name)){
			$r = $db->get_one(array('modelid'=>$name), 'tablename');
			$name=$r[tablename];
		}		
		$db = pc_base::load_model('module_model');//取系统数据库		
		if($db->table_exists($name)){	//数据表是否存在		
			if($isdb){
			$db->table_name = $db->db_tablepre.$name;
			}else{
			return $name;
			}			
		}elseif($db->table_exists('form_'.$name)){
			if($isdb){
			$db->table_name = $db->db_tablepre.'form_'.$name;
			}else{
			return 'form_'.$name;
			}	
		}else{
			return false ;//数据表不存在
		}		
		return $db;
	}

/**
*	自定义变量插件--前台模板调用函数,
*	$name		要取出的字段名	有值时返回变量值	留空时取所有配置字段.
*	留空输出例 字段值=$data[myc][变量名] 字段标题=$data[name][变量名]
**/
	function my_c($name="",$c="c"){
		if($name){
			$c=pc_base::load_config($c,'myc');	
			$c=$c[$name];
		}else{
			$c=pc_base::load_config($c);
		}
		return $c;
	}
/**
 * 设置config文件
 * @param $config 配属信息
 * @param $filename 要配置的文件名称
 */
	function ei77_config($config, $filename="c") {
	/*	原系统写配置文件函数 set_config()
	系统原写配置文件用的是替换方法,这里用的是全新写文件方法.
	系统方法可保留备注,但会替换所有重复的变量,比如在不同数组下的所有同一参数都会被修改,不能用数组方式写配置
	这个方法可以用数组方式写配置,但不能保留备注
	*/
		$configfile = CACHE_PATH.'configs'.DIRECTORY_SEPARATOR.$filename.'.php';//设置文件目录
		if(!is_writable($configfile)) showmessage('Please chmod '.$configfile.' to 0777 !');//判断权限是否可写
		//设置写出的格式,让PC系统可读
		$str=var_export($config,TRUE);
		$str='<?php
return '.$str.';
?>';
		return pc_base::load_config('system','lock_ex') ? file_put_contents($configfile, $str, LOCK_EX) : file_put_contents($configfile, $str);		
	}
?>