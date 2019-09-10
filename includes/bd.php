<?php


$host = "localhost"; // Хост (лучше оставить таким)

$BDuser = "bdus"; // Имя пользователя базы данных

$BDname = "sector";	// Имя базы данных

$BDpass = "bdpass";	// Пароль от пользователя базы данных (пароль от базы)



$bd = new mysqli($host, $BDuser, $BDpass, $BDname);
$bd -> query("SET NAMES 'utf8'");


?>