<?php
class c_phong_chieu{
    public function index(){
        include ("models/m_phong_chieu.php");
        $m_phong_chieu = new m_phong_chieu();
        $phong_chieu = $m_phong_chieu->doc_phong_chieu();
        $view = "views/phong_chieu/v_phong_chieu.php";
        include ("templates/layout.php");

        if(isset($_GET['update'])){
            echo "<script>alert('Sửa thành công')</script>";
        }
        if(isset($_GET['del'])){
            echo "<script>alert('Xóa thành công')</script>";
        }
    }

    public function add_phong_chieu() {
        if(isset($_POST['btn_add'])) {
            $id = null;
            $ten_phong = $_POST['ten_phong'];
            include ("models/m_phong_chieu.php");
            $m_phong_chieu = new m_phong_chieu();

            $validate = $m_phong_chieu->doc_phong_chieu();
            $count=0;
            foreach ($validate as $key => $value){
                if ($value->ten_phong == $ten_phong){
                    $count++;
                }
            }

            if ($count==0){
                $result = $m_phong_chieu->insert_phong_chieu($id, $ten_phong);
                echo "<script>alert('Thêm thành công')</script>";
            }else{
                echo "<script>alert('Phòng đã tồn tại')</script>";
            }

        }
        $view = "views/phong_chieu/v_add_phong_chieu.php";
        include ("templates/layout.php");
    }

    public function edit_phong_chieu() {
        if (isset($_GET['id'])) {
            include ("models/m_phong_chieu.php");
            $m_phong_chieu = new m_phong_chieu();
            $id = $_GET['id'];
            $phong_chieu_details = $m_phong_chieu->read_phong_chieu_by_id($id);
            if (isset($_POST['btn_save'])) {
                $ten_phong = $_POST['ten_phong'];
                $result = $m_phong_chieu->edit_phong_chieu($id, $ten_phong);
                if ($result) {
                    $update = "done";
                    header("location: phong_chieu.php?update=$update");
                } else {
                    echo "<script>alert('Sửa không thành công')</script>";
                }
            }
        }
        $view = "views/phong_chieu/v_edit_phong_chieu.php";
        include ("templates/layout.php");
    }

    public function del_phong_chieu(){
        include ("models/m_phong_chieu.php");
        $m_phong_chieu= new m_phong_chieu();
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $m_phong_chieu->delete_phong_chieu($id);
        }
        $del="done";
        header("location: phong_chieu.php?del=$del");
    }
}



