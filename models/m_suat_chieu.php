<?php
require "database.php";
class m_suat_chieu extends database {
    public function m_suat_chieu()
    {
        $id = $_GET['id'];
      $sql = "SELECT ngay_chieu,ten_phong,gio_bd,lich_chieu.id as id_lich_chieu from lich_chieu inner join phim on lich_chieu.id_phim=phim.id
inner join phong_chieu on phong_chieu.id=lich_chieu.id_phong_chieu
inner join gio_chieu on gio_chieu.id=lich_chieu.id_gio_chieu where phim.id='$id'";
      $this->setQuery($sql);
      return $this->loadAllRows();
    }
}



