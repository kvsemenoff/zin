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
		eregi($search.'([^&]*)', $phrase.'&', $phrase2);
		$phrase = $phrase2[1];
		$referer = $crawler;
	}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Видеоприглашение от ведущей режиссерской студии в подарок</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<link type="text/css" rel="stylesheet" href="assets/css/main.css" />
	<link type="text/css" rel="stylesheet" href="assets/css/jquery.countdown.css" />
	<link type="text/css" rel="stylesheet" href="assets/css/lightbox.css" />
	
	<!-- Bootstrap CSS -->
	<link type="text/css" rel="stylesheet" href="assets/css/bootstrap.css" />

	<!-- jQuery JS -->
	<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
	<script type="text/javascript" src="assets/js/contact.js"></script>
	<script type="text/javascript" src="assets/js/lightbox-2.6.js"></script>
	<script type="text/javascript" src="assets/js/jquery.countdown.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.countdown-ru.js"></script>
	<script src="http://vk.com/js/api/openapi.js" type="text/javascript"></script>
	
	<!-- Bootstrap JS -->
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	
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
	<div id="header">
		<div class="content">
			<div class="descriptor">
				<div class="logo"></div>
				<div class="phone_box">
					<p class="phone"><span>8 (925)</span>02-20-898</p>
					<a data-toggle="modal" href="#myModal0">Закажите обратный звонок</a>
				</div>
			</div>
			<h1 class="title"><b>Свадебное видео</b><br />Видеоприглашение <br />от ведущей студии <br />в подарок!</h1>
			<div class="video">
				<div class="bg_video">
    				<iframe style="margin: 18px 0 0 18px;" src="//player.vimeo.com/video/87092504?title=0&amp;byline=0&amp;portrait=0" width="422" height="242" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
			</div>
			<div class="general_form">
				<div class="form_content">
					<div id="fields1">
						<p class="title_form">Закажите<br />воспоминание<br />длинною в жизнь</p>
						<p class="text_form">и наш менеджер свяжется<br />с вами в течение <b>10</b> минут</p>
						<div class="content_form">
							<form id="ajax-contact-form1" action="">
									<input class="form-control" name="referer" type="hidden" value="<?=$referer?>">
									<input class="form-control" name="referer2" type="hidden" value="<?=$referer2?>">
									<input class="form-control" name="phrase" type="hidden" value="<?=$phrase?>">
								<input class="form-control" name="phone" type="text" placeholder="Введите телефон" id="inp1" data-toogle="popover" data-content="Поле не заполнено!" data-placement="left" />
								<input class="button_1" required type="submit" value="Заказать воспоминание" onClick="proverka(1)" id="win1" data-toogle="popover" data-content=" Cпасибо, что оставили заявку, наши специалисты свяжутся с Вами в ближайшее время!" data-placement="top" />
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="balls1">
				<div class="row">
					<div class="col-4">
						<p><span class="title"><span class="number">6</span> лет</span>Помогаем сохранить<br />Ваши воспоминания</p>
					</div>
					<div class="col-4">
						<p style="margin: 0 0 0 70px;"><span class="title"><span class="number">316</span></span>Счастливых<br />пар</p>
					</div>
					<div class="col-4">
						<p><span class="title"><span class="number">6</span></span>Профессиональных<br />операторов на одной свадьбе</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="balls1">
		<div class="content2">
			<h1 class="large">Почему эти пары<br />выбрали именно нас?</h1>
			<div class="row">
				<div class="col-4">
					<div class="box">
						<div class="img">
							<img src="assets/images/pictures/balls1.jpg" alt="image icon balls" />
						</div>
						<p class="title" style="color: #1da820;">Выезд в любую<br />точку мира</p>
						<p class="text">Нет мест на планете, где бы мы<br />не смогли организовать съемку<br />Вашей свадьбы.</p>
					</div>
				</div>
				<div class="col-4">
					<div class="box">
						<div class="img">
							<img src="assets/images/pictures/balls2.jpg" alt="image icon balls" />
						</div>
						<p class="title" style="color: #ad46cf;">Дружелюбие и<br />отзывчивость</p>
						<p class="text">Боитесь, что кислое лицо<br />оператора испортит праздник?<br />Мы гарантируем, что наши<br />операторы будут счастливы<br />точно также, как и любой гость<br />на Вашей свадьбе.</p>
					</div>
				</div>
				<div class="col-4">
					<div class="box">
						<div class="img">
							<img src="assets/images/pictures/balls3.jpg" alt="image icon balls" />
						</div>
						<p class="title" style="color: #f68e1f;">Видеосюрприз<br />для гостей</p>
						<p class="text">Мы можем порадовать Ваших друзей и<br />разнообразить банкетную часть:<br />сделать ролик о Вашей свадьбе прямо<br />на банкете, смонтировать веселые<br />интервью-перевертыши и многое<br />другое.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-4">
					<div class="box">
						<div class="img">
							<img src="assets/images/pictures/balls4.jpg" alt="image icon balls" />
						</div>
						<p class="title" style="color: #20e0cc;">Внимание к<br />пожеланиям</p>
						<p class="text">Проблема современных<br />операторов &#8211; это пренебрежение<br />к идеям и пожеланиям самих<br />молодоженов. Наши специалисты<br />помогут вам не только правильно<br />сформулировать их, но и<br />преукрасить.</p>
					</div>
				</div>
				<div class="col-4">
					<div class="box">
						<div class="img">
							<img src="assets/images/pictures/balls5.jpg" alt="image icon balls" />
						</div>
						<p class="title" style="color: #11a1f3;">Богатый<br />опыт</p>
						<p class="text">Суммарный опыт работы наших<br />режиссеров составляет 67 лет, а<br />их профессионализм мы<br />предлагаем оценить по видео,<br />которые вы сможете найти далее.</p>
					</div>
				</div>
				<div class="col-4">
					<div class="box">
						<div class="img">
							<img src="assets/images/pictures/balls6.jpg" alt="image icon balls" />
						</div>
						<p class="title" style="color: #9ad301;">Первоклассный<br />сервис</p>
						<p class="text">После заключения договора <br />за вами закрепляется <br />ваш личный менеджер, с которым <br />вы сможете обсудить любой вопрос. <br />Поэтому вы получите фильм, <br />максимально соответствующий <br />вашим ожиданиям. С нами <br />действительно легко<br />и удобно работать!</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="form_1">
		<div class="content2">
			<div class="form">
				<h1 class="large"><b>Подарок!</b></h1>
				<h2 class="subtitle">Бесплатное <b>видеоприглашение</b><br /> от студии "Времена Года"!<br /></h2> <b>При заказе пакетов Авторский и Премиум</b><br /> <br />Удивите своих близких!
			<!--	<div class="action">
					<p class="end">До конца акции осталось:</p>
					<div id="myCountdown">
						<script>
							var dt = new Date(); // создание новой даты по исходным даанным
							var ny = new Date(2015, 1,1);
							var elapsed = ny.getTime()- dt.getTime();
									elapsed=Math.floor( elapsed/ (86400000));
									elapsed= elapsed % 14;
							var month = dt.getMonth();
							var day = dt.getDate() + elapsed;
							if (day>28) {
								month+=1;
								day=1;
							}
							var year = dt.getFullYear()
							$('#myCountdown').countdown({until: new Date(year, month, day, 20), padZeroes: true,  format: 'DHMS'});
						</script>                             
					</div>
				</div> -->
				<div class="general_form">
					<div class="form_content">
						<div id="fields2">
							<p class="text_form">Оставьте заявку</p>
							<div class="content_form">
								<form id="ajax-contact-form2" action="">
									<input class="form-control" name="referer" type="hidden" value="<?=$referer?>">
									<input class="form-control" name="referer2" type="hidden" value="<?=$referer2?>">
									<input class="form-control" name="phrase" type="hidden" value="<?=$phrase?>">
									<input class="form-control" name="phone" type="text" placeholder="Введите телефон" id="inp2" data-toogle="popover" data-content="Поле не заполнено!" data-placement="top" />
									<input class="button_1" style="display: inline-block; margin: 0 0 0 15px;" required type="submit" value="Получить скидку" onClick="proverka(2)" id="win2" data-toogle="popover" data-content=" Cпасибо, что оставили заявку, наши специалисты свяжутся с Вами в ближайшее время!" data-placement="top" />
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="prices">
		<div class="content2">
			<h1 class="large">К Вашим услугам...</h1>
			<div class="row">
				<div class="col-4">
					<div class="box">
						<div class="img">
							<img src="assets/images/pictures/pr_01.jpg" alt="image icon" />
						</div>
						<p class="title">Многокамерная<br />съемка</p>
						<p class="text">Видеосъемка с 2-х и более камер<br />позволяет создавать очень<br />красивый и динамичный<br />свадебный фильм и клип.</p>
					</div>
				</div>
				<div class="col-4">
					<div class="box">
						<div class="img">
							<img src="assets/images/pictures/pr_02.jpg" alt="image icon" />
						</div>
						<p class="title">Съемка<br />с вертолета</p>
						<p class="text">Аэросъемка с воздуха придаст<br />вашему свадебному фильму<br />ощущение масштабности и<br />грандиозности.</p>
					</div>
				</div>
				<div class="col-4">
					<div class="box">
						<div class="img">
							<img src="assets/images/pictures/pr_03.jpg" alt="image icon" />
						</div>
						<p class="title">операторский<br />кран</p>
						<p class="text">На масштабных мероприятиях<br />видеосъемка с операторского крана<br />дает колоссальное преимущество по<br />сравнению с обычной.</p>
					</div>
				</div>
			</div>
			<div class="icon_wedding"></div>
			<div class="table_prices">
				<div class="title">
					<div class="row">
						<div class="col-5">
							
						</div>
						<div class="col-2">
							<p class="name_td_title">Классический<span class="arrow1"></span><span class="arrow2"></span></p>
						</div>
						<div class="col-2">
							<p class="name_td_title">Авторский<span class="arrow1"></span><span class="arrow2"></span></p>
						</div>
						<div class="col-2">
							<p class="name_td_title">Премиум<span class="arrow1"></span><span class="arrow2"></span></p>
						</div>
					</div>
				</div>
				<div class="center">
					<div class="row">
						<div class="col-5">
							<p class="name_service">Количество камер на площадке</p>
						</div>
						<div class="col-2">
							<p class="item">1</p>
						</div>
						<div class="col-2">
							<p class="item">2</p>
						</div>
						<div class="col-2">
							<p class="item">3</p>
						</div>
					</div>
					<div class="row">
						<div class="col-5">
							<p class="name_service">Монтаж фильма</p>
						</div>
						<div class="col-2">
							<p class="item">+</p>
						</div>
						<div class="col-2">
							<p class="item">+</p>
						</div>
						<div class="col-2">
							<p class="item">+</p>
						</div>
					</div>
					<div class="row">
						<div class="col-5">
							<p class="name_service">Курьерская доставка</p>
						</div>
						<div class="col-2">
							<p class="item">+</p>
						</div>
						<div class="col-2">
							<p class="item">+</p>
						</div>
						<div class="col-2">
							<p class="item">+</p>
						</div>
					</div>
					<div class="row">
						<div class="col-5">
							<p class="name_service">Уникальное оформление</p>
						</div>
						<div class="col-2">
							<p class="item">+</p>
						</div>
						<div class="col-2">
							<p class="item">+</p>
						</div>
						<div class="col-2">
							<p class="item">+</p>
						</div>
					</div>
					<div class="row">
						<div class="col-5">
							<p class="name_service">Монтаж клипа</p>
						</div>
						<div class="col-2">
							<p class="item">+</p>
						</div>
						<div class="col-2">
							<p class="item">+</p>
						</div>
						<div class="col-2">
							<p class="item">+</p>
						</div>
					</div>
					<div class="row">
						<div class="col-5">
							<p class="name_service">Жесткий диск с материалами</p>
						</div>
						<div class="col-2">
							<p class="item">-</p>
						</div>
						<div class="col-2">
							<p class="item">+</p>
						</div>
						<div class="col-2">
							<p class="item">+</p>
						</div>
					</div>
					<div class="row">
						<div class="col-5">
							<p class="name_service">Комплекты DVD</p>
						</div>
						<div class="col-2">
							<p class="item">1 комплект</p>
						</div>
						<div class="col-2">
							<p class="item">2 комплекта</p>
						</div>
						<div class="col-2">
							<p class="item">3 комплекта</p>
						</div>
					</div>
					<div class="row">
						<div class="col-5">
							<p class="name_service">Скидка 30% на LoveStory</p>
						</div>
						<div class="col-2">
							<p class="item">-</p>
						</div>
						<div class="col-2">
							<p class="item">-</p>
						</div>
						<div class="col-2">
							<p class="item">+</p>
						</div>
					</div>
					<div class="row">
						<div class="col-5">
							<p class="name_service"><b>Видеосюрприз для гостей</b></p>
						</div>
						<div class="col-2">
							<p class="item">-</p>
						</div>
						<div class="col-2">
							<p class="item">-</p>
						</div>
						<div class="col-2">
							<p class="item">+</p>
						</div>
					</div>
				</div>
				<div class="bottom">
					<div class="row">
						<div class="col-5">
							<p class="price_name">Цена</p>
						</div>
						<div class="col-2">
							<p class="item"><span class="amount">от 45 000</span> руб.<span class="arrow1"></span></p>
						</div>
						<div class="col-2">
							<p class="item"><span class="amount">от 65 000</span> руб.<span class="arrow1"></span></p>
						</div>
						<div class="col-2">
							<p class="item"><span class="amount">от 85 000</span> руб.<span class="arrow1"></span></p>
						</div>
					</div>
				</div>
				<div class="button_price">
					<div class="row">
						<div class="col-5"></div>
						<div class="col-2">
							<a class="button_2" data-toggle="modal" href="#myModal1" onClick="$('#nameServices').val('Премиум'); var namePacked = document.getElementById('namePacked'); namePacked.innerHTML = 'премиум';">Заказать</a>
						</div>
						<div class="col-2">
							<a class="button_2" data-toggle="modal" href="#myModal1" onClick="$('#nameServices').val('Стандарт'); var namePacked = document.getElementById('namePacked'); namePacked.innerHTML = 'стандарт';">Заказать</a>
						</div>
						<div class="col-2">
							<a class="button_2" data-toggle="modal" href="#myModal1" onClick="$('#nameServices').val('Эконом'); var namePacked = document.getElementById('namePacked'); namePacked.innerHTML = 'эконом';">Заказать</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="video_2">
		<div class="content2">
			<h1 class="title">Мы не будем рассказывать про заоблачную<br />стоимость нашей профессиональной техники.<br /><b>Лучше оцените результат сами!</b></h1>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                        <div class="carousel-caption">
                              <p class="name"><span>Карина и Никита</span>Конгресс-Парк "Волынское"</p>
                        </div>
                        <div class="video_boxesss">
                            <iframe onclick="_gaq.push(['_trackEvent', 'video1', 'play']);" src="//player.vimeo.com/video/87485817?title=0&amp;byline=0&amp;portrait=0" width="422px" height="242px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="item ">
                        <div class="carousel-caption">
                              <p class="name"><span>Анна и Андрей</span><br></p>
                        </div>
                        <div class="video_boxesss">
                            <iframe onclick="_gaq.push(['_trackEvent', 'video1', 'play']);" src="//player.vimeo.com/video/87480655?title=0&amp;byline=0&amp;portrait=0" width="422px" height="242px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="item ">
                        <div class="carousel-caption">
                              <p class="name"><span>Ирина и Андрей</span><br></p>
                        </div>
                        <div class="video_boxesss">
                            <iframe onclick="_gaq.push(['_trackEvent', 'video1', 'play']);" src="//player.vimeo.com/video/65510334?title=0&amp;byline=0&amp;portrait=0" width="422px" height="242px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="item ">
                        <div class="carousel-caption">
                              <p class="name"><span>Марина и Леша</span>Сейшельские Острова<br></p>
                        </div>
                        <div class="video_boxesss">
                            <iframe onclick="_gaq.push(['_trackEvent', 'video1', 'play']);" src="//player.vimeo.com/video/87767149?title=0&amp;byline=0&amp;portrait=0" width="422px" height="242px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="item ">
                        <div class="carousel-caption">
                              <p class="name"><span>Анна и Илья</span><br></p>
                        </div>
                        <div class="video_boxesss">
                            <iframe onclick="_gaq.push(['_trackEvent', 'video1', 'play']);" src="//player.vimeo.com/video/87083036?title=0&amp;byline=0&amp;portrait=0" width="422px" height="242px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="item ">
                        <div class="carousel-caption">
                              <p class="name"><span>Михаил и Юлия</span><br></p>
                        </div>
                        <div class="video_boxesss">
                            <iframe onclick="_gaq.push(['_trackEvent', 'video1', 'play']);" src="//player.vimeo.com/video/57307991?title=0&amp;byline=0&amp;portrait=0" width="422px" height="242px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                     <div class="item ">
                        <div class="carousel-caption">
                              <p class="name"><span>Денис и Дарья</span><br></p>
                        </div>
                        <div class="video_boxesss">
                            <iframe onclick="_gaq.push(['_trackEvent', 'video1', 'play']);" src="//player.vimeo.com/video/91739116?title=0&amp;byline=0&amp;portrait=0" width="422px" height="242px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                     <div class="item ">
                        <div class="carousel-caption">
                              <p class="name"><span>Николай и Наталья</span><br></p>
                        </div>
                        <div class="video_boxesss">
                            <iframe onclick="_gaq.push(['_trackEvent', 'video1', 'play']);" src="//player.vimeo.com/video/91753372?title=0&amp;byline=0&amp;portrait=0" width="422px" height="242px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>                   
                    <div class="item ">
                        <div class="carousel-caption">
                              <p class="name"><span>Осенняя прогулка</span><br></p>
                        </div>
                        <div class="video_boxesss">
                            <iframe onclick="_gaq.push(['_trackEvent', 'video1', 'play']);" src="//player.vimeo.com/video/62054489?title=0&amp;byline=0&amp;portrait=0" width="422px" height="242px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="item ">
                        <div class="carousel-caption">
                              <p class="name"><span>Карина и Никита</span>Love Story</p>
                        </div>
                        <div class="video_boxesss">
                            <iframe onclick="_gaq.push(['_trackEvent', 'video1', 'play']);" src="//player.vimeo.com/video/87092504?title=0&amp;byline=0&amp;portrait=0" width="422px" height="242px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="item ">
                        <div class="carousel-caption">
                              <p class="name"><span>Эльвира и Ашот</span><br></p>
                        </div>
                        <div class="video_boxesss">
                            <iframe onclick="_gaq.push(['_trackEvent', 'video1', 'play']);" src="//player.vimeo.com/video/55966268?title=0&amp;byline=0&amp;portrait=0" width="422px" height="242px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="item ">
                        <div class="carousel-caption">
                              <p class="name"><span>Анна и Илья</span><br></p>
                        </div>
                        <div class="video_boxesss">
                            <iframe onclick="_gaq.push(['_trackEvent', 'video1', 'play']);" src="//player.vimeo.com/video/61468208?title=0&amp;byline=0&amp;portrait=0" width="422px" height="242px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                  </div>
              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span></span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span></span>
              </a>
            </div>
		</div>
	</div>
	<div id="balls_3">
		<div class="content2">
			<h1 class="large">Как мы работаем</h1>
			<p class="text1">Мы встречаемся в<br />удобном для Вас месте</p>
			<p class="text2">Заключаем<br />договор</p>
			<p class="text3">Составляем примерный<br />сценарий Вашего фильма и<br />Love Stоry</p>
			<p class="text4">Приступаем<br />к съемке</p>
			<p class="text5">Монтируем<br />видео</p>
			<p class="text6">Доставляем Вам<br />фильм в красивом<br />индивидуальном<br />оформлении</p>
		</div>
	</div>
	<div id="form_2">
		<div class="content">
			<h1 class="title"><span class="quotes_top">&#8220;</span>ВАУ! Как же ей<br />повезло<span class="quotes_bottom">&#8221;</span></h1>
			<p class="text">Ваши подруги</p>
			<div class="general_form">
				<div class="form_content">
					<div id="fields3">
						<p class="title_form">Оставьте заявку</p>
						<p class="text_form">и мы поможем запомнить Вашу<br />свадьбу в самых ярких тонах</p>
						<div class="content_form">
							<form id="ajax-contact-form3" action="">
									<input class="form-control" name="referer" type="hidden" value="<?=$referer?>">
									<input class="form-control" name="referer2" type="hidden" value="<?=$referer2?>">
									<input class="form-control" name="phrase" type="hidden" value="<?=$phrase?>">
								<input class="form-control" name="phone" type="text" placeholder="Введите телефон" id="inp3" data-toogle="popover" data-content="Поле не заполнено!" data-placement="right" />
								<input class="button_1" required type="submit" value="Оставьте заявку" onClick="proverka(3)" id="win3" data-toogle="popover" data-content=" Cпасибо, что оставили заявку, наши специалисты свяжутся с Вами в ближайшее время!" data-placement="top" />
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="reviews">
		<div class="content">
			<h1 class="large">Отзывы</h1>
			<div class="box">
				<div class="row">
					<div class="col-6">
						<div class="video">
							<div class="inside_video">
								<iframe onclick="_gaq.push(['_trackEvent', 'video1', 'play']);" src="//player.vimeo.com/video/57307991?title=0&amp;byline=0&amp;portrait=0" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							</div>
						</div>
						<div class="box_photo">
							<div class="photo">
								<div class="inside_photo">
									<a href="assets/images/pictures/image_reviews/1/1.jpg" data-lightbox="image1">
										<img src="assets/images/pictures/image_reviews/1/1.jpg" alt="image review" />
									</a>
								</div>
							</div>
							<div class="photo">
								<div class="inside_photo">
									<a href="assets/images/pictures/image_reviews/1/2.jpg" data-lightbox="image1">
										<img src="assets/images/pictures/image_reviews/1/2.jpg" alt="image review" />
									</a>
								</div>
							</div>
							<div class="photo">
								<div class="inside_photo">
									<a href="assets/images/pictures/image_reviews/1/3.jpg" data-lightbox="image1">
										<img src="assets/images/pictures/image_reviews/1/3.jpg" alt="image review" />
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-6">
						<p class="name"><span>Михаил и Юлия</span>Ты можешь вести себя естественно и полностью погрузиться в эмоции такого важного свадебного дня! </p>
						<p class="text"><b>Юлия</b>: К выбору видеооператора на свадьбу мы подходили очень ответственно, хотелось запечатлеть этот день во всей красе. Очень рады, что решили сотрудничать с Дмитрием, он все рассказал, объяснил, что будет лучше смотреться, в итоге мы выбрали две камеры и не пожалели, видео очень динамичное. Качество съемки также на высоте. Еще один немаловажный плюс &#8211; оператора в работе практически не замечаешь, он не мешает, не отвлекает, просто делает свою работу, пока ты можешь вести себя естественно и полностью погрузиться в эмоции такого важного свадебного дня! Честно говоря, я до сих пор со слезами радости пересматриваю ролик, такую бурю эмоций он во мне вызывает) Так что мы всем довольны! Большое спасибо Диме и его команде за то, что помогли нам так красиво сохранить в памяти этот важный для нашей семьи день!</p>
					</div>
				</div>
			</div>
			<div class="box">
				<div class="row">
					<div class="col-6">
						<div class="video">
							<div class="inside_video">
								<iframe onclick="_gaq.push(['_trackEvent', 'video1', 'play']);" src="//player.vimeo.com/video/87480655?title=0&amp;byline=0&amp;portrait=0" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							</div>
						</div>
						<div class="box_photo">
							<div class="photo">
								<div class="inside_photo">
									<a href="assets/images/pictures/image_reviews/2/1.jpg" data-lightbox="image2">
										<img src="assets/images/pictures/image_reviews/2/1.jpg" alt="image review" />
									</a>
								</div>
							</div>
							<div class="photo">
								<div class="inside_photo">
									<a href="assets/images/pictures/image_reviews/2/2.jpg" data-lightbox="image2">
										<img src="assets/images/pictures/image_reviews/2/2.jpg" alt="image review" />
									</a>
								</div>
							</div>
							<div class="photo">
								<div class="inside_photo">
									<a href="assets/images/pictures/image_reviews/2/3.jpg" data-lightbox="image2">
										<img src="assets/images/pictures/image_reviews/2/3.jpg" alt="image review" />
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-6">
						<p class="name"><span>Андрей и Анна</span>Нам было очень легко и приятно работать с Димитрием и Маргаритой</p>
						<p class="text"><b>Дмитрий</b>: Не правда, что свадьба в мае грозит трудностями в семье, наша пара опровергает этот вымысел своей жизнью и счастьем! Андрей и Анна поженились в мае, мы до сих пор помним атмосферу этого дня, такую яркую, стильную и душевную одновременно. Была очень красивая выездная регистрация, слова ведущей затрагивали какие-то очень тонкие струнки, а банкет! Банкет в ресторане Фьюжн &#8211; это и прекрасный стол и отлично организованная площадка для гостей и артистов. Скучать не пришлось никому, ребята постарались и сюрпризов было море! Нам было очень легко и приятно работать, поэтому и результат не мог не получиться ))</p>
					</div>
				</div>
			</div>
			<div class="box">
				<div class="row">
					<div class="col-6">
						<div class="video">
							<div class="inside_video">
							    <object width="100%" height="100%">
							        <param name="allowfullscreen" value="true" />
							        <param name="allowscriptaccess" value="always" />
							        <param onclick="_gaq.push(['_trackEvent', 'video5', 'play']);" name="movie" value="http://vimeo.com/moogaloop.swf?clip_id=87647284&amp;force_embed=1&amp;server=vimeo.com&amp;title=0&amp;byline=0&amp;portrait=0&amp;" />
							        <embed src="http://vimeo.com/moogaloop.swf?clip_id=87647284&amp;force_embed=1&amp;server=vimeo.com&amp;title=0&amp;byline=0&amp;portrait=0&amp;" type="application/x-shockwave-flash" allowfullscreen="false" allowscriptaccess="always" width="100%" height="100%"></embed>
                                </object>
							</div>
						</div>
						<div class="box_photo">
							<div class="photo">
								<div class="inside_photo">
									<a href="assets/images/pictures/image_reviews/3/1.jpg" data-lightbox="image3">
										<img src="assets/images/pictures/image_reviews/3/1.jpg" alt="image review" />
									</a>
								</div>
							</div>
							<div class="photo">
								<div class="inside_photo">
									<a href="assets/images/pictures/image_reviews/3/2.jpg" data-lightbox="image3">
										<img src="assets/images/pictures/image_reviews/3/2.jpg" alt="image review" />
									</a>
								</div>
							</div>
							<div class="photo">
								<div class="inside_photo">
									<a href="assets/images/pictures/image_reviews/3/3.jpg" data-lightbox="image3">
										<img src="assets/images/pictures/image_reviews/3/3.jpg" alt="image review" />
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-6">
						<p class="name"><span>Кирилл и Нина</span>Love Story</p>
						<p class="text"><b>Нина</b>: Мы бы хотели сказать большое спасибо Диме и Рите за то, что сняли для нас замечательное лавстори. Оно было в какой-то степени пророческим. Нам очень понравилось, что у ребят подход творческий, и мы не чувствовали себя во время съемки натянуто. Я до сих пор вспоминаю этот день, потому что мы действительно прикольно провели время, очень весело: делали снеговика, играли в снежки, на самом деле это было очень здорово, тем более, что остались об этом такие воспоминания.<br /><b>Кирилл</b>: Чувствуется, что ребята &#8211; профессионалы своего дела, очень грамотно подходят к каждому человеку. Я как, наверно, любой мужчина вообще не люблю сниматься, но с ребятами это было легко и комфортно. Это была просто замечательная прогулка, причем когда проводишь съемку иногда делаешь вещи, которые ты бы в принципе делать не стал. Хочется дурить, чудить, всегда они подскажут что делать, а что самое главное, никогда не знаешь, что и этого получится. Тебя снимают, не понятно как, а в итоге получается замечательный видеоролик, который останется в памяти на всю жизнь. Спасибо вам большое!</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="question">
		<div class="content">
			<div class="general_form">
				<div class="form_content">
					<div id="fields4">
						<h1 class="large">Остались<br />вопросы?</h1>
						<p class="text_form">Закажите звонок и мы<br />перезвоним Вам<br />в течение 15 минут</p>
						<div class="content_form">
							<form id="ajax-contact-form4" action="">
									<input class="form-control" name="referer" type="hidden" value="<?=$referer?>">
									<input class="form-control" name="referer2" type="hidden" value="<?=$referer2?>">
									<input class="form-control" name="phrase" type="hidden" value="<?=$phrase?>">
								<input class="form-control" name="phone" type="text" placeholder="Введите телефон" id="inp4" data-toogle="popover" data-content="Поле не заполнено!" data-placement="top" />
								<input class="button_1" required type="submit" value="Отправить" onClick="proverka(4)" id="win4" data-toogle="popover" data-content=" Cпасибо, что оставили заявку, наши специалисты свяжутся с Вами в ближайшее время!" data-placement="top" />
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="content">
        
        
        

<!-- VK Widget -->
<div id="vk_groups"></div>
        
        
        
        
			<div class="box">
				<div class="logo"></div>
				<div class="phone_box">
					<p class="phone"><span>8 (925)</span>02-20-898</p>
					<a data-toggle="modal" href="#myModal0">Закажите обратный звонок</a>
                    <a data-toggle="modal" href="#myModal2" class="politika">Политика конфиденциальности </a>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="content">
        </div>
	</div>
	
	<!-- ====================== MODAL ================= -->
	<div id="myModal0" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-content normal_modal">
			<div class="modal-body">
				<div class="order-form">
					<div class="form_content">
						<div id="fields0">
							<form id="ajax-contact-form0" action="">
									<input class="form-control" name="referer" type="hidden" value="<?=$referer?>">
									<input class="form-control" name="referer2" type="hidden" value="<?=$referer2?>">
									<input class="form-control" name="phrase" type="hidden" value="<?=$phrase?>">
								<h3>Оставьте заявку</h3>
								<input style="display: block; margin: 0 auto 10px;" class="form-control" name="name" type="text" placeholder="Ваше имя" />
								<input style="display: block; margin: 0 auto 10px;" class="form-control" name="phone" type="text" placeholder="Введите телефон" id="inp0" data-toogle="popover" data-content="Поле не заполнено!" data-placement="top" />
								<input style="display: block; margin: 0 auto;" class="button_1" required type="submit" value="Оформить заказ" onClick="proverka(0)" id="win0" data-toogle="popover" data-content=" Cпасибо, что оставили заявку, наши специалисты свяжутся с Вами в ближайшее время!" data-placement="top" />
							</form>
							<div class="clear"></div>
						</div>
					</div>
				</div>
			</div> 
		</div>
	</div>
	<!-- ====================== MODAL ================= -->
	<!-- ====================== MODAL1 ================= -->
	<div id="myModal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-content normal_modal">
			<div class="modal-body">
				<div class="order-form">
					<div class="form_content">
						<div id="fields5">
							<form id="ajax-contact-form5" action="">
									<input class="form-control" name="referer" type="hidden" value="<?=$referer?>">
									<input class="form-control" name="referer2" type="hidden" value="<?=$referer2?>">
									<input class="form-control" name="phrase" type="hidden" value="<?=$phrase?>">
								<h3>Заказать пакет<br /><b><span id="namePacked"></span></b></h3>
								<input id="nameServices" name="nameServices" type="hidden" />
								<input style="display: block; margin: 0 auto 10px;" class="form-control" name="name" type="text" placeholder="Ваше имя" />
								<input style="display: block; margin: 0 auto 10px;" class="form-control" name="phone" type="text" placeholder="Введите телефон" id="inp5" data-toogle="popover" data-content="Поле не заполнено!" data-placement="top" />
								<input style="display: block; margin: 0 auto;" class="button_1" required type="submit" value="Оформить заказ" onClick="proverka(5)" id="win5" data-toogle="popover" data-content=" Cпасибо, что оставили заявку, наши специалисты свяжутся с Вами в ближайшее время!" data-placement="top" />
							</form>
							<div class="clear"></div>
						</div>
					</div>
				</div>
			</div> 
		</div>
	</div>
	<!-- ====================== MODAL1 ================= -->
	<!-- ====================== MODAL2 ================= -->
	<div id="myModal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
		<div class="modal-content politiks_modal">
			<div class="modal-body">
            	<div class="polit">
                	<p>Обработка персональных данных Пользователя осуществляется в соответствии с законодательством Российской Федерации. Администрация Сайта обрабатывает персональные данные Пользователя в целях предоставления Пользователю услуг по видеосъемке.<br><br>
                    Пользователь заполняя формы «Имя» и «Телефон» даёт согласие на обработку своих персональных данных – имени и номера телефона.<br><br>
                    Под обработкой персональных данных понимается сбор, систематизация, накопление, уточнение (обновление, изменение) и уничтожение персональных данных. Обработка осуществляется с использованием средств автоматизации и/или без использования таких средств, в целях реализации мероприятий оповещения пользователя о новых услугах и акциях компании и для обратной связи с пользователями сайта.<br><br>
                    Администрация сайта гарантирует, что данные пользователя ни в коем случае не будут переданы третьим лицам.</p>
                </div>
			</div> 
		</div>
	</div>
	<!-- ====================== MODAL2 ================= -->
      <script type="text/javascript" src="//vk.com/js/api/openapi.js?111"></script>
	  <script type="text/javascript">
      VK.Widgets.Group("vk_groups", {mode: 0, width: "310px", height: "150px"}, 41426998);
      </script>
<!-- Yandex.Metrika counter --><script type="text/javascript">
// (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter24321856 = new Ya.Metrika({id:24321856, webvisor:true, clickmap:true, trackLinks:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");

</script><noscript><div><img src="//mc.yandex.ru/watch/24321856" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
</body>
</html>