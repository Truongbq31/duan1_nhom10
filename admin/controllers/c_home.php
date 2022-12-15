<?php
include ("models/m_home.php");
class c_home {
    public function thong_ke() {
        $m_thong_ke = new m_home();
        $thong_ke = $m_thong_ke->thong_ke();
        $sum_all=$m_thong_ke->sum_all();
        $sum_comment=$m_thong_ke->sum_comment();
        $result=$m_thong_ke->sum_allphim();
        $phim_noi_bat = $m_thong_ke->phim_noi_bat();
        $thong_ke_chi_tiet = $m_thong_ke->thong_ke_chi_tiet();
        $view = "views/home/v_home.php";
        include ("templates/layout.php");
        
        if(isset($_GET['login'])){
            echo "<script>alert('Đăng nhập thành công')</script>";
        }
    }
}