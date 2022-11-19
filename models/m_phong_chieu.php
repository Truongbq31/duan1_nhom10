<?php
require_once "database.php";
class m_phong_chieu extends database{
    public function m_phong_chieu(){
        $sql = "select * from phong_chieu";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
