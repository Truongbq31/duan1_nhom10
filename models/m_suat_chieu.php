<?php
require "database.php";
class m_suat_chieu extends database {
    public function m_suat_chieu(){
        $id = $_GET['id'];
      $sql = "Select *, phim.id as id_phim, lich_chieu.id as id_lichchieu from lich_chieu inner join phim on phim.id=lich_chieu.id_phim 
      inner join phong_chieu on phong_chieu.id= lich_chieu.id_phong_chieu 
      inner join gio_chieu on gio_chieu.id=lich_chieu.id_gio_chieu
      where lich_chieu.id_phim=$id";
      $this->setQuery($sql);
      return $this->loadAllRows();
    }
}



