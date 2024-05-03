<?php
$load_addons = 'amirkhan_cam';
require_once('../../../system/config_addons.php');

if(!boomAllow(10)){
	die();
}

?>
<style>
</style>
<?php echo elementTitle('puzzle-piece', $data['addons'], 'loadLob(\'admin/setting_addons.php\');'); ?>
<div class="page_full">
	<div>
		<div class="tab_menu">
			<ul>
				<li class="tab_menu_item tab_selected" onclick="tabZone(this, 'add_user_setting', 'amirkhan_cam');"><i class="fa fa-cogs"></i> <?php echo $lang['settings']; ?></li>
			</ul>
		</div>
	</div>
	<div class="page_element">
		<div class="tpad15">
			<div id="amirkhan_cam">
				<div id="add_user_setting" class="tab_zone">
					<div class="setting_element ">
						<p class="label"><?php echo $lang['limit_feature']; ?></p>
						<select id="set_addon_access">
							<?php echo listRank($data['addons_access'], 1); ?>
						</select>
					</div>
					<button onclick="saveSettings();" type="button" class="clear_top reg_button theme_btn"><i class="fa fa-floppy-o"></i> <?php echo $lang['save']; ?></button>
				</div>
			</div>
		</div>
		<div class="config_section">
			<script data-cfasync="false" type="text/javascript">
				saveSettings = function(){
					$.post('addons/amirkhan_cam/system/action.php', {
						set_addon_access: $('#set_addon_access').val(),
						token: utk,
						}, function(response) {
							if(response == 5){
								callSaved(system.saved, 1);
							}
							else{
								callSaved(system.error, 3);
							}
					});	
				}
			</script>
		</div>
	</div>
</div>
