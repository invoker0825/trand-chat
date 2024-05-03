<?php
$load_addons = 'amirkhan_cam';
require_once('../../../system/config_addons.php');

foreach($_POST as $key => $value) ${$key}= escape($value);
if(boomAllow(10)){
if(isset($set_addon_access)){
	$addon_access = escape($set_addon_access);
	$mysqli->query("UPDATE boom_addons set addons_access = '$addon_access' WHERE addons = 'amirkhan_cam' ");
	echo 5;
}
}

if(boomAllow($data['addons_access'])){ 

}
?>