<?php  session_start();
//引入数据库模型
require $_SERVER['DOCUMENT_ROOT']."/core/Model_Ajax.class.php";
// 获取ajax发送来的值

$oldPhone= $_POST['oldPhone'];
$newPhone = $_POST['newPhone'];
$userId = $_SESSION['userInfo']["userId"];

$data_check['userId'] = $userId;
$data_check['phoneNumber'] = $oldPhone;



//初始化数据库模型,并操作数据库
$mysqlModel = new Model("user");

//判断原始密码是否正确
$res = $mysqlModel->selectByCondition($data_check,' limit 1');
if (empty($res)){//输入的原始密码不正确
  $msg = "error";
}
else{
	$msg = "success";
	$data_update['userId'] = $userId;
    $data_update['phoneNumber'] = $newPhone;
	$res2 = $mysqlModel->update($userId,$data_update,"userId");
	
 	if(empty($res2))$msg = 'changeFail';
}


echo json_encode($msg);





