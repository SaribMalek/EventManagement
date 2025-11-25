<?php
require_once dirname(__DIR__) . '/config/config.php';

if (!isset($_SESSION['utype']) || $_SESSION['utype'] != 'Admin') {
    header("location:" . BASE_URL . "login.php");
    exit();
}

$aid = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($aid > 0) {
    require_once INCLUDES_PATH . 'connection.php';

    $query = "UPDATE `PACKAGE_MST` SET `APPROVE`='Not Approved' WHERE ID='$aid'";
    $res = mysqli_query($con, $query);

    if ($res == TRUE) {
        echo "<script>alert('Package Approval Cancelled Successfully');</script>";
    } else {
        echo "<script>alert('Package Approval Not Cancelled');</script>";
    }
}

header("Location:" . ADMIN_URL . "packagesapprove.php");
exit();
?>
