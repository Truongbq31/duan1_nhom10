<?php
include ("models/m_phim.php");
class c_phim{
    public function index() {
        $m_phim = new m_phim();
        $phim = $m_phim->doc_phim();
        $view = "views/phim/v_phim.php";
       include ("templates/layout.php");

        if(isset($_GET['update'])){
            echo "<script>alert('Sửa thành công')</script>";
        }
        if(isset($_GET['del'])){
            echo "<script>alert('Xóa thành công')</script>";
        }
    }
    public function addphim(){
        if (isset($_POST['btn-add'])) {
            $id = NULL;
            $name = $_POST['name'];
            $rate = $_POST['rate'];
            $description = $_POST['description'];
            $id_loai_phim = $_POST['id_loai_phim'];

            //lấy được tên của hình ảnh
//            echo "<pre>";
//            echo print_r($_FILES['f_hinh_anh']);
//            die();
            $img = ($_FILES['img']['error'] == 0) ? $_FILES['img']['name'] :"";
            $add_phim = new m_phim();
           $result = $add_phim->insert_phim($id,$name,$rate,$description,$img,$id_loai_phim);
           if ($result) {
               if ($img != "") {
                   //di chuyển hình ảnh vào thư mục source
                   move_uploaded_file($_FILES['img']['tmp_name'],"public/img/".$img);
               }
               echo "<script>alert('thành công')</script>";
           } else {
               echo "<script>alert('thêm không thành công')</script>";
           }
        }
        $view = "views/phim/v_add_phim.php";
        include ("templates/layout.php");
    }


    public function edit_phim() {
        $m_phim = new m_phim();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $phim_details = $m_phim->read_phim_by_id($id);
            if (isset($_POST['btn_save'])) {
                $name = $_POST['name'];
                $rate = $_POST['rate'];
                $description = $_POST['description'];
                $id_loai_phim = $_POST['id_loai_phim'];

                $img = empty($_FILES['img']['name']) ? $phim_details->img  : $_FILES['img']['name'];
                $edit_phim = new m_phim();
                $result = $edit_phim->edit_phim($id,$name,$rate,$description,$img,$id_loai_phim);
                if ($result) {
                    if ($img != "") {
                        //di chuyển hình ảnh vào thư mục source
                        move_uploaded_file($_FILES['img']['tmp_name'],"public/img/".$img);
                    }
                    $update = "done";
                    header("location: phim.php?update=$update");
                } else {
                    echo "<script>alert('Sửa không thành công')</script>";
                }
            }
        }
        $view = "views/phim/v_edit_phim.php";
        include ("templates/layout.php");
    }

    public function del_phim(){
        $m_phim = new m_phim();
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $m_phim->delete_phim($id);
        }
        $del="done";
        header("location: phim.php?del=$del");
    }


}
