<?php
    // NOTE: Define global constants
    define("URI_GLOBAL_BASE", "/globals" ); // Should match what's on the server.
    define("URI_GLOBAL_ASSETS", URI_GLOBAL_BASE . "/assets");
    define("URI_GLOBAL_VENDOR", "/vendor");
    define("PATH_GLOBAL_CONFIG_DIR", dirname(__DIR__) . "/config");
    define("PATH_GLOBAL_TEMPLATE_DIR", dirname(__DIR__) . "/templates");

    //NOTE: Define variable defaults
    $application_header = null;
    $application_header_nav = null;
    $application_nav = null;
    $application_nav_position = null; // left or right if populated.
    $application_scripts = null;
    $application_styles = null;
    $content_aside = null;
    $content_aside_position = null;
    $content_main = null;
    $framework_scripts = URI_GLOBAL_ASSETS . '/js/frameworks.min.js';
    $framework_styles = URI_GLOBAL_ASSETS . '/css/foundation.min.css';
    $header_logo = URI_GLOBAL_ASSETS . '/images/university-logo-desktop.png';
    $header_logo_alt_text = 'Seton Hall University Logo.';
    $include_footer_type = 'default'; //* default, minimal, full
    $include_header_type = 'default'; //* default, minimal, full
    $include_nav = false;
    $page_description = null;
    $page_keywords = null;
    $page_metadata = null;
    $page_title = null;
    $page_title_displayed = null;
    $template_scripts = URI_GLOBAL_ASSETS . '/js/bundle.js';
    $template_styles = URI_GLOBAL_ASSETS . '/css/bundle.css';

    // NOTE: Include vendor specific "stuff"
    // require_once dirname(__DIR__, 2) . '/vendor/autoload.php';
?>
