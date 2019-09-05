<?php 

 

class LianzhengNewsController extends Controller
{
    //公共函数
	public function common()
    {
		 
	   //print_r($catlogTypeArr);
	   $this->assign('catlogArr', $catlogArr);
	}
	
	// 分类页
	public function catloglistImg()
    {
		
		//***请设置：id和内容的字段名称
		$fieldName_id = "lzInfoId";
		$fieldName_type = "lzInfoType";
		$fieldName_title = "lzInfoTitle";
		$fieldName_content = "lzInfoContent";
		$fieldName_pushTime = "lzInfoTime";
		$maxLen = 60;//截取的内容长度
		//end 设置
       
	    //获取分页需要的信息
		$page = $_GET['page']==''?1:$_GET['page'];
        $limitStart = ($page-1)*ItemNumPerPage_catloglistImg;
		$limitLen = ItemNumPerPage_catloglistImg;
		
		$mysqlModel = new Model("lianzhenginfo");
		
		$data[$fieldName_type]=$_GET['type'];
  		$catlogListArr = $mysqlModel ->selectByCondition($data,' limit '.$limitStart.','.$limitLen);
		//获取分页的页数
		$rowCount = $mysqlModel ->selectRowCount($data);//分页所需的总记录数
        $totalPage = ceil($rowCount/ItemNumPerPage_catloglistImg);//分页页数，ceil向上取整
		$this->assign('totalPage', $totalPage);//分页的总页数
		
		//遍历从数据库中获取的数据，修改和设置一下信息
		foreach($catlogListArr as $index => $value){
			//##设置id和title
		    $catlogListArr[$index]['id'] = $value[$fieldName_id];
			$catlogListArr[$index]['title'] = $value[$fieldName_title];
			$catlogListArr[$index]['pushtime'] = $value[$fieldName_pushTime];
			$content = $value[$fieldName_content];
			//设置缩略图
			$imgIndexArr = unique_rand(1,55,55);//自定义函数:unique_rand生成一定数量的不重复随机数
			$imgIndex = $imgIndexArr[$index];
			$thumbnail = getThumbnail_catloglistImg($content,$imgIndex);//自定义函数
			
			$catlogListArr[$index]['thumbnail'] = $thumbnail;
			
 			//删除html标签
            $text =  strip_tags($content);//$match[0];
			//截取中文字符串
			if(mb_strlen($text, 'utf8') > $maxLen) {        
				$text =  mb_substr($text, 0, $maxLen, 'utf8').'......';  
			} 
 			//设置主要内容为截取后的内容		
		    $catlogListArr[$index]['content'] = $text;
			unset($catlogListArr[$index][$fieldName_content]);
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
		$fieldName_id = "lzInfoId";
		$fieldName_type = "lzInfoType";
		$fieldName_title = "lzInfoTitle";
		$fieldName_content = "lzInfoContent";
		$fieldName_pushTime = "lzInfoTime";
		$maxLen = 100;//截取的内容长度
		//end 设置
		
		$mysqlModel = new Model("lianzhenginfo");
		$data[$fieldName_id]=$_GET['id'];
		$data[$fieldName_type]=$_GET['type'];
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