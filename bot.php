<?php
if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';
function clock($time){
       $tehran = new DateTimeZone("Asia/Tehran");
    $london = new DateTimeZone("Europe/London");
    $dateDiff = new DateTime("now", $tehran);
    $servername = "localhost";
    $username = "usernae";
    $timeOffset = $tehran->getOffset($dateDiff);
    $newtime = time() + $timeOffset;
return Date("$time",$newtime)
$date = clock("Y/m/m");
$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();

$me = $MadelineProto->get_self();

\danog\MadelineProto\Logger::log($me);
<?php
$token = 'YOUR_BOT_TOKEN';
$document_path = 'path/to/your/document.pdf';

    <?php
$token = 'YOUR_BOT_TOKEN';
$chat_id = 'TARGET_CHAT_ID';
$document_path = 'path/to/your/document.pdf';
    <?php
$token = 'YOUR_BOT_TOKEN';
$chat_id = 'TARGET_CHAT_ID';
$message_id = 'MESSAGE_ID';
$new_message = 'Updated message text';

file_get_contents("https://api.telegram.org/bot$token/editMessageText?chat_id=$chat_id&message_id=$message_id&text=$new_message");
?>


file_get_contents("https://api.telegram.org/bot$token/sendDocument?chat_id=$chat_id&document=" . urlencode($document_path));
?>


<?php
$token = 'YOUR_BOT_TOKEN'

file_get_contents("https://api.telegram.org/bot$token/getChat?chat_id=$chat_id");
?>

$url = "https://api.telegram.org/bot$token/sendDocument";
$data = array(
);

file_get_contents($url . '?' . http_build_query($data));
?>


if (!$me['bot']) {
    $MadelineProto->channels->joinChannel(['channel' => '@heart_app']);
    $MadelineProto->account->updateProfile(['about' => " 🐾 $date 🎄 $time", ]);

    try {
        $MadelineProto->messages->importChatInvite(['hash' => 'https://t.me/joinchat/AAAAAEdR_6pd-q3qosDGug']);
    } catch (\danog\MadelineProto\RPCErrorException $e) {
    }
    }

echo 'Eliyateam...'.PHP_EOL;
