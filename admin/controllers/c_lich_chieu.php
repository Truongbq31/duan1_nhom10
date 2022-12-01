<?php
class c_lich_chieu{
    public function index() {
        include ("models/m_lich_chieu.php");
        $m_lich_chieu = new m_lich_chieu();
        $lich_chieu = $m_lich_chieu->doc_lich_chieu();
        $view = "views/lich_chieu/v_lich_chieu.php";
        include ("templates/layout.php");

        if(isset($_GET['update'])){
            echo "<script>alert('Sửa thành công')</script>";
        }
        if(isset($_GET['del'])){
            echo "<script>alert('Xóa thành công')</script>";
        }
    }

    public function add_lich_chieu() {
        include ("models/m_chinhanh_phim.php");
        $m_chinhanh_phim = new m_chinhanh_phim();
        $chinhanh_phim = $m_chinhanh_phim->doc_chinhanh_phim();

        include ("models/m_khung_gio_chieu.php");
        $m_kgc = new m_khung_gio_chieu();
        $kgc = $m_kgc->doc_khung_gio_chieu();

        if (isset($_POST['btn_add'])) {
            $id = null;
            $id_chi_nhanh_phim = $_POST['id_chi_nhanh_phim'];
            $id_khung_gio_chieu = $_POST['id_khung_gio_chieu'];
            $ngay_chieu = $_POST['ngay_chieu'];

            include ("models/m_lich_chieu.php");
            $m_lich_chieu = new m_lich_chieu();
            $result = $m_lich_chieu->insert_lichchieu($id, $id_chi_nhanh_phim, $id_khung_gio_chieu, $ngay_chieu);

            if ($result) {
                echo "<script>alert('Thêm thành công')</script>";
            } else {
                echo "<script>alert('Thêm không thành công')</script>";
            }
        }
        $view = "views/lich_chieu/v_add_lich_chieu.php";
        include ("templates/layout.php");
    }
//
    public function edit_lich_chieu() {
        include ("models/m_chinhanh_phim.php");
        $m_chinhanh_phim = new m_chinhanh_phim();
        $chinhanh_phim = $m_chinhanh_phim->doc_chinhanh_phim();

        include ("models/m_khung_gio_chieu.php");
        $m_kgc = new m_khung_gio_chieu();
        $kgc = $m_kgc->doc_khung_gio_chieu();

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            include ("models/m_lich_chieu.php");
            $m_lich_chieu = new m_lich_chieu();
            $lich_chieu_details = $m_lich_chieu->read_lich_chieu_by_id($id);
            if (isset($_POST['btn_save'])) {
                $id_chi_nhanh_phim = $_POST['id_chi_nhanh_phim'];
                $id_khung_gio_chieu = $_POST['id_khung_gio_chieu'];
                $ngay_chieu = $_POST['ngay_chieu'];

                $result = $m_lich_chieu->edit_lich_chieu($id, $id_chi_nhanh_phim,$id_khung_gio_chieu,$ngay_chieu);

                if ($result) {
                    $update = "done";
                    header("location: lich_chieu.php?update=$update");
                } else {
                    echo "<script>alert('Sửa không thành công')</script>";
                }
            }
        }
        $view = "views/lich_chieu/v_edit_lich_chieu.php";
        include ("templates/layout.php");
    }

    public function del_lich_chieu(){
        include ("models/m_lich_chieu.php");
        $m_lich_chieu= new m_lich_chieu();
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $m_lich_chieu->delete_lich_chieu($id);
        }
        $del="done";
        header("location: lich_chieu.php?del=$del");
    }

}