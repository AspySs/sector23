<?php
if(isset($_POST['done'])){
	$text = $_POST['text'];
	$nickname = $_POST['nickname'];
	$status = 'false';
	$date = time();
	$ip = getIP();
	include 'includes/bd.php';
	$send = $bd->query("INSERT INTO `comments` (`id`, `nickname`, `text`, `time`, `ip`, `checked`) VALUES (NULL, '".$nickname."', '".$text."', '".time()."', '".$ip."', '".$status."');");
 if($send){header('Location: index.php?send=succes');}else{header('Location: index.php?send=fail');}
}



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