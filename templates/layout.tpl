<?php
    // Get the config
    require_once(dirname(__DIR__) . '/config/config.php');
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

                {{content}}

            </div>
        </main>

        <?php require(PATH_GLOBAL_TEMPLATE_DIR . 'footer.tpl') ?>

        <!-- allow a user to go to the top of the page -->
        <a class="accessibility" href="#wrapper">Back to top</a>

        <script src="./assets/js/frameworks.min.js"></script>
        <script src="./assets/js/app.min.js"></script>
    </body>
</html>
