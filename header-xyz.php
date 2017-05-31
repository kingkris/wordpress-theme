<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package b14test
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<meta name="author" content="@KinGKriS">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!--[if lte IE 9]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->


<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'b14test' ); ?></a>

<header class="site-header">
  <div class="container">
    <h1 class="logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/one-leaf-logo.png" alt=""></a>
    </h1>
    <div class="hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div><!-- /.hamburger -->
    <nav>
      <ul class="site-links">
        <li class="active"><a href="#"><i class="icon-umbrella"></i><span> Home</span></a></li>
        <li><a href="#"><i class="icon-trophy"></i><span> About me</span></a></li>
        <li><a href="#"><i class="icon-shuttlecock"></i><span> Work</span></a></li>
        <li><a href="#"><i class="icon-award"></i><span> Gallery</span></a></li>
        <li><a href="#"><i class="icon-clipboard-move"></i><span> Blog</span></a></li>
        <li><a href="#"><i class="icon-map-marker"></i><span> Hire me</span></a></li>
      </ul>
      <ul class="social-links">
        <li><a href="#"><i class="icon-facebook"></i></a></li>
        <li><a href="#"><i class="icon-pinterest"></i></a></li>
        <li><a href="#"><i class="icon-google-plus"></i></a></li>
        <li><a href="#"><i class="icon-linkedin"></i></a></li>
        <li><a href="#"><i class="icon-amazon"></i></a></li>
      </ul><!-- /.social-links -->
    </nav><!-- eo nav -->
    <ul class="help-links">
      <li><a href="#"><i class="icon-clipboard-move"></i><span> Call me</span></a></li>
      <li><a href="#"><i class="icon-map-marker"></i><span> email me</span></a></li>
    </ul><!-- /.social-links -->

  </div><!-- /.container -->
</header><!-- /.site-header -->












	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">

			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'b14test' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
