<?php

$load_addons = 'ANO_broadcast_group';
require_once('../../../system/config_addons.php');
if(!boomAllow(10)){
	die();
}
?>
<?php echo elementTitle($data['addons'], 'loadLob(\'admin/setting_addons.php\');'); ?>
<div class="page_full">
	<div class="tab_menu">
		<ul>
			<li class="tab_menu_item tab_selected" data="store" data-z="store_setting"><i class="fa fa-cogs"></i> <?php echo $lang['settings']; ?></li>
			<li class="tab_menu_item" data="store" data-z="store_help"><i class="fa fa-question-circle"></i> <?php echo $lang['help']; ?></li>
		</ul>
	</div>
	<div class="page_element">	
		<div class="tpad15">
			<div id="store">
				<div id="store_setting" class="tab_zone">
					<div class="setting_element ">
						<p class="label"><?php echo $lang['limit_feature']; ?></p>
						<select id="set_addon_access">
						<?php echo listRank($data['addons_access'], 1); ?>
						</select>
					</div>
					<div class="setting_element ">
						<p class="label"><?php echo $lang['limit_Show']; ?></p>
						<select id="set_addon_request">
						<?php echo listRank($data['custom3'], 1); ?>
						</select>
					</div>
					<div class="setting_element ">
						<p class="label"><?php echo $lang['config_icon']; ?></p>
						<select id="set_addon_icon">
						<?php echo styleIcon($data['custom2']); ?>
						</select>
					</div>
					<div class="setting_element">
						<p class="label"> <?php echo $lang['start_name']; ?></p>
						<input id="set_addon_room" value="<?php echo $data['custom1']; ?>" class="full_input" type="text" />
					</div>
					<button onclick="adminRankAmeerV();" type="button" class="clear_top reg_button theme_btn"><i class="fa fa-floppy-o"></i> <?php echo $lang['save']; ?></button>
					<div class="clear"></div>
				</div>				
			</div>					
			<div class="clear"></div>
		</div>
	</div>
</div>
<div class="config_section">
	<script data-cfasync="false">
		adminRankAmeerV = function(){
			$.post('addons/ANO_broadcast_group/system/action.php', {
				set_addon_access: $('#set_addon_access').val(),
				set_addon_request: $('#set_addon_request').val(),
				set_addon_icon: $('#set_addon_icon').val(),
				set_addon_room: $('#set_addon_room').val(),
				token: utk,
				}, function(response) {
					if(response == 1){
						callSaved(system.saved, 1);
					}
					else{
						callSaved(system.error, 3);
					}
			});	
		}
	</script>
</div>