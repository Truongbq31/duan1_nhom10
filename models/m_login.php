<?php
require_once('database.php');
class m_login extends database {
    // xây dựng lấy danh sách hàng hóa
    public function check_admin($email,$mat_khau){
        $sql = "SELECT * FROM nguoi_dung where email = '$email' and password = '$mat_khau' and vai_tro = 0";//chuỗi câu truy vấn dữ liệu
        $this -> setQuery($sql);
        //lấy nhiều dòng dữ liệu(Trả về 1 mảng dữ liệu)
        return $this->loadAllRows();
    }
    public function check_user($email,$mat_khau){
        $sql = "SELECT * FROM nguoi_dung  where email = '$email' and password = '$mat_khau' and vai_tro != 0";//chuỗi câu truy vấn dữ liệu
        $this -> setQuery($sql);
        //lấy nhiều dòng dữ liệu(Trả về 1 mảng dữ liệu)
        return $this->loadAllRows();
    }
}
?>
