<?php
if (!defined('BOOM')){
  die();
}

$ad = array(
	'name' => 'aps_cam',
	'access' => 2,
);
$mysqli->query("ALTER TABLE `boom_users`ADD `user_live` INT(11) NULL DEFAULT '0';");

$mysqli->query("CREATE TABLE `boom_live` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT 0,
  `tid` int(11) NOT NULL DEFAULT 0,
  `type` int(11) NOT NULL DEFAULT 0,
  `closed` int(11) NOT NULL DEFAULT 0,
  `date` int(11) NOT NULL DEFAULT 0,
   PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
?>