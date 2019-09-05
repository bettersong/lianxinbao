<?php
//引入数据库模型
require $_SERVER['DOCUMENT_ROOT']."/core/Model_Ajax.class.php";
// 获取ajax发送来的值


$id = $_POST["id"];
$data["userName"] = $_POST["userName"];
$data["password"] = $_POST["password"];
$data["trueName"] = $_POST["trueName"];
$data["phoneNumber"] = $_POST["phoneNumber"];
$data["userDepartmentId"] = $_POST["departmentId"];//userDepartmentId departmentId

//初始化数据库模型,并操作数据库
$mysqlModel = new Model("user");

$res = $mysqlModel->update($id,$data,"userId");

$msg="success";
if(!$res)$msg = "error";


echo json_encode($msg);





