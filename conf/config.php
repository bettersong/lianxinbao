<?php 
/** 
 * 常量与配置信息
*/

//数据库
define('DB_NAME', 'lianxinbao');//数据库名
define('DB_USER', 'lianxinbao');//账号 root
define('DB_PASSWORD', 'lxbecjtusoft');//密码
define('DB_HOST', '121.41.26.77');//本地：localhost 远程：121.41.26.77

//前端页面的网站根URL
define('APP_URL', 'http://localhost:8082/');
//后台管理的网站根URL
define('ADMIN_URL', 'http://localhost:8085/');

define("CURRENT_DIR", "/application/views".substr($_SERVER["REQUEST_URI"],0,strripos($_SERVER["REQUEST_URI"],"/")));
//设置分类栏目中每页显示的个数
define('ItemNumPerPage_catloglistImg', 2);
define('itemNumPerPage_catloglistVideo', 2);
//$itemNumPerPage_catloglistImg = 2;
//$itemNumPerPage_catloglistVideo = 2;
define('UnknownDepartmentName', "未知部门");
