<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="content">
<?php
	include "menu.php";
?>		

		<h1>Личный сайт студента GeekBrains</h1>

		<div class="center">
		<img src="img/mainFoto.jpg">
			<div class="box_text">
				<p>Добрый день и приветствую на моей первой странице! Я только начал изучать программирование и впереди будет много <b><i>непонятного и интересного.</i></b> Очень хочу получить профессию чтоб работать из любой точки мира.</p>

				<p>В обучении мне помогает IT-портал <a href="https://GeekBrains.ru" >GeekBrains</a></p>

				<p>На сайте вы увидите мои первые программы:<br>
				<a href="puzzle.php">Загадки</a>
				<a href="guess.html">Угадайка</a>
				<a href="guess2.html">Угадайка для двоих</a>
				<a href="passGen.php">Генератор паролей</a>
				</p>
			</div>
		</div>
	</div>
<div class="footer">
	Copyright &copy; <?php echo date("Y");?> @ASh1ne
</div>

</body>
</html>