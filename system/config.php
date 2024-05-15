<?php
session_start();
require("database.php");
require("controller.php");
require("function.php");
require("function_all.php");
require('function_sranking.php');
require('settings.php');
require('redis.php');

mysqli_report(MYSQLI_REPORT_OFF);
$mysqli = @new mysqli(BOOM_DHOST, BOOM_DUSER, BOOM_DPASS, BOOM_DNAME);
if (mysqli_connect_errno() || BOOM_INSTALL != 1) {
	if(BOOM_INSTALL != 1){
		$chat_install = 2;
	}
	else{
		$chat_install = 3;
	}
}
else{
	$chat_install = 1;
	if(isset($_COOKIE[BOOM_PREFIX . 'userid'], $_COOKIE[BOOM_PREFIX . 'utk'])){
		$ident = escape($_COOKIE[BOOM_PREFIX . 'userid'], true);
		$pass = escape($_COOKIE[BOOM_PREFIX . 'utk']);
		
		$data = getUserSession($ident, $pass);
		$target = $_GET["room"]??-1;
		if ($target != -1 && $data["user_roomid"] != $target) {
			$room = myRoomDetails($target);
			if(boomAllow($room['access'])){
				$mysqli->query("UPDATE boom_users SET user_roomid = '$target', user_move = '" . time() . "', last_action = '" . time() . "', user_role = '{$room['room_ranking']}', room_mute = '{$room['room_muted']}' WHERE user_id = '{$ident}'");
				$mysqli->query("UPDATE boom_rooms SET room_action = '" . time() . "' WHERE room_id = '$target'");
				// joinRoomMessage($target);
				redisUpdateUser($ident);
				redisUpdateRoom($target);
			}
		}
		
		$data = getUserSession($ident, $pass);
		if(empty($data)){
			clearUserSession();
		}
		else if(!validSession()){
			$data = [];
			clearUserSession();
		}
	}
	define('BOOM_LANG', getLanguage());
	require("language/" . BOOM_LANG . "/language.php");
}
if($chat_install == 1){
	date_default_timezone_set("{$setting['timezone']}");
}
else {
	date_default_timezone_set("America/Montreal");
}
?>