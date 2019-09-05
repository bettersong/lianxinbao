<?php
/**
  *功能说明：公共的分页模块
  *所需参数：
     $totalPage：相应的控制器中需设置了总页数$totalPage变量 
**/
?>
<div class="dataTables_paginate paging_bootstrap pagination" style="margin:5px 10px 10px">
  <?php //获取链接出来page参数为的信息
        $qstring = $_SERVER['QUERY_STRING'];
        $qstring=str_replace('url=', '', $qstring);
		$qstring=str_replace('&page='.$_GET['page'], '', $qstring);
        $qstring = '/'.$qstring;
  ?>
  <ul>
  
    <li class="prev nextprev <?php if($_GET['page']==1)echo 'disable';?>"><a href="<?=$qstring?>&page=<?=$_GET['page']==1?1:$_GET['page']-1?>">← 上一页</a></li>
    
    <?php for($pagenum=1;$pagenum<=$totalPage;$pagenum++){?>
     <li class="<?php if($pagenum==$_GET['page'] || ($pagenum==1&&$_GET['page']=='') ){echo 'active';}?>"><a href="<?=$qstring?>&page=<?=$pagenum?>"><?=$pagenum?></a></li>
    <?php }?>
    
     <li class="next nextprev <?php if($_GET['page']==$totalPage)echo 'disable';?>"><a href="<?=$qstring?>&page=<?=$_GET['page']==$totalPage?$_GET['page']:$_GET['page']+1?>">下一页 → </a></li>
  </ul>
</div>