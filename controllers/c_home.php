<?php
//session_start();
//$gio_bat_dau = $_SESSION['gio_bat_dau'];
class c_home {
    public function c_home(){
        include("models/m_home.php");
        $m_home = new m_home();
        $phim = $m_home->m_home();
        $view = "views/home/v_home.php";
        include ("templates/layout.php");
        if(isset($_GET['login'])){
            echo "<script>alert('Đăng nhập thành công')</script>";
        }
        if(isset($_GET['online'])){
            echo "<script>alert('Đặt vé thành công')</script>";
        }
        if(isset($_GET['offline'])){
            echo "<script>alert('Vui lòng có mặt trước giờ chiếu để thanh toán vé')</script>";
        }
    }
}