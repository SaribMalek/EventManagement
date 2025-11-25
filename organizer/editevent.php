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
    <title>View Events - <?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL; ?>editevent.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

    <?php include(INCLUDES_PATH . 'sidemenu.php'); ?>

    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <span class="dashboard">View Events</span>
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

                        <h2>My Events</h2>

                        <?php
                        require_once INCLUDES_PATH . 'connection.php';
                        $userid = $_SESSION['userid'];

                        $query = "SELECT * FROM `EVENT_CREATE` WHERE EMAIL='$userid'";
                        $res = mysqli_query($con, $query);

                        echo "<table>";
                        echo "<tr>
                                <th>NAME</th>
                                <th>MOBILE NO.</th>
                                <th>EMAIL</th>
                                <th>ADDRESS</th>
                                <th>EVENT NAME</th>
                                <th>EVENT LOCATION</th>
                                <th>IMAGE</th>
                                <th>EVENT DATE</th>
                                <th>EVENT VENUE</th>
                                <th>STATUS</th>
                                <th>EDIT</th>
                                <th>DELETE</th>
                              </tr>";

                        while ($row = mysqli_fetch_assoc($res)) {
                            $img = UPLOADS_URL . ltrim($row['IMAGE'], '/');
                            $img1 = $row['IMAGE'];
                            $id = $row['ID'];
                            echo "<tr>";
                            echo "<td>" . htmlspecialchars($row['CNAME']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['MONO']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['EMAIL']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['CADD']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['ENAME']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['ELOC']) . "</td>";
                            echo "<td><img src='" . BASE_URL . ltrim($row['IMAGE'], '/') . "' height='100px' width='100px'></td>";
                            echo "<td>" . htmlspecialchars($row['EDATE']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['EVENUE']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['APPROVE']) . "</td>";
                            echo "<td><a href='" . ORGANIZER_URL . "eventedit.php?id=$id'>EDIT</a></td>";
                            echo "<td><a href='" . ACTIONS_URL . "eventdelete.php?id=$id&image=$img1'>DELETE</a></td>";
                            echo "</tr>";
                        }

                        echo "</table>";
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
