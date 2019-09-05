<?php
//引入数据库模型
require $_SERVER['DOCUMENT_ROOT']."/core/Model_Ajax.class.php";
// // 获取ajax发送来的值


$provinceName = $_POST['province'];

$mysqlModel = new Model('unit');
$res = $mysqlModel->getUnit($provinceName);




echo json_encode($res);





