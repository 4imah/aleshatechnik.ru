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
		        <li><a href="/admin/">Главная Админка</a></li>
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
		        <li><a href="/admin/contacts/">Контакты</a></li>
		    	<li><a href="/admin/reviews/">Отзывы</a></li>  
		    </ul>
		</nav>	
	</header>
	<main>
		<section>
			<h1>{{ $service }}</h1>
			<p>description</p>
		</section>
		<section>
			<table border="1">
				<tr>
					<td>id</td>
					<td>name</td>
					<td>price</td>
					<td>delete</td>
					<td>edite</td>
				</tr>
				<tr>
					<td>{{$price->id}}</td>
					<td>{{$price->name}}</td>
					<td>{{$price->price}}</td>
					<td><a href="{{$service}}/{{$price->id}}">Delete</a></td>
					<td><a href="{{$service}}/add/{{$price->id}}">Edite</a></td>
				</tr>
			</table>
		</section>
		<section id="feedback">
			<form action="" method="GET">
				<label>Name</label><br>
				<input type="text" name="name" value="{{$price->name}}"><br><br>
				<label>Price</label><br>
				<input type="text" name="price" value="{{$price->price}}"><br><br>
				<label>Services</label><br>
				<input type="text" name="service" value="{{ $service }}"><br><br>
				<input type="submit" name="feedback">
			</form>
		</section>
	</main>
	<footer></footer>
</body>
</html>