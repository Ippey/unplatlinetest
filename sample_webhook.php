<?php
/**
 * Created by PhpStorm.
 * User: ippei
 * Date: 2017/02/28
 * Time: 15:28
 */

require 'vendor/autoload.php';

use LINE\LINEBot\HTTPClient\CurlHTTPClient;
use LINE\LINEBot;
use LINE\LINEBot\MessageBuilder\TextMessageBuilder;

$httpClient = new CurlHTTPClient('w9zq+jacy2Eu5Zmzx0cpvLCx6ja7uwz2NjtATmYJZC8wufox3p9pvd8im+Ad9A9zLWjMTsvZrG68C6qzAkaCQ7G/QblGPDE8Y+8nAKkcClYkeNgdWCwo5eMqOa1U2/n7bvkiEKA0LucC3mkXcCDWZgdB04t89/1O/w1cDnyilFU=');
$bot = new LINEBot($httpClient, ['channelSecret' => '71607df983dec564a66e74ac8018f679']);

//ユーザーからのメッセージ取得
$json_string = file_get_contents('php://input');
$jsonObj = json_decode($json_string);

$type = $jsonObj->{"events"}[0]->{"message"}->{"type"};
//メッセージ取得
$text = $jsonObj->{"events"}[0]->{"message"}->{"text"};
//ReplyToken取得
$replyToken = $jsonObj->{"events"}[0]->{"replyToken"};

$textMessageBuilder = new TextMessageBuilder('たのしー');
$bot->replyMessage($replyToken, $textMessageBuilder);
