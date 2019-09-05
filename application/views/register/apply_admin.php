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
<link rel="stylesheet" href="/public/css/register<?=$_m?>.css?v=<?=rand(1,999999) ?>" type="text/css" />
<link rel="stylesheet" href="/public/css/lianxinjiangtang<?=$_m?>.css?v=<?=rand(1,999999) ?>" type="text/css" />




<link href="/public/css/bootstrap.min.css?<?=rand(1,99999)?>" rel="stylesheet" />
<link href="/public/css/bootstrap-responsive.min.css" rel="stylesheet" />
<link href="/public/css/bootstrap-fileupload.css" rel="stylesheet" />
<link href="/public/css/style.css?<?=rand(1,99999)?>" rel="stylesheet" />
<link href="/public/css/style-responsive.css?<?=rand(1,99999)?>" rel="stylesheet" />
<link href="/public/css/style-default.css?<?=rand(1,99999)?>" rel="stylesheet" id="style_color" />
<link href="/public/css/bootstrap-fullcalendar.css" rel="stylesheet" />
<link href="/public/css/jquery.fancybox.css" rel="stylesheet" />
<link rel="stylesheet" href="/public/css/uniform.default.css" />
</head>
<body>
<!--头部-->
<?php include APP_PATH."/application/views/header".$_m.".php"; //包含公共的头部 ?>
<div class="loginRegTitle">申请开通单位</div>
<div class="register applyAdmin">
  <div >
    <label><span>★</span>所 在 地 区：</label>
    <select id="registerProvince">
    <?php foreach($provinceArr as $index => $value){?>
      <option value="<?=$value["provinceId"]?>"><?=$value["provinceName"]?></option>
    <?php }?>
    </select>
  </div>
  <div>
    <label><span>★</span>单 位 名 称：</label>
    <input type="text" name="registerUnit" id="registerUnit" value="">
    <span id="unitExist" class="tip">该单位存在，请直接去注册用户！</span>
    <span id="applyExist" class="tip">该单位已经提交申请，审核中！</span>
  </div>
  <div>
    <label><span>★</span>所 在 部 门：</label>
    <input type="text" name="registerDepartment" id="registerDepartment" value="">
  </div>
  <!--<div id="normalUser">
    <label><span>★</span>类&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别：</label>
    <select> 
      <option value="1">管理员</option>
    </select>
  </div>-->
  <div >
    <label><span>★</span>管理员账号：</label>
    <input type="text" name="applyAccount" id="applyAccount" value="">
    <span id="accountExist" class="tip">账号已存在</span>
  </div>
  <div>
    <label><span>★</span>管理员密码：</label>
    <input type="password" id="applyPassword" name="applyPassword" value="" nullmsg="密码不能为空！" datatype="*6-16" errormsg="密码范围在6~16位之间！" sucmsg="密码验证通过！"/>
    <span id="passwordTip" class="tip">密码不能少于6位</span>
  </div>
  <div>
    <label><span>★</span>申请人姓名：</label>
    <input type="text" name="applyName" id="applyName" value="">
  </div>
  <div >
    <label><span>★</span>联 系 方 式：</label>
    <input type="text" name="applyPhoneNumber" id="applyPhoneNumber" value="">
    <span id="phoneNumberTip" class="tip">联系电话只能是数字</span>
  </div>
  <div>
    <label style="color:#fff">点击提交：&nbsp;</label><input type="button" id="registerAccount" name="registerAccount" value="申请开通">
  </div>


 
</div>
<script type="text/javascript">
  $(function () {

    var CURRENT_DIR = "<?=CURRENT_DIR?>";
 

    //判断单位是否存在
    $("#registerUnit").blur(function () {
      var provinceId = $.trim($("#registerProvince option:selected").val());
      var unitName = $.trim($("#registerUnit").val());
      // alert(provinceId+"*******"+unitName+"%%%%%%");
      $.ajax({
        async:false,
        type: "post",
        data: {
            "provinceId":provinceId,
            "unitName":unitName
        },
        dataType: 'json',
        url: "<?=CURRENT_DIR?>/unit_check.php",
        success: function (msg) {
          if (msg == "exist") {            
            $("#unitExist").css("display","inline-block");
            $("#applyExist").css("display","none");
          }
          else if (msg == "checking") {
            $("#applyExist").css("display","inline-block");
            $("#unitExist").css("display","none");
          }
          else{
            $("#unitExist").css("display","none");
            $("#applyExist").css("display","none");
          }
        },
        error: function (msg) {
          layer.alert(msg.status + "服务繁忙，请刷新或稍后再试。", {icon:0,title: '【提示】'});
        }
      });



    });

    //判断密码不能少于6位数
    $("#applyPassword").blur(function () {
      var password = $.trim($("#applyPassword").val());
      //如果用户名的内容不为空
      var length = password.length;
      if (length < 6 && length != 0) {
        $("#passwordTip").css("display","inline-block");
        return false;
      }
      else{
        $("#passwordTip").css("display","none");
      }

    });


    //电话号码只能是数字
    $("#applyPhoneNumber").blur(function () {
      var phoneNumber = $.trim($("#applyPhoneNumber").val());
      //如果用户名的内容不为空
      if(!isNaN(phoneNumber)){
        $("#phoneNumberTip").css("display","none");
      }else{
        $("#phoneNumberTip").css("display","inline-block");
      }

    });





    //注册账号
    $("#registerAccount").click(function(){
      var provinceId = $.trim($("#registerProvince option:selected").val());
      var unitName = $.trim($("#registerUnit").val());
      var departmentName = $.trim($("#registerDepartment").val());
      //var isAdmin = 1;//$("#normalUser option:selected").val();
      var trueName = $.trim($("#applyName").val());
      var phoneNumber = $.trim($("#applyPhoneNumber").val());
      var userName = $.trim($("#applyAccount").val());
      var password = $.trim($("#applyPassword").val());
      var password = $.trim($("#applyPassword").val());
      var password = $.trim($("#applyPassword").val());
      
      var unitExist = $("#unitExist").css("display");
      var applyExist = $("#applyExist").css("display");
      var passwordTip = $("#passwordTip").css("display");
      var phoneNumberTip = $("#phoneNumberTip").css("display");

      if (accountExist != "none" || applyExist != "none" || phoneNumberTip != "none" || passwordTip != "none" ) {
        return false;
      }
      // alert(provinceId+"****"+unitName+"****"+departmentName+"****"+isAdmin+"****"+trueName+"****"+phoneNumber+"****"+userName+"****"+password+"****");
      
      if (unitName=="" || trueName=="" || departmentName=="" || phoneNumber==""|| userName=="" ||password=="") {
        layer.alert("数据全部不能为空，请填写！", {icon:0,title: '【提示】'});

        return false;
      }
      $.ajax({
        async:false,
        type: "post",
        data: {
            "provinceId":provinceId,
            "unitName":unitName,
            "departmentName":departmentName,
            //"isAdmin":isAdmin,
            "trueName":trueName,
            "phoneNumber":phoneNumber,
            "userName":userName,
            "password":password
        },
        dataType: 'json',
        url: "<?=CURRENT_DIR?>/index_add_admin.php",
        success: function (msg) {
          layer.alert("已提交申请，请等待审核！", {icon:0,title: '【提示】'});
          window.location.href = "../login/index";
        },
        error: function (msg) {
          layer.alert(msg.status + "服务繁忙，请刷新或稍后再试。", {icon:0,title: '【提示】'});
        }
      });
      return false;

    });



  })

</script>
</body>
</html>
