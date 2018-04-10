<?php
/* Template Name: multiscroll page */

get_header(); ?>

      <script>
        new WOW().init();
      </script>


 <div class="wrapper fullpage wrapper-scroll" id="trigger">
   <script>

       // init controller
       var controller = new ScrollMagic.Controller();

   </script>
   <div class="image-wrapper" id="imagesequence">
     <h1 id="headerBird" class="wow fadeInUp" data-wow-duration="1s">Mr. Phillip</h1>
   	<img id="myimg" src="../../img/example_imagesequence_01.png"><br>
   <div class="spacer s2"></div>
   <script>

       	// define images
       	var images = [
       		"<?php echo get_stylesheet_directory_uri(); ?>/png/icon_7.png",
       		"<?php echo get_stylesheet_directory_uri(); ?>/png/icon_6.png",
       		"<?php echo get_stylesheet_directory_uri(); ?>/png/icon_5.png",
       		"<?php echo get_stylesheet_directory_uri(); ?>/png/icon_4.png",
       		"<?php echo get_stylesheet_directory_uri(); ?>/png/icon_3.png",
       		"<?php echo get_stylesheet_directory_uri(); ?>/png/icon_2.png",
       		"<?php echo get_stylesheet_directory_uri(); ?>/png/icon_1.png"
       	];

       	// TweenMax can tween any property of any object. We use this object to cycle through the array
       	var obj = {curImg: 1};

       	// create tween
       	var tween = TweenMax.to(obj, 2,
       		{
       			curImg: images.length - 1,	// animate propery curImg to number of images
       			roundProps: "curImg",				// only integers so it can be used as an array index
       			repeat: -1,									// repeat 3 times
       			immediateRender: true,		// load first image automatically
       			ease: Linear.easeNone,			// show every image the same ammount of time
            reverse: true,
       			onUpdate: function () {
       			  $("#myimg").attr("src", images[obj.curImg]); // set the image source
       			}
       		}
       	);

       	// init controller
       	var controller = new ScrollMagic.Controller();

       	// build scene
       	var scene = new ScrollMagic.Scene({triggerElement: "#trigger", duration: 0,})
       					.setTween(tween)
       					.addIndicators() // add indicators (requires plugin)
       					.addTo(controller);

   </script>

   <div class="second-section-scroll container">

      <p class="wow fadeInLeft" data-wow-duration="3s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

  </div>

  <div class="row-design">

  </div>

  <div class="row-last">
    <div class="container">
      <div class="row">
        <div class="col col-12 col-md-6">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col col-12 col-md-6">
          <img class="wow fadeInDown" data-wow-duration="1s" src="<?php echo get_stylesheet_directory_uri(); ?>/png/icon_1.png" alt="">
        </div>

      </div>

      <div class="row">
        <div class="col col-12 col-md-6">
        <img class="wow fadeInDown" data-wow-duration="1s" src="<?php echo get_stylesheet_directory_uri(); ?>/png/icon_2.png" alt="">
        </div>
        <div class="col col-12 col-md-6">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

      </div>

      <div class="row">
        <div class="col col-12 col-md-6">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col col-12 col-md-6">
          <img class="wow fadeInDown" data-wow-duration="1s" src="<?php echo get_stylesheet_directory_uri(); ?>/png/icon_3.png" alt="">
        </div>

      </div>

    </div>

  </div>


   </div>

    <div class="section-one-scroll">
      <div class="container-fluid">
        <div class="row">
        <div class="col col-12 col-md-4 imageOne text-center">
          <div class="list-group">
            <a href="<?php echo home_url( 'volunteer/volunteer-in-costa-rica/' ); ?>" class="list-group-item list-group-item-action active">
              Volunteer in Costa Rica
            </a>
            <a href="<?php echo home_url( 'volunteer/volunteer-in-tanzania/' ); ?>" class="list-group-item list-group-item-action">
              Volunteer in Tanzania
            </a>
            <a href="<?php echo home_url( 'volunteer/volunteer-in-sierra-leone/' ); ?>" class="list-group-item list-group-item-action">
              Volunteer in Sierra Leone
            </a>
            <a href="<?php echo home_url( 'volunteer/volunteer-in-district-of-congo/' ); ?>" class="list-group-item list-group-item-action">
              Volunteer in the District Of Congo
            </a>
            <a href="<?php echo home_url( 'volunteer/volunteer-in-ecuador/' ); ?>" class="list-group-item list-group-item-action">
              Volunteer in Ecuador
            </a>
            <a href="<?php echo home_url( 'volunteer/volunteer-in-thailand/' ); ?>" class="list-group-item list-group-item-action">
              Volunteer in government schools of Thailand
            </a>
            <a href="<?php echo home_url( 'volunteer/volunteer-in-indonesia/' ); ?>" class="list-group-item list-group-item-action">
              Volunteer in the field of Indonesia
            </a>
            <a href="<?php echo home_url( 'volunteer/save-the-amazon/' ); ?>" class="list-group-item list-group-item-action">
              Save the amazon forest and it's inhabitants
            </a>
          </div>

        </div>

        <div class="col col-12 col-md-4 imageTwo">

        </div>

        <div class="col col-12 col-md-4 imageThree">
          <!-- Button trigger modal -->
          <button type="button" class="btn explode" data-toggle="modal" data-target="#exampleModalCenter">
              A message from Phillip!
          </button>
        </div>
        </div>
      </div>

    </div>

        <!-- hidden modal starts here -->

        <!-- Modal -->
      <div class="modal fadeIn" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Hello Friends, This is Phillip here.</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Hello Everyone, This is a message from Phillip!</p>
                  <p>The gift of your help/time/support means more than anything money can buy. I really appreciate all that you’ve done and hope this card provides a small token of my gratitude. Thank you!</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>



     </div>

<?php get_footer(); ?>
