<?php


require(addonsLang('ANO_broadcast_group'));
$bbfv = boomFileVersion();
?>
<?php
if(boomAllow($addons['addons_access'])){
include 'addons/ANO_broadcast_group/system/box/box.php';
function renderIconLive($icon){
	switch($icon){
		case 1:
			return 'cam';
		case 2:
			return 'mic';
		default:
			return 'cam';
	}
}
?>
<script>
var error_live_sec = "<?php echo $lang['error_live_sec']; ?>";
var error_live_close = "<?php echo $lang['error_live_close']; ?>";
var error_live_open = "<?php echo $lang['error_live_open']; ?>";
$(document).ready(function() {
	boomAddCss('addons/ANO_broadcast_group/files/yildiz_host.css');
	appInputMenu("addons/ANO_broadcast_group/files/<?php echo renderIconLive($addons['custom2']); ?>.png", 'showBoxCam();');
		});
</script>
<?php } ?>
<script src="addons/ANO_broadcast_group/files/yildiz_host.js<?php echo $bbfv; ?>"></script>

