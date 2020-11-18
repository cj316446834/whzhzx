<?php
defined('IN_ADMIN') or exit('No permission resources.'); 
include $this->admin_tpl('header', 'admin');
?>
<style type="text/css">
	html{_overflow:hidden}
	.frmaa{float:left;width:80%; min-width: 870px; _width:870px;}
	.rraa{float: right; width:230px;}
	.pt{margin-top: 4px;}
</style>
<body style="overflow:hidden">
<?if ($add){?>
<?php if(isset($big_menu2)) echo '<a class="add fb" href="'.$big_menu2[0].'"><em>'.$big_menu2[1].'</em></a>　';?>	
<?php }?>
<div class="pad-10" style="padding-bottom:0px">
	<div class="col-auto">
	<script>function deleteRow(table){$(table).remove();}</script>
		<form action="?m=plug&c=eicc&a=save" method="post" id="myform">
		<div class="pad-10">
		<div class="col-tab">使用方法:     前台任意模板用:{my_c('字段名')}
		&nbsp; &nbsp; &nbsp; 删除变量后要提交才生效
		增加变量时,变量名和值必须填写,不然会出错
			<div id="div_setting_1" class="contentList pad-10">
				<table width="100%"  class="autoAdd" id="tb">
					<tr>  
						<td width="20"></td>
						<td width="120"><b>变量</b></td>
						<td width="100"><b>标题</b></td>
						<td><b>值</b></td>       
					</tr>
				<?
				$cid=array_keys($data);
				$n=0;
				foreach ($data as $value) {
				$name=$cname[$cid[$n]];
				?>
					<tr class="tempRow" id='tr<? echo $n ?>'>
						<td></td>       
						<td><input type="text" class="input-text" name="cid[<? echo $cid[$n] ?>]"  size="10" value="<? echo $cid[$n] ?>"/></td>
						<td><input type="text" class="input-text" name="cname[<? echo $cid[$n] ?>]"  size="10" value="<? echo $name ?>"/></td>
						<td><input type="text" class="input-text" name="info[<? echo $cid[$n] ?>]"  size="80" value="<?php echo $value?>"/>
						<input type="button" onclick="deleteRow($('#tr<? echo $n ?>'));" value="删除"/>前台调用  {my_c('<? echo $cid[$n] ?>')}
						</td>       
					</tr>
					<?php $n++;}?>
					<tr class="tempRow" id='tr<? echo $n+1 ?>'>
						<td></td>
						<td><input type="text" class="input-text" name="cid[td<? echo $n+1 ?>]"  size="10" value=""/></td>
						<td><input type="text" class="input-text" name="cname[td<? echo $n+1 ?>]"  size="10" value=""/></td>
						<td><input type="text" class="input-text" name="info[td<? echo $n+1 ?>]"  size="80" value=""/>要增加变量在这里提交</td>
					</tr>
				</table>
			</div>
		<div class="bk15"></div>
		<input name="dosubmit" type="submit" value="<?php echo L('submit')?>" class="button">
		</div>
		</div>
		</form>
	</div>
</div>
</body>
</html>