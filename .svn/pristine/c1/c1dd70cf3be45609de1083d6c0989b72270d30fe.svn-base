<?php 
/** 
 *公共函数集合
 *
 * @author zhouhuixiang
 * @version 1.0
*/


//获取缩略图
 function getThumbnail_catloglistImg($content,$imgIndex=''){
		preg_match ('/\<img.*src="(.*)"/U',$content,$match);//preg_match('/<img src="(.*?)"/',$content,$match);
		$thumbnail = $match[1];
		//如果没有缩略图则选择一个随机且不重复的
		if($imgIndex=="")$imgIndex = rand(1,55);
		if($thumbnail=="" || file_exists($_SERVER['DOCUMENT_ROOT'].$thumbnail)===false) $thumbnail="/public/images/catlogImgbg/img (".$imgIndex.").jpg";//默认缩略图 $thumbnail=="" ||  
		
		return $thumbnail;
		 
}
//获取缩略图
 function getThumbnail_catloglistVideo($content,$imgIndex=''){
		preg_match ('/\<img.*src="(.*)"/U',$content,$match);//preg_match('/<img src="(.*?)"/',$content,$match);
		$thumbnail = $match[1];
		//如果没有缩略图则选择一个随机且不重复的
		if($imgIndex=="")$imgIndex = rand(1,55);
		if($thumbnail=="" || file_exists($_SERVER['DOCUMENT_ROOT'].$thumbnail)===false) $thumbnail="/public/images/catlogImgbg/img (".$imgIndex.").jpg";//默认缩略图 $thumbnail=="" ||  
		
		return $thumbnail;
		 
}
/*
* array unique_rand( int $min, int $max, int $num )
* 生成一定数量的不重复随机数
* $min 和 $max: 指定随机数的范围
* $num: 指定生成数量
*/
 
function  unique_rand($min,$max,$num){
    $count = 0;
    $return_arr = array();
    while($count < $num){
        $return_arr[] = mt_rand($min,$max);
        $return_arr = array_flip(array_flip($return_arr));
        $count = count($return_arr);
    }
    shuffle($return_arr);
    return $return_arr;
}

function strip_html_tags($str,$tags,$content=0){
    if($content){
        $html=array();
        foreach ($tags as $tag) {
            $html[]='/(<'.$tag.'.*?>[\s|\S]*?<\/'.$tag.'>)/';
        }
        $data=preg_replace($html,'',$str);
    }else{
        $html=array();
        foreach ($tags as $tag) {
            $html[]="/(<(?:\/".$tag."|".$tag.")[^>]*>)/i";
        }
        $data=preg_replace($html, '', $str);
    }
    return $data;
}

function replace_html_tag($string, $tagname, $clear = false){
$re = $clear ? '' : '1';
$sc = '/<' . $tagname . '(?:s[^>]*)?>([sS]*?)?</' . $tagname . '>/i';
return preg_replace($sc, $re, $string);
}