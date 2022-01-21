<?php
session_start();
unset($_SESSION['utype']);
session_destroy();
header("location:login.php");
?>