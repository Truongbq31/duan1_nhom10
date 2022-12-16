<?php
require_once('database.php');
class m_ngay_chieu extends database {
    // xây dựng lấy danh sách hàng hóa
    public function doc_ngay_chieu(){
        $sql = "SELECT * FROM ngay_chieu";//chuỗi câu truy vấn dữ liệu
        $this -> setQuery($sql);
        //lấy nhiều dòng dữ liệu(Trả về 1 mảng dữ liệu)
        return $this -> loadAllRows();
    }

    public function insert_ngay_chieu($id, $ngay) {
        $sql = "insert into ngay_chieu values (?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $ngay));
    }


    public function edit_ngay_chieu($id, $ngay) {
        $sql = "update ngay_chieu set ngay = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($ngay, $id));
    }

    public function read_ngay_chieu_by_id($id) {
        $sql = "select * from ngay_chieu where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function delete_ngay_chieu($id) {
        $sql = "Delete from ngay_chieu where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }

}
?>
