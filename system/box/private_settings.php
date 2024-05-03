<?php
require('../config_session.php');
?>
<div class="modal_content">
	<div class="setting_element ">
		<p class="label"><?php echo $lang['private_mode']; ?></p>
		<select id="set_private_mode">
			<option <?php echo selCurrent($data['user_private'], 1); ?> value="1"><?php echo $lang['on']; ?></option>
			<?php if(boomAllow(1)){ ?>
			<option <?php echo selCurrent($data['user_private'], 3); ?> value="3"><?php echo $lang['members_only']; ?></option>
			<option <?php echo selCurrent($data['user_private'], 2); ?> value="2"><?php echo $lang['friend_only']; ?></option>
			<?php } ?>
			<option <?php echo selCurrent($data['user_private'], 0); ?> value="0"><?php echo $lang['off']; ?></option>
		</select>
	</div>
</div>
<div class="modal_control">
	<button onclick="savePrivateSettings();" class="reg_button theme_btn"><i class="fa fa-save"></i> <?php echo $lang['save']; ?></button>
</div>