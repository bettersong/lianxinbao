<?php 

 

class LianxinjiangtangController extends Controller
{
    //公共函数
	public function common()
    {
		 
	   //print_r($catlogTypeArr);
	   //$this->assign('catlogArr', $catlogArr);
	}
	
	// 分类页
	public function expertAppearance()
    {
		
		//首页的沙龙
		//获取分页需要的信息
		$page = $_GET['page']=='' ? 1 : $_GET['page'];
        $limitStart = ($page-1)*ItemNumPerPage_catloglistImg;
		$limitLen = ItemNumPerPage_catloglistImg;
		
		$mysqlModel_jiangtang = new Model("expertinfopush");
		$data_shalong="";//["lianxinshalongType"]='lzgkk';
 	    $jiangtangArr = $mysqlModel_jiangtang ->selectByCondition($data_shalong,' order by expertInfoPushTime desc limit '.$limitStart.','.$limitLen);
		
		//获取分页的总页数
		$rowCount = $mysqlModel_jiangtang ->selectRowCount($data_shalong);//分页所需的总记录数
        $totalPage = ceil($rowCount/ItemNumPerPage_catloglistImg);//分页页数，ceil向上取整
		$this->assign('totalPage', $totalPage);//分页的总页数
		
		//echo ' dddddd'.$totalPage;
	   $maxLen = 200;
	   foreach($jiangtangArr as $index => $value){
		   
       		$content =  $value['expertInfoPushContent'];
			
			preg_match ('/\<img.*src="(.*)"/U',$content,$match);//preg_match('/<img src="(.*?)"/',$content,$match);
			$thumbnail = $match[1];
			if( strpos($thumbnail,"http")!==false ) $jiangtangArr[$index]['thumbnail'] = $thumbnail;
			else $jiangtangArr[$index]['thumbnail'] = ADMIN_URL.$thumbnail;
			
		    
			$content =  strip_tags($content);
			//截取中文字符串
			if(mb_strlen($content, 'utf8') > $maxLen) {        
				$content =  mb_substr($content, 0, $maxLen, 'utf8').'......';  
			} 
			$jiangtangArr[$index]['expertInfoPushContent'] = $content;
	   }
		//print_r($jiangtangArr);
		//设置变量，前端可用
		$this->assign('jiangtangArr', $jiangtangArr);
		

         
    }
	
	// 分类页
	public function catloglistVideo()
    {
		
		//***请设置：id和内容的字段名称
		$fieldName_id = "jtVideoPushId";
		$fieldName_type = "jtVideoPushType";
		$fieldName_title = "jtVideoPushTitle";
		$fieldName_content = "jtVideoPushContent";
		$fieldName_pushTime = "jtVideoPushTime";
		$maxLen = 60;//截取的内容长度
		//end 设置
		
		$mysqlModel = new Model("jtvideopush");
		
		$data[$fieldName_type]=$_GET['type'];
 		$catlogListArr = $mysqlModel ->selectByCondition($data,' limit 4');
		
		//print_r($catlogListArr);
		
		//遍历从数据库中获取的数据，修改和设置一下信息
		foreach($catlogListArr as $index => $value){
			//##设置id和title
		    $catlogListArr[$index]['id'] = $value[$fieldName_id];
			$catlogListArr[$index]['title'] = $value[$fieldName_title];
			$catlogListArr[$index]['pushtime'] = $value[$fieldName_pushTime];
			$content = $value[$fieldName_content];
			//设置缩略图
			//设置视频背景
			//if($_GET['type']=='') $videobg = 'video (5).jpg';
			//else $videobg = $_GET['type'];
			$videobg = 'video (5).jpg';
			$catlogListArr[$index]['thumbnail'] = $videobg;
			
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
		
		 // print_r($catlogListArr);
		//设置变量，前端可用
		$this->assign('catlogListArr', $catlogListArr);

         
    }
	
    // 详情页
	public function detailVideo()
    {
		//***请设置：id和内容的字段名称
		$fieldName_id = "jtVideoPushId";
		$fieldName_type = "jtVideoPushType";
		$fieldName_title = "jtVideoPushTitle";
		$fieldName_content = "jtVideoPushContent";
		$fieldName_pushTime = "jtVideoPushTime";
		$maxLen = 100;//截取的内容长度
		//end 设置
		
		$mysqlModel = new Model("jtvideopush");
		$data[$fieldName_id]=$_GET['id'];
		$data[$fieldName_type]=$_GET['type'];
 		$detailArr = $mysqlModel ->selectByCondition($data);
		//设置信息,为了方便前端统一使用
		$detailArr['id'] = $detailArr[0][$fieldName_id];
		$detailArr['title'] = $detailArr[0][$fieldName_title];
		//$detailArr['content'] = $detailArr[0][$fieldName_content];
		$detailArr['pushtime'] = $detailArr[0][$fieldName_pushTime];
		//unset($detailArr[0][$fieldName_content]);//删除被替代的内容
		
		$content = $detailArr[0][$fieldName_content];//$detailArr[0]['content'];
 
		//获取视频路径
		preg_match ('/\<video.*src="(.*)"/U',$content,$match);//preg_match('/<img src="(.*?)"/',$content,$match);
		$detailArr['videoSrc'] = $match[1];
		$detailArr['videoSrc'] = ADMIN_URL.$detailArr['videoSrc'];
		//视频介绍内容：删除video标签、空格
		$text =  preg_replace("/<video[^>]*>.*<\/video>|&nbsp;/","",$content);
		$detailArr['videoIntroduce'] =  $text;
		 
		 
		//设置变量，前端可用
		$this->assign('detailArr', $detailArr);

         
    }
	
    
	
	 
}