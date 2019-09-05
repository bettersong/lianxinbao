<?php session_start();
//引入数据库模型
require $_SERVER['DOCUMENT_ROOT']."/core/Model_Ajax.class.php";
// 获取ajax发送来的值

$action = $_GET['act'];//动作类型：添加、更新、删除
//添加部门
if($action=="add"){
	$depUnitId = $_SESSION['userInfo']['depUnitId'];
	$data["departmentName"] = $_POST["departmentName"];
	$data["depUnitId"] = $depUnitId;
	//初始化数据库模型,并操作数据库
	$mysqlModel = new Model("department");
	$res = $mysqlModel->add($data);
	
	$msg="success";
	if(!$res)$msg = "error";
	
	echo json_encode($msg);
}//更新部门
else if($action=="update"){
	
	$id = $_POST["departmentid"];
	$data["departmentName"] = $_POST["departmentName"];
	 
	//初始化数据库模型,并操作数据库
	$mysqlModel = new Model("department");
	
	$res = $mysqlModel->update($id,$data,"departmentId");
	
	$msg="success";
	if(!$res)$msg = "error";
	
	
	echo json_encode($msg);
	
}
//删除部门
else if($action=="delete"){
	$departmentid = $_POST["departmentid"];
	//初始化数据库模型,并操作数据库
	$id = $_POST["departmentid"];
	 
	//初始化数据库模型,并操作数据库
	$mysqlModel = new Model("department");
	
	$res = $mysqlModel->delete($id,"departmentId");
	
	$msg="success";
	if(!$res)$msg = "error";
	
	
	echo json_encode($msg);
	
}
//检查被删除的部门是否包含用户
else if($action=="checkIsHasUser"){

	$departmentid = $_POST["departmentid"];
	//初始化数据库模型,并操作数据库
	$mysqlModel = new Model("user");
	$data["userDepartmentId"] = $departmentid;
	$userNums = $mysqlModel->selectRowCount($data);
	
 
	
	echo json_encode($userNums);
	
}

 
 






