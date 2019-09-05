<?php  session_start();?>
<div class="B_main_left">
  <div class="BL_head"> <span>个人中心</span> </div>
    <div class="userInfo" style="padding:5px 5px 5px 32px;color:#333;background:#ddd;">所属单位：<?=$_SESSION['userInfo']["unitName"]?></div>
	<div class="BL_one ripple-effect ripple-red changePassword"><a href="/userCenter/changePassword">修改密码</a>
	 </div>
	 <div class="BL_one ripple-effect ripple-red changePassword"><a href="/userCenter/changePhone">修改联系方式</a>
	 </div>
  	<div class="BL_one ripple-effect ripple-red bumenAdmin"><a href="/userCenter/departmentAdmin">部门管理</a>
  	</div>
  	<div class="BL_one ripple-effect ripple-red userAdmin"><a href="/userCenter/userAdmin">人员管理</a>
  	</div>
</div>
<script type="text/javascript">
	var isAdmin = "<?=$_SESSION['userInfo']["isAdmin"]?>";
	if (isAdmin ==1) {
	}
	else{
		$(".bumenAdmin,.userAdmin").css("display","none");
 	}
</script>