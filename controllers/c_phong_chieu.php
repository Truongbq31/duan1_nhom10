<?php
class c_phong_chieu {
    public function c_phong_chieu(){
        include("models/m_phong_chieu.php");
        $m_phongchieu = new m_phong_chieu();
        $phong_chieu = $m_phongchieu->m_phong_chieu();
        $view = "views/phong_chieu/v_phong_chieu.php";
        include ("templates/layout2.php");
    }
}