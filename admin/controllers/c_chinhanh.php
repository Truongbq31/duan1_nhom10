<?php
class c_chinhanh{
    public function index(){
        include ("models/m_chinhanh.php");
        $m_chinhanh = new m_chinhanh();
        $chinhanh = $m_chinhanh->doc_chinhanh();
        $view = "views/chi_nhanh/v_chinhanh.php";
        include ("templates/layout.php");

        if(isset($_GET['update'])){
            echo "<script>alert('Sửa thành công')</script>";
        }
        if(isset($_GET['del'])){
            echo "<script>alert('Xóa thành công')</script>";
        }
    }

    public function add_chinhanh() {
        include ("models/m_chinhanh.php");
        if (isset($_POST['btn_add'])) {
            $id = null;
            $ten_chi_nhanh = $_POST['ten_chi_nhanh'];
            $m_chinhanh = new m_chinhanh();
            $validate = $m_chinhanh->doc_chinhanh();
            $count = 0;
            foreach ($validate as $key => $value){
                if ($value->ten_chi_nhanh == $ten_chi_nhanh){
                    $count++;
                }
            }

            if ($count==0){
                $result = $m_chinhanh->insert_chinhanh($id, $ten_chi_nhanh);
                echo "<script>alert('Thêm thành công!')</script>";
            }else{
                echo "<script>alert('Chi nhánh đã tồn tại!')</script>";
            }

        }
        $view = "views/chi_nhanh/v_add_chinhanh.php";
        include ("templates/layout.php");
    }

    public function edit_chinhanh() {
        include ("models/m_chinhanh.php");
        $m_chinhanh = new m_chinhanh();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $chinhanh_details = $m_chinhanh->read_chinhanh_by_id($id);
            if (isset($_POST['btn_save'])) {
                $ten_chi_nhanh = $_POST['ten_chi_nhanh'];
                $m_chinhanh = new m_chinhanh();
                $result = $m_chinhanh->edit_chinhanh($id, $ten_chi_nhanh);
                if ($result) {
                    $update = "done";
                    header("location: chinhanh.php?update=$update");
                } else {
                    echo "<script>alert('Sửa không thành công')</script>";
                }
            }
        }
        $view = "views/chi_nhanh/v_edit_chinhanh.php";
        include ("templates/layout.php");
    }

    public function del_chinhanh(){
        include ("models/m_chinhanh.php");
        $m_chinhanh= new m_chinhanh();
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $m_chinhanh->delete_chinhanh($id);
        }
        $del="done";
        header("location: chinhanh.php?del=$del");
    }
}