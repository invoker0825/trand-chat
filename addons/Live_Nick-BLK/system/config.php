<?php
$load_addons = basename(dirname(dirname(__FILE__)));
require_once('../../../system/config_addons.php');
define('ADDON', $load_addons);
if(!canManageAddons()){
	die();
}
echo elementTitle($load_addons, 'loadLob(\'admin/setting_addons.php\');');
?>
<div class="page_full">
	<div class="page_element">
	     <div class="setting_element ">
			<p class="label"><?php echo $lang['limit_feature']; ?></p>
			<select id="set_access">
				<?php echo listRank($addons['addons_access'], 1); ?>
			</select>
		</div>
		<div class="form_left setting_element">
			<p class="label"><?php echo $lang['allow_bg_gif']; ?></p>
			<select id="set_bgif">
				<?php echo listRank($addons['custom1'], 1); ?>
		    </select>
		</div>
		<div class="form_right setting_element">
			<p class="label"><?php echo $lang['allow_upload_gif']; ?></p>
			<select id="set_upload_bgif">
				<?php echo listRank($addons['custom2'], 1); ?>
			</select>
		</div>
		
		<div class="setting_element">
			<p class="label"><?php echo $lang['max_bg_size']; ?></p>
			<input id="set_pic_size" class="full_input" value="<?php echo $addons['custom3'] ?>" type="number">
		</div>
		<button onclick="saveLiveNickCol();" type="button" class="clear_top reg_button theme_btn"><?php echo $lang['save']; ?></button>
		<div class="config_section">
			<script data-cfasync="false" type="text/javascript">
				saveLiveNickCol = function(){
					$.post('addons/<?php echo $load_addons; ?>/system/action.php', {
						set_access: $('#set_access').val(),
						set_bgif: $('#set_bgif').val(),
						set_pic_size: $('#set_pic_size').val(),
						set_upload_bgif: $('#set_upload_bgif').val(),
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
	</div>
</div>
