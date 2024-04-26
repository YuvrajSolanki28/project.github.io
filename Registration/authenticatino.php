<?php
session_start();

if(!isset($_SESSION['authenticated']))
{
    $_SESSION['status'] = "Please Login To Access."; 
    header('location:login.php');
    exit(0);
}

?>