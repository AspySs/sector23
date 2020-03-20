<?php
if(isset($_POST['accept'])){
	$id = $_POST['id'];
	require "../includes/bd.php";
	$bd->query("UPDATE `comments` SET `checked` = 'true' WHERE `comments`.`id` = '".$id."';");
	$bd->close();
	header('Location: ../admin');
}






?>