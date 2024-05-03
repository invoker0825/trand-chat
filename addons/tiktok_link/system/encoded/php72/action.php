<?php

$load_addons = "tiktok_link";
require __DIR__ . "/../../../../../system/config_addons.php";
if (isset($_POST["send_tiktok"]) && isset($_POST["link"]) && boomAllow($data["addons_access"])) {
    echo shareTikTok();
    exit;
}
if (isset($_POST["get_tiktok"]) && isset($_POST["link"]) && boomAllow($data["addons_access"])) {
    echo getTikTok();
    exit;
}
if (isset($_POST["save"]) && isset($_POST["set_access"]) && boomAllow($cody["can_manage_addons"])) {
    echo saveTikTok();
    exit;
}
function saveTikTok()
{
    global $data;
    global $mysqli;
    $set_access = escape($_POST["set_access"]);
    $mysqli->query("UPDATE boom_addons set addons_access = '" . $set_access . "' WHERE addons = 'tiktok_link' ");
    return 5;
}
function shareTikTok()
{
    global $data;
    if (muted() || roomMuted()) {
        return 0;
    }
    if (checkFlood()) {
        return 0;
    }
    $target = (int) escape($_POST["send_tiktok"]);
    $link = escape($_POST["link"]);
    if (filter_var($link, FILTER_VALIDATE_URL) === false) {
        return 0;
    }
    $get_data = file_get_contents("https://www.tiktok.com/oembed?url=" . $link);
    $video_data = json_decode($get_data, true);
    if ($video_data["status_msg"] == "Something went wrong") {
        return 0;
    }
    $html = $video_data["html"];
    $thumb = $video_data["thumbnail_url"];
    $content = "<div onclick=\"showTiktokVideo(this);\" data-link=\"" . $link . "\" class=\"chat_video_container\"><div class=\"chat_video\"><img class=\"chat_video_img\" src=\"" . $thumb . "\"> <img src=\"addons/tiktok_link/files/play.png\" class=\"tiktokplay\"></div></div>";
    if ($target == 0) {
        userPostChat($content);
    } else {
        postPrivateContent($data["user_id"], $target, $content);
    }
}
function getTikTok()
{
    global $data;
    $link = escape($_POST["link"]);
    if (filter_var($link, FILTER_VALIDATE_URL) === false) {
        return 0;
    }
    $get_data = file_get_contents("https://www.tiktok.com/oembed?url=" . $link);
    $video_data = json_decode($get_data, true);
    $html = $video_data["html"];
    return $html;
}

?>