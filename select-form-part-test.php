<?function time_left_text($time, $period)
{
    // http://petrenco.com/php.php?txt=122
    $arr['s'] = array('секунда', 'секунды', 'секунд');
    $arr['m'] = array('минута', 'минуты', 'минут');
    $arr['h'] = array('час', 'часа', 'часов');
    $arr['d'] = array('день', 'дня', 'дней');
    $arr['M'] = array('месяц', 'месяца', 'месяцев');
    $arr['Y'] = array('год', 'года', 'лет');
    $arr['Y2'] = array('года', 'лет', 'лет');
    $time_abs = abs($time);

    $time_abs = intval(substr($time_abs, -2));
    if ($time_abs > 19)
        $time_abs = intval(substr($time_abs, -1));

    $sec_arr[0] = array(2,3,4);
    $sec_arr[1] = array(0,5,6,7,8,9);
    if ($time_abs == 1)
        $ret = $arr[$period][0];
    else if (in_array($time_abs, $sec_arr[0]))
        $ret = $arr[$period][1];
    else if (($time_abs >= 5 AND $time_abs <= 20) OR $time_abs == 0)
        $ret = $arr[$period][2];

    return $ret;
}?>
<?function selectBlock($header,$counter) {?>
	<section class="select-form-part">
	<div class="wrap">
		<h1 style="margin-top: -30px;"><?= $header ?></h1>
		<div class="imsider-logo"></div>
		<p class="counter_header">Действует раннее бронирование на специальных условиях. <strong>Цена вырастет через:</strong></p>
		<p class="counter"></p>

		<div class="form-table-wrap">
			<table class="form-table">
				<thead>
				<tr>
						<td>
							<div class="title">Новичок</div>
							<div class="price">14 900<span class="rub">i</span></div>
							<ul class="stars">
								<li class="act"></li>
								<li></li>
								<li></li>
								<li></li>
								<li></li>
								<li></li>
							</ul>
							<div class="clear"></div>
							<div class="price_counter">Следующая цена <s>17 900</s><span class="rub">i</span> через <?= $counter." ".time_left_text($counter, 'd') ?></div>
						</td>
				  <td>
						<div class="title">VIP. Готовый бизнес.</div>
						<div class="price">27 900<span class="rub">i</span></div>
						<ul class="stars">
							<li class="act"></li>
							<li class="act"></li>
							<li class="act"></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
						<div class="clear"></div>
						<div class="price_counter">Следующая цена <s>32 500</s><span class="rub">i</span> через <?= $counter." ".time_left_text($counter, 'd') ?></div>
					</td>
					<td>
						<div class="title">Ultra-VIP</div>
						<div class="price">59 900<span class="rub">i</span></div>
						<ul class="stars">
							<li class="act"></li>
							<li class="act"></li>
							<li class="act"></li>
							<li class="act"></li>
							<li class="act"></li>
							<li class="act"></li>
						</ul>
						<div class="clear"></div>
						<div class="price_counter">Следующая цена <s>67 500</s><span class="rub">i</span> через <?= $counter." ".time_left_text($counter, 'd') ?></div>
					</td>
				</tr>
				</thead>
				<tbody>
				<tr>
						<td><ul>
						<li>Живые и онлайн (для регионов) встречи (минимум 15 занятий)</li>
						<li>LIVE тренинг в Москве с прямым эфиром на весь мир</li>
						<li>Доступ в Битву интернет-магазинов (для 10 лучших участников)</li>
						<li>Доступ к шаблонам дизайна<br />
							и рекламы, которыми будем пользоваться мы</li>
                        <li>Сертификат о прохождении тренинга</li>
						</ul></td>
					<td><ul>
                    	<li>Живые и онлайн (для регионов) встречи (минимум 15 занятий)</li>
                        <li>LIVE тренинг в Москве с прямым эфиром на весь мир</li>
                        <li>Доступ в Битву интернет-магазинов (для 10 лучших участников)</li>
                        <li>Доступ к шаблонам дизайна<br />
                          и рекламы, которыми будем пользоваться мы</li>
						<li>Возможность посещения офисов наших интернет-магазинов с изучением всех бизнес-процессов</li>
						<li>Готовый одностраничный сайт с правками от команды Николая Федоткина</li>
						<li>Дополнительные 4 личных занятия, где тренеры работают над вашим бизнесом</li>
						<li>Сертификат о прохождении тренинга</li>
					</ul></td>
					<td><ul>
						<li>Участие в <a href="http://intensive.imsider.ru/?ad=92146" target="_blank">Интенсиве</a> (тариф VIP)</li>
						<li>Живые и онлайн (для регионов) встречи (минимум 15 занятий)</li>
                        <li>LIVE тренинг в Москве с прямым эфиром на весь мир</li>
                        <li>Доступ в Битву интернет-магазинов (для 10 лучших участников)</li>
                        <li>Доступ к шаблонам дизайна<br />
                          и рекламы, которыми будем пользоваться мы</li>
						<li>Дополнительные 8 личных занятиq, где тренеры работают над вашим бизнесом</li>
						<li>Тактическая коучинговая сессия с Николаем Федоткиным</li>
						<li>Поддержка тренеров по e-mail в течение года</li>
						<li>Возможность посещения офисов наших интернет-магазинов с изучением всех бизнес-процессов</li>
						<li>Готовый одностраничный сайт с правками лично от Николая Федоткина</li>
						<li>Городской московский номер, на который Ваши клиенты смогут звонить Вам</li>
						<li>500 минут  работы Call Center по обработке Ваших заказов с возможностью продления</li>
						<li>Склад для хранения Ваших товаров</li>
						<li>Упаковка и доставка Ваших товаров</li>
						<li>Персональная работа с вашими текстами</li>
						<li>Эксклюзивный тренинг "Личная эффективность"</li>
						<li>Закрытый тренинг "Продающее видео"</li>
						<li>Мастер-класс "Колл-центр на миллион своими руками"</li>
						<li>Сертификат о прохождении тренинга</li>
					</ul></td>
				</tr>
				</tbody>
				<tfoot>
				<tr>
						<td>
							<div class="goal">
								<p>Цель:</p>
								<p class="value">30 000 руб</p>
							</div>
							<a href="http://imsider.justclick.ru/order/bpk2-testdrive/?required=phone&tag=<?=$tag;?>" target="_blank" class="btn">Открыть бизнес</a>
						</td>
					<td><div class="goal">
							<p>Цель:</p>
							<p class="value">100 000+ руб</p>
						</div>
						<a href="http://imsider.justclick.ru/order/bpk2-novichok/?required=phone&tag=<?=$tag;?>" target="_blank" class="btn">Открыть бизнес</a></td>
					<td><div class="goal">
							<p>Цель:</p>
							<p class="value">300 000+ руб</p>
						</div>
						<a href="http://imsider.justclick.ru/order/bpk2-VIP/?required=phone&tag=<?=$tag;?>" target="_blank" class="btn">Открыть бизнес</a></td>
				</tr>
				</tfoot>
			</table>
		</div>
		<div class="agreement">
			<label>
				<!--input type="checkbox"-->Нажимая кнопку Участвовать или Победить, вы принимаете условия <a href="http://imsider.ru/wppage/publichnyiy-dogovor-oferta-po-okazaniyu-informatsionno-konsultativnyih-uslug/" target="_blank">Договора-оферты</a>
			</label>
		</div>
	</div>
</section>
<? }  ?>