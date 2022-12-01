<?php
//session_start();
require("connect.php");
if(isset($_POST["ghe_ngoi"])){
    $ghe_ngoi=$_POST["ghe_ngoi"];
    if($ghe_ngoi==""){
        echo "<script>alert('Vui lòng chọn ghế ngồi')</script>";
        die();
    }
    $ten_phim =$_POST["ten_phim"];
    $gio_bat_dau=$_POST["gio_bat_dau"];
    $ngay_chieu = $_POST["ngay_chieu"];
    $phong_chieu = $_POST["phong_chieu"];
    $chi_nhanh = $_POST["chi_nhanh"];
//    $gia=$_POST["gia"];

    $ghe_ngoi = $_POST['ghe_ngoi'];
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $ngay_dat=date("H:i a d-m-Y");
    echo $ngay_dat;
    $sql="INSERT INTO ve VALUE('','$ten_phim','$gio_bat_dau','$ngay_chieu','$phong_chieu','$chi_nhanh','$ghe_ngoi','$ngay_dat')";
    $conn->exec($sql);
}
?>
