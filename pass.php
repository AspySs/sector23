<?php
if(isset($_POST['done'])){
	$pass = $_POST['password'];
	$salt = $_POST['salt'];
	$hash = md5($pass.$salt);
	$ech = true;
}else{$ech=false;}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PASSWORD GENERATOR</title>
	<h1>your salt: <?php if($ech==true){echo $salt;} ?></h1>
	<h1>your password: <?php if($ech==true){echo $hash; $ech=false;} ?></h1>
	<h5>не забудь изменить пароль и соль в базе данных!!!!</h5>
</head>
<body>
	<form action="" method="POST">
		<input type="text" name="password" placeholder="PASSWORD">
		<input type="text" name="salt" placeholder="SALT">
		<input type="submit" name="done">
	</form>

</body>
</html>