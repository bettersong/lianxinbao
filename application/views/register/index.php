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
<div class="loginRegTitle">普通用户注册</div>
<div class="register userRegist">
  <div >
    <label><span>★</span>所在地区：</label>
    <select id="registerProvince">
    <?php foreach($provinceArr as $index => $value){?>
      <option value="<?=$value["provinceId"]?>"><?=$value["provinceName"]?></option>
    <?php }?>
    </select>
  </div>
  <div>
    <label><span>★</span>单位名称：</label>
    <select id="registerUnit">
      <option value="0">请选择单位</option>
    </select>
    <span class="initTip">（<a href="/register/apply_admin" target="_blank">未找到单位，申请开通>></a>）</span>
  </div>
  <div>
    <label><span>★</span>所在部门：</label>
    <select id="registerDepartment">
      <option value="0">请选择部门</option>
    </select>
    <span class="initTip">（未找到部门，请联系单位管理员）</span>
  </div>
  <!--<div id="normalUser">
    <label>类&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别：</label>
    <select> 
      <option value="0">普通用户</option>
    </select>
  </div>-->
  <div >
    <label><span>★</span>登陆账号：</label>
    <input type="text" name="applyAccount" id="applyAccount" value="">
    <span id="accountExist" class="tip">账号已存在</span>
  </div>
  <div>
    <label><span>★</span>密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码：</label>
    <input type="password" id="applyPassword"/>
    <span id="passwordTip" class="tip">密码不能少于6位</span>
  </div>
  <div>
    <label><span>★</span>真实姓名：</label>
    <input type="text" name="applyName" id="applyName" value="">
  </div>
  <div >
    <label><span>★</span>联系方式：</label>
    <input type="text" name="applyPhoneNumber" id="applyPhoneNumber" value="">
    <span id="phoneNumberTip" class="tip">联系电话只能是数字</span>
  </div>
  <div>
    <label style="color:#fff">点击提交：&nbsp;</label><input type="button" id="registerAccount" name="registerAccount" value="点击注册">
  </div>


 
</div>
<script type="text/javascript">
  $(function () {

    var CURRENT_DIR = "<?=CURRENT_DIR?>";

    


    // 省份发生改变，则单位相应的改变
    $("#registerProvince").change(function(){
        //获取选定的一级分类名称
        var provinceId = $("#registerProvince option:selected").val();
        // 根据一级分类查二级数据
        $.ajax({
            async:false,
            type: "post",
            data: {
                "provinceId":provinceId
            },
            dataType: 'json',
            url: "<?=CURRENT_DIR?>/get_unit.php",
            success: function (msg) {
              if (msg == "") {
                $("#registerUnit").html("<option>没有找到单位</option>");
                $("#registerDepartment").html("<option>没有找到部门</option>");
              }else{
                var str="<option value=\""+msg[0]['unitId']+"\">"+msg[0]['unitName'] +"</option>";
                  //遍历数组，把它放入str
                for(var i=1;i<msg.length;i++){
                    var content = msg[i]['unitName'];
                    str+="<option value=\""+msg[i]['unitId']+"\">"+content +"</option>";
                }
                $("#registerUnit").html(str);
              }
              
            },
            error: function (msg) {
                 
            }
        });
        $("#registerUnit").change();
    });

    $("#registerProvince").change();
    // 单位发生改变，则部门相应的改变
    $("#registerUnit").change(function(){
        //获取选定的一级分类名称
      var unitId = $("#registerUnit option:selected").val();
      // 根据一级分类查二级数据
      $.ajax({
          async:false,
          type: "post",
          data: {
              "unitId":unitId
          },
          dataType: 'json',
          url: "<?=CURRENT_DIR?>/get_department.php",
          success: function (msg) {
            if (msg == "") {
              $("#registerDepartment").html("<option>没有找到部门</option>");
            }else{
              var str="<option value=\""+msg[0]['departmentId']+"\">"+msg[0]['departmentName'] +"</option>";
                //遍历数组，把它放入str
              for(var i=1;i<msg.length;i++){
                  str+="<option value=\""+msg[i]['departmentId']+"\">"+msg[i]['departmentName'] +"</option>";
              }
              $("#registerDepartment").html(str);
            }
            
          },
          error: function (msg) {
              // alert(1111);
          }
      });
    });

    $("#registerUnit").change();


    //判断该账号是否被注册
    $("#applyAccount").blur(function () {
      var userName = $.trim($("#applyAccount").val());
      //如果用户名的内容不为空
      if (userName!="") {
        $.ajax({
          async:false,
          type: "post",
          data: {
              "userName":userName
          },
          dataType: 'json',
          url: "<?=CURRENT_DIR?>/account_check.php",
          success: function (msg) {
            if (msg == 'success') {
              //显示账号不存在的提示
              $("#accountExist").css("display","inline-block");
              return false;
            }
            else{
              $("#accountExist").css("display","none");
            }
          },
          error: function (msg) {
            layer.alert("已提交申请，请等待审核！", {icon:0,title: '【提示】'});

          }
        });
        return false;
      }
      else{

      }



    });



    //判断密码不能少于6位数
    $("#applyPassword").blur(function () {
      var password = $.trim($("#applyPassword").val());
      //如果用户名的内容不为空
      var length = password.length;
      if (length < 6 && length != 0) {
        $("#passwordTip").css("display","inline-block");
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




    //注册账号点击事件
    $("#registerAccount").click(function(){

      // 判断右边是否有错误提示信息
      var accountExist = $("#accountExist").css("display");
      var passwordTip = $("#passwordTip").css("display");
      var phoneNumberTip = $("#phoneNumberTip").css("display");

      if (accountExist != "none" || passwordTip != "none" || phoneNumberTip != "none") {
        return false;
      }
      
      var departmentId = $("#registerDepartment option:selected").val();
      //var isAdmin = $("#normalUser").find("option").val();
      var trueName = $.trim($("#applyName").val());
      var phoneNumber = $.trim($("#applyPhoneNumber").val());
      var userName = $.trim($("#applyAccount").val());
      var password = $.trim($("#applyPassword").val());
      if (trueName=="" || phoneNumber==""|| userName=="" ||password=="") {
        layer.alert("数据全部不能为空，请填写！", {icon:0,title: '【提示】'});
        return false;
      }
      $.ajax({
        async:false,
        type: "post",
        data: {
            "departmentId":departmentId,
            //"isAdmin":isAdmin,
            "trueName":trueName,
            "phoneNumber":phoneNumber,
            "userName":userName,
            "password":password
        },
        dataType: 'json',
        url: "<?=CURRENT_DIR?>/index_add_user.php",
        success: function (msg) {
          layer.alert("恭喜你，注册成功，前往登录吧！", {icon:0,title: '【提示】'});

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
