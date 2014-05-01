<?
	function prepareTag(){
		$params = array('utm_medium','utm_source','utm_campaign');
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
/*	$now = time();
	$interval = 168 * 60 * 60;
	if(isset($_COOKIE['time_start']) && $_COOKIE['time_start'] > $now - $interval)
		$diff = $_COOKIE['time_start'] + $interval - $now;
	else {
		$diff = $interval;
		setcookie('time_start', $now, $now + $interval);
	}*/
	// --

	// -- счетчик на фиксированную дату
	$date2 = '2014-03-16 23:59:59'; // дата и время для счетчика
	$date1 = 'now';

	$diff = strtotime($date2) - strtotime($date1); // разница в секундах
	if ($diff < 0) $diff = 0;

	$ad = $_GET['ad'] ? '&ad=' . intval($_GET['ad']) : '';
	// --
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=940">
	<meta name="description" content="">

	<link rel="shortcut icon" type="image/x-icon" href="img/icons/ico16.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/icons/ico144.png">
	<link rel="apple-touch-icon-precomposed" sizes="64x64" href="img/icons/ico64.png">

	<title>Реалити. Готовый бизнес под ключ</title>

	<link href='http://fonts.googleapis.com/css?family=Russo+One&subset=latin,cyrillic,latin-ext' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic&subset=cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>

	<link href="css/clear.css" type="text/css" rel="stylesheet">
	<link href="css/jquery.formstyler.css" type="text/css" rel="stylesheet">
	<link href="css/jquery-ui-1.9.2.custom.css" type="text/css" rel="stylesheet">
	<link href="css/flipclock.css" type="text/css" rel="stylesheet">
	<link href="css/jquery.reject.css" type="text/css" rel="stylesheet">
	<link href="css/social-likes.css" type="text/css" rel="stylesheet">
	<link href="css/common.css" type="text/css" rel="stylesheet">

	
</head>
<body>

<section class="logo">
	<div class="wrap">
		<div class="current_date">7 апреля</div>
		<div class="online-store-from-scratch">
            <span class="key">Интернет-магазин под ключ</span>
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
				<!--span class="rub">i</span-->
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

<section class="video">
	<a name="scroll-1"></a>
	<div class="wrap">
		<h1>Реалити. Готовый интернет-магазин под ключ. Причины пойти</h1>
        <p>&nbsp;</p>
        <div class="video-wrap">
            <div class="video" data-videoId="mKtlReCKeNU">
                <img src="img/video_big.jpg" width="852" height="480">
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

<section class="select-form-part">
	<div class="wrap">
		<h1>Действуйте прямо сейчас</h1>
		<div class="imsider-logo"></div>
		<p class="counter_header">Действует раннее бронирование на специальных условиях. <strong>Цена вырастет через:</strong></p>
		<p class="counter"></p>

		<div class="form-table-wrap">
		    <table class="form-table">
		      <thead>
		        <tr>
		          <td><div class="title">Новичок</div>
		            <div class="price">12 900<span class="rub">i</span></div>
		            <ul class="stars">
		              <li class="act"></li>
		              <li class="act"></li>
		              <li class="act"></li>
		              <li></li>
		              <li></li>
		              <li></li>
	                </ul>
		            <div class="clear"></div></td>
		          <td><div class="title">VIP. Готовый бизнес.</div>
		            <div class="price">34 900<span class="rub">i</span></div>
		            <ul class="stars">
		              <li class="act"></li>
		              <li class="act"></li>
		              <li class="act"></li>
		              <li class="act"></li>
		              <li class="act"></li>
		              <li class="act"></li>
	                </ul>
		            <div class="clear"></div></td>
	            </tr>
	          </thead>
		      <tbody>
		        <tr>
		          <td><ul>
		            <li>Живые и онлайн (для регионов) встречи (минимум 15 занятий)</li>
		            <li>LIVE тренинг в Москве с прямым эфиром на весь мир</li>
		            <li>Доступ в Битву интернет-магазинов (для 10 лучших участников)</li>
		            <li>Возможность пройти Школу интернет-магазинов в следующем потоке на льготных условиях и бесплатно в последующих (если в текущем не зафиналите по уважительной причине)</li>
		            <li>Доступ к шаблонам дизайна<br />
		              и рекламы, которыми будем пользоваться мы</li>
		            <li>Готовый одностраничный сайт</li>
		            <li>Сертификат о прохождении тренинга</li>
		            </ul></td>
		          <td><ul>
		            <li class="selected">Все опции блока<br />
		              &laquo;Новичок&raquo;</li>
		            <li>Участие в <a href="http://intensive.imsider.ru/?ad=92146" target="_blank">Интенсиве</a> (тариф VIP)</li>
		            <li>Дополнительные 6 занятий, где тренеры работают над вашим бизнесом</li>
		            <li>Тактическая коучинговая сессия с Николаем Федоткиным</li>
		            <li>Поддержка тренеров по e-mail в течение года</li>
		            <li>Возможность посещения офисов наших интернет-магазинов с изучением всех бизнес-процессов</li>
		            <li> Городской московский номер, на который Ваши клиенты смогут звонить Вам</li>
		            <li>500 минут  работы Call Center по обработке Ваших заказов с возможностью	                продления</li>
		            <li>Склад для хранения Ваших товаров</li>
		            <li>Упаковка и доставка Ваших товаров</li>
		            <li>Сертификат о прохождении тренинга</li>
		            </ul></td>
	            </tr>
	          </tbody>
		      <tfoot>
		        <tr>
		          <td><div class="goal">
		            <p>Цель:</p>
		            <p class="value">100 000+ руб</p>
		            </div>
		            <a href="http://imsider.justclick.ru/order/business_pod_kluch-novichok/?required=phone&tag=<?=$tag;?>" target="_blank" class="btn">Открыть бизнес</a></td>
		          <td><div class="goal">
		            <p>Цель:</p>
		            <p class="value">300 000+ руб</p>
		            </div>
		            <a href="http://imsider.justclick.ru/order/businiess_pod_kluch-VIP/?required=phone&tag=<?=$tag;?>" target="_blank" class="btn">Открыть бизнес под ключ</a></td>
	            </tr>
	          </tfoot>
	        </table>
	      </div>
		<div class="agreement">
			<label>
				<!--input type="checkbox"-->Нажимая кнопку Открыть бизнес или Открыть бизнес под ключ, вы принимаете условия <a href="http://imsider.ru/wppage/publichnyiy-dogovor-oferta-po-okazaniyu-informatsionno-konsultativnyih-uslug/" target="_blank">Договора-оферты</a>
			</label>
		</div>
	</div>
</section>

<section class="footer">
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

<div id="preloader">
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

<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/jquery.formstyler.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="js/prefixfree.min.js"></script>
<script src="js/jquery.countdown.js"></script>
<script src="js/jquery.countdown-ru.js"></script>
<script src="js/jquery.reject.js"></script>
<script src="js/jquery.activity.min.js"></script>
<script src="js/social-likes.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>