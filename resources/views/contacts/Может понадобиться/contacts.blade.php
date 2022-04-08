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
	<body>
		<section id="contacts">
			<h2>Контакты</h2>
			<ul>
				<li>
					<img src="">
					<p>{{ $number }}</p>
				</li>
				<li>
					<img src="">
					<p>{{ $mail }}</p>
				</li>
				<li>
					<img src="">
					<a href="{{ $profi }}">Профиль на Profi.ru</a>
				</li>
				<li>
					<img src="">
					<a href="{{ $yandex }}">Профиль на Яндекс Услуги</a>
				</li>
			</ul>
		</section>
		<section>
			{{ $session }}
		</section>
		<section id="feedback">
			<form action="/contacts/send/" method="GET">
				<label>Имя</label><br>
				<input type="" name="name"><br><br>
				<label>Телефон</label><br>
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
				<p><input type="checkbox"> Я даю согласие этому сайту хранить информацию, предоставленную мной, чтобы получить ответ на свой запрос.</p>
				<input type="submit" name="feedback">
			</form>
		</section>
	</body>
	<footer>
		
	</footer>
</body>
</html>