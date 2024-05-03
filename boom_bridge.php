<?php
/**
* Codychat
*
* @package Codychat
* @author www.boomcoding.com
* @copyright 2018
* @terms any use of this script without a legal license is prohibited
* all the content of Boomchat is the propriety of BoomCoding and Cannot be 
* used for another project.
*/
$path = htmlspecialchars($_POST['path']);
require($path . '/system/config_bridge.php');
$startTime = microtime(1);
$startMem  = memory_get_usage();
define('_JEXEC', 1);
if (file_exists(__DIR__ . '/defines.php')){
	include_once __DIR__ . '/defines.php';
}
if (!defined('_JDEFINES')){
	define('JPATH_BASE', __DIR__);
	require_once JPATH_BASE . '/includes/defines.php';
}
require_once JPATH_BASE . '/includes/framework.php';
JDEBUG ? JProfiler::getInstance('Application')->setStart($startTime, $startMem)->mark('afterLoad') : null;
$app = JFactory::getApplication('site');
$user =& JFactory::getUser();
if (!$user->guest){
	$cms = array(
		'id'=> $user->id,
		'name'=> $user->username,
		'email'=> $user->user_email
	);
	$bridge_user = createBridgeUser('joomla', $cms);
	echo 1;
}
else {
	die();
}
?>