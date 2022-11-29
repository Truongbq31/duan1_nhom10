<?php
session_start();
include("controllers/c_khung_gio_chieu.php");
$khung_gio_chieu = new c_khung_gio_chieu();
$khung_gio_chieu->add_khung_gio_chieu();
