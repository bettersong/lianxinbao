<?php
/**
 *视图基类
 *
 * @author zhouhuixiang
 * @version 1.0
*/
class View
{
    protected $variables = array();
    protected $_controller;
    protected $_action;
	protected $_asCatalog;

    function __construct($controller, $action, $asCatalog='')
    {
 		$this->_asCatalog = $asCatalog;
		$this->_controller = $controller;
        $this->_action = $action;
    }
    /** 分配变量 **/
    function assign($name, $value)
    {
        $this->variables[$name] = $value;
    }
    /** 渲染显示 **/
    function render()
    {
 		
		//检查移动设备
		include APP_PATH."/application/views/Mobile_Detect.php";
		$ism=false; //是否为移动端
		$detect = new Mobile_Detect();
		if($detect->isMobile()&&!$detect->isTablet()){
			$ism=true;
		}
        //设置手机版对应的文件后缀标志：如电脑版的style.css对应的手机版style_m.css
		$_m = "";
        if($ism)$_m = "_m";
		
		$action = $this->_action;
		$controller = $this->_controller;
		$controllerNameForView=lcfirst($this->_controller);//strtolower($this->_controller);//视图文件夹大小写敏感，全部用小写。
		extract($this->variables);
		include "/conf/setCatlog.php";//引入分类设置
        if($ism){
			$defaultHeader = APP_PATH . 'application/views/header_m.php';//默认的手机版头部
			 $controllerHeader = APP_PATH . 'application/views/' .$this->_asCatalog. '/' . $controllerNameForView . '/header_m.php';//自定义的手机版头部
			 $defaultFooter = APP_PATH . 'application/views/footer_m.php';//默认底部
			 $controllerFooter = APP_PATH . 'application/views/' .$this->_asCatalog. '/' . $controllerNameForView . '/footer_m.php';//自定义底部
		}
		else{
			$defaultHeader = APP_PATH . 'application/views/header.php';//默认头部
        	$defaultFooter = APP_PATH . 'application/views/footer.php';//默认底部
        	$controllerHeader = APP_PATH . 'application/views/' . $controllerNameForView . '/header.php';//自定义头部
        	$controllerFooter = APP_PATH . 'application/views/' . $controllerNameForView . '/foote.php';//自定义底部
		}
        //页头文件
       /* if (file_exists($controllerHeader)) {
            include ($controllerHeader);
        } else {
            include ($defaultHeader);
        }*/
		
        //页内容文件
		$pagefile_Path = APP_PATH . 'application/views/' .$this->_asCatalog. '/' . $controllerNameForView . '/' . $this->_action.$_m. '.php';
        if (file_exists($pagefile_Path)) {
			include ($pagefile_Path);
		}else{
			echo '<br><a href="/" >返回首页</a><br>';
			echo '<br><span style="color:red">页面不存在：</span>'.$pagefile_Path.'<br><br>';
		}
        //页脚文件
        if (file_exists($controllerFooter)) {
            include ($controllerFooter);
        } else {
            include ($defaultFooter);
        }
    }
}