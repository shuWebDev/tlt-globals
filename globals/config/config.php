<?php
    // NOTE: Define global constants
    define("URI_GLOBAL_BASE", "/globals" ); // Should match what's on the server.
    define("URI_GLOBAL_ASSETS", URI_GLOBAL_BASE . "/assets");
    define("URI_GLOBAL_VENDOR", "/vendor");
    define("PATH_GLOBAL_CONFIG_DIR", dirname(__DIR__) . "/config");
    define("PATH_GLOBAL_TEMPLATE_DIR", dirname(__DIR__) . "/templates");

    //NOTE: Define variable defaults
    $application_nav = null;
    $application_script = null;
    $application_styles = null;
    $content_main = null;
    $framework_scripts = URI_GLOBAL_ASSETS . '/js/frameworks.min.js';
    $framework_styles = URI_GLOBAL_ASSETS . '/css/foundation.min.css';
    $include_header_type = 'default'; //* default, minimal, full
    $include_footer_type = 'default'; //* default, minimal, full
    $include_nav = false;
    $page_title = null;
    $page_title_displayed = null;
    $template_nav = null;
    $template_scripts = URI_GLOBAL_ASSETS . '/js/app.min.js';
    $template_styles = URI_GLOBAL_ASSETS . '/css/app.css';

    // NOTE: Include vendor specific "stuff"
    require_once dirname(__DIR__, 2) . '/vendor/autoload.php';

?>
