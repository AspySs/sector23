<?php

//ХОСТ СЕРЕГИ

$host = "localhost"; // Хост (лучше оставить таким)

$BDuser = "u0993748_bduser"; // Имя пользователя базы данных

$BDname = "u0993748_sector";	// Имя базы данных

$BDpass = "=865biYoMi%+";	// Пароль от пользователя базы данных (пароль от базы)



$bd = new mysqli($host, $BDuser, $BDpass, $BDname);
$bd -> query("SET NAMES 'utf8'");

//НАШ ХОСТ

/*
$host = "localhost"; // Хост (лучше оставить таким)

$BDuser = "u0928589_bdus"; // Имя пользователя базы данных

$BDname = "u0928589_sector";	// Имя базы данных

$BDpass = "bdpassbdpass";	// Пароль от пользователя базы данных (пароль от базы)



$bd = new mysqli($host, $BDuser, $BDpass, $BDname);
$bd -> query("SET NAMES 'utf8'");*/



?>
