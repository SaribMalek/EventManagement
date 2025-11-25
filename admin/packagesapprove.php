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
    <title>Approve Packages - <?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL; ?>requests.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <?php include(INCLUDES_PATH . 'sidemenu.php'); ?>

    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <span class="dashboard">Packages Approve</span>
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

                        <h2>Packages</h2>

                        <table border="1">
                            <tr>
                                <th>FOOD CATEGORY</th>
                                <th>FOOD ITEMS</th>
                                <th>FOOD TYPE</th>
                                <th>SIZE</th>
                                <th>SUITE FOR PEOPLE</th>
                                <th>PRICE</th>
                                <th>STATUS</th>
                                <th>APPROVE</th>
                                <th>CANCEL</th>
                            </tr>

                            <?php
                            require_once INCLUDES_PATH . 'connection.php';
                            $query = "SELECT * FROM `PACKAGE_MST`";
                            $res = mysqli_query($con, $query);
                            while ($row = mysqli_fetch_assoc($res)) {
                                $aid = $row['ID'];
                                echo "<tr>";
                                echo "<td>" . htmlspecialchars($row['FOOD_CAT']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['FOOD_ITEMS']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['CAT_FOOD']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['SIZE']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['SUIT_PEOPLE']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['PRICE']) . "</td>";
                                echo "<td>" . htmlspecialchars($row['APPROVE']) . "</td>";
                                echo "<td><a href='" . ACTIONS_URL . "approvepackages.php?id=$aid'>Approve</a></td>";
                                echo "<td><a href='" . ACTIONS_URL . "cancelpackage.php?id=$aid'>Cancel</a></td>";
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
