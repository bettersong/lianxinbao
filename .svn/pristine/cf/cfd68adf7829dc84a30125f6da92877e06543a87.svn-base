<?php session_start();
  $userName = $_SESSION['userInfo']["userName"]; 
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
      <span>你当前的位置：个人中心<span id="srumbnavArrow">》</span>部门管理</span> 
    </div>
    <div class="right2_main">
      <div id="right2_main_content">
        <!--<div class="userInfo">所属单位：清华大学</div>-->
        <div id="bumenBox">
        <?php foreach($bumenArr as $index => $bumen){//遍历部门?>
        <div class="bumenInfo oldPassword">
            <label>部门名称： </label>
            <input type="text" class="bumen" value="<?=$bumen['departmentName']?>" oldVal="<?=$bumen['departmentName']?>" departmentId="<?=$bumen['departmentId']?>" >
            <span class="action update">更新</span>
            <span class="action <?php if(count($bumenArr)>1)echo "delete";else echo "disabled";?>">删除</span>
         </div>
        <?php }?>
      </div>
        <span class="action add">+添加</span>
      
         
      </div>
    </div>
  </div>
</div>


         
         
<div class="backTop" id="backTop"></div>
<script type="text/javascript">
//只要点击了弹出框的“确定”就刷新。
$(".layui-layer-btn0").live('click',function(e) {
	if($(this).next("a").length<=0)window.location.reload();
    
});
//添加部门框
var added = false;//如果已经添加了一个空的添加框，则不执行
$(".add").click(function(e) {
    if(!added){
		var addInfo = '<div class="bumenInfo oldPassword"><label>部门名称： </label><input type="text" class="bumen" value=""><span class="action addSubmit">确认添加</span></div>';
		$("#bumenBox").append(addInfo);
		added = true;
	}
	
});
 //提交添加部门
$(".addSubmit").live('click',function(e) {
    var departmentName = $.trim( $(this).parents(".bumenInfo").find(".bumen").eq(0).val() );
	if(departmentName==""){
		layer.alert("部门名称不能为空。", {icon:5,title: '【提示】'});
		return false;
	}
	//添加部门
	$.ajax({
	  async: false,
	  data: {
		"departmentName":departmentName
	  },
	  type: "POST",
	  dataType: 'json',
	  url: "<?=CURRENT_DIR?>/departmentAdmin_action.php?act=add",
	  success: function(msg) {
		// alert(data);
		layer.alert("添加成功。", {icon:1,title: '【提示】'}); 
		//alert("添加成功！");//
 		 
	  },
	  error:function (msg) {
	  	layer.alert("错误", {icon:0,title: '【提示】'}); 
	  }
	});//end ajax
	
});
//更新
$(".update").click(function () {
     var departmentid = $(this).parents(".bumenInfo").find(".bumen").eq(0).attr("departmentid");
	 var departmentName =$.trim( $(this).parents(".bumenInfo").find(".bumen").eq(0).val() );//更新的值
	 var oldVal =$.trim( $(this).parents(".bumenInfo").find(".bumen").eq(0).attr("oldVal") );//原来的值
     if(departmentName == oldVal) {
		 layer.alert("未更新。", {icon:0,title: '【提示】'}); 
		 return false;
	 }
      $.ajax({
        async: false,
        data: {
          "departmentid":departmentid,
          "departmentName":departmentName
        },
        type: "POST",
        dataType: 'json',
        url: "<?=CURRENT_DIR?>/departmentAdmin_action.php?act=update",
        success: function(msg) {
          if(msg=="success"){
			  layer.alert("更新成功。", {icon:1,title: '【提示】'}); 
		  }
		  else{
			   layer.alert("未知故障。", {icon:0,title: '【提示】'}); 
		  }
        },
        error:function (data) {
          alert("未知错误！");
        }
      });

});
// 删除
$(".delete").click(function () {
  var departmentid = $(this).parents(".bumenInfo").find(".bumen").eq(0).attr("departmentid");
   var departmentName = $(this).parents(".bumenInfo").find(".bumen").eq(0).val();
  var delObj = $(this).parents(".bumenInfo");
  //alert(id);
  //先判断该部门下是否有用户
  var hasuser=false;
  $.ajax({
	async: false,
	data: {
      "departmentid":departmentid
    },
	type: "POST",
	dataType: 'json',
	url: "<?=CURRENT_DIR?>/departmentAdmin_action.php?act=checkIsHasUser",
	success: function(userNums) {
	  if(userNums>0){
		  layer.alert("该部门下有"+userNums+"位用户，请先移出用户再删除。", {icon:2,title: '【提示】'}); 
		  hasuser = true;
		   return false;
	  }
	},
	error:function (msg) {
	  alert(msg.status + "服务繁忙，请刷新或稍后再试。");
	}
  });//end ajax
  if(hasuser) return false;
  //执行删除
  layer.confirm('该部门下没有用户，可以删除。<br><br>确认删除？', {icon: 3, title:'提示'}, function(index){//点击了确认执行后面的代码
	  layer.close(index);//关闭弹出框
	  $.ajax({
		async: false,
		data: {
		  "departmentid":departmentid,
		},
		type: "POST",
		dataType: 'json',
		url: "<?=CURRENT_DIR?>/departmentAdmin_action.php?act=delete",
		success: function(data) {
		  // alert(data);
		  layer.alert("删除成功。", {icon:1,title: '【提示】'}); 
		  //delObj.remove();
		  // window.reload();
		},
		error:function (msg) {
		  alert(msg.status + "服务繁忙，请刷新或稍后再试。");
		}
	  });//end ajax
  	});//end layer
});//end delete

  

</script>