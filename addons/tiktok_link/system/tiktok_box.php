<?php
$load_addons = 'tiktok_link';
require_once('../../../system/config_addons.php');
if(!boomAllow($data['addons_access']) or !isset($_POST['type'])){
  die();
}
?>
<div class="pad_box">
    <center> 
        <img src="addons/tiktok_link/files/icon.png" alt="פרסם סרטון טיקטוק">
		
	<div class="boom_form">
		<input type="text" id="share_tiktok" value="" placeholder="<?php echo $lang['tiktok_link']; ?>" class="full_input"/>
	</div>
	<button onclick="sendTiktokLink(<?php echo $_POST['type']; ?>);" class="reg_button theme_btn"><i class="fa fa-paper-plane"></i> <?php echo $lang['send']; ?></button>
	<button class="cancel_modal reg_button default_btn"><?php echo $lang['cancel']; ?></button>
	</center>
</div>