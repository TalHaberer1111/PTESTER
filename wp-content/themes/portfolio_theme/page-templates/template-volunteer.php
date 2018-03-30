<?php
/* Template Name: Volunteer */

get_header(); ?>

  <script>
    new WOW().init();
  </script>


<div id="wrapper" class="wrapper">
  <div class="container-fluid">
    <div id="trigger-v" class="volunteer-hero-wrapper text-center">

      <h1 class="wow fadeIn" data-wow-duration="2s" data-wow-delay="1s">Volunteer with us</h1>
      <p class="wow fadeIn" data-wow-duration="2s" data-wow-delay="2s">Join our global mission</p>

      <img id="circle1" class="circle1 circles" src="<?php echo get_stylesheet_directory_uri(); ?>/images/circle1.png" alt="">

      <img id="circle2" class="circle2 circles" src="<?php echo get_stylesheet_directory_uri(); ?>/images/circle2.png" alt="">

      <img id="circle3" class="circle3 circles" src="<?php echo get_stylesheet_directory_uri(); ?>/images/circle1.png" alt="">

      <img id="circle4" class="circle4 circles" src="<?php echo get_stylesheet_directory_uri(); ?>/images/circle2.png" alt="">

      <script>

      // init controller
      var controller = new ScrollMagic.Controller();

      // build scene
      var scene = new ScrollMagic.Scene({triggerElement: "#trigger-v", duration: "100%", offset: 100,})
      // trigger animation by adding a css class
      .setClassToggle("#circle1", "fadeInDown11")
      .addTo(controller);

      // build scene
      var scene = new ScrollMagic.Scene({triggerElement: "#trigger-v", duration: "100%", offset: 100,})
      // trigger animation by adding a css class
      .setClassToggle("#circle2", "fadeInUpBig1")
      .addTo(controller);

      // build scene
      var scene = new ScrollMagic.Scene({triggerElement: "#trigger-v", duration: "100%", offset: 100,})
      // trigger animation by adding a css class
      .setClassToggle("#circle3", "fadeInDown11")
      .addTo(controller);

      // build scene
      var scene = new ScrollMagic.Scene({triggerElement: "#trigger-v", duration: "100%", offset: 100,})
      // trigger animation by adding a css class
      .setClassToggle("#circle4", "fadeInUpBig1")
      .addTo(controller);

      </script>


    </div>
  </div>

    <div id="sectionOne" class="section-one">
        <img id="i1" class="i1 imageLines" src="<?php echo get_stylesheet_directory_uri(); ?>/images/i1.png" alt="">
        <img id="i2" class="i2 imageLines" src="<?php echo get_stylesheet_directory_uri(); ?>/images/i2.png" alt="">
      <div class="container box-volunteer">
        <div class="row">
          <div class="col-12 col-md-6">
            <img class="wow fadeInUpBig v-kids" data-wow-duration="3s"  src="<?php echo get_stylesheet_directory_uri(); ?>/images/volunteer2.jpg" alt="volunteer kids">
          </div>

          <div class="col-12 col-md-6">
            <h1 class="wow fadeInLeft" data-wow-duration="1s">Where to start</h1>
            <div class="lineOne wow fadeInRight" data-wow-duration="4s"></div>
            <p class="volunteer-quote"><?php the_field('volunteer_quote'); ?></p>
          </div>

        </div>
        <div class="row">
          <div class="col">
              <div class="volunteer-slider wow fadeIn" data-wow-duration="2s" data-wow-delay=".5s">

                <?php echo do_shortcode('[slick-slider category="9" design="design-5" centermode="true" arrows="false" autoplay="true" speed="3000"]'); ?>

              </div>

          </div>
        </div>
      </div>

      <script>

      // init controller
      var controller = new ScrollMagic.Controller();

      // build scene
      var scene = new ScrollMagic.Scene({triggerElement: "#sectionOne", duration: 0,})
      // trigger animation by adding a css class
      .setClassToggle("#i2", "fadeInUpBig2")
      .addTo(controller);

      // build scene
      var scene = new ScrollMagic.Scene({triggerElement: "#sectionOne", duration: 0,})
      // trigger animation by adding a css class
      .setClassToggle("#i1", "fadeInDown12")
      .addTo(controller);

      </script>

    </div>

    <div class="section-programs">
      <div class="container-fluid">

            <?php if( have_rows('volunteer_programs') ): ?>

              <ul class="program-boxes">

              <?php while( have_rows('volunteer_programs') ): the_row();

                // vars
                $image = get_sub_field('program_image');
                $name = get_sub_field('program_name');
                $content = get_sub_field('program_content');
                $link = get_sub_field('program_link');

                ?>

                <li class="program-box">

                  <?php if( $link ): ?>
                    <a href="<?php echo $link; ?>">
                  <?php endif; ?>

                    <img src="<?php echo $image; ?>"/>

                  <?php if( $link ): ?>
                    </a>
                  <?php endif; ?>

                    <div class="program-wrap">
                      <p class="name">
                        <?php echo $name; ?>
                      </p>
                      <div class="content">
                        <?php echo $content; ?>
                      </div>

                    </div>

                </li>

              <?php endwhile; ?>

              </ul>

            <?php endif; ?>

      </div>

    </div>

    <div class="section-stories">
      <!-- <img class="people-vector wow fadeInUp" data-wow-duration="1s" src="<?php echo get_stylesheet_directory_uri(); ?>/images/people.png" alt=""> -->
      <div class="container">
        <div class="row">
          <!-- <div class="col col-12 col-md-6">
            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
          </div>
          <div class="col col-12 col-md-6">
            <h1>Something Here</h1>
          </div>
        </div> -->

      </div>

    </div>

  </div>

</div>








<?php get_footer(); ?>
