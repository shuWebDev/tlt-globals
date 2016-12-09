<?php
	require_once(dirname(__DIR__) . '/libs/paths.php');

// NOTE: This code should be included WITHIN the <head></head> tags
?>

<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title><?php echo ($page_title ? $page_title . ' - ' : null) ?>Seton Hall University</title>
<meta content="" name="Description"/>
<meta content="" name="Keywords"/>

<!-- Foundation CSS -->
<link href="<?php echo(URI_GLOBAL_VENDOR . 'foundation/css/foundation.min.css') ?>" media="screen" rel="stylesheet" type="text/css">

<!-- Application CSS -->
<link href="<?php echo(URI_GLOBAL_CSS) ?>" media="screen" rel="stylesheet" type="text/css">

<!-- TypeKit -->
<!-- <script src="https://use.typekit.net/owz2qgk.js" type="text/javascript"></script> -->
<!-- <script>
		try{Typekit.load();}catch(e){}
</script> -->

<!-- Modernizr -->
<script src="https://www.shu.edu/js/modernizr.min.js"></script>

<!-- Google JS API -->
<script src="https://www.google.com/jsapi" type="text/javascript"></script>

<script>var shu = {};</script>

<noscript>
	<div class="alert-box radius" data-alert="">
		<p>Javascript must be enabled for the correct page display</p>
	</div>
</noscript>
