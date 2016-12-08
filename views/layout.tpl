<!DOCTYPE html>
<html lang="en">
	<!-- Content Copyright Seton Hall University -->
	<?php require('./views/head.tpl') ?>

	<body>
		<!-- allow a user to go to the main content of the page -->
		<a class="accessibility" href="#main">Skip to Content</a>
		<div id="wrapper"  class="off-canvas-wrap" data-offcanvas>
			<div class="inner-wrap">
				<?php require('./views/right-off-canvas-menu.tpl') ?>
				<?php require('./views/left-off-canvas-menu.tpl') ?>

				<div class="w1">
					<?php require('./views/header.tpl') ?>

					<main id="main" class="row">
						<div class="medium-12 columns">

							{{content}}

						</div>
					</main>

					<?php require('./views/footer.tpl') ?>
				</div>
			</div>
		</div>
		<!-- allow a user to go to the top of the page -->
		<!-- <a class="accessibility" href="#wrapper">Back to top</a> -->
		<script src="./assets/js/frameworks.min.js"></script>
		<script src="./assets/js/app.min.js"></script>
	</body>
</html>
