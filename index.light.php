<?
	function prepareTag(){
		$params = array('utm_medium', 'utm_source', 'utm_campaign');
		$parts = array();
		foreach($params as $field)
			if(isset($_GET[$field])){
				$value = strip_tags($_GET[$field]);
				$value = htmlspecialchars($value);
				$parts[] = $value;
			}
		if(empty($parts))
			return $_SERVER['HTTP_HOST'];
		else
			return implode('|',$parts);
	}
	$tag = prepareTag();

	// -- цикличный счетчик
    $now = time();
	$interval = 48 * 60 * 60;
	if(isset($_COOKIE['time_start']) && $_COOKIE['time_start'] > $now - $interval)
		$diff = $_COOKIE['time_start'] + $interval - $now;
	else {
		$diff = $interval;
		setcookie('time_start', $now, $now + $interval);
	}
	// --

	// -- счетчик на фиксированную дату
/*	$date2 = '2014-04-29 18:59:59'; // дата и время для счетчика
	$date1 = 'now';

	$diff = strtotime($date2) - strtotime($date1); // разница в секундах
	if ($diff < 0) $diff = 0;*/
	// --
    include_once("select-form-part.php");
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<link rel="shortcut icon" type="image/x-icon" href="img/icons/ico16.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/icons/ico144.png">
	<link rel="apple-touch-icon-precomposed" sizes="64x64" href="img/icons/ico64.png">
	<title>Интернет-магазин | Оффлайн-бизнес | Инвестирование</title>
	<link href='http://fonts.googleapis.com/css?family=Russo+One:400&subset=latin,cyrillic,latin-ext' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic&subset=cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!--link href="css/clear.css" type="text/css" rel="stylesheet">
	<link href="css/jquery.reject.css" type="text/css" rel="stylesheet">
	<link href="css/jquery.formstyler.css" type="text/css" rel="stylesheet">
	<link href="css/flipclock.css" type="text/css" rel="stylesheet">
	<link href="css/social-likes.css" type="text/css" rel="stylesheet">
	<link href="css/jquery-ui-1.9.2.custom.css" type="text/css" rel="stylesheet">
	<link href="css/common.css" type="text/css" rel="stylesheet">
	<link href="css/sprite_background.css" type="text/css" rel="stylesheet"-->
<?
	$css = Array();
	foreach (glob('css/*.css') as $filename) {
		array_push($css, substr($filename, 4));
	}
?>
	<link href="combiner/?type=css&files=<?= implode(",", $css); ?>" type="text/css" rel="stylesheet">
</head>
<body>
<section class="logo">
	<div class="wrap">
		<div class="current_date">16 июня</div>
		<div class="online-store-from-scratch">
			<span class="key">Новый бизнес под ключ</span>
			<br>
			<span class="key_info">Система быстрого открытия интернет-магазина<br> и бизнес-обучения в одном флаконе.</span>
			<br>
			<span class="slogan">
				Зарабатывайте <span class="blue">от 100 000 р. в месяц</span> с удовольствием.
				<br>
				Все технические и организационные проблемы<br> мы берем на себя.
			</span>
		</div>
		<div class="hr"></div>
		<p class="earn-wrapper">
			<a class="scroll-down-btn2 earn btn" data-scroll="1">
				<span class="upper">Узнать подробности</span>
			</a>
		</p>
		<div class="statistics">
			<p class="row-1">45 000 учеников</p>
			<p class="row-2">Более <span class="pink">1 млрд рублей</span> в год</p>
			<p class="row-3">оборот участников сообщества</p>
			<p class="row-4">Все тренеры &mdash; практики</p>
		</div>
		<div class="scroll-down-btn" data-scroll="1">скроллить вниз</div>
	</div>
	<div class="bg-bottom"></div>
</section>

<section class="video_block">
	<a name="scroll-1"></a>
	<div class="wrap">
		<h1>Бизнес под ключ. Причины пойти</h1>
		<p>&nbsp;</p>
		<div class="video-wrap">
			<div class="video" data-videoId="mKtlReCKeNU">
				<img src="img/video_large.jpg" width="853" height="480">
			</div>
		</div>
		<div class="social">
			<ul class="social-likes">
				<li class="vkontakte" title="Поделиться ссылкой Вконтакте">Вконтакте</li>
				<li class="facebook" title="Поделиться ссылкой на Фейсбуке">Facebook</li>
			</ul>
		</div>
		<div class="slide_link">
			<a href="#slide_more" class="btn">Узнать больше</a>
		</div>
	</div>
	<div class="bg-bottom"></div>
</section>

<section id="slide_more">
	<div class="bg-top"></div>
	<div class="wrap">
		<h1>Скорее всего у вас была попытка открыть бизнес. И не одна. И возможно, вы даже открыли его.</h1>
		<p>&nbsp;</p>
		<p>Тогда вы точно знаете сколько сил (и физических и моральных) и денег нужно потратить на такие штуки как:</p>
		<p>- создание сайта</p>
		<p>- подключение прямого номера и ответы на звонки</p>
		<p>- поиск и аренда склада</p>
		<p>- работа с курьерами</p>
		<p>- найм персонала</p>
		<p>- привлечение трафика</p>
		<p>&nbsp;</p>
		<p>Да, со временем, при должном упорстве и запасе финансовых средств вы сложите этот пазл и пройдете бизнес-квест.
			Мы сами это проходили, теряя месяцы и сотни тысяч рублей.</p>
		<p>&nbsp;</p>
		<p>Вам повезло значительно сильнее. Представляем систему от практиков, которые понимают то, с чем вы столкнулись сейчас на своем бизнес-пути.</p>
		<p>&nbsp;</p>
		<p>Имсайдер. Бизнес под ключ - это первая в мире система открытия бизнеса, где вы получаете полный
			набор необходимых инструментов: сайт, колл-центр с вежливыми операторами, склад и логистику, сопровождение ментора - практика, обучение и сообщество.</p>
		<p>&nbsp;</p>
		<p>Благодаря тому, что в систему Бизнес под ключ вступают сотни человек, вы получаете все преимущества и инструменты по цене средненького сайта.</p>
		<p>&nbsp;</p>
		<p>Это значит, что вы экономите:</p>
		<p>&nbsp;</p>
		<p>- сотни часов поисков правильного пути</p>
		<p>- десятки (а то и сотни) тысяч рублей на экспериментах с созданием сайта</p>
		<p>- силы и нервы на прохождении различных курсов и тренингов</p>
		<p>&nbsp;</p>
		<p>Это значит, что вы получаете:</p>
		<p>&nbsp;</p>
		<p>- готовый набор инструментов для открытия интернет-бизнеса</p>
		<p>- качественное обучение от практиков</p>
		<p>- менторскую поддержку на время обучения</p>
		<p>- готовый бизнес план по заработку от 100 000 р. в месяц</p>
	</div>
	<div class="bg-bottom"></div>
</section>

<?= selectBlock("Вы уже решили, кем хотите<br />вступить в игру?") ?>

<section class="leaderboard">
	<div class="bg-top"></div>
	<div class="wrap">
		<h1>Кейсы и отзывы некоторых участников системы Интернет-магазин под ключ</h1>
		<table>
			<tr class="purple_">
				<td class="num">
					<div>1</div>
				</td>
				<td class="leader">
					<div class="name">Николай Федоткин</div>
					<a href="http://video-shoper.ru" class="link">video-shoper.ru</a>
				</td>
				<td>Интернет-магазин<br />цифровой техники</td>
					  <td class="hist">
				  
				</td>
				<td class="money small">1 000 000 000 <span class="rub">i</span></td>
			</tr>
			<tr class="hidden-details only-video">
				<td colspan="5">
					<div class="hidden-wrap">
						<div class="video">
				  
						</div>
					</div>
				</td>
			</tr>
			<tr class="purple_">
				<td class="num">
					<div>2</div>
				</td>
				<td class="leader">
					<div class="name">Тимур Шаков</div>
				 <a href="http://deoshop.ru" class="link">Deoshop.ru</a>   
				</td>
				<td>Интернет-магазин <br />полезной косметики</td>
					  <td class="hist">
				  
				</td>
				<td class="money">500 000 <span class="rub">i</span></td>
			</tr>
			<tr class="hidden-details video-and-text">
			   <td colspan="5">
					<div class="hidden-wrap">
						<div class="video">
				  
						</div>
					</div>
				</td>
			</tr>
			<tr class="purple_">
				<td class="num">
					<div>3</div>
				</td>
				<td class="leader">
					<div class="name">Сергей Балакирев</div>
					<a href="http://kupitalon.ru" class="link">Kupitalon.ru</a>
				</td>
				<td>Интернет-магазин<br />самогонных аппаратов</td>
				<td class="hist">
				  
				</td>
				<td class="money">400 000<span class="rub">i</span></td>
			</tr>
			 <tr class="hidden-details only-video">
				<td colspan="5">
					<div class="hidden-wrap">
						<div class="video">
				  
						</div>
					</div>
				</td>
			</tr>
			<tr class="blue_">
				<td class="num">
					<div>4</div>
				</td>
				<td class="leader">
					<div class="name">Андрей Манько</div>
					<a href="http://www.energodin.ru/" class="link">energodin.ru</a>
				</td>
				<td>Интернет-магазин<br />инженерных коммуникаций</td>
				<td class="hist">
					<div class="show-btn">История успеха</div>
				</td>
				<td class="money small">1 200 000 <span class="rub">i</span></td>
			</tr>
			<tr class="hidden-details only-video">
				<td colspan="5">
					<div class="hidden-wrap">
						<div class="video" data-videoId="AW-Zebt7c0M">
							<img src="img/video_big.jpg" width="440" height="248">
						</div>
					</div>
				</td>
			</tr>
			<tr class="blue_">
				<td class="num">
					<div>5</div>
				</td>
				<td class="leader">
					<div class="name">Роман Субботинов</div>
				</td>
				<td>Интернет-магазин<br>покрасочных камер</td>
				<td class="hist">
					<div class="show-btn">История успеха</div>
				</td>
				<td class="money small">600 000 <span class="rub">i</span></td>
			</tr>
			<tr class="hidden-details only-video">
				<td colspan="5">
					<div class="hidden-wrap">
						<div class="video" data-videoId="W1oVXEpYE4w">
                        <img src="img/video_big.jpg" width="440" height="248">
                        </div>
					</div>
				</td>
			</tr>
			<tr class="blue_">
				<td class="num">
					<div>6</div>
				</td>
				<td class="leader">
					<div class="name">Игорь Басимов</div>
				   <a href="http://progps-rus.ru" class="link">progps-rus.ru</a>
				</td>
				<td>Интернет-магазин<br />
				навигаторов</td>
				<td class="hist">
					<div class="show-btn">История успеха</div>
				</td>
				<td class="money small">250 000 <span class="rub">i</span></td>
			</tr>
			<tr class="hidden-details only-video">
				<td colspan="5">
					<div class="hidden-wrap">
						<div class="video" data-videoId="EFtZaNh97m8">
							<img src="img/video_big.jpg" width="440" height="248">
						</div>
					</div>
				</td>
			</tr>
			<tr class="blue_">
				<td class="num">
					<div>7</div>
				</td>
				<td class="leader">
					<div class="name">Леван Гонгадзе </div>
				</td>
				<td>Интернет-магазин<br />
				рюкзаков</td>
				<td class="hist">
					<div class="show-btn">История успеха</div>
				</td>
				<td class="money small">250 000 <span class="rub">i</span></td>
			</tr>
			<tr class="hidden-details only-video">
				<td colspan="5">
					<div class="hidden-wrap">
						<div class="video" data-videoId="JPCLA8kjATM">
							<img src="img/video_big.jpg" width="440" height="248">
						</div>
					</div>
				</td>
			</tr>
			<tr class="blue_">
				<td class="num">
					<div>8</div>
				</td>
				<td class="leader">
					<div class="name">Андрей Глушань</div>
				   <a href="http://xenonoptom.ru/" class="link">xenonoptom.ru</a>
				</td>
				<td>Интернет-магазин<br />ксенона</td>
				<td class="hist">
					<div class="show-btn">История успеха</div>
				</td>
				<td class="money small">200 000 <span class="rub">i</span></td>
			</tr>
			<tr class="hidden-details only-video">
				<td colspan="5">
					<div class="hidden-wrap">
						<div class="video" data-videoId="CL8XmILXVTY">
							<img src="img/video_big.jpg" width="440" height="248">
						</div>
					</div>
				</td>
			</tr>
			<tr class="blue_">
				<td class="num">
					<div>9</div>
				</td>
				<td class="leader">
					<div class="name">Антон Черновский</div>
				   <a href="http://akb.4fe.ru" class="link">akb.4fe.ru</a>
				</td>
				<td>Интернет-магазин<br />
				аккумуляторов</td>
				<td class="hist">
					<div class="show-btn">История успеха</div>
				</td>
				<td class="money small">200 000 <span class="rub">i</span></td>
			</tr>
			<tr class="hidden-details only-video">
				<td colspan="5">
					<div class="hidden-wrap">
						<div class="video" data-videoId="VtlRVoJrxTY">
							<img src="img/video_big.jpg" width="440" height="248">
						</div>
					</div>
				</td>
			</tr>
			<tr class="you">
				<td class="num">
					<div>?</div>
				</td>
				<td class="leader">
					<div class="name">Вы</div>
				</td>
				<td>Пока не известно</td>
				<td class="hist"></td>
				<td class="money">0 <span class="rub">i</span></td>
			</tr>
		</table>
	</div>
	<div class="bg-bottom"></div>
</section>

<section class="get-book">
	<div class="wrap">
		<h1>Вы будете идти к результату с практиками</h1>

		<p>Владельцы интернет-магазинов <a href="http://deoshop.ru" target="_blank">Deoshop.ru</a>, <a href="http://kupitalon.ru" target="_blank">Кupitalon.ru</a>, <a href="http://video-shoper.ru/" target="_blank">video-shoper.ru</a> и других бизнесов с оборотом более 100 млн руб в месяц</p>
		<p>Особо радует то, что в Бизнесе под ключ участников не нужно "пинать". Это не тренинг в стиле "концлагерь". Начинающие предприниматели смотрят на результаты друг друга, на то, как открываем бизнесы мы в прямом эфире и просто не могут не действовать.</p>

		<div class="co-owners">
			<div class="col col-1">
				<div class="photo">
					<img src="img/res/photo-1.png" width="300" height="489">
				</div>
				<div class="text-wrap">
					<div class="name">Сергей<br />Балакирев</div>
					<div class="about">
						<p>Автор &laquo;Формулы быстрого старта интернет-магазинов&raquo;, совладелец действующих интернет-бизнесов.</p>
						<p>Основной проект &mdash; Deoshop.ru, один из лидеров рынка нишевой косметики.</p>
					</div>
				</div>
			</div>
			<div class="col col-2">
				<div class="photo">
					<img src="img/res/photo-2.png" width="300" height="489">
				</div>
				<div class="text-wrap">
					<div class="name">Тимур<br />Шаков</div>
					<div class="about">
						<p>Основатель действующих интернет-проектов с общим оборотом более 2 млн. долларов в год, совладелец действующих<br />интернет-бизнесов.</p>
						<p>Основной проект &mdash; Deoshop.ru, один из лидеров рынка нишевой косметики.</p>
					</div>
				</div>
			</div>
			<div class="col col-3">
				<div class="photo">
					<img src="img/res/photo-3.png" width="300" height="499">
				</div>
				<div class="text-wrap">
					<div class="name">Николай<br />Федоткин</div>
					<div class="about">
						<p>Владелец компаний<br />video-shoper.ru, bodo.ru<br />и других бизнесов с оборотом 1 миллиард рублей в год.</p>
						<p>Управляет более чем 136 сотрудниками удаленно через айфон.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="clear"></div>

		<div class="logos">
			<img src="img/logos/megaindex.png" class="megaindex logo" width="160" height="25">
			<img src="img/logos/lifemarketing.png" class="lifemarketing logo" width="163" height="14">
			<img src="img/logos/et2011.png" class="et2011 logo" width="83" height="50">
			<img src="img/logos/et2013.png" class="et2013 logo" width="99" height="40">
			<img src="img/logos/rif.png" class="rif logo" width="160" height="30">
			<img src="img/logos/eretailforum.png" class="eretailforum logo" width="160" height="27">
			<img src="img/logos/otk.png" class="otk logo" width="180" height="13">
			<img src="img/logos/russia24.png" class="russia24 logo" width="150" height="42">
		</div>

		<p>
			&mdash; Без технических знаний<br />
			&mdash; Без опыта в бизнесе<br />
			&mdash; Без навыков продаж<br />
			С таким &laquo;комплектом начинающего бизнесмена&raquo; сделали первые шаги в бизнесе практически<br />все участники бизнес-системы Имсайдера.
		</p>

		<p>Кстати, многие секреты и фишки мы раскрыли в книге Планета Продаж, которая только<br />готовится к изданию. А вы можете скачать ее прямо сейчас, чтобы максимально качественно<br />подготовиться к запуску своего нового бизнеса.</p>
	</div>
	<div class="bg-bottom"></div>
</section>

<section class="why-it-works">
	<div class="bg-top"></div>
	<div class="wrap">
		<h1 class="purple">Почему система &laquo;Имсайдер. Бизнес под ключ&raquo; работает?</h1>

		<p>Наши методики действительно работают — это легко подтверждают истории наших учеников.<br />Но как и почему они работают? В чем их отличие от огромного количества тренингов из<br />разряда &laquo;быстрые деньги&raquo;?</p>
		<p><span class="pink">Вот как минимум 4 причины</span>, почему вы можете быть уверены в том, что Бизнес под ключ поможет вам зарабатывать хорошие деньги:</p>

		<div class="reason">
		  <div class="icon icon-1"></div>
			<strong>Вы будете<br />действовать</strong>
			<p>А не просто слушать.<br />И в итоге получите свой собственный полностью готовый бизнес, который уже будет приносить вам прибыль.</p>
		</div>

		<div class="reason">
			<div class="icon icon-2"></div>
			<strong>Вы получите только<br />практические знания</strong>
			<p>Никакой абстрактной теории, которую вы все равно забудете. Знания полученные в системе легко внедрять и применять буквально сразу же.</p>
		</div>

		<div class="reason">
			<div class="icon icon-3"></div>
			<strong>Вы увидите как наши<br />методики приносят<br />прибыль</strong>
			<p> Тренеры на примере своих бизнесов передадут вам методики и подкорректируют ваши действия.</p>
		</div>

		<div class="reason">
			<div class="icon icon-4"></div>
			<strong>Вы поймете связь между<br />вашими действиями<br />и результатом</strong>
			<p>Это главное преимущество системы. Здесь вы научитесь осознавать какие из ваших поступков дают новый эффект.</p>
		</div>

		<div class="clear"></div>

		<p>Во многих тренингах большинство учеников ориентируется на процесс. Применяя систему &laquo;Имсайдер. Бизнес под ключ&raquo; вы будете исходить из результата. Который не заставит себя ждать.</p>

	</div>
	<div class="bg-bottom"></div>
</section>

<section class="learning-process">
	<div class="bg-top"></div>
	<div class="wrap">
		<h1>Как происходит обучение</h1>
		<div class="icons"></div>

		<div class="texts">
			<div class="step-1">Вы выписываете<br />и оплачиваете счет</div>
			<div class="step-2">Мы вносим вас в список<br />участников</div>
			<div class="step-3">За 3-4 дня до начала тренинга вы<br />получаете уведомление на e-mail и sms<br />о начале. Также вы в любой момент<br />можете задать вопросы в клиентский<br />отдел</div>
			<div class="step-4">Ваш результат</div>
			<div class="step-5">Два живых тренинга<br />в Москве с LIVE трансляциями<br />на весь мир</div>
			<div class="step-6">Онлайн-занятия по вечерам<br />(в 19:30 или 21:00 мск) — с доступом<br />к личному кабинету с местом для<br />отчетов, записями и тезисами занятий<br />и доступом к закрытой группе в VK</div>
			<div class="step-7">Последующая<br />поддержка и бесплатное<br />обучение</div>
			<div class="step-8">PROFIT</div>
		</div>
	</div>
	<div class="bg-bottom"></div>
</section>

<?= selectBlock("Уже решили что вам нужно?") ?>

<section class="seriousness">
	<div class="bg-top"></div>
	<div class="wrap">
		<h1>Кстати, мы привыкли работать<br />с серьезными людьми</h1>

		<p>Вы должны понимать, что результат в первую очередь зависит от вас, легких, быстрых денег и халявы в этом тренинге вы не найдете. Если вы не знакомы с нашим проектом, то прежде чем записаться в этот тренинг, ознакомьтесь с готовыми Картами достижения цели и скачайте наш базовый тренинг бесплатно.</p>

		<div class="get-quest-form">
			<div class="girl-3"></div>
			<div class="girl-message">
				<div class="arrow"></div>
				<div class="message">Привет, меня зовут Анжели. Что ты бы хотел узнать и получить на тренинге?</div>
				<div class="message hidden">
					<p>Для успешного прохождения тебе понадобится:<br />
					&mdash; <a href="http://download.imsider.ru/?hid=map" target="_blank">Карта ниш</a><br />
					&mdash; <a href="http://download.imsider.ru/?hid=plan" target="_blank">Пошаговый план открытия интернет-магазина</a><br />
					&mdash; <strong>Базовый тренинг &laquo;<a href="http://imsider.ru/wppage/sekretnaya-stranitsa-s-bitvoy-internet-magazinov/" target="_blank">Битва интернет-магазинов</a>&raquo;</strong></p>
					<a class="scroll-down-btn2 btn" data-scroll="3">Скачал, что дальше?</a>
				</div>
				<div class="message hidden">
					<p>Для успешного прохождения тебе понадобится:<br />
					&mdash; <a href="http://download.imsider.ru/?hid=map" target="_blank">Карта ниш</a><br />
					&mdash; <a href="http://download.imsider.ru/?hid=plan" target="_blank">Пошаговый план открытия интернет-магазина</a><br />
					&mdash; <strong>Базовый тренинг &laquo;<a href="http://imsider.ru/wppage/sekretnaya-stranitsa-s-bitvoy-internet-magazinov/" target="_blank">Битва интернет-магазинов</a>&raquo;</strong></p>
					<a class="scroll-down-btn2 btn" data-scroll="3">Скачал, что дальше?</a>
				</div>
				<div class="message hidden">
					<p>Для успешного прохождения тебе понадобится:<br />
					&mdash; <a href="http://download.imsider.ru/?hid=map" target="_blank">Карта ниш</a><br />
					&mdash; <a href="http://download.imsider.ru/?hid=plan" target="_blank">Пошаговый план открытия интернет-магазина</a><br />
					&mdash; <strong>Базовый тренинг &laquo;<a href="http://imsider.ru/wppage/sekretnaya-stranitsa-s-bitvoy-internet-magazinov/" target="_blank">Битва интернет-магазинов</a>&raquo;</strong></p>
					<a class="scroll-down-btn2 btn" data-scroll="3">Скачал, что дальше?</a>
				</div>
			</div>
			<div class="form">
				<div class="select">
					<p><label><input type="radio" name="get-quest-radio" value="1">Хочу определиться со своей нишей</label></p>
					<p><label><input type="radio" name="get-quest-radio" value="2">Я хочу открыть свой первый интернет-бизнес</label></p>
					<p><label><input type="radio" name="get-quest-radio" value="3">Магазин свой есть, но хочу получить советы практиков, как его вывести на новый уровень</label></p>
					<button class="blue-btn" onclick="getQuest(this);">Ответить</button>
				</div>
			</div>
		</div>
	</div>
	<div class="bg-bottom"></div>
</section>

<a name="scroll-3"></a>
<section id="qwest-3" class="program-table">
	<div class="wrap">
		<h1 class="purple">Особая программа</h1>
		<h2>Помимо  готовых бизнес-инструментов вы получаете полноценный практический  бизнес-тренинг.</h2>

		<div class="table">
		  <div class="header blue-bg">Модуль 1</div>
			<div class="body">
				<div class="medal medal-1">
					<strong>Получите знак отличия:</strong>
					<div class="hr"></div>
					<p>У матросов нет<br />вопросов</p>
				</div>
				<div class="content">
					<strong>Создаём Оффер:</strong>
					<ul>
						<li>25 способов выбрать нишу</li>
						<li>Тактика союзничества с поставщиками</li>
						<li>18 ошибок, которые растянут старт на 3 месяца</li>
						<li>Что скрывают поставщики на первом сеансе связи</li>
						<li>Как за три шага определить прибыльность ниши</li>
						<li>Что такое УТП и как правильно его применять</li>
						<li>Без каких трех фишек у вас точно ничего не купят</li>
						<li>Какая должна быть маржа, чтобы точно не разориться</li>
						<li>Еще примерно 134 «фишки» и тактики по выбору и доработки правильного оффера</li>
					</ul>
					<strong>Находим трафик и разгоняем посещаемость:</strong>
					<ul>
						<li>Какой трафик подойдет конкретно вашему проекту</li>
						<li>Быстрые запуски и тестирования с помощью контекстной рекламы</li>
						<li>12 источников трафика (пробы и тесты)</li>
						<li>Как правильно работать с социальными сетями</li>
						<li>Для чего интернет-магазину группа &laquo;Вконтакте&raquo;</li>
						<li>Как не разориться на контекстной рекламе</li>
						<li>Пошаговая инструкция по запуску SEO методик для интернет-магазина с минимальными затратами</li>
						<li>Директ Мэйл — что это и почему он приносит нам сотни тысяч каждый месяц</li>
						<li>Почему 99% посетителей уходят с вашего сайта с пустыми руками</li>
						<li>Как &laquo;ловить&raquo; посетителей и увеличивать конверсию</li>
						<li>Список лучших баз для хранения ваших клиентов</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="table">
			<div class="header azure-bg">Модуль 2</div>
			<div class="body">
				<div class="medal medal-2">
					<strong>Получите знак отличия:</strong>
					<div class="hr"></div>
					<p>Первая прибыль</p>
				</div>
				<div class="content">
					<strong>Разгоняем конверсию и увеличиваем прибыль:</strong>
					<ul>
						<li>Почему у интернет-магазинов такая маленькая конверсия</li>
						<li>9 простых шагов для увеличения конверсии</li>
						<li>Как сделать свой сайт продающим: 15 главных секретов юзабилити</li>
						<li>Как правильно настроить аналитику и статистику</li>
						<li>Как с помощью аналитики увеличивать прибыль</li>
						<li>Главные критерии успешности и провальности вашего сайта</li>
						<li>Что такое юзабилити простыми словами</li>
						<li>Тестирования в домашних условиях (пошаговая инструкция)</li>
					</ul>
					<strong>Технические вопросы:</strong>
					<ul>
						<li>Как определиться с движком за 10 минут</li>
						<li>Как запустить сайт за 28 минут</li>
						<li>Как сэкономить на услугах фрилансеров и студий до 100 000 руб. на старте</li>
						<li>9 неизменных правил работы с фрилансерами</li>
						<li>Какие работы с сайтом нужно обязательно сделать на старте</li>
						<li>Тактика работы с программистами. Как не впасть в зависимость</li>
						<li>Хостинги, домены и прочие &laquo;радости&raquo;. Чек лист успешного выбора</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="table">
			<div class="header pink-bg">Модуль 3</div>
			<div class="body">
				<div class="medal medal-3">
					<strong>Получите знак отличия:</strong>
					<div class="hr"></div>
					<p>300 000 не предел</p>
				</div>
				<div class="content">
					<strong>Технологии будущего и настоящего:</strong>
					<ul>
						<li>Direct-mail</li>
						<li>Многошаговые продажи</li>
						<li>Продажи через конкурсы</li>
						<li>Как продавать с помощью обучения</li>
						<li>Что лучше продавать в социальных сетях</li>
						<li>Как продавать с помощью Youtube</li>
					</ul>
					<strong>Множество полезных &laquo;фишек&raquo;:</strong>
					<ul>
						<li>Юридические вопросы на старте</li>
						<li>Бизнесовые фишки</li>
						<li>Личностный рост</li>
						<li>Аутсорсинг и делегирование</li>
						<li>Автоматизация бизнеса</li>
					</ul>
				</div>
			</div>
		</div>
        
        <div class="table">
			<div class="header pink-bg">Модуль 4</div>
			<div class="body">
				<div class="medal medal-3">
					<strong>Получите знак отличия:</strong>
					<div class="hr"></div>
					<p>На пути к миллиону</p>
				</div>
				<div class="content">
					<strong>Оффлайн-бизнес и инвестирование:</strong>
					<ul>
						<li>Как открыть оффлайн-бизнес без вложений</li>
						<li>В какие ниши стоит вкладываться</li>
						<li>Как купить бизнес</li>
						<li>Как продать бизнес</li>
						<li>Как привлечь инвесторов в свой бизнес</li>
					</ul>	
			  </div>
			</div>
		</div>

		<div class="footer">После каждой недели мы проводим мини-экзамен, прохождение которого гарантирует пропуск<br />на следующий этап обучения и бонусные касты.</div>
	</div>
</section>

<section class="for-monsters">
	<div class="bg-top"></div>
	<div class="wrap">
		<h1>Для монстров</h1>
		<h2>Коучинговый месяц &laquo;Усиление&raquo;. Серьезные задачи.</h2>
		<p>Придется больше работать по алгоритмам, которые уже дали результат, но результат стоит того.</p>

		<div class="items">
			<div class="item auto">Автоматизация бизнеса</div>
			<div class="item branding">Быстрый брендинг</div>
			<div class="item marketing">E-mail маркетинг на миллион</div>
			<div class="item copyrighting">Копирайтинг больших магазинов</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="bg-bottom"></div>
</section>

<section class="reviews">
	<div class="bg-top"></div>
	<div class="wrap">
		<h1>Отзывы наших учеников</h1>
		<p>Минут на 10 нам нужно погрузиться в полную тишину, чтобы не пропустить ни одной фишки из историй успеха наших учеников.</p>

		<div class="cols">
			<div class="col">
				<div class="col-item bg-25">
					<div class="name">Ольга Серякова</div>
                    <a href="http://искатель.дляпрофи.рф/">искатель.дляпрофи.рф</a> 
					
				  <div class="video" data-videoId="kyp9u9qPDzU">
						<img src="img/video.jpg" width="300" height="200">
					</div>
					<p>За полтора месяца работы чистая прибыль составила 250 000 <span class="rub">i</span></p>
				</div>
				<div class="col-item bg-26">
					<div class="name">Сергей Монастырский</div>
					<a href="http://gps-radar.ru/" target="_blank">gps-radar.ru/</a>
					<div class="video" data-videoId="PkYhcPtEQ6g">
						<img src="img/video.jpg" width="300" height="200">
					</div>
					<p class="big last">Прибыль поднялась с 30 000 до 170 000 <span class="rub">i</span>, а оборот достиг 2 100 000 <span class="rub">i</span></p>
				</div>
			</div>
			<div class="col">
				<div class="col-item bg-27">
					<div class="name">Мария Белякова</div>
					<a href="http://vsenamestax.ru" target="_blank">vsenamestax.ru</a>
					<div class="video" data-videoId="n19nd8NQa5c">
						<img src="img/video.jpg" width="300" height="200">
					</div>
					<p class="big-2">За время тренинга <br />оборот вырос на 65%</p>
				</div>
				<div class="col-item bg-28">
					<div class="name">Игорь Казаков</div>
					<a href="http://workoutzone.ru/" target="_blank">workoutzone.ru</a>

					<div class="video" data-videoId="7iOtg-1uUKk">
						<img src="img/video.jpg" width="300" height="200">
					</div>
					<p class="big last">Чистая прибыль составила 150 000 <span class="rub">i</span> в месяц</p>
				</div>
			</div>
			<div class="col">
				<div class="col-item bg-25">
					<div class="name">Светлана Гарина</div>
					<a href="http://kinderama.ru" target="_blank">kinderama.ru</a>
					<div class="video" data-videoId="cIz49eCUCBw">
						<img src="img/video.jpg" width="300" height="200">
					</div>
					<p>Вышли на средний объем &mdash; 10 заказов в день со средним<br />чеком от 1000 до 8000<span class="rub">i</span></p>
				</div>
				<div class="col-item bg-26">
					<div class="name">Ольга Щеглова</div>
					<a href="http://www.network-it.ru/" target="_blank">www.network-it.ru</a>
					<div class="video" data-videoId="E5Bkjv3yoiQ">
						<img src="img/video.jpg" width="300" height="200">
					</div>
					<p class="last" style="margin-top: -5px;">Месячный оборот моего интернет-магазина - 1 500 000 <span class="rub">i</span>, чистая прибыль - 150 000 <span class="rub">i</span></p>
				</div>
			</div>
		</div>
	</div>
	<div class="bg-bottom"></div>
</section>
<section class="reviews">
  <div class="bg-top"></div>
  <div class="wrap">
	<h1>Расписание занятий.<br>Конкретно, без трюков</h1>
	  <p><strong>НЕДЕЛЯ 1</strong></p>
		<p><strong>ДЕНЬ 1</strong></p>
		<p>Введение в Бизнес под ключ<strong>. </strong>Организационные вопросы. Выбор ниши</p>
		<p><strong>ДЕНЬ 2</strong></p>
		<p>Обратная связь по нишам. Работа с поставщиками.</p>
		<p><strong>ДЕНЬ 3</strong></p>
		<p>УТП</p>
	<p><strong>ДЕНЬ 4</strong></p>
		<p>Продающий копирайтинг</p>
		<p><strong>ДЕНЬ 5</strong></p>
        <p>Продающий копирайтинг (продолжение)</p>
        <p><strong>ДЕНЬ 6</strong></p>
        <p>Обратная связь по нишам</p>
		<p>&nbsp;</p>
	<p><strong>НЕДЕЛЯ 2</strong> </p>
		<p><strong>ДЕНЬ 1</strong></p>
	<p>Обратная связь по копирайтингу</p>
	<p><strong>ДЕНЬ 2</strong></p>
	<p>Копирайтинг интернет-магазиа. Юзабилити</p>
	<p><strong>ДЕНЬ 3</strong></p>
		<p>Обратная связь, разбор макетов ваших сайтов</p>
		<p>&nbsp;</p>
		<p><strong>НЕДЕЛЯ 3</strong></p>
    <p><strong>ДЕНЬ 1</strong></p>
        <p>Обратная связь по макетам</p>
        <p><strong>ДЕНЬ 2</strong></p>
        <p>Продажи без сайта (Avito) </p>
        <p>Самостоятельная работа над макетами сайтов для передачи дизайнерам. Начало VIP-коучингов. </p>
        <p>&nbsp;</p>
		<p><strong>НЕДЕЛЯ 4</strong></p>
		<p><strong>ДЕНЬ 1</strong></p>
		<p>Логистика</p>
		<p><strong>ДЕНЬ 2</strong></p>
		<p>Технические моменты самостоятельного создания сайтов</p>
	<p><strong>ДЕНЬ 3</strong></p>
		<p>Юзабилити интернет-магазина</p>
		<p>&nbsp;</p>
		<p><strong>НЕДЕЛЯ 5</strong></p>
		<p><strong>ДЕНЬ 1</strong></p>
		<p>Яндекс Директ</p>
		<p><strong>ДЕНЬ 2</strong></p>
		<p>Google AdWords</p>
		<p><strong>ДЕНЬ 3</strong></p>
		<p>Аналитика в интернет-магазине</p>
		<p><strong>ДЕНЬ 4</strong></p>
		<p>Обратная связь. Аудит ваших рекламных кампаний и аналитики</p>
		<p>&nbsp;</p>
		<p><strong>НЕДЕЛЯ 6</strong></p>
		<p><strong>ДЕНЬ 1</strong></p>
	<p>Копирайтинг интернет-магазина</p>
		<p><strong>ДЕНЬ 2</strong></p>
		<p>Обратная связь. Разбор ваших сайтов</p>
		<p><strong>ДЕНЬ 3</strong></p>
		<p>Продвинутые фишки Директа. Яндекс Маркет</p>
		<p>&nbsp;</p>
		<p><strong>НЕДЕЛЯ 7</strong></p>
		<p><strong>ДЕНЬ 1</strong></p>
		<p>Математика в ИМ (что считаем, как считаем, для чего считаем)</p>
		<p><strong>ДЕНЬ 2</strong></p>
		<p>Обратная связь, ответы на вопросы</p>
		<p><strong>ДЕНЬ 3</strong></p>
		<p>10 юзабилити ошибок которые не следует совершать на старте</p>
		<p><strong>ДЕНЬ 4</strong></p>
		<p>12 навыков высокоэффективного управляющего интернет-магазина</p>
		<p>&nbsp;</p>
		<p><strong>НЕДЕЛЯ 8</strong></p>
		<p><strong>ДЕНЬ 1</strong></p>
		<p>Управление компанией</p>
		<p><strong>ДЕНЬ 2</strong></p>
		<p>Email-маркетинг</p>
		<p><strong>ДЕНЬ 3</strong></p>
		<p>Закрытие тренинга</p>

		
  </div>
	<div class="bg-bottom"></div>
</section>

<?= selectBlock("Действуйте прямо сейчас") ?>

<section class="footer">
	<div class="bg-top"></div>
	<div class="wrap">
		<h3>Есть вопросы?</h3>
		<div class="phone">
			<div class="number">8 800 333-07-63</div>
			<div class="time">с 10:00 до 19:00 (мск)</div>
		</div>
		<div class="email">
			<a href="mailto:support@imsider.ru">support@imsider.ru</a>
			<div class="time">круглосуточно</div>
		</div>
		<div class="rec">
			<div class="show-rec" onclick="rec.showRec();">Как записаться на курс?</div>
			<ul>
				<li><a href="http://imsider.ru/wppage/publichnyiy-dogovor-oferta-po-okazaniyu-informatsionno-konsultativnyih-uslug/" target="_blank">Договор-оферта</a></li>
				<li><a href="http://imsider.ru/wppage/politika-konfidentsialnosti/" target="_blank">Политика конфиденциальности</a></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
</section>

<div class="overlay"></div>
<div class="popup">
	<div class="window">
		<div class="close" onclick="rec.hideRec();"></div>
		<h1>Как записаться на курс?</h1>

		<div class="texts">
			<div class="step-1">В таблице с ценами выберите<br />пакетами участия и <span class="blue">нажмите<br />кнопку &laquo;Победить&raquo;.</span></div>
			<div class="step-2">Заполните обязательные<br />поля. <span class="blue">Щелкните на кнопку<br />&laquo;продолжить&raquo;.</span></div>
			<div class="step-3">
				Выберите удобную для вас систему оплаты:
				<ul class="systems">
					<li>RBK Money<div class="desc">оплата банковской картой Российского банка, в салоне связи Евросеть, с электронного кошелька RBK Money и др.</div></li>
					<li>Robokassa<div class="desc">оплата банковской картой, Яндекс деньгами и другими распространенными способами</div></li>
					<li>Оплата через терминал Qiwi</li>
					<li>Оплата через банк<div class="desc">Сбербанк РФ и другие банки России</div></li>
					<li>WebMoney</li>
					<li>Оплата со счета мобильного телефона<div class="desc">выбрать способ оплаты Qiwi</div></li>
					<li>Paypal<div class="desc">Оплата банковской картой из-за границы</div></li>
					<li>За наличные:<div class="desc">курьер приедет, произведет оплату и подтвердит участие в следующие города:</div></li>
				</ul>
				<div class="city">
					<table>
						<tr>
							<td>
								<div>&mdash; Нижний Новгород</div>
								<div>&mdash; Тулу</div>
								<div>&mdash; Калугу</div>
								<div>&mdash; Тверь</div>
								<div>&mdash; Владимир</div>
								<div>&mdash; Ярославль</div>
								<div>&mdash; Кострому</div>
								<div>&mdash; Орел</div>
								<div>&mdash; Брянск</div>
								<div>&mdash; Иваново и Рязань</div>
							</td>
							<td>
								<div>&mdash; Пермь</div>
								<div>&mdash; Краснодар</div>
								<div>&mdash; Тюмень</div>
								<div>&mdash; Вологду</div>
								<div>&mdash; Ростов-на-Дону</div>
								<div>&mdash; Красноярск</div>
								<div>&mdash; Киров</div>
								<div>&mdash; Новосибирск</div>
								<div>&mdash; Казань</div>
								<div>&mdash; Екатеринбург</div>
							</td>
							<td>
								<div>&mdash; Мурманск</div>
								<div>&mdash; Волгоград</div>
								<div>&mdash; Омск</div>
								<div>&mdash; Самару</div>
								<div>&mdash; Саратов</div>
								<div>&mdash; Сургут</div>
								<div>&mdash; Уфу и Челябинск</div>
								<div>&mdash; Барнаул</div>
								<div>&mdash; Иркутск</div>
								<div>&mdash; Йошкар-Ола</div>
							</td>
							<td>
								<div>&mdash; Кемерово</div>
								<div>&mdash; Курск</div>
								<div>&mdash; Новокузнецк</div>
								<div>&mdash; Оренбург</div>
								<div>&mdash; Сочи</div>
								<div>&mdash; Ставрополь</div>
								<div>&mdash; Сыктывкар</div>
								<div>&mdash; Томск</div>
							</td>
						</tr>
					</table>
				</div>
				<p>Оплатить счет выбранным способом</p>
			</div>
			<div class="step-4">Ваши данные (имя и e-mail)<br />останутся на 100%<br />конфиденциальными.</div>
			<div class="step-5">После оплаты и не менее чем за три<br />дня до начала курса &mdash; вам придет<br />уведомления о дальнейших<br />действиях.</div>
		</div>

		<div class="bottom">
			<p>Возникли трудности с оформлением заказа?</p>

			<div class="mail">
				<div class="label">Напишите на e-mail службы поддержки:</div>
				<a href="mailto:support@imsider.ru">support@imsider.ru</a>
			</div>
			<div class="phone">
				<div class="label">Или позвоните по бесплатному номеру</div>
				<div class="number">8-800-333-07-63 <span class="free">(бесплатно с территории России)</span></div>
			</div>

			<div class="clear"></div>
			<div class="time">Служба поддержки работает <span>с 10:00 до 19:00 по московскому времени.</span></div>
		</div>
	</div>
</div>

<div id="preload">
	<!--script src="js/jquery-1.8.3.min.js"></script>
	<script src="js/jquery.formstyler.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery-ui-1.9.2.custom.min.js"></script>
	<script src="js/jquery.countdown.js"></script>
	<script src="js/jquery.countdown-ru.js"></script>
	<script src="js/jquery.reject.js"></script>
	<script src="js/jquery.activity.min.js"></script>
	<script src="js/social-likes.min.js"></script>
	<script src="js/main.js"></script-->
<?
	$js = array();
	foreach (glob('js/*.js') as $filename) {
		array_push($js, substr($filename, 3));
	}
?>
	<script type="text/javascript" src="combiner/?type=javascript&files=<?= implode(",", $js) ?>"></script>

	<!-- дата и время для счетчика -->
	<script>
		var counter_time_left = <?=$diff;?>;
	</script>

	<!-- Google Analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-29022975-1', 'imsider.ru');
		ga('send', 'pageview');

	</script>
	<!-- / Google Analytics -->

	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
		(function (d, w, c) {
			(w[c] = w[c] || []).push(function() {
				try {
					w.yaCounter12922898 = new Ya.Metrika({id:12922898,
						webvisor:true,
						clickmap:true,
						trackLinks:true,
						accurateTrackBounce:true});
				} catch(e) { }
			});

			var n = d.getElementsByTagName("script")[0],
				s = d.createElement("script"),
				f = function () { n.parentNode.insertBefore(s, n); };
			s.type = "text/javascript";
			s.async = true;
			s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

			if (w.opera == "[object Opera]") {
				d.addEventListener("DOMContentLoaded", f, false);
			} else { f(); }
		})(document, window, "yandex_metrika_callbacks");
	</script>
	<noscript><div><img src="//mc.yandex.ru/watch/12922898" style="position:absolute; left:-9999px;" alt=""/></div></noscript>
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

	<!-- GetResponse tracking code -->
	<script type="text/javascript">
		var gr_goal_params = {
			param_0 : '',
			param_1 : '',
			param_2 : '',
			param_3 : '',
			param_4 : '',
			param_5 : ''
		};</script>
	<script type="text/javascript" src="https://app.getresponse.com/goals_log.js?p=42604&u=SwZy"></script>
	<!-- / GetResponse tracking code -->
</div>
</body>
</html>