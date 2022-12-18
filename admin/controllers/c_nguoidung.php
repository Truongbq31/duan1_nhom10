<?php
class c_nguoidung{
    public function index() {
        include ("models/m_nguoidung.php");
        $m_nguoidung= new m_nguoidung();
        $nguoidung = $m_nguoidung->doc_nguoidung();
        $view = "views/nguoi_dung/v_nguoidung.php";

        if(isset($_GET['update'])){
            echo "<script>alert('Sửa thành công')</script>";
        }
        if(isset($_GET['del'])){
            echo "<script>alert('Xóa thành công')</script>";
        }
        include ("templates/layout.php");
    }

    public function add_nguoidung() {
        include ("models/m_nguoidung.php");
        if (isset($_POST['btn-add'])) {
            $id = null;
            $email = $_POST['email'];
            $mat_khau = $_POST['mat_khau'];
            $username = $_POST['username'];
            $vai_tro = $_POST['vai_tro'];

            $m_nguoidung = new m_nguoidung();

            $validate = $m_nguoidung->doc_nguoidung();
            $count=0;
            foreach ($validate as $key => $value){
                if ($value->email == $email){
                    $count++;
                }
            }

            if ($count==0){
                $result = $m_nguoidung->insert_nguoidung($id, $email, md5($mat_khau), $username, $vai_tro);
                echo "<script>alert('Thêm thành công')</script>";
            }else{
                echo "<script>alert('Email đăng kí đã tồn tại')</script>";
            }
        }
        $view = "views/nguoi_dung/v_add_nguoidung.php";
        include ("templates/layout.php");
    }

    public function edit_nguoidung(){
        include ("models/m_nguoidung.php");
        $m_nguoidung = new m_nguoidung();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $nguoidung_details = $m_nguoidung->read_nguoidung_by_id($id);
            if (isset($_POST['btn_save'])) {
                $email = $_POST['email'];
                $mat_khau = $_POST['mat_khau'];
                $username = $_POST['username'];
                $vai_tro = $_POST['vai_tro'];

                $m_nguoidung = new m_nguoidung();
                $result = $m_nguoidung->edit_nguoidung($id, $email, md5($mat_khau), $username, $vai_tro);
                if ($result) {
                    $update = "done";
                    header("location: nguoidung.php?update=$update");
                } else {
                    echo "<script>alert('Sửa không thành công')</script>";
                }
            }
        }
        $view = "views/nguoi_dung/v_edit_nguoidung.php";
        include ("templates/layout.php");
    }

    public function del_nguoidung(){
        include ("models/m_nguoidung.php");
        $m_nguoidung = new m_nguoidung();
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $m_nguoidung->delete_nguoidung($id);
        }
        $del="done";
        header("location: nguoidung.php?del=$del");
    }
}