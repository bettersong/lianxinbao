<?php
//引入数据库模型
require $_SERVER['DOCUMENT_ROOT']."/core/Model_Ajax.class.php";
// // 获取ajax发送来的值


$userName = $_POST['userName'];

$mysqlModel = new Model('user');

$res = $mysqlModel->select($userName,'userName');

if ($res == false) {
	$msg = 'error';
}
else{
	$msg = 'success';
}
// else{
// 	$msg = 'error';
// }
// echo json_encode($msg);
echo json_encode($msg);




