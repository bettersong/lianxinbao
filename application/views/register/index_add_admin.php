<?php
//引入数据库模型
require $_SERVER['DOCUMENT_ROOT']."/core/Model_Ajax.class.php";
// 获取ajax发送来的值
$departmentName = $_POST['departmentName']; 

$data['trueName'] = $_POST['trueName'];
$data['userName'] = $_POST['userName'];
$data['phoneNumber'] = $_POST['phoneNumber']; 		 
$data['password'] = $_POST['password'];
$data['isAdmin'] = 1;//$_POST['isAdmin'];
$data['applyPass'] = 0;
//获取的单位Id
$dataUnit['unitProvinceId'] = $_POST['provinceId'];
$dataUnit['unitName'] = $_POST['unitName'];
$dataUnit['unitStatus'] = 0;
$getUnitId = new Model("unit");
$unitId = $getUnitId->add($dataUnit);
//获取部门Id
$dataDepartment['departmentName'] = $departmentName;
$dataDepartment['parentId'] = 0;
$dataDepartment['depUnitId'] = $unitId;
$dataDepartment['depApplyPass'] = 0;
$getdepartmentId = new Model("department");
$departmentId = $getdepartmentId->add($dataDepartment);

//插入到用户表中
$data['userDepartmentId'] = $departmentId;
$mysqlModel = new Model("user");
$res = $mysqlModel->add($data);



echo json_encode($res);


