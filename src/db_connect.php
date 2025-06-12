<?php


define('MYSQL_SERVER', 'localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_DB', 'tg_bot');


function db_connect(){
	$connect = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB)
		or die("Error: ".mysqli_error($connect));
	if(!mysqli_set_charset($connect, "utf8mb4")){
		print("Error: ".mysqli_error($connect));
	}
	return $connect;
}

$connect = db_connect();

?>