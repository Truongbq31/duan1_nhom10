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
}




