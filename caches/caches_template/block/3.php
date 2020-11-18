<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<li>
				<a href="<?php echo $r['url'];?>" target="_blank" rel="nofollow">
					<div class="ztlist_pic">
						<div class="ztlist_piclink">
							<img src="/Files/Images/index_zt<?php echo $n;?>.jpg" />
						</div>
					</div>
					<p><?php echo $r['title'];?></p>
				</a>
			</li>
<?php $n++;}unset($n); ?>