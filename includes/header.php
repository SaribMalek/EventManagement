<?php
/**
 * Common Header for Public Pages
 */
if (!defined('BASE_URL')) {
    require_once dirname(__DIR__) . '/config/config.php';
}
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo isset($page_title) ? $page_title . ' - ' . SITE_NAME : SITE_NAME; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL; ?><?php echo isset($page_css) ? $page_css : 'home.css'; ?>">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
