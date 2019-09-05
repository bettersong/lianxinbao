<?php //这是测试模型（用于与数据库交互），可以删除
 
class RegisterModel extends Model
{
   public function getProvince()
    {
        $sql = "select * from province group by provinceId";
        $sth = $this->_dbHandle->prepare($sql);
        $sth->execute();
        return $sth->fetchAll();
    }

}