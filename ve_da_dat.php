<?php
session_start();
if($_SESSION['id_nguoi_dung']){
    include ("controllers/c_ve_da_dat.php");
    $c_ve_da_dat = new c_ve_da_dat();
    $c_ve_da_dat->ve_da_dat();
}else{
    header("location: index.php");
}
