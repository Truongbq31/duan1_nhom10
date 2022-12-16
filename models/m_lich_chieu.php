<?php
require "database.php";
class m_lich_chieu extends database
{
    public function m_lich_chieu($id)
    {
        $sql = "Select *, ngay_chieu.id as id_ngay_chieu, phim.name as ten_phim, chi_nhanh.ten_chi_nhanh,khung_gio_chieu.gio_bat_dau,phong_chieu.ten_phong,lich_chieu.id as id_lich_chieu from lich_chieu  
            inner join chi_nhanh_phim on chi_nhanh_phim.id=lich_chieu.id_chi_nhanh_phim 
          inner join phim on chi_nhanh_phim.id_phim = phim.id 
          inner join chi_nhanh on chi_nhanh_phim.id_chi_nhanh=chi_nhanh.id
          inner join khung_gio_chieu on khung_gio_chieu.id=lich_chieu.id_khung_gio_chieu
          inner join khung_gio_phong_chieu on khung_gio_chieu.id=khung_gio_phong_chieu.id_khung_gio_chieu
          inner join phong_chieu on khung_gio_phong_chieu.id_phong_chieu=phong_chieu.id   
        inner join ngay_chieu on ngay_chieu.id=lich_chieu.id_ngay_chieu                                                                                
          where phim.id=? group by ngay_chieu.ngay";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id));

    }
    public function m_ngay_chieu($id){
        $sql = "Select *, phim.name as ten_phim, chi_nhanh.ten_chi_nhanh,khung_gio_chieu.gio_bat_dau,phong_chieu.ten_phong,lich_chieu.id as id_lich_chieu from lich_chieu  inner join chi_nhanh_phim on chi_nhanh_phim.id=lich_chieu.id_chi_nhanh_phim 
      inner join phim on chi_nhanh_phim.id_phim = phim.id 
      inner join chi_nhanh on chi_nhanh_phim.id_chi_nhanh=chi_nhanh.id
      inner join khung_gio_chieu on khung_gio_chieu.id=lich_chieu.id_khung_gio_chieu
      inner join khung_gio_phong_chieu on khung_gio_chieu.id=khung_gio_phong_chieu.id_khung_gio_chieu
      inner join phong_chieu on khung_gio_phong_chieu.id_phong_chieu=phong_chieu.id                                                   
      where phim.id=? ";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id));
    }
    public function m_chi_nhanh($id){
        $sql = "Select *, phim.name as ten_phim, chi_nhanh.ten_chi_nhanh,khung_gio_chieu.gio_bat_dau,phong_chieu.ten_phong,lich_chieu.id as id_lich_chieu from lich_chieu  inner join chi_nhanh_phim on chi_nhanh_phim.id=lich_chieu.id_chi_nhanh_phim 
      inner join phim on chi_nhanh_phim.id_phim = phim.id 
      inner join chi_nhanh on chi_nhanh_phim.id_chi_nhanh=chi_nhanh.id
      inner join khung_gio_chieu on khung_gio_chieu.id=lich_chieu.id_khung_gio_chieu
      inner join khung_gio_phong_chieu on khung_gio_chieu.id=khung_gio_phong_chieu.id_khung_gio_chieu
      inner join phong_chieu on khung_gio_phong_chieu.id_phong_chieu=phong_chieu.id                                                   
      where phim.id=?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id));
    }

}
?>











