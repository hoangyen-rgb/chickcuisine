<?php
    session_start();
    $ROOT_URL = "/chickcuisine";
    $CONTENT_URL = "$ROOT_URL/content";
    $ADMIN_URL = "$ROOT_URL/admin";
    $SITE_URL = "$ROOT_URL/site";
    $IMAGE_DIR = "$ROOT_URL/content/image";
    $SOUND_DIR = "$ROOT_URL/content/sound";
    $PHPMailer = "$ROOT_URL/PHPMailer-master/src";
    $VIEW_NAME = "index.php";
    $MESSAGE = "";
    $timezone = 'Asia/Ho_Chi_Minh';
    date_default_timezone_set($timezone);
?>