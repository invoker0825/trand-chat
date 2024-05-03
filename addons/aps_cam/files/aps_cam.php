<?php


require(addonsLang('aps_cam'));
$bbfv = boomFileVersion();
?>
<?php
if(boomAllow($addons['addons_access'])){
include 'addons/aps_cam/system/box/box.php';
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
	appInputMenu("addons/aps_cam/files/<?php echo renderIconLive($addons['custom2']); ?>.svg", 'showBoxCam();');
});
</script>
<?php } ?>
<script>
	boomAddCss('addons/aps_cam/files/yildiz_host.css');
</script>
<script src="addons/aps_cam/files/yildiz_host.js<?php echo $bbfv; ?>"></script>

