<?php
class c_ds_phim {
    public function c_ds_phim(){
        include("models/m_ds_phim.php");
        $m_phim = new m_ds_phim();
        $ds_phim = $m_phim->m_ds_phim();
        $view = "views/phim/v_phim.php";
        include ("templates/layout.php");
    }
}
