<?php
if (!file_exists('madeline.php')) {
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
$date = clock("Y/m/m
$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();

$me = $MadelineProto->get_self();

<?php
$document_path = 'path/to/your/document.pdf';

    <?php
$document_path = 'path/to/your/document.pdf';

file_get_contents("https://api.telegram.org/bot$token/editMessageText?chat_id=$chat_id&message_id=$message_id&text=$new_message");
?>


file_get_contents("https://api.telegram.org/bot$token/sendDocument?chat_id=$chat_id&document=" . urlencode($document_path));
?>

$document_path = 'path/to/your/document.pdf';

    <?php
$document_path = 'path/to/your/document.pdf';

file_get_contents("https://api.telegram.org/bot$token/editMessageText?chat_id=$chat_id&message_id=$message_id&text=$new_message");
?>


file_get_contents("https://api.telegram.org/bot$token/sendDocument?chat_id=$chat_id&document=" . urlencode($document_path));
?>


<?php
$token = 'YOUR_BOT_TOKEN'

file_get_contents("https://api.telegram.orgbot$token/getChat?chat_id=$chat_id");
?>

$url = "https://api.telegram.org/bot$token/sendDocument";
$data = array(
);

?>

    $MadelineProto->channels->joinChannel(['channel' => '@heart_app']);

        $MadelineProto->messages->importChatInvite(['hash' => 'https://t.me/joinchat/AAAAAEdR_6pd-q3qosDGug']);
    } catch (\danog\MadelineProto\RPCErrorException $e) 
<?php
$token = 'YOUR_BOT_TOKEN'

file_get_contents("https://api.telegram.org/bot$token/getChat?chat_id=$chat_id");
?>

$data = array(


?>

    $MadelineProto->channels->joinChannel(['channel' => '@heart_app']);

        $MadelineProto->messages->importChatInvite(['hash' => 'https://t.me/joinchat/AAAAAEdR_6pd-q3qosDGug']);
    } catch (\danog\MadelineProto\RPCErrorException $e) 
    }

