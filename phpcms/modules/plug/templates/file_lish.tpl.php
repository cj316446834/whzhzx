<?php 
defined('IN_ADMIN') or exit('No permission resources.');
$show_dialog = $show_header = 1; 
include $this->admin_tpl('header', 'admin');
?>
<div class="subnav">
    <div class="content-menu ib-a blue line-x">
    <?php if(isset($big_menu)) echo '<a class="add fb" href="'.$big_menu[0].'"><em>'.$big_menu[1].'</em></a>　';?>
    <?php if(isset($big_menu2)) echo '<a class="add fb" href="'.$big_menu2[0].'"><em>'.$big_menu2[1].'</em></a>　';?>	
    <?php echo admin::submenu($_GET['menuid'],$big_menu); ?>
    </div><?php if(!$tpl_edit) echo '		注:在线编辑模板功能未开启,当前只能使用模板生成功能,不能在线编辑文件!';?>
</div>
<div class="pad-lr-10">
<form name="myform" action="?m=formguide&c=formguide&a=listorder" method="post">
<div class="table-list">
    <table width="100%" cellspacing="0">
        <thead>
            <tr>
            <th width="35" align="center"><input type="checkbox" value="" id="check_box" onclick="selectall('id[]');"></th>
			<th width='50' align="center">文件名</th>
			<th align="center">备注</th>
			<th align="center">模板文件</th>
			<th width="140" align="center">操作员</th>
			<th width='150' align="center">最后修改时间</th>
			<th width='150' align="center">操作</th>
            </tr>
        </thead>
    <tbody>
 <?php 
if(is_array($data)){
	foreach($data as $form){
	if(!$form['istemplates']){
	$form['templates']='未启用';
	}
?>   
	<tr>
	<td align="center">
	<input type="checkbox" name="id[]" value="<?php echo $form['id']?>">
	</td>
	<td><?php echo $form['filename']?> </td>
	<td align="center"><?php echo $form['description']?></td>
	<td align="center"><?php echo $form['templates'] ?></td>
	<td align="center"><?php echo $form['username']?></td>
	<td align="center"><?php echo date('Y-m-d H:i:s', $form['updatetime'])?></td>
<td align="center"><?php if($tpl_edit){?>
<a href="javascript:edit('<?php echo $form[id]?>', '<?php echo $form['filename']?>');void(0);"><?php echo L('modify');?></a><?php }else{echo '不可编辑';}?>
	<?php if($form['istemplates'])echo '<a href="?m=plug&c=file&a=add_file_te&id='.$form['id'].'">生成</a>'?>
	</td></tr>
	<?php }}?>
</tbody></table>
  
    <div class="btn"><label for="check_box"><?php echo L('selected_all')?>/<?php echo L('cancel')?></label>
		<input name="submit" type="submit" class="button" value="删除" onClick="document.myform.action='?m=plug&c=file&a=delete';return confirm('<?php echo L('affirm_delete')?>')">&nbsp;&nbsp;</div>  </div>
 <div id="pages"><?php echo $this->db->pages;?></div>
</form>
</div>
</body>
</html>
<script type="text/javascript">
function edit(id, title) {
	window.top.art.dialog({id:'edit'}).close();
	window.top.art.dialog({title:'文件编辑-('+title+') ', id:'edit', iframe:'?m=plug&c=file&a=edit&id='+id ,width:'900px',height:'400px'}, function(){var d = window.top.art.dialog({id:'edit'}).data.iframe;
	var form = d.document.getElementById('dosubmit');form.click();return false;}, function(){window.top.art.dialog({id:'edit'}).close()});
}

function add(id) {
	window.top.art.dialog({id:'stat'}).close();
	window.top.art.dialog({title:'<?php echo L('stat_formguide')?>--'+title, id:'stat', iframe:'?m=plug&c=file&a=edit&id='+id ,width:'700px',height:'350px'}, function(){window.top.art.dialog({id:'edit'}).close()});
}
</script>