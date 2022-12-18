<?php
class c_khung_gio_phong_chieu{
    public function index(){
        include ("models/m_khung_gio_phong_chieu.php");
        $m_khung_gio_phong_chieu = new m_khung_gio_phong_chieu();
        $kgpc = $m_khung_gio_phong_chieu->doc_khung_gio_phong_chieu();
        $view = "views/khung_gio_phong_chieu/v_khung_gio_phong_chieu.php";
        include ("templates/layout.php");

        if(isset($_GET['update'])){
            echo "<script>alert('Sửa thành công')</script>";
        }
        if(isset($_GET['del'])){
            echo "<script>alert('Xóa thành công')</script>";
        }
    }

    public function add_khung_gio_phong_chieu() {
        include ("models/m_phong_chieu.php");
        $m_phong_chieu = new m_phong_chieu();
        $phong_chieu = $m_phong_chieu->doc_phong_chieu();

        include ("models/m_khung_gio_chieu.php");
        $m_khung_gio_chieu = new m_khung_gio_chieu();
        $khung_gio_chieu = $m_khung_gio_chieu->doc_khung_gio_chieu();
        if(isset($_POST['btn_add'])) {
            $id = null;
            $id_phong_chieu = $_POST['id_phong_chieu'];
            $id_khung_gio_chieu = $_POST['id_khung_gio_chieu'];
            include ("models/m_khung_gio_phong_chieu.php");
            $m_khung_gio_phong_chieu = new m_khung_gio_phong_chieu();
            $validate = $m_khung_gio_phong_chieu->doc_khung_gio_phong_chieu();
            $count=0;
            foreach ($validate as $key => $value){
                if ($value->id_phong_chieu == $id_phong_chieu && $value->id_khung_gio_chieu == $id_khung_gio_chieu){
                    $count++;
                }
            }
            if ($count==0){
                $result = $m_khung_gio_phong_chieu->insert_khung_gio_phong_chieu($id, $id_phong_chieu, $id_khung_gio_chieu);
                echo "<script>alert('Thêm thành công')</script>";
            }else{
                echo "<script>alert('Đã tồn tại')</script>";
            }

        }
        $view = "views/khung_gio_phong_chieu/v_add_khung_gio_phong_chieu.php";
        include ("templates/layout.php");
    }

    public function edit_khung_gio_phong_chieu() {
        include ("models/m_phong_chieu.php");
        $m_phong_chieu = new m_phong_chieu();
        $phong_chieu = $m_phong_chieu->doc_phong_chieu();

        include ("models/m_khung_gio_chieu.php");
        $m_khung_gio_chieu = new m_khung_gio_chieu();
        $khung_gio_chieu = $m_khung_gio_chieu->doc_khung_gio_chieu();

        if (isset($_GET['id'])) {
            include ("models/m_khung_gio_phong_chieu.php");
            $m_kgpc = new m_khung_gio_phong_chieu();
            $id = $_GET['id'];
            $khungGioChieu_details = $m_kgpc->read_khunggiophongchieu_by_id($id);
            if (isset($_POST['btn_save'])) {
                $id_phong_chieu = $_POST['id_phong_chieu'];
                $id_khung_gio_chieu = $_POST['id_khung_gio_chieu'];
                $result = $m_kgpc->edit_khung_gio_phong_chieu($id, $id_phong_chieu, $id_khung_gio_chieu);
                if ($result) {
                    $update = "done";
                    header("location: khung_gio_phong_chieu.php?update=$update");
                } else {
                    echo "<script>alert('Sửa không thành công')</script>";
                }
            }
        }
        $view = "views/khung_gio_phong_chieu/v_edit_khung_gio_phong_chieu.php";
        include ("templates/layout.php");
    }

    public function del_khung_gio_phong_chieu(){
        include ("models/m_khung_gio_phong_chieu.php");
        $m_kgpc= new m_khung_gio_phong_chieu();
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $m_kgpc->delete_khung_gio_phong_chieu($id);
        }
        $del="done";
        header("location: khung_gio_phong_chieu.php?del=$del");
    }
}


