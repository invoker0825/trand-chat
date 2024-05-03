<?php
$load_addons = 'tiktok_link';
require_once('../../../system/config_addons.php');

if(!boomAllow($cody['can_manage_addons'])){
	die();
}

?>
<?php echo elementTitle($data['addons'], 'loadLob(\'admin/setting_addons.php\');'); ?>
<div class="page_full">
	<div class="page_element">
		<div class="config_section">
			<div class="setting_element ">
				<p class="label"><?php echo $lang['limit_feature']; ?></p>
					<select id="set_tiktok_access">
						<?php echo listRank($data['addons_access'], 1); ?>
					</select>
			</div>
			<button id="save_giphy" onclick="saveTiktok();" type="button" class="tmargin10 reg_button theme_btn"><i class="fa fa-floppy-o"></i> <?php echo $lang['save']; ?></button>
		</div>
		<div class="config_section">
			<script data-cfasync="false">
				saveTiktok = function(){
					$.post('addons/tiktok_link/system/action.php', {
						save: 1,
						set_access: $('#set_tiktok_access').val(),
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
