<?php
session_start();
    include("controllers/c_nguoidung.php");
    if(isset($_SESSION['admin'])){
    $delete_nguoidung = new c_nguoidung();
    $delete_nguoidung->del_nguoidung();
}else{
    echo "<script>alert('Cần đăng nhập để vào admin')</script>";
}
?>