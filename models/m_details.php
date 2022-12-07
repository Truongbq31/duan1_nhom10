<?php
require "database.php";
class m_details extends database{
    public function m_details(){
        $id = $_GET['id'];
        $sql="SELECT *, phim.id as id_phim FROM phim inner join loai_phim on loai_phim.id=phim.id_loai_phim where phim.id=$id";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function load_lich_chieu(){
        $id = $_GET['id'];
        $sql="SELECT *, phim.id as id_phim,lich_chieu.id as id_lich_chieu FROM phim 
           inner join loai_phim on loai_phim.id=phim.id_loai_phim
     inner join chi_nhanh_phim on chi_nhanh_phim.id_phim=phim.id
           inner join lich_chieu on lich_chieu.id_chi_nhanh_phim=chi_nhanh_phim.id
           where phim.id=$id group by phim.id";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function m_phim(){
        $sql="SELECT *, phim.id as id_phim, loai_phim.id as id_loai FROM phim inner join loai_phim on loai_phim.id=phim.id_loai_phim";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function m_comment(){
        $id = $_GET['id'];
        $sql = "select * from comment inner join nguoi_dung on nguoi_dung.id=comment.id_nguoi_dung
            inner join phim on phim.id=comment.id_phim where phim.id=$id";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function insert_comment($id_nguoi_dung, $id_phim, $ngay_binh_luan, $noi_dung){
        $sql = "insert into comment (id_nguoi_dung, id_phim,ngay_binh_luan,noi_dung) values (?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id_nguoi_dung, $id_phim, $ngay_binh_luan, $noi_dung));
    }
}
