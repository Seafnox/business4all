<?php function selectBlock($header) { ?>
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
                    <? if (isset($_GET['testdrive'])) { ?>
                        <td><div class="title">Testdrive</div>
                            <div class="price">8 900<span class="rub">i</span></div>
                            <ul class="stars">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <div class="clear"></div></td>
                    <? } ?>
                    <td><div class="title">Новичок</div>
                        <div class="price">18 900<span class="rub">i</span></div>
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
						<div class="price">44 900<span class="rub">i</span></div>
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
                    <? if (isset($_GET['testdrive'])) { ?>
                        <td><ul>
                            <li>LIVE тренинг в Москве с прямым эфиром на весь мир</li>
                            <li>Доступ к шаблонам дизайна<br />
                                и рекламы, которыми будем пользоваться мы</li>
                            <li>Готовый одностраничный сайт</li>
                            <li>Сертификат о прохождении тренинга</li>
                        </ul></td>
                    <? } ?>
					<td><ul>
                        <li>Живые и онлайн (для регионов) встречи (минимум 15 занятий)</li>
                        <li>LIVE тренинг в Москве с прямым эфиром на весь мир</li>
                        <li>Доступ в Битву интернет-магазинов (для 10 лучших участников)</li>
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
						<a href="http://imsider.justclick.ru/order/bpk2-VIP/?required=phone&tag=<?=$tag;?>" target="_blank" class="btn">Открыть бизнес под ключ</a></td>
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
<?php }  ?>