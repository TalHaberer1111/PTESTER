<?php
/* Template Name: multiscroll page */

get_header(); ?>


 <div id="wrapper" class="wrapper fullpage">

   <div id="pinContainer">
   	<section class="panel blue">
   		<b>ONE</b>
   	</section>
   	<section class="panel green">
   		<b>TWO</b>
   	</section>
   	<section class="panel red">
   		<b>THREE</b>
   	</section>
   	<section class="panel yellow">
   		<b>FOUR</b>
   	</section>
   </div>
   <script>
     $(document).ready(function($) {
   	$(function () { // wait for document ready
   		// init
   		var controller = new ScrollMagic.Controller();

   		// define movement of panels
   		var wipeAnimation = new TimelineMax()
   			.fromTo("section.panel.green", 1, {x: "100%"}, {x: "0%", ease: Linear.easeNone})  // in from left
   			.fromTo("section.panel.red",    1, {x:  "100%"}, {x: "0%", ease: Linear.easeNone})  // in from right
   			.fromTo("section.panel.yellow", 1, {y: "100%"}, {y: "0%", ease: Linear.easeNone}); // in from top

   		// create scene to pin and link animation
   		new ScrollMagic.Scene({
   				triggerElement: "#pinContainer",
   				triggerHook: "onLeave",
   				duration: "300%"
   			})
   			.setPin("#pinContainer")
   			.setTween(wipeAnimation)
   			// .addIndicators() // add indicators (requires plugin)
   			.addTo(controller);
   	});


  	});
   </script>



 </div>




<?php get_footer(); ?>
