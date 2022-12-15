<?php
include ("models/m_signup.php");
class c_signup{
    public function signup(){
        if (isset($_POST['signup'])) {
            $error=[];
            $id = NULL;
            $username = $_POST['username'];
            $password = "";
            if($_POST['mat_khau'] == $_POST['confirm_mat_khau']){
                $password = $_POST['mat_khau'];
                $email = $_POST['email'];
                $vai_tro = $_POST['vai_tro'];
                $save_signup = new m_signup();
                $signup = $save_signup->doc_signup($id,$email,md5($password),$username,$vai_tro);
            }else{
                $error['pass'] = "Mật khẩu không trùng khớp!";
            }
            if (!$error) {
                echo "<script>alert('Đăng kí thành công')</script>";
            }
        }
        $view = "views/accounts/v_signup.php";
        include ("templates/content.php");
    }
}
?>
