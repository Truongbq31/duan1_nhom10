<?php
session_start();
require("connect.php");
    $ghe_ngoi=$_SESSION["id"];
    $id_lich_chieu =$_SESSION["id_lich_chieu"];
    $id_nguoi_dung = $_SESSION["id_nguoi_dung"];


    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $ngay_dat=date("H:i a d-m-Y");
    echo $ngay_dat;
    $gia = $_SESSION['gia'];
    $trang_thai = isset($_SESSION['online']) ? 1 : 0;
    $sql="INSERT INTO ve VALUE('','$id_lich_chieu','$id_nguoi_dung','$ghe_ngoi','$ngay_dat','$gia','$trang_thai')";
    $conn->exec($sql);

    if($trang_thai == 1){
        $online = "done";
        header("location:../index.php?online=$online");
    }else{
        $offline = "done";
        header("location:../index.php?offline=$offline");
    }

?>
