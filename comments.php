<?php
include_once 'includes/functions.php';
if(isset($_POST['done'])){
	if(isset($_FILES['file'])){
		$check = can_upload($_FILES['file']);
		if($check === true){
        // загружаем изображение на сервер
        $picname = make_name($_FILES['file']);
        make_upload($_FILES['file'], $picname);

	$text = strip_tags($_POST['text']);
	$nickname = strip_tags($_POST['nickname']);
	$picname = make_name($_FILES['file']);
	$status = 'false';
	$date = time();
	$ip = getIP();
	include 'includes/bd.php';
	$send = $bd->query("INSERT INTO `comments` (`id`, `nickname`, `text`, `time`, `ip`, `checked`, `picname`) VALUES (NULL, '".$nickname."', '".$text."', '".time()."', '".$ip."', '".$status."','".$picname."');");
 if($send){header('Location: comm.php?send=succes');}else{$error= "вы уже оставляли комментарий, либо текст похож на чужой, попробуйте изменить содержание!"; header('Location: comm.php?send=fail&error='.$error);}
 header('Location: comm.php?send=succes');
		}else{$error = "Ошибка " . $check; header('Location: comm.php?send=fail&error='.$error);}
	}else{$error = "пожалуйста загрузите фотографию перед отправкой"; header('Location: comm.php?send=fail&error='.$error);}
}else{$error = "Ошибка? " . $check; header('Location: comm.php?send=fail&error='.$error);}



function getIP()
{
	$client  = @$_SERVER['HTTP_CLIENT_IP'];
	$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
	$remote  = @$_SERVER['REMOTE_ADDR'];
 
	if(filter_var($client, FILTER_VALIDATE_IP)) $ip = $client;
	elseif(filter_var($forward, FILTER_VALIDATE_IP)) $ip = $forward;
	else $ip = $remote;
 
		return $ip;
}
?>