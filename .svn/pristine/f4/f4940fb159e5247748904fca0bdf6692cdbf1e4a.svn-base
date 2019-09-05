<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>廉心宝</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
<meta name="HandheldFriendly" content="true">
<link rel="stylesheet" href="/public/css/style<?=$_m?>.css?v=<?=rand(1,999999) ?>" type="text/css" />
<link rel="stylesheet" href="/public/css/lianzhengNews<?=$_m?>.css?v=<?=rand(1,999999) ?>" type="text/css" />
<link rel="stylesheet" href="/public/css/lianxinjiangtang<?=$_m?>.css?v=<?=rand(1,999999) ?>" type="text/css" />
</head>
<body>

<!--头部-->
<?php include APP_PATH."/application/views/header".$_m.".php"; //包含公共的头部 ?>

<!--中间部分main-->
<div class="B_main">
  <?php include APP_PATH."/application/views/lianzhengNews/left".$_m.".php"; //本栏目的公共左侧 ?>
  <div class="B_main_right">
    <div class="BR_head">
      <div class="BR_head_left"></div>
      <span>你当前的位置：廉政信息-热点关注</span> </div>
    <div class="shalong_main">
      <ul>
      <?php foreach($lianzhengNews as $index => $value){?>
        <li>
          <div class="SL_main_left"> </div>
          <div class="SL_main_right">
            <p><?=$value['lzInfoContent']?></p>
            <span><?=$value['lzInfoTime']?></span></div>
        </li>
        <?php }?>
         
      </ul>
    </div>
  </div>
</div>
<div class="backTop" id="backTop"></div>
<script>

</script> 
