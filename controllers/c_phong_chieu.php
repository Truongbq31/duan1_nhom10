<?php
class c_phong_chieu {
    public function c_phong_chieu(){
        include("models/m_suat_chieu.php");
        $m_suat_chieu = new m_suat_chieu();
        $suat_chieu = $m_suat_chieu->m_suat_chieu();
        $view = "views/phong_chieu/v_phong_chieu.php";
        include ("templates/layout2.php");
    }
}