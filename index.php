<?php

// подключаем файл конфигурации
require('config.php');

// подключаем файл соединения с базой
require('database.php');

// вызываем функцию подключения, которая возвращает переменную $link
$link = db_connect();

// модель для работы с фильмами
require('models/films.php');

require('functions/login-function.php');



// Удаление фильма
if ( @$_GET['action'] == 'delete') {
	// вызываем  функцию удаление и результат записываем в переменную
	$reslut = film_delete($link, $_GET['id']);
	
	if ( $reslut ) {
		$resultInfo = "Фильм был удален!";
	} else {
		$resultError = "Что то пошло не так.";
	}
}

// вызываем фуекцию получения фильмов из базы
$films = films_all($link);


// подключаем шаблоны страницы
include('views/head.tpl');
include('views/notifications.tpl');
include('views/index.tpl');
include('views/footer.tpl');

?>
