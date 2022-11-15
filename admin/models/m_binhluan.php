<?php
require_once('database.php');
class m_binhluan extends database {
    // xây dựng lấy danh sách hàng hóa
    public function doc_binh_luan(){
        $sql = "SELECT *, comment.id as id_bl FROM nguoi_dung inner join comment on nguoi_dung.id=comment.id_nguoi_dung
                    INNER JOIN phim on phim.id=comment.id_phim";//chuỗi câu truy vấn dữ liệu
        $this -> setQuery($sql);
        //lấy nhiều dòng dữ liệu(Trả về 1 mảng dữ liệu)
        return $this -> loadAllRows();
    }


    public function delete_binhluan($id) {
        $sql = "delete from comment where id =?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }

}
?>
