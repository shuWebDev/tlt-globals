<header class="container-fluid">
<?php
    if ($header_type != "application-only") {
        if ($header_type !== "minimal") {
            $logo = '<img class="logo" src="' . $header_logo . '" alt="' . $header_logo_alt_text . '" />';
        } else {
            $logo = 'Seton Hall University'; //? Maybe this should be a single line logo instead of text.
        }

        echo '<section id="header-main" class="row align-items-end">
        <div class="col-md-3">
            <a class="navbar-brand" href="https://www.shu.edu/">' . $logo . '</a>
        </div>';

        if ( $header_type == "full" ) {
            echo '<div class="col-md-9">
            <nav class="top-nav">
              <ul class="nav justify-content-end">
                <li class="nav-item"><a class="nav-link" href="https://www.shu.edu/academics">Academics</a></li>
                <li class="nav-item"><a class="nav-link" href="https://admissions.shu.edu">Admissions</a></li>
                <li class="nav-item"><a class="nav-link" href="https://www.shu.edu/catholic-mission">Catholic Mission</a></li>
                <li class="nav-item"><a class="nav-link" href="https://www.shupirates.com">Athletics</a></li>
                <li class="nav-item"><a class="nav-link" href="https://alumni.shu.edu">Alumni</a></li>
              </ul>
            </nav>
</div>
';
        }
        echo "</section>";
    }
?>

    <section id="header-application" class="row">
        <div class="col">
        <?php
            // NOTE: Add the application header.
            if ( $application_header ) {
                echo $application_header;
            }

            // var_dump($application_header_nav);
            // NOTE: Include a nav if there is one.
            if ( $application_header_nav ) {
        ?>
            <nav class="navbar <?php echo $application_navbar_size . ' ' . $application_navbar_colorScheme . ' ' . $application_navbar_bgColor ?>">
                <a class="navbar-brand" href="#">Site Title Variable</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-application-nav" aria-controls="header-application-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="header-application-nav">
                <?php
                        echo $application_header_nav;
                    }
                ?>
                </div>
            </nav>
        </div>
    </section>

</header>
