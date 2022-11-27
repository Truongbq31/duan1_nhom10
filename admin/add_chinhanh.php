<?php
session_start();
include("controllers/c_chinhanh.php");
$chinhanh = new c_chinhanh();
$chinhanh->add_chinhanh();
