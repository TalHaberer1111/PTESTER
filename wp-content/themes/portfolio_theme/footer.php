<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?>
<div>


	<footer role="contentinfo" id="site-footer" class="wow fadeIn" data-wow-duration="1s" data-wow-delay=".2s">
		<div class="black-triangle2">

		</div>

		<div class="container">
			<div class="row">
				<div class="col-6 col-sm-6 col-md-3">
					<ul>
						<li><a href="#">link here</a></li>
						<li><a href="#">link here</a></li>
						<li><a href="#">link here</a></li>
						<li><a href="#">link here</a></li>
					</ul>
				</div>
				<div class="col-6 col-sm-6 col-md-3">
					<ul>
						<li><a href="#">link here</a></li>
						<li><a href="#">link here</a></li>
						<li><a href="#">link here</a></li>
						<li><a href="#">link here</a></li>
					</ul>
				</div>
				<div class="col-6 col-sm-6 col-md-3">
					<ul>
						<li><a href="#">link here</a></li>
						<li><a href="#">link here</a></li>
						<li><a href="#">link here</a></li>
						<li><a href="#">link here</a></li>
					</ul>
				</div>
				<div class="col-6 col-sm-6 col-md-3">
					<ul>
						<li><a href="#">link here</a></li>
						<li><a href="#">link here</a></li>
						<li><a href="#">link here</a></li>
						<li><a href="#">link here</a></li>
					</ul>
				</div>

			</div>

		</div>

	</footer>

	<!-- <script>

	// init controller
	var controller = new ScrollMagic.Controller();

	// build scene
	var scene = new ScrollMagic.Scene({triggerElement: "#triggerfooter", duration: "100%"})
	// trigger animation by adding a css class
	.setClassToggle("footer", "fade-in")
	.addTo(controller);



	</script> -->



	</div>




<?php wp_footer(); ?>
</div>
</body>
</html>
