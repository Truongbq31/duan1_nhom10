<?php
session_start();
include("controllers/c_chinhanh_phim.php");
$chinhanh_phim = new c_chinhanh_phim();
$chinhanh_phim->add_chinhanh_phim();
