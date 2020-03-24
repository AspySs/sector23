<?php
if(isset($_POST['done'])){
include 'includes/bd.php';
$hash1 = $bd->query("SELECT `password` FROM `admin`");
$salt1 = $bd->query("SELECT `salt` FROM `admin`");
$bd->close();
$hash = vivpass($hash1); // root in md5 + salt! 
$salt = vivsalt($salt1);  
$password = $_POST["passold"];
if (check_password($salt, $password, $hash)){
	if(($_POST['passnew'] == $_POST['passnew2'])&&(strlen($_POST['passnew']) != 0)){
	$pass = $_POST['passnew'];
	$new_hash = md5($pass.$salt);
	$bd -> query("UPDATE `admin` SET `password` = '".$new_hash."' WHERE `admin`.`password` = ".$hash.";");
	header('Location: auth?error=true&errorT=PAROL USPESHNO SMENEN!!!&top=60');
}else{header('Location: auth?error=true&errorT=PAROLI NE SOVPADAYT&top=60');}
}else{header('Location: auth?error=true&errorT=Wrong PASSWORD&top=60');}
}




function check_password($salt, $password, $hash) {  
    // выполним хеш-функцию для переменной $password  
    $new_hash = md5($password.$salt);   
    // возвращаем результат («истина» или «ложь»)  
    return ($hash == $new_hash); 
}

function vivpass($result_set){
    while(($row = $result_set->fetch_assoc()) != false){
        $lol = $row["password"];  
    } 
    return $lol;
}
function vivsalt($result_set){
    while(($row = $result_set->fetch_assoc()) != false){
        $lol1 = $row["salt"];  
    } 
    return $lol1;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>СМЕНА ПАРОЛЯ</title>
</head>
<body>
	<div id="auth-all">
	<?php

if ($_GET["error"] == true)
	{
	echo "<script type=\"text/javascript\">
    var div = document.createElement('div');
    div.innerHTML = \"".$_GET["errorT"]."\";
    div.style.cssText = \"color: #9E1313; \
    background-color: #CE6A6A; \
    width: 200px; \
    height: auto; \
    border: 2px solid #CE4646;\
    border-radius: 8px; \
    position: absolute; \
    left: calc(50% - 120px); \
    top: ".$_GET['top']."px; \
    text-align: center; \
    padding: 5px 16px; \
    font-size: 24px; \
    \";
    document.body.appendChild(div);
    setTimeout( function() {
    return div.parentNode.removeChild(div);
    }, 5000);
</script>"; //отредактируй как-нибудь чтобы красиво было мб? // И ТАК ЗАЕБАТО
	}

	?>
	<form action="" method="POST">
		<input type="text" name="passold" placeholder="пароль">
		<input type="text" name="passnew" placeholder="новый пароль">
		<input type="text" name="passnew2" placeholder="новый пароль еще раз!">
		<input type="text" name="salt" placeholder="SALT">
		<input type="submit" name="done">
	</form>

	<style>


body {
	margin: 0;
	font-family: 'Open Sans', sans-serif;
	background-color: #272727;
	color: #fff;
}


.textbox {
	width: 200px;
	height: 30px;
	line-height: 30px;
	font-size: 17px;
	padding: 0 5px;
	border: 1px solid;
	border-radius: 5px;
	border-color: #6d6d6d;
	color: rgb(124, 124, 124);
	background-color: rgb(223, 223, 223);
}

.sub {
	font-weight: bold;
	width: 95px;
	height: 35px;
	margin-top: 20px;
	background-color: #865FC5;
	color: #ffffff;
	border: 1px solid #171717;
	border-radius: 8px;
	border-color: rgb(24, 18, 48);
}

#auth {
	margin-top: 20%;
}

#auth-all {
	display: inline-block;
	width: 500px;
	text-align: center;
	margin-top: 15%;
	margin-left: calc(50% - 250px);
}

@media (max-width: 768px) {
	#auth-all {
		width: 100%;
		margin-left: 0;
		margin-top: 30vh;
	}
}
	</style>
</body>
</html>