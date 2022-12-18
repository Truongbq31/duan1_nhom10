<?php
class c_khung_gio_chieu{
    public function index(){
        include ("models/m_khung_gio_chieu.php");
        $m_khung_gio_chieu = new m_khung_gio_chieu();
        $khung_gio_chieu = $m_khung_gio_chieu->doc_khung_gio_chieu();
        $view = "views/khung_gio_chieu/v_khung_gio_chieu.php";
        include ("templates/layout.php");

        if(isset($_GET['update'])){
            echo "<script>alert('Sửa thành công')</script>";
        }
        if(isset($_GET['del'])){
            echo "<script>alert('Xóa thành công')</script>";
        }
    }

    public function add_khung_gio_chieu() {
        if(isset($_POST['btn_add'])) {
            $id = null;
            $gio_bat_dau = $_POST['gio_bat_dau'];
            include ("models/m_khung_gio_chieu.php");
            $m_khung_gio_chieu = new m_khung_gio_chieu();

            $validate = $m_khung_gio_chieu->doc_khung_gio_chieu();
            $count=0;
            foreach ($validate as $key => $value){
                if ($value->gio_bat_dau == $gio_bat_dau){
                    $count++;
                }
            }

            if ($count==0){
                $result = $m_khung_gio_chieu->insert_khung_gio_chieu($id, $gio_bat_dau);
                echo "<script>alert('Thêm thành công')</script>";
            }else{
                echo "<script>alert('Khung giờ đã tồn tại')</script>";
            }
        }
        $view = "views/khung_gio_chieu/v_add_khung_gio_chieu.php";
        include ("templates/layout.php");
    }

    public function edit_khung_gio_chieu() {
        if (isset($_GET['id'])) {
            include ("models/m_khung_gio_chieu.php");
            $m_khung_gio_chieu = new m_khung_gio_chieu();
            $id = $_GET['id'];
            $khungGioChieu_details = $m_khung_gio_chieu->read_khunggiochieu_by_id($id);
            if (isset($_POST['btn_save'])) {
                $gio_bat_dau = $_POST['gio_bat_dau'];
                $result = $m_khung_gio_chieu->edit_khung_gio_chieu($id, $gio_bat_dau);
                if ($result) {
                    $update = "done";
                    header("location: khung_gio_chieu.php?update=$update");
                } else {
                    echo "<script>alert('Sửa không thành công')</script>";
                }
            }
        }
        $view = "views/khung_gio_chieu/v_edit_khung_gio_chieu.php";
        include ("templates/layout.php");
    }

    public function del_khung_gio_chieu(){
        include ("models/m_khung_gio_chieu.php");
        $m_khung_gio_chieu= new m_khung_gio_chieu();
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $m_khung_gio_chieu->delete_khung_gio_chieu($id);
        }
        $del="done";
        header("location: khung_gio_chieu.php?del=$del");
    }
}

