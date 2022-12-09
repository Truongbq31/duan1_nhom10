<?php
class c_ve_da_dat{
    public function ve_da_dat(){
        include("models/m_ve_da_dat.php");
        $m_ve_da_dat = new m_ve_da_dat();
        $ve_da_dat = $m_ve_da_dat->doc_ve_da_dat();
        $view = "views/ve_da_dat/v_ve_da_dat.php";
        include ("templates/layout4.php");
    }
}
