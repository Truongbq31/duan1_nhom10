<?php
require "database.php";
class m_gio_chieu extends database{
    public function m_gio_chieu(){
        $sql = "SELECT * FROM gio_chieu";//chuỗi câu truy vấn dữ liệu
        $this -> setQuery($sql);
        //lấy nhiều dòng dữ liệu(Trả về 1 mảng dữ liệu)
        return $this->loadAllRows();
    }
}