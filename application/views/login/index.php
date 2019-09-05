<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录</title>
<link href="/public/css/login.css?<?=rand(1,99999)?>" rel="stylesheet"  type="text/css"/>
<link rel="stylesheet" href="/public/css/style<?=$_m?>.css?v=<?=rand(1,999999) ?>" type="text/css" />
<script type="text/javascript" src="/public/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/public/js/login.js"></script>
</head>

<body style="background:url(/public/images/bj.jpg) no-repeat center/100% 100%;overflow: hidden">

<div id="tab">
  <ul class="tab_menu">
    <li class="selected">用户登录</li>
  </ul>
  <div class="tab_box">

    <div>
      <div class="stu_error_box" style="color:#f30">测试期间任意账号和密码可登陆</div>
      <form action="" method="post" class="stu_login_error">
        <div id="bumen">
          <label>部&nbsp;&nbsp;&nbsp;门：</label>
          <select class="bumen" id="select" nullmsg="请选择部门！" > 
                <option value="0">请选择</option>
          </select>
        </div>
        <div id="username">
          <label>用户名：</label>
          <input type="text" id="stu_username_hide" name="username" value="输入用户名" nullmsg="用户名不能为空！" datatype="s6-18" errormsg="用户名范围在6~18个字符之间！" sucmsg="用户名验证通过！"/>
        </div>
        <div id="password">
          <label>密&nbsp;&nbsp;&nbsp;码：</label>
          <input type="password" id="stu_password_hide" name="password" value="输入密码" nullmsg="密码不能为空！" datatype="*6-16" errormsg="密码范围在6~16位之间！" sucmsg="密码验证通过！"/>
        </div>
        <div id="code" style="display:none;">
          <label>验证码：</label>
          <input type="text" id="stu_code_hide" name="code"  value="输入验证码" nullmsg="验证码不能为空！" datatype="*4-4" errormsg="验证码有4位数！" sucmsg="验证码验证通过！"/>
          <img src="/public/images/captcha.jpg" title="点击更换" alt="验证码占位图"/> </div>
        <div id="remember">
          <input type="checkbox" name="remember">
          <label>记住密码</label>
        </div>
        <div id="login">
          <button id="submit" type="submit" >登录</button>
        </div>
      </form>
    </div>


  </div>
</div>

<script>
  
//var bManageArray = <?=$bManageJson?>;
var arr = ['教务处','保卫处','主任室'];

console.log(arr)


var lineNum = arr;
//console.log(lineNum);
var collect = document.getElementById("select")
var old = collect.innerHTML
function show() {
    var lineNu = " "
    for (var j = 0; j < lineNum.length; j++) {
        lineNu += '<option>' + lineNum[j] + '</option>';
    }
    collect.innerHTML = old + lineNu;
} 
show();
</script>
<script>
$("#submit").click(function(e) {
    window.location.href="/index/index&login=success";
});
window.onload=function(){
    $('.bottom_banner').hide();
    $('.footer').hide();
  }
</script>
</body>
</html>
