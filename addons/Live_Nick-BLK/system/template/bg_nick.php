<div class="preview_zone border_bottom">
	<p class="label"><?php echo $lang['preview']; ?></p>
	<p id="preview_text" class="<?php echo $data['user_color']; ?>"><?php echo $data['user_name']; ?></p>
</div>
<?php if(boomAllow($addons['custom1'])){ ?>
	<div class="bgnick_choices border_bottom" data="<?php echo $data['user_color']; ?>">
		<div id="color_tab">
			<div id="glitters" class="reg_zone"></div>
		</div>
		<div id="ln_loader" class="pad10"><div class="centered_element"><i class="fa fa-circle-o-notch fa-spin fa-fw bspin boom_spinner ln_loader"></i></div></div>
		<div class="clear"></div>
	</div>
<?php } ?>
<div class="tpad10 centered_element border_top ln_controls hidden">
	<?php if(boomAllow($addons['custom2'])){ ?>
		<button id="customgif" onclick="selectNickGif();" class="clear_top reg_button small_button default_btn bold ">+</button>
	<?php } ?>
	<button onclick="saveNickLive();" type="button" class="clear_top reg_button default_btn small_button"><?php echo $lang['save']; ?></button>	
	<button onclick="resetNickLiveColorSettings();" type="button" class="clear_top reg_button small_button default_btn "><?php echo $lang['font_reset']; ?></button>	
</div>
