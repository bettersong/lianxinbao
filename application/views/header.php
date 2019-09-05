<?php 
  session_start();
  $trueName = $_SESSION['userInfo']["trueName"];
  $isAdmin = $_SESSION['userInfo']["isAdmin"];
?>
<script type="text/javascript" src="/public/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/plugins/layer/layer.js"></script>
<link rel="stylesheet" href="/plugins/layer/layer.css?v=3.0.3303" id="layuicss-skinlayercss">

<div class="header">
  <div class="head" id="head">
    <div class="h-logo" ></div>
    <div class="h-inner" ></div>
  </div>
  <div class="header-login">
    <ul>
      <li><a href="/login/index">登录</a>&nbsp;&nbsp;<span class="splitLine">|</span></li>
      <li><a href="/register/index">注册</a></li><br>
    </ul>
    <ul>
      <li>欢迎您【<span><?php echo $trueName; ?></span>】<span class="splitLine">|</span>
      </li>
      <li><span id="logout">退出</span></li>
    </ul>
  </div>
  <div id="menu">
    <ul class="nav">
      <li class="nav_li"><a href="/index/index">首页</a> </li>
      <li class="nav_li"><a href="javascript:void">大数据监督</a>
         <ul class="sub-nav" style="width:180px">
          <li style="width:100%"><a href="http://lianxinbao.66share.com/" style="width:100%" target="_blank">实用监督功能</a></li>
          <!--<li style="width:100%"><a href="/bigData/shujudiaoyong" style="width:100%">数据调用功能</a></li>-->
          <li style="width:100%"><a href="/bigData/dangneigongbao_detail&year=2018&type=dydwqk" style="width:100%">历年党内统计公报</a></li>
          <!--<li style="width:100%"><a href="/bigData/dangneigongbao" style="width:100%">2016年中国共产党党内统计公报</a></li>-->
        </ul>
      </li>
      <li class="nav_li"><a href="javascript:void">廉政信息</a>
         <ul class="sub-nav">
          <li><a href="/lianzhengNews/lianzhengNews&type=lztt">廉政头条</a></li>
          <li><a href="/lianzhengNews/catloglistImg&type=rdgz">热点关注</a></li>
          <li><a href="/lianzhengNews/catloglistImg&type=zyxw">主要新闻</a></li>
        </ul>
      </li>
      <li class="nav_li"><a href="javascript:void">廉心沙龙</a>
        <ul class="sub-nav">
          <li><a href="/lianxinshalong/catloglistVideo&type=lzgkk">廉政公开课</a></li>
          <li><a href="/lianxinshalong/catloglistVideo&type=sltw">实例提问</a></li>
          <li><a href="/lianxinshalong/catloglistVideo&type=hdjl">互动交流</a></li>
          <li><a href="/lianxinshalong/catloglistVideo&type=gjsy">国际视野</a></li>
          <li><a href="/lianxinshalong/catloglistVideo&type=ztsl">主题沙龙</a></li>
        </ul>
      </li>
      <li class="nav_li"><a href="javascript:void">廉心讲堂</a>
        <ul class="sub-nav">
          <li><a href="/lianxinjiangtang/expertAppearance&type=zjfc">专家风采</a></li>
          <li><a href="/lianxinjiangtang/catloglistVideo&type=jszjxt">教授专家学堂</a></li>
          <li><a href="/lianxinjiangtang/catloglistVideo&type=ptxsxt">普通学生学堂</a></li>
          <li><a href="/lianxinjiangtang/catloglistVideo&type=jsbs">讲三本书</a></li>
        </ul>
      </li>

      <li class="nav_li"><a href="javascript:void">廉政考试</a>
        <!-- <ul class="sub-nav">
          <li><a href="/lianzhengExam/examination">廉政知识理论考试</a></li>
          <li><a href="/lianzhengExam/results">考试成绩查看</a></li>
        </ul> -->
      </li>
      <li class="nav_li" style="padding: 0 2px;"><a href="javascript:void">廉政娱乐测试</a>
        <ul class="sub-nav">
          <li style="width:160px"><a href="/yuleTest/politicalFate" style="width:150px">职业前程（安全指数）测试</a></li>

        </ul>
      </li>
      <li class="nav_li"><a href="javascript:void">学习资料</a>
        <ul class="sub-nav">
          <li><a href="/study/index&type1=sjdjs&type2=sjdbg">十九大精神</a></li>
          <li><a href="/study/zhengcefagui">政策法规</a></li>
          <li><a href="/study/zhengzhililun">政治理论</a></li>
          <li><a href="/study/wenhuasuyang">文化素养</a></li>
          <li><a href="/study/hongseshuyuan">红色书院</a></li>
          <li><a href="/study/hongseyingyuan">红色影院</a></li>
        </ul>
      </li>
      <li class="nav_li"><a href="javascript:void">专题栏目</a>
        <ul class="sub-nav">
          <li style="width:150px"><a href="/zhuantilanmu/studyShijiuda" style="width:135px">学习宣传贯彻十九大精神</a></li>

        </ul>
      </li>
      <li class="nav_li"><a href="javascript:void">警钟长鸣</a>
        <ul class="sub-nav">
          <li><a href="/jingzhongchangming/catloglistImg&type=tbbg">通报曝光</a></li>
          <!--<li><a href="/jingzhongchangming/catloglistVideo&type=tszs">他山之石</a></li>-->

        </ul>
      </li>
      <li class="nav_li"><a href="javascript:void">廉心先锋</a>
        <ul class="sub-nav">
          <li><a href="/lianxinxianfeng/catloglistVideo&type=xfgs">先锋故事</a></li>
          <li><a href="/lianxinxianfeng/catloglistVideo&type=xfwh">先锋文汇</a></li>
          <li><a href="/lianxinxianfeng/catloglistVideo&type=xflt">先锋论坛（观点）</a></li>
          <li><a href="/lianxinxianfeng/xianfengdianxingku">先进典型库</a></li>
        </ul>
      </li>
      <li class="nav_li"><a href="https://www.baidu.com/" target="_blank">廉心书屋</a>
      </li>
      <li class="nav_li" id="personalCenter" style="border:none">个人中心
<!--         <ul class="sub-nav">
          <li><a href="/userCenter/change_password">修改密码</a></li>
          <li><a href="/userCenter/department_manage">部门管理</a></li>
          <li><a href="/userCenter/index">用户管理</a></li>
        </ul> -->
      </li>
    </ul>
  </div>
</div>
<script src="/public/js/main.js?<?=rand(1,99999)?>"></script>
<script type="text/javascript">
  $(function () {
    // 根据是否登录，在header显示不同的信息
    var trueName = "<?=$trueName?>";
    var isAdmin = "<?=$isAdmin?>";
    if (typeof trueName == "undefined" || trueName == null || trueName == "") {
      $(".header-login ul").eq(0).css("display","inline-block");
      $(".header-login ul").eq(1).css("display","none");
    }
    else{
      $(".header-login ul").eq(0).css("display","none");
      $(".header-login ul").eq(1).css("display","inline-block");
      console.log(trueName);
    }

    //退出登录
    $("#logout").click(function () {
      $.ajax({
        async: false,
        data: {

        },
        type: "POST",
        dataType: 'json',
        url: "/application/views/login/login_out.php",
        success: function(data) {
          window.location.href = '/login/index';
        },
        error:function (data) {
          // body...
        }
      });
      // alert(trueName+"被注销了");
    });

    //点击个人中心时，判断是否登录
    $("#personalCenter").click(function () {
      if (typeof trueName == "undefined" || trueName == null || trueName == "") {
        window.location.href = "/login/index";
      }
      else{
        //判断是否是管理员
        if (isAdmin == 1) {
          window.location.href = "/userCenter/changePassword";
        }
        else{
          window.location.href = "/userCenter/changePassword";
        }
      }




    });


  })
  

</script>