<?php
session_start();
require("connect.php");
    if(isset($_SESSION['paid'])){
        if(isset($_SESSION['unpaid'])){
            unset($_SESSION['unpaid']);
        }
        if(isset($_SESSION['offline'])){
            unset($_SESSION['offline']);
        }

        $ghe_ngoi=$_SESSION["id"];
        $id_lich_chieu =$_SESSION["id_lich_chieu"];
        $id_nguoi_dung = $_SESSION["id_nguoi_dung"];
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ngay_dat=date("H:i a d-m-Y");
        $gia = $_SESSION['gia'];
        $trang_thai = $_SESSION['trang_thai'];
        $sql="INSERT INTO ve VALUE('','$id_lich_chieu','$id_nguoi_dung','$ghe_ngoi','$ngay_dat','$gia','$trang_thai')";
        $conn->exec($sql);
        $online = "done";
        header("location:../index.php?online=$online");

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
        if(isset($_SESSION['paid'])){
            unset($_SESSION['paid']);
        }
        if(isset($_SESSION['offline'])){
            unset($_SESSION['offline']);
        }

        $unpaid = "unpaid";
        header("location:../index.php?unpaid=$unpaid");
    }
    if(isset($_GET['offline'])){
        if(isset($_SESSION['paid'])){
            unset($_SESSION['paid']);
        }
        if(isset($_SESSION['unpaid'])){
            unset($_SESSION['unpaid']);
        }

        $ghe_ngoi = $_SESSION["ghe_ngoi"];
        $id_lich_chieu =$_SESSION["id_lich_chieu"];
        $id_nguoi_dung = $_SESSION["id_nguoi_dung"];
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ngay_dat=date("H:i a d-m-Y");
        $gia = $_SESSION['gia'];
        $trang_thai = $_SESSION['trang_thai'];
        $sql="INSERT INTO ve VALUE('','$id_lich_chieu','$id_nguoi_dung','$ghe_ngoi','$ngay_dat','$gia','$trang_thai')";
        $conn->exec($sql);
        $offline = "offline";
        header("location:../index.php?offline=$offline");
        die();
    }
?>
