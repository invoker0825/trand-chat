<?php

$load_addons = 'aps_cam';
require_once('../../../../system/config_addons.php');
if(!boomAllow($data['addons_access'])){ 
  die();
}
$user = userRoomDetails($_POST['id']);
?>
<div class="modal_top_live">
	<div id="move_live" class="modal_top_empty bold">
	</div>
	<div class="modal_top_element close_modal">
		<i class="fa fa-times"></i>
	</div>
</div>
<style>
	.avatar_vip { width:80px; height:80px; border-radius:50%; }
</style>
<div class="hpad15">
	<div class="centered_element">
			<img class="avatar_vip" src="<?php echo myavatar($user['user_tumb']); ?>"/>
	</div>
	<div class="centered_element vpad10">
		<p class="sub_text"> <?php echo $user['user_name']; ?> </p>
	</div>
	<div class="centered_element vpad10">
		<p class="sub_text"> <?php echo $lang['live_allow_user']; ?> </p>
	</div>
	<div class="centered_element pad15">
		<button onclick="endingRequest(<?php echo $user['user_id']; ?>);" class="reg_button default_btn"><i class="fa fa-times"></i> <?php echo $lang['live_del']; ?></button>
		<button onclick="acceptRequest(<?php echo $user['user_id']; ?>);" class="reg_button ok_btn"><i class="fa fa-check"></i> <?php echo $lang['live_ac']; ?></button>
	</div>
</div>