<?php
session_start();
require("connect.php");
    if(isset($_SESSION['paid'])){
        $ghe_ngoi=$_SESSION["id"];
        $id_lich_chieu =$_SESSION["id_lich_chieu"];
        $id_nguoi_dung = $_SESSION["id_nguoi_dung"];
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ngay_dat=date("H:i a d-m-Y");
        $gia = $_SESSION['gia'];

        $permitted_chars = '0123456789ABCDEFZHIKLMNOPQRSTVX';
        $ma_hoa_don = substr(str_shuffle($permitted_chars), 0, 10);

        $trang_thai = $_SESSION['trang_thai'];
        $sql="INSERT INTO ve VALUE('','$id_lich_chieu','$id_nguoi_dung','$ghe_ngoi','$ngay_dat','$gia','$ma_hoa_don','$trang_thai')";
        $conn->exec($sql);
        header("location:../index.php?online=done");

//        //Send mail
//        $to = $_SESSION['email'];
//        $subject = "VÉ XEM PHIM CỦA QUÝ KHÁCH ĐÃ ĐẶT THÀNH CÔNG";
//        $message = "Vé xem phim của quý khách đã được đặt thành công vào lúc";
//        $header = "From:Cgv@cinema.com.vn";
//        $send_mail = mail($to,$subject,$message,$header);
//        //end send mail
//        if($send_mail == true){
//            $online = "done";
//            header("location:../index.php?online=$online");
//        }else{
//            $false = "done";
//            header("location:../index.php?false=$false");
//        }
    }
    if(isset($_SESSION['unpaid'])){
        header("location:../index.php?unpaid=done");
    }
    if(isset($_GET['offline'])){
        $ghe_ngoi = $_SESSION["ghe_ngoi"];
        $id_lich_chieu =$_SESSION["id_lich_chieu"];
        $id_nguoi_dung = $_SESSION["id_nguoi_dung"];
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ngay_dat=date("H:i a d-m-Y");
        $gia = $_SESSION['gia'];

        $permitted_chars = '0123456789ABCDEFZHIKLMNOPQRSTVX';
        $ma_hoa_don = substr(str_shuffle($permitted_chars), 0, 10);

        $trang_thai = $_SESSION['trang_thai'];
        $sql="INSERT INTO ve VALUE('','$id_lich_chieu','$id_nguoi_dung','$ghe_ngoi','$ngay_dat','$gia','$ma_hoa_don','$trang_thai')";
        $conn->exec($sql);
        header("location:../index.php?offline=done");
        die();
    }
?>
