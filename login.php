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

/*echo("<pre>");
print_r($login);
print_r($_POST['login']);
echo("</pre>");*/

// if ( isset($_POST['enter']) ){
// 	// $userName = $_POST['user-name'];
// 	$userName = $_POST['login'];
// 	$userCity = $_POST['user-city'];
// 	$exrire =  time() + 60*60*24*30;
	
// 	setcookie('user-name', $userName, $exrire);
// 	setcookie('user-city', $userCity, $exrire);
// }

if ( isset($_POST['enter']) ) {
	/*$userName = $login[0]['login'];
	$userPassword = $login[0]['password'];*/

	$userName = $_POST['login'];
	$userCity = $_POST['user-city'];
	$exrire =  time() + 60*60*24*30;
	
	setcookie('login', $userName, $exrire);
	setcookie('user-city', $userCity, $exrire);

	foreach ($login as $key1 => $value1) {
		// echo("<pre>");
		// // echo $key1;
		// echo print_r($value);
		// echo("</pre>");

		foreach ($value1 as $key => $value) {
		// echo("<pre>");
		// echo $value;
		// // // echo print_r($login);
		// echo("</pre>");

			if ( $value1['login'] == $_POST['login'] && $value1['password'] == $_POST['password'] ) {
					$_SESSION['user'] = 'admin';
					header('Location: ' . HOST . 'index.php');
			}
		}
	}

	/*if ( $_POST['login'] == $userName && $_POST['password'] == $userPassword  ) {
		$_SESSION['user'] = 'admin';
		header('Location: ' . HOST . 'index.php');
	}*/
}


include('views/head.tpl');
include('views/login.tpl');
include('views/footer.tpl');

?>