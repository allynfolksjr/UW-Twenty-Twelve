<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7 | IE 8]>
<html class="ie" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<link rel="stylesheet" href="http<?if($_SERVER['HTTPS'] == "on") echo "s";?>://depts.washington.edu/uweb/inc/css/header.css" type="text/css" media="screen" />
<link rel="stylesheet" href="http<?if($_SERVER['HTTPS'] == "on") echo "s";?>://depts.washington.edu/uweb/inc/css/print.css" type="text/css" media="print" />
<link rel="stylesheet" href="http<?if($_SERVER['HTTPS'] == "on") echo "s";?>://depts.washington.edu/uweb/inc/css/footer.css" type="text/css" media="screen" />
<script type="text/javascript">
// clear out the global search input text field
window.onload = function() {

     if (document.getElementById("searchInput")) {

       var query = document.getElementById("searchInput");

       query.onfocus = function() {
         if (query.value == query.defaultValue) {
           query.value = "";
         }
       }

       query.onblur = function() {
         if (query.value == "") {
           query.value = query.defaultValue;
         }
       }

     }

}
</script>


</head>

<body <?php body_class(); ?>>
	<div id="wheader" class="colorPurple wYes patchNo ">
 <div id="autoMargin">
  <div class="wlogoSmall">
   <div class="logoAbsolute"><a id="wlogoLink" href="//www.washington.edu/">W</a></div>
   <div><a href="//www.washington.edu/">University of Washington</a></div>
  </div>
  <div id="wtext">
   <ul>
    <li><a href="//www.washington.edu/">UW Home</a></li>
    <li><span class="wborder"><a href="//www.washington.edu/home/directories.html">Directories</a></span></li>
    <li><span class="wborder"><a href="//www.washington.edu/discover/visit/uw-events">Calendar</a></span></li>
    <li><span class="wborder"><a href="//www.lib.washington.edu/">Libraries</a></span></li>
    <li><span class="wborder"><a href="//www.washington.edu/maps/">Maps</a></span></li>
    <li><span class="wborder"><a href="//myuw.washington.edu/">My UW</a></span></li>
   </ul>
  </div>
 </div>
</div>


<div id="page" class="hfeed site">
	
	<header id="masthead" class="site-header" role="banner">
		<hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
			<div class="skip-link assistive-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a></div>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->

		<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>
	</header><!-- #masthead -->

	<div id="main" class="wrapper">