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
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-T6KLW87');</script>
<!-- End Google Tag Manager -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KR7Q44G');</script>
<!-- End Google Tag Manager -->


<?php 
if( is_user_logged_in() ) {

		$link_cta = get_home_url() . '/member-account/';
		$label = 'MINHA CONTA';
	
	} else {
		$link_cta = 'javascript:LightboxCall(\'' . get_home_url() . '/user-components?component=login_cadastro&url=' . get_permalink() . '\');';
		$label = 'LOGIN / CADASTRO';
	}
 ?>
	
<div id="page" class="Site">

	
	 <header id="masthead" class="Site-header u-alignCenter u-positionAbsolute u-sizeFull u-displayFlex u-flexJustifyContentCenter is-animating u-zIndex20">

	 	<div class="loginBar u-displayBlock u-absoluteTopRight u-paddingRight u-paddingTop--inter u-displayFlex u-flexDirectionRow">
			<a id="LoginNavigation" class="u-positionRelative u-displayFlex Button Button--border u-borderRadius50 is-animating hover style1 Button--responsiveSize u-flexAlignItemsCenter e-Toglle is-animating u-positionRelative u-isCollapsed u-hasIcon u-contentHide--button" href="<?php echo $link_cta; ?>">
				<i class="u-inlineFlex u-positionRelative">
					<svg class="iconUser NavigationButton-icon u-icon is-animating">
						<use xlink:href="#iconUser"></use>
					</svg>	
				</i>
			<span class="u-onlyDesktop u-marginLeft--inter--half--px"><?php echo $label; ?></span>
			</a>
			<?php if( is_user_logged_in() ) { ?>
			<a id="LoginNavigation" class="u-positionRelative u-displayFlex u-marginLeft--inter--half--px Button Button--border u-borderRadius50 is-animating hover style1 Button--responsiveSize u-flexAlignItemsCenter e-Toglle is-animating u-positionRelative u-isCollapsed u-hasIcon u-contentHide--button" href="<?php echo get_home_url(); ?>/wp-login.php?action=logout">
				<i class="u-inlineFlex u-positionRelative">
					<svg class="iconClose NavigationButton-icon u-icon is-animating">
						<use xlink:href="#iconClose"></use>
					</svg>	
				</i>
			<span class="u-onlyDesktop u-marginLeft--inter--half--px">SAIR</span>
			</a>
			<?php } ?>
		</div>
		
		<!-- <div class="Site-header-branding u-displayInlineBlock u-positionRelative u-alignCenter"> 
			<?php //  get_template_part('template-parts/header/header','branding');?>
		</div> -->

	</header> 
	<!-- #masthead -->

	

	<div class="Site-container">
		<div id="content" class="Site-container-content">
