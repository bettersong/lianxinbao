<?php 
  session_start();
  $unitId = $_SESSION['userInfo']['userDepartmentId'];
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
  <!-- <?php var_dump($userInfoArr); ?> -->

<!--中间部分main-->
<div class="B_main">
  <?php include APP_PATH."/application/views/userCenter/left".$_m.".php"; //本栏目的公共左侧 ?>
  <div class="B_main_right">
    <div class="BR_head">
      <div class="BR_head_left"></div>
      <span>你当前的位置：个人中心-人员管理</span> 
    </div>
    <div class="right2_main" >
      <div id="right2_main_content" style="padding:20px 20px;min-height:355px;">
        
        <table class="table" cellpadding="0" cellspacing="0">
          <tr>
            <th>编号</th>
            <th>登录账号</th>
            <th>真实姓名</th>
            <th>所属部门</th>
            <th>登录密码</th>
            <th>联系方式</th>
            <!--<th>类别</th>-->
            <th>编辑</th>
            <th>重置</th>
            <th>删除</th>
          </tr>
          <?php 
            $i=1;
            foreach ($userInfoArr as $key => $value) {
            ?>
            <!--      -->
            <tr>
              <td ids = "<?=$value['userId']?>"><?php echo $i++; ?></td>
              <td class="disabled">
                <input type="text" name="userName" disabled  value="<?=$value['userName']?>">
              </td>
              <td class="disabled">
                <input type="text" name="trueName" disabled value="<?=$value['trueName']?>">
              </td>
               <td>
               <!-- <input type="text" name="departmentId" disabled value="<，?=$value['departmentName']?>">-->
               <select name="station"  class="department" style="width:;">
               <?php foreach($bumenArr as $index => $bumen){//遍历部门?>
                
               	<option value="<?=$bumen['departmentId']?>" <?php if($bumen['departmentId']==$value['departmentId'])echo ' selected ';?>><?=$bumen['departmentName']?></option>
               <?php }?>
               </select>
              </td>
              <td>
                <input type="password" name="password" value="<?=$value['password']?>">
              </td>
              
              <td>
                <input type="text" name="phoneNumber" value="<?=$value['phoneNumber']?>">
              </td>
             
              <!--<td>
                <input type="text" name="isAdmin" value="<?=$value['isAdmin']?>">
              </td>-->
              <td>
                <input type="button" name="update" class="update" value="更新">
              </td>
              <td>
                <input type="button" name="reset" class="reset" value="重置密码">
              </td>
              <td>
                <input type="button" name="delete" class="delete" <?php echo $value['isAdmin'].' ';if($value['isAdmin']
)echo 'disabled';?> value="删除">
                
              </td>
            </tr>
            <?php
              } 
            ?>
        </table>
      </div>
    </div>
  </div>
</div>
<div class="backTop" id="backTop"></div>
<script type="text/javascript">
  $(function () {
    
    var CURRENT_DIR = "<?=CURRENT_DIR?>";
    var unitId = "<?=$unitId?>";
 

   //提示不可编辑
   $("td.disabled").click(function(e) {
       layer.alert("该项不可编辑。", {icon:5,title: '【提示】'}); 
    });

    //更新
    $(".update").click(function () {
      var id = $.trim( $(this).parent("td").parents("tr").eq(0).find("td").eq(0).attr("ids"));
      var userName = $.trim( $(this).parents("tr").find("input[name='trueName']").eq(0).val());
      var password = $.trim( $(this).parents("tr").find("input[name='password']").eq(0).val());
      var trueName = $.trim( $(this).parents("tr").find("input[name='trueName']").eq(0).val());
      var phoneNumber = $.trim( $(this).parents("tr").find("input[name='phoneNumber']").eq(0).val());
      var departmentId = $.trim( $(this).parents("tr").find(".department option:selected").val());
	  
      //alert("id="+id+" userName="+userName+" password="+password+" trueName="+trueName+" phoneNumber="+phoneNumber+" departmentId="+departmentId);
      $.ajax({
        async: false,
        data: {
          "id":id,
          "password":password,
          "phoneNumber":phoneNumber,
          "departmentId":departmentId
        },
        type: "POST",
        dataType: 'json',
        url: "<?=CURRENT_DIR?>/userAdmin_action.php?act=update",
        success: function(msg) {
          if(msg=="success"){
    			  layer.alert("更新成功。", {icon:1,title: '【提示】'});
            setTimeout("window.location.reload();",1500);
    		  }
    		  else{
    			   layer.alert("无更新。", {icon:0,title: '【提示】'}); 
    		  }
        },
        error:function (data) {
          layer.alert("未知错误", {icon:0,title: '【提示】'});
        }
      });

    })

    // 重置密码
    $(".reset").click(function () {

      var id = $.trim( $(this).parent("td").parents("tr").eq(0).find("td").eq(0).attr("ids"));
      var password = $.trim( $(this).parents("tr").find("input[name='password']").eq(0).val());
      // alert(id+"*****"+password);
      $.ajax({
        async: false,
        data: {
          "id":id,
          "password":password
        },
        type: "POST",
        dataType: 'json',
        url: "<?=CURRENT_DIR?>/userAdmin_action.php?act=reset",
        success: function(data) {
          layer.alert("重置密码成功", {icon:1,title: '【提示】'});
          setTimeout("window.location.reload();",1500);

        },
        error:function (data) {
          layer.alert(msg.status + "服务繁忙，请刷新或稍后再试。", {icon:1,title: '【提示】'});

        }
      });
    })
   
    // 删除
    $(".delete").click(function () {
      var id = $.trim( $(this).parent("td").parents("tr").find("td").eq(0).attr("ids"));
	    var delObj = $(this).parents("tr");
      //alert(id);
	    layer.confirm('确认删除？', {icon: 3, title:'提示'}, function(index){//点击了确认执行后面的代码
    	  layer.close(index);//关闭弹出框
  		  $.ajax({
    			async: false,
    			data: {
    			  "id":id,
    			},
    			type: "POST",
    			dataType: 'json',
    			url: "<?=CURRENT_DIR?>/userAdmin_action.php?act=delete",
    			success: function(data) {
    			  // alert(data);
    			  layer.alert("删除成功。", {icon:1,title: '【提示】'}); 
    			  delObj.remove();
            setTimeout("window.location.reload();",1500);
            
    			},
    			error:function (data) {
            layer.alert(msg.status + "服务繁忙，请刷新或稍后再试。", {icon:0,title: '【提示】'}); 
    			}
  		  });
	    });
    });

  })
</script>