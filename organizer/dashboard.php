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
    <title>Organizer Dashboard - <?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL; ?>admindashboard.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <?php include(INCLUDES_PATH . 'sidemenu.php'); ?>

    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <span class="dashboard">Organizer Dashboard</span>
            </div>
            <div class="search-box">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search'></i>
            </div>
        </nav>

        <div class="home-content">
            <div class="overview-boxes">
                <?php
                require_once INCLUDES_PATH . 'connection.php';
                $userid = $_SESSION['userid'];
                ?>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">My Events</div>
                        <div class="number">
                            <?php
                            $query = "SELECT COUNT(*) as total FROM `EVENT_CREATE` WHERE EMAIL='$userid'";
                            $res = mysqli_query($con, $query);
                            $row = mysqli_fetch_assoc($res);
                            echo $row['total'];
                            ?>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Approved Events</div>
                        <div class="number">
                            <?php
                            $query = "SELECT COUNT(*) as total FROM `EVENT_CREATE` WHERE EMAIL='$userid' AND APPROVE='Approved'";
                            $res = mysqli_query($con, $query);
                            $row = mysqli_fetch_assoc($res);
                            echo $row['total'];
                            ?>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Pending Events</div>
                        <div class="number">
                            <?php
                            $query = "SELECT COUNT(*) as total FROM `EVENT_CREATE` WHERE EMAIL='$userid' AND APPROVE='Not Approaved'";
                            $res = mysqli_query($con, $query);
                            $row = mysqli_fetch_assoc($res);
                            echo $row['total'];
                            ?>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Guests</div>
                        <div class="number">
                            <?php
                            $query = "SELECT COUNT(*) as total FROM `GUEST_MST`";
                            $res = mysqli_query($con, $query);
                            $row = mysqli_fetch_assoc($res);
                            echo $row['total'];
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sales-boxes">
                <div class="recent-sales">
                    <h4>My Recent Events</h4>
                    <table width="100%">
                        <tr>
                            <th>Event Name</th>
                            <th>Location</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                        <?php
                        $query = "SELECT * FROM `EVENT_CREATE` WHERE EMAIL='$userid' ORDER BY ID DESC LIMIT 5";
                        $res = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_assoc($res)) {
                            echo "<tr>";
                            echo "<td>" . htmlspecialchars($row['ENAME']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['ELOC']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['EDATE']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['APPROVE']) . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
