<?php
require('../config_session.php');
?>
<div class="centered_element">
	<div class="modal_content">
		<div class="pad15">
			<div class="vpad5">
				<img class="med_icon" src="default_images/icons/warning.svg"/>
			</div>
			<p class="text_large bold vpad10"><?php echo $lang['you_sure']; ?></p>
			<p><?php echo $lang['clear_notify']; ?></p>
		</div>
	</div>
	<div class="modal_control">
		<button onclick="notifyClear();" class="reg_button theme_btn"><?php echo $lang['yes']; ?></button>
		<button class="reg_button cancel_over default_btn"><?php echo $lang['cancel']; ?></button>
	</div>
</div>