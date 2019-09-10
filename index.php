<?php
$date = time();
$ip = getIP();
require "includes/bd.php";
$bd -> query("INSERT INTO `users` (`id`, `ip`, `time`) VALUES (NULL, '".$ip."', '".$date."');");
$ALLusers = $bd -> query("SELECT MAX(`id`) FROM `users`");
$bd -> close();
$COLVO = vivCOL($ALLusers);
$numb = 7000+$COLVO;


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
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<title>Sector 23</title>
</head>
<body>
	<?php echo "количество посетителей: ".$numb; ?>
	<header>
		<div class="left"><span>Sector 23<br> Лазаревское</span></div>
	</header>
</body>
</html>