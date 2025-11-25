<?php
require_once __DIR__ . '/config/config.php';

unset($_SESSION['utype']);
unset($_SESSION['userid']);
session_destroy();

header("location:" . BASE_URL . "login.php");
exit();
?>