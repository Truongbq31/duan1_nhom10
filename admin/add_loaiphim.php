<?php
session_start();
include("controllers/c_loaiphim.php");
$loaiphim = new c_loaiphim();
$loaiphim->add_loaiphim();
