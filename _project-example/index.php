<?php
    // Get the config
    require_once(dirname(__DIR__) . "/globals/config/config.php");

    // NOTE: Set default values
    $application_styles = '/_project-example/css/app.css';
    $application_scripts = '/_project-example/js/app.js';
    $page_title = "Example Project Home Page";

    $application_header = "some content";

    //* NOTE: Start custom code for main navigation here.
    ob_start();
    include "nav-header.php";
    $application_header_nav = ob_get_clean();

    //* NOTE: Start custom code for the main content here.
    ob_start();

    $x = 5985;
    // var_dump($x);
    echo '<p>The value of $x is: ' . $x . '</p>';

    $cars = array("Volvo","BMW","Toyota");
    // var_dump($cars);
    echo '<p>The second value of $cars is: ' . $cars[1] . '</p>';

    echo '<ul>';
    foreach ($cars as $car) {
        echo "<li class=\"car\">$car</li>";
    }
    echo '</ul>';

    //* NOTE: End custom code for main content here.
    $content_main = ob_get_clean();

    //* NOTE: Start custom code for the aside content here.
    ob_start();
    ?>

    <h3>What's This?</h3>
    <p>This is generic HTML content that is in an aside.</p>

    <?php
    //* NOTE: End custom code for aside content here.
    $content_aside = ob_get_clean();



    // Include the layout template
    require_once(PATH_GLOBAL_TEMPLATE_DIR . '/single-column-layout.tpl');
?>
