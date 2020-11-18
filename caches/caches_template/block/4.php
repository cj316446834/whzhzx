<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                	<li><a href="<?php echo $r['url'];?>"><p class="xm_move01 Xm<?php echo $n;?>_01"><?php echo $r['title'];?></p><p class="xm_move02 Xm<?php echo $n;?>_02"></p></a></li>
<?php $n++;}unset($n); ?>