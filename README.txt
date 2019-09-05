参见：https://www.cnblogs.com/Steven-shi/p/5914175.html

框架里每个目录的作用：
application – 应用代码
conf – 程序配置或数据库配置
core - 框架核心目录
public – 静态文件:img、css、js等，初次使用时可以清空这些目录的内容
runtime - 临时数据目录

【使用方法】
1.在application\views\下新建页面对应的目录（一般同类页面放在同一个目录下），如目录test；
2.在页面目录test下新建页面，如index.php,add.php
3.在application\controllers\下建立对应的控制器testController.class.php，在控制器中添加以test目录下每个页面的名称命名的函数
4.在application\models\下建立对应的模型ItemModel.class.php
5.在test/index.php等页面中，可以直接使用对应控制器中相应函数的变量

【代码规范】
表名：MySQL的表名需小写，如：item，car
模块名：模块名（Models）需首字母大写，并在名称后添加“Model”，如：ItemModel，CarModel
控制器：控制器（Controllers）需首字母大写，并在名称中添加“Controller”，如：ItemController，CarController
视图：视图（Views）部署结构为“控制器名/行为名”，如：item/view.php，car/buy.php








上述的一些规则是为了能在程序中更好的进行互相的调用。