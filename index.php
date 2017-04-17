<?php
	$referer = $_SERVER['HTTP_REFERER'];
	$referer2 = $_SERVER['REQUEST_URI'];
	
	if ($referer2 == "/?utm_source=yandex&utm_medium=cpc&utm_campaign=usual") $referer2 = 'Яндекс.Директ';
	elseif ($referer2 == "?aclk?sa=l&ai=") $referer2 = 'Google AdWords';
	else $referer2 = 'Пользователь перешел на сайт не по рекламному объявлению';
	
	if (stristr($referer, 'yandex.ru')) { $search = 'text='; $crawler = 'Yandex'; }
	if (stristr($referer, 'rambler.ru')) { $search = 'words='; $crawler = 'Rambler'; }
	if (stristr($referer, 'google.ru')) { $search = 'q='; $crawler = 'Google'; }
	if (stristr($referer, 'google.com')) { $search = 'q='; $crawler = 'Google'; }
	if (stristr($referer, 'mail.ru')) { $search = 'q='; $crawler = 'Mail.Ru'; }
	if (stristr($referer, 'bing.com')) { $search = 'q='; $crawler = 'Bing'; }
	if (stristr($referer, 'qip.ru')) { $search = 'query='; $crawler = 'QIP'; }

	if (isset($crawler)) {
		$phrase = urldecode($referer);
		preg_match($search.'([^&]*)', $phrase.'&', $phrase2);
		$phrase = $phrase2[1];
		$referer = $crawler;
	}
?>

<!doctype html>
<html lang="ru">
<head> 
	<title> Свадебное видео получи ролик для Instagramm на следующий день после свадьбы!</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
	
	
	

	<link type="text/css" rel="stylesheet" href="assets/css/jquery.countdown.css" />
	<link type="text/css" rel="stylesheet" href="assets/css/lightbox.css" />
	
	<!-- Bootstrap CSS -->
	
	<!-- <link rel="stylesheet" href="assets/css/bootstrap-grid-3.3.1.min.css" /> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

	<!-- jQuery JS -->
	<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
	<script type="text/javascript" src="assets/js/contact.js"></script>
	<script type="text/javascript" src="assets/js/lightbox-2.6.js"></script>
	<script type="text/javascript" src="assets/js/jquery.countdown.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.countdown-ru.js"></script>
	<script src="http://vk.com/js/api/openapi.js" type="text/javascript"></script>
	
	<!-- Bootstrap JS -->
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link type="text/css" rel="stylesheet" href="assets/css/main.css" />
	<link type="text/css" rel="stylesheet" href="assets/css/style-da.css" />
	<script type="text/javascript">
    
      // var _gaq = _gaq || [];
      // _gaq.push(['_setAccount', 'UA-49206838-1']);
      // _gaq.push(['_trackPageview']);
    
      // (function() {
      //   var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      //   ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      //   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      // })();
    
    </script>
</head>
<body>
	<?php require_once('assets/includes/header_top.php');?>
	<?php require_once('assets/includes/balls.php');?>
	<?php require_once('assets/includes/form1.php');?>
	<?php require_once('assets/includes/prices.php');?>
	<?php require_once('assets/includes/video2.php');?>
	<?php require_once('assets/includes/balls3.php');?>
	<?php require_once('assets/includes/form2.php');?>
	<?php require_once('assets/includes/reviews.php');?>
	<?php require_once('assets/includes/question.php');?>
	<?php require_once('assets/includes/footer.php');?>
	<?php require_once('assets/includes/modal.php');?>
</body>
</html>
