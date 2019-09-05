<?php 

 

class StudyController extends Controller
{
     
	
 	public function index()
    {
		
		//***请设置：id和内容的字段名称
		$fieldName_id = "studyDataId";
		$fieldName_type1 = "studyDataType1";
		$fieldName_type2 = "studyDataType2";
		$fieldName_title = "studyDataTitle";
		$fieldName_content = "studyDataContent";
		$fieldName_pushTime = "studyDataTime";
		//end 设置
		/*
		//获取分页需要的信息
		$page = $_GET['page']==''?1:$_GET['page'];
        $limitStart = ($page-1)*ItemNumPerPage_catloglistImg;
		$limitLen = ItemNumPerPage_catloglistImg;
		
		//***请设置：id和内容的字段名称
		$mysqlModel = new Model("studydata");
		
		$data["studyDataType1"]=$_GET['type1'];
		$data["studyDataType2"]=$_GET['type2'];
 	    $catlogListArr = $mysqlModel ->selectByCondition($data,' limit '.$limitStart.','.$limitLen);
	   
		
		 //print_r($studyDataArr);
		//设置变量，前端可用
		$this->assign('catlogListArr', $catlogListArr);*/
		//获取分页需要的信息
		$page = $_GET['page']==''?1:$_GET['page'];
        $limitStart = ($page-1)*ItemNumPerPage_catloglistImg;
		$limitLen = ItemNumPerPage_catloglistImg;
		
		$mysqlModel = new Model("studydata");
		
		$data["studyDataType1"]=$_GET['type1'];
		$data["studyDataType2"]=$_GET['type2'];
  		$catlogListArr_temp = $mysqlModel ->selectByCondition($data,' limit '.$limitStart.','.$limitLen);
		//获取分页的页数
		$rowCount = $mysqlModel ->selectRowCount($data);//分页所需的总记录数
        $totalPage = ceil($rowCount/ItemNumPerPage_catloglistImg);//分页页数，ceil向上取整
		$this->assign('totalPage', $totalPage);//分页的总页数
		
		//遍历从数据库中获取的数据，修改和设置一下信息
		foreach($catlogListArr_temp as $index => $value){
			//##设置id和title
		    $catlogListArr[$index]['id'] = $value[$fieldName_id];
			$catlogListArr[$index]['title'] = $value[$fieldName_title];
			$catlogListArr[$index]['content'] = $value[$fieldName_content];
			$catlogListArr[$index]['pushtime'] = $value[$fieldName_pushTime];
			$content = $value[$fieldName_content];
			 
		}
		
		//print_r($catlogListArr);
		//设置变量，前端可用
 		$this->assign('catlogListArr', $catlogListArr);
		$this->assign('totalPage', $totalPage);//分页的总页数

         
    }
	
     
	// 详情页
	public function detailText()
    {
		//***请设置：id和内容的字段名称
		$fieldName_id = "studyDataId";
		$fieldName_type1 = "studyDataType1";
		$fieldName_type2 = "studyDataType2";
		$fieldName_title = "studyDataTitle";
		$fieldName_content = "studyDataContent";
		$fieldName_pushTime = "studyDataTime";
		//end 设置
		
		$mysqlModel = new Model("studydata");
		$data[$fieldName_id]=$_GET['id'];
		$data[$fieldName_type1]=$_GET['type1'];
		$data[$fieldName_type2]=$_GET['type2'];
 		$detailArr = $mysqlModel ->selectByCondition($data);
		//设置信息,为了方便前端统一使用
		$detailArr['id'] = $detailArr[0][$fieldName_id];
		$detailArr['title'] = $detailArr[0][$fieldName_title];
		$detailArr['content'] = $detailArr[0][$fieldName_content];
		$detailArr['pushtime'] = $detailArr[0][$fieldName_pushTime];
		unset($detailArr[0][$fieldName_content]);//删除被替代的内容
		
		//print_r($detailArr);
		//设置变量，前端可用
		$this->assign('detailArr', $detailArr);

         
    }
	
	 
}