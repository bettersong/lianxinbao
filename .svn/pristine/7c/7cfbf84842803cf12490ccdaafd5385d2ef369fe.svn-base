<?php session_start();
//引入数据库模型
require $_SERVER['DOCUMENT_ROOT']."/core/Model_Ajax.class.php";
// // 获取ajax发送来的值


$username = $_POST['username'];
$password = $_POST['password'];

$data['userName'] = $username;
$data['password'] = $password;
$data['applyPass'] = 1;
$mysqlModel = new Model('user');
//$res返回的是一个二维数组
$res = $mysqlModel->selectByCondition($data,' limit 1');

$msg = "error";
if (empty($res)){//登陆失败
	
	
} 
else{//登陆成功
	
	$_SESSION['userInfo'] = $res[0];
	//获取登录后的部门id
	$departmentId = $_SESSION['userInfo']['userDepartmentId'];
	//根据部门Id找到unitId
	$dataDepartment['departmentId'] = $departmentId;
	$getUnitModel =  new Model('department','unit','province');
	$result = $getUnitModel->unionSelectAll_3('depUnitId','unitId','unitProvinceId','provinceId');// $getUnitModel-> 
	//用户信息和单位及部门信息合并。
	$_SESSION['userInfo'] = array_merge($_SESSION['userInfo'],$result[0]);//$_SESSION['userInfo'].push($result[0]);
	//$_SESSION['userInfo']['depUnitId']=$unitId;
	
	$msg = "success";	
}


echo json_encode($msg);





