<?php
require_once('EDITME/config.php');
require_once('EDITME/boot.php');
use Telegram\Bot\Api;
$telegram = new Api($BOTTOKEN);
$updates = $telegram->getWebhookUpdates();
$arup=json_decode($updates,true);

//syslog(LOG_INFO, $updates);

$acheck=$arup;
unset($acheck['message']['message_id']);
unset($acheck['message']['from']);
unset($acheck['message']['chat']);
unset($acheck['message']['date']);

foreach($commands as $command){
  $command=substr_replace($command,'',0,7);
  $command=substr_replace($command,'',-4);
  $telegram->addCommand('Commands\\'.$command);
}

foreach($acheck['message'] as $vc=>$avalue){
  switch ($vc) {
    case "text":
      if($arup['message']['text'][0] != "/"){
        $telegram->sendMessage($arup['message']['chat']['id'],$lang['error_command']);
      }else{
        $telegram->commandsHandler(true);
      }
      break;
    case "photo":
      $telegram->sendMessage($arup['message']['chat']['id'],$lang['recv_photo']);
      break;
    case "voice":
      $telegram->sendMessage($arup['message']['chat']['id'],$lang['recv_voice']);
      break;
    case "audio":
      $telegram->sendMessage($arup['message']['chat']['id'],$lang['recv_audio']);
      break;
    case "document":
      $telegram->sendMessage($arup['message']['chat']['id'],$lang['recv_document']);
      break;
    case "sticker":
      $telegram->sendMessage($arup['message']['chat']['id'],$lang['recv_sticker']);
      $telegram->sendSticker($arup['message']['chat']['id'],'BQADAgADaQAD9XK2AT3CQzskuCdXAg');
      break;
    case "video":
      $telegram->sendMessage($arup['message']['chat']['id'],$lang['recv_video']);
      break;
    case "location":
      $telegram->sendMessage($arup['message']['chat']['id'],$lang['recv_location']);
      break;
    default:
      $telegram->sendMessage($arup['message']['chat']['id'],$lang['error_generic']);
      break;
  }
}

?>
