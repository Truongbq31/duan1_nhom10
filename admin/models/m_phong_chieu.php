<?php
require_once ('database.php');
class m_phong_chieu extends database {
    public function doc_phong_chieu(){
        $sql = "SELECT * from phong_chieu";//chuỗi câu truy vấn dữ liệu
        $this -> setQuery($sql);
        //lấy nhiều dòng dữ liệu(Trả về 1 mảng dữ liệu)
        return $this -> loadAllRows();
    }

    public function insert_phong_chieu($id, $ten_phong) {
        $sql = "insert into phong_chieu values (?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $ten_phong));
    }

    public function edit_phong_chieu($id, $ten_phong) {
        $sql = "update phong_chieu set ten_phong = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($ten_phong, $id));
    }

    public function read_phong_chieu_by_id($id) {
        $sql = "select * from phong_chieu where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function delete_phong_chieu($id) {
        $sql = "Delete from phong_chieu where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
}


