<?php
class c_details {
    public function c_details(){
        include("models/m_details.php");
        $m_details = new m_details();
        $details = $m_details->m_details();
        $phims = $m_details->m_phim();
        $comment = $m_details->m_comment();
        $lich_chieu = $m_details->load_lich_chieu();
        $view = "views/details/v_details.php";
        include ("templates/layout.php");

        if(isset($_POST['btn_comment'])){
//            $id=null;
            $id_nguoi_dung = $_POST['id_nguoi_dung'];
            $id_phim = $_GET['id'];
            $ngay_binh_luan = date('Y-m-d H:i:s');
            $noi_dung = $_POST['noi_dung'];
            $result = $m_details->insert_comment($id_nguoi_dung, $id_phim, $ngay_binh_luan, $noi_dung);
            if($result){
                header("location:details.php?id=$id_phim");
            }else{
                echo "<script>alert('ERROR')</script>";
            }
        }
    }
}
