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
						<li><a href="/admin/services/Электрика/">Электрика</a></li>
						<li><a href="/admin/services/Сантехника">Сантехника</a></li>
						<li><a href="/admin/services/Ремонт и установка бытовой техники">Ремонт и установка бытовой техники</a></li>
						<li><a href="/admin/services/Ремонтно-строительные работы по дому/">Ремонтно-строительные работы по дому</a></li>
						<li><a href="/admin/services/Ремонт вентиляции/">Ремонт вентиляции</a></li>
					</ul>
		        </li>
		        <li><a href="/contacts/">Контакты</a></li>
		    	<li><a href="/reviews/">Отзывы</a></li>  
		    </ul>
		</nav>
	</header>
	<body>
		<section id="contacts">
			<table border="1">
				<tr>
					<th>mobile</th>
					<th>mail</th>
					<th>profi</th>
					<th>yandex</th>
				</tr>
				<tr>
					<td>{{ $number }}</td>
					<td>{{ $mail }}</td>
					<td>{{ $profi }}</td>
					<td>{{ $yandex }}</td>
				</tr>
			</table>	
		</section>
		<section>
			<form action="/admin/contacts/1" method="GET">
				<label>Mobile:</label><br>
				<input type="" name="mobile" value="{{ $number }}"><br><br>
				<label>mail</label><br>
				<input type="" name="mail" value="{{ $mail }}"><br><br>
				<label>ProfiRU</label><br>
				<input type="" name="profi" value="{{ $profi }}"><br><br>
				<label>Yandex</label><br>
				<input type="" name="yandex" value="{{ $yandex }}"><br><br>
				<input type="submit" name="submit">
			</form>
		</section>
	</body>
	<footer>
		
	</footer>
</body>
</html>