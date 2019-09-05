<!-- <div class="B_main_left">
    <div class="BL_head"> <span>廉心先锋</span> </div>
    <div class="BL_four active ripple-effect ripple-red"><a href="/lianxinxianfeng/xianfenggushi">先锋故事</a></div>
    <div class="BL_one ripple-effect ripple-red"><a href="/lianxinxianfeng/xianfengwenhui">先锋文汇</a></div>
    <div class="BL_two ripple-effect ripple-red"><a href="/lianxinxianfeng/xianfengluntan">先锋论坛（观点）</a></div>
    <div class="BL_three ripple-effect ripple-red"><a href="/lianxinxianfeng/xianfengdianxingku">先进典型库</a></div>
  </div>

 -->
  <div class="B_main_left">
  <div class="BL_head"> <span><?=$catlogArr['lianxinxianfeng']['name']?></span> </div>
  <?php foreach($catlogArr['lianxinxianfeng']['subnav'] as $index => $value){?>
  	<div class="BL_one ripple-effect ripple-red"><a href="<?=$value['url']?>"><?=$value['name']?></a></div>
  <?php }?>
</div>
