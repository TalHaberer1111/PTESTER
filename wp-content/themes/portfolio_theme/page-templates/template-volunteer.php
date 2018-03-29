<?php
/* Template Name: Volunteer */

get_header(); ?>

  <script>
    new WOW().init();
  </script>


<div id="wrapper" class="wrapper">
  <div class="container-fluid">
    <div class="volunteer-hero-wrapper text-center">

      <h1 class="wow fadeIn" data-wow-duration="2s">Volunteer with us</h1>
      <p class="wow fadeIn" data-wow-duration="2s" data-wow-delay="1s">Join our global mission</p>

      <img class="circle1 circles wow fadeInDownBig" data-wow-duration="3s"  src="<?php echo get_stylesheet_directory_uri(); ?>/images/circle1.png" alt="">

      <img class="circle2 circles wow fadeInUpBig" data-wow-duration="3s"  src="<?php echo get_stylesheet_directory_uri(); ?>/images/circle2.png" alt="">

      <img class="circle3 circles wow fadeInDownBig" data-wow-duration="3s"  src="<?php echo get_stylesheet_directory_uri(); ?>/images/circle1.png" alt="">

      <img class="circle4 circles wow fadeInUpBig" data-wow-duration="3s"  src="<?php echo get_stylesheet_directory_uri(); ?>/images/circle2.png" alt="">


    </div>
  </div>

    <div id="sectionOne" class="section-one">
      <div class="container box-volunteer">
        <div class="row">
          <div class="col-12 col-md-6">
            <img class="wow fadeInUpBig" data-wow-duration="3s" data-wow-delay="3s" src="<?php echo get_stylesheet_directory_uri(); ?>/images/volunteer2.jpg" alt="volunteer kids">
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

    </div>

    <div class="section-programs">
      <div class="container-fluid">

        <!-- <div class="row">
          <div class="col"> -->

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

          <!-- </div>
        </div> -->

      </div>

    </div>

  </div>

</div>








<?php get_footer(); ?>
