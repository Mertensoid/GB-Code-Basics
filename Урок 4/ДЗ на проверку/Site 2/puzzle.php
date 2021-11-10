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

			<h1>Игра в загадки</h1>

			<div class="box">

				<?php

					if(isset($_GET['userAnswer1']) && isset($_GET['userAnswer2']) && isset($_GET['userAnswer3'])){

						$userAnswer = $_GET["userAnswer1"];
						$scoreCount = 0;
						if ($userAnswer=="замок") $score++;

						$userAnswer = $_GET["userAnswer2"];
						if ($userAnswer=="лампа"||$userAnswer=="лампочка") $score++;

						$userAnswer = $_GET["userAnswer3"];
						if ($userAnswer=="огурец"||$userAnswer=="огурцы") $score++;

						echo "Количество правильных ответов: ". $score;
					}
				?>

				<form method ="GET">
					<p>Не лает, не кусает а в дом не пускает?</p>
					<input type="text" name="userAnswer1">

					<p>Висит груша нельзя скушать?</p>
					<input type="text" name="userAnswer2">

					<p>Без окон без дверей полна горница людей</p>
					<input type="text" name="userAnswer3">
					<br>
					<br>
					<br>
					<input type="submit" value="Ответить" name="">
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