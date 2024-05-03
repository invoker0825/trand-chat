<?php
$load_addons = 'whisper';
require_once('../../../system/config_addons.php');

if(!boomAllow(10)) {
	die();
}

?>
<style>
</style>
<?php echo elementTitle($data['addons'], 'loadLob(\'admin/setting_addons.php\');'); ?>
<div class="page_full">
	<div>
		<div class="tab_menu">
			<ul>
				<li class="tab_menu_item tab_selected" onclick="tabZone(this, 'whisper_setting', 'whisper');"><i class="fa fa-cogs"></i> <?php echo $lang['settings']; ?></li>
			</ul>
		</div>
	</div>
	<div class="page_element">
		<div class="tpad15">
			<div id="whisper">
				<div id="whisper_setting" class="tab_zone">
					<div class="setting_element">
						<p class="label"><?php echo $lang['limit_feature']; ?></p>
						<select id="set_access">
							<?php echo listRank($data['addons_access'], 1); ?>
						</select>
					</div>
					<button onclick="saveSettingsWhisper();" type="button" class="clear_top reg_button theme_btn"><i class="fa fa-floppy-o"></i> <?php echo $lang['save']; ?></button>
				</div>
			</div>
		</div>
		<div class="config_section">
			<script data-cfasync="false" type="text/javascript">
				saveSettingsWhisper = function(){
					$.post('addons/whisper/system/action.php', {
						save_settings: 1,
						set_access: $('#set_access').val(),
						token: utk,
						}, function(response) {
							if(response == 1){
								callSaved(system.saved, 1);
							} else {
								callSaved(system.error, 3);
							}
					    });	
				}
			</script>
		</div>
	</div>
</div>
