<?php
class c_ngay_chieu{
    public function index() {
        include ("models/m_ngay_chieu.php");
        $m_ngay_chieu = new m_ngay_chieu();
        $ngay_chieu = $m_ngay_chieu->doc_ngay_chieu();
        $view = "views/ngay_chieu/v_ngay_chieu.php";
        include ("templates/layout.php");

        if(isset($_GET['update'])){
            echo "<script>alert('Sửa thành công')</script>";
        }
        if(isset($_GET['del'])){
            echo "<script>alert('Xóa thành công')</script>";
        }
    }

    public function add_ngay_chieu() {
        include ("models/m_ngay_chieu.php");
        if (isset($_POST['btn_add'])) {
            $id = null;
            $ngay = $_POST['ngay'];
            $m_ngay_chieu = new m_ngay_chieu();

            $validate = $m_ngay_chieu->doc_ngay_chieu();
            $count=0;
            foreach ($validate as $key => $value){
                if ($value->ngay == $ngay){
                    $count++;
                }
            }

            if ($count==0){
                $result = $m_ngay_chieu->insert_ngay_chieu($id, $ngay);
                echo "<script>alert('Thêm thành công')</script>";
            }else{
                echo "<script>alert('Đã tồn tại')</script>";
            }
        }
        $view = "views/ngay_chieu/v_add_ngay_chieu.php";
        include ("templates/layout.php");
    }
//
    public function edit_ngay_chieu() {
        include ("models/m_ngay_chieu.php");
        $m_ngay_chieu = new m_ngay_chieu();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $ngay_chieu_details = $m_ngay_chieu->read_ngay_chieu_by_id($id);
            if (isset($_POST['btn_save'])) {
                $ngay = $_POST['ngay'];
                $result = $m_ngay_chieu->edit_ngay_chieu($id, $ngay);
                if ($result) {
                    $update = "done";
                    header("location: ngay_chieu.php?update=$update");
                } else {
                    echo "<script>alert('Sửa không thành công')</script>";
                }
            }
        }
        $view = "views/ngay_chieu/v_edit_ngay_chieu.php";
        include ("templates/layout.php");
    }

    public function del_ngay_chieu(){
        include ("models/m_ngay_chieu.php");
        $m_ngay_chieu= new m_ngay_chieu();
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $m_ngay_chieu->delete_ngay_chieu($id);
        }
        $del="done";
        header("location: ngay_chieu.php?del=$del");
    }

}
