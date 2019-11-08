<?php
    // require_once(dirname(dirname(__DIR__)) . "/globals/config/config.php");
    require_once($_SERVER['DOCUMENT_ROOT'] . "/globals/config/config.php");

    // parse project-specific settings for DB, etc. and put them into array $config;
    $config = parse_ini_file( './config.ini', true );

    // var_dump($_SERVER);
    // var_dump(dirname(dirname(__DIR__)) . "/globals/config/config.php");

    //* NOTE: Set the project root variable.
    $project_root = "/_project-example/";
    $project_doc_root = $_SERVER['DOCUMENT_ROOT'] . "/_project-example/";

    $application_footer = null;
    $application_nav_position = 'left'; // left or right if populated.
    $application_scripts = $project_root . 'js/app.js'; // path to "local" scripts
    $application_styles = $project_root . 'css/app.css'; // path to "local" css

    //* NOTE: Start custom code for application header here.
    //ob_start();
    // include $project_doc_root . "header.php";
    // $application_header = ob_get_clean();
    $application_header = file_get_contents( $project_doc_root . 'header.php' );

    //* NOTE: Start custom code for application header nav here.
    // ob_start();
    // include $project_doc_root . "header-navbar.php";
    // $application_header_nav = ob_get_clean();
    $application_header_nav = file_get_contents( $project_doc_root . 'header-navbar.php' );

    //* NOTE: Start custom code for main navigation here.
    // ob_start();
    // include $project_doc_root . "nav-main.php";
    // $application_nav = ob_get_clean();
    $application_nav = file_get_contents( $project_doc_root . 'nav-main.php' );
?>
