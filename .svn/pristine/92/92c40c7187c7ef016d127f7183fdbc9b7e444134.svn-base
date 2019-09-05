<?php session_start();
  
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
      <span>你当前的位置：个人中心<span id="srumbnavArrow">》</span>修改密码</span> 
    </div>
    <div class="right2_main">
      <div id="right2_main_content">
        <div class="oldPassword">
          <label>原始密码： </label>
            <input type="password"  name="oldPassword" id="oldPassword">
         
          <span id="oldPasswordTip" class="tip">密码错误</span>
        </div>
        <div class="newPassword">
          <label>新&nbsp;&nbsp;密&nbsp;&nbsp;码：</label>
            <input type="password" name="newPassword" id="newPassword">
          
          <span id="newPasswordTip1" class="tip">密码不能为空</span>
          <span id="newPasswordTip2" class="tip">密码至少6位</span>
        </div>
        <div class="confirmPassword">
          <label>确认密码：</label>
            <input type="password" name="confirmPassword" id="confirmPassword">
          
          <span id="confirmPasswordTip" class="tip">新密码与旧密码不一致</span>
        </div>
        <div class="confirmChange">
          <label style="margin-left: 76px;"></label>
            <input type="button" name="confirmChange" id="confirmChange" value="确认修改">
         
        </div>
        <div id="tip">
          <span>提示：如忘记密码，可以联系本单位管理员重置密码</span>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="backTop" id="backTop"></div>
<script type="text/javascript">


$(function () {
 
  //新密码不能少于6位数
  $("#newPassword").blur(function () {
    var newPassword = $.trim($("#newPassword").val());
    var length = newPassword.length;
    if (length == 0 ) {
    	$("#newPasswordTip1").css("display","inline-block");
    	return false;
    }
    else if (length < 6) {
    	$("#newPasswordTip1").css("display","none");
    	$("#newPasswordTip2").css("display","inline-block");
    	return false;
    }
    else{
    	$("#newPasswordTip1").css("display","none");
    	$("#newPasswordTip2").css("display","none");
    }


  });



  //新旧密码要一致
  $("#confirmPassword").keyup(function () {
    var newPassword = $.trim($("#newPassword").val());
    var confirmPassword = $.trim($("#confirmPassword").val());
    if (newPassword != confirmPassword ) {
    	$("#confirmPasswordTip").css("display","inline-block");
    	return false;
    }
    else{
  	  $("#confirmPasswordTip").css("display","none");
    }


  });

  // 确认修改密码
  $("#confirmChange").click(function () {
     var oldPassword = $.trim($("#oldPassword").val())
     var newPassword = $.trim($("#newPassword").val());
     if(oldPassword=="" || newPassword==""){
  	    layer.alert("原始密码和新密码都不能为空。", {icon:0,title: '【提示】'});
  		return false;
     }
    $.ajax({
    	async: false,
    	data: {
    	  "oldPassword": oldPassword,
    	  "newPassword": newPassword
    	},
    	type: "POST",
    	dataType: 'json',
    	url: "<?=CURRENT_DIR?>/changePassword_check.php",
    	success: function(msg) {
    		//alert(msg)
    	  if(msg =="nomatch"){
    		  layer.alert("原始密码不正确。", {icon:0,title: '【提示】'}); 
    	  }else if(msg =="success"){
      		layer.alert("修改成功。", {icon:1,title: '【提示】'});
          setTimeout("window.location.href = '/login/loginOut'",1500)
    		    
    	  }
    	  else{
    		  layer.alert("未知错误。", {icon:0,title: '【提示】'});  
    	  }
    	},
    	error:function (data) {
    	  layer.alert("更新失败。", {icon:0,title: '【提示】'});
    	}
    });




  });




})


</script>