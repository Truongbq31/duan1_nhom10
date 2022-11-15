<?php
include ("models/m_home.php");
class c_home {
    public function thong_ke_website() {
        $m_thong_ke = new m_home();
//        $thong_ke_hh = $m_thong_ke->thong_ke_hang_hoa();
//        $thong_ke_lh = $m_thong_ke->thong_ke_loai_hang();
//        $thong_ke_kh = $m_thong_ke->thong_ke_khach_hang();
//        $thong_ke_bl = $m_thong_ke->thong_ke_binh_luan();
        $view = "views/home/v_home.php";
        include ("templates/layout.php");

        if(isset($_GET['login'])){
            echo "<script>alert('Đăng nhập thành công')</script>";
        }
    }
}
// làm tính năng đăng nhập nhảy vào trang m_home.php
// nếu như không đăng nhập mà vào link của m_home.php sẽ bị bật về trang login
// làm tính năng đăng xuất
//cắt trang chart html