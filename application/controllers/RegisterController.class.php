<?php
class RegisterController extends Controller
{
    // 首页方法，测试框架自定义DB查询queryString
    public function index()
    {
    	$mysqlModel = new RegisterModel();
 		$provinceArr = $mysqlModel ->getProvince();
		
		//print_r($gongBaoYearArr);
		$this->assign('provinceArr', $provinceArr);
    }
    public function apply_admin()
    {
    	$mysqlModel = new RegisterModel();
 		$provinceArr = $mysqlModel ->getProvince();
		
		//print_r($gongBaoYearArr);
		$this->assign('provinceArr', $provinceArr);
    }



}