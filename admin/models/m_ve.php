<?php
require_once ('database.php');
class m_ve extends database {
    public function doc_ve(){
        $sql = "SELECT * from ve";//chuỗi câu truy vấn dữ liệu
        $this -> setQuery($sql);
        //lấy nhiều dòng dữ liệu(Trả về 1 mảng dữ liệu)
        return $this -> loadAllRows();
    }

    public function delete_ve($id) {
        $sql = "Delete from ve where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
}



