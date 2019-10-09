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

        // NOTE: Determine which side the nav should be on.
        if ($application_nav_position != 'left') {
            $nav_class = 'order-last';
        } else {
            $nav_class = 'order-first';
        }

        // NOTE: Add a place holder for the content area.
        if (!$content_main) {
            $content_main = '<p class="alert alert-danger">Please add your content in the <code lang="php">$content_main</code> variable.</p>';
        }

        // NOTE: Add the <head></head> section.
        require_once(PATH_GLOBAL_TEMPLATE_DIR . '/parts/head.tpl')
    ?>

    <body>
        <!-- allow a user to go to the main content of the page -->
        <a class="accessibility" href="#main">Skip to Content</a>

        <?php
            // NOTE: Add the global header
            require(PATH_GLOBAL_TEMPLATE_DIR . '/parts/header-default.tpl');
        ?>

        <main id="main" class="container">
            <h2><?php
                //! NOTE: This should be set in the project.
                echo $page_title_displayed ;
            ?></h2>

            <section class="row">
                <div class="col-md-2 <?php echo $nav_class ?>">
                <?php
                    //! NOTE: This data should come from the project.
                    echo $application_nav;
                ?>
                </div>

                <div class="col-md-7">
                <?php
                    //! NOTE: This data should come from the project.
                    echo $content_main;
                ?>
                </div>

                <aside class="col-md-3">
                <?php
                    //! NOTE: This data should come from the project.
                    echo $content_aside;
                ?>
                </aside>
            </section>
        </main>

        <?php require(PATH_GLOBAL_TEMPLATE_DIR . '/parts/footer-default.tpl') ?>

        <!-- allow a user to go to the top of the page -->
        <a class="accessibility" href="#wrapper">Back to top</a>

        <?php require(PATH_GLOBAL_TEMPLATE_DIR . '/parts/footer-scripts.tpl') ?>
    </body>
</html>
