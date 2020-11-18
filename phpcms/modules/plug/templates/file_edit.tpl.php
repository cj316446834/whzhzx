<?php
defined('IN_ADMIN') or exit('No permission resources.'); 
include $this->admin_tpl('header', 'admin');
?>

<body style="overflow:hidden">
<?php if ($add){
if(isset($big_menu2)) echo '<a class="add fb" href="'.$big_menu2[0].'"><em>'.$big_menu2[1].'</em></a>';
}?>
<div class="pad-10" style="padding-bottom:0px">
	<div class="col-auto">
	<form action="?m=plug&c=file&a=edit_file" method="post" name="myform" id="myform">
	<?php if ($add){echo '<input name="info[add]" type="hidden" value="1" />';
	}else{	echo '<input name="info[id]" type="hidden" value="'.$id.'" />';
	}?>	
<table width="100%" cellspacing="0">
    <tbody>	
	<tr><td>
文件名 :  <input name="info[filename]" type="text" id="id" value="<?php echo $filename ?>" /></td><td>
文件位置: <input name="info[dir]" type="text" id="id" value="<?php echo $dir ?>" />(根目录请留空,非根目录要用/结束)</td><td>
备	注 :  <input name="info[description]" type="text" id="id" value="<?php echo $description ?>" /></td>
	</tr><tr>
	<td>
	启用模板
	<input type="radio" <?php if($istemplates)echo 'checked="checked"'?> class="car" name="info[istemplates]" value="1"  id="test1"/>是
	<input type="radio" <?php if(!$istemplates)echo 'checked="checked"'?> class="car" name="info[istemplates]" value="0" id="test2"/>否
	</td>
	<td colspan=2>
	模板位置: <input name="info[templates]" type="text" id="id" value="<?php echo $templates ?>" />(语法:[模块,文件名,模板目录] 如:content,index,default)
	</td>
	</tr>	
</tbody>
    </table>
	<br/>
		<textarea  name="code" id="code" <?php if($add)echo 'readonly="readonly"'; ?> style="height: 280px;width:96%; visibility:inherit"><?php
		if($add){echo '为了不对现有文件造成破坏,新增加文件时,内容不可设置,增加完成后,会自动加载现有文件,方可进行修改!';
		}else{echo $content;}?></textarea>
		<div class="bk10"></div>
		<?php echo '<font color="red">上次修改时间: '.date('Y-m-d H:i:s', $updatetime).'</font>';?>
		<BR>
		<input type="submit" id="dosubmit" class="button pt" name="dosubmit" value="<?php echo L('submit')?>" />
	</form>
	</div>
</div>
</body>
</html>