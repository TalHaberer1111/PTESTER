<?php
/* Template Name: multiscroll page */

get_header(); ?>


 <div class="wrapper fullpage wrapper-scroll">


   <div class="spacer s2"></div>
    <div id="trigger1" class="spacer s0">
    <div class="svgWrapper">
    <svg class="myName" width="400px" height="281px" viewBox="0 0 298 181" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

        <desc>Created with Sketch.</desc>
        <defs></defs>
        <g id="page1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="square">
            <g id="Group" transform="translate(145.000000, 100.500000) rotate(21.000000) translate(-145.000000, -100.500000) translate(-24.000000, 16.000000)" stroke="#979797" stroke-width="8">
                <path d="M0.5,43.5 L222.5,0.5" id="line"></path>
                <path id="word" d="M167.5,155.5 C148.853563,117.203556 140.761115,86.2504309 143.222656,62.640625 C145.684198,39.0308191 181.132115,59.4552983 249.566406,123.914062" id="Line-3"></path>
                <path d="M152.5,118.5 L206.5,86.5" id="word"></path>
                <path id="dot" d="M94.5,26.5 L122.5,168.5" ></path>
                <path id="dot" d="M230.5,24.5 L242.5,94.5" ></path>
                <path id="word" d="M337.5,103.5 L243.5,94.5" ></path>
            </g>
        </g>
    </svg>
</div>
</div>
<div class="spacer s2"></div>
<script>
	function pathPrepare ($el) {
		var lineLength = $el[0].getTotalLength();
		$el.css("stroke-dasharray", lineLength);
		$el.css("stroke-dashoffset", lineLength);
	}

	var $word = $("path#word");
	var $dot = $("path#dot");
  var $line = $("path#line");

	// prepare SVG
	pathPrepare($word);
	pathPrepare($dot);
  pathPrepare($line);

	// init controller
	var controller = new ScrollMagic.Controller();

	// build tween
	var tween = new TimelineMax()
		.add(TweenMax.to($word, 1.5, {strokeDashoffset: 0, ease:Linear.easeNone})) // draw word for 0.9
		.add(TweenMax.to($dot, 1.5, {strokeDashoffset: 0, ease:Linear.easeNone}))  // draw dot for 0.1
    .add(TweenMax.to($line, 1.5, {strokeDashoffset: 0, ease:Linear.easeNone}))  // draw dot for 0.1
		.add(TweenMax.to("path", 1, {stroke: "#4e70fa", ease:Linear.easeIn}), 0);			// change color during the whole thing

	// build scene
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger1", duration: "100%", tweenChanges: true})
					.setTween(tween)
					.addTo(controller);
</script>

<div class="section-one-scroll">
  <div class="container">
    <div class="row">
      <div class="col col-12 linkTop mx-auto">
        <a class="link link--kukuri text-center" href="#" data-letters="Tal Haberer">Tal Haberer</a>
      </div>
    </div>
  </div>

</div>


 </div>


<?php get_footer(); ?>
