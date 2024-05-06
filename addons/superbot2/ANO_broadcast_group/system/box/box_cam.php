<?php

$load_addons = 'ANO_broadcast_group';
require_once('../../../../system/config_addons.php');
if(!boomAllow($data['addons_access'])){ 
  die();
}
?>

<div class="modal_top_live">
	<div class="modal_top_empty bold">
	</div>
	<div class="modal_top_element close_modal">
		<i class="fa fa-times"></i>
	</div>
</div>
<div class="pad15">
	<div class="boom_form">
			<p class="label live_label"><?php echo $lang['warn_start']; ?></p>
		<p class="label" style="font-size: 14px;text-align: center;"><b> <?php echo $lang['warn_start2']; ?></b></p>
		<div class="setting_element">
			<center><button onclick="newLive();" class="reg_button theme_btn live_center_btn"><i class="fa fa-play"></i> <?php echo $lang['start_live']; ?></button></center>
		</div>


	</div>
</div>
<div class="pad15">
    		<p class="label live_label"><?php echo $lang['broadcast1']; ?></p>
	<div class="boom_form">
	<?php echo listLive(); ?>
	</div>
</div>