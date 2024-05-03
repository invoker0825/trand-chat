<?php
function boomCookieParam(){
	return array(
	'expires' => time()+ 31556926,
	'path' => '/',
	'secure' => true,
	'httponly' => true,
	'samesite' => 'None'
	);
}
/*
function setBoomCookie($i, $p){
	setcookie(BOOM_PREFIX . "userid","$i",boomCookieParam());
	setcookie(BOOM_PREFIX . "utk","$p",boomCookieParam());
}
function unsetBoomCookie(){
	setcookie(BOOM_PREFIX . "userid","",time() - 1000, '/');
	setcookie(BOOM_PREFIX . "utk","",time() - 1000, '/');
}
function setBoomLang($val){
	setcookie(BOOM_PREFIX . "lang","$val",boomCookieParam());
}
function setBoomCookieLaw(){
	setcookie(BOOM_PREFIX . "claw","1",boomCookieParam());
}
function setBoomCoppa(){
	setcookie(BOOM_PREFIX . "cop","1",boomCookieParam());
}
*/
function setBoomCookie($user, $set = []){
	$def = array(
		'id' => $user['user_id'],
		'password' => $user['user_password'],
		'session' => $user['session_id'],
	);
	$u = array_merge($def, $set);
	setcookie(BOOM_PREFIX . "userid","{$u['id']}",time()+ 31556926, '/');
	setcookie(BOOM_PREFIX . "utk","{$u['password']}",time()+ 31556926, '/');
	setcookie(BOOM_PREFIX . "ssid","{$u['session']}",time()+ 31556926, '/');
}
function unsetBoomCookie(){
	setcookie(BOOM_PREFIX . "userid","",time() - 1000, '/');
	setcookie(BOOM_PREFIX . "utk","",time() - 1000, '/');
	setcookie(BOOM_PREFIX . "ssid","",time() - 1000, '/');
}
function setBoomLang($val){
	setcookie(BOOM_PREFIX . "lang","$val",time()+ 31556926, '/');
}
function setBoomCookieLaw(){
	setcookie(BOOM_PREFIX . "claw","1",time()+ 31556926, '/');
}
function setBoomCoppa(){
	setcookie(BOOM_PREFIX . "cop","1",time()+ 31556926, '/');
}
?>