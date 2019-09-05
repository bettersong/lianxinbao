<?php
class IndexController extends Controller
{
    // 首页方法，测试框架自定义DB查询queryString
    public function index()
    {
       //首页的热点关注
	   $mysqlModel = new Model("lianzhenginfo");
 	   $data["lzInfoType"]='rdgz';
 	   $news_rdgz = $mysqlModel ->selectByCondition($data," order by lzInfoTime desc limit 6");
		//首页的沙龙
		$mysqlModel_shalong = new Model("lianxinshalong");
		$data_shalong["lianxinshalongType"]='lzgkk';
 	    $shalongArr = $mysqlModel_shalong ->selectByCondition($data_shalong," order by lianxinshalongTime desc limit 8");
	    //廉心讲堂
        $mysqlModel_jiangtang = new Model("jtvideopush");
        $data_jiangtang["jtvideopushType"]='jszjxt';
        $jiangtangArr = $mysqlModel_jiangtang ->selectByCondition($data_jiangtang,"limit 8");
        //廉心先锋
        $mysqlModel_xianfeng = new Model("xianfengpush");
		$data_xianfeng["xianfengPushType"]='xfgs';
        $xianfengArr = $mysqlModel_xianfeng ->selectByCondition($data_xianfeng,"limit 6");


        $this->assign('title', '首页');
        $this->assign('news_rdgz', $news_rdgz);
        $this->assign('shalongArr', $shalongArr);
        $this->assign('jiangtangArr', $jiangtangArr);
		$this->assign('xianfengArr', $xianfengArr);
    }
    
    
}