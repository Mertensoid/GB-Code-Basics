<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
</head>
<body>

<div class="content">
<?php
	include "menu.php";
?>

	<h1>Личный сайт студента GeekBrains</h1>

	<div class="center">
	<img src="img/my_avatar_edit.jpg">
		<div class="box_text">
			<p><b>Добрый день</b>. Меня зовут <i>Максим Мацук</i>. Я совсем недавно начал программировать, однако уже написал свой первый сайт.</p>

			<p>В этом мне помог IT-портал <a href="https://geekbrains.ru">GeekBrains</a></p>

			<p>На этом сайте вы сможете сыграть в несколько игр, которые я написал: <br>
			<a href="#">Главная</a>,
			<a href="puzzle.html">Загадки</a>,
			<a href="guess.html">Угадайка</a>,
			<a href="guess-multi.html">Угадайка (2 игрока)</a>
			</p>
		</div>
	</div>
</div>
<div class="footer">
	Copyright &copy; <?php echo date("Y");?> Matsuk Maksim
<div>


</body>
</html>