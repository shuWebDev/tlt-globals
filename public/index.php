<?php
    // Get the config
    require_once(dirname(__DIR__) . '/config/config.php');

    // Set header values for the browser
    header('Content-Type: text/html; charset=UTF-8');

    // Include the layout template
    require_once(PATH_GLOBAL_TEMPLATE_DIR . 'layout.tpl');
?>
