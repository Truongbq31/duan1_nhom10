<?php
//session_start();
//if(isset($_SESSION['admin'])){
include ("controllers/c_home.php");
$thong_ke = new c_home();
$thong_ke->thong_ke_website();
//}else{
//    echo "<script>alert('Cần đăng nhập để vào admin')</script>";
//}