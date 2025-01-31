<?php
session_start(); 
if(!isset($_SESSION['sid'])){
echo "<script>window.location='../index.php';</script>";
}
?>