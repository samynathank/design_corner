<?php
include_once("dc_admin/inc/dbconnection.php");
include_once("inc/header.php");
include_once("inc/navbar.php");

$file_name = '';
if (isset($_GET['file']) && $_GET['file'] != '') {
    $file_name  = $_GET['file'];
}
if ($file_name != '') {
    include_once($file_name . ".php");
} else {
    include_once("home.php");
}
include_once("inc/footer.php");
