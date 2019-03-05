<?php



require "vendor/autoload.php";

$access_token = 'wIaqzqXgwiMjN+awXH1DUd1nw/oy+O0viRI3LpCWqFvQhKI5DIicHl7h9Ldr4ImXywSU+z+658ApqbVK428VYQmahIWnhMJGtR+bHJOCyrjl1gJl16aeBNxZuKqD5BFa0efJ0Gwhq4uteWxdyUqrCwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '55fd3b0d5f13fbd4707a055f8628d9df';

$pushID = 'U31b10876ddac1e1cd432776a02312a32';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







