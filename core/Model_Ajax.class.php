<?php
/**
 *模型基类
 *
 * @author zhouhuixiang
 * @version 1.0
*/
 require $_SERVER['DOCUMENT_ROOT']."/conf/config.php";
 require $_SERVER['DOCUMENT_ROOT']."/core/Sql.class.php";  

class Model extends Sql
{
    protected $_model;
    protected $_table;
    function __construct($table,$table2='',$table3='',$table4='',$table5='')
    {
        //连接数据库
        $this->connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);  
        
		//获取模型名称
        $this->_model = get_class($this);
        $this->_model = rtrim($this->_model, 'Model'); 
        //数据库表名与类名一致
        $this->_table = strtolower($table);
		$this->_table2 = strtolower($table2);
		$this->_table3 = strtolower($table3);
		$this->_table4 = strtolower($table4);
		$this->_table5 = strtolower($table5);
		
    }
    function __destruct()
    {
    }


   public function getUnit($provinceId)
    {
        $sql = "select * from unit where unitProvinceId = $provinceId and unitStatus = 1 ";
        $sth = $this->_dbHandle->prepare($sql);
        $sth->execute();
        // echo  $sql;
        return $sth->fetchAll();
    }
    //注册单位获取联动的部门名称
    public function getDepartment($unitId)
    {
        $sql = "select * from department where depUnitId = $unitId and depApplyPass = 1 ";
        $sth = $this->_dbHandle->prepare($sql);
        $sth->execute();
        return $sth->fetchAll();
    }
    // //个人中心，获取本单位所有用户信息
    // public function unionSelectAll_aaa($field_table1,$field_table2,$field2_table2='',$field_table3='',$unitId)
    // {
    //     $table1 = $this->_table;
    //     $table2 = $this->_table2;
    //     $table3 = $this->_table3;
    //     $sql = sprintf("select * from `%s` left join `%s`  on `%s`.%s=`%s`.%s left join `%s` on `%s`.%s =`%s`.%s where unitId = {$unitId}", $table1,$table2, $table1,$field_table1, $table2,$field_table2,$table3, $table2,$field2_table2, $table3,$field_table3);
             
    //     return $sql;
    //     return $table1;
    // }
	
}