<?php
session_start();
include("controllers/c_logout.php");
$c_user = new c_logout();
$c_user->checkLogin();
//gọi phương thức checklogin ra đây