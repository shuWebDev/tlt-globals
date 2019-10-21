<?php
    // Get the config
    require_once($_SERVER['DOCUMENT_ROOT'] . "/_project-example/config/config.php");

    // NOTE: Set default values
    $page_title = "Example Project Home Page";
    $header_type = "full";

    // $application_header = "some content";

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

    //* NOTE: End custom code for primary content here.
    $content_primary = ob_get_clean();

    //* NOTE: Start custom code for the secondary content here.
    ob_start();
    ?>

    <h3>What's This?</h3>
    <p>This is generic HTML content that is in a second column.</p>

    <?php
    //* NOTE: End custom code for secondary content here.
    $content_secondary = ob_get_clean();

    //* NOTE: Start custom code for the aside content here.
    ob_start();
    ?>

    <h3>What's This?</h3>
    <p>This is generic HTML content that is in an <code>&lt;aside&gt;&lt;/aside&gt;</pre></code> container.</p>

    <?php
    //* NOTE: End custom code for secondary content here.
    $content_aside = ob_get_clean();


    // Include the layout template
    require_once(PATH_GLOBAL_TEMPLATE_DIR . '/one-column-with-aside.tpl');
?>
