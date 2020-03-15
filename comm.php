<?php
if(@$_GET['send']=='succes'){echo"Ваш комментарий доставлен на обработку";}
elseif (@$_GET['send']=='fail'){@$error = $_GET['error']; echo"<strong>".$error."</strong>";}
include_once('includes/functions.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<title>Sector 23</title>
</head>
<body>
	    <form action="comments.php" method="post" enctype="multipart/form-data">
      <input type="file" name="file"></br></br>
      <input type="text" placeholder="ФИО или ник" name="nickname"><br><br>
		<textarea name="text" placeholder="Ваш отзыв" name="text"></textarea><br><br>
		<button class="btn" type="submit" name="done">Отправить</button>
    </form>
		
	<style>
		form {
			width: 500px;
			text-align: center;
		}

		form input {
			width: 200px;
		}

		textarea {
			width: 200px;
			height: 120px;
			resize: none;
		}

		.btn {
			border: none;
			border-radius: 8px;
			font-weight: bold;
			padding: 5px 15px;
			color: #fff;
			background-color: #FF1A39;
		}
	</style>
</body>
</html>