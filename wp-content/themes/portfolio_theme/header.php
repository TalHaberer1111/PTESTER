<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
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
					$('.menu-overlay').fadeToggle( 'fast', 'linear' );
					$('.menu .menu-list').slideToggle( 'slow', 'swing' );
					$('.hamburger-menu-wrapper').toggleClass('bounce-effect');
			}
	})
});

</script>
</head>
<body <?php body_class(); ?>>
<div id="wrapper">
	<!-- <a href="#main" class="sr-only sr-only-focusable skipnav"><?php _e('Skip to main content', 'basetheme'); ?></a> -->
	<header id="header" class="clearfix">
		<div class="menu-overlay"></div>
			<div class="menu">
				<div class="hamburger-menu-wrapper">
				<button class="hamburger-menu">
				  <span>toggle menu</span>
				</button>
				</div>
				<div class="menu-list">
				<a class="fade-in-one" href="#">Our Story</a><br>
				<a class="fade-in-two" href="#">Our Mission</a><br>
				<a class="fade-in-three" href="#">Community Outreach</a><br>
				<a class="fade-in-four" href="#">Volunteer Portal</a><br>
				</div>
				</div>
	</header>
