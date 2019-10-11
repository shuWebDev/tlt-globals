<?php
    // NOTE: This nav is based on Bootstrap's Navbar component => https://getbootstrap.com/docs/4.0/components/navbar

    if ($application_navbar_content == null) {
        exit;
    }
?>
<nav class="navbar <?php echo $application_navbar_size . ' ' . $application_navbar_colorScheme . ' ' . $application_navbar_bgColor ?>">
    <div class="container">
        <a class="navbar-brand" href="#">Container</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#application-header-nav" aria-controls="application-header-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="application-header-nav">
            <?php
                echo $application_navbar_content;
            ?>
        </div>
    </div>
</nav>
