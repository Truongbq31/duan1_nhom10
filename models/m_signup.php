<?php
require_once('database.php');
class m_signup extends database {
    // xây dựng lấy danh sách hàng hóa
    public function doc_signup($id,$email,$password,$username,$vai_tro){
        $sql = "INSERT INTO nguoi_dung VALUES (?,?,?,?,?)";//chuỗi câu truy vấn dữ liệu
        $this -> setQuery($sql);
        //lấy nhiều dòng dữ liệu(Trả về 1 mảng dữ liệu)
        return $this ->execute(array($id,$email,$password,$username,$vai_tro));
    }
}
?>
