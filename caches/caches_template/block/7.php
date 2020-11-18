<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="bd">
            <ul>
<?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
                <li><img src="<?php echo thumb($r[thumb],998,350,0);?>" width="998" height="350" /></li>
<?php $n++;}unset($n); ?>
            </ul>
        </div>
        <div class="hd clearfix">
            <a class="prev"></a>
                <ul>
<?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
                    <li><img src="<?php echo thumb($r[thumb],143,86,1);?>" width="143" height="86" /></li>
<?php $n++;}unset($n); ?>
                </ul>
            <a class="next"></a>
        </div>