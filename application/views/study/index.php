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
<link rel="stylesheet" href="/public/css/lianxinjiangtang<?=$_m?>.css?v=<?=rand(1,999999) ?>" type="text/css" />
<link rel="stylesheet" href="/public/css/Others<?=$_m?>.css?v=<?=rand(1,999999) ?>" type="text/css" />
</head>
<body>

<!--头部-->
<?php include APP_PATH."/application/views/header".$_m.".php"; //包含公共的头部 ?>

<!--中间部分main-->
<div class="B_main">
  <?php include APP_PATH."/application/views/study/left".$_m.".php"; //本栏目的公共左侧 ?>
  <div class="B_main_right">
    <div class="BR_head">
      <div class="BR_head_left"></div>
       <!--<span>你当前的位置：学习资料<span id="srumbnavArrow">-->
       <?php include APP_PATH."/application/views/comPage/crumbNav.php"; //包含公共的面包屑导航/当前位置导航 ?>
      </div>
    <div class="ZJ_main" style="margin:10px 0; width:100%">
      <?php include APP_PATH."/application/views/comPage/common_catloglistText.php"; //包含公共的详情页 ?>
    </div>
  </div>
 
</div>
<div class="backTop" id="backTop"></div>
<script>
   //二级菜单


            $(function() {
  var Accordion = function(el, multiple) {
    this.el = el || {};
    this.multiple = multiple || false;

    // Variables privadas
    var links = this.el.find('.link');
    // Evento
    links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
  }

  Accordion.prototype.dropdown = function(e) {
    var $el = e.data.el;
      $this = $(this),
      $next = $this.next();

    $next.slideToggle();
    $this.parent().toggleClass('open');

    if (!e.data.multiple) {
      $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
    };
  }

  var accordion = new Accordion($('#accordion'), false);
});
</script> 
