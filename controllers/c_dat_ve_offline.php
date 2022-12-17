<?php
session_start();
class c_dat_ve_offline {
    public function c_ve_offline(){

        include ("admin/models/m_nguoidung.php");
        $m_nguoi_dung = new m_nguoidung();
        $nguoi_dung = $m_nguoi_dung->doc_nguoidung();

        $_SESSION['trang_thai'] = $_GET['trang_thai'];
        $_SESSION['gia'] = $_GET['gia'];
        $_SESSION['ghe_ngoi'] = $_GET['id'];

        if(isset($_POST['btn_submit'])){
            if($_SESSION['ghe_ngoi'] == "" || $_SESSION['gia'] == 0){
                echo "<script>alert('Quý khách chưa chọn ghế!')</script>";
            }
            if($_SESSION['ghe_ngoi'] != "" && $_SESSION['gia'] != 0){
                header("location: models/m_ve.php?offline=done");
            }
        }

        if(isset($_POST['btn_cancel'])){
            header("location:index.php?cancel=done");
        }

        $view = "views/thanh_toan/v_tt_offline.php";
        include ("templates/layout5.php");
    }

}

