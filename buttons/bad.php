<?php
if(isset($_POST['bad'])){
	$id = $_POST['id'];
	require "../includes/bd.php";
	$bd->query("DELETE FROM `comments` WHERE `comments`.`id` = $id");
	$bd->close();
	header('Location: ../admin');
}


?>