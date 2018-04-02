<?php
/* Template Name: portfolio */

get_header(); ?>

<script>
        new WOW().init();
        </script>

<div id="wrapper" class="fullpage wrapper">
  <a href="http://www.google.com/"><div id="block" class="black-block"></div></a>
  <div id="block" class="black-block2"></div>
  <section id"trigger4" class="panel zero">
    <div class="hero-wrapper">
      <div class="video-container">
          <!-- <div class="filter"></div> -->
          <video autoplay loop>
              <source src="<?php echo get_stylesheet_directory_uri(); ?>/videos/boywindow.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
          </video>
      </div>
    </div>
    <h1 id="headerMain">Unbounded <br> <span class="souls">Souls</span></h1>

    <script>


          // init controller
          var controller = new ScrollMagic.Controller();

          // build scene
          var scene = new ScrollMagic.Scene({triggerElement: "#trigger4", duration: "100%"})
          // trigger animation by adding a css class
          .setClassToggle("#headerMain", "fadeInDown11")
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

      <div class="container-fluid">
        <div class="row">
          <div class="col col-12 col-md-7">

            <img class="image-front wow bounceInUp" data-wow-duration="5s" data-wow-delay="1s" src="<?php echo get_stylesheet_directory_uri(); ?>/images/boy1.jpg" alt="">
          </div>

          <div class="col col-12 col-md-5">

            <div class="white-box-wrapper rollOut">
              <div class="container">
                  <h1 class="join">Join the mission to change the planet!</h1>
                  <a "join-button" href="<?php echo home_url( '/volunteer' ); ?>"><img class="join-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/circles.png" alt="infinity icon"> <br><span class="learn">Learn More</span></a>
              </div>
            </div>

          </div>

        </div>
      </div>

    </div>
      <div id="trigger11" class="video-container">
      <div class="container">
        <div class="row card-section">
          <div class="col-12 col-md-4">
            <div id="card1" class="card cards text-center mx-auto">
            <div class="card-body">
              <h5 class="card-title">Climate Change</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Learn More</a>
            </div>
          </div>
          </div>

          <div class="col-12 col-md-4">
            <div id="card2" class="card cards text-center mx-auto">
            <div class="card-body">
              <h5 class="card-title">Child Protection</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link1">Learn More</a>
            </div>
          </div>
          </div>

          <div class="col-12 col-md-4">
            <div id="card3" class="card cards text-center mx-auto">
            <div class="card-body">
              <h5 class="card-title">Global Refugee Crisis</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Learn More</a>
            </div>
          </div>
          </div>
          <hr>
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
      var scene = new ScrollMagic.Scene({triggerElement: "#trigger11", duration: "120%", offset: 300})
      // trigger animation by adding a css class
      .setClassToggle("#card1", "bounceInDown")
      .addTo(controller);

      // build scene
      var scene = new ScrollMagic.Scene({triggerElement: "#trigger11", duration: "120%", offset: 300})
      // trigger animation by adding a css class
      .setClassToggle("#card2", "bounceInDown2")
      .addTo(controller);

      // build scene
      var scene = new ScrollMagic.Scene({triggerElement: "#trigger11", duration: "120%", offset: 300})
      // trigger animation by adding a css class
      .setClassToggle("#card3", "bounceInDown3")
      .addTo(controller);



      </script>

  </div>

    </section>


<div id="trigger77">

    <section class="panel two">
      <div class="video-container container">

        <div id="quoteslider" class="slider-wrapper wow	fadeIn" data-wow-duration="2s" data-wow-delay="1s">
          <?php echo do_shortcode('[slick-slider category="2" design="design-5" centermode="true" arrows="false" autoplay="true" speed="3000"]'); ?>
        </div>

        <div class="callout-three-wrapper wow slideInUp" data-wow-duration="2s" data-wow-delay=".5s">
          <div class="container">
            <div class="row">
              <div class="col col-md-8">
                <h1 class="padding-top">Join the force to better human kindness around the globe.</h1>
                <p>Sign up to recieve the latest updates, volunteer suggestions, and blog posts.</p>
              </div>
              <div class="col col-md-4">
                <a class="button btn-call-three padding-top mx-auto wow fadeInUp" href="#">Sign up</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

    <!-- <section id="trigger33" class="panel three mx-auto">
      <div class="white-triangle">

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
    </section> -->


    <div id="triggerfooter">

    <section class="panel four">
      <div id="four"></div>
      <div class="container-fluid">
        <div class="row text-center topRow">
          <div class="col col-12 col-md-6">
            <div class="witebox">
              <img class="v1 wow fadeIn" data-wow-duration="2s" data-wow-delay="1s"  src="<?php echo get_stylesheet_directory_uri(); ?>/images/volunteer3.png" alt="">
            </div>

          </div>
          <div class="col col-12 col-md-6">
            <div class="witebox">
              <h1 class="contact">Contact Us</h1>
              <div id="C-form" class="contact-form-wrapper">
                <?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
              </div>
            </div>
          </div>

        </div>
        <div class="row text-center">
          <div class="col col-12 col-md-6">
            <img class="c-one wow fadeInDownBig" data-wow-duration="2s" data-wow-delay="1s" src="<?php echo get_stylesheet_directory_uri(); ?>/images/circle1.png" alt="">
            <img class="c-two wow fadeInDownBig" data-wow-duration="2s" data-wow-delay="1.5s" src="<?php echo get_stylesheet_directory_uri(); ?>/images/circle2.png" alt="">
          <div class="col col-12 col-md-6">
            <div class="witebox">

            </div>
          </div>
        </div>
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
