<header class="container-fluid">
<?php
    if ($header_type != "application-only") {
        if ($header_type !== "minimal") {
            $logo = '<img src="' . $header_logo . '" alt="' . $header_logo_alt_text . '" />';
        } else {
            $logo = 'Seton Hall University'; //? Maybe this should be a single line logo instead of text.
        }

        echo '<section id="header-main" class="row">
            <div class="col">
                <strong class="logo"><a href="https://www.shu.edu/">' . $logo . '</a></strong>
            </div>';

        if ( $header_type == "full" ) {
            echo '<div class="col col-md-auto">
                <nav class="nav">
                    <a class="nav-link" href="#">Academics</a>
                    <a class="nav-link" href="#">Admissions</a>
                    <a class="nav-link" href="#">Catholic Mission</a>
                    <a class="nav-link" href="#">Athletics</a>
                    <a class="nav-link" href="#">Alumni</a>
                </nav>
            </div>';
        }
        echo "</section>";
    }
?>


    <section id="applicationHeader" class="row">
        <div class="col-md-12">
            <?php
                // var_dump($application_header_nav);
                // NOTE: Include a nav if there is one.
                if ( $application_header_nav ) {
                    echo $application_header_nav;
                }
            ?>
        </div>
    </section>

</header>
