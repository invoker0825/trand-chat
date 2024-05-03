<?php
require('../config_session.php');
if(!isMember($data) || !isSecure($data)){ 
	echo 0;
	die();
}
?>
<div class="modal_content">
	<div class="setting_element">
		<p class="label"><?php echo $lang['login_allow']; ?></p>
		<select id="set_ulogin">
			<option <?php echo selCurrent($data['ulogin'], 0); ?> value="0"><?php echo $lang['login_all']; ?></option>
			<option <?php echo selCurrent($data['ulogin'], 1); ?> value="1"><?php echo $lang['login_mail']; ?></option>
		</select>
	</div>
</div>
<div class="modal_control">
	<button onclick="saveUserLogin();" class="reg_button theme_btn"><i class="fa fa-save"></i> <?php echo $lang['save']; ?></button>
</div>