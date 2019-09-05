<?php //这是测试的控制器，可以删除。
class UserCenterController extends Controller
{
    // 首页方法，测试框架自定义DB查询queryString
    public function userAdmin()
    {  
	   
	   
		 
		// //获取人员信息，及其对应的职位及部门,人员信息,职位名称,部门名称
		 $mysqlModel = new UserCenterModel("user","department"); 
		 $userInfoArr = $mysqlModel ->unionSelectAll2('userDepartmentId','departmentId');
		
        //部门信息
		$data['depUnitId']=$_SESSION['userInfo']['depUnitId'];
		$mysqlModel = new UserCenterModel("department"); 
		$bumenArr = $mysqlModel ->selectByCondition($data," and departmentName !='' ");
		
	    
		 
		$this->assign('userInfoArr', $userInfoArr);
        $this->assign('bumenArr', $bumenArr);
    }
	 // 首页方法，测试框架自定义DB查询queryString
    public function departmentAdmin()
    {  
		
        //部门信息
		$data['depUnitId']=$_SESSION['userInfo']['depUnitId'];
		$mysqlModel = new UserCenterModel("department"); 
		$bumenArr = $mysqlModel ->selectByCondition($data);
		
	    
		 
        $this->assign('bumenArr', $bumenArr);
    }
    
}