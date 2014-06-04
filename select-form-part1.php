<?
	function days_left_text($days_left = 4) {
		$result_text = "";

		if (($days_left % 100) > 10 && ($days_left % 100) < 20) {
			$result_text = "дней";
		} else {
			switch ($days_left % 10){
				case 1:
					$result_text = "день";
					break;
				case 2:
				case 3:
				case 4:
					$result_text = "дня";
					break;
				default:
					$result_text = "дней";
			}
		}
		return $days_left." ".$result_text;
	}

	function selectBlock($header, $days_left) {
?>
	<section class="select-form-part">
	<div class="wrap">
		<h1 style="margin-top: -30px;"><?= $header; ?></h1>
		<div class="imsider-logo"></div>
		<p class="counter_header">Действует раннее бронирование на специальных условиях. <strong>Цена вырастет через:</strong></p>
		<p class="counter"></p>

		<div class="form-table-wrap">
			<table class="form-table">
				<thead>
				<tr>
					<? if (isset($_GET['testdrive'])) { ?>
						<td>
							<div class="title">Тест-драйв БПК</div>
							<div class="price">1 500<span class="rub">i</span></div>
							<ul class="stars">
								<li class="act"></li>
								<li></li>
								<li></li>
								<li></li>
								<li></li>
								<li></li>
							</ul>
							<div class="clear"></div>
							<div class="price_counter">Следующая цена <s>2 500</s><span class="rub">i</span> через <?= days_left_text($days_left); ?></div>
						</td>
					<? } ?>
					<td>
						<div class="title">Новичок</div>
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
						<div class="price_counter">Следующая цена <s>32 500</s><span class="rub">i</span> через <?= days_left_text($days_left); ?></div>
					</td>
					<td>
						<div class="title">VIP. Готовый бизнес.</div>
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
						<div class="price_counter">Следующая цена <s>67 500</s><span class="rub">i</span> через <?= days_left_text($days_left); ?></div>
					</td>
				</tr>
				</thead>
				<tbody>
				<tr>
					<? if (isset($_GET['testdrive'])) { ?>
						<td><ul>
							<li>Записи первых 5 занятий</li>
							<li>1 онлайн-занятие живьем</li>
							<li>PDF-версия книги &laquo;Планета Продаж&raquo; от основателей Имсайдера</li>
							<li>План-карта открытия интернет-магазина</li>
							<li>Мастер-класс &laquo;12 готовых ниш для бизнеса&raquo; (первая версия)</li>
						</ul></td>
					<? } ?>
					<td><ul>
						<li>Живые и онлайн (для регионов) встречи (минимум 15 занятий)</li>
						<li>LIVE тренинг в Москве с прямым эфиром на весь мир</li>
						<li>Доступ в Битву интернет-магазинов (для 10 лучших участников)</li>
						<li>Доступ к шаблонам дизайна<br />
							и рекламы, которыми будем пользоваться мы</li>
						<li>Готовый одностраничный сайт с правками лично от Николая Федоткина</li>
						<li>Сертификат о прохождении тренинга</li>
					</ul></td>
					<td><ul>
						<li class="selected">Все опции блока<br />
							&laquo;Новичок&raquo;</li>
						<li>Участие в <a href="http://intensive.imsider.ru/?ad=92146" target="_blank">Интенсиве</a> (тариф VIP)</li>
						<li>Дополнительные 4 личных занятия, где тренеры работают над вашим бизнесом</li>
						<li>Тактическая коучинговая сессия с Николаем Федоткиным</li>
						<li>Поддержка тренеров по e-mail в течение года</li>
						<li>Возможность посещения офисов наших интернет-магазинов с изучением всех бизнес-процессов</li>
						<li>Городской московский номер, на который Ваши клиенты смогут звонить Вам</li>
						<li>500 минут  работы Call Center по обработке Ваших заказов с возможностью продления</li>
						<li>Склад для хранения Ваших товаров</li>
						<li>Упаковка и доставка Ваших товаров</li>
						<li>Сертификат о прохождении тренинга</li>
					</ul></td>
				</tr>
				</tbody>
				<tfoot>
				<tr>
					<? if (isset($_GET['testdrive'])) { ?>
						<td>
							<div class="goal">
								<p>Цель:</p>
								<p class="value">30 000 руб</p>
							</div>
							<a href="http://imsider.justclick.ru/order/bpk2-testdrive/?required=phone&tag=<?=$tag;?>" target="_blank" class="btn">Открыть бизнес</a>
						</td>
					<? } ?>
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