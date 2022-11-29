<?php
require_once ('database.php');
class m_khung_gio_phong_chieu extends database {
    public function doc_khung_gio_phong_chieu(){
        $sql = "SELECT *, khung_gio_phong_chieu.id as id_kgpc FROM khung_gio_phong_chieu inner join phong_chieu on phong_chieu.id=khung_gio_phong_chieu.id_phong_chieu
        inner join khung_gio_chieu on khung_gio_chieu.id=khung_gio_phong_chieu.id_khung_gio_chieu";//chuỗi câu truy vấn dữ liệu
        $this -> setQuery($sql);
        //lấy nhiều dòng dữ liệu(Trả về 1 mảng dữ liệu)
        return $this -> loadAllRows();
    }

    public function insert_khung_gio_phong_chieu($id, $id_phong_chieu, $id_khung_gio_chieu) {
        $sql = "insert into khung_gio_phong_chieu values (?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $id_phong_chieu, $id_khung_gio_chieu));
    }

    public function edit_khung_gio_phong_chieu($id, $id_phong_chieu, $id_khung_gio_chieu) {
        $sql = "update khung_gio_phong_chieu set id_phong_chieu = ?, id_khung_gio_chieu=? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id_phong_chieu, $id_khung_gio_chieu, $id));
    }

    public function read_khunggiophongchieu_by_id($id) {
        $sql = "select *, phong_chieu.id as id_pc, khung_gio_chieu.id as id_kgc from khung_gio_phong_chieu INNER JOIN phong_chieu on phong_chieu.id=khung_gio_phong_chieu.id_phong_chieu
        INNER JOIN khung_gio_chieu on khung_gio_chieu.id=khung_gio_phong_chieu.id_khung_gio_chieu 
        where khung_gio_phong_chieu.id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function delete_khung_gio_phong_chieu($id) {
        $sql = "Delete from khung_gio_phong_chieu where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
}

