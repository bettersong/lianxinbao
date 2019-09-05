<?php
//引入数据库模型
require $_SERVER['DOCUMENT_ROOT']."/core/Model_Ajax.class.php";
// 获取ajax发送来的值

$data['userDepartmentId'] = $_POST['departmentId']; 
$data['trueName'] = $_POST['trueName'];
$data['userName'] = $_POST['userName'];
$data['phoneNumber'] = $_POST['phoneNumber']; 		 
$data['password'] = $_POST['password'];
$data['isAdmin'] = 0;//$_POST['isAdmin'];
$data['applyPass'] = 1;

$mysqlModel = new Model("user");
$res = $mysqlModel->add($data);


echo json_encode($res);


