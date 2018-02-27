<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href="https://fonts.googleapis.com/css?family=Muli:600i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Righteous|Work+Sans:100,300,500,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fredoka+One|Rubik:400,700,900|Yanone+Kaffeesatz:700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fredoka+One|Rubik:400,700,900|Voltaire|Yanone+Kaffeesatz:700" rel="stylesheet">
<?php wp_head(); ?>
<script type="text/javascript">
$(document).ready(function($) {


	$('.hamburger-menu').click(function (e) {
			e.preventDefault();
			if ($(this).hasClass('active')){
					$(this).removeClass('active');
					$('.menu-overlay').fadeToggle( 'fast', 'linear' );
					$('.menu .menu-list').slideToggle( 'slow', 'swing' );
					$('.hamburger-menu-wrapper').toggleClass('bounce-effect');
			} else {
					$(this).addClass('active');
					$('.menu .menu-list').slideToggle( 'slow', 'swing' );
					$('.menu-overlay').fadeToggle( 'fast', 'linear' );
					$('.hamburger-menu-wrapper').toggleClass('bounce-effect');
			}
	})


});



</script>
</head>
<body id="trigger14" <?php body_class(); ?>>
<div id="wrapper">
	<!-- <a href="#main" class="sr-only sr-only-focusable skipnav"><?php _e('Skip to main content', 'basetheme'); ?></a> -->
	<header id="header" class="clearfix">
		<div class="blackline"></div>
		<div class="menu-overlay"></div>
			<div class="menu">
				<div id="head-menu" class="hamburger-menu-wrapper fadeInDown2">
				<button class="hamburger-menu">
				  <span>toggle menu</span>
				</button>
				</div>
				<div class="menu-list">
				<a class="fade-in-one"  href="<?php echo home_url( '/blog' ); ?>">Our Story</a><br>
				<a class="fade-in-two mission" href="#">Our Mission</a><br>
				<a class="fade-in-three community" href="#">Community Outreach</a><br>
				<a class="fade-in-four volunteer" href="#">Volunteer Portal</a><br>
				</div>
				</div>


	</header>
