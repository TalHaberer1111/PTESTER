<?php
/* Template Name: volunteering stories */

get_header(); ?>

  <div id="wrapper" class="page-wrapper">

<div id="pinContainer">
	<section class="panel blue">
		<b>ONE</b>
	</section>
	<section class="panel teal">
		<b>TWO</b>
	</section>
	<section class="panel green">
		<b>THREE</b>
	</section>
	<section class="panel whitesmoke">
		<b>FOUR</b>
	</section>
</div>
<script>
	$(function () { // wait for document ready
		// init
		var controller = new ScrollMagic.Controller();

		// define movement of panels
		var wipeAnimation = new TimelineMax()
			.fromTo("section.panel.teal", 1, {x: "-100%"}, {x: "0%", ease: Linear.easeNone})  // in from left
			.fromTo("section.panel.green",    1, {x:  "100%"}, {x: "0%", ease: Linear.easeNone})  // in from right
			.fromTo("section.panel.whitesmoke", 1, {y: "-100%"}, {y: "0%", ease: Linear.easeNone}); // in from top

		// create scene to pin and link animation
		new ScrollMagic.Scene({
				triggerElement: "#pinContainer",
				triggerHook: "onLeave",
				duration: "300%"
			})
			.setPin("#pinContainer")
			.setTween(wipeAnimation)
			.addTo(controller);
	});
</script>


  </div>



<!-- <div class="stories-footer wow fadeIn" data-wow-delay=".5s" data-wow-duration="2s">
    <?php get_footer(); ?>
</div> -->
