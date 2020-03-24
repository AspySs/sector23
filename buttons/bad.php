<?php
if(isset($_POST['bad'])){
	$id = $_POST['id'];
	require "../includes/bd.php";
	$link1 = $bd->query("SELECT `picname` FROM `comments` WHERE `comments`.`id` = $id");
	$picname = vivLINK($link1);
	$bd->query("DELETE FROM `comments` WHERE `comments`.`id` = $id");
	$bd->close();
	$link = "../img/comm/".$picname;
	unlink($link);
	header('Location: ../admin');
}

function vivLINK($result_set){
    while(($row = $result_set->fetch_assoc()) != false){
        $lol = $row["picname"];  
    } 
    return $lol;
}
?>