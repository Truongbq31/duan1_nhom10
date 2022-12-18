<?php
class c_chinhanh_phim{
    public function index(){
        include ("models/m_chinhanh_phim.php");
        $m_chinhanh_phim = new m_chinhanh_phim();
        $chinhanh_phim = $m_chinhanh_phim->doc_chinhanh_phim();
        $view = "views/chi_nhanh_phim/v_chinhanh_phim.php";
        include ("templates/layout.php");

        if(isset($_GET['update'])){
            echo "<script>alert('Sửa thành công')</script>";
        }
        if(isset($_GET['del'])){
            echo "<script>alert('Xóa thành công')</script>";
        }
    }

    public function add_chinhanh_phim() {
        include ("models/m_phim.php");
        $m_phim = new m_phim();
        $phim = $m_phim -> doc_phim();
        include ("models/m_chinhanh.php");
        $m_chinhanh = new m_chinhanh();
        $chinhanh = $m_chinhanh->doc_chinhanh();
        if (isset($_POST['btn_add'])) {
            $id = null;
            $id_phim = $_POST['id_phim'];
            $id_chi_nhanh = $_POST['id_chi_nhanh'];
            include ("models/m_chinhanh_phim.php");
            $m_chinhanh_phim = new m_chinhanh_phim();
            $validate = $m_chinhanh_phim->doc_chinhanh_phim();
            $count=0;
            foreach ($validate as $key => $value){
                if ($value->id_phim == $id_phim && $value->id_chi_nhanh == $id_chi_nhanh){
                    $count++;
                }
            }

            if ($count==0){
                $result = $m_chinhanh_phim->insert_chinhanh_phim($id, $id_phim, $id_chi_nhanh);
                echo "<script>alert('Thêm thành công')</script>";
            }else{
                echo "<script>alert('Chi nhánh chiếu phim đã tồn tại')</script>";
            }

        }
        $view = "views/chi_nhanh_phim/v_add_chinhanh_phim.php";
        include ("templates/layout.php");
    }

    public function edit_chinhanh_phim() {
        include ("models/m_phim.php");
        $m_phim = new m_phim();
        $phim = $m_phim -> doc_phim();
        include ("models/m_chinhanh.php");
        $m_chinhanh = new m_chinhanh();
        $chinhanh = $m_chinhanh->doc_chinhanh();
        if (isset($_GET['id'])) {
            include ("models/m_chinhanh_phim.php");
            $m_chinhanh_phim = new m_chinhanh_phim();
            $id = $_GET['id'];
            $chinhanh_phim_details = $m_chinhanh_phim->read_chinhanh_phim_by_id($id);
            if (isset($_POST['btn_save'])) {
                $id_phim = $_POST['id_phim'];
                $id_chi_nhanh = $_POST['id_chi_nhanh'];
                $m_chinhanh_phim = new m_chinhanh_phim();
                $result = $m_chinhanh_phim->edit_chinhanh_phim($id, $id_phim, $id_chi_nhanh);
                if ($result) {
                    $update = "done";
                    header("location: chinhanh_phim.php?update=$update");
                } else {
                    echo "<script>alert('Sửa không thành công')</script>";
                }
            }
        }
        $view = "views/chi_nhanh_phim/v_edit_chinhanh_phim.php";
        include ("templates/layout.php");
    }

    public function del_chinhanh_phim(){
        include ("models/m_chinhanh_phim.php");
        $m_chinhanh_phim= new m_chinhanh_phim();
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $m_chinhanh_phim->delete_chinhanh_phim($id);
        }
        $del="done";
        header("location: chinhanh_phim.php?del=$del");
    }
}
