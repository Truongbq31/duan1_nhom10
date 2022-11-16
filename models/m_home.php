<?php
require "database.php";
class m_home extends database{
    public function m_home(){
        $sql="SELECT *, phim.id as id_phim FROM phim inner join loai_phim on loai_phim.id=phim.id_loai_phim";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}