<?php
session_start(); 
if(!isset($_SESSION['uniname'])){
echo "<script>window.location='../index.php';</script>";
}
?>