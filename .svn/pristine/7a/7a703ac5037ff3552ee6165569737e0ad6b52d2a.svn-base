<?php //这是测试模型（用于与数据库交互），可以删除
session_start();

class UserCenterModel extends Model
{
    /* 业务逻辑层实现 */
	   


 //2表联合查询
    public function unionSelectAll2($field_table1,$field_table2,$field2_table2='',$field_table3='')
    {
        $table1 = $this->_table;
        $table2 = $this->_table2;
	    $unitId = $_SESSION['userInfo']['depUnitId'];
 		$sql = sprintf("select * from `%s` left join `%s` on `%s`.%s=`%s`.%s where depUnitId=$unitId", $table1,$table2, $table1,$field_table1, $table2,$field_table2);
		 
		 
        $sth = $this->_dbHandle->prepare($sql);
        $sth->execute();

        return $sth->fetchAll();
    }
}