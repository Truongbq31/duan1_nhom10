<?php
require_once ('database.php');
class m_chinhanh extends database {
    public function doc_chinhanh(){
        $sql = "SELECT * FROM chi_nhanh";//chuỗi câu truy vấn dữ liệu
        $this -> setQuery($sql);
        //lấy nhiều dòng dữ liệu(Trả về 1 mảng dữ liệu)
        return $this -> loadAllRows();
    }

    public function insert_chinhanh($id, $ten_chi_nhanh) {
        $sql = "insert into chi_nhanh values (?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $ten_chi_nhanh));
    }

    public function edit_chinhanh($id, $ten_chi_nhanh) {
        $sql = "update chi_nhanh set ten_chi_nhanh = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($ten_chi_nhanh, $id));
    }

    public function read_chinhanh_by_id($id) {
        $sql = "select * from chi_nhanh where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function delete_chinhanh($id) {
        $sql = "Delete from chi_nhanh where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
}