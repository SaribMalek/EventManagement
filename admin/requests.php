<?php
require_once dirname(__DIR__) . '/config/config.php';

if (!isset($_SESSION['utype']) || $_SESSION['utype'] != 'Admin') {
    header("location:" . BASE_URL . "login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Approve Events - <?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL; ?>requests.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <?php include(INCLUDES_PATH . 'sidemenu.php'); ?>

    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <span class="dashboard">Approve Events</span>
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

                        <h2>Approve Events</h2>

                        <table border="1">
                            <tr>
                                <th>EVENT CREATOR NAME</th>
                                <th>MOBILE NO.</th>
                                <th>EMAIL</th>
                                <th>EVENT NAME</th>
                                <th>EVENT LOCATION</th>
                                <th>EVENT DATE</th>
                                <th>STATUS</th>
                                <th>APPROVE</th>
                                <th>CANCEL</th>
                            </tr>

                            <?php
                            require_once INCLUDES_PATH . 'connection.php';
                            $query = "SELECT * FROM `EVENT_CREATE`";
                            $res = mysqli_query($con, $query);
                            while ($row = mysqli_fetch_assoc($res)) {
                                $aid = $row['ID'];
                                echo "<tr>";
                                echo "<td>" . htmlspecialchars($row['CNAME']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['MONO']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['EMAIL']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['ENAME']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['ELOC']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['EDATE']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['APPROVE']) . "</td>";
                                echo "<td><a href='" . ACTIONS_URL . "approve.php?id=$aid'>Approve</a></td>";
                                echo "<td><a href='" . ACTIONS_URL . "approvecancel.php?id=$aid'>Cancel</a></td>";
                                echo "</tr>";
                            }
                            ?>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </section>

</body>
</html>
