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
		        <li><a href="/admin/">Главная Админка</a></li>
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
		<section>
			<h1>@yield('services')</h1>
			<p>description</p>
		</section>
		<section>
			<table border="1">
				<tr>
					<td>name</td>
					<td>price</td>
				</tr>
				@yield('price')
			</table>
		</section>
		<section>
			@yield('session')
		</section>
		<section id="feedback">
			<form action="/services/@yield('services')/send" method="GET">
				<label>Имя</label><br>
				<input type="text" name="name"><br><br>
				<label>Телефон</label required><br>
				<input type="text" name="mobile"><br><br>
				<label>Какая услуга?</label><br>
				<select name="service">
					<option selected >@yield('services')</option>
				</select><br><br>
					<label>Комментарии:</label><br>
				<textarea name="text"></textarea><br>
				<p>Пример: Уточните время для звонка. Пример: Уточните вопрос.</p>
				<p><input type="checkbox" required> Я даю согласие этому сайту хранить информацию, предоставленную мной, чтобы получить ответ на свой запрос.</p>
				<input type="submit" name="feedback">
			</form>
		</section>
	</main>
	<footer></footer>
</body>
</html>