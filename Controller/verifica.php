<?php
error_reporting(0);
session_start();
 

if (!isset($_SESSION['Usuario']))
{
    session_destroy();
    //exit;
    echo "<script>window.location.href= '/index.php'; </script>";
}