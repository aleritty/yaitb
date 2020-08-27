<?php
require_once 'vendor/autoload.php';

$commands= array();
foreach (glob("EDITME/*Command.php") as $commandfile){
  $commands[]=$commandfile;
  require_once $commandfile;
}
require_once 'EDITME/defaultactions.php';
require_once 'EDITME/Messages.php';
?>
