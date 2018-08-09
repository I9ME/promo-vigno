<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>



</head>

<body <?php body_class(); ?>>


	
<div id="page" class="Site">

	
	 <header id="masthead" class="Site-header u-alignCenter u-positionAbsolute u-sizeFull u-displayFlex u-flexJustifyContentCenter is-animating u-zIndex20">

	 	<div class="loginBar u-displayBlock u-absoluteTopRight u-paddingRight u-paddingTop--inter">
			<a class="u-positionRelative u-displayFlex Button Button--border Button--mediumSize" href="#">LOGIN</a>
		</div>
		
		<!-- <div class="Site-header-branding u-displayInlineBlock u-positionRelative u-alignCenter"> 
			<?php //  get_template_part('template-parts/header/header','branding');?>
		</div> -->

	</header> 
	<!-- #masthead -->

	

	<div class="Site-container">
		<div id="content" class="Site-container-content">
