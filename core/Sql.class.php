<?php
/**
 *数据库基类
 *
 * @author zhouhuixiang
 * @version 1.0
*/
class Sql
{
    protected $_dbHandle;
    protected $_result;
    //连接数据库
    public function connect($host, $user, $pass, $dbname)
    {
		try {

            $dsn = sprintf("mysql:host=%s;dbname=%s;charset=utf8", $host, $dbname);
            $this->_dbHandle = new PDO($dsn, $user, $pass, array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC));
        } catch (PDOException $e) {
            echo '<script>alert("数据库错误: ' . $e->getMessage() . '");</script>';exit;
			//exit('错误: ' . $e->getMessage());

        }


    }
    //查询所有
    public function selectAll()
    {
		$sql = sprintf("select * from `%s`", $this->_table);
        $sth = $this->_dbHandle->prepare($sql);
        $sth->execute();

        return $sth->fetchAll();
    }
	//获取表的记录数
    public function selectRowCount($data,$customCondition='')
    {
        //if($idName=='')$idName='id';
		$sql = sprintf("select * from `%s` %s ".$customCondition, $this->_table, $this->formatSelect($data));//total
		// echo ' sql='.$sql.' ';
        $sth = $this->_dbHandle->prepare($sql);
        $sth->execute();
        return $sth->rowCount();
    }
	//五表联合查询
    public function unionSelectAll_5($field1_table1,$field2_table1,$field3_table1,$field4_table1,$field_table2,$field_table3,$field_table4,$field_table5,$deToolListId)
    {
		$table1 = $this->_table;
        $table2 = $this->_table2;
	    $table3 = $this->_table3;
		$table4 = $this->_table4;
		$table5 = $this->_table5;
		 
			//三个表都有关联
			$sql = sprintf("select * from `%s` left join `%s`  on `%s`.%s=`%s`.%s left join `%s` on `%s`.%s =`%s`.%s  left join `%s` on `%s`.%s =`%s`.%s left join `%s` on `%s`.%s =`%s`.%s where `%s`.%s=%s", $table1,$table2, $table1,$field1_table1, $table2,$field_table2
 ,$table3, $table1,$field2_table1, $table3,$field_table3 ,$table4, $table1,$field3_table1, $table4,$field_table4 ,$table5, $table1,$field4_table1, $table5,$field_table5, $table1,$field1_table1 ,$deToolListId );
			 
          
		 
		//echo $sql.'<br>';
		
        $sth = $this->_dbHandle->prepare($sql);
        $sth->execute();
		$details = $sth->fetchAll();
        return $details;
    }
	//2表联合查询
    public function unionSelectAll($field_table1,$field_table2,$field2_table2='',$field_table3='')
    {
        /*$table1 = $this->_table;
        $table2 = $this->_table2;
		//三表联合查询
        if($this->_table3 != ''){
            $table3 = $this->_table3;
			//三个表都有关联
			$sql = sprintf("select * from `%s` left join `%s`  on `%s`.%s=`%s`.%s left join `%s` on `%s`.%s =`%s`.%s", $table1,$table2, $table1,$field_table1, $table2,$field_table2,$table3, $table2,$field2_table2, $table3,$field_table3);
			 
        }else{//两个表联合查询
			 $sql = sprintf("select * from `%s` left join `%s` on `%s`.%s=`%s`.%s", $table1,$table2, $table1,$field_table1, $table2,$field_table2);
		}*/
		// return $sql;
        //$sth = $this->_dbHandle->prepare($sql);
        //$sth->execute();

        return 55;//$sth->fetchAll();
     }
	//3表联合查询
	
    public function unionSelectAll_3($field_table1,$field_table2,$field2_table2='',$field_table3='',$customCondition='')
    {
        $table1 = $this->_table;
        $table2 = $this->_table2;
		$table3 = $this->_table3;
		//三个表都有关联
		$where = '';
		if($customCondition != '')$where = ' where '.$customCondition;
		$sql = sprintf("select * from `%s` left join `%s`  on `%s`.%s=`%s`.%s left join `%s` on `%s`.%s =`%s`.%s $where", $table1,$table2, $table1,$field_table1, $table2,$field_table2,$table3, $table2,$field2_table2, $table3,$field_table3);
		//echo $sql.'   1111';
        $sth = $this->_dbHandle->prepare($sql);
         $sth->execute();

        return $sth->fetchAll();
    }


    


	//松散联合查询：至少有三个表，且只有一个表与其他两个表有关联
    public function unionSelectAll_loose($field_table1,$field2_table1,$field_table2='',$field_table3='')
    {
        $table1 = $this->_table;
        $table2 = $this->_table2;
		//三表联合查询
        if($this->_table3 != ''){
            $table3 = $this->_table3;
			 //只有一个表与其他两个表有关联
			 $sql = sprintf("select * from `%s` left join `%s`  on `%s`.%s=`%s`.%s left join `%s` on `%s`.%s =`%s`.%s", $table1,$table2, $table1,$field_table1, $table2,$field_table2,$table3, $table1,$field2_table1, $table3,$field_table3);
        }
		 
		//echo $sql.'<br>';
        $sth = $this->_dbHandle->prepare($sql);
        $sth->execute();
        return $sth->fetchAll();
    }
//     SELECT detail.deToolListId,COUNT(*) FROM detail GROUP BY deToolListId
    public function selectAmount($field_table1)
    {
        $table1 = $this->_table;
        $sql = sprintf("SELECT %s,COUNT(*) FROM `%s` GROUP BY %s",$field_table1,$table1,$field_table1);
        $sth = $this->_dbHandle->prepare($sql);
        $sth->execute();
        return $sth->fetchAll();
    }
     
    //根据条件 (id) 查询
    public function select($id,$idName='')
    {
        if($idName=='')$idName='id';
		$sql = sprintf("select * from `%s` where `%s` = '%s'", $this->_table, $idName,$id);
        // return $sql;
        $sth = $this->_dbHandle->prepare($sql);
        $sth->execute();

        return $sth->fetch();
    }
	//根据条件查询：更加$data数组字段对应的值进行查询,$customCondition为用户自定义的where条件，如:limit 1
	public function selectByCondition($data,$customCondition='')
    {
        //if($idName=='')$idName='id';
		$sql = sprintf("select * from `%s` %s ".$customCondition, $this->_table, $this->formatSelect($data));
		// return $sql;
        $sth = $this->_dbHandle->prepare($sql);
        $sth->execute();
        return $sth->fetchAll();
    }
    //根据条件 (id) 删除
    public function delete($id,$idName='')
    {
        if($idName=='')$idName='id';
		$sql = sprintf("delete from `%s` where `%s` = '%s'", $this->_table, $idName,$id);
        // return $sql;
        $sth = $this->_dbHandle->prepare($sql);
        $sth->execute();
        return $sth->rowCount();
    }
    //自定义SQL查询，返回影响的行数
    public function query($sql)
    {
        $sth = $this->_dbHandle->prepare($sql);
        $sth->execute();
        return $sth->rowCount();
    }
    
    //新增数据，并返回插入的id
    public function add($data)
    {
        $sql = sprintf("insert into `%s` %s", $this->_table, $this->formatInsert($data));
        $this->query($sql);
        return $this->_dbHandle->lastInsertId() ;
    }
    /*public function getUnit($field)
    {
        $sql = "select unitName from unit where provinceId =(SELECT provinceId from province WHERE provinceName='$field')";
        $sth = $this->_dbHandle->prepare($sql);
        $sth->execute();
        // echo  $sql;
        return $sth->fetchAll();
    }
    //注册单位获取联动的部门名称
    public function getDepartment($unitName)
    {
        $sql = "select departmentName from department where unitId =(SELECT unitId from unit WHERE unitName='$unitName')";
        $sth = $this->_dbHandle->prepare($sql);
        $sth->execute();
        return $sth->fetchAll();
    }
    public function getDepartmentId($departmentName)
    {
        $sql = "select departmentId from department where departmentName = '{$departmentName}'";
        $sth = $this->_dbHandle->prepare($sql);
        $sth->execute();
        return $sth->rowCount();
    }*/
    //修改数据
    public function update($id, $data,$idName='')
    {
        if($idName=='')$idName='id';
		$sql = sprintf("update `%s` set %s where `%s` = '%s'", $this->_table, $this->formatUpdate($data), $idName,$id);

        return $this->query($sql);
        // return $sql;
    }
    //将数组转换成插入格式的sql语句
    private function formatInsert($data)
    {
        $fields = array();
        $values = array();
        foreach ($data as $key => $value) {
            $fields[] = sprintf("`%s`", $key);
            $values[] = sprintf("'%s'", $value);
        }

        $field = implode(',', $fields);
        $value = implode(',', $values);

        return sprintf("(%s) values (%s)", $field, $value);
    }
	 //将数组转换成条件查询格式的sql语句
    private function formatSelect($data='')
    {
        //print_r($data);
		$fields = array();
        $values = array();
		$conditions = '';
		$i=1;
		$dataLen = count($data);
        foreach ($data as $key => $value) {
            //$fields[] = sprintf("`%s`", $key);
            //$values[] = sprintf("'%s'", $value);
			if($dataLen>1 && $i<$dataLen)$conditions .= $key."='".$value."' and ";
			else $conditions .= $key."='".$value."'";
			$i++;
        }

        if($data != '')$conditions = "where ".$conditions;
         //echo 'conditions:'.$conditions;
        return $conditions;//sprintf("(%s) values (%s)", $field, $value);
    }
	
    //将数组转换成更新格式的sql语句
    private function formatUpdate($data)
    {
        $fields = array();
        foreach ($data as $key => $value) {
            $fields[] = sprintf("`%s` = '%s'", $key, $value);
        }
        return implode(',', $fields);
    }
}