<div class="fborder bhover gcard select_gift" data-img="<?php echo giftImage($boom['gift_image']); ?>" data-title="<?php echo $boom['gift_title']; ?>" data-price="<?php echo $boom['gift_gold']; ?>" data-id="<?php echo $boom['id']; ?>">
	<img class="lazy gcard_img" data-src="<?php echo giftImage($boom['gift_image']); ?>" src="<?php echo imgLoader(); ?>"/>
	<div class="btable_auto gcard_price gtag">
		<div class="bcell_mid text_small">
			<div class="btable_auto">
				<div class="bcell_mid gcard_pwrap">
					<img src="<?php echo goldIcon(); ?>"/>
				</div>
				<div class="bcell_mid hpad3 bold">
					<?php echo $boom['gift_gold']; ?>
				</div>
			</div>
		</div>
	</div>
</div>