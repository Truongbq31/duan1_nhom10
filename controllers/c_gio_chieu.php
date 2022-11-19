<?php
class c_gio_chieu {
    public function c_gio_chieu(){
        include("models/m_gio_chieu.php");
        $m_gio_chieu = new m_gio_chieu();
        $gio_chieu = $m_gio_chieu->m_gio_chieu();
        $view = "views/suat_chieu/v_suat_chieu.php";
        include ("templates/layout2.php");
    }
}
