<?php

define('api', 'https://api.telegram.org/bot'.TOKEN. '/');

$data = json_decode(file_get_contents('php://input'), TRUE);

$message = strtolower_ru(mb_strtolower(($data['message']['text'] ? $data['message']['text'] : $data['message']['data']),'utf-8'));



$first_name = $data['message']['from']['first_name'];
$last_name = $data['message']['from']['last_name'];
$username = $data['message']['from']['username'];
$query_username = $data['callback_query']['from']['username'];


$q_first_name = $data['callback_query']['from']['first_name'];
$q_last_name = $data['callback_query']['from']['last_name'];


$message_id = $data['message']['message_id'];
$query_message_id = $data["callback_query"]['message']['message_id'];


$chat_id = $data['message']['from']['id'];
$query_id = $data["callback_query"]["from"]["id"];


$query_data = $data["callback_query"]["data"];
$callback_query_id = $data["callback_query"]["id"];



$time = date('H:i:s - d.m.Y ', $data['message']['date']);





function callback($up){
    return $up["callback_query"];
}


function apiRequest($metod1){
    $req = file_get_contents(api.$metod1);
    return $req;
}


function sendText($id, $text){
    if(strpos($text, "\n")){
        $text = urlencode($text);
    }
    return apiRequest("sendMessage?text=$text&parse_mode=HTML&chat_id=$id");
}


function keyboard($b, $text, $cd){
$b2 = $b;
    
$b3 = json_encode($b2);
    
    if(strpos($text, "\n")){
        $text = urlencode($text);
    }

apiRequest("sendMessage?text=$text&parse_mode=Markdown&chat_id=$cd&reply_markup=$b3");
}


function inlinekeyboard($menud, $chat, $text){
$menu = $menud;
    
    if(strpos($text, "\n")){
        $text = urlencode($text);
    }
    
    $d2 = array(
    "inline_keyboard" => $menu,
    );
    
    $d2 = json_encode($d2);

    return apiRequest("sendMessage?chat_id=$chat&parse_mode=Markdown&text=$text&reply_markup=$d2");


}


function editText($chat_id, $message_id, $text)
{
    if(strpos($text, "\n")){
        $text = urlencode($text);
    }

    $res = answerCall();

    return apiRequest("editMessageText?chat_id=$chat_id&message_id=$message_id&text=$text");
}


function editInline($chat_id, $message_id, $text, $reply_markup)
{
    $menu = $reply_markup;

    if(strpos($text, "\n")){
        $text = urlencode($text);
    }
    
    $d2 = array(
    "inline_keyboard" => $menu,
    );
    
    $d2 = json_encode($d2);

    $res = answerCall();

    return apiRequest("editMessageText?chat_id=$chat_id&message_id=$message_id&parse_mode=Markdown&text=$text&reply_markup=$d2");
}


function answerCall()
{
    global $callback_query_id;

    if(strpos($id, "\n")){
        $id = urlencode($id);
    }
    
    apiRequest("answerCallbackQuery?callback_query_id=$callback_query_id");
}


function delMessage($chat_id1, $message_id1)
{
    
    return apiRequest("deleteMessage?chat_id=$chat_id1&message_id=$message_id1");
}


function answerCallback($call, $text, $alert)
{

    if(strpos($text, "\n")){
        $text = urlencode($text);
    }
    return apiRequest("answerCallbackQuery?callback_query_id=$call&text=$text&show_alert=$alert");
}


function setCommands()
{
    $but = 
        [
            ["command" => "/restart", "description" => "Перезапуск"],
            ["command" => "/info", "description" => "Про нас"]
        ];
        $but = json_encode($but);


    return apiRequest("setMyCommands?commands=$but");
}
setCommands();


function strtolower_ru($text1) 
{

    $alfavitlover = array('ё','й','ц','у','к','е','н','г', 'ш','щ','з','х','ъ','ф','ы','в', 'а','п','р','о','л','д','ж','э', 'я','ч','с','м','и','т','ь','б','ю');
    $alfavitupper = array('Ё','Й','Ц','У','К','Е','Н','Г', 'Ш','Щ','З','Х','Ъ','Ф','Ы','В', 'А','П','Р','О','Л','Д','Ж','Э', 'Я','Ч','С','М','И','Т','Ь','Б','Ю');
    
    return str_replace($alfavitupper,$alfavitlover,strtolower($text1));

}


function sendPhoto($chat_id, $file)
{
    $reply1 = json_encode($reply);
    $url = api. "sendPhoto?chat_id=". $chat_id;

    $post_fields = ['photo' => new CURLFile(realpath("preview/ukr/". $file))];

    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
    curl_setopt($ch, CURLOPT_URL, $url); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields); 
    $output = curl_exec($ch);
}



?>