<?php


$headers = array();
$headers[] = "Cookie: AWSELB=750107631675A96EE4B0BC45461C71F9CB8156D399D632F2455F77817723F519E5A5C41179CB5A189824DC2D01707F52AEF5C828F388A8105CCD5731C8BF78F2EB9BD23834; AWSELBCORS=750107631675A96EE4B0BC45461C71F9CB8156D399D632F2455F77817723F519E5A5C41179CB5A189824DC2D01707F52AEF5C828F388A8105CCD5731C8BF78F2EB9BD23834";
$headers[] = "User-Agent: Dalvik/2.1.0 (Linux; U; Android 9; Redmi 4X Build/PQ3B.190801.002)";

$token = '1387575548:AAGv6RRMkv_zyhZKwcnNQwi6zOTQ2Fn8jIs';

while (true){

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/getUpdates?offset=$update_id");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
echo $result."\n";
$result = json_decode($result, true);
foreach ($result["result"] as $data){
}

$update_id = $data["update_id"]+1;
$chat_id = $data["message"]["chat"]["id"];
$message = $data["message"]["text"];
$c = explode(' ', $message);

if ($c[0] == "/botsim"){

$message = $c[1];
$message = rawurlencode($message);
if ($message == $m){
}else{
$m = $message;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://secureapp.simsimi.com/v1/simsimi/talkset?uid=290358251&av=6.9.0.4&lc=id&cc=ID&tz=Asia%2FJakarta&os=a&ak=RQZ%2F%2FhqsW%2FmaKPTz2Eo6hYn2vfo%3D&message_sentence=$message&normalProb=8&isFilter=1&talkCnt=0&talkCntTotal=0&reqFilter=1&session=oZckbyyqH6GsMgZDGiEWHD6j37edSmQ6GDq541daHiP4fnZK9C8ryEvUyoNgHZX3YX1KZ5y4Wr1p2JPfz4VspU2v&triggerKeywords=%5B%5D");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
$bot5 = explode('"sender_id":0,"sentence":"', $result);
$bot6 = explode('","', $bot5[1]);


$text = rawurlencode($bot6[0]);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$text");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
echo $result."\n";
}
}


}



?>
