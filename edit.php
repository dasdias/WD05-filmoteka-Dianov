<?php

// подключаем файл конфигурации
require('config.php');

// подключаем файл соединения  базой
require('database.php');

// вызываем функцию подключения, которая возвращает переменную $link
$link = db_connect();

// модель для работы с фильмами
require('models/films.php');

$film = get_film($link, $_GET['id']);

$errors = array();
/*
echo "<pre>";
print_r($_GET);
echo "</pre>";*/

 // Сохраняем обновленные данные из в DB
if ( array_key_exists('updateFilm', $_POST) ) { 

 // Проверка заполнения формы
	if ( $_POST['title'] == '' ) {
		$errors[] = "Необходимо ввести название фильма!";
	}
	if ( $_POST['genre'] == '' ) {
		$errors[] = "Необходимо ввести жанр фильма!";
	}
	if ( $_POST['year'] == '' ) {
		$errors[] = "Необходимо ввести год фильма!";
	}
	// Если массив errors пустой, делаем запись в BD
	
	if ( empty($errors) ) {

		$result = film_update($link, $_POST['title'], $_POST['genre'], $_POST['year'], $_GET['id'], $_POST['description']);
		if ( $result ) {
			$resultSuccess = "Фильм был успешно обновлен!";
		} else { 
			$resultError = "Что то пошло не так. Добавьте фильм еще раз!";
		}
	}
}

$film = get_film($link, $_GET['id']);

include('views/head.tpl');
include('views/notifications.tpl');
include('views/edit-film.tpl');
include('views/footer.tpl');

?>
