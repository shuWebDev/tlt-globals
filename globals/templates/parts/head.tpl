<?php
    // NOTE: This code should be included WITHIN the <head></head> tags
    // Add the extra metadata from the requesting page.
    $extra_metadata = $page_metadata ? $page_metadata : null;
?>
<head>
    <title><?php echo $page_title ?>Seton Hall University</title>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no" />
    <meta content="<?php echo $page_description ?>" name="Description"/>
    <meta content="<?php echo $page_keywords ?>" name="Keywords"/>
    <?php echo $extra_metadata ?>

    <!-- Global CSS -->
    <link href="<?php echo $template_styles ?>" media="screen" rel="stylesheet" type="text/css">

    <!-- Application CSS -->
    <link href="<?php echo $application_styles ?>" media="screen" rel="stylesheet" type="text/css">

    <!-- Application JS -->
    <!-- <script src="/globals/assets/js/bundle.js"></script> -->

    <script>var shu = {};</script>

    <noscript>
        <div class="alert-box radius" data-alert="">
            <p>Javascript must be enabled for the correct page display</p>
        </div>
    </noscript>
</head>
