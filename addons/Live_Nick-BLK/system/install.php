<?php
if(!defined('BOOM')){
	die();
}
    $ad = array(
	    'name' => basename(dirname(dirname(__FILE__))),
	    'access'=> 100,
	    'custom1'=> 1,
	    'custom2'=> 1,
	    'custom3'=> 1024,
	);

	$mysqli->query("ALTER TABLE `boom_users` CHANGE `user_color` `user_color` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '';");
?>