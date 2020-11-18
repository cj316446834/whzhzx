<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<div id="Info_banner" class="I_banner04"></div>
<div class="position">
	<div class="position_main"><a href="<?php echo siteurl($siteid);?>">首页</a><span> > </span><?php echo catpos($catid);?> 正文</div>
</div>
<!---------------视频播放--------------->
<div class="video_info">
<p class="font_22 b black m_b15"><?php echo $title;?></p>
<?php $video=string2array($rs['video_url'])?>
<?php $n=1;if(is_array($video)) foreach($video AS $r) { ?>
<a href="<?php echo $r['fileurl'];?>" id="player"></a></div>
<?php $n++;}unset($n); ?>

<?php include template("content","footer"); ?>

<script type="text/javascript" src="/Files/Scripts/flowplayer-3.2.13.min.js"></script>
<script type="text/javascript">
flowplayer( 
    "player",  
    "/flowplayer-3.2.17.swf",{ 
      clip: { 
       
        autoPlay: false,  
        autoBuffering: true  
      } 
    } 
); 
</script>
</body>
</html>
