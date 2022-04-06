<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="Нужна Реальная автоматизация?
	Мы поможем найти узкие места в бизнесе любого размера. Посоветуем. Автоматизируем. Обучим.
	Обладаем более чем 10-летним опытом работы на платформе 1С."/>
	<meta name="keywords" content="1c, автоматизация предприятия, обновление 1с, конфигурации, нетиповые конфигурации,
	1с предприятие, 1с бухгалтерия, сопровождение нетиповых 1с"/>
	<title>Домашняя страница | ИжТиСи</title>
	<link href="/css/all.css" rel="stylesheet" />
	<script type="text/javascript" src="/js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="/js/main.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<div class="divimg">
		<header>
			<img src="img/logo.png" style="padding-top: 15px; padding-left: 20px; float: left;">
			<a href="#adout" class="nav1">О компании</a>
			<a href="#uslugi" class="nav2">Услуги</a>
			<a href="#prod" class="nav3">Продукты</a>
			<a href="#price" class="nav4">Прайс</a>
			@guest('web')
				<a href="{{ route('login')}}" class="nav5">Войти</a>
			@endguest
		</header>
		<div class="nav_mini">
			<a href="#adout" class="nav_mini1">О компании</a>
			<a href="#uslugi" class="nav_mini2">Услуги</a>
			<a href="#prod" class="nav_mini3">Продукты</a>
			<a href="#price" class="nav_mini4">Прайс</a>
		</div>

		<div style="">@include('inc/messages')</div>

		<nav class="down"></nav>
	</div>
	<div class="container1">
			<nav class="top"></nav>
			<div class="aboutin1" id="adout">
				<img src="img/img1.png" style="margin-top: 15px;">
				<p>«1С-ИжТиСи» — дочерняя компания фирмы «1С» с 2011 года. Нашими технологиями пользуются свыше 500 компаний-клиентов, включая 1С:Франчайзи, по всей России и СНГ — «Газпром бурение», «Черкизово», «1С-Рарус-СПб», «ЭР-Телеком Холдинг», «Башбетон» и многие другие.</p>
			</div>
			<div class="aboutin2">
				<img src="img/img1.png" class="img11">
				<p class="p1">Более 15 лет разрабатываем программные продукты</p>
				<p class="p2">Более 11 лет специализируемся на автоматизации обновления</p>
				<p class="p3">В нашей компании более 90 сотрудников</p>
				<p class="p4">Ежегодно делаем свыше 5 000 проектов обновлений</p>
				<p class="p5">Удаленно решаем задачи для пользователей 1С</p>
				<p class="p6">Обновляем любые нетиповые конфигурации 1С</p>
			</div>
	</div>

	<div class="container2" id="uslugi">
		<div class="incontainer2">
			<p>Наши услуги</p>
			<div class="inc_block1">
				<img src="img/img1.png" style="margin-top: 15px;" class="img_block1">
				<p>Экономичное, но качественное решение для регулярного обновления вашей измененной конфигурации 1С.</p>
			</div>
			<div class="inc_block2">
				<img src="img/img1.png" style="margin-top: 15px;" class="img_block1">
				<p> Весь комплекс работ по комплексному решению 1С для малого и среднего бизнеса. </p>
			</div>
			<div class="inc_block3">
				<img src="img/img1.png" style="margin-top: 15px;" class="img_block1">
				<p> Производим проекты сложных обновлений конфигураций с полной адаптацией доработок и сохранением данных.</p>
			</div>
			<div class="inc_block4">
				<img src="img/img1.png" style="margin-top: 15px;" class="img_block1">
				<p> Комплекс услуг по консультации, настройке, доработке и регулярным регламентным работам с вашей 1С.</p>
			</div>
			<div class="inc_block5">
				<img src="img/img1.png" style="margin-top: 15px;" class="img_block1">
				<p> Предоставляем сервис по поддержке зарегистри- рованных пользователей программных продуктов фирмы «1С». </p>
			</div>
			<div class="inc_block6">
				<img src="img/img1.png" style="margin-top: 15px;" class="img_block1">
				<p> Сократим сроки и повысим качество выпускаемых и внедряемых вами программных продуктов на базе 1С. </p>
			</div>
			<nav class="down"></nav>
		</div>
	</div>

	<div class="container3" id="prod">
		<div class="prodd">
			<p>Продукты</p>
		</div>
		<div class="prod">
			<img src="img/img1.png" style="padding-top: 20px;" class="img_prod">
			<p style="text-align:center;"> <b>Автоматизированное обновление измененных конфигураций 1С<b></p>
			<p> Эффективный инструмент для максимального облегчения и ускорения процесса обновления измененных конфигураций на платформах 8.2 и 8.3.</p>
			<label for="check_label">
				<img src="img/arrow.svg" class="img_mini">
			</label>
			<input type="checkbox" name="spoiler" id="check_label" class="inp">
			<div class="prod_block"><p>Использование продукта существенно сокращает количество ручных рутинных операций, что положительно сказывается на скорости обновления и позволяет разгрузить подключенных специалистов без ущерба качеству обновления.</p></div>
		</div>
		<div class="prod">
			<img src="img/img1.png" style="padding-top: 20px;" class="img_prod">
			<p style="text-align:center;"> <b>Автоматическое тестирование конфигураций 1С<b></p>
			<p>  Максимальная автоматическая проверка работоспособности конфигураций, разработанных на платформах 8.2 и 8.3. </p>
			<label for="check_label1">
				<img src="img/arrow.svg" class="img_mini">
			</label>
			<input type="checkbox" name="spoiler" id="check_label1" class="inp">
			<div class="prod_block"><p>«1С: Автоматическое тестирование конфигураций» — эффективный инструмент для максимальной автоматической проверки работоспособности конфигураций на платформах «1С: Предприятие 8.2» и «1С: Предприятие 8.3».</p></div>
		</div>
		<div class="prod">
			<img src="img/img1.png" style="padding-top: 20px;" class="img_prod">
			<p style="text-align:center;"> <b>Сервисы «ЛИК» для бизнеса<b></p>
			<p>   Ищите целевых клиентов и проверяйте надежность контрагентов с помощью удобных приложений: в вашей 1С или онлайн. </p>
			<label for="check_label2">
				<img src="img/arrow.svg" class="img_mini">
			</label>
			<input type="checkbox" name="spoiler" id="check_label2" class="inp">
			<div class="prod_block"><p>ЛИК:Эксперт позволяет проверить контрагентов или сформировать клиентскую базу по разнообразным показателям — финансовым, налоговым, судебным и т.п. </p></div>
		</div>
		<div class="prod">
			<img src="img/img1.png" style="padding-top: 20px;" class="img_prod">
			<p style="text-align:center;"> <b>ИТ управление: Учет и инвентаризация ПО в 1С<b></p>
			<p>   Продукт предназначен для автоматизированного учета и инвентаризации ПО, оборудования, оргтехники и любых других материальных ценностей.  </p>
			<label for="check_label3">
				<img src="img/arrow.svg" class="img_mini">
			</label>
			<input type="checkbox" name="spoiler" id="check_label3" class="inp">
			<div class="prod_block"><p>Продукт позволяет автоматически обновлять любое количество информационных баз на платформе «1С: Предприятие 8.2» и «1С: Предприятие 8.3» и решать задачи по их администрированию.</p></div>
		</div>
		<div class="prod">
			<img src="img/img1.png" style="padding-top: 20px;" class="img_prod">
			<p style="text-align:center;"> <b>Обновление информационных баз 1С в пакетном режиме<b></p>
			<p>    Автоматическое обновление любого количества информационных баз на платформах 8.2 и 8.3 решение задач по их администрированию.   </p>
			<label for="check_label4">
				<img src="img/arrow.svg" class="img_mini">
			</label>
			<input type="checkbox" name="spoiler" id="check_label4" class="inp">
			<div class="prod_block"><p>Продукт предназначен для автоматизированного учета и&nbsp;инвентаризации компьютерного парка, ПО, оргтехники и&nbsp;любых других материальных ценностей.</p></div>
		</div>
		<div class="prod">
			<img src="img/img1.png" style="padding-top: 20px;" class="img_prod">
			<p style="text-align:center;"> <b>Сервисы «ЛИК» для бизнеса<b></p>
			<p>   Ищите целевых клиентов и проверяйте надежность контрагентов с помощью удобных приложений: в вашей 1С или онлайн. </p>
			<label for="check_label5">
				<img src="img/arrow.svg" class="img_mini">
			</label>
			<input type="checkbox" name="spoiler" id="check_label5" class="inp">
			<div class="prod_block"><p>ЛИК:Эксперт позволяет проверить контрагентов или сформировать клиентскую базу по разнообразным показателям — финансовым, налоговым, судебным и т.п. </p></div>
		</div>
	</div>

	<div class="container4" id="price">
		<div class="prodd">
			<p>Прайс-лист</p>
		</div>
		<table class="table">
			<thead>
				<tr>
					<th style="width: 70%; background: #fedf43;">Наименование</th>
					<th style="background: #fedf43;">Розничная стоимость</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Разовое обновление</td>
					<td>определяется на основании оценки трудозатрат,
		в среднем 3 000 руб./релиз</td>
				</tr>
				<tr>
					<td>Обновлений одной нетиповой конфигурации на каждый выпущенный за период договора релиз (кроме ERP, КА, УХ, ЗУП, УНФ, УТ 11.5; договор заключается с актуального релиза)</td>
					<td>12 месяцев — 48 000 руб.<br>
		6 месяцев — 32 000 руб.<br>
		3 месяца — 20 000 руб.</td>
				</tr>
				<tr>
					<td>Разовое обновление нетиповой конфигурации ERP, КА, УХ, ЗУП, УНФ</td>
					<td>определяется на основании оценки трудозатрат,
		в среднем 4 500 руб./релиз</td>
				</tr>
				<tr>
					<td>Обновлений одной нетиповой конфигурации ERP, КА, УХ, УТ 11.5 на каждый выпущенный за период договора релиз (договор заключается с актуального релиза)</td>
					<td>12 месяцев — 96 000 - 250 000 руб.<br>
		6 месяцев — индивидуально<br>
		3 месяца — индивидуально</td>
				</tr>
				<tr>
					<td>Обновлений одной нетиповой конфигурации ЗУП, УНФ на каждый выпущенный за период договора релиз (договор заключается с актуального релиза)</td>
					<td>12 месяцев — 96 000 руб.<br>
		6 месяцев — 64 000 руб.<br>
		3 месяца — 40 000 руб.</td>
				</tr>
				<tr>
					<td>Установка нетиповой конфигурации на информационную базу, разово (кроме РИБ)</td>
					<td>800 руб./релиз</td>
				</tr>
					<td>Установка нетиповой конфигурации (кроме ERP, КА, УХ, УНФ) на информационную базу в рамках годового договора</td>
					<td>15 000 руб.</td>
				</tr>
					<td>Установка нетиповой конфигурации ERP, КА, УХ, УНФ на информационную базу в рамках годового договора</td>
					<td>27 000 руб.</td>
				</tr>
					<td>Стоимость обновления в рамках договора должна быть подтверждена оценкой исполнителя после обращения заказчика. Оценка стоимости исполнения работ действительная в течение 1 месяца с момента ее проведения.<br>
Стоимость установки на информационную базу может быть увеличена в зависимости от дополнительных требований заказчика.<br>
В рамках договора на Сервис обновления не производятся переходы между редакциями и подредакциями.</td>
				</tr>
				</tr>
					<td>Комплексный перевод нетиповой конфигурации "1С:Бухгалтерия" с ред. 2.0 на 3.0 (перевод на 3.0, несколько этапов тестирования, исправление ошибок, гарантии, поддержка)</td>
					<td>стоимость предоставляется на основании бесплатной оценки конфигурации</td>
				</tr>
				</tr>
					<td>Комплексный перевод нетиповых конфигураций на управляемые формы (перевод на управляемые формы, несколько этапов тестирования, исправление ошибок, гарантии, поддержка)</td>
					<td>стоимость предоставляется на основании бесплатной оценки конфигурации</td>
				</tr>
				</tr>
					<td>Состав услуги:
						1. Консультации пользователей по работе с конфигурациями на платформе «1С:Предприятие»;<br>
						2. Поиск и помощь в устранении ошибок в информационных базах «1С:Предприятие»;<br>
						3. Доработка конфигураций «1С:Предприятие»;<br>
						4. Оптимизация и ускорение работы информационных баз 1С;<br>
						5. Обновление конфигураций 1С, в том числе нетиповых.</td>
					<td>от 2 000 руб./час.</td>
				</tr>
				</tr>
					<td>Разработка на заказ</td>
					<td>от 2 700 руб./час.</td>
				</tr>
				</tr>
					<td>Консультации</td>
					<td>от 2 700 руб./час</td>
				</tr>
				</tr>
					<td>Свертка одной информационной базы</td>
					<td>от 150 000 руб. (окончательная стоимость предоставляется на основании бесплатной оценки конфигурации)</td>
				</tr>
				</tr>
					<td>Типы конфигураций:<br>
						1. Управление Торговлей 10.3<br>
						2. Бухгалтерия 2, 3<br>
						3. УПП, КА 1.1<br>
						4. Отраслевые конфигурации на базе УПП и КА 1</td>
					<td>Ориентировочная стоимость свертки:<br>
						150 000 руб.<br>
						165 000 руб.<br>
						285 000 руб.<br>
						315 000 руб.</td>
				</tr>

			</tbody>
		</table>

		<div class="contact">
			<div class="contact_block">
				<p>Наши контакты:</p>
				<p>E-mail: sale@1c-izhtc.ru<br>
Телефон: +7(912)-912-12-13<br>
Наш адрес: г. Ижевск, ул. Ленина 152</p>
				<form method="POST" action="{{ route('callback')}}">
				@csrf
					<input type="tel" name="number" id="number" class="input1" placeholder="+7(912)-122-12-31"><br>
					<input type="submit" name="" value="Позвонить мне" class="input2">

				</form>
			</div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2182.3998833208775!2d53.20574401553679!3d56.83908441515565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43e13949d0642881%3A0x4cb1d0a950447f81!2zMdChLdCY0LbQotC40KHQuA!5e0!3m2!1sru!2sru!4v1647376476258!5m2!1sru!2sru" allowfullscreen="" loading="lazy"></iframe>
		</div>
	</div>
	<footer>
		<p class="pfoot">
			E-mail: sale@1c-izhtc.ru<br>
Тел.: +7(912)-912-12-13<br>
2005-2022 ИжТиСи
		</p>
		<div class="foot">
			<div style="width: 100%">
				<img src="img/logo.png" class="logoimg">
			</div>
			<div style="margin: auto; width: 250px; height: 50px; margin-top: 20px;">
				<img src="img/twit.png" style="width: 48px; height: 48px; float: left; margin-right: 19px;" class="socimg">
				<img src="img/vk.png" style="width: 48px; height: 48px; float: left; margin-right: 19px;" class="socimg">
				<img src="img/face.png" style="width: 48px; height: 48px; float: left; margin-right: 19px;"class="socimg">
				<img src="img/inst.png" style="width: 48px; height: 48px; float: left;">
			</div>
		</div>
	</footer>
</body>
</html>
