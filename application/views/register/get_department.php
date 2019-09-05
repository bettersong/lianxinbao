<?php
//引入数据库模型
require $_SERVER['DOCUMENT_ROOT']."/core/Model_Ajax.class.php";
// // 获取ajax发送来的值


$unitId = $_POST['unitId'];

$mysqlModel = new Model('department');
$res = $mysqlModel->getDepartment($unitId);


echo json_encode($res);





