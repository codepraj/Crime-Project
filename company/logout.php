<?php
session_start();
unset($_SESSION['comname']);
session_destroy();
header("location:../index.php");
?>