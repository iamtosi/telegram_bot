<?php



function add_user($connect, $username, $chat_id, $name, $time, $old_id){
	$username = trim($username);
	$chat_id = trim($chat_id);
	$name = trim($name);

	if($chat_id == $old_id)
		return false;
	$t = "INSERT INTO users (username, chat_id, name, datta) VALUES ('%s', '%s', '%s', '%s')";
	$query = sprintf($t, mysqli_real_escape_string($connect, $username),
						mysqli_real_escape_string($connect, $chat_id),
						mysqli_real_escape_string($connect, $name),
						mysqli_real_escape_string($connect, $time));
	$result = mysqli_query($connect, $query);
	if(!$result)
		die(mysqli_error($connect));
	return true;
}



function get_user($connect, $chat_id){
	$query = sprintf("SELECT * FROM users WHERE chat_id=%d", (int)$chat_id);
	$result = mysqli_query($connect, $query);
	if(!$result)
		die(mysqli_error($connect));
	$get_user = mysqli_fetch_assoc($result);
	return $get_user;

}



















function add_prime_user($connect, $chat_id, $username, $name, $sub_type, $sub_date, $sub_expire){
	$chat_id = trim($chat_id);
	$username = trim($username);
	$name = trim($name);
	$sub_type = trim($sub_type);
	$sub_date = trim($sub_date);
	$sub_expire = trim($sub_expire);

	$t = "INSERT INTO prime_users (chat_id, username, name, sub_type, sub_date, sub_expire) VALUES ('%s', '%s', '%s', '%s', '%s', '%s')";
	$query = sprintf($t, mysqli_real_escape_string($connect, $chat_id),
						mysqli_real_escape_string($connect, $username),
						mysqli_real_escape_string($connect, $name),
						mysqli_real_escape_string($connect, $sub_type),
						mysqli_real_escape_string($connect, $sub_date),
						mysqli_real_escape_string($connect, $sub_expire));
	$result = mysqli_query($connect, $query);

	return true;
}


function get_prime_user($connect, $chat_id){
	$query = sprintf("SELECT * FROM prime_users WHERE chat_id=%d", (int)$chat_id);
	$result = mysqli_query($connect, $query);
	if(!$result)
		die(mysqli_error($connect));
	$get_prime_user = mysqli_fetch_assoc($result);
	return $get_prime_user;

}




?>