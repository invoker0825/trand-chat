<?php
if (!defined('BOOM')){
  die();
}
$mysqli->query("ALTER TABLE `boom_users` DROP `whisper_count`, DROP `whisper_hunter`, DROP `whisper_content`;");
?>