<?php
if($_POST) {
	$to = "infotlr@bk.ru";
	$name = htmlspecialchars($_POST["name"]);
	$phone = htmlspecialchars($_POST['phone']);
	$mail = htmlspecialchars($_POST['mail']);
	$subject = "Письмо с сайта";
	$message = "<p>Имя: $name</p><p>Телефон: $phone</p><p>Почта: $mail</p>";
	$headers  = "Content-type: text/html; charset = UTF-8 \r\n";
	$headers .= "From: TOP LIFT RENTAL <infotlr@bk.ru> \r\n";
	$headers .= "Subject: TOP LIFT RENTAL \r\n";
	$headers .= "Reply-To: infotlr@bk.ru \r\n";
	mail ($to, $subject, $message, $headers);
}
?>
