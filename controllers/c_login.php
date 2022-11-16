<?php
session_start();
include ("models/m_login.php");
class c_login{
    public function checkLogin() {
        if (isset($_POST['login'])) {
            $email = $_POST['email'];
            $mat_khau = $_POST['mat_khau'];
            $_SESSION['id_nguoi_dung'] = "";
            $m_login = new m_login();
            $check_admin = $m_login->check_admin($email,$mat_khau);
            $check_user = $m_login->check_user($email, $mat_khau);

            if($check_admin) {
                $_SESSION['admin'] = "admin";
                foreach ($check_admin as $key => $value){
                    $_SESSION['id_nguoi_dung'] = $value->id;
                }
                $login='successful';
                header("location:admin/home.php?login=$login");
            }elseif($check_user){
                $_SESSION['user'] = "user";
                foreach ($check_user as $key => $value){
                    $_SESSION['id_nguoi_dung'] = $value->id;
                }
                $login='successful';
                header("location:./index.php?login=$login");
            }else{
                $_SESSION['error_login'] =  "<script>alert('Đăng nhập thất bại')</script>";
                header("location:login.php");
            }
        }
        $view = "views/accounts/v_login.php";
        include ("templates/content.php");
    }
}

?>
