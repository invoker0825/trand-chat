<?php

$load_addons = 'aps_cam';
require_once('../../../../system/config_addons.php');
if(!boomAllow($data['addons_access'])){ 
  die();
}
?>
<div class="pad15">
	<div class="boom_form">
		<p class="label live_label"><?php echo $lang['warn_start']; ?></p>
		<p class="label" style="font-size: 14px;text-align: center;"><b> <?php echo $lang['warn_start2']; ?></b></p>
		<div class="setting_element">
			<center><button onclick="newLive();" class="reg_button theme_btn live_center_btn"><i class="fa fa-send"></i> <?php echo $lang['start_live']; ?></button></center>
		</div>
		<div class="setting_element">
			<center><button onclick="newLivePass();" class="reg_button theme_btn live_center_btn"><i class="fa fa-key"></i> <?php echo $lang['start_pass']; ?></button></center>
		</div>
		<div class="setting_element">
			<center><button class="reg_button theme_btn close_modal live_center_btn"><i class="fa fa-times"></i> <?php echo $lang['close']; ?></button></center>
		</div>
				<div class="setting_element">
			<center><img id="main_logo" alt="logo" src="https://sesimdekal.com/default_images/logo1.png?v=6.21">
				</div></button></center>
		</div>
	</div>
</div>