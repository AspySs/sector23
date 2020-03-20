<?php
include_once 'includes/functions.php';
if(isset($_POST['done'])){
	if(isset($_FILES['files'])){
		$check = can_upload($_FILES['files']);
		if($check === true){
        // загружаем изображение на сервер
        $picname = make_name($_FILES['files']);
        make_upload($_FILES['files'], $picname);

	$text = strip_tags($_POST['text']);
	$nickname = strip_tags($_POST['nickname']);
//	$picname = make_name($_FILES['files']);
	$status = 'false';
	$date = time();
	$ip = getIP();
	include 'includes/bd.php';
	$send = $bd->query("INSERT INTO `comments` (`id`, `nickname`, `text`, `time`, `ip`, `checked`, `picname`) VALUES (NULL, '".$nickname."', '".$text."', '".time()."', '".$ip."', '".$status."', '".$picname."');");
	$bd->close();
 if($send){header('Location: index?send=succes');}else{$error= "вы уже оставляли комментарий, либо текст похож на чужой, попробуйте изменить содержание!"; header('Location: index?send=fail&error='.$error);}
		}else{$error = "Ошибка " . $check; header('Location: index?send=fail&error='.$error);}
	}else{$error = "пожалуйста загрузите фотографию перед отправкой"; header('Location: index?send=fail&error='.$error);}
}else{$error = "Ошибка? " . $check; header('Location: index?send=fail&error='.$error);}



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