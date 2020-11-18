<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
            <li>
               <a href="<?php echo $r['url'];?>" target="_blank" title="<?php echo $r['title'];?>">
                   <img src="<?php echo $r['thumb'];?>"/>
               </a>
            </li>
<?php $n++;}unset($n); ?>