<?php
require_once('database.php');
class m_lich_chieu extends database {
    // xây dựng lấy danh sách hàng hóa
    public function doc_lich_chieu(){
        $sql = "SELECT *, lich_chieu.id as id_lich_chieu FROM lich_chieu inner join chi_nhanh_phim on chi_nhanh_phim.id=lich_chieu.id_chi_nhanh_phim
        inner join khung_gio_chieu on khung_gio_chieu.id=lich_chieu.id_khung_gio_chieu
        INNER JOIN chi_nhanh on chi_nhanh.id=chi_nhanh_phim.id_chi_nhanh
        inner join ngay_chieu on ngay_chieu.id=lich_chieu.id_ngay_chieu
        inner join phim on phim.id=chi_nhanh_phim.id_phim";//chuỗi câu truy vấn dữ liệu
        $this -> setQuery($sql);
        //lấy nhiều dòng dữ liệu(Trả về 1 mảng dữ liệu)
        return $this -> loadAllRows();
    }

    public function validate_lc(){
        $sql = "select * from lich_chieu";
        $this -> setQuery($sql);
        return $this -> loadAllRows();
    }

    public function insert_lichchieu($id, $id_chi_nhanh_phim, $id_khung_gio_chieu, $ngay_chieu) {
        $sql = "insert into lich_chieu values (?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $id_chi_nhanh_phim,$id_khung_gio_chieu,$ngay_chieu));
    }


    public function edit_lich_chieu($id, $id_chi_nhanh_phim,$id_khung_gio_chieu,$id_ngay_chieu) {
        $sql = "update lich_chieu set id_chi_nhanh_phim = ?, id_khung_gio_chieu=?, id_ngay_chieu=? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id_chi_nhanh_phim,$id_khung_gio_chieu,$id_ngay_chieu, $id));
    }

    public function read_lich_chieu_by_id($id) {
        $sql = "select *, lich_chieu.id as id_lc from lich_chieu inner join chi_nhanh_phim on chi_nhanh_phim.id=lich_chieu.id_chi_nhanh_phim
         inner join khung_gio_chieu on khung_gio_chieu.id=lich_chieu.id_khung_gio_chieu
         inner join chi_nhanh on chi_nhanh.id=chi_nhanh_phim.id_chi_nhanh
                                 inner join ngay_chieu on ngay_chieu.id=lich_chieu.id_ngay_chieu
                                 where lich_chieu.id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function delete_lich_chieu($id) {
        $sql = "Delete from lich_chieu where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }

}
?>
