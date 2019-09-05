<?php 
        $url = $_SERVER["QUERY_STRING"];//获取地址栏
        $res = explode("/", $url);//对地址栏进行分割
        $cat1 = explode("=", $res[0]);//获取文件名
		$type = $_GET["type"]!=""?$_GET["type"]:$_GET["type2"];
		
        if (count($res) == 2) { ?>
          <span>你当前的位置：<a href="<?=$catlogArr[$cat1[1]]["url"]?>"><?=$catlogArr[$cat1[1]]["name"]?></a><span id="srumbnavArrow">》</span><a href="<?=$catlogArr[$cat1[1]]["subnav"][$type]["url"]?>"><?=$catlogArr[$cat1[1]]["subnav"][$type]["name"]?></a></span>
        </span>
      <?php  }else{?>
        <span>你当前的位置：<a href="<?=$catlogArr[$cat1[1]]["url"]?>"><?=$catlogArr[$cat1[1]]["name"]?></a><span id="srumbnavArrow">》</span>：<a href="<?=$catlogArr[$cat1[1]]["subnav"][$type]["name"]?>"><?=$catlogArr[$res[1]]["name"]?>-<?=$catlogArr[$cat1[1]]["subnav"][$type]["url"]?></a></span>
<?php }?>