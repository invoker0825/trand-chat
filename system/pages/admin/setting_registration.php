<?php
require(__DIR__ . '/../../config_admin.php');

if(!boomAllow(100)){
	die();
}
?>
<?php echo elementTitle($lang['registration']); ?>
<div class="page_full">
	<div>		
		<div class="tab_menu">
			<ul>
				<li class="tab_menu_item tab_selected" data="rtab" data-z="main_registration"><?php echo $lang['main']; ?></li>
				<li class="tab_menu_item" data="rtab" data-z="guest_registration"><?php echo rankTitle(0); ?></li>
				<li class="tab_menu_item" data="rtab" data-z="bridge_registration"><?php echo 'Bridge'; ?></li>
			</ul>
		</div>
	</div>
	<div class="page_element">
		<div id="rtab">
			<div id="main_registration" class="tab_zone">
				<div class="form_content">
					<div class="setting_element ">
						<p class="label"><?php echo $lang['allow_registration']; ?></p>
						<select id="set_registration">
							<?php echo yesNo($setting['registration']); ?>
						</select>
					</div>
					<div class="setting_element ">
						<p class="label"><?php echo $lang['reg_mute']; ?></p>
						<select id="set_reg_mute">
							<option value="0" <?php echo selCurrent($setting['reg_mute'], '0'); ?>><?php echo $lang['never']; ?></option>
							<?php echo optionMinutes($setting['reg_mute'], array(1,2,5,10,15,30,45,60,120,180,360)); ?>
						</select>
					</div>
					<div class="setting_element ">
						<p class="label"><?php echo $lang['max_reg']; ?></p>
						<select id="set_max_reg">
							<?php echo optionCount($setting['max_reg'], 1, 20, 1); ?>
						</select>
					</div>
					<div class="setting_element ">
						<p class="label"><?php echo $lang['validate']; ?></p>
						<select id="set_activation">
							<?php echo yesNo($setting['activation']); ?>
						</select>
					</div>
					<div class="setting_element ">
						<p class="label"><?php echo $lang['max_name']; ?></p>
						<select id="set_max_username">
							<?php echo optionCount($setting['max_username'], 4, 20, 1); ?>
						</select>
					</div>
					<div class="setting_element ">
						<p class="label"><?php echo $lang['min_age']; ?></p>
						<select id="set_min_age">
							<?php echo optionCount($setting['min_age'], 9, 99, 1); ?>
						</select>
					</div>
					<div class="setting_element ">
						<p class="label"><?php echo $lang['coppa']; ?></p>
						<select id="set_coppa">
							<?php echo onOff($setting['coppa']); ?>
						</select>
					</div>
				</div>
				<div class="form_control">
					<button onclick="saveAdminRegistration();" type="button" class="reg_button theme_btn"><i class="fa fa-floppy-o"></i> <?php echo $lang['save']; ?></button>
				</div>
			</div>
			<div id="guest_registration" class="hide_zone tab_zone">
				<div class="form_content">
					<div class="setting_element ">
						<p class="label"><?php echo $lang['allow']; ?></p>
						<select id="set_allow_guest">
							<?php echo yesNo($setting['allow_guest']); ?>
						</select>
					</div>
					<div class="setting_element ">
						<p class="label"><?php echo $lang['max_greg']; ?></p>
						<select id="set_max_greg">
							<?php echo optionCount($setting['max_greg'], 1, 20, 1); ?>
						</select>
					</div>
					<div class="setting_element ">
						<p class="label"><?php echo $lang['extended_form']; ?></p>
						<select id="set_guest_form">
							<?php echo yesNo($setting['guest_form']); ?>
						</select>
					</div>
				</div>
				<div class="form_control">
					<button onclick="saveAdminGuest();" type="button" class="reg_button theme_btn"><i class="fa fa-floppy-o"></i> <?php echo $lang['save']; ?></button>
				</div>
			</div>
			<div id="bridge_registration" class=" hide_zone tab_zone">
				<div class="form_content">
					<div class="setting_element ">
						<p class="label"><?php echo $lang['bridge']; ?></p>
						<select id="set_use_bridge">
							<?php echo yesNo($setting['use_bridge']); ?>
						</select>
					</div>
				</div>
				<div class="form_control">
					<button onclick="saveAdminBridge();" type="button" class="reg_button theme_btn"><i class="fa fa-floppy-o"></i> <?php echo $lang['save']; ?></button>
				</div>
			</div>
		</div>
	</div>
</div>