<?php
require(__DIR__ . '/../config_install.php');

$installed = '<span class="perm_state success">Installed</span>';
$not_installed = '<span class="perm_state error">Not installed</span>';

$writable = '<span class="perm_state success">Writable</span>';
$not_writable = '<span class="perm_state error">Not writable</span>';
$permission = 1;

$check_upload = $writable;
$check_database = $writable;
$check_settings = $writable;
$check_avatar = $writable;
$check_cover = $writable;
$check_gift = $writable;
$check_gd = $installed;
$check_php = $installed;
$check_curl = $installed;
$check_zip = $installed;
$check_mbstring = $installed;

if(!is_writable(dirname(BOOM_PATH . '/avatar'))){
	$check_avatar = $not_writable;
	$permission = 0;
}
if(!is_writable(dirname(BOOM_PATH . '/cover'))){
	$check_cover = $not_writable;
	$permission = 0;
}
if(!is_writable(BOOM_PATH . '/system/database.php')){
	$check_database = $not_writable;
	$permission = 0;
}
if(!is_writable(BOOM_PATH . '/system/settings.php')){
	$check_settings = $not_writable;
	$permission = 0;
}
if(!is_writable(dirname(BOOM_PATH . '/upload'))){
	$check_upload = $not_writable;
	$permission = 0;
}
if(!is_writable(dirname(BOOM_PATH . '/gift'))){
	$check_gift = $not_writable;
	$permission = 0;
}
if(!extension_loaded('gd') && !function_exists('gd_info')) {
	$check_gd = $not_installed;
	$permission = 0;
}
if(!version_compare(PHP_VERSION, '8.1.0', '>=')){
	$check_php = $not_installed;
	$permission = 0;
}
if(version_compare(PHP_VERSION, '8.3.0', '>=')){
	$check_php = $not_installed;
	$permission = 0;
}
if (!function_exists('curl_init')) {
	$check_curl = $not_installed;
	$permission = 0;
}
if(!extension_loaded('zip')){
	$check_zip = $not_installed;
	$permission = 0;
}
if(!extension_loaded('mbstring')){
	$check_mbstring = $not_installed;
	$permission = 0;
}

if($permission == 1){
	echo 1;
	die();
}
?>
<div class="page_element">
	<p class="install_h3">System requirements</p>
	<ul id="check_ul" class="sub_install">
		<li>Php 8.1 or 8.2  version <?php echo $check_php; ?></li>
		<li>GD library <?php echo $check_gd; ?></li>
		<li>Curl <?php echo $check_curl; ?></li>
		<li>Zip extension <?php echo $check_zip; ?></li>
		<li>Mbstring extension <?php echo $check_mbstring; ?></li>
		<li>system / database.php <?php echo $check_database; ?></li>
		<li>system / settings.php <?php echo $check_settings; ?></li>
		<li>avatar folder <?php echo $check_avatar; ?></li>
		<li>cover folder <?php echo $check_avatar; ?></li>
		<li>upload folder <?php echo $check_upload; ?></li>
		<li>gift folder <?php echo $check_gift; ?></li>
	</ul>
	<button id="check_permission" onclick="checkPermission();" type="button" class="save_admin reg_button ok_btn">Continue</button>
</div>

