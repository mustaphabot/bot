 <?php
ob_start();
$API_KEY = '5860297804:AAH9NSBDJSBJKGuECokN9JQuGQtpTnKnu';//توكنك
define('API_KEY',$API_KEY);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
            function bot($method,$datas=[]){
    $rembo = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$rembo";
        $h4ck3riraq = file_get_contents($url);
        return json_decode($h4ck3riraq);
}
function save($filename, $data)
{
$file = fopen($filename, 'w');
fwrite($file, $data);
fclose($file);
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $update->message->text;
$chat_id = $update->message->chat->id;

if($text == "/start"){
    bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
- ٱهلٱ بڪ عزيزي في بوت تصويࢪ لقطٱت للشٱشه
- من ٱي موقع علۑ ٱلجوجل تࢪيده
- تستطيع ٱخذ صوࢪ للشٱشه من ٱلموٱقع ٱلمشفࢪه ٱلتي لٱتستطيع تصويࢪهٱ
- فقط ٱࢪسل ࢪٱبط ٱلموقع ٱلي تࢪيده وسيتم ٱلتقٱط صوࢪه للشٱشه 
وٱࢪسٱلهٱ لڪ

مثٱل🌸 https://www.youtube.com
ـ̨ــۛــ̨ــۛــ̨ــۛــ̨ــۛــ̨ــۛــ̨ــۛــ̨ــۛــ̨ــۛــ̨ــۛــ̨ــۛــ̨ــۛــ̨ــۛــ̨ــۛــ̨ــۛ
- قناة البوت  ⌁ @PHP967
ـ̨ــۛــ̨ــۛــ̨ــۛــ̨ــۛــ̨ــۛــ̨ــۛــ̨ــۛــ̨ــۛــ̨ــۛــ̨ــۛــ̨ــۛــ̨ــۛــ̨ــۛــ̨ــۛ
",'disable_web_page_preview'=>true,
]);
} 
if($text){
 $scpic = file_get_contents("https://get-api.ga/screen.php?url=$text");
 file_put_contents("screen.webp", $scpic);
 bot('sendphoto', [
'chat_id' => $chat_id,
'photo' =>new CURLFILE('screen.webp'),
 'caption'=>"RdwAN PHP",
]);
}
/*
معࢪف ٱلمطوࢪ : @NNINC
قنٱة ٱلمطوࢪ  : @PHP967
تغييࢪ ٱلحقوق تدل علۑ علٱمه فشلڪ
*/