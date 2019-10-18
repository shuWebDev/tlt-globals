<?php
    // Get the config
    require_once($_SERVER['DOCUMENT_ROOT'] . "/_project-example/config/config.php");

    // NOTE: Set default values
    $page_title = "Example Project Home Page";
    $header_type = "minimal";

    $application_header = null;

    //* NOTE: Start custom code for header navigation here.
    ob_start();
    include "header-navbar.php";
    $application_navbar_content = ob_get_clean();

    //* NOTE: Start custom code for main navigation here.
    ob_start();
    include "nav-main.php";
    $application_nav = ob_get_clean();

    //* NOTE: Start custom code for the main content here.
    ob_start();
    ?>

    <div class="row">
        <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
        </div>
        <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
        </div>
        <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
        </div>
    </div>

    <?php

    //* NOTE: End custom code for primary content here.
    $content_primary = ob_get_clean();

    //* NOTE: Start custom code for the aside content here.
    ob_start();
    ?>

    <!-- <h3>What's This?</h3>
    <p>This is generic HTML content that is in a second column.</p> -->

    <?php
    //* NOTE: End custom code for secondary content here.
    $content_secondary = ob_get_clean();


    //* NOTE: Start custom code for the aside content here.
    ob_start();
    ?>
        <h1 class="display-3">Hello, world!</h1>

        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>

        <p><a class="btn btn-primary btn-lg" href="https://getbootstrap.com/docs/4.0/examples/jumbotron/" role="button">Learn more »</a></p>


    <?php
    //* NOTE: End custom code for secondary content here.
    $content_jumbotron = ob_get_clean();



    // Include the layout template
    require_once(PATH_GLOBAL_TEMPLATE_DIR . '/jumbotron.tpl');
?>
