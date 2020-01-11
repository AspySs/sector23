<?php
session_set_cookie_params(21600);
session_start();
$baza = "L1pd7sHSW4TAbQg";
$salt = "ioyypQNDZs2o5tm";
$hash = 'ad0d74b11455bc63cdaaa7ddd88d30fd'; // root in md5 + salt!  
$password = @$_POST["pass"];  

if (($_POST != null)&&($_POST["done"] == "Submit"))
{
if (check_password($salt, $password, $hash))
	{  
    $_SESSION["auth"] = true;
		header('Location: admin.php');  
	} else{ $_SESSION["auth"] = false; header('Location: auth.php');}  
}


function check_password($salt, $password, $hash) {  
    // выполним хеш-функцию для переменной $password  
    $new_hash = md5($password.$salt);   
    // возвращаем результат («истина» или «ложь»)  
    return ($hash == $new_hash); 
}


?>



<!DOCTYPE HTML>

<html>
	
	<head>
	<meta charset="UTF-8">
	<title>AUTH</title>
	</head>
	
	<body background="images/bg6.png">
	<div id="auth-all">
		<?php
if (isset($_SESSION["auth"])){
 if ($_SESSION["auth"] == false)
	{
	echo "<script type=\"text/javascript\">
    var div = document.createElement('div');
    div.innerHTML = \"Wrong PASSWORD\";
    div.style.cssText = \"color: #9E1313; \
    background-color: #CE6A6A; \
    width: 200px; \
    height: auto; \
    border: 2px solid #CE4646;\
    border-radius: 8px; \
    position: absolute; \
    left: calc(50% - 100px); \
    top: 60px; \
    text-align: center; \
    padding: 5px 16px; \
    font-size: 24px; \
    \";
    document.body.appendChild(div);
    setTimeout( function() {
    return div.parentNode.removeChild(div);
    }, 5000);
</script>"; //отредактируй как-нибудь чтобы красиво было мб? // И ТАК ЗАЕБАТО
	} elseif ($_SESSION["auth"] == true) header('Location: admin.php');
}
?>

		<b><p>PASSWORD:</p></b>
		<form action="" method="post" name = "auth">
			<input name="pass" placeholder="password" class="textbox"></br>
			<input class="sub" type="submit" name="done" value="Submit">
		</form>
	</div>
	<style>
		body {
	background-color: #1C1C1C;
	color: #865FC5;
	font-family: 'Oswald', sans-serif;
}


.textbox {
	width: 200px;
	border: 2px solid;
	border-radius: 5px;
	border-color: #030303;
	padding: 3px;
	background-color: #282923;
}

.sub {
	font-weight: bold;
	width: 80px;
	height: 30px;
	margin-top: 20px;
	background-color: #865FC5;
	color: #ffffff;
	border: 2px solid;
	border-radius: 5px;
	border-color: #08060F;
}

#auth {
	margin-top: 20%;
}

#auth-all {
	display: inline-block;
	text-align: center;
	margin-top: 15%;
	margin-left: calc(50% - 100px);
}
	</style>
	</body>

</html>