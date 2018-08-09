<?php 
	if( is_single() ){
		$key_switch = 'OUTRAS';
	} else {
		$key_switch = 'AS NOSSAS';
	}
 ?>
<section class="Section Section--style1 Section--promocoes u-paddingBottom--inter">
	<div class="u-maxSize--container u-alignCenterBox u-alignCenter"><!-- Max Size Container -->
		<header class="Section-header u-marginBottom--inter u-size16of24 u-alignCenterBox u-paddingVertical u-displayFlex u-flexDirectionColumn u-flexAlignItemsCenter">
					<figure class="ArabescoTop--color_15 u-displayBlock"></figure>
					<h2 class="Section-header-title Section-header-title--beforeTitleLine u-alignCenter u-paddingHorizontal--inter--half u-sizeFull">CONHEÇA <?php echo $key_switch; ?> <strong>PROMOÇÕES</strong></h2>
				</header>
		<?php get_template_part('template-parts/promocoes/section-promocoes','loop'); ?>

</section>