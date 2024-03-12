<!DOCTYPE html>
<html lang="ru">
<head>
	<title>ГСМ-маркет</title>

	

	<meta charset="utf-8" >

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- <link rel="stylesheet" href="./assets/css/test.css"> -->

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

	<?php wp_head();?>

</head>
<body>
	<header>
		<div class="basic-info">
			<ul class = "contacts" >
						
				<li>Адрес: г. Новосибирск, ул. Переулок Комбинатский, зд. 4</li>
				<li>Режим работы: Пн-Пт. 9:00-21:00</li>
				<li>Телефон 1: <a href = "tel:+73833510440">+7 (383) <span>351-04-40</span></a></li>
				<li>Телефон 2: <a href = "tel:+73833510009">+7 (383) <span>351-00-09</span></a></li>
				<li>E-mail: <a href = "mailto:kolesooao@gmail.com">kolesooao@gmail.com</a></li>
			</ul>

			

		</div>

		<div class = "navigation">
			<div class = "logo">
				<a href="#"><img src="<?php echo get_template_directory_uri();?>./assets/img/icon.png"></a>
			</div>
			<nav class = "bottom-header">
				<ul class = "nav">
					<li class = "current"><a href="<?=get_home_url();?>">Каталог</a></li>
					<li><a href="#">Прайс-лист</a></li>
					<li><a href="#">Доставка</a></li>
					<li><a href="#">Карта нефтебаз</a></li>
					<li><a href="#">Документация</a></li>
					<li><a href="#">О компании</a></li>
					<li><a href="#">Контакты</a></li>
				</ul>
				
				<!-- <button class = "leave-application">Оставить заявку</button> -->
			</nav>
			<a href="#" class="navigation-order-button">Оставить заявку</a>
		</div>
	</header>