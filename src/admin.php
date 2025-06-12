<?php

if ($username == "Nickname" || $username == "Nickname")
{
	if ($message == "/admin")
	{	
		$but = 
        [
            

            [ 
                ['text' => 'Записать себе в базу', 'callback_data' => "admin_add"],

            ],

            [ 
                ['text' => 'Удалить себе з бази', 'callback_data' => "admin_del"],
            ],

        ];
        inlineKeyboard($but, $chat_id, 'Admin Access Menu • Admin Access Menu');

	}

}


	if ($query_data == "admin_add")
	{
		$name = $q_first_name. ' '. $q_last_name;
		$sub_type = "ADMIN";
		$sub_date = date('d.m.Y H:i', $data['message']['date']);;
		$sub_expire = "ADMIN";

		$query_id = trim($query_id);
		$query_username = trim($query_username);
		$name = trim($name);
		$sub_type = trim($sub_type);
		$sub_date = trim($sub_date);
		$sub_expire = trim($sub_expire);

		$t = "INSERT INTO prime_users (chat_id, username, name, sub_type, sub_date, sub_expire) VALUES ('%s', '%s', '%s', '%s', '%s', '%s')";
		$query = sprintf($t, mysqli_real_escape_string($connect, $query_id),
							mysqli_real_escape_string($connect, $query_username),
							mysqli_real_escape_string($connect, $name),
							mysqli_real_escape_string($connect, $sub_type),
							mysqli_real_escape_string($connect, $sub_date),
							mysqli_real_escape_string($connect, $sub_expire));
		$result = mysqli_query($connect, $query);

		sendText($query_id, 'Підписка оформлена! 🙂'. "\n\n". 'Перезапусти бота командою /restart');

        delMessage($query_id, $query_message_id - 3);
        delMessage($query_id, $query_message_id - 2);
        delMessage($query_id, $query_message_id - 1);
        delMessage($query_id, $query_message_id);


	}

	if ($query_data == "admin_del")
	{
		sendText($query_id, 'Термін дії твоєї підписки завершився 😕'. "\n\n". 'Перезапусти бота командою /restart');
		delMessage($query_id, $query_message_id - 3);
        delMessage($query_id, $query_message_id - 2);
        delMessage($query_id, $query_message_id - 1);
        delMessage($query_id, $query_message_id);



		$query = sprintf("DELETE FROM prime_users WHERE chat_id=%d", (int)$query_id);
		$result = mysqli_query($connect, $query);
		$get_prime_user = mysqli_fetch_assoc($result);


	}



	$chat_id_for = $data['message']['forward_from']['id'];

	$sender_name = $data['message']['forward_sender_name'];
	if (!empty($sender_name)) sendText($chat_id, '❌ Тіп не записаний в базу даних бо в нього отключені переадресації. Треба написать до Антошеньки і запитати що робити?'. "\n\n". 'Перезапусти - /restart');

	if (!empty($chat_id_for))
	{


	$first_name_for = $data['message']['forward_from']['first_name'];
	$last_name_for = $data['message']['forward_from']['last_name'];

	$username_for = $data['message']['forward_from']['username'];

	$name_for = $first_name_for. ' '. $last_name_for;

	$sub_type = 'Оновлюється';

	$sub_date = date('d.m.Y - H:i', $data['message']['date']);

	$sub_expire = 'Оновлюється';




		$chat_id_for = trim($chat_id_for);
		$username_for = trim($username_for);
		$name_for = trim($name_for);
		$sub_type = trim($sub_type);
		$sub_date = trim($sub_date);
		$sub_expire = trim($sub_expire);

		$t = "INSERT INTO prime_users (chat_id, username, name, sub_type, sub_date, sub_expire) VALUES ('%s', '%s', '%s', '%s', '%s', '%s')";
		$query = sprintf($t, mysqli_real_escape_string($connect, $chat_id_for),
							mysqli_real_escape_string($connect, $username_for),
							mysqli_real_escape_string($connect, $name_for),
							mysqli_real_escape_string($connect, $sub_type),
							mysqli_real_escape_string($connect, $sub_date),
							mysqli_real_escape_string($connect, $sub_expire));
		$result = mysqli_query($connect, $query);

		sendText($chat_id, '✅ Користувач: '. $username_for. ' записаний в базу'. "\n\n". '/restart');












	}











?>