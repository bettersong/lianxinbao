<?php session_start();
//引入数据库模型
require $_SERVER['DOCUMENT_ROOT']."/core/Model_Ajax.class.php";
// 获取ajax发送来的值

$id = $_POST['id'];//获取操作的Id值
$action = $_GET['act'];//动作类型：添加、更新、删除
//添加部门
if($action=="reset"){
	
	$data['userId'] = $id;
	$data['password'] = 123456;
	//初始化数据库模型,并操作数据库
	$mysqlModel = new Model("user");

	$res = $mysqlModel->update($id,$data,"userId");

	$msg="success";
	if(!$res)$msg = "error";
	echo json_encode($msg);

	
}//更新部门
else if($action=="update"){
	
	$data["password"] = $_POST["password"];
	$data["phoneNumber"] = $_POST["phoneNumber"];
	$data["userDepartmentId"] = $_POST["departmentId"];//userDepartmentId departmentId

	//初始化数据库模型,并操作数据库
	$mysqlModel = new Model("user");

	$res = $mysqlModel->update($id,$data,"userId");

	$msg="success";
	if(!$res)$msg = "error";
	
	
	echo json_encode($msg);
	
}
//删除部门
else if($action=="delete"){
	$mysqlModel = new Model("user");

	$res = $mysqlModel->delete($id,'userId');

	$msg="success";
	if(!$res)$msg = "error";
	
	
	echo json_encode($msg);
	
}


 
 






