<?php
require_once "database.php";
class m_ve_da_dat extends database{
    public function doc_ve_da_dat(){
        $id_nguoi_dung = $_GET['id_nguoi_dung'];
        $sql = "SELECT * from ve inner join lich_chieu on lich_chieu.id=ve.id_lich_chieu
        inner join chi_nhanh_phim on chi_nhanh_phim.id=lich_chieu.id_chi_nhanh_phim
        inner join phim on phim.id=chi_nhanh_phim.id_phim
         inner join chi_nhanh on chi_nhanh.id=chi_nhanh_phim.id_chi_nhanh
         inner join nguoi_dung on nguoi_dung.id = ve.id_nguoi_dung
         inner join khung_gio_chieu on khung_gio_chieu.id=lich_chieu.id_khung_gio_chieu
         inner join khung_gio_phong_chieu on khung_gio_chieu.id=khung_gio_phong_chieu.id_khung_gio_chieu
         inner join phong_chieu on phong_chieu.id=khung_gio_phong_chieu.id_phong_chieu
         where id_nguoi_dung = '$id_nguoi_dung'";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
