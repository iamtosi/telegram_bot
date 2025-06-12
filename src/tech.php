<?php 


if ($username == "Nickname" || $query_username == "Nickname" || $username == "Nickname" || $query_username == "Nickname")
	{

	}
else
	{
		if (!empty($chat_id)) 
			sendText($chat_id, 'Ведуться технічні роботи 😥'. "\n\n". 'Спробуй перезавантажити бота через годину - /restart');

		if (!empty($query_id)) 
			sendText($query_id, 'Ведуться технічні роботи 😥'. "\n\n". 'Спробуй перезавантажити бота через годину - /restart');

        delMessage($chat_id, $message_id - 3); 
        delMessage($chat_id, $message_id - 2); 
        delMessage($chat_id, $message_id - 1);
        delMessage($chat_id, $message_id); 

        delMessage($query_id, $query_message_id - 3);
        delMessage($query_id, $query_message_id - 2);
        delMessage($query_id, $query_message_id - 1);
        delMessage($query_id, $query_message_id);



			exit();
	}



?>