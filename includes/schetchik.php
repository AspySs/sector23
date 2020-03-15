<?php
$date = time();
$ip = getIP();
require "bd.php";
$bd -> query("INSERT INTO `users` (`id`, `ip`, `time`) VALUES (NULL, '".$ip."', '".time()."');");
$ALLusers = $bd -> query("SELECT MAX(`id`) FROM `users`");
$bd -> close();
$COLVO = vivCOL($ALLusers);
$numb = 7000+$COLVO;

echo $numb;

function vivCOL($result_set){

	while(($row = $result_set->fetch_assoc()) != false){

		//echo $row["login"];
		//echo "<br />";
		return $row["MAX(`id`)"];
		
	}
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