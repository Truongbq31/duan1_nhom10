<?php
require_once "database.php";
class m_theloai extends database{
    public function doc_theloai(){
        $sql = "SELECT * from loai_phim";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
