<?php
    // Get the config
    require_once($_SERVER['DOCUMENT_ROOT'] . "/_project-example/config/config.php");

    // Auth if necessary
    if ( $saml ) {
        // additional settings and overrides go here
        
        /* -*- coding: utf-8 -*-
         * Copyright 2015 Okta, Inc.
         *
         * Licensed under the Apache License, Version 2.0 (the "License");
         * you may not use this file except in compliance with the License.
         * You may obtain a copy of the License at
         *
         *     http://www.apache.org/licenses/LICENSE-2.0
         *
         * Unless required by applicable law or agreed to in writing, software
         * distributed under the License is distributed on an "AS IS" BASIS,
         * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
         * See the License for the specific language governing permissions and
         * limitations under the License.
         */
        require('/var/simplesamlphp/lib/_autoload.php');
        $as = new \SimpleSAML\Auth\Simple($config['samlauth']);
        $as->requireAuth();
        $attributes = $as->getAttributes();
        // in case you need to look at them...
        // print_r($attributes);
    }

    // NOTE: Set default values
    $page_title = "Example Project Home Page";
    $header_type = "full";

    //* NOTE: Start custom code for the main content here.
    // ob_start();
    $content_primary = '';

    $x = 5985;
    // var_dump($x);
    $content_primary .= '<p>The value of $x is: ' . $x . '</p>';

    $cars = array("Volvo","BMW","Toyota");
    // var_dump($cars);
    $content_primary .= '<p>The second value of $cars is: ' . $cars[1] . '</p>';

    $content_primary .= '<ul>';
    foreach ($cars as $car) {
        $content_primary .= "<li class=\"car\">$car</li>";
    }
    $content_primary .= '</ul>';

    //* NOTE: End custom code for primary content here.
    // $content_primary = ob_get_clean();

    //* NOTE: Start custom code for the aside content here.
    //ob_start();
    
    $content_secondary = <<<END_SECONDARY
    <h3>What's This?</h3>
    <p>This is generic HTML content that is in a second column.</p>

END_SECONDARY;

    //* NOTE: End custom code for secondary content here.
    $content_secondary = ob_get_clean();



    // Include the layout template
    require_once(PATH_GLOBAL_TEMPLATE_DIR . '/two-column.tpl');
?>
