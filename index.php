<?php
require "includes/bd.php";
$bd -> query("INSERT"); // DODELAT
$ALLusers = $bd -> query("SELECT MAX(`id`) FROM `users`");
$COLVO = vivCOL($ALLusers);
$bd -> close();








function vivCOL($result_set){

	while(($row = $result_set->fetch_assoc()) != false){		
	}
		$numb = $result_set->num_rows;
		return $numb;
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
	<header>
		<div class="left"><span>Sector 23<br> Лазаревское</span></div>
	</header>
</body>
</html>