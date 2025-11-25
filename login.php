<?php
require_once __DIR__ . '/config/config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login - <?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL; ?>login.css">
</head>
<body>
<form method="post">

    <div class="content">

        <div class="header-content">
            <h2>Login Form</h2>
        </div>

        <div class="text-content">

            <span>Login Id:</span>
            <input type="text" name="id" placeholder="Login Id">

            <span>Password:</span>
            <input type="password" name="pass" placeholder="Password">

            <span>Select Type Of User:</span>
            <select name="utype" class="select">
                <option value="">Select Option</option>
                <option value="Organizer">Organizer</option>
                <option value="Caterer">Caterer</option>
                <option value="Admin">Admin</option>
            </select> <br><br>

            <input type="submit" value="Login" name="click">

            <div class="forgot-pass">
                <a href="<?php echo BASE_URL; ?>forgotpass.php">Forgot Password?</a>
            </div>

            <div class="sign-up">
                New User? <a href="<?php echo BASE_URL; ?>registration.php">Create An Account</a>
            </div>

        </div>

    </div>

</form>
</body>
</html>

<?php

if (isset($_POST['click'])) {
    require_once INCLUDES_PATH . 'connection.php';

    $email = $_POST['id'];
    $pwd = $_POST['pass'];
    $uty = $_POST['utype'];

    if (!empty($email) && !empty($pwd) && !empty($uty)) {
        $query = "SELECT * FROM `REG_MST` WHERE EMAIL='$email'";

        $res = mysqli_query($con, $query);

        while ($row = $res->fetch_assoc()) {
            if ($row['EMAIL'] == $email && $row['PASS'] == $pwd && $row['UTYPE'] == $uty) {
                $_SESSION['utype'] = $uty;
                $_SESSION['userid'] = $email;

                if ($uty == "Organizer") {
                    echo "<script>alert('Welcome Organizer'); window.location.href='" . ORGANIZER_URL . "dashboard.php';</script>";
                    exit();
                } elseif ($uty == "Caterer") {
                    echo "<script>alert('Welcome Caterer'); window.location.href='" . CATERER_URL . "dashboard.php';</script>";
                    exit();
                } elseif ($uty == "Admin") {
                    echo "<script>alert('Welcome Admin'); window.location.href='" . ADMIN_URL . "dashboard.php';</script>";
                    exit();
                }
            } else {
                echo "<script>alert('Login Failed - Invalid Credentials')</script>";
            }
        }
    } else {
        echo "<script>alert('Please Fill All Fields')</script>";
    }
}

?>