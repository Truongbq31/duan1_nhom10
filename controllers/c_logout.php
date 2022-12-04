<?php
@session_start();
class c_logout {
    public function c_logout(){
//        unset($_SESSION['admin']);
//        unset($_SESSION['user']);
//        unset($_SESSION['id_nguoi_dung']);
        session_destroy();
        header("location: index.php");
    }
}
