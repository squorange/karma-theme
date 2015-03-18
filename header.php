<?php
/**
 * The Header for our theme
 *
 *
 * @package WordPress
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<!-- Begin header.php -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/foundation.css">	
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.css">		
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen">			
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700' rel='stylesheet' type='text/css'>
  <script src="js/vendor/modernizr.js"></script>		
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
