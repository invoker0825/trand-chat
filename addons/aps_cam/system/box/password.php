<?php

$load_addons = 'aps_cam';
require_once('../../../../system/config_addons.php');
if(!boomAllow($data['addons_access'])){ 
  die();
}
?>
<div class="pad15">
	<div class="boom_form">
		<p class="label" style="font-size: 14px;text-align: center;"><b><?php echo $lang['pass_live'];?> </b></p>
		<input id="set_password_room" value="" class="full_input" type="text" />
		<div class="setting_element">
			<center><button onclick="newLive();" class="reg_button theme_btn live_center_btn"><i class="fa fa-send"></i> <?php echo $lang['start_live'];?></button></center>
		</div>
		
	</div>
	<div class="setting_element">
			<center><button class="reg_button theme_btn close_modal live_center_btn"><i class="fa fa-times"></i> <?php echo $lang['close']; ?></button></center>
		</div>
</div>