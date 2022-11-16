<?php
class c_theloai{
    public function theloai(){
        include("models/m_theloai.php");
        $m_theloai = new m_theloai();
        $theloai = $m_theloai->doc_theloai();
        $view = "views/home/v_home.php";
        include ("templates/layout.php");
    }
}
