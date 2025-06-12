<?php

define('TOKEN', 'Nickname');


include 'source.php';
include 'db_connect.php';
include 'bot_lib.php';
include 'admin.php';

/*include 'tech.php';*/


$get_user = get_user($connect, $chat_id);
$old_id = $get_user['chat_id'];
$name = $first_name. ' '. $last_name;


if (!empty($chat_id)) $get_prime_user = get_prime_user($connect, $chat_id);
else $get_prime_user = get_prime_user($connect, $query_id);
$old_prime_id = $get_prime_user['chat_id'];



$sub_type = $get_prime_user['sub_type'];;
$sub_date = $get_prime_user['sub_date'];
$sub_exp_date = $get_prime_user['sub_expire'];



file_put_contents('$data.txt', $time. "\n". print_r($data, 1). "\n", LOCK_EX);


if (!is_dir('users_messages')) mkdir('users_messages');
if(!empty($message) && !empty($username))
{
    file_put_contents('users_messages/'.$username. '.txt', 'Time: '. print_r($time, 1). "\n". "User: @". print_r($username, 1). "\n". "Write: " . print_r($message, 1). "\n\n", FILE_APPEND); 
}
if(!empty($query_data) && !empty($query_username))
{
    file_put_contents('users_messages/'.$query_username. '.txt', 'Time: '. print_r($time, 1). "\n". "User: @". print_r($query_username, 1). "\n". "Write: " . print_r($query_data, 1). "\n\n", FILE_APPEND); 
}





    
    


        
    if (!empty($chat_id) && $chat_id == $old_prime_id || !empty($query_id) && $query_id == $old_prime_id)
    { 

        include 'sub.php'; 
    }

    else 
    {
        include 'unsub.php'; 
    }







    if ($data)
    {

        delMessage($chat_id, $message_id - 3); 
        delMessage($chat_id, $message_id - 2); 
        delMessage($chat_id, $message_id - 1);
        delMessage($chat_id, $message_id); 
    }   

    //Зпись в "users" DATABASE 
    add_user($connect, $username, $chat_id, $name, $time, $old_id);



?>