<?php
if (!defined('BOOM')){
  die();
}
$ad = array(
  'name' => 'whisper',
  'access' => 1,
);
$mysqli->query("ALTER TABLE `boom_users` ADD wdata varchar(2000) NOT NULL DEFAULT ''");
$mysqli->query("ALTER TABLE `boom_users` ADD wcount int(11) NOT NULL DEFAULT '0'");
$mysqli->query("ALTER TABLE `boom_users` ADD INDEX(`wcount`);");
?>