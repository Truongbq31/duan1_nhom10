<?php
require_once('database.php');
class m_nguoidung extends database {
    // xây dựng lấy danh sách hàng hóa
    public function doc_nguoidung(){
        $sql = "SELECT * FROM nguoi_dung";//chuỗi câu truy vấn dữ liệu
        $this -> setQuery($sql);
        //lấy nhiều dòng dữ liệu(Trả về 1 mảng dữ liệu)
        return $this -> loadAllRows();
    }
    public function insert_nguoidung($id, $email, $mat_khau, $username, $vai_tro) {
        $sql = "insert into nguoi_dung values (?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $email, $mat_khau, $username, $vai_tro));
    }

    public function edit_nguoidung($id, $email, $mat_khau, $username, $vai_tro) {
        $sql = "update nguoi_dung set email=? ,password=?, username=?, vai_tro=? where id=?";
        $this->setQuery($sql);
        return $this->execute(array($email, $mat_khau, $username, $vai_tro, $id));
    }

    public function read_nguoidung_by_id($id) {
        $sql = "select * from nguoi_dung where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function delete_nguoidung($id) {
        $sql = "Delete from nguoi_dung where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
}
?>