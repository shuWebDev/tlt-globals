<?php
    // Get the config
    require_once(dirname(__DIR__) . "/globals/config/config.php");

    // NOTE: Set default values
    $application_styles = '/_project-example/css/app.css';
    $application_scripts = '/_project-example/js/app.js';
    $page_title = "Example Project Home Page";
    // $content_main = "<p>here's some fancy coding</p>";

    // Include the layout template
    require_once(PATH_GLOBAL_TEMPLATE_DIR . '/single-column-layout.tpl');
?>
