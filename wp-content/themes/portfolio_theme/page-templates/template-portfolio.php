<?php
/* Template Name: Portfolio */

get_header(); ?>

<div id="wrapper" class="fullpage wrapper">
  <section class="panel zero">
    <div class="hero-wrapper">
      <div class="video-container">
          <!-- <div class="filter"></div> -->
          <video autoplay loop>
              <source src="<?php echo get_stylesheet_directory_uri(); ?>/videos/design-cool.mov" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
          </video>
          <!-- <div class="poster hidden">
              <img src="PATH_TO_JPEG" alt="">
          </div> -->
      </div>
    </div>
  </section>


    <section class="panel one">


    </section>
    <section class="panel two">
  
    </section>
    <section class="panel three mx-auto">

    </section>
    <section class="panel four">

    </section>
    <script>
    	$(function () { // wait for document ready
    		// init
    		var controller = new ScrollMagic.Controller({
    			globalSceneOptions: {
    				triggerHook: 'onLeave'
    			}
    		});

    		// get all slides
    		var slides = document.querySelectorAll("section.panel");

    		// create scene for every slide
    		for (var i=0; i<slides.length; i++) {
    			new ScrollMagic.Scene({
    					triggerElement: slides[i]
    				})
            .on("enter", function (event) {
            $('video').get(0).play();
           })
    				.setPin(slides[i])
    				.addIndicators() // add indicators (requires plugin)
    				.addTo(controller);
    		}
    	});
    </script>
</div>


<?php get_footer(); ?>
