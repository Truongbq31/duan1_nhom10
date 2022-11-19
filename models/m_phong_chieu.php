<?php
require_once "database.php";
class m_phong_chieu extends database{
    public function m_phong_chieu(){
        $id = $_GET['id'];
        $sql = "select * from lich_chieu inner join phong_chieu on phong_chieu.id=lich_chieu.id_phong_chieu 
        inner join gio_chieu on gio_chieu.id=lich_chieu.id_gio_chieu 
        inner join phim on phim.id=lich_chieu.id_phim 
        where lich_chieu.id = $id ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
