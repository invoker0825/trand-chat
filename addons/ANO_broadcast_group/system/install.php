<?php

require('../../../system/config.php');

if(!@$data['user_rank']) {
    echo 'No Permission';
    die();
}

if($data['user_role'] < $data['can_manage_addons']) {
    echo 'No Permission';
    die();
}

$now = time();
$mysqli->query("insert into boom_addons (addons, addons_load, addons_access, custom1) values ('ANO_broadcast_group', 10, 1, 2023)");
$mysqli->query("ALTER TABLE `boom_users`ADD `user_lives` INT(11) NULL DEFAULT '0';");

$mysqli->query("CREATE TABLE `boom_live` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT 0,
  `tid` int(11) NOT NULL DEFAULT 0,
  `type` int(11) NOT NULL DEFAULT 0,
  `closed` int(11) NOT NULL DEFAULT 0,
  `date` int(11) NOT NULL DEFAULT 0,
   PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
echo 'installed';
?>