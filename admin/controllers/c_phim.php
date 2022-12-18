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
        include ("models/m_loaiphim.php");
        $m_theloai = new m_loaiphim();
        $theloai = $m_theloai->doc_loaiphim();

        if (isset($_POST['btn-add'])) {
            $id = NULL;
            $name = $_POST['name'];
            $rate = $_POST['rate'];
            $description = $_POST['description'];
            $id_loai_phim = $_POST['id_loai_phim'];
            $link_demo = $_POST['link_demo'];

            if(isset($_FILES['img'])){
                $allow_upload = true;
                $img = $_FILES['img']['name'];
                $target_dir = "public/img/";
                $target_file = $target_dir .$_FILES['img']['name'];
                $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
                $allowTypes = ['jpg', 'png', 'jpeg','jfif'];
                $check = getimagesize($_FILES['img']['tmp_name']);
                if($check == false){
                    echo "<script>alert('File upload không phải file ảnh')</script>";
                    $allow_upload = false;
                }

                if(!in_array($imageFileType, $allowTypes)){
                    echo "<script>alert('Đuôi file không được phép upload')</script>";
                    $allow_upload = false;
                }
                if ($allow_upload == true) {
                    move_uploaded_file($_FILES['img']['tmp_name'],$target_file);
                    $add_phim = new m_phim();
                    $validate = $add_phim->doc_phim();
                    $count=0;
                    foreach ($validate as $key => $value){
                        if ($value->name == $name){
                            $count++;
                        }
                    }

                    if ($count==0){
                        $result = $add_phim->insert_phim($id,$name,$rate,$description,$img, $link_demo, $id_loai_phim);
                        echo "<script>alert('Thêm thành công')</script>";
                    }else{
                        echo "<script>alert('Phim đã tồn tại')</script>";
                    }
                }
            }

        }

        $view = "views/phim/v_add_phim.php";
        include ("templates/layout.php");
    }


    public function edit_phim() {
        include ("models/m_loaiphim.php");
        $m_theloai = new m_loaiphim();
        $theloai = $m_theloai->doc_loaiphim();
        $m_phim = new m_phim();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $phim_details = $m_phim->read_phim_by_id($id);
            if (isset($_POST['btn_save'])) {
                $name = $_POST['name'];
                $rate = $_POST['rate'];
                $description = $_POST['description'];
                $link_demo = $_POST['link_demo'];
                $id_loai_phim = $_POST['id_loai_phim'];

                if(isset($_FILES['img'])){
                    $allow_upload = true;
                    $img = empty($_FILES['img']['name']) ? $phim_details->img : $_FILES['img']['name'];
                    $target_dir = "public/img/";
                    $target_file = $target_dir .$_FILES['img']['name'];
                    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
                    $allowTypes = ['jpg', 'png', 'jpeg','jfif',''];


                    if($img != $phim_details->img){
                        $check = getimagesize($_FILES['img']['tmp_name']);
                        if($check == false){
                            echo "<script>alert('File upload không phải file ảnh')</script>";
                            $allow_upload = false;
                        }
                    }

                    if(!in_array($imageFileType, $allowTypes)){
                        echo "<script>alert('Đuôi file không được phép upload')</script>";
                        $allow_upload = false;
                    }
                    if ($allow_upload == true) {
                        move_uploaded_file($_FILES['img']['tmp_name'],$target_file);
                        $edit_phim = new m_phim();
                        $result = $edit_phim->edit_phim($id,$name,$rate,$description,$img, $link_demo,$id_loai_phim);
                        $update = "done";
                        header("location: phim.php?update=$update");
                    }else {
                        echo "<script>alert('Sửa không thành công')</script>";
                    }
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
