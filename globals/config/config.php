<?php
    //! TODO: Use 'try/catch' blocks in the files including these variables.

    // NOTE: Define global constants
    define("URI_GLOBAL_BASE", "/globals" ); // Should match what's on the server.
    define("URI_GLOBAL_ASSETS", URI_GLOBAL_BASE . "/assets");
    define("URI_GLOBAL_VENDOR", "/vendor");
    define("PATH_GLOBAL_CONFIG_DIR", dirname(__DIR__) . "/config");
    define("PATH_GLOBAL_TEMPLATE_DIR", dirname(__DIR__) . "/templates");

    // NOTE: Define application specific variable defaults
    $application_footer = null;
    $application_header = null;
    $application_header_nav = null;
    $application_nav = null;
    $application_nav_position = 'left'; // left or right if populated.
    $application_navbar_bgColor = 'bg-dark';
    $application_navbar_colorScheme = 'navbar-dark'; // 'navbar-light' or 'navbar-dark' [https://getbootstrap.com/docs/4.0/components/navbar/#color-schemes]
    $application_navbar_size = 'navbar-expand-md';
    $application_scripts = null;
    $application_styles = null;

    // NOTE: Define content specific variable defaults
    $content_aside = null;
    $content_jumbotron = null;
    $content_primary = null;
    $content_secondary = null;
    $content_secondary_position = null;

    // NOTE: Define page specific variable defaults
    $page_description = null;
    $page_keywords = null;
    $page_metadata = null;
    $page_title = null;
    $page_title_displayed = null;

    // NOTE: Define template specific variable defaults
    $footer_type = 'default'; //* default, minimal, full
    $header_logo = URI_GLOBAL_ASSETS . '/images/university-logo-desktop.png';
    $header_logo_alt_text = 'Seton Hall University Logo.';
    $header_type = 'default'; //* application-only, default, full, minimal
    $include_nav = false;
    $template_scripts = URI_GLOBAL_ASSETS . '/js/bundle.js';
    $template_styles = URI_GLOBAL_ASSETS . '/css/bundle.css';


    // NOTE: Include vendor specific "stuff" from Composer
    // require_once dirname(__DIR__, 2) . '/vendor/autoload.php';
?>
