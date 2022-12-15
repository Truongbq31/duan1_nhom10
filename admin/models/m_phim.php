<?php
require_once('database.php');
class m_phim extends database {
    // xây dựng lấy danh sách hàng hóa
    public function doc_phim(){
        $sql = "SELECT *, phim.id as id_phim, loai_phim.id as id_loai FROM phim inner join loai_phim on loai_phim.id=phim.id_loai_phim";//chuỗi câu truy vấn dữ liệu
        $this -> setQuery($sql);
        //lấy nhiều dòng dữ liệu(Trả về 1 mảng dữ liệu)
        return $this -> loadAllRows();
    }
    public function insert_phim($id,$name,$rate,$description,$img,$link_demo,$id_loai_phim) {
        $sql = "INSERT INTO phim values (?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$name,$rate,$description,$img,$link_demo,$id_loai_phim));
    }

    public function edit_phim($id,$name,$rate,$description,$img, $link_demo, $id_loai_phim){
        $sql = "update PHIM set name=?, rate=?, description=?, img=?, link_demo=?, id_loai_phim=? where id=?";
        $this->setQuery($sql);
        return $this->execute(array($name, $rate, $description, $img, $link_demo, $id_loai_phim, $id));
    }

    public function read_phim_by_id($id) {
        $sql = "select * from phim inner join loai_phim on loai_phim.id=phim.id_loai_phim where phim.id=?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function delete_phim($id) {
        $sql = "Delete from phim where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
}
?>