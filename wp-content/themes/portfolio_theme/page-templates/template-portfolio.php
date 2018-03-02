<?php
/* Template Name: Portfolio */

get_header(); ?>

<div id="wrapper" class="fullpage wrapper">
  <a href="http://www.google.com/"><div id="block" class="black-block"></div></a>
  <div id="block" class="black-block2"></div>
  <section id"trigger4" class="panel zero">
    <div class="hero-wrapper">
      <div class="video-container">
          <!-- <div class="filter"></div> -->
          <video autoplay loop>
              <source src="<?php echo get_stylesheet_directory_uri(); ?>/videos/For_wes.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
          </video>
      </div>
    </div>
    <h1 id="headerMain">Something Here</h1>

    <script>


          // init controller
          var controller = new ScrollMagic.Controller();

          // build scene
          var scene = new ScrollMagic.Scene({triggerElement: "#trigger4", duration: "100%"})
          // trigger animation by adding a css class
          .setClassToggle("#headerMain", "fadeInRight")
          .addTo(controller);

          // build scene
          var scene = new ScrollMagic.Scene({triggerElement: "#wrapper", duration: 0,})
          // trigger animation by adding a css class
          .setClassToggle("#block", "fade-in-three")
          .addTo(controller);

          // build scene
          var scene = new ScrollMagic.Scene({triggerElement: "#wrapper", duration: 0,})
          // trigger animation by adding a css class
          .setClassToggle("#block", "fade-in-four")
          .addTo(controller);


    </script>

  </section>




    <section class="panel one">
      <div id="trigger22">


      <div id="triangle1" class="black-triangle"></div>

      <div class="white-box-wrapper">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

            </div>
            <div class="col-12 col-md-6">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>

          </div>
        </div>
      </div>

    </div>
      <div id="trigger11" class="video-container">
      <div class="container">
        <div class="row card-section">
          <div class="col-12 col-md-4">
            <div id="card1" class="card mx-auto" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
          </div>

          <div class="col-12 col-md-4">
            <div id="card2" class="card mx-auto" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
          </div>

          <div class="col-12 col-md-4">
            <div id="card3" class="card mx-auto" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
          </div>

        </div>

      </div>

      <script>

      // init controller
      var controller = new ScrollMagic.Controller();

      // build scene
      var scene = new ScrollMagic.Scene({triggerElement: "#wrapper", duration: 0,})
      // trigger animation by adding a css class
      .setClassToggle("#triangle1", "fadeInUpBig")
      .addTo(controller);

      // build scene
      var scene = new ScrollMagic.Scene({triggerElement: "#trigger11", duration: 0,})
      // trigger animation by adding a css class
      .setClassToggle("#card1", "fade-in-one")
      .addTo(controller);

      // build scene
      var scene = new ScrollMagic.Scene({triggerElement: "#trigger11", duration: 0,})
      // trigger animation by adding a css class
      .setClassToggle("#card2", "fade-in-two")
      .addTo(controller);

      // build scene
      var scene = new ScrollMagic.Scene({triggerElement: "#trigger11", duration: 0,})
      // trigger animation by adding a css class
      .setClassToggle("#card3", "fade-in-three")
      .addTo(controller);



      </script>

  </div>

    </section>



    <section class="panel two">
      <div class="video-container">
        <div class="slider-wrapper">
          <?php echo do_shortcode('[slick-slider category="2" design="design-5" centermode="true" fade="true" arrows="false" autoplay="true" speed="2000"]'); ?>
        </div>

      </div>
    </section>
    <section id="trigger33" class="panel three mx-auto">
      <div class="white-triangle">

      </div>
      <div id="C-form" class="contact-form-wrapper">
        <?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
      </div>

      <script>

      // init controller
      var controller = new ScrollMagic.Controller();

      // build scene
      var scene = new ScrollMagic.Scene({triggerElement: "#trigger33", duration: 0,})
      // trigger animation by adding a css class
      .setClassToggle("#C-form", "fadeInUpBig")
      .addTo(controller);


      </script>
    </section>


    <div id="triggerfooter">

    <section class="panel four">
      <div id="four"></div>
      <div class="slider1">
        <?php echo do_shortcode('[slick-carousel-slider design="design-6" category="3" slidestoshow="2" variablewidth="true" autoplay="false" dots="false"]'); ?>

      </div>

      <div class="slider2">
        <?php echo do_shortcode('[slick-carousel-slider slidestoshow="1" design="design-6" centermode="true" variablewidth="true" category="3"]'); ?>

      </div>




    </section>


    </div>
    <script>

    $(document).ready(function($) {


    	$(function () { // wait for document ready
    		// init
    		var controller = new ScrollMagic.Controller({

    		});

    		// get all slides
    		var slides = document.querySelectorAll("section.panel");

    		// create scene for every slide
    		for (var i=0; i<slides.length; i++) {
    			new ScrollMagic.Scene({
              triggerHook: 'onLeave',
    					triggerElement: slides[i]
    				})
            .on("enter", function (event) {
            $('video').get(0).play(3000);
           })
    				.setPin(slides[i])
    				.addTo(controller);
    		}
    	});


        	});
    </script>

	<div class="blackline"></div>
</div>


<?php get_footer(); ?>
