<?php
    require_once(dirname(dirname(__DIR__)) . "/globals/config/config.php");

    $application_footer = null;
    $application_nav_position = 'left'; // left or right if populated.
    $application_scripts = '/_project-example/js/app.js'; // path to "local" scripts
    $application_styles = '/_project-example/css/app.css'; // path to "local" css

    //* NOTE: Start custom code for application header here.
    ob_start();
    include "../_project-example/header.php";
    $application_header = ob_get_clean();

    //* NOTE: Start custom code for application header nav here.
    ob_start();
    include "../_project-example/header-navbar.php";
    $application_header_nav = ob_get_clean();

    //* NOTE: Start custom code for main navigation here.
    ob_start();
    include '../_project-example/nav-main.php';
    $application_nav = ob_get_clean();
?>
