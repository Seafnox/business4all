<?php

// -- сборка параметра tag для ссылок блока тарифов - на основе utm-меток
function prepareTag()
{
	$params = array('utm_medium', 'utm_source', 'utm_campaign');
	$parts = array();
	foreach ($params as $field)
	{
		if (isset($_GET[$field]))
		{
			$value = '';
			$value = strip_tags($_GET[$field]);
			$value = htmlspecialchars($value);
			$parts[] = $value;
		}
	}
	if (empty($parts))
	{
		return $_SERVER['HTTP_HOST'];
	}
	else
	{
		return implode('|', $parts);
	}
}

$tag = prepareTag();
// --

//-- цикличный счетчик
$now = time();
$interval = 48 * 60 * 60; // счетчик выставляется на 2 дня вперед от текущей даты

if (isset($_COOKIE['time_start']) && $_COOKIE['time_start'] > $now - $interval)
{
	$diff = $_COOKIE['time_start'] + $interval - $now;
}
else
{
	$diff = $interval;
	setcookie('time_start', $now, $now + $interval);
}
// --

/*
  diff2 подставляется в javascript переменную  counter
  // -- счетчик на фиксированную дату
  $date2 = '2014-07-20 18:59:59'; // дата и время для счетчика
  $date1 = 'now';

  $diff2 = strtotime($date2) - strtotime($date1); // разница в секундах
  if ($diff2 < 0)
  {
  $diff2 = 0;
  }
*/
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
		<link rel="shortcut icon" type="image/png" href="favicon.ico"/>
		<title>Интернет-магазин под ключ | Бизнес-школа Имсайдер</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<link href="css/social-likes_birman.css" rel="stylesheet">
		<link href="css/jquery.reject.css" type="text/css" rel="stylesheet"/>
		<link href="css/style.css" rel="stylesheet">
		<!--[if gte IE 9]>
		   <style type="text/css">
			*{
				filter: none;
			 }
		   </style>
	   <![endif]-->


		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
				<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
				<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<link rel="apple-touch-icon" sizes="16x16" href="css/img/icons/16.png">
		<link rel="apple-touch-icon" sizes="48x48" href="css/img/icons/4848.png">
		<link rel="apple-touch-icon" sizes="57x57" href="css/img/icons/5757.png"> 
		<link rel="apple-touch-icon" sizes="60x60" href="css/img/icons/6060.png">
		<link rel="apple-touch-icon" sizes="72x72" href="css/img/icons/7272.png">
		<link rel="apple-touch-icon" sizes="76x76" href="css/img/icons/7676.png">
		<link rel="apple-touch-icon" sizes="114x114" href="css/img/icons114114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="css/img/icons/120120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="css/img/icons/144144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="css/img/icons/152152.png">


		<link rel="icon" type="image/png" href="css/img/icons/16.png" sizes="16x16"> 
		<link rel="icon" type="image/png" href="css/img/icons/3232.png" sizes="32x32">
		<link rel="icon" type="image/png" href="css/img/icons/4848.png" sizes="48x48">
		<link rel="icon" type="image/png" href="css/img/icons/9696.png" sizes="96x96">
		<link rel="icon" type="image/png" href="css/img/icons/120120.png" sizes="120x120">


		<script type="text/javascript" src="//cdn.sublimevideo.net/js/6mj2easc.js"></script>
		<script type="text/javascript">
			var counter = <?php echo $diff; ?>;
		</script>
	</head>
	<body>
		<div id="preloader">
			<!-- Google Analytics counter -->
			<script>
				(function(i, s, o, g, r, a, m) {
					i['GoogleAnalyticsObject'] = r;
					i[r] = i[r] || function() {
						(i[r].q = i[r].q || []).push(arguments)
					}, i[r].l = 1 * new Date();
					a = s.createElement(o),
							m = s.getElementsByTagName(o)[0];
					a.async = 1;
					a.src = g;
					m.parentNode.insertBefore(a, m)
				})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

				ga('create', 'UA-29022975-1', 'imsider.ru');
				ga('require', 'displayfeatures');
				ga('require', 'linkid', 'linkid.js');
				ga('send', 'pageview');
			</script>
			<!-- / Google Analytics counter -->

			<!-- Yandex.Metrika counter -->
			<script type="text/javascript">
				(function(d, w, c) {
					(w[c] = w[c] || []).push(function() {
						try {
							w.yaCounter12922898 = new Ya.Metrika({id: 12922898, enableAll: true, webvisor: true});
						} catch (e) {
						}
					});

					var n = d.getElementsByTagName("script")[0],
							s = d.createElement("script"),
							f = function() {
								n.parentNode.insertBefore(s, n);
							};
					s.type = "text/javascript";
					s.async = true;
					s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

					if (w.opera == "[object Opera]") {
						d.addEventListener("DOMContentLoaded", f);
					} else {
						f();
					}
				})(document, window, "yandex_metrika_callbacks");
			</script>
			<noscript><div><img src="//mc.yandex.ru/watch/12922898" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
			<!-- / Yandex.Metrika counter -->

			<!-- Oh My Stats tracking code -->
			<script type="text/javascript">
				//<![CDATA[
				var _oms = window._oms || [];

				_oms.push(["set_project_id", "atlfqdjiipmbpuiwguywuqdbunemyzoojqujvlpp"]);
				_oms.push(["set_domain", ".imsider.ru"]);
				(function() {
					var oms = document.createElement("script");
					oms.type = "text/javascript";
					oms.async = true;
					oms.src = "//ohmystats.com/oms.js";
					var s = document.getElementsByTagName("script")[0];
					s.parentNode.insertBefore(oms, s);
				})();
				//]]>
			</script>
			<!-- / Oh My Stats tracking code -->

			<!-- SiteHeart code -->
			<script>
			(function(){
			var widget_id = 570127;
			_shcp =[{widget_id : widget_id}];
			var lang =(navigator.language || navigator.systemLanguage 
			|| navigator.userLanguage ||"en")
			.substr(0,2).toLowerCase();
			var url ="widget.siteheart.com/widget/sh/"+ widget_id +"/"+ lang +"/widget.js";
			var hcc = document.createElement("script");
			hcc.type ="text/javascript";
			hcc.async =true;
			hcc.src =("https:"== document.location.protocol ?"https":"http")
			+"://"+ url;
			var s = document.getElementsByTagName("script")[0];
			s.parentNode.insertBefore(hcc, s.nextSibling);
			})();
			</script>
			<!-- / SiteHeart code -->
		</div>
		<div class="wrapper">
			<div class="header">
				<div class="header-overlay">
				</div>
				<div class="container header-container">
					<div class="col-xs-11 col-xs-offset-1 text-left gray-text text-16 text-since">8 сентября, с понедельника</div>
					<div class="clearfix">
						<div class="col-xs-6 col-xs-offset-1">
							<h1>Бизнес под ключ</h1>
							<div class="text-left header-text">
								Система быстрого запуска интернет-магазина<br class="hidden-xs hidden-sm"/> 
								и бизнес обучение в одном флаконе
							</div>
						</div>
						<div class="col-xs-4 col-header-phone-wrapper pull-right">
							<div class="gray-text text-14">с 10 до 19:00 по будням</div>
							<a href="tel:88003330763" class="header-phone"> 8 800 333-07-63</a>
							<div class="callback-wrapper">
								<a href="javascript:void(0);" class="callback callback-top text-14">Заказать обратный звонок</a>
								<?php include 'modals/callbackForm.html'; ?>
							</div>
						</div>
					</div>
					<div class="video-wrapper">
						<video id="mKQs8xiQBVM" class="sublime"
							   data-uid="mKQs8xiQBVM" 
							   data-youtube-id="mKQs8xiQBVM" 
							   data-autoresize="fill" preload="none">
						</video>
					</div>
					<div class="text-16 after-video-text text-center">
						Вы научитесь зарабатывать от 100&thinsp;000 рублей в месяц с удовольствием.<br/>
						Все технические и организационные проблемы мы возьмем на себя.
					</div>
					<div class="clearfix col-xs-offset-1">
						<div class="col-pupil">
							<div class="bold-24">45&thinsp;000</div>
							<div class="text-16">учеников</div>
						</div>
						<div class="rubl-wrapper">
							<div class="bold-20">1&thinsp;000&thinsp;000&thinsp;000&thinsp;<span class="rubl">i</span></div>
							<div class="text-16">Суммарный годовой оборот участников</div>
						</div>
						<div class="sofa-wrapper">
							<div class="sofa"></div>
							<div class="text-16">Тренеры &mdash; практики,<br /> а не диванные теоретики.</div>
						</div>
						<div class="pull-left divider hidden-xs hidden-sm hidden-md"></div>
						<div class="btn-wrapper">
							<button type="button" class="btn-pink takepart-btn" id="takepart-btn">Принять участие</button>
							<button type="button" class="btn-pink takepart-btn" id="takepart-fixed">Принять участие</button>  
							<div class="text-14">Осталось 5 мест</div>
						</div>
					</div>
				</div>
				<div class="black-rounded-bottom">
					<div class="clearfix text-center down-arrow-wrapper">
						<a href="javascript:void(0);" 
						   class="open-shop-link" id="open-shop-link">Подробнее о программе, тренерах и расписании.</a>
					</div>
				</div>
			</div>
			<div class="white-block-time">
				<div class="black-arrow-wrapper">
					<div class="black-arrow-top">
						<div class="black-arrow-bottom">

						</div>
					</div>

				</div>
				<div class="container white-block-contaner" id="open-shop">
					<div class="clearfix white-block-h2">
						<div class="col-xs-8 col-xs-offset-13">
							<h2 class="text-left line-height-48">Сложно открыть интернет-магазин 
								самостоятельно и без сторонней помощи
							</h2>
						</div>
					</div>
					<div class="col-xs-9 col-xs-offset-13 no-padding">
						<div class="text-16 white-block-text">Скорее всего у вас была попытка открыть бизнес. И не одна.<br/>
							И, возможно, вы даже открыли его. Тогда вы точно знаете сколько денег 
							и физических,<br/> и моральных сил нужно потратить.
						</div>
						<div class="text-16 white-block-bold-text">
							Время и деньги расходуются
						</div>
						<div class="clearfix">
							<div class="col-xs-4 works-col-1">
								<ul class="works-list no-padding-desktop">
									<li class="text-16 works-list-item"> 
										на создание сайта;
									</li>
									<li class="text-16 works-list-item">
										поиск и аренду склада;</li>
									<li class="text-16 works-list-item">
										подключение прямого <br/> номера и ответы<br /> на звонки;
									</li>
								</ul>
							</div>
							<div class="col-xs-4 no-padding-desktop">
								<ul class="works-list">
									<li class="text-16 works-list-item"> работа с курьерами;</li>
									<li class="text-16 works-list-item"> найм персонала;</li>
									<li class="text-16 works-list-item"> привлечение трафика.</li>
								</ul>
							</div>
							<div class="col-xs-4">
								<div class=" works-gray-text text-14">
									Со временем вы сложите этот пазл и пройдете бизнес-квест.
									Мы сами это проходили, теряя месяцы <br class="hidden-xs hidden-sm"/>и сотни тысяч рублей.
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix">
						<div class="col-xs-12 white-block-bbottom-text text-center">
							<div class="bold-text">Время поисков подошло к концу</div>
							<div class="">
								Мы разработали бизнес-систему от практиков,<br /> которые понимают
								с чем вы столкнулись и сейчас<br /> на своем бизнес-пути
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="gray-block">
				<div class="container">
					<div class="tools-icon-header"></div>
					<h2 class="text-center tools-h2">
						Новый бизнес под ключ.<br/>
						Тренинг и инструменты
					</h2>
					<div class="text-16 text-center tools-text">
						Первая в мире система открытия бизнеса, где вы получате 
						полный набор<br /> необходимых инструментов.
					</div>
					<div class="clearfix tools-block">
						<div class="tools-item">
							<div class="tool-icon site-icon"></div>
							<div class="tool-icon-text">Сайт</div>
						</div>
						<div class="tools-item">
							<div class="tool-icon call-icon"></div>
							<div class="tool-icon-text">Колл-центр</div>
						</div>
						<div class="tools-item">
							<div class="tool-icon storage-icon"></div>
							<div class="tool-icon-text">Склад и логистику</div>
						</div>
						<div class="tools-item">
							<div class="tool-icon consultation-icon"></div>
							<div class="tool-icon-text">Консультации</div>
						</div>
						<div class="tools-item pull-right">
							<div class="tool-icon community-icon"></div>
							<div class="tool-icon-text">Обучение и сообщество</div>
						</div>
					</div>
				</div>
			</div>
			<div class="orange-block">
				<div class="orange-border"></div>
				<div class="container">
					<div class="clearfix orange-lists-wrapper">
						<div class="col-xs-8 col-xs-offset-2 ">
							<div class="col-xs-56">
								<div class="text-16 orange-block-bold-text white-text">
									Вы получаете
								</div>
								<ul class="white-works-list">
									<li class="text-16 white-works-list-item white-text"> 
										готовый набор инструментов для<br /> открытия интернет-бизнеса;
									</li>
									<li class="text-16 white-works-list-item white-text">
										качественное обучение <br /> от практиков;</li>
									<li class="text-16 white-works-list-item white-text">
										менторскую поддержку на время<br /> обучения;
									</li>
									<li class="text-16 white-works-list-item white-text">
										готовый бизнес-план по заработку <br />от 100 000 р. в месяц.
									</li>
								</ul>
							</div>


							<div class="col-xs-44">
								<div class="text-16 orange-block-bold-text  white-text">
									Экономите
								</div>
								<ul class="white-works-list no-padding-desktop">
									<li class="text-16 white-works-list-item  white-text"> 
										сотни часов поисков правильного<br /> пути;
									</li>
									<li class="text-16 white-works-list-item  white-text">
										десятки и сотни тысяч рублей <br />на экспериментах с созданием<br /> сайта;</li>
									<li class="text-16 white-works-list-item  white-text">
										силы и нервы на прохождении<br/> различных курсов и тренингов.
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="basket-icon"></div>
					<div class="orage-block-centered-text">
						<div class="white-text text-16 text-center negative-margin">
							Благодаря тому, что в систему Интернет-магазин под ключ вступают 
						</div>
						<div class="white-text text-16 text-center negative-margin">
							сотни человек, вы получаете все преимущества и инструменты по цене 
						</div>
						<div class="white-text text-16 text-center line-height-26">
							среднего сайта.
						</div>
					</div>
				</div>
			</div>
			<div class="white-block owner-block">
				<h2 class="owner-block-h2 text-center">
					<span class="text-center">Вы придете к результату</span> <br />
					<span class="text-center negative-margin">вместе в практиками</span>
				</h2>
				<div class="owners-text text-center">
					Владельцы интернет-магазинов <a href="http://deoshop.ru" class="link" target="_blank">deoshop.ru</a>, 
					<a href="http://kupitalon.ru" class="link" target="_blank">kupitalon.ru</a>,
					<a href="http://video-shoper.ru" class="link" target="_blank">video-shoper.ru</a><br /> и других бизнесов с оборотом более 100 млн рублей в месяц.
				</div>
				<div class="clearfix owner-wrapper">
					<div class="col-owner">
						<div class="img-wrapper">
							<img src="css/img/balakirev.png" alt="" />
						</div>
						<div class="owner-name">
							Сергей <br />Балакирев
						</div>
						<div class="owner-text">
							<div class="owner-big-text">
								Автор &laquo;Формулы быстрого<br /> старта интернет-магазинов&raquo;,<br />
								совладелец действующих<br />интернет-бизнесов.
							</div>
							<div class="owner-bold-text text-14 bold-text">Основной проект</div>
							<a href="http://www.deoshop.ru/" class="owner-href link text-14" target="_blank">deoshop.ru</a>
						</div>
					</div>
					<div class="col-owner">
						<div class="img-wrapper">
							<img src="css/img/shakov.png" alt="" />
						</div>
						<div class="owner-name">
							Тимур <br />Шаков
						</div>
						<div class="owner-text">
							<div class="owner-big-text">
								Основатель действующих<br />интернет-проектов с общим<br /> оборотом 
								более 2 млн<br /> долларов в год.
							</div>
							<div class="owner-bold-text text-14 bold-text">Основной проект</div>
							<a href="http://www.deoshop.ru/" class="owner-href link text-14" target="_blank">deoshop.ru</a>
						</div>
					</div>
					<div class="col-owner">
						<div class="img-wrapper">
							<img src="css/img/fedotkin.png" alt=""/>
						</div>
						<div class="clearfix">
							<div class="owner-name pull-left">
								Николай <br />Федоткин
							</div>
							<div class="fedotkin-text pull-right">
								Руководит 136 <br /> сотрудниками<br /> через айфон
							</div>
						</div>
						<div class="owner-text">
							<div class="owner-big-text">
								Владелец компаний 
								<a href="http://bodo.ru" class="link" target="_blank">bodo.ru</a>,
								<br />
								<a href="http://video-shoper.ru" class="link" target="_blank">video-shoper.ru</a> и других
								<br />бизнесов 
								с оборотом<br /> 1 миллиард руб. в год
							</div>
							<div class="owner-bold-text text-14 bold-text">Основной проект</div>
							<a href="http://video-shoper.ru/" class="owner-href link text-14" target="_blank">video-shoper.ru</a>
						</div>
					</div>
				</div>


				<div class="clearfix places"></div>
				<div class="bold-text text-18 text-center">Дух соревнования мотивирует</div>
				<div class="biznes-wrapper-text">
					<div class="text-16 text-center">В &laquo;Бизнесе под ключ&raquo; участников никто не пинает.</div>
					<div class="text-16 text-center">Предприниматели сравнивают результаты и смотрят, как мы <br />
						открываем бизнесы в прямом эфире. Это очень мотивирует.</div>
					<div class="text-center">
						<a href="javascript:void(0);" class="rating-link text-16" id="rating-link">Рейтинг участников</a>
					</div>
				</div>
				<div class="container paddding-40-0">
					<div class="clearfix">
						<div class="col-xs-12 no-padding">
							<div class="text-18 bold-text text-left">При поддержке</div>
							<div class="partners-wrapper clearfix">
								<a href="http://conf.oborot.ru/archive/2011/" class="partners-item et-2011" target="_blank"></a>
								<a href="http://www.megaindex.ru/" class="partners-item megaindex" target="_blank"></a>
								<a href="http://lifemarketing.ru/" class="partners-item lifemarketing" target="_blank"></a>
								<a href="http://www.vesti.ru/videos?vid=onair" class="partners-item russia24" target="_blank"></a>
								<a href="http://2012.russianinternetforum.ru/" class="partners-item rif" target="_blank"></a>
								<a href="http://www.eretailforum.ru/" class="partners-item retail" target="_blank"></a>
								<a href="http://conf.oborot.ru/archive/2013/" class="partners-item et-2013" target="_blank"></a>
								<a href="http://conversiontraffic.ru/" class="partners-item offer" target="_blank"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="gray-to-white-block">
				<div class="white-border"></div>
				<div class="container">
					<div class="clearfix gray-to-white-h2">
						<div class="col-xs-8 col-xs-offset-2">
							<h2 class="text-left">Почему система &laquo;Новый бизнес под <br /> ключ&raquo; работает?</h2>
						</div>
					</div>

					<div class="clearfix">
						<div class="text-left text-18 col-xs-8 col-xs-offset-2">
							Вот как минимум 4 причины, почему вы можете быть уверены в том, что 
							Бизнес под ключ поможет вам зарабатывать хорошие деньги:
						</div>
					</div>
				</div>
				<div class="container padding-30">
					<div class="clearfix plan-wrapper">
						<div class="col-xs-3 col-plan">
							<div class="plan-icon plan-icon-1"></div>
							<div class="plan-bold-text text-16 bold-text line-height-23">
								Вы будете действовать,
								<br />а не просто слушать
							</div>
							<div class="text-16 line-height-23">
								В итоге получите свой собственный полностью готовый бизнес, который<br />
								уже будет приносить
								вам прибыль
							</div>
						</div>
						<div class="col-xs-3 col-plan">
							<div class="plan-icon plan-icon-2"></div>
							<div class="plan-bold-text text-16 bold-text line-height-23">
								Вы получите только практические знания
							</div>

							<div class="text-16 line-height-23">
								Никакой абстрактной<br />теории, которую вы&nbsp;все равно забудете. Знания полученные в&nbsp;системе легко внедрять и&nbsp;применять<br />
								сразу&nbsp;же.
							</div>
						</div>
						<div class="col-xs-3 col-plan">
							<div class="plan-icon plan-icon-3"></div>
							<div class="plan-bold-text text-16 bold-text line-height-23">
								Увидите как методитики приносят прибыль
							</div>
							<div class="text-16 line-height-23">
								Тренеры на примере своих бизнесов передадут вам методики
								<br />и подкорректируют ваши действия.
							</div>
						</div>
						<div class="col-xs-3 col-plan">
							<div class="plan-icon plan-icon-4"></div>
							<div class="plan-bold-text text-16 bold-text line-height-23">
								Поймете связь между действием и результатом
							</div>
							<div class="text-16 line-height-23">
								Это главное преимущество системы. Здесь вы<br /> научитесь 
								осознавать какие из ваших поступков дают новый эффект.
							</div>
						</div>
					</div>

					<div class="clearfix">
						<div class="col-xs-8 col-xs-offset-2 text-16 line-height-23 gray-to-white-block-text">
							Во многих тренингах большинство учеников ориентируются на процесс. Применяя
							систему &laquo;Имсайдер. Бизнес под ключ&raquo; вы будете исходить из результата.
							Который не заставит себя ждать.
						</div>
					</div>
				</div>
			</div>
			<div class="white-block participants-block" id="participants-block">
				<div class="container">
					<h2 class="text-center">Кейсы и отзывы участников</h2>
					<div class="clearfix case-wrapper">
						<div class="col-xs-9 no-padding col-case">
							<div class="video-row clearfix">
								<div class="col-xs-4  video-item"  data-target="#AW-Zebt7c0M-modal"
									 data-toggle="modal">
									<div class="video-item-wrapper">
										<a href="javascript:void(0);" class="sublime-video-link">
											<img src="css/img/video/manko.jpg"   
												 alt="" class="img-responsive" />
											<img src="css/img/play.png" alt="play" class="play"/>
										</a>
									</div>
									<div class="video-text">
										<div class="text-16 bold-text text-left">
											Андрей Манько
										</div>
										<div class="text-14 line-height-20 text-left">
											Интернет-магазин<br />
											инженерных коммуникаций<br />
											<a href="http://energodin.ru" class="link" target="_blank">
												energodin.ru</a>
										</div>
										<div class="video-money-wrapper">
											<div class="video-money-text">
												1&thinsp;200&thinsp;000&thinsp;
												<span class="video-money" >i</span>
											</div>
											<div class="text-14 text-left">в месяц</div>
										</div>
									</div>
								</div>
								<div class="col-xs-4  video-item" data-target="#W1oVXEpYE4w-modal"
									 data-toggle="modal">
									<div class="video-item-wrapper">
										<a href="javascript:void(0);" class="sublime-video-link">
											<img src="css/img/video/subbotinov.png" 
												 alt="" class="img-responsive" />
											<img src="css/img/play.png" alt="play" class="play"/>
										</a>

									</div>
									<div class="video-text">
										<div class="text-16 bold-text text-left">
											Роман Субботинов
										</div>
										<div class="text-14 line-height-20 text-left">
											Интернет-магазин<br /> покрасочных камер
										</div>
										<div class="video-money-wrapper">
											<div class="video-money-text">
												600&thinsp;000&thinsp;
												<span class="video-money" >i</span>
											</div>
											<div class="text-14 text-left">в месяц</div>
										</div>
									</div>
								</div>
								<div class="col-xs-4  video-item" data-target="#EFtZaNh97m8-modal"
									 data-toggle="modal">
									<div class="video-item-wrapper">
										<a href="javascript:void(0);" class="sublime-video-link">
											<img src="css/img/video/basimov.png"   alt="" class="img-responsive" />
											<img src="css/img/play.png" alt="play" class="play"/>
										</a>

									</div>
									<div class="video-text">
										<div class="text-16 bold-text text-left">
											Игорь Басимов
										</div>
										<div class="text-14 line-height-20 text-left">
											Интернет-магазин<br /> навигаторов 
											<a href="http://progps-rus.ru" class="link" target="_blank">
												progps-rus.ru
											</a>
										</div>
										<div class="video-money-wrapper">
											<div class="video-money-text">
												250&thinsp;000&thinsp;
												<span class="video-money" >i</span>
											</div>
											<div class="text-14 text-left">в месяц</div>
										</div>
									</div>
								</div>
							</div>


							<div class="video-row clearfix">
								<div class="col-xs-4  video-item"  data-target="#JPCLA8kjATM-modal"
									 data-toggle="modal">
									<div class="video-item-wrapper">
										<a href="javascript:void(0);" class="sublime-video-link">
											<img src="css/img/video/gongadze.png" 
												 alt="" class="img-responsive" />
											<img src="css/img/play.png" alt="play" class="play"/>
										</a>

									</div>
									<div class="video-text">
										<div class="text-16 bold-text text-left">
											Леван Гонгадзе
										</div>
										<div class="text-14 line-height-20 text-left">
											Интернет-магазин<br />
											рюкзаков<a href="http://energodin.ru" class="link" target="_blank"></a>
										</div>
										<div class="video-money-wrapper">
											<div class="video-money-text">
												250&thinsp;000&thinsp;
												<span class="video-money" >i</span>
											</div>
											<div class="text-14 text-left">в месяц</div>
										</div>
									</div>
								</div>
								<div class="col-xs-4  video-item" data-target="#CL8XmILXVTY-modal"
									 data-toggle="modal">
									<div class="video-item-wrapper">
										<a href="javascript:void(0);" class="sublime-video-link">
											<img src="css/img/video/glushan.jpg" alt="" class="img-responsive" />
											<img src="css/img/play.png" alt="play" class="play"/>
										</a>
									</div>
									<div class="video-text">
										<div class="text-16 bold-text text-left">
											Андрей Глушань
										</div>
										<div class="text-14 line-height-20 text-left">
											Интернет-магазин<br />
										xenonoptom.ru</div>
										<div class="video-money-wrapper">
											<div class="video-money-text">
												200&thinsp;000&thinsp;
												<span class="video-money" >i</span>
											</div>
											<div class="text-14 text-left">в месяц</div>
										</div>
									</div>
								</div>
								<div class="col-xs-4  video-item"  data-target="#VtlRVoJrxTY-modal"
									 data-toggle="modal">
									<div class="video-item-wrapper">
										<a href="javascript:void(0);" class="sublime-video-link">
											<img src="css/img/video/chernovskyi.png" alt="" class="img-responsive" />
											<img src="css/img/play.png" alt="play" class="play"/>
										</a>

									</div>
									<div class="video-text">
										<div class="text-16 bold-text text-left">
											Антон Черновский
										</div>
										<div class="text-14 line-height-20 text-left">
											Интернет-магазин<br />
											аккумуляторов akb.4fe.ru</div>
										<div class="video-money-wrapper">
											<div class="video-money-text">
												200&thinsp;000&thinsp;
												<span class="video-money" >i</span>
											</div>
											<div class="text-14 text-left">в месяц</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-3 orange-peoples">
							<div class="text-18 bold-text text-left">Рейтинг участников</div>
							<div class="rating-wrapper">
								<div class="rating-row clearfix">
									<div class="col-xs-7 text-14 rating-name ">Андрей Манько</div>
									<div class="col-xs-5 bold-text text-14 rating-money text-right">1&thinsp;200&thinsp;000&thinsp; <span class="rating-money-sign">a</span></div>
								</div>

								<div class="rating-row clearfix">
									<div class="col-xs-7 text-14 rating-name ">Роман Субботинов</div>
									<div class="col-xs-5 bold-text text-14 rating-money text-right">600&thinsp;000&thinsp;<span class="rating-money-sign">a</span></div>
								</div>

								<div class="rating-row clearfix">
									<div class="col-xs-7 text-14 rating-name ">Игорь Басимов</div>
									<div class="col-xs-5 bold-text text-14 rating-money text-right">250&thinsp;000&thinsp;<span class="rating-money-sign">a</span></div>
								</div>

								<div class="rating-row clearfix">
									<div class="col-xs-7 text-14 rating-name ">Леван Гонгадзе</div>
									<div class="col-xs-5 bold-text text-14 rating-money text-right">250&thinsp;000&thinsp;<span class="rating-money-sign">a</span></div>
								</div>
								<div class="rating-row clearfix">
									<div class="col-xs-7 text-14 rating-name ">Андрей Глушань</div>
									<div class="col-xs-5 bold-text text-14 rating-money text-right">200&thinsp;000&thinsp;<span class="rating-money-sign">a</span></div>
								</div>
								<div class="rating-row clearfix">
									<div class="col-xs-7 text-14 rating-name ">Антон Черновский</div>
									<div class="col-xs-5 bold-text text-14 rating-money text-right">250&thinsp;000&thinsp;<span class="rating-money-sign">a</span></div>
								</div>
							</div>
							<button type="button" class="btn-pink rating-btn" id="rating-btn">Попасть сюда</button>
						</div>
					</div>
				</div>    
			</div>

			<div class="gray-to-white-block schedule-block">
				<div class="bookmark"></div>
				<div class="container">
					<h2 class="text-center schedule-h2">
						Расписание занятий по неделям
					</h2>
					<div class="clearfix schedule-row-1">
						<div class="col-xs-6 col-48">
							<div class="shedule-text bold-20 schedule-subtitle text-left paddding-0-25">Первая</div>
							<div class="line"></div>
							<div class="col-xs-6">
								<div class="schedule-row">
									<div class="shedule-text shedule-italic text-14">Первый день</div>
									<div class="shedule-text text-14">Введение в Бизнес под ключ.
										Организационные вопросы. Выбор ниши.
									</div>
								</div>

								<div class="schedule-row">
									<div class="shedule-text shedule-italic text-14">Второй</div>
									<div class="shedule-text text-14">Обратная связь по нишам. 
										Работа с поставщиками
									</div>
								</div>

								<div class="schedule-row">
									<div class="shedule-text shedule-italic text-14">Третий</div>
									<div class="shedule-text text-14">УТП &mdash; уникальное торговое предложение.
									</div>
								</div>
							</div>
							<div class="col-xs-6 no-padding">
								<div class="schedule-row">
									<div class="shedule-text shedule-italic text-14">Четвёртый</div>
									<div class="shedule-text text-14">
										Продающий копирайтинг.
									</div>
								</div>
								<div class="schedule-row">
									<div class="shedule-text shedule-italic text-14">Пятый</div>
									<div class="shedule-text text-14">
										Продающий копирайтинг. Продолжение.
									</div>
								</div>

								<div class="schedule-row">
									<div class="shedule-text shedule-italic text-14 lock">Шестой</div>
									<div class="shedule-text text-14">
										Секретное занятие,<br /> узнаете на тренинге
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-3 no-padding col-23">
							<div class="shedule-text bold-20 schedule-subtitle text-left">Вторая</div>
							<div class="line"></div>
							<div class="schedule-row">
								<div class="shedule-text shedule-italic text-14">Первый день</div>
								<div class="shedule-text text-14">
									Копирайтинг. Обратная связь.
								</div>
							</div>
							<div class="schedule-row">
								<div class="shedule-text shedule-italic text-14">Второй</div>
								<div class="shedule-text text-14">
									Копирайтинг для интернет-магазина. Юзабилити.
								</div>
							</div>
							<div class="schedule-row">
								<div class="shedule-text shedule-italic text-14">Третий</div>
								<div class="shedule-text text-14">
									Обратная связь, разбор<br /> макетов ваших сайтов.
								</div>
							</div>
						</div>
						<div class="col-xs-3 no-padding">
							<div class="shedule-text bold-20 schedule-subtitle text-left">Третья</div>
							<div class="line"></div>
							<div class="schedule-row">
								<div class="shedule-text shedule-italic text-14 lock">Первый день</div>
								<div class="shedule-text text-14">
									Секретное занятие.
								</div>
							</div>
							<div class="schedule-row">
								<div class="shedule-text shedule-italic text-14">Второй</div>
								<div class="shedule-text text-14">
									Продажи без сайта (Аvito). 
									Самостоятельная работа над макетами сайтов для передачи<br /> дизайнерам.
								</div>
							</div>
							<div class="shedule-text text-14 couching">
								Начало <a href="javascript:void(0);" class="vip-couching text-14">VIP-коучингов.</a>
							</div>
						</div>
					</div>
					<div class="clearfix schedule-row-2">
						<div class="col-xs-3 padding-0-20">
							<div class="shedule-text bold-20 schedule-subtitle text-left">Четвёртая</div>
							<div class="line"></div>
							<div class="schedule-row">
								<div class="shedule-text shedule-italic text-14">Первый день</div>
								<div class="shedule-text text-14">Логистика
								</div>
							</div>
							<div class="schedule-row margin-bottom-16">
								<div class="shedule-text shedule-italic text-14">Второй</div>
								<div class="shedule-text text-14">Технические моменты самостоятельного создания сайтов.
								</div>
							</div>
							<div class="schedule-row">
								<div class="shedule-text shedule-italic text-14">Третий</div>
								<div class="shedule-text text-14">Юзабилити интернет-<br />магазина.
								</div>
							</div>
						</div>
						<div class="col-xs-3 col-23 no-padding">
							<div class="shedule-text bold-20 schedule-subtitle text-left">Пятая</div>
							<div class="line"></div>
							<div class="schedule-row">
								<div class="shedule-text shedule-italic text-14">Первый день</div>
								<div class="shedule-text text-14">
									Яндекс Директ.
								</div>
							</div>
							<div class="schedule-row margin-bottom-16">
								<div class="shedule-text shedule-italic text-14">Второй</div>
								<div class="shedule-text text-14">
									Google AdWords.
								</div>
							</div>
							<div class="schedule-row margin-bottom-16">
								<div class="shedule-text shedule-italic text-14">Третий</div>
								<div class="shedule-text text-14">
									Аналитика в интернет-<br />магазине
								</div>
							</div>
							<div class="schedule-row">
								<div class="shedule-text shedule-italic text-14">Четвертый</div>
								<div class="shedule-text text-14">
									Обратная связь. Аудит ваших рекламных кампаний<br /> и аналитики.
								</div>
							</div>
						</div>

						<div class="col-xs-3 col-23 no-padding">
							<div class="shedule-text bold-20 schedule-subtitle text-left">Шестая</div>
							<div class="line"></div>
							<div class="schedule-row">
								<div class="shedule-text shedule-italic text-14 lock">Первый день</div>
								<div class="shedule-text text-14">
									Секретное занятие
								</div>
							</div>
							<div class="schedule-row margin-bottom-16">
								<div class="shedule-text shedule-italic text-14">Второй</div>
								<div class="shedule-text text-14">
									Технологии влияния<br /> и готовые шаблоны<br />
									для увеличения продаж<br /> в два раза и выше.
								</div>
							</div>
							<div class="schedule-row">
								<div class="shedule-text shedule-italic text-14">Третий</div>
								<div class="shedule-text text-14">
									Продвинутые фишки Директа. Яндекс Маркет
								</div>
							</div>
						</div>
						<div class="col-xs-3 no-padding">
							<div class="shedule-text bold-20 schedule-subtitle text-left">Седьмая</div>
							<div class="line"></div>
							<div class="schedule-row">
								<div class="shedule-text shedule-italic text-14">Первый день</div>
								<div class="shedule-text text-14">
									Математика. Что считаем,<br />
									как считаем, для чего считаем.
								</div>
							</div>

							<div class="schedule-row margin-bottom-16">
								<div class="shedule-text shedule-italic text-14">Второй</div>
								<div class="shedule-text text-14">
									Обратная связь, ответы<br /> на вопросы.
								</div>
							</div>
							<div class="schedule-row margin-bottom-16">
								<div class="shedule-text shedule-italic text-14">Третий</div>
								<div class="shedule-text text-14">
									10 юзабилити ошибок, которые<br />не следует совершать на старте.
								</div>
							</div>

							<div class="schedule-row">
								<div class="shedule-text shedule-italic text-14">Четвёртый</div>
								<div class="shedule-text text-14">
									12 навыков высокоэффективного управляющего.
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix">
						<div class="col-xs-11 padding-20">
							<div class="shedule-text bold-20 schedule-subtitle text-left">Восьмая</div>
							<div class="line"></div>
							<div class="col-xs-3 col-2x9 no-padding">
								<div class="shedule-text shedule-italic text-14">Первый день</div>
								<div class="shedule-text text-14">
									Управление компанией.
								</div>
							</div>
							<div class="col-xs-3 col-marketing">
								<div class="shedule-text shedule-italic text-14">Второй</div>
								<div class="shedule-text text-14">
									E-mail маркетинг
								</div>
							</div>
							<div class="col-xs-6 col-prize">
								<div class="clearfix">
									<div class="prize pull-left"></div>
									<div class="pull-left">
										<div class="shedule-text shedule-italic text-14">Третий</div>
										<div class="shedule-text text-14">
											Закрытие тренинга. Стратегический план на год.
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="how-to-block">
				<div class="container padding-60">
					<h2 class="text-center">
						Как все происходит
					</h2>
					<div class="clearfix steps">
						<div class="col-xs-3">
							<div class="bold-30 text-left">
								1
							</div>
							<div class="text-14 text-left line-height-20 step-1-text">
								Оплачиваете счет, вносим вас в список участников.
							</div>
						</div>
						<div class="col-xs-3">
							<div class="bold-30 text-left">
								2
							</div>
							<div class="text-14 text-left line-height-20 step-2-text">
								За 5-7 дней до начала тренинга получаете 
								уведомление по эл.почте<br />и СМС.
							</div>
						</div>
						<div class="col-xs-3 no-padding">
							<div class="bold-30 text-left">
								3
							</div>
							<div class="text-14 text-left line-height-20">
								Проходите 28 он-лайн занятий<br />
								и два живых тренинга<br /> в Москве.
							</div>
						</div>
						<div class="col-xs-3">
							<div class="bold-30 text-left">
								4
							</div>
							<div class="text-14 text-left line-height-20">
								Применяете знания<br /> на практике и получаете бо&#x301;льшую прибыль.
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="white-block padding-do-now" id="tariffs-wrapper">
				<div class="container ">
					<div class="do-now-block">
						<h2 class="text-center">
							Действуйте прямо сейчас
						</h2>

						<div class="clearfix do-now-text-wrapper">
							<div class="col-xs-7 well special-price-block">
								<div class="text-14 text-left special-price">По специальной цене осталось 5 мест</div>
								<div class="text-20 text-left">
									Цены вырастут через <span class="counter"></span>
								</div>
							</div>
							<div class="col-xs-5 bottom-phone-wrapper">
								<div class="dark-gray-text text-14 bottom-gray-text text-left">Справка по телефону с 10 до 19:00 по будням</div>
								<div class="clearfix">
									<a href="tel:88003330763" class="bottom-phone pull-left"> 8 800 333-07-63</a>
									<div class="callback-wrapper pull-left callback-bottom-wrapper">
										<a href="javascript:void(0);" class="callback text-14 callback-bottom">Заказать звонок</a>
										<?php include 'modals/callbackForm.html'; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix tariffs-wrapper" >
						<div class="orange-tariff-wrapper">
							<div class="tariff-orange">
								<div class="tarif-border-block orange-tarif-border-block">
									<div class="clearfix rel-position">
										<div class="price-striked orange-price-striked pull-left text-18">
											30&thinsp;000
										</div>
										<div class="tariff-name orange-tariff-name pull-right text-right">
											новичок
										</div>
									</div>
									<div class="clearfix tariff-price-wrapper">
										<div class="tariff-price text-left">
											25&thinsp;900&thinsp;<span class="tariff-price-sign">i</span>
										</div>
										<div class="text-15 text-left">
											Цель
										</div>
										<div class="text-15 bold-text text-left">
											Начать свой бизнес
										</div>
									</div>
								</div>
								<div class="tariff-bottom-block line-height-20">
									<div class="tariff-row">
										<div class="text-15 text-left bold-text">
											Начальный
										</div>
										<div class="text-15 text-left">
											8 недель обучения. <br />
											28 онлайн-занятий.
										</div>
									</div>
									<div class="tariff-row">
										<div class="text-15 text-left">
											Шаблоны дизайна сайтов<br /> и рекламы.
										</div>
									</div>
									<div class="tariff-row">
										<div class="text-15 text-left">
											Сертификат<br /> о прохождении тренинга.
										</div>
									</div>
									<a href="http://imsider.justclick.ru/order/bpk3_novichok/?required=phone&amp;tag=<?php echo $tag; ?>"  target="_blank" class="btn-pink tariffs-link" data-tariff="Новичок">Начать бизнес</a>
								</div>
							</div>
						</div>
						<div class="violet-tariff-wrapper">
							<div class="tariff-tops tariff-tops-30">
								<div class="orange-top"></div>
							</div>
							<div class="tariff-violet">
								<div class="tarif-border-block violet-tarif-border-block">
									<div class="clearfix rel-position">
										<div class="price-striked violet-price-striked pull-left text-18">
											55&thinsp;000
										</div>
										<div class="violet-tariff-name pull-right text-right">
											вип
										</div>
									</div>
									<div class="clearfix tariff-price-wrapper">
										<div class="tariff-price violet-tariff-price text-left">45&thinsp;900&thinsp;<span class="tariff-price-sign">i</span>
										</div>
										<div class="text-15 text-left">
											Цель
										</div>
										<div class="text-15 bold-text text-left">
											<span class="goal-price">100&thinsp;000&thinsp;<span class="goal-price-sign">i</span></span> прибыли
										</div>
									</div>
								</div>
								<div class="tariff-bottom-block violet-bottom-block line-height-20">
									<div class="tariff-row ">
										<div class="text-15 text-left bold-text tariff-padding">
											Начальный + ВИП
										</div>
										<div class="text-15 text-left tariff-padding decorated-row decorated-row-1 ">
											Лайв-тренинг в Москве <br />
											с прямым эфиром<br /> на весь мир.
										</div>
									</div>
									<div class="tariff-row">
										<div class="text-15 text-left tariff-padding">
											Посещение офисов наших магазинов и 
											изучение<br /> бизнес-процессов
										</div>
									</div>
									<div class="tariff-row">
										<div class="text-15 text-left tariff-padding decorated-row decorated-row-2  ">
											4 личных занятия<br /> с тренером, оптимизация<br /> бизнеса.
										</div>
									</div>
									<div class="tariff-row">
										<div class="text-15 text-left tariff-padding line-height-16">
											Доступ в <a href="http://bitva3.imsider.ru/" class="violet-border-bottom bitva">Битву интернет-магазинов</a>
											для<br /> десяти лучших участников
										</div>
									</div>
									<div class="tariff-row">
										<div class="text-15 text-left tariff-padding decorated-row decorated-row-3 ">
											Одностраничный сайт<br /> и рекомендации от Николая<br />
											Федоткина
										</div>
									</div>
									<div class="tariff-padding">
										<a href="http://imsider.justclick.ru/order/bpk3_vip/?required=phone&amp;tag=<?php echo $tag; ?>" target="_blank" class="btn-pink tariffs-link" data-tariff="VIP">Начать бизнес</a>
									</div>
								</div>
							</div>
						</div>
						<div class="dark-tariff-wrapper">
							<div class="tariff-tops">
								<div class="dark-orange-top"></div>
								<div class="violet-top"></div>
							</div>
							<div class="tariff-dark">
								<div class="tarif-border-block dark-tarif-border-block">
									<div class="clearfix rel-position">
										<div class="price-striked dark-price-striked pull-left text-18">90&thinsp;000
										</div>
										<div class="violet-tariff-name pull-right text-right">
											ультра
										</div>
									</div>
									<div class="clearfix tariff-price-wrapper">
										<div class="tariff-price violet-tariff-price text-left">
											74&thinsp;900&thinsp;<span class="tariff-price-sign">i</span>
										</div>
										<div class="text-15 text-left">
											Цель
										</div>
										<div class="text-15 bold-text text-left">
											<span class="goal-price">300&thinsp;000&thinsp;<span class="goal-price-sign">i</span></span> прибыли
										</div>
									</div>
								</div>
								<div class="tariff-bottom-block violet-bottom-block line-height-20">
									<div class="tariff-row-1 ">
										<div class="text-15 text-left bold-text tariff-padding">
											Начальный + ВИП + Ультра
										</div>
										<div class="text-15 text-left tariff-padding">
											Еще 4 личных занятия с<br /> тренером
										</div>
									</div>
									<div class="tariff-row margin-bottom-15">
										<div class="text-15 text-left tariff-padding">
											Коучинговая сессия с <br /> 
											Николаем Федоткиным.
										</div>
									</div>
									<div class="tariff-row margin-0">
										<div class="text-15 text-left tariff-padding dark-decorated-row dark-decorated-row-1 ">
											Консультации тренеров <br />
											по эл.почте в течение года.
										</div>
									</div>
									<div class="tariff-row">
										<div class="text-15 text-left tariff-padding">
											Склад для хранения,<br /> 
											упаковки и доставки товаров.
										</div>
									</div>
									<div class="tariff-row">
										<div class="text-15 text-left tariff-padding line-height-20">
											Профессиональная работа<br /> 
											с вашим текстом.
										</div>
									</div>
									<div class="tariff-row">
										<div class="text-15 text-left tariff-padding dark-decorated-row dark-decorated-row-2 ">
											Городской московский номер<br /> 
											и 500 минут работы<br /> 
											колл-центра для обработки 
											<br /> 
											заказов
										</div>
									</div>
									<div class="tariff-row">
										<div class="text-15 text-left tariff-padding">
											Тренинги &laquo;Продающее<br />
											видео&raquo; и &laquo;Личная эффективность&raquo;
										</div>
									</div>
									<div class="tariff-row last-row-dark">
										<div class="text-15 text-left tariff-padding dark-decorated-row dark-decorated-row-3 ">
											Мастер-класс &laquo;Колл-центр<br /> на миллион своими руками&raquo;
										</div>
									</div>
									<div class="tariff-padding">
										<a href="http://imsider.justclick.ru/order/bpk3_ultra/?required=phone&amp;tag=<?php echo $tag; ?>"  target="_blank" class="btn-pink tariffs-link" data-tariff="Ultra-VIP">Начать бизнес</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="clearfix">
						<div class="col-xs-12">
							<div class="text-14 text-center">
								Нажимая на кнопку &laquo;Начать бизнес&raquo;, 
								вы принимаете условия <a href="#modalOffer" class="oferta" data-toggle="modal" >Договора-оферты</a>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="footer">
				<div class="container">
					<h2 class="text-center">Бесплатные материалы</h2>

					<div class=" text-18 line-height-26 text-center">
						Прежде, чем записать на курс, ознакомьтесь с готовыми картами достижения цели<br /> 
						и скачайте наш базовый тренинг. Материалы работают только при быстром внедрении.<br />
						Как будете готовы, записывайтесь.
					</div>
					<div class="clearfix footer-icon-wrapper">
						<div class="col-xs-8 col-xs-offset-2">
							<div class="footer-icon-col-1 pull-left">
								<a href="http://intensive.imsider.ru/" target="_blank" class="footer-icon-href">
									<span class="footer-icon footer-icon-1"></span>
									<span class="footer-icon-text" >
										<span class="footer-orange-border">Базовый мастер-класс</span><br /> 
										<span class="footer-orange-border">&laquo;Как открыть интернет-магазин&raquo;</span>
									</span>
								</a>
							</div>
							<div class="footer-icon-col-2 pull-left">
								<a href="http://download.imsider.ru/?hid=map" target="_blank" class="footer-icon-href">
									<span class="footer-icon footer-icon-2"></span>
									<span class="footer-icon-text" >
										<span class="footer-orange-border">Карта ниш</span>
									</span>
								</a>
							</div>
							<div class="footer-icon-col-3 pull-left">
								<a href="http://download.imsider.ru/?hid=plan"  target="_blank" class="footer-icon-href">
									<span class="footer-icon footer-icon-3"></span>
									<span class="footer-icon-text">
										<span class="footer-orange-border">Пошаговый план открыти</span>я<br /> 
										<span class="footer-orange-border">интернет-магазина</span>
									</span>
								</a>
							</div>
						</div>
					</div>
					<div class="clearfix">
						<div class="footer-special-price-wrapper">
							<div class="footer-form-top"></div>
							<div class="special-price-block footer-special-price clearfix">
								<div class="pull-left footer-special-wrapper">
									<div class="text-14 text-left special-price">По специальной цене осталось 5 мест</div>
									<div class="text-20 text-left">
										Цены вырастут через <span class="counter"></span>
									</div>
								</div>
								<div class="pull-right footer-btn-wrapper">
									<button type="button" class="btn-pink" id="go-to-tariffs">Записаться на тренинг</button>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix social-btns-wrapper">
						<div class="col-xs-12 ">
							<div class="footer-divider"></div>
							<div class="col-social">
								<div class="social-likes" data-counters="no" data-url="http://business.imsider.ru/">
									<div class="vkontakte" title="Поделиться ссылкой во Вконтакте">Поделиться</div>
									<div class="facebook" title="Поделиться ссылкой на Фейсбуке">Поделиться</div>
									<div class="odnoklassniki" title="Поделиться ссылкой в Одноклассниках">Одноклассники</div>
									<div class="mailru" title="Поделиться ссылкой в Моём мире">Мой мир</div>
								</div> 
							</div>
							<div class="footer-divider"></div>
						</div>
					</div>
					<div class="clearfix">
						<div class="container padding-25">
							<div class="col-xs-6">
								<div class="">
									Справка по телефону с 10 до 19:00 по будням
								</div>
								<div class="clearfix">
									<a href="tel:88003330763" 
									   class="bottom-phone footer-phone pull-left"> 
										8 800 333-07-63
									</a>
									<a href="mailto:support@imsider.ru" class="footer-email pull-left">
										<span class="footer-orange-border">support@imsider.ru</span>
									</a>
								</div>
							</div>
							<div class="col-footer-link">
								<div class="clearfix margin-bottom-10">
									<a href="#modalOffer" class="footer-link pull-left margin-right-20" data-toggle="modal" data-info="оферта">
										<span class="footer-link-dashed">Договор-оферта</span>
									</a>
									<a href="#modalDetails" class="footer-link pull-left" data-toggle="modal" data-info="Реквизиты">
										<span class="footer-link-dashed">Реквизиты</span>
									</a>
								</div>
								<div class="clearfix text-center">
									<a href="#modalPrivacy" class="footer-link" data-toggle="modal" data-info="Политика конфиденциальности">
										<span class="footer-link-dashed">Политика конфиденциальности</span>
									</a>
								</div>
							</div>
							<div class="col-xs-2">
								<div class="text-14 bold-text text-left social-text">Мы в соцсетях</div>
								<div class="clearfix ">
									<a class="social-item fb-item" href="http://facebook.com/groups/IMsider"></a>
									<a class="social-item tw-item" href="http://twitter.com/#!/imsider"></a>
									<a class="social-item vk-item" href="http://vk.com/club35101030"></a>
									<a class="social-item youtube-item" href="http://youtube.com/user/ImsiderTV"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- video modals -->
		<?php include_once("modals/videos.html"); ?>

		<!-- modalOffer -->
		<div class="modal fade docs-modal" id="modalOffer" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog docs-modal-dialog">
				<div class="modal-content docs-modal-content">
					<button type="button" class="close video-close" data-dismiss="modal"></button>
					<div class="modal-header docs-modal-header">
						<?php include_once("modals/modalOffer_title.html"); ?>
					</div>
					<div class="modal-body docs-modal-body ofert-body">
						<?php include_once("modals/modalOffer_body.html"); ?>
					</div>
				</div>
			</div>
		</div>
		<!-- /#modalOffer -->

		<!-- modalDetails -->
		<div class="modal fade docs-modal" id="modalDetails" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog docs-modal-dialog">
				<div class="modal-content docs-modal-content">
					<button type="button" class="close video-close" data-dismiss="modal"></button>
					<div class="modal-header docs-modal-header">
						<?php include_once("modals/modalDetails_title.html"); ?>
					</div>
					<div class="modal-body docs-modal-body ofert-body">
						<?php include_once("modals/modalDetails_body.html"); ?>
					</div>
				</div>
			</div>
		</div>
		<!-- /#modalDetails -->

		<!-- modalPrivacy -->
		<div class="modal fade docs-modal" id="modalPrivacy" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog docs-modal-dialog">
				<div class="modal-content docs-modal-content">
					<button type="button" class="close video-close" data-dismiss="modal"></button>
					<div class="modal-header docs-modal-header">
						<?php include_once("modals/modalPrivacy_title.html"); ?>
					</div>
					<div class="modal-body docs-modal-body ofert-body">
						<?php include_once("modals/modalPrivacy_body.html"); ?>
					</div>
				</div>
			</div>
		</div>
		<!-- /#modalPrivacy -->

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript">window.jQuery || document.write('<script type="text/javascript" src="js/jquery-1.11.0.min.js"><\/script>')</script>

		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/social-likes.min.js"></script>
		<script type="text/javascript" src="js/jquery.countdown.js"></script>
		<script type="text/javascript" src="js/jquery.countdown-ru.js"></script>
		<script type="text/javascript" src="js/jquery.reject.min.js"></script>
                <script type="text/javascript" src="js/jquery.activity.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>
