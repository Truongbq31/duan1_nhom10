<?php
require_once('database.php');
class m_home extends database{
   
    public function thong_ke(){
        $sql = "SELECT * FROM ve";//chuỗi câu truy vấn dữ liệu
        $this -> setQuery($sql);
        //lấy nhiều dòng dữ liệu(Trả về 1 mảng dữ liệu)
        return $this -> loadAllRows();
    }
    public function sum_all(){
        $sql="SELECT ve.id,COUNT(ve.ghe_ngoi) as Sum_ghe_ngoi,SUM(ve.gia) as tong_tien,lich_chieu.ngay_chieu,COUNT(gio_bat_dau) as Sum_gio_bat_dau,COUNT(phim.name) as Sum_phim,chi_nhanh.ten_chi_nhanh FROM ve INNER JOIN lich_chieu on ve.id_lich_chieu=lich_chieu.id INNER JOIN chi_nhanh_phim ON chi_nhanh_phim.id=lich_chieu.id_chi_nhanh_phim INNER JOIN khung_gio_chieu ON khung_gio_chieu.id=lich_chieu.id_khung_gio_chieu INNER JOIN phim ON phim.id= chi_nhanh_phim.id_phim INNER JOIN chi_nhanh ON chi_nhanh.id=chi_nhanh_phim.id_chi_nhanh";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    public function sum_comment(){
        $sql="SELECT COUNT(comment.id) as tongcomment FROM comment";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    public function sum_allphim(){
        $sql="SELECT ve.id, sum(ve.gia) as tong_tien, phim.name, MIN(ve.gia) as gia_thap_nhat,MAX(ve.gia) as gia_cao_nhat,AVG(ve.gia) as gia_trung_binh FROM ve INNER JOIN lich_chieu on ve.id_lich_chieu=lich_chieu.id INNER JOIN chi_nhanh_phim ON chi_nhanh_phim.id=lich_chieu.id_chi_nhanh_phim INNER JOIN khung_gio_chieu ON khung_gio_chieu.id=lich_chieu.id_khung_gio_chieu INNER JOIN phim ON phim.id= chi_nhanh_phim.id_phim INNER JOIN chi_nhanh ON chi_nhanh.id=chi_nhanh_phim.id_chi_nhanh GROUP BY chi_nhanh.ten_chi_nhanh ORDER BY ve.gia ASC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    
}
?>
