<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
	<li>
		<span style="background:url(<?php echo $r['thumb'];?>) center top no-repeat;"><a href="<?php echo $r['url'];?>"  target="_blank" title="<?php echo $r['title'];?>"></a></span>
	</li>
<?php $n++;}unset($n); ?>