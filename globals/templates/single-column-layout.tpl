<?php
    // Get the config
    require_once dirname(__DIR__) . '/config/config.php';
    // require_once dirname(__DIR__) . '/vendor/autoload.php';
    // require_once dirname(__DIR__) . '/vendor/twbs/bootstrap/dist/bootstrap.min.css';

    // NOTE: Set Defaults
    $template_scripts = URI_GLOBAL_ASSETS . '/js/app.min.js';
    $template_styles = URI_GLOBAL_ASSETS . '/css/app.css';
    $framework_scripts = URI_GLOBAL_ASSETS . '/js/frameworks.min.js';
    $framework_styles = URI_GLOBAL_ASSETS . '/css/foundation.min.css';
?>

<!DOCTYPE html>
<html lang="en">
    <?php require_once(PATH_GLOBAL_TEMPLATE_DIR . 'head.tpl') ?>

    <body>
        <!-- allow a user to go to the main content of the page -->
        <a class="accessibility" href="#main">Skip to Content</a>
        <?php require(PATH_GLOBAL_TEMPLATE_DIR . 'header.tpl') ?>

        <main id="main" class="row">
            <div class="medium-12 columns">
                <h1><?php echo $page_title ?></h1>

                {{content}}

            </div>
        </main>

        <?php require(PATH_GLOBAL_TEMPLATE_DIR . 'footer.tpl') ?>

        <!-- allow a user to go to the top of the page -->
        <a class="accessibility" href="#wrapper">Back to top</a>

        <?php require(PATH_GLOBAL_TEMPLATE_DIR . 'footer-scripts.tpl') ?>
    </body>
</html>
