<?php
class c_binhluan{
    public function index() {
        include ("models/m_binhluan.php");
        $m_binhluan = new m_binhluan();
        $binh_luan = $m_binhluan->doc_binh_luan();
        $view = "views/binh_luan/v_binhluan.php";

        if(isset($_GET['update'])){
            echo "<script>alert('Sửa thành công')</script>";
        }
        if(isset($_GET['del'])){
            echo "<script>alert('Xóa thành công')</script>";
        }
        include ("templates/layout.php");
    }

    public function del_binhluan(){
        include ("models/m_binhluan.php");
        $m_binhluan = new m_binhluan();
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $m_binhluan->delete_binhluan($id);
        }
        $del="done";
        header("location: binh_luan.php?del=$del");
    }
}
