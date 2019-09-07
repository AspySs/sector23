<?php
require "includes/bd.php";
$ALLusers = $bd -> query("SELECT MAX(`id`) FROM `users`");
$bd -> close();
$COLVO = vivCOL($ALLusers);









function vivCOL($result_set){

	while(($row = $result_set->fetch_assoc()) != false){		
	}
		$numb = $result_set->num_rows;
		return $numb;
}


?>