<?php
require 'vendor/autoload.php';

use React\EventLoop\Factory;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\Drivers\Slack\SlackRTMDriver;
//

// Load driver
DriverManager::loadDriver(SlackRTMDriver::class);

function get_include_contents($file) {
 
    //出力バッファリングを有効にする
    ob_start();
 
    //外部ファイルの読み込み
    include $file;
 
    // バッファの内容を取得後に削除
    return ob_get_clean();
}$tokenid = get_include_contents('tokenid.php');


$loop = Factory::create();
$botman = BotManFactory::createForRTM([
    'slack' => [
        'token' => "$tokenid"  //YOUR-SLACK-BOT-TOKEN
    ],
], $loop);

//　コマンド一覧の取得
$botman->hears('コマンド', function($bot) {
    $bot->reply("【コマンド一覧:beginner:】\n・現在\n・天気\n・天気詳細\n");
});

//　現在時刻の取得
$botman->hears('現在', function($bot) {
    $bot->reply(date("【現在の日付時刻】\n"."Y年m月d日 \n H時i分s秒"));
});

//天気の詳細表示
$botman->hears('天気詳細', function($bot) {
    $url = "http://weather.livedoor.com/forecast/webservice/json/v1?city=130010";
    $json = file_get_contents($url, true);
    $json = json_decode($json, true); 
 
    // Pubric
    $title = $json['title'];                                                    // 市区町村
    $description = $json['description']['text'];            // 詳細情報
    $publicTime = $json['publicTime'];                              // 更新時間
 
    // Location
    $city = $json['location']['city'];                              // 東京
    $area = $json['location']['area'];                              // 関東
    $prefecture = $json['location']['prefecture'];      // 東京都
    $link = $json['link'];        
    $bot->reply("【天気の詳細:sunny:】\n".$description);
});



//今日の天気取得
$botman->hears('天気', function($bot) {
    $url = "http://weather.livedoor.com/forecast/webservice/json/v1?city=130010";
    $json = file_get_contents($url, true);
    $json = json_decode($json, true);
 
    // Location
    $city = $json['location']['city'];                   // 東京
    $area = $json['location']['area'];                   // 関東
    $prefecture = $json['location']['prefecture'];      // 東京都
    $link = $json['link'];  
    foreach ($json['forecasts'] as $entry) {      
    $telop = $entry['telop'];  
    }                                                                             // 天気
              
    $bot->reply("【本日の天気:sunny:】\n".$telop."です。");
});

$botman->hears('convo', function($bot) {
    $bot->startConversation(new ExampleConversation());
});

$loop->run();
