<?php 
  session_start();
?>
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
<link rel="stylesheet" href="/public/css/userCenter<?=$_m?>.css?v=<?=rand(1,999999) ?>" type="text/css" />
</head>
<body>

<!--头部-->
<?php include APP_PATH."/application/views/header".$_m.".php"; //包含公共的头部 ?>

<!--中间部分main-->
<div class="B_main">
  <?php include APP_PATH."/application/views/userCenter/left".$_m.".php"; //本栏目的公共左侧 ?>
  <div class="B_main_right">
    <div class="BR_head">
      
      <div class="BR_head_left"></div>
      <span>你当前的位置：个人中心<span id="srumbnavArrow">》</span>修改联系方式</span> 
    </div>
    <div class="right2_main">
      <div id="right2_main_content">
        <div class="oldPhone">
          <label>旧联系方式： </label>
            <input type="text" name="oldPhone" id="oldPhone">
            <span id="oldPhoneTip" class="tip">联系方式不能为空</span>

        </div>
        <div class="newPhone">
          <label>新联系方式：</label>
            <input type="text" name="newPhone" id="newPhone">
          <span id="newPhoneTip1" class="tip">联系方式不能为空</span>
          <span id="newPhoneTip2" class="tip">联系方式只能填写数字</span>
        </div>
        <div class="confirmChange">
          <label style="margin-left: 88px;"></label>
            <input type="button" name="confirmChange" id="confirmChange" value="确认修改">
        </div>
        <div id="tip">
          <span>提示：如忘记联系方式，可以联系本单位管理员重置</span>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="backTop" id="backTop"></div>
<script type="text/javascript">


  $(function () {

    //旧联系方式不能为非数字
    $("#oldPhone").blur(function () {
      var oldPhone = $.trim($("#oldPhone").val());
      var length = oldPhone.length;
      if (length == 0) {
        $("#oldPhoneTip").css("display","inline-block");
      }
      else{
        $("#oldPhoneTip").css("display","none");
      }


    });
    //新联系方式不能为非数字
    $("#newPhone").blur(function () {
      var newPhone = $.trim($("#newPhone").val());
      var length = newPhone.length;
      if (isNaN(newPhone)) {
        $("#newPhoneTip1").css("display","none");
        $("#newPhoneTip2").css("display","inline-block");
      }
      else{
        $("#newPhoneTip1").css("display","none");
        $("#newPhoneTip2").css("display","none");
      }


    });

    
    // 确认修改联系方式
    $("#confirmChange").click(function () {
      var oldPhone = Number($.trim($("#oldPhone").val()));
      var newPhone = $.trim($("#newPhone").val());
      // alert(oldPhone+"*****"+newPhone);
      var length = newPhone.length;
      if (length == 0 ) {
        $("#newPhoneTip1").css("display","inline-block");
        return false;
      }
      // 判断右边是否有错误提示信息
      var oldPhoneTip = $("#oldPhoneTip").css("display");
      var newPhoneTip1 = $("#newPhoneTip1").css("display");
      var newPhoneTip2 = $("#newPhoneTip2").css("display");

      if (newPhoneTip1 != "none" || newPhoneTip2 != "none" || oldPhoneTip != "none") {
        return false;
      }

      $.ajax({
        async: false,
        data: {
          "oldPhone": oldPhone,
          "newPhone": newPhone
        },
        type: "POST",
        dataType: 'json',
        url: "<?=CURRENT_DIR?>/changePhone_check.php",
        success: function(msg) {
          // alert(msg);
          if (msg == "success") {
            layer.alert("修改联系方式成功", {icon:1,title: '【提示】'});
            setTimeout("window.location.reload();",1500);
            
          }
          else if (msg == "error") {
            layer.alert("输入的旧联系方式不正确", {icon:0,title: '【提示】'});
          }
          else{
            layer.alert("联系方式修改失败！", {icon:2,title: '【提示】'});
          }
        },
        error:function (data) {
            layer.alert(data+"     fail", {icon:4,title: '【提示】'});

        }
      });
    });




  })


</script>