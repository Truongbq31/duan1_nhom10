<?php
class c_ve{
    public function index(){
        include ("models/m_ve.php");
        $m_ve = new m_ve();
        $ve = $m_ve->doc_ve();
        $view = "views/ve/v_ve.php";
        include ("templates/layout.php");

        if(isset($_GET['del'])){
            echo "<script>alert('Xóa thành công')</script>";
        }
        if(isset($_GET['update'])){
            echo "<script>alert('Sửa thành công')</script>";
        }

    }
    public function del_ve(){
        include ("models/m_ve.php");
        $m_ve= new m_ve();
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $m_ve->delete_ve($id);
        }
        $del="done";
        header("location: ve.php?del=$del");
    }

    public function edit_ve() {
        if (isset($_GET['id'])) {
            include ("models/m_ve.php");
            $m_ve = new m_ve();
            $id = $_GET['id'];
            $status = $m_ve->read_ve_by_id($id);
            if (isset($_POST['btn_save'])) {
                $trang_thai = $_POST['trang_thai'];
                $result = $m_ve->edit_ve($id, $trang_thai);
                if ($result) {
                    $update = "done";
                    header("location: ve.php?update=$update");
                } else {
                    echo "<script>alert('Sửa không thành công')</script>";
                }
            }
        }
        $view = "views/ve/v_edit_ve.php";
        include ("templates/layout.php");
    }
}




