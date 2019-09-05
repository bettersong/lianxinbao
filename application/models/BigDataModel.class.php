<?php //这是测试模型（用于与数据库交互），可以删除
 
class BigDataModel extends Model
{
    /* 业务逻辑层实现 */
    //echo ' 业务逻辑层实现... ';
	function getGongBaoYear(){
		//gongbao
		$sql = "select gongbaoYear from gongbao group by gongbaoYear desc";
        $sth = $this->_dbHandle->prepare($sql);
        $sth->execute();
        return $sth->fetchAll();
	}
}