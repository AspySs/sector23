<?php
session_set_cookie_params(21600);
session_start();
if(isset($_POST["exit"]) && $_SESSION['auth']=="true"){
	session_unset();
	session_destroy();
	header('Location: ../auth');
}else{header('Location: ../auth?error=true&errorT=Технические шоколадки, попробуйте авторизоваться снова!&top=60');}

?>