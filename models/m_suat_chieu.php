<?php
require "database.php";
class m_suat_chieu extends database {
    public function m_suat_chieu(){
        $id = $_GET['id'];
      $sql = "Select *, lich_chieu.id as id_lichchieu from lich_chieu inner join phim on phim.id=lich_chieu.id_phim where lich_chieu.id_phim=$id";
      $this->setQuery($sql);
      return $this->loadAllRows();
    }
}



