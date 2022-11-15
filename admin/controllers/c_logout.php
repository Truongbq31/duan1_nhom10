<?php
session_start();
class c_logout{
    public function logout() {
        unset($_SESSION['admin']);
        unset($_SESSION['user']);
        unset($_SESSION['error_login']);
        unset($_SESSION['id_khach_hang']);
        header("location: ../index.php");
    }
}