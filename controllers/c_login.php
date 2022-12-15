<?php
session_start();
include ("models/m_login.php");
class c_login{
    public function checkLogin()
    {

        if (isset($_GET['id_phim'])) {
            $_SESSION['id_phim'] = $_GET['id_phim'];
        }

        if (isset($_POST['login'])) {
            $email = $_POST['email'];
            $mat_khau = $_POST['mat_khau'];
            $_SESSION['id_nguoi_dung'] = "";
            $m_login = new m_login();
            $check_admin = $m_login->check_admin($email,md5($mat_khau));
            $check_user = $m_login->check_user($email, md5($mat_khau));

            if($check_admin) {
                $_SESSION['admin'] = "admin";
                foreach ($check_admin as $key => $value){
                    $_SESSION['id_nguoi_dung'] = $value->id;
                    $_SESSION['email'] = $value->email;
                }
                $login='successful';
                header("location:admin/home.php?login=$login");
            }elseif($check_user){
                $_SESSION['user'] = "user";
                foreach ($check_user as $key => $value){
                    $_SESSION['id_nguoi_dung'] = $value->id;
                    $_SESSION['email'] = $value->email;
                }
                if(isset($_SESSION['id_phim'])){
                    $id_phim = $_SESSION['id_phim'];
                    header("location:details.php?id=$id_phim");
                }else{
                    $login='successful';
                    header("location:./index.php?login=$login");
                }
            }else{
                $errorLogin='errorLogin';
                header("location:login.php?errorLogin=$errorLogin");
            }
        }
        if(isset($_GET['errorLogin'])){
            echo "<script>alert('Đăng nhập thất bại')</script>";
        }
        $view = "views/accounts/v_login.php";
        include("templates/content.php");
    }
}

?>