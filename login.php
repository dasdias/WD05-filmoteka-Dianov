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

// вызываем фуекцию получения паролей из базы
$login = get_login($link);

if ( isset($_POST['enter']) ) {
	
	$userName = $_POST['login'];
	$userPassword = $_POST['password'];
	$userCity = $_POST['user-city'];
	$exrire =  time() + 60*60*24*30;
	
	setcookie('login', $userName, $exrire);
	setcookie('user-city', $userCity, $exrire);

	if ( $result = get_user($link, $userName, $userPassword) ) {		
		foreach ($result as $key => $value) {
			if ( $result['login'] == $userName && $result['password'] == $userPassword) {
				$_SESSION['user'] = 'admin';
				header('Location: ' . HOST . 'index.php');
			}
		}
	}
}


include('views/head.tpl');
include('views/login.tpl');
include('views/footer.tpl');

?>