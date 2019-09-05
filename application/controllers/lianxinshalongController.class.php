<?php 

 

class LianxinshalongController extends Controller
{
 
	//公共函数
	public function common()
    {
		//设置分类信息
		$catlogTypeArr = array(
			
		   "lzgkk"=>"廉政公开课",
		   "sltw"=>"实例提问",
		   "hdjl"=>"互动交流",
		   "gjsy"=>"国际视野",
		   "ztsl"=>"主题沙龙" 
	   ); 
	   //print_r($catlogTypeArr);
	   $this->assign('catlogTypeArr', $catlogTypeArr);
	}
	// 分类页
	public function catloglistVideo()
    {
		
		//***请设置：id和内容的字段名称
		$fieldName_id = "lianxinshalongId";
		$fieldName_type = "lianxinshalongType";
		$fieldName_title = "lianxinshalongTitle";
		$fieldName_content = "lianxinshalongContent";
		$fieldName_pushTime = "lianxinshalongTime";
		$maxLen = 60;//截取的内容长度
		//end 设置
		
		$mysqlModel = new LianxinshalongModel("lianxinshalong");
		
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
		
		//print_r($catlogListArr);
		//设置变量，前端可用
		$this->assign('catlogListArr', $catlogListArr);

         
    }
	
    // 详情页
	public function detailVideo()
    {
		//***请设置：id和内容的字段名称
		$fieldName_id = "lianxinshalongId";
		$fieldName_type = "lianxinshalongType";
		$fieldName_title = "lianxinshalongTitle";
		$fieldName_content = "lianxinshalongContent";
		$fieldName_pushTime = "lianxinshalongTime";
		$maxLen = 100;//截取的内容长度
		//end 设置
		
		$mysqlModel = new LianxinshalongModel("lianxinshalong");
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