<?php
session_start();
if(isset($_SESSION['admin'])){
    include ("controllers/c_home.php");
    $thong_ke = new c_home();
    $thong_ke->thong_ke();
}else{
    header("location: ../login.php");
}
