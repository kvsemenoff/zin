<?php
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['phone'])) {$mess = $_POST['phone'];}
if (isset($_POST['phrase'])) {$phrase = $_POST['phrase'];}
if (isset($_POST['referer'])) {$referer = $_POST['referer'];}
if (isset($_POST['referer2'])) {$referer2 = $_POST['referer2'];}
if (isset($_POST['nameServices'])) {$nameServices = $_POST['nameServices'];}
$to = "zinoveev@yandex.ru"; //Тут пишем E-mail получателя
$headers = "Content-type: text/html; charset = utf-8\n";
$headers   .= "From: ZinoveevBrothers.ru <zinoveev@yandex.ru/>"; 
$subject = "Заявка на звонок \"ZinoveevBrothers\"";
$message = "
	<html>
		<head>
			<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
			<title>Заявка на звонок \"ZinoveevBrothers\"</title>
		</head>
		<body>
			<p style='margin: 0;'><b>Имя</b>: $name</p>
			<p style='margin: 0;'><b>Номер</b>: $mess</p>
			<p style='margin: 0;'><b>Название услуги</b>: $nameServices</p>
			<br>
			<p style='margin: 0;'><b>Поисковая система</b>: $referer</p>
			<p style='margin: 0;'><b>Рекламная компания</b>: $referer2</p>
			<p style='margin: 0;'><b>Фраза</b>: $phrase</p>
		</body>
	</html>
";
$send = mail($to, $subject, $message, $headers);
?>
