<?php
$load_addons = 'vpblock';
require(__DIR__ . '/../../../system/config_addons.php');

function vpblockSave(){
	global $mysqli, $data, $cody;
	
	$status = escape($_POST['status']);
	$key = escape($_POST['key']);
	$delay = escape($_POST['delay']);
	$reason = escape($_POST['reason']);
	$grace = escape($_POST['grace']);
	$keep = escape($_POST['keep']);
	
	$mysqli->query("UPDATE boom_addons SET custom1 = '$status', custom2 = '$key', custom5 = '$delay', custom6 = '$reason', custom7 = '$keep', custom8 = '$grace' WHERE addons = 'vpblock'");
	return 1;
}
function vpblockSearch(){
	global $mysqli, $data, $cody, $lang;
	$list_members = '';
	$find = cleanSearch(escape($_POST['search']));
	$getmembers = $mysqli->query("SELECT * FROM boom_users WHERE user_name LIKE '$find%' AND user_rank < 2 ORDER BY user_name ASC LIMIT 500");
	if($getmembers->num_rows > 0){
		while($members = $getmembers->fetch_assoc()){
			$list_members .= boomTemplate('../addons/vpblock/system/template/vpblock_user', $members);
		}
	}
	else {
		$list_members .= emptyZone($lang['empty']);
	}
	return $list_members;	
	
}
function vpblockUser(){
	global $mysqli, $data, $cody;
	$user = escape($_POST['user']);
	$value = escape($_POST['value']);
	$mysqli->query("UPDATE boom_users SET user_vpblock = $value WHERE user_id = $user");
}
function vpblockExempt(){
	global $data;
	if($data['custom1'] == 0){
		return true;
	}
	if($data['user_rank'] > 1){
		return true;
	}
	if($data['user_vpblock'] < 1){
		return true;
	}
	if($data['custom8'] > 0 && $data['user_join'] < calMinutes($data['custom8'])){
		return true;
	}
}
function vpblockCheck(){
	global $mysqli, $data;
	$vpblockaction = 0;
	
	if(vpblockExempt()){
		if(boomAllow(8)){
			$delay = calHour($data['custom7']);
			$mysqli->query("DELETE FROM boom_vpblock WHERE vpdate > '$delay'");
		}
	}
	else {
		$ip = getIp();
		$vp = array();
		$vpget = $mysqli->query("SELECT * FROM boom_vpblock WHERE vpip = '$ip' LIMIT 1");
		if($vpget->num_rows > 0){
			$vp = $vpget->fetch_assoc();
		}
		
		if(!empty($vp)){
			if($vp['vptype'] > 1){
				$vpblockaction = 1;
			}
		}
		else {
			$type = 1;
			$check = doCurl('http://proxycheck.io/v2/' . $ip . '?key=' . $data['custom2'] . '&vpn=1&asn=1&inf=0&risk=1&days=7&tag=msg');
			$result = json_decode($check);
			if($result->$ip->proxy && $result->$ip->proxy == "yes"){
				$type = 2;
			}
			$mysqli->query("INSERT INTO boom_vpblock (vpip, vptype, vpdate) VALUES ('$ip', '$type', '" . time() . "')");
			if($type == 2){
				$vpblockaction = 1;
			}
		}
		if($vpblockaction == 1){
			systemKick($data, $data['custom5'], $data['custom6']);
			boomConsole('kick', array('hunter'=> $data['system_id'], 'target'=> $data['user_id'], 'reason'=> 'VPN / PROXY', 'delay'=> $data['custom5']));
			return 1;
		}
		else {
			return 0;
		}
	}
}

if(isset($_POST['vpblock'])){
	echo vpblockCheck();
	die();
}
if(isset($_POST['search'])){
	echo vpblockSearch();
	die();
}
if(isset($_POST['user'], $_POST['value'])){
	echo vpblockUser();
	die();
}
if(isset($_POST['vpblock_save'],$_POST['status'],$_POST['key'],$_POST['delay'],$_POST['reason'],$_POST['grace'],$_POST['keep'])){
	echo vpblockSave();
	die();
}
?>