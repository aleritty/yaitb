<?php
require_once('EDITME/config.php');
require_once('EDITME/boot.php');
use Telegram\Bot\Api;
$telegram = new Api($BOTTOKEN);
$response = $telegram->setWebhook($BASEURL."webhook");
echo "<pre>";
print_r($response);
echo "</pre>";
?>
