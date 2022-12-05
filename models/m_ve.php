<?php
session_start();
require("connect.php");
    $ghe_ngoi=$_SESSION["id"];
    $ten_phim =$_SESSION["ten_phim"];
    $gio_bat_dau=$_SESSION["gio_bat_dau"];
    $ngay_chieu = $_SESSION["ngay_chieu"];
    $phong_chieu = $_SESSION["phong_chieu"];
    $chi_nhanh = $_SESSION["chi_nhanh"];
//    $gia=$_POST["gia"];
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $ngay_dat=date("H:i a d-m-Y");
    echo $ngay_dat;
    $gia = $_SESSION['gia'];
    $sql="INSERT INTO ve VALUE('','$ten_phim','$gio_bat_dau','$ngay_chieu','$phong_chieu','$chi_nhanh','$ghe_ngoi','$ngay_dat','$gia')";
    $conn->exec($sql);
    $msg = "done";
    header("location:../index.php?msg=$msg");
?>
