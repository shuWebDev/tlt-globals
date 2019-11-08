<?php
    // Get the config
    require_once($_SERVER['DOCUMENT_ROOT'] . "/_project-example/config/config.php");

    // NOTE: Set default values
    $page_title = "Example Project Home Page";
    $header_type = "full";

    //* NOTE: Start custom code for the main content here.
    // ob_start();
    $content_primary = '';

    $x = 5985;
    // var_dump($x);
    $content_primary .= '<p>The value of $x is: ' . $x . '</p>';

    $cars = array("Volvo","BMW","Toyota");
    // var_dump($cars);
    $content_primary .= '<p>The second value of $cars is: ' . $cars[1] . '</p>';

    $content_primary .= '<ul>';
    foreach ($cars as $car) {
        $content_primary .= "<li class=\"car\">$car</li>";
    }
    $content_primary .= '</ul>';

    //* NOTE: End custom code for primary content here.
    // $content_primary = ob_get_clean();

    //* NOTE: Start custom code for the aside content here.
    //ob_start();
    
    $content_secondary = <<<END_SECONDARY
    <h3>What's This?</h3>
    <p>This is generic HTML content that is in a second column.</p>

END_SECONDARY;

    //* NOTE: End custom code for secondary content here.
    $content_secondary = ob_get_clean();



    // Include the layout template
    require_once(PATH_GLOBAL_TEMPLATE_DIR . '/two-column.tpl');
?>
