<?php
require "database.php";
class m_ds_phim extends database{
    public function m_ds_phim(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql="SELECT *, phim.id as id_phim FROM phim inner join loai_phim on loai_phim.id=phim.id_loai_phim
                where loai_phim.id = $id";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }
    }
}

