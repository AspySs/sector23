<?php


$host = "localhost"; // Хост (лучше оставить таким)

$BDuser = ""; // Имя пользователя базы данных

$BDname = "";	// Имя базы данных

$BDpass = "";	// Пароль от пользователя базы данных (пароль от базы)



$bd = new mysqli($host, $BDuser, $BDpass, $BDname);
$bd -> query("SET NAMES 'utf8'");


?>