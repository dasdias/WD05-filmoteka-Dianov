<?php 
require('config.php');

unset($_SESSION['user']);
session_destroy();

// echo "<pre>";
// echo print_r($_GET['name']);
// echo "</pre>";

if ( isset($_GET['name']) ){
	$userName = '';
	$userCity ='';
	$exrire =  time() - 60*60*24*30;
	
	setcookie('login', $userName, $exrire);
	setcookie('user-city', $userCity, $exrire);
}
header('Location: ' . HOST . 'index.php');


?>