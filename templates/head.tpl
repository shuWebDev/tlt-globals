<?php
	require_once(dirname(__DIR__) . '/config/config.php');

// NOTE: This code should be included WITHIN the <head></head> tags
?>

<title><?php echo ($page_title ? $page_title . ' - ' : null) ?>Seton Hall University</title>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta content="" name="Description"/>
<meta content="" name="Keywords"/>

<!-- Application CSS -->
<link href="<?php echo(URI_GLOBAL_CSS) ?>" media="screen" rel="stylesheet" type="text/css">

<!-- Modernizr -->
<!-- <script src="https://www.shu.edu/js/modernizr.min.js"></script> -->

<script>var shu = {};</script>

<noscript>
	<div class="alert-box radius" data-alert="">
		<p>Javascript must be enabled for the correct page display</p>
	</div>
</noscript>
