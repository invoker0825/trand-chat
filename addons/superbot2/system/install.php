<?php
if(!defined('BOOM')){
	die();
}
$ad = array(
	'name' => 'superbot2',
	'bot_name'=> 'Superbot2',
	'bot_type'=> 2,
	);

$mysqli->query("CREATE TABLE IF NOT EXISTS `superbot2_data` (
				`id` int(10) NOT NULL AUTO_INCREMENT,
				`superbot_question` varchar(2000) NOT NULL DEFAULT '',
				`superbot_answer` varchar(2000) NOT NULL DEFAULT '',
				PRIMARY KEY (`id`)
				) ENGINE=InnoDB DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci AUTO_INCREMENT=1");
?>