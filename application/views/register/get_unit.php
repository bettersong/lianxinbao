<?php
//引入数据库模型
require $_SERVER['DOCUMENT_ROOT']."/core/Model_Ajax.class.php";
// // 获取ajax发送来的值


$provinceId = $_POST['provinceId'];

$mysqlModel = new Model('unit');
$res = $mysqlModel->getUnit($provinceId);




echo json_encode($res);





