<?php
require_once('database.php');
class m_home extends database{
    public function thong_ke(){
        $sql = "SELECT * FROM ve";//chuỗi câu truy vấn dữ liệu
        $this -> setQuery($sql);
        //lấy nhiều dòng dữ liệu(Trả về 1 mảng dữ liệu)
        return $this -> loadAllRows();
    }
}
