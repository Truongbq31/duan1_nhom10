<?php
class c_suat_chieu {
    public function c_suat_chieu(){
        include("models/m_suat_chieu.php");
        $m_suat_chieu = new m_suat_chieu();
        $suat_chieu = $m_suat_chieu->m_suat_chieu();
        $view = "views/suat_chieu/v_suat_chieu.php";
        include ("templates/layout2.php");
    }
}
