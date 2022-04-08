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
			@yield('views')
			<section>
			@yield('session')
			</section>
			<section id="add">
				<div>
					<form action="/reviews/" method="GET">
						<label>Имя:</label><br>
						<input type="text" name="name"><br><br>
						<label>Какая услуга?</label><br>
						<select name="service">
							<option selected></option>
							<option>Сантехника</option>
							<option>Электрика</option>
							<option>Установка и ремонт вентиляции</option>
							<option>Ремонт и установка бытовой техники</option>
							<option>Ремонтно-строительные работы</option>
						</select><br><br>
						<label>Текст:</label><br>
						<textarea name="text"></textarea><br><br>
						<input type="submit" name="submit">
					</form>
				</div>
			</section>
		</body>
		<footer>
			
		</footer>
	</body>
</html>