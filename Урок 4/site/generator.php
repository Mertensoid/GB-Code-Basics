<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Генератор случайных паролей</title>
	<link rel="stylesheet" href="style.css">

	<script type="text/javascript">
		var passLength = 0;
		var pass = "";
		var charsForPass = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","0","1","2","3","4","5","6","7","8","9"];

		function readInt(){
			var number = document.getElementById("passLength").value;
			return parseInt(number);
		}

		function generate(passLength, charsForPass){
			passLength = readInt();
			for (var i = 0; i < passLength; i++) {
				var newChar = charsForPass[parseInt(Math.random() * charsForPass.length)];
				pass += newChar;
			}
			document.getElementById("info").innerHTML = "Ваш пароль: " + pass;
			pass = "";
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
					<h1>Генератор случайных паролей</h1>
					<div class="box">

						<p id="info">Укажите желаемую длину пароля</p>
						<input type="text" id="passLength">
						<br>
						<a href="#" onClick="generate(passLength, charsForPass);" id="button">Сгененрировать</a>				
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