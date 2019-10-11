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
        if (!$content_primary) {
            $content_primary = '<p class="alert alert-danger">Please add your content in the <code lang="php">$content_primary</code> variable.</p>';
        }

        // NOTE: Add the <head></head> section.
        require_once(PATH_GLOBAL_TEMPLATE_DIR . '/parts/head.tpl')
    ?>

    <body>
        <!-- allow a user to go to the main content of the page -->
        <a class="accessibility" href="#main">Skip to Content</a>

        <?php
            // NOTE: Add the global header
            require(PATH_GLOBAL_TEMPLATE_DIR . '/parts/header.tpl');
        ?>

        <main id="main" class="container">
            <h2><?php
                //! NOTE: This should be set in the project.
                echo $page_title_displayed ;
            ?></h2>

            <section class="row">
                <div class="row">
                    <div class="col-6">
                    <?php
                        //! NOTE: This data should come from the project.
                        echo $content_primary;
                    ?>
                    </div>
                    <div class="col-6">
                    <?php
                        //! NOTE: This data should come from the project.
                        echo $content_secondary;
                    ?>
                    </div>
                </div>
            </section>
        </main>

        <?php require(PATH_GLOBAL_TEMPLATE_DIR . '/parts/footer-default.tpl') ?>

        <!-- allow a user to go to the top of the page -->
        <a class="accessibility" href="#wrapper">Back to top</a>

        <?php require(PATH_GLOBAL_TEMPLATE_DIR . '/parts/footer-scripts.tpl') ?>
    </body>
</html>
