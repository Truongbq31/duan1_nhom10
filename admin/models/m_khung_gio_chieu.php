<?php
require_once ('database.php');
class m_khung_gio_chieu extends database {
    public function doc_khung_gio_chieu(){
        $sql = "SELECT * FROM khung_gio_chieu";//chuỗi câu truy vấn dữ liệu
        $this -> setQuery($sql);
        //lấy nhiều dòng dữ liệu(Trả về 1 mảng dữ liệu)
        return $this -> loadAllRows();
    }

    public function insert_khung_gio_chieu($id, $gio_bat_dau) {
        $sql = "insert into khung_gio_chieu values (?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $gio_bat_dau));
    }

    public function edit_khung_gio_chieu($id, $gio_bat_dau) {
        $sql = "update khung_gio_chieu set gio_bat_dau = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($gio_bat_dau, $id));
    }

    public function read_khunggiochieu_by_id($id) {
        $sql = "select * from khung_gio_chieu where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function delete_khung_gio_chieu($id) {
        $sql = "Delete from khung_gio_chieu where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
}
