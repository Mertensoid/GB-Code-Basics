<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Угадайка (2 игрока)</title>
	<link rel="stylesheet" href="style.css">

	<script type="text/javascript">

		var answer = parseInt(Math.random() * 100);
		var tryCount = 0;
		var maxTryCount = 3;

		function readInt1(){
			var number = document.getElementById("userAnswer1").value;
			return parseInt(number);
		}
		function readInt2(){
			var number = document.getElementById("userAnswer2").value;
			return parseInt(number);
		}

		function write(text){
			document.getElementById("info").innerHTML = text;
		}

		function hide(){
			document.getElementById("button").style.display = "none";
			document.getElementById("userAnswer1").style.display = "none";
			document.getElementById("userAnswer2").style.display = "none";
			document.getElementById("player1").style.display = "none";
			document.getElementById("player2").style.display = "none";
		}

		function guess(){
			tryCount++;

			var userAnswer1 = readInt1();
			var userAnswer2 = readInt2();

			if ((userAnswer1 == answer) && (userAnswer2 == answer)) {
				write("Поздравляем! Оба игрока угадали! Ничья!");
				hide();
			} else if ((userAnswer1 == answer) && (userAnswer2 != answer)) {
				write("Поздравляем! Игрок 1 угадал!");
				hide();
			} else if ((userAnswer1 != answer) && (userAnswer2 == answer)) {
				write("Поздравляем! Игрок 2 угадал!");
				hide();
			} else if (tryCount < maxTryCount){ 
				if ((userAnswer1 < answer) && (userAnswer2 < answer)) {
					write("Загаданное число больше!<br>Попробуйте еще раз!");
				} else if ((userAnswer1 > answer) && (userAnswer2 > answer)) {
					write("Загаданное число меньше!<br>Попробуйте еще раз!");
				} else if ((userAnswer1 > answer) && (userAnswer2 < answer)) {
					write("Игрок 1 указал слишком большое число!<br>Игрок 2 указал слишком маленькое число!<br>Попробуйте еще раз!");
				} else {
					write("Игрок 1 указал слишком маленькое число!<br>Игрок 2 указал слишком большое число!<br>Попробуйте еще раз!");
				}
			} else {
				write("Вы проиграли<br>Правильный ответ: " + answer);
				hide();
			}
		}
	</script>

</head>
<body>
	<div class="content">
		<?php
			include "menu.php"
		?>
		<div class="contentWrap">
		    <div class="content">
		        <div class="center">
					<h1>Игра угадайка</h1>
					<div class="box">

						<p id="info">Угадайте число от 0 до 100</p>
						<p id="player1">Игрок 1: <input type="text" id="userAnswer1"></p>
						<p id="player2">Игрок 2: <input type="text" id="userAnswer2"></p>
						<a href="#" onClick="guess();" id="button">Начать</a>				
					</div>
		        </div>
		    </div>
		</div>
	</div>
	<div class="footer">
		Copyright &copy; Matsuk Maksim
	<div>
</body>
</html>