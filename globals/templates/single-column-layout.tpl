<!DOCTYPE html>
<html lang="en">
    <?php
        // Get the config
        require_once dirname(__DIR__) . '/config/config.php';

        // NOTE: Determine if we have a page title or not.
        if ($page_title) {
            $page_title_displayed = $page_title;
            $page_title = $page_title . ' - ';
        }

        // NOTE: Add a place holder for the content area.
        if (!$content_main) {
            $content_main = '<h4 class="alert subheader">Please add your content in the <code lang="php">$content_main</code> variable.</h4>';
        }

        // NOTE: Add the <head></head> section.
        require_once(PATH_GLOBAL_TEMPLATE_DIR . '/parts/head.tpl')
    ?>

    <body>
        <!-- allow a user to go to the main content of the page -->
        <a class="accessibility" href="#main">Skip to Content</a>

        <?php require(PATH_GLOBAL_TEMPLATE_DIR . '/parts/header-default.tpl') ?>

        <main id="main" class="container">
            <div class="medium-12 columns">
                <h2><?php
                    //! NOTE: This should be set in the project.
                    echo $page_title_displayed ;
                ?></h2>

                <?php
                    //! NOTE: This data should come from the project.
                    echo $content_main;
                ?>
            </div>
        </main>

        <?php require(PATH_GLOBAL_TEMPLATE_DIR . '/parts/footer-default.tpl') ?>

        <!-- allow a user to go to the top of the page -->
        <a class="accessibility" href="#wrapper">Back to top</a>

        <?php require(PATH_GLOBAL_TEMPLATE_DIR . '/parts/footer-scripts.tpl') ?>
    </body>
</html>
