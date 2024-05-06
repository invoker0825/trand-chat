<?php
$load_addons = 'superbot2';
require('../../../system/config_addons.php');

if(mainBlocked()){
	die();
}

if(!boomAllow($addons['addons_access'])){
	die();
}
	
if(isset($_POST['search'], $_POST['name'], $_POST['type'])){
	$search = escape($_POST['search']);
	$name = escape($_POST['name']);
	$type = escape($_POST['type'], true);
	if($name == $addons['bot_name'] && $name != ''){
		$result = superbot2Parse(superbot2Reg($search));
		if($result != ''){
			botPostChat($addons['bot_id'], $data['user_roomid'], $result);
		}
	}
}
?>