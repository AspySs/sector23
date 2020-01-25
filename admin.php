<?php
session_set_cookie_params(21600);
session_start();
if($_SESSION['auth']=="true"){
//СДЕЛАТЬ ЗАЩИТУ ЧЕРЕЗ СЕССИЮ И АВТОРИЗАЦИЮ
include 'includes/bd.php';
$ALL = $bd -> query("SELECT * FROM `comments`");
$ALLids = $bd -> query("SELECT `id` FROM `comments`");
$bd->close();
$all = vivALL($ALL);
$colvo = vivCOL($ALLids);
}else{header("Location: auth.php");}

function vivALL($result_set){
$o = 0;
$peopleK = array(array());
	while(($row = $result_set->fetch_assoc()) != false){
		$peopleK[$o][0] = $row["id"];
		$peopleK[$o][1] = $row["nickname"];
		$peopleK[$o][2] = $row["text"];
		$peopleK[$o][3] = $row["time"];
		$peopleK[$o][4] = $row["checked"];
		$peopleK[$o][5] = $row["picname"];
		$o +=1;		
		
	} 
	unset($o);
	return $peopleK;
}
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
	<title></title>
</head>
<body>
<?php
for($i=0;$i<$colvo;$i++){
echo"<div class=\"str\">\n<p>ID: ".$all[$i][0]."</p>\n<p>Name: ".$all[$i][1]."</p>\n<p>Text: ".$all[$i][2]."</p>\n<p>Time: ".$all[$i][3]."</p>\n<p>Status: ".$all[$i][4]."</p>\n<form action=\"buttons/accept.php\" method=\"POST\">\n<input type=\"hidden\" name=\"id\" value=\"".$all[$i][0]."\">\n<input type=\"submit\" name=\"accept\" value=\"Опубликовать\">\n</form>\n<form action=\"buttons/bad.php\" method=\"POST\">\n<input type=\"submit\" name=\"bad\" value=\"Удалить\">\n</form>\n</div>";
}
?>

<style>
		body {
			margin: 0;
			background-color: #00381f;
			background-image: url("https://www.transparenttextures.com/patterns/padded-light.png");
		}
		.str {
			width: 100%;
			margin-top: 20px;
			display: inline-block;
			height: auto;
		}

		.str div, p, form {
			display: inline-block;
			padding: 5px 12px;
			margin: 0 10px;
		}
		
		.str p {
			padding-left: 5px;
			border-radius: 5px;
			background-color: #c0c0c0;
		}

		.user {
			width: 200px;
		}
	</style>
</body>
</html>