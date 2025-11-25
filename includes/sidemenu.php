<?php
/**
 * Side Menu for Admin Panel (Admin, Organizer, Caterer)
 */
if (!defined('BASE_URL')) {
    require_once dirname(__DIR__) . '/config/config.php';
}

$uty = isset($_SESSION['utype']) ? $_SESSION['utype'] : '';
?>
<div class="sidebar">
    <div class="logo-details">
        <i></i>
        <span class="logo_name">Admin Panel</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="<?php echo ($uty == 'Admin') ? ADMIN_URL : (($uty == 'Organizer') ? ORGANIZER_URL : CATERER_URL); ?>dashboard.php" class="active">
                <i></i>
                <span class="links_name">Dashboard</span>
            </a>
        </li>

        <?php if ($uty == "Admin") { ?>
            <li>
                <a href="<?php echo ADMIN_URL; ?>requests.php">
                    <i></i>
                    <span class="links_name">Approve Events</span>
                </a>
            </li>
            <li>
                <a href="<?php echo ADMIN_URL; ?>packagesapprove.php">
                    <i></i>
                    <span class="links_name">Approve Packages</span>
                </a>
            </li>

        <?php } elseif ($uty == "Organizer") { ?>
            <li>
                <a href="<?php echo ORGANIZER_URL; ?>createevent.php">
                    <i></i>
                    <span class="links_name">Create Event</span>
                </a>
            </li>
            <li>
                <a href="<?php echo ORGANIZER_URL; ?>editevent.php">
                    <i></i>
                    <span class="links_name">View Event</span>
                </a>
            </li>
            <li>
                <a href="<?php echo ORGANIZER_URL; ?>service.php">
                    <i></i>
                    <span class="links_name">Service</span>
                </a>
            </li>
            <li>
                <a href="<?php echo ORGANIZER_URL; ?>location.php">
                    <i></i>
                    <span class="links_name">Location</span>
                </a>
            </li>
            <li>
                <a href="<?php echo ORGANIZER_URL; ?>editlocation.php">
                    <i></i>
                    <span class="links_name">Edit Location</span>
                </a>
            </li>
            <li>
                <a href="<?php echo ORGANIZER_URL; ?>guestsadd.php">
                    <i></i>
                    <span class="links_name">Guests</span>
                </a>
            </li>
            <li>
                <a href="<?php echo ORGANIZER_URL; ?>guestedit.php">
                    <i></i>
                    <span class="links_name">Guests Edit</span>
                </a>
            </li>
            <li>
                <a href="<?php echo ORGANIZER_URL; ?>cost.php">
                    <i></i>
                    <span class="links_name">Cost Event</span>
                </a>
            </li>
            <li>
                <a href="<?php echo ORGANIZER_URL; ?>costaddremove.php">
                    <i></i>
                    <span class="links_name">Edit/Remove Cost</span>
                </a>
            </li>
            <li>
                <a href="<?php echo ORGANIZER_URL; ?>imageaddremove.php">
                    <i></i>
                    <span class="links_name">Add/Remove Images</span>
                </a>
            </li>
            <li>
                <a href="<?php echo ORGANIZER_URL; ?>tableaddremove.php">
                    <i></i>
                    <span class="links_name">Add Tables</span>
                </a>
            </li>
            <li>
                <a href="<?php echo ORGANIZER_URL; ?>tableeditremove.php">
                    <i></i>
                    <span class="links_name">Edit/Remove Tables</span>
                </a>
            </li>
            <li>
                <a href="<?php echo ORGANIZER_URL; ?>tasks.php">
                    <i></i>
                    <span class="links_name">Add Tasks</span>
                </a>
            </li>
            <li>
                <a href="<?php echo ORGANIZER_URL; ?>taskseditremove.php">
                    <i></i>
                    <span class="links_name">Edit/Remove Tasks</span>
                </a>
            </li>
            <li>
                <a href="<?php echo ORGANIZER_URL; ?>updateprofile.php">
                    <i></i>
                    <span class="links_name">Edit Profile</span>
                </a>
            </li>
            <li>
                <a href="<?php echo ORGANIZER_URL; ?>servicesearch.php">
                    <i></i>
                    <span class="links_name">Search Services</span>
                </a>
            </li>
            <li>
                <a href="<?php echo ORGANIZER_URL; ?>serviceaddremove.php">
                    <i></i>
                    <span class="links_name">Add/Remove Services</span>
                </a>
            </li>

        <?php } elseif ($uty == "Caterer") { ?>
            <li>
                <a href="<?php echo CATERER_URL; ?>packagecategoryadd.php">
                    <i></i>
                    <span class="links_name">Add Package Category</span>
                </a>
            </li>
            <li>
                <a href="<?php echo CATERER_URL; ?>packagecategoryeditremove.php">
                    <i></i>
                    <span class="links_name">Edit/Remove Category</span>
                </a>
            </li>
            <li>
                <a href="<?php echo CATERER_URL; ?>catererserviceadd.php">
                    <i></i>
                    <span class="links_name">Add Service</span>
                </a>
            </li>
            <li>
                <a href="<?php echo CATERER_URL; ?>catererserviceeditremove.php">
                    <i></i>
                    <span class="links_name">View Service</span>
                </a>
            </li>
            <li>
                <a href="<?php echo CATERER_URL; ?>packagesadd.php">
                    <i></i>
                    <span class="links_name">Add Packages</span>
                </a>
            </li>
            <li>
                <a href="<?php echo CATERER_URL; ?>packageseditremove.php">
                    <i></i>
                    <span class="links_name">Edit / Delete Packages</span>
                </a>
            </li>
            <li>
                <a href="<?php echo CATERER_URL; ?>caterereditprofile.php">
                    <i></i>
                    <span class="links_name">Edit Profile</span>
                </a>
            </li>
            <li>
                <a href="<?php echo CATERER_URL; ?>componyadd.php">
                    <i></i>
                    <span class="links_name">Add Company Profile</span>
                </a>
            </li>
            <li>
                <a href="<?php echo CATERER_URL; ?>componyeditremove.php">
                    <i></i>
                    <span class="links_name">Edit Company Profile</span>
                </a>
            </li>
            <li>
                <a href="<?php echo CATERER_URL; ?>advertiesmentadd.php">
                    <i></i>
                    <span class="links_name">Add Advertisement</span>
                </a>
            </li>
            <li>
                <a href="<?php echo CATERER_URL; ?>advertiesmenteditremove.php">
                    <i></i>
                    <span class="links_name">Edit/Remove Advertisement</span>
                </a>
            </li>
        <?php } ?>

        <li class="log_out">
            <a href="<?php echo BASE_URL; ?>logout.php">
                <i></i>
                <span class="links_name">Log out</span>
            </a>
        </li>
    </ul>
</div>
