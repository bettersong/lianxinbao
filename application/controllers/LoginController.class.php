<?php
class LoginController extends Controller
{
    // 首页方法，测试框架自定义DB查询queryString
    public function index()
    {
    	$mysqlModel = new LoginModel();
 		$provinceNameArr = $mysqlModel ->getProvince();
		
		$this->assign('provinceNameArr', $provinceNameArr);
    }
    

}