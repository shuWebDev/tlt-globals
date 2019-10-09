<header class="container-fluid">
    <section id="header-main" class="row">
        <div class="col-12 col-md-4">
            <strong class="logo"><a href="https://www.shu.edu/"><img src="<?php echo $header_logo ?>" alt="<?php echo $header_logo_alt_text ?>" /></a></strong>
        </div>
        <div class="col-12 col-md-8"></div>
    </section>


<?php
    // NOTE: Add the application header
    if ( $application_header ) {
        require(PATH_GLOBAL_TEMPLATE_DIR . '/parts/application-header.tpl');
    }
?>
</header>
