<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<header>
		<nav>
			<ul class="topmenu">
				<li><a href="/admin/">АДМИН</a></li>
		        <li><a href="/">Алексей Беляков</a></li>
		        <li><a href="/main/">Главная</a></li>
		        <li><a href="" class="submenu-link">Услуги и цена</a>
					<ul class="submenu">
						<li><a href="/services/Электрика/">Электрика</a></li>
						<li><a href="/services/Сантехника">Сантехника</a></li>
						<li><a href="/services/Ремонт и установка бытовой техники">Ремонт и установка бытовой техники</a></li>
						<li><a href="/services/Ремонтно-строительные работы по дому/">Ремонтно-строительные работы по дому</a></li>
						<li><a href="/services/Ремонт вентиляции/">Ремонт вентиляции</a></li>
					</ul>
		        </li>
		        <li><a href="/contacts/">Контакты</a></li>
		    	<li><a href="/reviews/">Отзывы</a></li>  
		    </ul>
		</nav>	
	</header>
	<main>
		<section id="aboutMe">
			<p id="number">8 965 209 22 58</p>
			<h1>Обо мне</h1>
			<p>Здравствуйте меня зовут Алексей, я работаю техником более 15 лет. Занимаюсь обслуживанием и ремонтом инженерных систем (электроснабжение, водоснабжение, канализация, вентиляция, кондиционирование, ремонтом оборудования, ремонтно-строительные работы).</p>
			<img src="">
		</section>
		<section id="myServices">
			<div id="description">
				<p>МОИ</p>
				<h1>УСЛУГИ</h1>
				<p>Вашему вниманию!
				Предоставлю услуги техника по ремонту.
				Электрик — любые работы с электричеством.
				Сантехник — любые работы  с водой и канализацией  (устранение протечки/засора,  обновление герметика)
				Подключение посудомоечной, стиральной машины. Подключение электрической плиты, варочной панели, духовного шкафа.
				Чистка от накипи бойлера, ремонт.
				Слесарные работы.
				Мелкие ремонтные работы по дому.
				Пишите, звоните.  <span class="yellow">вацап</span>, <span class="purple">вайбер</span>, <span class="blue">телеграм</span>, <span class="purple">почта</span>.</p>
			</div>
			<div id="electrics"><!--Электрика-->
				<img src="">
				<h2>Электрика</h2>
				<h3>От 750 руб.</h3>
				<ul>
					<li>Ремонт.</li>
					<li>Установка.</li>
					<li>Обслуживание.</li>
					<li>Метрологические услуги.</li>
				</ul>
				<a href="/electrics/">Перейти</a>
			</div>
			<div id="plumbing"><!--Сантехника-->
				<img src="">
				<h2>Сантехника</h2>
				<h3>От 750 руб.</h3>
				<ul>
					<li>Устранение протечки.</li>
					<li>Устранение засора.</li>
					<li>Замена неисправного оборудования.</li>
					<li>Установка нового.</li>
					<li>Метрологические услуги.</li>
				</ul>
				<a href="/plumbing/">Перейти</a>
			</div>
			<div id="appliances"><!--Бытовая техника-->
				<img src="">
				<h2>Ремонт и установка бытовой техники</h2>
				<h3>От 750 руб.</h3>
				<ul>
					<li>Диагностика.</li>
					<li>Ремонт.</li>
					<li>Обслуживание.</li>
					<li>Установка.</li>
				</ul>
				<a href="/appliances/">Перейти</a>
			</div>
			<div id="workAtHome "><!--Работа по дому-->
				<img src="">
				<h2>Ремонтно-строительные работы</h2>
				<h3>От 750 руб.</h3>
				<ul>
					<li>Ремонт мебели.</li>
					<li>Сборка мебели.</li>
					<li>Повесить полочку.</li>
				</ul>
				<a href="/workathome/">Перейти</a>
			</div>
			<div id="ventilation"><!--Вентиляция-->
				<img src="">
				<h2>Установка и ремонт вентиляции</h2>
				<h3>От 300 руб.</h3>
				<ul>
					<li>Ремонт.</li>
					<li>Обслуживание.</li>
					<li>Установка.</li>
				</ul>
				<a href="/ventilation/">Перейти</a>
			</div>
		</section>
		<section>
			{{ $session }}
		</section>
		<section id="feedback">
			<form action="/main/send/" method="GET">
				<label>Имя</label><br>
				<input type="" name="name"><br><br>
				<label>Телефон</label required><br>
				<input type="" name="mobile"><br><br>
				<label>Какая услуга?</label><br>
				<select name="service">
					<option selected></option>
					<option>Сантехника</option>
					<option>Электрика</option>
					<option>Установка и ремонт вентиляции</option>
					<option>Ремонт и установка бытовой техники</option>
					<option>Ремонтно-строительные работы</option>
				</select><br><br>
					<label>Комментарии:</label><br>
				<textarea name="text"></textarea><br>
				<p>Пример: Уточните время для звонка. Пример: Уточните вопрос.</p>
				<p><input type="checkbox" required> Я даю согласие этому сайту хранить информацию, предоставленную мной, чтобы получить ответ на свой запрос.</p>
				<input type="submit" name="feedback">
			</form>
		</section>
	</main>
	<footer>
		<p>Алексей Беляков</p>
	</footer>
</body>
</html>