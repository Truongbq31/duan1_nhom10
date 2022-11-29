<?php
require_once ('database.php');
class m_chinhanh_phim extends database {
    public function doc_chinhanh_phim(){
        $sql = "SELECT *, chi_nhanh_phim.id as id_chinhanh_phim FROM chi_nhanh_phim inner join phim on phim.id=chi_nhanh_phim.id_phim
        inner join chi_nhanh on chi_nhanh.id=chi_nhanh_phim.id_chi_nhanh";//chuỗi câu truy vấn dữ liệu
        $this -> setQuery($sql);
        //lấy nhiều dòng dữ liệu(Trả về 1 mảng dữ liệu)
        return $this -> loadAllRows();
    }

    public function insert_chinhanh_phim($id, $id_phim, $id_chi_nhanh) {
        $sql = "insert into chi_nhanh_phim values (?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $id_phim, $id_chi_nhanh));
    }

    public function edit_chinhanh_phim($id, $id_phim, $id_chi_nhanh) {
        $sql = "update chi_nhanh_phim set id_phim = ?, id_chi_nhanh=? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id_phim,$id_chi_nhanh, $id));
    }

    public function read_chinhanh_phim_by_id($id) {
        $sql = "select * from chi_nhanh_phim inner join phim on phim.id=chi_nhanh_phim.id_phim
         inner join chi_nhanh on chi_nhanh.id=chi_nhanh_phim.id_chi_nhanh where chi_nhanh_phim.id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function delete_chinhanh_phim($id) {
        $sql = "Delete from chi_nhanh_phim where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
}
