<?php
if(isset($_POST['done'])){
include 'includes/bd.php';
$hash1 = $bd->query("SELECT `password` FROM `admin`");
$salt1 = $bd->query("SELECT `salt` FROM `admin`");
$hash = vivpass($hash1); // root in md5 + salt! 
$salt = vivsalt($salt1);  
$password = $_POST["passold"];
if (check_password($salt, $password, $hash)){
	if(($_POST['passnew'] == $_POST['passnew2'])&&(strlen($_POST['passnew']) != 0)){
	$pass = $_POST['passnew'];
	$new_hash = md5($pass.$salt);
	$bd -> query("UPDATE `admin` SET `password` = '".$new_hash."' WHERE `admin`.`id` = 1;");
	header('Location: pass?error=true&errorT=PAROL USPESHNO SMENEN!!!&top=60');
}else{header('Location: pass?error=true&errorT=PAROLI NE SOVPADAYT&top=60');}
}else{header('Location: pass?error=true&errorT=Wrong PASSWORD&top=60');}
$bd->close();
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
		<input type="text" name="passold" placeholder="пароль"></br></br>
		<input type="text" name="passnew" placeholder="новый пароль"></br></br>
		<input type="text" name="passnew2" placeholder="новый пароль еще раз!"></br></br>
		<input type="submit" name="done" id='changePass' value='Изменить пароль'>
	</form>

	<style>
	body {
		margin: 0;
		padding: 0;
		background-color: #323232;
	}
	
	#changePass {
		display: inline-block;
		width: 140px;
		margin-top: 10px;
		color: #898989;
		border: none;
		background-color: #333333;
		padding: 8px 16px;
		border-radius: 8px;
		box-shadow: -1px -1px 6px #555555,
		2px 2px 6px #101010;
		cursor: pointer;
	}

	form {
		display: inline-block;
		position: relative;
		text-align: center;
		width: 400px;
		left: calc(50% - 200px);
		top: 30vh;
	}

	input:not(#changePass) {
		padding: 2px 5px;
		border-radius: 4px;
	}

	</style>
</body>
</html>