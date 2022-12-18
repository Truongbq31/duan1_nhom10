<?php
require_once ('database.php');
class m_ve extends database {
    public function doc_ve(){
        $sql = "SELECT *, ve.id as id_ve from ve inner join lich_chieu on lich_chieu.id=ve.id_lich_chieu
        inner join nguoi_dung on nguoi_dung.id=ve.id_nguoi_dung
        inner join chi_nhanh_phim on lich_chieu.id_chi_nhanh_phim=chi_nhanh_phim.id
        inner join phim on phim.id=chi_nhanh_phim.id_phim
        inner join khung_gio_chieu on khung_gio_chieu.id=lich_chieu.id_khung_gio_chieu
        inner join khung_gio_phong_chieu on khung_gio_phong_chieu.id_khung_gio_chieu=khung_gio_chieu.id
        inner join phong_chieu on phong_chieu.id=khung_gio_phong_chieu.id_phong_chieu
        inner join chi_nhanh on chi_nhanh.id=chi_nhanh_phim.id_chi_nhanh
        inner join ngay_chieu on ngay_chieu.id=lich_chieu.id_ngay_chieu
        group by ve.id 
        order by ngay_dat DESC";//chuỗi câu truy vấn dữ liệu
        $this -> setQuery($sql);
        //lấy nhiều dòng dữ liệu(Trả về 1 mảng dữ liệu)
        return $this -> loadAllRows();
    }

    public function delete_ve($id) {
        $sql = "Delete from ve where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }

    public function read_ve_by_id($id) {
        $sql = "select * from ve where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function edit_ve($id, $trang_thai) {
        $sql = "update ve set trang_thai = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($trang_thai, $id));
    }
}



