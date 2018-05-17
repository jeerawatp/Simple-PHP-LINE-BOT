<?php
include "./lineBot.php";

$bot = new Linebot();
$text = $bot->getMessageText();
$bot->reply($text);



