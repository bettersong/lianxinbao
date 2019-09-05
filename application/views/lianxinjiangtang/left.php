<div class="B_main_left">
  <div class="BL_head"> <span><?=$catlogArr['lianxinjiangtang']['name']?></span> </div>
  <?php foreach($catlogArr['lianxinjiangtang']['subnav'] as $index => $value){?>
  	<div class="BL_one ripple-effect ripple-red"><a href="<?=$value['url']?>"><?=$value['name']?></a></div>
  <?php }?>
</div>
