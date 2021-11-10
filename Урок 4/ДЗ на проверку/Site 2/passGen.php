<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>

<?php
	include "menu.php";
?>

<div class="contentWrap">
	<div class="content">
		<div class="center">

			<h1>Генератор пароля</h1>

			<div class="box">

				<?php

					if(isset($_GET['lenght'])){
						$symbols = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","0","1","2","3","4","5","6","7","8","9");
						$lenght = $_GET["lenght"];
						$passWord = "";
						$symbolCount = count($symbols)-1;
						for ($i=0; $i<$lenght; $i++){
							$symNumber = rand(0, $symbolCount);
							$passWord = $passWord.$symbols[$symNumber];
						}

						echo "Ваш пароль: ". $passWord;
						
					}

				?>

				<form method ="GET">
					<p>Введите желаемую длину пароля:</p>
					<input type="text" name="lenght">
					<br>
					<br>
					<br>
					<input type="submit" value="Сгенерировать" name="">
				</form>

			</div>
		</div>
	</div>
</div>
		

<div class="footer">
	Copyright &copy; <?php echo date("Y");?> @ASh1ne
</div>

</body>
</html>