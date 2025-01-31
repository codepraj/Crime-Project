<?php
session_start(); 
if(!isset($_SESSION['comname'])){
echo "<script>window.location='index.php';</script>";
}
?>