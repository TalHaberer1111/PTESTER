<?php
/* Template Name: multiscroll page */

get_header(); ?>


 <div class="wrapper fullpage wrapper-scroll">

   <div class="spacer s2"></div>
   <div class="spacer s0" id="trigger">
   <div class="image-wrapper" id="imagesequence">
   	<img id="myimg" src="../../img/example_imagesequence_01.png"><br>
   </div>
   <div class="spacer s2"></div>
   <script>
   	// define images
   	var images = [
   		"<?php echo get_stylesheet_directory_uri(); ?>/png/icon_1.png",
   		"<?php echo get_stylesheet_directory_uri(); ?>/png/icon_2.png",
   		"<?php echo get_stylesheet_directory_uri(); ?>/png/icon_3.png",
   		"<?php echo get_stylesheet_directory_uri(); ?>/png/icon_4.png",
   		"<?php echo get_stylesheet_directory_uri(); ?>/png/icon_5.png",
   		"<?php echo get_stylesheet_directory_uri(); ?>/png/icon_6.png",
   		"<?php echo get_stylesheet_directory_uri(); ?>/png/icon_7.png"
   	];

   	// TweenMax can tween any property of any object. We use this object to cycle through the array
   	var obj = {curImg: 4};

   	// create tween
   	var tween = TweenMax.to(obj, .8,
   		{
   			curImg: images.length - 1,	// animate propery curImg to number of images
   			roundProps: "curImg",				// only integers so it can be used as an array index
   			repeat: -1,									// repeat 3 times
   			immediateRender: false,			// load first image automatically
   			ease: Linear.easeNone,			// show every image the same ammount of time
   			onUpdate: function () {
   			  $("#myimg").attr("src", images[obj.curImg]); // set the image source
   			}
   		}
   	);

   	// init controller
   	var controller = new ScrollMagic.Controller();

   	// build scene
   	var scene = new ScrollMagic.Scene({triggerElement: "#trigger", duration: 300})
   					.setTween(tween)
   					.addIndicators() // add indicators (requires plugin)
   					.addTo(controller);

   	// handle form change
   	$("form.move input[name=duration]:radio").change(function () {
   		scene.duration($(this).val());
   	});
   </script>
   </div>
<div class="section-one-scroll">
  <div class="container">
    <div class="row">
      <!-- <div class="col col-12 linkTop mx-auto">
        <a class="link link--kukuri text-center" href="#" data-letters="Tal Haberer">Tal Haberer</a>
      </div> -->
    </div>
  </div>

</div>



 </div>


<?php get_footer(); ?>
