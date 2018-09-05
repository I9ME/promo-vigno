<?php if( is_home() || is_front_page() ) { ?>

<section id="up" class="Section--intro Intro Intro--home Section--style1 u-positionRelative u-overflowHidden" data-paroller-factor="-0.50" data-paroller-type="background" data-paroller-direction="vertical">

	<div class="Captions u-absoluteCenterMiddle u-zIndex2 u-displayFlex u-flexJustifyContentCenter u-size9of24 u-flexDirectionColumn u-flexAlignItemsCenter u-zIndex3">	
		<figure class="ArabescoTop--intro"></figure>
			<h1 class="Captions-title u-alignCenter">
				<span class="Captions-title--line1 u-displayBlock u-sizeFull">Conheça os <strong>vouchers</strong> da</span>
				<em class="Captions-title--line2 u-displayBlock U-sizeFull u-marginTop--inter--half u-lineHeight0">
				<a href="<?php echo get_home_url(); ?>">
					<span class="u-isHiddenVisually">VIGNOLI</span>
					<figure class="Intro--nameVignoli u-displayInlineBlock"></figure>
				</a>
			</em>
			<span class="Captions-title--line1 u-displayBlock u-sizeFull">Aproveite nossas <strong>oportunidades!</strong></span>
			</h1>
		<figure class="ArabescoBottom--bottom u-marginTop--inter--half"></figure>
	</div>

	<!-- <div class="before u-zIndex1" data-paroller-factor="-0.50" data-paroller-type="foreground" data-paroller-direction="horizontal"></div>

	<div class="after u-zIndex0" data-paroller-factor="0.50" data-paroller-type="foreground" data-paroller-direction="horizontal"></div> -->

	<div class="after--bottom u-zIndex1"></div>

</section>


<?php } else { ?>

<section class="Section--intro Intro Intro--page u-positionRelative u-flex u-flexDirectionColumn u-flexAlignItemsCenter u-flexJustifyContentCenter u-paddingVertical" data-paroller-factor="-0.50" data-paroller-type="background" data-paroller-direction="vertical">

	<div class="Captions u-positionRelative u-paddingTop u-marginTop u-marginBottom--inter u-zIndex2 u-displayFlex u-flexJustifyContentCenter u-size9of24 u-flexDirectionColumn u-flexAlignItemsCenter u-zIndex3">	
		<figure class="ArabescoTop--intro"></figure>
			<h1 class="Captions-title u-alignCenter">
				<span class="Captions-title--line1 u-displayBlock u-sizeFull">Conheça os <strong>vouchers</strong> da</span>
				<em class="Captions-title--line2 u-displayBlock U-sizeFull u-marginTop--inter--half u-lineHeight0">
					<a href="<?php echo get_home_url(); ?>">
						<span class="u-isHiddenVisually">VIGNOLI</span>
						<figure class="Intro--nameVignoli u-displayInlineBlock"></figure>
					</a>
				</em>
				<span class="Captions-title--line1 u-displayBlock u-sizeFull">Aproveite nossas <strong>oportunidades!</strong></span>
			</h1>
		<figure class="ArabescoBottom--bottom u-marginTop--inter--half"></figure>
	</div>

	<!-- <div class="after--bottom u-zIndex1"></div> -->

</section>

<?php } ?>
