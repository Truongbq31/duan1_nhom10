<?php
require_once('database.php');
class m_loaiphim extends database {
    // xây dựng lấy danh sách hàng hóa
    public function doc_loaiphim(){
        $sql = "SELECT * FROM loai_phim";//chuỗi câu truy vấn dữ liệu
        $this -> setQuery($sql);
        //lấy nhiều dòng dữ liệu(Trả về 1 mảng dữ liệu)
        return $this -> loadAllRows();
    }

    public function insert_loaiphim($id, $ten_loai) {
        $sql = "insert into loai_phim values (?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $ten_loai));
    }


    public function edit_loaiphim($id, $ten_loai) {
        $sql = "update loai_phim set ten_loai = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($ten_loai, $id));
    }

    public function read_loaiphim_by_id($id) {
        $sql = "select * from loai_phim where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function delete_loaiphim($id) {
        $sql = "Delete from loai_phim where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }

}
?>