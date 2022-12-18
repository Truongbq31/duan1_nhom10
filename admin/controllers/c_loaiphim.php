<?php
class c_loaiphim{
    public function index() {
        include ("models/m_loaiphim.php");
        $m_loaiphim = new m_loaiphim();
        $loai_phim = $m_loaiphim->doc_loaiphim();
        $view = "views/loai_phim/v_loaiphim.php";
        include ("templates/layout.php");

        if(isset($_GET['update'])){
            echo "<script>alert('Sửa thành công')</script>";
        }
        if(isset($_GET['del'])){
            echo "<script>alert('Xóa thành công')</script>";
        }
    }

    public function add_loaiphim() {
        include ("models/m_loaiphim.php");
        if (isset($_POST['btn_add'])) {
            $id = null;
            $ten_loai = $_POST['ten_loai'];
            $m_loaiphim = new m_loaiphim();

            $validate = $m_loaiphim->doc_loaiphim();
            $count=0;
            foreach ($validate as $key => $value){
                if ($value->ten_loai == $ten_loai){
                    $count++;
                }
            }

            if ($count==0){
                $result = $m_loaiphim->insert_loaiphim($id, $ten_loai);
                echo "<script>alert('Thêm thành công')</script>";
            }else{
                echo "<script>alert('Loại phim đã tồn tại')</script>";
            }

        }
        $view = "views/loai_phim/v_add_loaiphim.php";
        include ("templates/layout.php");
    }
//
    public function edit_loaiphim() {
        include ("models/m_loaiphim.php");
        $m_loaiphim = new m_loaiphim();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $loaiphim_details = $m_loaiphim->read_loaiphim_by_id($id);
            if (isset($_POST['btn_save'])) {
                $ten_loai = $_POST['ten_loai'];
                $m_loaiphim = new m_loaiphim();
                $result = $m_loaiphim->edit_loaiphim($id, $ten_loai);
                if ($result) {
                    $update = "done";
                    header("location: loaiphim.php?update=$update");
                } else {
                    echo "<script>alert('Sửa không thành công')</script>";
                }
            }
        }
        $view = "views/loai_phim/v_edit_loaiphim.php";
        include ("templates/layout.php");
    }

    public function del_loaiphim(){
        include ("models/m_loaiphim.php");
        $m_loaiphim= new m_loaiphim();
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $m_loaiphim->delete_loaiphim($id);
        }
        $del="done";
        header("location: loaiphim.php?del=$del");
    }

}