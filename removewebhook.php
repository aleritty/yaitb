<?php
require_once('EDITME/config.php');
require_once('boot.php');
use Telegram\Bot\Api;
$telegram = new Api($BOTTOKEN);
$response = $telegram->removeWebhook();
echo "<pre>";
print_r($response);
echo "</pre>";
?>
