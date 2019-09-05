<?php
//引入数据库模型
require $_SERVER['DOCUMENT_ROOT']."/core/Model_Ajax.class.php";
// // 获取ajax发送来的值

$provinceId = $_POST['provinceId'];
$unitName = $_POST['unitName'];
$data['unitName'] = $unitName;
$data['unitProvinceId'] = $provinceId;

$mysqlModel = new Model('unit');
//判断单位是否存在

$msg = "";
$res = $mysqlModel->selectByCondition($data," and unitStatus = 1");
if (empty($res)) {//单位处于申请状态或者未注册
	//$msg = 'success';
	//判断单位是否已经提交了申请
	$result = $mysqlModel->selectByCondition($data," and unitStatus = 0");
	if (empty($result)) {//单位未注册
		$msg = 'success';
	}
	else{//单位审核中
		$msg = 'checking';
	}
}
else{//单位已经存在
	$msg = 'exist';
}



echo json_encode($msg);




