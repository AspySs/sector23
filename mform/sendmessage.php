<?php
$sendto   = "sector23@inbox.ru";
$client = $_POST['client'];
$phone = $_POST['phone'];
$usermail = $_POST['email'];
$mes = $_POST['mes'];
// Формирование заголовка письма
$subject  = "Вопрос с сайта sector23.ru";
$headers  = "From: server@moykrai.ru \r\n";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Вопрос с сайта sector23.ru</h2>\r\n";
$msg .= "<p><strong>Имя:</strong> ".$client."</p>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
$msg .= "<p><strong>E-mail:</strong> ".$usermail."</p>\r\n";
$msg .= "<p><strong>Сообщение:</strong> ".$mes."</p>\r\n";
$msg .= "</body></html>";

// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers)) {
	echo "true";
} else {
	echo "false";
}

?>