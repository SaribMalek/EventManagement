<?php
require_once dirname(__DIR__) . '/config/config.php';

if (!isset($_SESSION['utype']) || $_SESSION['utype'] != 'Organizer') {
    header("location:" . BASE_URL . "login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Create Event - <?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL; ?>createevent.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

    <?php include(INCLUDES_PATH . 'sidemenu.php'); ?>

    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <span class="dashboard">Create Event</span>
            </div>
            <div class="search-box">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search'></i>
            </div>
        </nav>

        <div class="home-content">
            <div class="overview-boxes">
                <div class="sales-boxes">
                    <div class="recent-sales">

                        <h2>Create Event</h2>

                        <form method="post" enctype="multipart/form-data">
                            <div class="content">
                                <span>Event Creator Name:</span>
                                <input type="text" name="cname" placeholder="Event Creator Name...">

                                <span>Event Creator Mobile No.:</span>
                                <input type="text" name="mono" placeholder="Event Creator Mobile No...">

                                <span>Event Creator Email:</span>
                                <input type="text" name="email" placeholder="Event Creator Email Id...">

                                <span>Event Creator Address:</span>
                                <input type="text" name="add" placeholder="Event Creator Address...">

                                <span>Event Name:</span>
                                <input type="text" name="name" placeholder="Event Name...">

                                <span>Event Location:</span>
                                <input type="text" name="loc" placeholder="Event Location...">

                                <span>Select Image:</span>
                                <input type="file" name="image">

                                <span>Event Date:</span>
                                <input type="date" name="dt">

                                <span>Event Time:</span>
                                <input type="time" name="stime">

                                <span>Event Venue:</span>
                                <select name="evenue" style="background-color: white;">
                                    <option value="">Select Value</option>
                                    <option value="Marriage">Marriage</option>
                                    <option value="Engadgement">Engagement</option>
                                    <option value="Anniversary">Anniversary</option>
                                    <option value="Birthday Party">Birthday Party</option>
                                    <option value="Christmas">Christmas</option>
                                    <option value="31st Celebration">31st Celebration</option>
                                </select>

                                <div class="btnclass">
                                    <input type="submit" name="check" value="Add Event">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>

<?php
if (isset($_POST['check'])) {
    $cnm = $_POST['cname'];
    $mno = $_POST['mono'];
    $email = $_POST['email'];
    $add = $_POST['add'];
    $nm = $_POST['name'];
    $loc = $_POST['loc'];
    $date = $_POST['dt'];
    $stim = $_POST['stime'];
    $ven = $_POST['evenue'];
    $img = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];
    $dir = "/uploads/" . $img;
    move_uploaded_file($tmp, ROOT_PATH . "uploads/" . $img);

    if (!empty($cnm) && !empty($mno) && !empty($email) && !empty($add) && !empty($nm) && !empty($loc) && !empty($date) && !empty($stim) && !empty($ven)) {
        require_once INCLUDES_PATH . 'connection.php';

        $query = "INSERT INTO `EVENT_CREATE`(`CNAME`, `MONO`, `EMAIL`, `CADD`, `ENAME`, `ELOC`, `IMAGE`, `EDATE`, `ETIME`, `EVENUE`, `APPROVE`) VALUES ('$cnm','$mno','$email','$add','$nm','$loc','$dir','$date','$stim','$ven','Not Approaved')";

        $res = mysqli_query($con, $query) or die("<script>alert('ERROR')</script>");
        if ($res == TRUE) {
            echo "<script>alert('Event Created Successfully')</script>";
        } else {
            echo "<script>alert('Event Not Created')</script>";
        }
    } else {
        echo "<script>alert('Please Fill All Fields')</script>";
    }
}
?>
