<?php
if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';
function clock($time){
       $tehran = new DateTimeZone("Asia/Tehran");
    $london = new DateTimeZone("Europe/London");
    $dateDiff = new DateTime("now", $tehran);
    $timeOffset = $tehran->getOffset($dateDiff);
    $newtime = time() + $timeOffset;
return Date("$time",$newtime);
}
$date = clock("Y/m/d");
$time = clock("h:i");
$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();

$me = $MadelineProto->get_self();

\danog\MadelineProto\Logger::log($me);

if (!$me['bot']) {
    $MadelineProto->channels->joinChannel(['channel' => '@heart_app']);
    $MadelineProto->account->updateProfile(['about' => " 🐾 $date 🎄 $time", ]);

    try {
        $MadelineProto->messages->importChatInvite(['hash' => 'https://t.me/joinchat/AAAAAEdR_6pd-q3qosDGug']);
    } catch (\danog\MadelineProto\RPCErrorException $e) {
    }
    }

echo 'Eliyateam...'.PHP_EOL;
