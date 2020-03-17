<?php



require "vendor/autoload.php";

$access_token = 'V7DhaQwy8puBLczqCqv5s/MSX6FxwUgAnbNbw6/s6xLehM7ckg6gmMtzEZzI2AhCKgTJ7hByCf4vsjRbu+0YsdICX429jEO1ptMA30KBgQX67goPTf7wsSkxvNMQTTeuvT6QOpcA/uL6wWI+Xp/6iQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '1da17c66bb970deaace61e1eead9bc65';

$pushID = 'Ufcbadc67ba9f0527dc2e34b6291f3a1a';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
