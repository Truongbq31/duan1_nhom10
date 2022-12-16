<?php
class c_lich_chieu {
    public function c_lich_chieu(){
        include("models/m_lich_chieu.php");
        $id = $_GET['id'];
        setcookie('id_phim', $id, time() + 300);
        $m_lich_chieu = new m_lich_chieu();
        $lich_chieu = $m_lich_chieu->m_lich_chieu($id);
        $ngay_chieu = $m_lich_chieu->m_ngay_chieu($id);
        $chi_nhanh = $m_lich_chieu->m_chi_nhanh($id);
        $view = "views/lich_chieu/v_lich_chieu.php";
        include ("templates/layout2.php");
    }

}
