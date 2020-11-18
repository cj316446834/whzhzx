<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>
                	<li><em></em><a href=<?php echo $v['url'];?>><?php echo $v['title'];?></a></li>
<?php $n++;}unset($n); ?>