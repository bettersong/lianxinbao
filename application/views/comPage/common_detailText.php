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
    <div class="BR_head">
      <div class="BR_head_left"></div>
       <?php include APP_PATH."/application/views/comPage/crumbNav.php"; //包含公共的面包屑导航/当前位置导航 ?>
      </div>
      
    <div id="contentBox" class="text">
           <h1 class="title"><?=$detailArr['title']?></h1>
           <span class="detail-span"> 来源：贵州新闻网 |  时间：<?=$detailArr['pushtime']?> </span>
           <div class="content">
            <div class="content"><?=$detailArr['content']?></div>
            <div class="pushtime"><?=$detailArr['pushtime']?></div>            
          </div>
     </div>
    
</div>
<div class="backTop" id="backTop"></div>