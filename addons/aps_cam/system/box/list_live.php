<?php

$load_addons = 'aps_cam';
require_once('../../../../system/config_addons.php');
if(!boomAllow($data['addons_access'])){ 
  die();
}
?>
<div class="modal_top_live">
	<div class="modal_top_empty bold">
	</div>
	<div class="modal_top_element close_modal">
		<i class="fa fa-times"></i>
	</div>
</div>
<div class="pad15">
	<div class="boom_form">
	<?php echo listLive(); ?>
	</div>
</div>