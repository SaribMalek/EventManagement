<?php
require_once dirname(__DIR__) . '/config/config.php';

if (!isset($_SESSION['utype']) || $_SESSION['utype'] != 'Caterer') {
    header("location:" . BASE_URL . "login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Caterer Dashboard - <?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL; ?>catererdashboard.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" crossorigin="anonymous"/>
</head>
<body>

    <?php include(INCLUDES_PATH . 'sidemenu.php'); ?>

    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <span class="dashboard">Caterer Dashboard</span>
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
                        <div class="box-topic">My Packages</div>
                        <div class="number">
                            <?php
                            $query = "SELECT COUNT(*) as total FROM `PACKAGE_MST`";
                            $res = mysqli_query($con, $query);
                            $row = mysqli_fetch_assoc($res);
                            echo $row['total'];
                            ?>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Approved Packages</div>
                        <div class="number">
                            <?php
                            $query = "SELECT COUNT(*) as total FROM `PACKAGE_MST` WHERE APPROVE='Approved'";
                            $res = mysqli_query($con, $query);
                            $row = mysqli_fetch_assoc($res);
                            echo $row['total'];
                            ?>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Pending Packages</div>
                        <div class="number">
                            <?php
                            $query = "SELECT COUNT(*) as total FROM `PACKAGE_MST` WHERE APPROVE='Not Approved' OR APPROVE='Not Approaved'";
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

                    <h2>Welcome Caterer</h2>

                    <div class="container">
                        <div class="calendar">
                            <div class="month">
                                <i class="fas fa-angle-left prev"></i>
                                <div class="date">
                                    <h1></h1>
                                    <p></p>
                                </div>
                                <i class="fas fa-angle-right next"></i>
                            </div>
                            <div class="weekdays">
                                <div>Sun</div>
                                <div>Mon</div>
                                <div>Tue</div>
                                <div>Wed</div>
                                <div>Thu</div>
                                <div>Fri</div>
                                <div>Sat</div>
                            </div>
                            <div class="days"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        const date = new Date();

        const renderCalendar = () => {
            date.setDate(1);

            const monthDays = document.querySelector(".days");

            const lastDay = new Date(
                date.getFullYear(),
                date.getMonth() + 1,
                0
            ).getDate();

            const prevLastDay = new Date(
                date.getFullYear(),
                date.getMonth(),
                0
            ).getDate();

            const firstDayIndex = date.getDay();

            const lastDayIndex = new Date(
                date.getFullYear(),
                date.getMonth() + 1,
                0
            ).getDay();

            const nextDays = 7 - lastDayIndex - 1;

            const months = [
                "January", "February", "March", "April", "May", "June",
                "July", "August", "September", "October", "November", "December"
            ];

            document.querySelector(".date h1").innerHTML = months[date.getMonth()];
            document.querySelector(".date p").innerHTML = new Date().toDateString();

            let days = "";

            for (let x = firstDayIndex; x > 0; x--) {
                days += `<div class="prev-date">${prevLastDay - x + 1}</div>`;
            }

            for (let i = 1; i <= lastDay; i++) {
                if (i === new Date().getDate() && date.getMonth() === new Date().getMonth()) {
                    days += `<div class="today">${i}</div>`;
                } else {
                    days += `<div>${i}</div>`;
                }
            }

            for (let j = 1; j <= nextDays; j++) {
                days += `<div class="next-date">${j}</div>`;
                monthDays.innerHTML = days;
            }
        };

        document.querySelector(".prev").addEventListener("click", () => {
            date.setMonth(date.getMonth() - 1);
            renderCalendar();
        });

        document.querySelector(".next").addEventListener("click", () => {
            date.setMonth(date.getMonth() + 1);
            renderCalendar();
        });

        renderCalendar();
    </script>

</body>
</html>
