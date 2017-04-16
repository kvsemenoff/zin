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

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
	<title> Свадебное видео получи ролик для Instagramm на следующий день после свадьбы!</title>
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
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="descriptor2">
						<div class="logo"></div>
						
					</div>
				</div>
				<div class="col-md-3">
					<div class="phone_box">
						<p class="phone"><a href="tel:+7 926 453-95-79"> <span>&#160&#160 <b>8 (926) 453-95-79</b></a></span></p>
						<p class="text"><b>&#160&#160Zinoveev@yandex.ru</b></p>
						<a data-toggle="modal" href="#myModal0"><small>&#160&#160Закажите обратный звонок</small></a>
					</div>
				</div>
				<div class="clearfix"></div>
				<h1 class="title"><b><p class="text" >Свадебное видео</p></b>видеоролик на следующий<br />день после свадьбы! <br /></h1>
				<div class="video">
					<div class="bg_video"><!--Тут отслеживается таргет-->
	    				<iframe onclick="yaCounter24321856.reachGoal('PROSMOTRVIDEO'); return true;"
	    				style="margin: 18px 0 0 18px;" src="//player.vimeo.com/video/204238910?title=0&amp;byline=0&amp;portrait=0" width="520" height="320" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
				</div>
				<div class="general_form">
					<div class="form_content">
						<div id="fields1">
							<p class="title_form">Позвоните<br />прямо сейчас<br/></p>
							<p style="color:#000000" class="text_form"><b>и получите<br />видеоролик на <br /> СЛЕДУЮЩИЙ ДЕНЬ <br />после свадьбы </b></p>
							<div class="content_form">
								<form id="ajax-contact-form1" action="">
										<input class="form-control" name="referer" type="hidden" value="<?=$referer?>">
										<input class="form-control" name="referer2" type="hidden" value="<?=$referer2?>">
										<input class="form-control" name="phrase" type="hidden" value="<?=$phrase?>">
									<input class="form-control" name="phone" type="text" placeholder="Введите телефон" id="inp1" data-toogle="popover" data-content="Поле не заполнено!" data-placement="left" />
									<input class="button_1" required type="submit" value="Забронировать дату" onClick="proverka(1)" id="win1" data-toogle="popover" data-content=" Cпасибо, что оставили заявку, наши специалисты свяжутся с Вами в ближайшее время!" data-placement="top" />
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="balls1">
					<div class="row">
						<div class="col-4">
							<p><span class="title">более<span class="number" > 7</span> лет</span>&#160Помогаем сохранить<br />&#160Ваши воспоминания</p>
						</div>
						<div class="col-4">
							<p style="margin: 0 0 0 70px;"><span class="title"><span class="number" >516</span></span>Счастливых<br />&#160 пар</p>
						</div>
						<div class="col-4">
							<p><span class="title">от<span class="number"> 30</span> тысяч</span>&#160&#160&#160&#160&#160стоимость&#160наших <br />&#160&#160&#160&#160&#160услуг</p>
						</div>
					</div>
				</div>
			</div>
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
								<input style="display: block; margin: 0 auto;" class="button_1" required type="submit" value="Отправить" onClick="proverka(0)" id="win0" data-toogle="popover" data-content=" Cпасибо, что оставили заявку, наши специалисты свяжутся с Вами в ближайшее время!" data-placement="top" />
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
								<h3>Получить бесплатную консультацию<br /><b><span id="namePacked"></span></b></h3>
								<input id="nameServices" name="nameServices" type="hidden" />
								<input style="display: block; margin: 0 auto 10px;" class="form-control" name="name" type="text" placeholder="Ваше имя" />
								<input style="display: block; margin: 0 auto 10px;" class="form-control" name="phone" type="text" placeholder="Введите телефон" id="inp5" data-toogle="popover" data-content="Поле не заполнено!" data-placement="top" />
								<input style="display: block; margin: 0 auto;" class="button_1" required type="submit" value="Отправить" onClick="proverka(5)" id="win5" data-toogle="popover" data-content=" Cпасибо, что оставили заявку, наши специалисты свяжутся с Вами в ближайшее время!" data-placement="top" />
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
      VK.Widgets.Group("vk_groups", {mode: 0, width: "270px", height: "150px"}, 16762177);
      </script>
<<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    // (function (d, w, c) {
    //     (w[c] = w[c] || []).push(function() {
    //         try {
    //             w.yaCounter43264424 = new Ya.Metrika({
    //                 id:43264424,
    //                 clickmap:true,
    //                 trackLinks:true,
    //                 accurateTrackBounce:true,
    //                 webvisor:true
    //             });
    //         } catch(e) { }
    //     });

    //     var n = d.getElementsByTagName("script")[0],
    //         s = d.createElement("script"),
    //         f = function () { n.parentNode.insertBefore(s, n); };
    //     s.type = "text/javascript";
    //     s.async = true;
    //     s.src = "https://mc.yandex.ru/metrika/watch.js";

    //     if (w.opera == "[object Opera]") {
    //         d.addEventListener("DOMContentLoaded", f, false);
    //     } else { f(); }
    // })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/43264424" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>