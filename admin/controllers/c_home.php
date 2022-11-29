<?php
include ("models/m_home.php");
class c_home {
    public function thong_ke() {
        $m_thong_ke = new m_home();
        $thong_ke = $m_thong_ke->thong_ke();
        $view = "views/home/v_home.php";
        include ("templates/layout.php");

        if(isset($_GET['login'])){
            echo "<script>alert('Đăng nhập thành công')</script>";
        }
    }
}