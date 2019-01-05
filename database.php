<?php

function db_connect(){
	$link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);
	// проверяем установлено ли соединение
	if ( mysqli_connect_error() ) {
		die("Ошибка подключения к базе данных.");
	}
	// устанавливаем кодировку
	if ( !mysqli_set_charset($link, "utf8") ) {
		printf("Error: " . mysqli_error($link));
	}

	return $link;

}


?>