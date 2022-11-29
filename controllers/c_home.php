<?php
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
    }
}