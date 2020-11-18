<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class=hd>
        <ul>
<?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>
            <li><span class=font_14><?php echo $v['title'];?></span><br /><span><?php echo $v['description'];?></span></li>
<?php $n++;}unset($n); ?>
        </ul>
    </div>
    <div class=bd>
        <ul>
<?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>
            <li><a href=<?php echo $v['url'];?>><img src=<?php echo thumb($v[thumb],898,320,1);?>></a></li>
<?php $n++;}unset($n); ?>
        </ul>
    </div>